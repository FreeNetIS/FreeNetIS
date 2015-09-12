<?php

/*
 * This file is part of open source system FreenetIS
 * and it is released under GPLv3 licence.
 *
 * More info about licence can be found:
 * http://www.gnu.org/licenses/gpl-3.0.html
 *
 * More info about project can be found:
 * http://www.freenetis.org/
 *
 */

require_once __DIR__ . '/FioCsvParserUtil.php';

/**
 * Auxiliary class for parsing CSV bank account listings from czech bank
 * "FIO banka". Listing may be obtain from from the ebanking web application
 * of FIO bank.
 * 
 * The CSV format looks like this:
 * "Datum";"ID operace";"ID pokynu";"KS";"Název banky";"Název protiúčtu";
 *      "Objem";"Měna";"Protiúčet";"Kód banky";"Zadal";"SS";"Typ";"Poznámka";
 *      "VS";"Upřesnění - objem";"Upřesnění - měna";"Zpráva pro příjemce"
 * "Suma";"";"";"";"";"";"-188170,4";"CZK";"";"";"";"";"";"";"";"";"";""
 *
 * @author Ondřej Fibich <fibich@freenetis.org>
 * @since 1.2
 * @todo i18n of error messages
 */
class NewFioCsvParser
{
    /**
     * CSV column separator.
     */
    const CSV_COL_DELIM = ';';
    
    /**
     * CSV column value wrapper.
     */
    const CSV_COL_WRAPPER = '"';

    /**
     * Last line date string that is used for end of statement detection.
     */
    const HEADER_LINE_DATE_VALUE = 'Suma';

    /**
     * Default CSV file encoding.
     */
    const DEFAULT_CHARSET = 'UTF-8';

    /**
     * All fields available must be used and sorted alphabetically
     *
     * @var array[string]
     */
    private static $fields = array
    (
        'datum' => 'Datum',
        'id_pohybu' => 'ID operace',
        'id_pokynu' => 'ID pokynu',
        'ks' => 'KS',
        'nazev_banky' => 'Název banky',
        'nazev_protiuctu' => 'Název protiúčtu',
        'castka' => 'Objem',
        'mena' => 'Měna',
        'protiucet' => 'Protiúčet',
        'kod_banky' => 'Kód banky',
        'provedl' => 'Zadal',
        'ss' => 'SS',
        'typ' => 'Typ',
        'identifikace' => 'Poznámka',
        'vs' => 'VS',
        'upresneni_objem' => 'Upřesnění - objem',
        'upresneni_mena' => 'Upřesnění - měna',
        'zprava' => 'Zpráva pro příjemce'
    );

    /**
     * FIO statement columns fields names.
     *
     * @return array
     */
    public static function get_fields()
    {
        return self::$fields;
    }

    /**
     * Parse bank statement in CSV format that is passed as string.
     *
     * @param string $csv string containing the original csv file.
     * @param string $charset optional charset name of file, default is UTF-8
     * @return FioCsvStatement result
     * @throws Exception on parse error
     */
    public function parse($csv, $charset = self::DEFAULT_CHARSET)
    {
        $total_sum = -1;
        $sum = 0;
        $keys = array_keys(self::$fields);
        $lines = FioCsvParserUtil::transformFileToLineArray($csv, $charset);
        $result = new FioCsvStatement;
        // check each line of CSV
        for ($i = 0; $i < count($lines); $i++)
        {
            $line = trim($lines[$i]);
            // header
            if ($i == 0) 
            {
                $this->checkHeaders($line);
            }
            else if ($i == 1)
            {
                $total_sum = $this->parseHeaderLine($line);
            }
            else if (empty($line)) // empty last line?
            {
                break;
            }
            else
            {
                // data lines
                $cols = $this->parseLine($line, $keys);
                // add data row
                $sum += $cols['castka'];
                $result->items[] = $cols;
            }
        }
        $this->checkIntegrity($total_sum, $sum);
        return $result;
    }
    
    /**
     * Check whether parser accept given CSV file.
     * 
     * @param string $csv string containing the original csv file.
     * @param string $charset optional charset name of file, default is UTF-8
     * @return boolean
     */
    public function accept_file($csv, $charset = self::DEFAULT_CHARSET)
    {
        $lines = FioCsvParserUtil::transformFileToLineArray($csv, $charset);
        if (count($lines) < 3)
        {
            return FALSE;
        }
        try
        {
            $this->checkHeaders(trim($lines[0]));
            $this->parseHeaderLine(trim($lines[1]));
            return TRUE;
        }
        catch (Exception $ex)
        {
            return FALSE;
        }
    }

    /**
     * Parse statement header line with total sum.
     *
     * @param string $line_str raw CSV line
     */
    private function parseHeaderLine($line_str)
    {
        $fields_keys = array_keys(self::$fields);
        $columns = $this->parseLine($line_str, $fields_keys, FALSE);
        if ($columns['datum'] != self::HEADER_LINE_DATE_VALUE)
        {
            throw new Exception('Chybná hlavička výpisu.');
        }
        if (empty($columns['castka']))
        {
            throw new Exception('Chybná hlavička výpisu (suma).');
        }
        return $columns['castka'];
    }

    /**
     * Checks headers that start data part of statement.
     *
     * @param integer $header_line header line
     * @throws Exception
     */
    private function checkHeaders($header_line)
    {
        $em = __("Nelze parsovat hlavičku Fio výpisu. Ujistěte se, že jste "
                . "zvolili všech " . count(self::$fields) . " sloupců k importu "
                . "v internetovém bankovnictví.");
        $expected_header_cols = array_values(self::$fields);
        // first column has issue with some UTF-8 characters
        $fix_hl = preg_replace('/^[\x00-\x1F\x80-\xFF]+/', '', $header_line);
        // extract header
        $header_cols = str_getcsv($fix_hl, self::CSV_COL_DELIM,
                self::CSV_COL_WRAPPER);
        // check if extracted
        if (empty($header_cols))
        {
            throw new Exception($em);
        }
        // check if count match
        if (count($header_cols) != count($expected_header_cols))
        {
            throw new Exception($em);
        }
        // check each column
        for ($i = count($header_cols) - 1; $i >= 0; $i--)
        {
            if ($header_cols[$i] != $expected_header_cols[$i])
            {
                throw new Exception($em);
            }
        }
    }

    /**
     * Parse line of dump
     *
     * @param string $line
     * @param array $keys
     * @param boolean $parse_date
     * @return array
     * @throws Exception
     */
    private function parseLine($line, $keys, $parse_date = TRUE)
    {
        $cols = str_getcsv($line, self::CSV_COL_DELIM, self::CSV_COL_WRAPPER);

        if (count($cols) != count($keys))
        {
            throw new Exception('Chybný počet políček v položce výpisu.');
        }

        // Convert to associative array
        $assoc_cols = array_combine($keys, $cols);

        // Convert date
        if ($parse_date)
        {
            $assoc_cols['datum'] = FioCsvParserUtil::parseDate($assoc_cols['datum']);
        }

        // Amount has to be converted
        $assoc_cols['castka'] = FioCsvParserUtil::parseAmount($assoc_cols['castka']);

        // Trim leading zeros from VS
        $assoc_cols['vs'] = ltrim($assoc_cols['vs'], '0');
        
        // join both "upresneni"
        $assoc_cols['upresneni'] = trim($assoc_cols['upresneni_objem'] . ' ' .
                $assoc_cols['upresneni_mena']);
        
        // column prevod N/A
        $assoc_cols['prevod'] = NULL;

        return $assoc_cols;
    }

    /**
     * Checks parsed money amount agains data from integrity line.
     *
     * @param array $sum
     * @param integer $calculated_sum total counted sum
     * @throws Exception on integrity error
     */
    private function checkIntegrity($sum, $calculated_sum)
    {
        if (abs($sum - $calculated_sum) > 0.0001)
        {
            throw new Exception("Chybný kontrolní součet částky "
                    . "('$calculated_sum' != '$sum').");
        }
    }

}
