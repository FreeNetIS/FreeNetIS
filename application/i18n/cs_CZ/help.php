<?php defined('SYSPATH') or die('No direct access allowed.');
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

/**
 * This array contains czech help and hints to specific fields in tables and forms.
 * 
 * @author Jiri Svitak
 */
$lang = array
(
	'99&#37 chance you won\'t need to change this value' => '99&#37 šance, že nebudete chtít měnit tuto hodnotu.',
	'access_to_system' => 'Určuje, zda-li má uživatel možnost přihlásit se do systému Freenetis a zda má možnost využívat služeb Radius serveru napojeného na Freenetis, tedy například VPN, aktivní prvky sítě, volání z VoIP účtu atd.',
	'account_subtotal' => 'Mezisoučet určující stav účtu po započtení tohoto převodu.',
	'accounting_system' => 'Účetní osnova je hlavní pomocník pro účetního sdružení. Zobrazuje sumu peněz na účtu z pohledu účetní osnovy. Ve výchozím stavu je to částka za celou dobu fungování sdružení, lze ovšem vyfiltrovat převody za zvolené období, např. od data 2009-01-01 do data 2009-12-31.',
	'acl' => 'Jedná se o seznam definovaných přístupových pravidel. Ke každému pravidlu jsou přiřazeny ACO objekty (operace), ARO skupiny (skupiny uživatelů) a AXO objekty (objekty, nad kterými se konají operace).',
	'aco' => 'ACO objekt označuje operace, které lze provádět.',
	'aco_count' => 'Jedná se o počet položek ACO objektů přiřazených k pravidlu. ACO objekt označuje operace, které lze provádět.',
	'action_logs_active' => 'Logy akcí je nástroj pro detekci akcí koncových uživatelů na data v systému.',
	'activate_redirection_to_member' => 'Umožňuje ručně aktivovat vybrané přesměrování všem IP adresám člena. Zda si může člen sám přesměrování zrušit nebo ne, je dáno vlastností vybrané zprávy. Ruční rušení přesměrování je možné provádět v tabulce.',
	'activated_redirection' => 'Zobrazuje přesměrovaní aktivovaná pro IP adresy. Jedna IP adresa může mít aktivováno více přesměrování, uživateli je jako první zobrazeno to, které je v tabulce pro danou IP adresu nejvýše. Pořadí je určeno tím, jestli je zpráva samozrušitelná a pak datem a časem aktivace.',
	'active_link_device_templates' => 'Každé nové zařízení vyvořené pomocí vybraných šablon zařízení bude používat tento aktivní odkaz.',
	'active_link_name' => 'Jméno odkazu, pokud není zadáno, bude zobrazena adresa.',
	'active_link_title' => 'Titulek odkazu bude zobrazen při najetí na odkaz.',
	'actual_traffic %s' => 'Jedná se o provoz člena získaný z poslední aktualizace ulogd (%s). Viz Nastavení - Logování - Ulogd - Interval aktualizace.',
	'add_new_bank_transfer' => 'Umožňuje přidat ručně nový bankovní převod, který ma zdrojový i cílový účet. Typicky jde o fakturu nebo členský příspěvek. V běžném provozu využívejte automatický import výpisů. Ruční přidávání je tu pouze z důvodu, že byla potřeba dát do systému staré platby, které již byly jen v textovém formátu a nebylo možné je parsovat.',
	'add_new_bank_transfer_without_counteraccount' => 'Umožňuje přidat bankovní převod bez protiúčtu, jde typicky o vklad, úrok bance apod. V běžném provozu využívejte automatický import výpisů. Ruční přidávání je tu pouze z důvodu, že byla potřeba dát do systému staré platby, které již nebylo možné parsovat.',
	'add_new_transfer' => 'Zobrazí formulář, který umožňuje hospodáři sdružení přidat libovolný převod mezi dvěma podvojnými účty. Účetní korektnost tohoto zásahu je ovšem v zodpovědnosti účetního.',
	'add_from_account' => 'Umožňuje poslat peníze z účtu na jiný účet. Například člen může poslat peníze na projektový účet na podporu nějakého projektu nebo jinému členovi, např. zaplatit rodičům internet, pokud mají samostatnou přípojku.',
	'address_point_member_connecting_place' => 'Jedná se pouze o přípojné místo člena. Trvalé bydliště má na jiné adrese.',
	'address_point_member_domicile' => 'Člen má na této adrese trvalé bydliště.',
	'address_point_name' => 'Jedná se krátký popis adresního bodu, např. Budka Šabatec.',
	'address_point_url' => 'URL aplikace s databází adresních bodů.',
	'address_map' => 'Adresní mapa graficky zobrazuje podsítě. Měla by sloužit jako pomůcka pro plánování adresního plánu. Čísla v řádcích představují 3. číslici ze síťové adresy, čísla ve sloupcích pak 4. číslici ze síťové adresy.',
	'address_ranges' => 'Jedná se o možnost vymezit adresní rozsahy patřící sdružení. Používá se u podsítí (lze pak přidat pouze podsíť patřící do některého adresního rozsahu) a adresní mapy podsítí (vypisují se pak pouze adresní rozsahy sdružení) a u provozu IP adres (červeně jsou označeny nezapsané adresy patřící do některého adresního rozsahu). Pokud není vyplněno, pak vše funguje bez omezení.',
	'admins' => 'Správci, kteří mají přístup k zařízení pomocí SSH.',
	'allowed_subnets' => 'Jedná se o možnost omezovat provoz členů na určitý počet současně jedoucích přípojných míst. Předpokládá, že každé přípojné místo člena se nachází v jiné podsíti.',
	'allowed_subnets_count' => 'Jedná se o maximální počet současně povolených podsítí člena. IP adresám mimo těchto podsítí bude blokován přístup na internet (formou přesměrování). Nula znamená neomezený počet.',
	'allowed_subnets_default_count' => 'Jedná se o výchozí počet současně povolených podsítí člena. IP adresám mimo těchto podsítí bude blokován přístup na internet (formou přesměrování). Nula znamená neomezený počet.',
	'allowed_subnets_disabled' => 'Červené tlačítko nalevo znamená to, že podsíť, ze které se přihlašujete, nepatří mezi vaše povolené podsítě a veškeré provoz je vám proto formou přesměrování omezen. Kliknutím na tlačítko ji povolíte. POZOR! Tímto úkonem zakážete některou z aktuálně povolených podsítí - internet vám pak na ní nebude fungovat.',
	'allowed_subnets_enabled' => 'Zelené  tlačítko nalevo znamená to, že podsíť, ze které se přihlašujete, patří mezi vaše povolené podsítě. POZOR! Kliknutím na tlačítko ji zakážete. Tímto úkonem povolíte některou z aktuálně zakázaných podsítí.',
	'allowed_subnets_update_interval' => 'Interval aktualizace povolených podsítí v sekundách. Po uplynutí této doby se IP adresám z nepovolených podsítí nastaví přesměrování typu Přerušené členství. Výchozí hodnota je 60 sekund (1 minuta).',
	'amount_including_transfer_fee' => 'Částka včetně transakčního poplatku',
	'api_allowed_paths' => 'Umozňuje omezit přístup účtu k určitým částem API. Pro povolení přístupu do všech častí API vyplňte hodnotu: <b>/**</b>. Pro omezení přístupu na každý řádek políčka uveďte povolenou cestu. Každá cesta musí začínat lomítkem a může obsahovat mimo běžných znaků URL cesty také zástupný znak *, který nahrazuje libovolný počet znaků URL vyjma lomítka. Dva zástupné znaky * zasebou poté nahrazují i lomítka.',
	'applicant_additional_payment' => 'Dodatečné stržení částky za členstké přizpěvky za dobu před vstupem.',
	'applicant_connection_test_duration' => 'Testovací připojení je umožněno zájemcům o členství a je limitované délkou udanou v počtech dní, po jejímž uběhnutí je připojení zakázáno, pokud zájemce do té doby neodevzdá přihlášku.',
	'application_password' => 'Aplikační heslo slouží uživateli pro přihlášení ke službám, které jsou závislé na Radius serveru, jako například VPN, aktivní prvky sítě atd. Toto heslo je v databázi uloženo v otevřené podobě.',
	'approval_priority' => 'Priorita umožňuje vícekolové hlasování o práci/pracovním výkazu. Pokud nechcete šablonu s vícekolovým hlasováním, nastavte u všech položek šablony prioritu na hodnotu \'0\'. Vícekolové hlasování začíná u prvku s nejvyšší prioritou a sestupuje k dalším kolům hlasováním, dokud není buďto schváleno ve všech kolech, nebo v jednom z kol zamítnuto. Pokud v některém z kol hlasování chcete schvalovat více prvků zadejte jim stejnou prioritu.',
	'approval_state' => 'Stav je ve formátu Pro / Proti / Zdrželi se.',
	'approval_type_one_vote' => 'Hlasování je ukončeno po prvním hlasu, který není nastaven na zdržet se.',
	'approval_type_min_suggested_amount' => 'Tento hlasovací typ je pouze aplikován pokud navrhovaná částka u předmětu hlasování je vyšší nebo stejná.',
	'aro_groups' => 'Jedná se o skupiny ARO objektů přiřazených k pravidlu. Ke každé skupině ARO objektů je přiřazena určitá skupina uživatelů.',
	'aro_groups_count' => 'Jedná se o počet skupin ARO objektů přiřazených k pravidlu. Ke každé skupině ARO objektů je přiřazena určitá skupina uživatelů.',
	'assign_payment' => 'Neidentifikované převody jsou ve většině případů členské platby s chybně uvedeným nebo vynechaným variabilním symbolem.<br /><br />V ostatních případech se jedná o převod, který je interní záležitostí sdružení. Může se jednat například o bankovní úrok z vkladu, stažení peněz z termínovaného vkladu, vklad peněz, dobropis aj. Při přiřazení tohoto převodu je nutné určit zdrojový podvojný účet, ze kterého peníze pocházejí. Z vybraného účtu jsou následně peníze převedeny na podvojný účet banky, ke které bankovní převod náleží.',
    'axo' => 'AXO objekt označuje objekty, nad kterými lze provádět operace.',
	'axo_count' => 'Jedná se o počet položek AXO objektů přiřazených k pravidlu. AXO objekt označuje objekty, nad kterými lze provádět operace.',
	'bank_accounts' => 'Bankovní účty jsou primárně vytvářeny automaticky během importu bankovního výpisu. V případě úspěšného rozpoznání platby je rovnou tento bankovní účet svázán s rozpoznaným členem. V případě, že člen v budoucnu splete variabilní symbol, pak toto ukládání bankovních účtů usnadňuje identifikaci platby v případě, že opět platil ze stejného účtu. Ruční přidávání bankovních účtů je vyhrazeno pro nestandardní případy.',
	'bank_accounts_of_association' => 'Sdružení může mít více bankovních účtů, jeden je vždy založen po instalaci, nicméně je časem možné přidávat další. Na příslušném bankovním účtu pak lze provádět import výpisů.',
	'big_debtor_boundary' => 'Hranice pro velkého dlužníka umožňuje pro dlužníky, jejichž dluh přesahuje stanovenou míru zobrazit speciální přesměrovací zprávu. Pokud má být zpráva shodná pro všechny dlužníky nehledě na výšku dluhu, ponechte pole prázdné.',
	'connection_request_device_type' => 'Obvykle zařízení, se kterým se snažíte přistoupit na internet (PC, notebook, mobil).',
	'connection_request_info' => 'Pro připojení neregistrované přípojky/zařízení vyplňte prosím tento formulář.<br/>Rozhodnutí o vyhovění/zamítnutí Vaší žádosti Vám bude zasláno na Vaši e-mailovou adresu.',
	'connection_request_info_form' => 'Informace je zobrazena ve formuláři pro přidání požadavku o připojení',
	'connection_request_info_short' => 'Pro připojení neregistrované přípojky/zařízení vyplňte prosím tento formulář.',
	'connection_request_user_pre_info' => 'V naší síti není přípojka (zařízení), kterou aktuálně používáte, zaregistrována a tudíž z ní nebude povolen přístup na internet, přejete si %s?',
	'connection_request_mac_address' => 'Fyzická adresa zařízení, se kterým se snažíte přistoupit na internet (PC, notebook, mobil).',
	'content_of_message' => 'Obsah zprávy pro přesměrování je možno díky zabudovanému editoru měnit jak ručně, tak s pomocí jeho palety formátování. V textu lze využít několik speciálních tagů ve složených závorkách, které se zobrazí podle IP adresy přesměrovaného člena. {member_name} zobrazí jméno člena, {member_id} ID člena, {ip_address} IP adresu, {subnet_name} název podsítě, {variable_symbol} variabilní symbol, {balance} zůstatek, {comment} osobní komentář. Ve zprávě pro ověření kontaktu můžete použít hodnoty {contact} jako hodnotu kontaktu a {verify_link} jako adresu ověření kontaktu.',
	'credit_subaccounts' => 'Kreditní podúčty jsou jinde ve Freenetisu zmíněny jako kreditní účty, ovšem z pohledu účetního, jde spíše o podúčty. Z pohledu účetního jde stále o jeden účet 221100. Zde jsou ovšem vypsány podúčty, které vyjadřují vnitřní rozdělení peněz na účtu a jde o peníze na účtech jednotlivých členů.',
	'current_credit' => 'Aktuální stav vašeho kreditu. Z vašeho účtu je každý měsíc strháván členský příspěvek. V případě, že se blížíte k nule, nebo jste se dostali do mínusu, je třeba kredit dobít zaplacením členského příspěvku.',
	'day_book' => 'Účetní deník obsahuje úplně všechny podvojné převody účetního systému Freenetisu.',
	'debtor_boundary' => 'Hranice pro dlužníka udává, kdy začnou být přesměrováváni dlužníci kvůli neplacení na příslušnou zprávu. Například pokud je hranice 0, pak je přesměrován každý s kreditem (zůstatkem) -1 a menším. Toto přesměrování si člen nemůže sám zrušit. Je mu zrušeno automaticky, jakmile je jeho kredit opět vyšší než hranice. Toto ale může trvat i týden, než přijde platba a je importován výpis. Pro dočasné povolení přístupu na internet existuje dočasná bílá listina.',
	'deduct_day' => 'Den v měsící ve kterém jsou strženy měsíční přízpěvky, splátky vstupního přízpěvku a splátky zařízení. Nastavte hodnotu od 1 do 31, pokud bude mít měsíc míň než 31 dní a hodnota nastavena na větší počet, bude hodnota automaticky v daný měsíc snížena na počet dní v měsíci.',
	'deduct_entrance_fees' => 'Již bez formuláře po kliknutí a potvrzení se provede nezávisle na čase stržení vstupního příspěvku všech členů, kteří mají nastavenou nějakou výši vstupního příspěvku, případně mají nastavenu splátku. Pak jsou splátky strženy jen do aktuálního data. Tuto operaci je opět dobré provádět jednou měsíčně od %d. dne měsíce. Jednou stržený vstupní příspěvek je při dalším strhávání ignorován.',
	'deduct_fees_automatically_enabled' => 'Pokud je povoleno členské i vstupní přispěvky jsou automaticky strhávány CRONem. Strhávání probíhá krátce po půlnoci %d. dne v měsíci.',
	'deduct_member_fees' => 'Zobrazí formulář, který nabídne měsíc a rok pro stržení členských příspěvků. Strhávání členských příspěvků není automatizované a je třeba ho provádět jednou měsíčně, nejlépe od %d. dne měsíce hospodářem sdružení. Výsledkem bude, že pro daný měsíc všem členům podle jejich tarifu buden stržen členský příspěvek.',
	'deduct_device_repayments' => 'Provede stržení splátek zařízení. Jedná se o zařízení, která si člen koupil od sdružení. Pokud ve vašem sdružení neprovádíte prodej zařízení na splátky, patrně tuto možnost nevyužijete.',
	'default_page' => 'Výchozí stránka bude zobrazena po přihlášení.',
	'device_admin_users_filter' => 'Umožnuje vyfiltrovat pouze zařízení určité uživatele. Ti jsou zapsané ve tvaru ID člena - jméno příjmení uživatele.',
	'dhcp_server_reload_timeout' => 'Pokud poslední načtení konfigurace DHCP serveru proběhlo před tímto počtem sekund, je server považován za neaktivní.',
	'dns_server_reload_timeout' => 'Pokud poslední načtení konfigurace DNS serveru proběhlo před tímto počtem sekund, je server považován za neaktivní.',
	'dns_server' => 'Určuje, zda na této IP adrese běží DNS server.',
	'dns_servers' => 'Jedná se o DNS servery sdružení. Jednotlivé servery zapište na samostatný řádek.',
	'dns_zone' => 'Tečka se automaticky doplní za absolutní adresu zóny.',
	'dns_zone_sn' => 'Sériové číslo zóny se inkrementuje automaticky.',
	'engineer' => 'Technik, který provedl instalaci zařízení.',
	'engineers' => 'Technici, kteří provedli instalaci, výměnu nebo opravu zařízení.',
	'entrance_date' => 'Datum vstupu do sdružení. Se vstupem do sdružení je člen povinen platit členské příspěvky. V případě, že člen vstoupil do %d. dne v měsíci včetně, tak již tento měsíc se započítává k placení.',
	'entrance_fee' => 'Vstupní poplatek je jednorázový členský příspěvek, který je člen povinen zaplatit při vstupu do sdružení kromě případů, kdy je mu odpuštěn.',
	'entrance_fee_instalment' => 'Splátka vstupního příspěvku je pro případ, kdy člen chce splácet vstupní příspěvek postupně. Zde nastavená částka mu bude každý měsíc stržena z jeho kreditního účtu. Pokud nechcete splátky využít, nechte výši splátky rovnu výši vstupního příspěvku.',
	'entrance_fee_left' => 'Zobrazuje zbývající částku k zaplacení ze vstupního příspěvku.',
	'entrance_fee_paid' => 'Zobrazuje součet již stržených splátek vstupního příspěvku.',
	'fio_account_number' => 'Číslo Fio účtu, vyplňujte bez kódu banky.',
	'fio_import_daily' => 'Umožňuje zapnout automatický import Fio výpisů ve formátu CSV přímo z internetového bankovnictví. Je potřeba vyplnit uživatelské jméno a heslo, číslo účtu (bez kódu banky) a jméno pohledu. Import se provádí vždy v 1:00 a importuje všechny položky od doby importu posledního výpisu po právě skončený včerejšek. Oproti manuálnímu importu CSV souboru, kde je vidět okamžitý výsledek importu, je zde potřeba občas kontrolovat občas výsledek, zda vše probíhá správně.',
	'fio_password' => 'Heslo pro daného uživatele do internetového bankovnictví. Zvažte bezpečnostní riziko spojené s ukládáním hesla od internetového bankovnictví na server s Freenetisem.',
	'fio_view_name' => 'Název pohledu, je potřeba si vytvořit vlastní pohled (filtr) v internetovém bankovnictví, ve kterém budou zobrazeny všechny dostupné sloupce (celkem 18).',
	'gateway' => 'Určuje, zda-li je tato IP adresa bránou ve své podsíti. Typicky má toto nastavena každá IP adresa končící na jedničku v síti s prefixem 24.',
	'grid_hide_on_first_load' => 'Určuje, jestli skrývat grid a jeho položky při jeho první načtení. Účelem je optimalizace spotřeby paměti.',
	'gps_coordinates' => 'GPS souřadnice může být ve tvaru desetinného čísla, nebo: hodiny°minuty\'sekundy&quot.',
	'ignore_whitelist' => 'Umožňuje této zprávě, je-li aktivována, ignorovat bílou listinu. Určeno pro velmi speciální případy, například pokud je připojen městský úřad, který je na trvalé bílé listině, aby nebyl obtěžován a i přesto chceme jeho počítače přesměrovat nebo upozornit kvůli informaci o výpadku.',
	'imap_last_download' => 'Určuje od kterého data budou stahovány nové výpisy. Tato hodnota se s každým stažením výpisu automaticky zvyšuje aby se předešlo duplicitním výpisům.<br/>POZOR! Hodnota se může během editace nastavení účtu změnit kvůli možnému stažené výpisu plánovačem.',
	'imap_mailbox' => 'Složka na IMAP serveru, ze které se budou stahovat e-maily. Výchozí je INBOX.',
	'imap_port' => 'Výchozí port pro Žádné a STARTTLS zabezpečení je 143. Pro SSL/TLS je 993.',
	'initial_immunity' => 'Počet dní, po které nemá být nový člen upozorňován na placení. Výchozí hodnota je 14 dní.',
	'initial_debtor_immunity' => 'Počet dní, po které nemá být nový člen blokován a upozorňován jako dlužník. Výchozí hodnota je 35 dní.',
	'log_queues_info' => 'Byly zaznamenány chyby (systému nebo některých síťových prvků), %s prosím a proveďte nezbytné akce pro jejich nápravu.',
	'login_name' => 'Přihlašovací jméno do systému je nutné k přihlášení. Přihlašovací jmémo může obsahovat znaky anglické abecedy, čísla, těčku a podtržítko, minimální délka jména je 5 znaků.',
	'mail_to_field' => 'Políčko bere jako vstup login uživatele, kterému chcete odeslat zprávu. Příjemců můžete uvést více, oddělte je čárkou.',
	'member_name' => 'Vyplňujte v případě přidávání nějaké organizace. Pokud připojujete běžného člena, tak jako výsledné jméno člena se použije jeho jméno a příjmení.',
	'membership_transfer' => 'Převod členství je jediná možnost pro člena jak přesunout členský podíl na jiného člena.',
	'messages_send_activation_to_email' => 'Pro každou aktivaci zprávy tímto nastavením je zaslána e-mailová zpráva na vybranou e-mailovou adresu(y). Zpráva obsahuje seznam členů, pro které byla aktivace provedena. Pole zanechce prázdné pokud nechcete zprávu o aktivaci zasílat. Odeslání na více e-mailových adres je možné zadáním více adres oddělených čárkou.',
	'modules' => 'Modul přidává některé nové funkce do systému. Moduly zde mohou být povoleny/zakázány.',
	'monitoring_email_to' => 'E-mailová adresa, na kterou se budou odesílat informace z monitoringu.',
	'monitoring_notification_down_host_interval' => 'Určuje do kolika minut od výpadku zařízení se bude zasílat upozornění. Výchozí hodnota je 10, pro zakázání zasílání nastavte 0.',
	'monitoring_notification_up_host_interval' => 'Určuje do kolika minut od znovu funkčnosti zařízení se bude zasílat upozornění. Výchozí hodnota je 5, pro zakázání zasílání nastavte 0.',
	'monitoring_notification_interval' => 'Jedná se o interval opakování upozornění v minutách. Výchozí hodnota je 1 (upozorňovat se bude každou minutu).',
	'monitoring_server_ip_address' => 'Jedná se o IP adresu počítače, na kterém běží skript freenetis-monitor. IP adresa se používá pro omezení přístupu na vstupní/výstupní data.',
	'monthly_member_fee' => 'Zobrazuje výši aktuálního měsíčního členského příspěvku člena. Tato částka je každý měsíc členovi stržena z kreditu.',
	'multiple_dropdown' => 'Více hodnot lze vybrat označení myší se stiknutou klávesou CTRL.',
	'never_redirect' => 'Zapnete-li tuto volbu, pak nebude možné tuto IP adresu nikdy přesměrovat běžným přesměrováním. Toto je vhodné zejména pro významné partnery jako jsou úřady, školy atd.',
	'notification_member_settings' => 'Možnost povolit/zakázat aktivaci upozorňovacích zpráv, které jsou samozrušitelné.',
	'notification_settings' => 'Na této stránce můžete nastavit přesměrování a posílání zpráv členům.<br>Aktivovat - povolit přesměrování nebo odeslání zprávy členovi.<br>Beze změny - neměnit nastavení přesměrování nebo zakázání posílání zpráv.<br>Deaktivovat - zakázat přesměrování člena.<br>Text v políčku komentář nahradí tag {comment} v SMS a E-mailové zprávě.',
	'old_upgrade_system' => 'Zastaralý systém pro zvýšení databáze detekován, řešení lze nalézt v <a href="http://wiki.freenetis.org/index.php/Automatická_změna_struktury_databáze#P.C5.99echod_ze_star.C5.A1.C3.AD_verze_mechanismu">dokumentaci</a>.',
	'other_subaccounts' => 'Ostatní podúčty jsou vlastně již všechny ostatní používané účty ve Freenetisu, které se vnitřně nijak nedělí. Jde například o účet přijatých členských příspěvků nebo pokladny a tak dále. Freenetis pochopitelně nevyužívá celou účetní osnovu ČR, vzhledem k charakteru občanského sdružení.',
	'password' => 'Uživatelské heslo musí obsahovat alespoň 8 znaků a musí obsahovat alespoň jedno písmeno nebo číslici.',
	'payed_to' => 'Datum, do kdy máte zaplaceny členské příspěvky. Včas před tímto datem byste měli zaplatit členské příspěvky. V případě, že jste s kreditem v mínusu, tak zaplaťte co nejdříve, jinak budete zablokováni.',
	'payment_notice_boundary' => 'Hranice po upozornění na placení je taková částka, pro kterou platí, že jakmile bude mít člen nižší stav kreditu než je tato částka, pak mu bude aktivováno příslušné přesměrování. Např. při hranici 300 Kč začne být člen s kreditem 299Kč a méně být informován o tom, že by měl zaplatit. Tuto informaci ovšem může člen zatím sám zrušit.',
	'phone_invoice_user_lock' => 'Označí fakturu jako vyplněnou, čímž Vám zabrání další editaci a usnadní přehled o tom které faktury jste již vyplnil(a).',
	'phone_invoice_user_unlock' => 'Odznačí fakturu jako vyplněnou, čímž Vám umožní její editaci.',
	'port_vlan' => 'Port VLAN označuje výchozí VLAN portu.',
	'price_tax' => 'Cena s DPH',
	'project_subaccounts' => 'Projektový účet 221103 pro účetního představuje jeden účet. Zde jsou ovšem rozepsány všechny projektové podúčty z pohledu Freenetisu. Každý člen má právo vytvořit svůj projekt, který je v souladu se stanovami sdružení, může jít například o nějakou akci nebo školení. Cílem takovéhoto projektového podúčtu je, aby ostatní členové měli možnost zakladateli projektu přispět peníze ze svého kreditního účtu na realizaci projektu.',
	'qos_active_speed' => 'Jedná se o hodnotu omezení rychlostu pro příliš aktivní členy (viz Logování). Lze zapsat ve tvaru XXXJ (kde XXX je hodnota pro upload i download a J je jednotka, například 300M, 1G, apod.) nebo ve tvaru XXXJ/YYYJ (kde XXX je hodnota pro upload, YYY pro download a J je jednotka, například 100M/300M, 400M/1G, apod.).',
	'qos_ceil' => 'Jedná se o maximální možnou rychlost. Lze zapsat ve tvaru XXXJ (kde XXX je hodnota pro upload i download a J je jednotka, například 300M, 1G, apod.) nebo ve tvaru XXXJ/YYYJ (kde XXX je hodnota pro upload, YYY pro download a J je jednotka, například 100M/300M, 400M/1G, apod.).',
	'qos_high_priority_ip_addresses' => 'Jedná se o výčet adres s vysokou prioritou. Primárně je určeno pro IP adresy mimo síť (např. VoIP ústředny). Lze použít i pro vnitřní IP, ale nedoporučuje se - pro takové účely je vhodnější použít nastavení rychlosti přímo u člena. Každou adresu je nutno zapsat na samostatný řádek.',
	'qos_high_priority_speed' => 'Jedná se o rychlost IP adres s vysokou prioritou. Primárně je určeno pro IP adresy mimo síť (např. VoIP ústředny). Lze použít i pro vnitřní IP, ale nedoporučuje se - pro takové účely je vhodnější použít nastavení rychlosti přímo u člena. Lze zapsat ve tvaru XXXJ (kde XXX je hodnota pro upload i download a J je jednotka, například 300M, 1G, apod.) nebo ve tvaru XXXJ/YYYJ (kde XXX je hodnota pro upload, YYY pro download a J je jednotka, například 100M/300M, 400M/1G, apod.).',
	'qos_rate' => 'Jedná se o minimální (garantovanou) rychlost. Lze zapsat ve tvaru XXXJ (kde XXX je hodnota pro upload i download a J je jednotka, například 300M, 1G, apod.) nebo ve tvaru XXXJ/YYYJ (kde XXX je hodnota pro upload, YYY pro download a J je jednotka, například 100M/300M, 400M/1G, apod.).',
	'qos_total_speed' => 'Jedná se o totální rychlost neboli celkovou konektvitu sdružení. Lze zapsat ve tvaru XXXJ (kde XXX je hodnota pro upload i download a J je jednotka, například 300M, 1G, apod.) nebo ve tvaru XXXJ/YYYJ (kde XXX je hodnota pro upload, YYY pro download a J je jednotka, například 100M/300M, 400M/1G, apod.).',
	'redirection_port_self_cancel' => 'Port brány pro zrušení samozrušitelného přesměrování IP adresy.',
	'recalculate_account_balances' => 'Primárním zdrojem o stavu financí v systému jsou převody. Zůstatky na účtech byly dříve pokaždé počítány na požádání z převodů. Nyní si každý účet ukládá svůj zůstatek kvůli vyšší rychlosti. Tuto funkci použijete v případě přechodu na verzi systému, která tuto optimalizaci obsahuje.',
	'recalculate_device_fees' => 'Pro primární strhávání splátek zařízení používejte funkci pro globální strhávání v účetním deníku. Tuto funkci používejte jen v případě, že došlo k nějakému omylu.',
	'recalculate_fees' => 'Pro primární strhávání příspěvků používejte funkci pro globální strhávání příspěvků v Účetním deníku. Tuto funkci používejte pouze ve výjimečných případech.',
	'recalculate_entrance_fees' => 'Pro primární strhávání vstupních příspěvků používejte funkci pro globální strhávání v účetním deníku. Tuto funkci používejte jen v případě, že došlo k nějakému omylu, například, že měl zaplatit vstupní a pak se ukázalo, že nemusel.',
	'redirection_logo' => 'Jedná se o logo, které se zobrazí na stránce s přesměrováním. Rozměr by měl být 212x49px',
	'redirection_preview' => 'Náhled zobrazí stránku přesně tak, jak se zobrazí dané IP adrese. V případě více aktivovaných přesměrování najednou pro jednu IP adresu se zobrazí jen to, které se členovi zobrazí jako první.',
	'register_install' => 'Zašle data o instalaci (jméno organizace a Váš email) vývojářům FreenetISu pro zasílání novinek a informacích o vývoji',
	'registration_document' => 'Tento soubor bude přiložen za exportovanou přihlášku do PDF.',
	'registration_logo' => 'Jedná se o logo sdružení, které se zobrazí v levém horním rohu vyexportované přihlášky. Poměr stran by měl být 16:6.',
	'request_description' => 'Modul &quot;požadavky&quot; má dvě využití, které při přidávání požadavku specifikujete jeho typem. Prvním možným využitím je žádost o podporu. Tímto typem požadavku můžete zažádat naše správce o určitý úkon, který nejste schopen provést sám (např. žádost o přerušení členství, změna kontaktních údajů, atd.). Druhým typem využitím je návrh na sdružení. Pomocí tohoto typu požadavku můžete například zažádat o změnu fungování sdružení, nebo například můžete navrhnout nákup určitého majetku do vlastnictví sdružení. Po odeslání prochází požadavek schvalovacím procesem.',
	'request_type' => 'Vyberte typ &quot;žádost o podporu&quot;, pokud chcete pomoci s něčím čemu nerozumíte nebo nemáte oprávnění to udělat (např. požádat o přerušení členství). V druhém připadě, pokud byste chtěli poslat nějaký návrh na projednání uvnitř sdružení pak vyberte druhý typ &quot;návrh pro sdružení&quot;, který může obsahovat i částku, za kterou by bylo možné požadavek realizovat.',
	'self_cancel' => 'Je-li daná zpráva samozrušitelná, znamená to, že při jejím zobrazení členovi se v patičce stránky objeví odkaz, který mu umožní přesměrování vypnout. Vhodné pro zprávy informativního charakteru. Rozlišuje se samozrušitelnost pro jednu IP adresu anebo pro všechny IP adresy člena.',
	'self_cancel_text' => 'Text pro odkaz určený k zrušení přesměrování členem. Tento text se zobrazuje v patičce stránky přesměrovanému členovi.',
	'self_cancel_url' => 'Je to adresa na centrální bráně, na které běží lighthttpd web server. Pravidla firewallu na centrální bráně takto poznají uživatelův úmysl ukončit přesměrování. Stránka tedy může obsahovat stručnou informaci pro uživatele o ukončení přesměrování a případný rozcestník.',
	'send_as_form' => 'Odešle parametry v odkazu metodou POST. Položky zadávejte stejně jako v případě metody GET, např.<br/>http://{ip_address}?username={login}&pass={password}',
	'send_verification_message' => 'Odešle uživateli zprávu s odkazem pro ověření kontaktu.',
	'service' => 'Je-li pro tuto IP adresu zapnuta služba, pak je tato IP adresa využívána pro Radius. Typicky jde o IP adresy aktivních síťových prvků, na které je se možné pomocí Radiusu přihlásit.',
	'set_whitelist_to_member' => 'Trvalá bílá listina je seznam členů, pro které neplatí přesměrování. Jde například o důležitou partnerskou instituci zapojenou do sítě, například městský úřad apod. Všechna systémová přesměrování tedy nemohou ve výchozím stavu obtěžovat počítače s IP adresou na bílé listině. Lze ovšem vytvořit takové zprávy, které budou ignorovat tuto listinu, např. informování o nadcházejícím výpadku. Pro dočasnou bílou listinu platí to samé, ale IP adresy v ní jsou po určeném čase z této listiny mazány. Např. uživatel byl přesměrován kvůli neplacení a chceme mu umožnit krátkodobý přístup na internet do internetového bankovnictví.',
	'sms_driver_klikniavolej' => 'Klikniavolej.cz je internetová služba, která zproztředkovává zasílání SMS skrze softwárové rozhraní. Pro aktivaci tohoto ovladače se musíte zaregistrovat na <a href=\'http://klikniavolej.cz\' target=\'_blank\'>http://klikniavolej.cz</a> jako firemní zákazník a poté aktivujte SMS bránu dle instrukcí <a href=\'http://www.klikniavolej.cz/faq.asp#WhoSaleSMS_Info\' target=\'_blank\'>zde</a>. Číselný identifikátor, který Vám bude vygenerován potom vložte do pole &quot;uživatel&quot;.',
	'sms_driver_soudvinv100' => 'Soudvin V100 je síťové zařízení pro posílání a přijímání SMS pomocí do něj vložené SIM karty. Dokumentace k zařízení je dostupná <a href=\'http://old.i4wifi.cz/img.asp?attid=109091\' target=\'_blank\'>zde</a>.',
	'sms_enabled' => 'Určuje zda-li zasílání SMS zpráv ze systému do sítě tohoto operátora je povoleno.',
	'ssh' => 'Klíč je použit pro přístup k zařízením, která spravuje tento uživatel.',
	'subnet_dhcp' => 'Ukazatel, zda-li je na podsíti spuštěn DHCP server. Využívá se pro export zařízení.',
	'subnet_dns' => 'Ukazatel, zda-li je na podsíti spuštěn DNS server. Využívá se pro export zařízení.',
	'subnet_owner' => 'IP adresy, jenž nejsou v systému, patřící do podsítě budou přiřazeni k tomuto členovi-vlastníkovi. Na tyto podsítě se tedy nevztahuje přesměrování Neznámé zařízení - neznámé IP adresy jsou přiřazeni k členovi.',
	'subnet_qos' => 'Ukazatel, zda-li je na podsíti spuštěn QoS. Využívá se pro export zařízení.',
	'subnet_used_ips' => 'Jedná se procentuální vyjádření využití IP adres v podsíti. Červené zbarvení značí docházející IP adresy, zelené pak nevyužitou podsít (zbytečně velká?).',
	'syslog_ng_mysql_api' => 'Jedná se o jednoduché API pro načítání dat z syslog-ng daémona ukládajícího logy do MySQL databáze. Více infa <a href=http://dev.quimi.cz/projects/syslog-ng-mysql-api/wiki>zde</a>',
	'syslog_ng_mysql_api_url' => 'URL adresa API pro zasílání požadavků, včetně jména a hesla ve tvaru http://URL?user=uživatel&password=heslo',
	'the name of the database you want to run freenetis in' => 'Název databáze, do které chcete FreenetIS nainstalovat.',
	'time threshold in minutes, before module is shown as inactive' => 'Časová hranice v minutách, po které je modul označen jako neaktivní',
	'total_traffic' => 'Jedná se o celkový provoz člena od spuštění ulogd.',
	'ulogd' => 'Ulogd je logovací daemon pro sledování provozu. Lze jej nastavit, aby spojení odesílal vzdáleně do databáze FreenetISu, který jej využívá pro grafování provozu členů a pro vyhodnocování QoSu.',
	'ulogd_active' => 'Jedná se o seznam (z pohledu typu provozu) příliš aktivních členů. Tento seznam se používá například pro vyhodnocování QoSu pro členy (členové z tohoto seznamu jsou mírně znevýhodněni oproti ostatním členům), aktualizuje při každé aktualizaci ulogd, viz. Nastavení - Logování - Ulogd - Interval aktualizace.',
	'ulogd_active_button' => 'Určuje, zda-li byl člen označen jako Aktivní = příliš aktivní z pohledu provozu. Členové ze seznamu aktivních členů jsou například mírně znevýhodněni oproti ostatním členům u vyhodnocování QoSu pro členy. Viz. Nastavení - Logování - Aktivní členové',
	'ulogd_active_count' => 'Množství členů, z jehož se bude počítat průměr. Členové, kteří dosáhnou tohotu průměru, budou označeni jako příliš aktivní. Může být zadán absolutně (číslem) nebo relativně (v procentech). Výchozí hodnota je 10&#37.',
    'ulogd_active_min' => 'Členové, kteří sice dosáhnou průměru, ale nedosáhnou této minimální hodnoty, nebudou označeni jako aktivní. (např 1GB)',
	'ulogd_active_type' => 'Typ provozu, podle kterého se mají hledat příliš aktivní členové. Možné hodnoty jsou: upload, download nebo obojí.',
	'ulogd_order' => 'Jde o pořadí položky podle zvoleného řazení. Ve výchozím stavu se řadí podle stejného typu provozu jako se hledají aktivní členové. Viz Nastavení - Logování - Aktivní členové - Typ provozu.',
	'ulogd_update_interval' => 'Interval aktualizace ulogd v sekundách. Po uplynutí této doby se zaktualizují počítadla provozu členů a najdou se příliš aktivní členové. Výchozí hodnota je 1800 sekund (30 minut).',
	'unidentified_transfers' => 'Neidentifikované platby jsou všechny příchozí bankovní platby, které nebyl náš systém schopen z různých důvodů automaticky rozpoznat. Typicky se jedná o platby s chybným variabilním symbolem. Pokud zde svoji platbu najdete, pak kontaktujte hospodáře sdružení pro její správné přiřazení.',
	'upload_max_filesize' => 'Maximální velikost nahrávaných souborů lze zapsat ve tvaru XXXJ (kde XXX je hodnota a J je jednotka, například 300M, 1G, apod.).',
	'url_pattern' => 'Podle šablony url bude vygenerován výsledný odkaz. Můžete využít speciálních tagů:<br/>{ip_address} - bude nahrazen IP adresou zařízení<br/>{gateway_ip} - bude nahrazen IP adresou brány<br/>{login} - bude nahrazen přihlašovacím jménem<br/>{password} - bude nahrazen heslem',
	'url_settings' => 'Změnou těchto proměnných nemusíte přímo ovlivnit konfiguraci FreenetISu na serveru. Pro změnu konfigurace je nutné změnit konfiguraci pro webový server Apache. Např. při instalaci z balíčkovacích systémů spusťte příkaz <code>dpkg-reconfigure freenetis</code> a vyplňte údaje shodně s údaji zadanými v tomto formuláři.',
	'variable_symbol' => 'Variabilní symbol slouží k jednoznačnému určení příchozí platby člena.',
	'verified_contact' => 'Ověřený kontakt znamená, že na zadaný kontakt byla zaslána zpráva s ověřením, uživatel tuto zprávu potvrdil a tudíž je kontakt platný.',
	'verify_contact' => 'Ověří kontakt ihned bez posílání ověřovací zprávy uživateli.',
	'voip_login_data' => 'Níže uvedené údaje využijte pro nastavení vašeho VoIP telefonu. Login použijte pro požadované přihlašovací či zobrazovací jméno, heslo pro heslo k účtu a adresa proxy serveru odpovídá adrese telefonní ústředny. Údaj CLIPS je jen dodatečná informace pro příjemce hovoru, pokud vás nemá v seznamu. Doporučujeme nastavit stejné jako je vaše číslo.',
	'voip_status' => 'Stav Registrovaný znamená, že telefonní klient ať už fyzický či softwarový je zapnut a správně připojen k ústředně. Stav Neregistrovaný platí pro opak. Pro VoIP telefon registrovaný v ústředně se pak zobrazuje jeho aktuální IP adresa, port a čas vypršení registrace.',
	'whitelist' => 'Členům, kteří jsou umístěny na bílé listině, je sice možné aktivovat přesměrování (upozornění), ale nebudou odeslány na centrální router (odeslány zprávy). Tedy nebudou přesměrovány (upozorněni), dokud nebudou odebráni z bílé listiny. Dočasná bílá listina se od trvalé liší v tom, že je stanovena jen pro určitý časový interval.',
	'work_description' => 'Modul &quot;práce&quot; je určen pro aktivní členy sdružení (člen vykonávající nějakou práci pro sdružení), kterým umožňuje odpracovaný čas vykázat a zažádat o jeho proplacení. Po odeslání prochází práce schvalovacím procesem. Je-li schválena, pak je převedena výplata na kreditní účet člena.',
	'work_report_description' => 'Modul &quot;pracovní výkazy&quot; je určen pro aktivní členy sdružení (člen vykonávající nějakou práci pro sdružení), kterým umožňuje odpracovaný čas vykázat a zažádat o jeho proplacení. Na rozdíl od modulu prací, může obsahovat každý pracovní výkaz více prací a umožňuje je tedy shlukovat například po měsících v roce. Po odeslání prochází výkaz schvalovacím procesem. Je-li pracovní výkaz schválen, pak je převedena výplata na kreditní účet člena.',
	'work_report_export' => 'Vyexportuje XML soubor s pracovním výkazem pro naimportování do Microsoft Excel, OpenOffice Calc nebo LibreOffice Calc',
	'your mysql password' => 'Vaše MySQL heslo.',
	'your mysql username' => 'Vaše MySQL uživatelské jméno.',
);
