<?php
$lang['detected'] = 'Fundet';
$lang['docroot_leaveblank'] = 'Tomt felt betyder, at systemets grundindstillinger anvendes';
$lang['test_xmlreader_class'] = 'Unders&oslash;ger om XMLReader class findes';
$lang['test_xmlreader_failed'] = 'XMLReader class er ikke aktiveret i din installation af php.  Du kan bruge systemet alligevel, men du vil ikke kunne anvende nogen af de funktioner, som installerer moduler fra andre servere.';
$lang['test_check_xml_failed'] = 'XML underst&oslash;ttelse er ikke kompileret ind i din php installation. Du kan stadig benytte systemet, men vil ikke kunne benytte modul h&aring;ndteringen til at installere nyt moduler direkte fra fjernserveren.';
$lang['installed_module'] = 'Modul installeret';
$lang['automatedtask_success'] = 'Automatiseret opgave gennemf&oslash;rt';
$lang['ip_addr'] = 'IP adresse';
$lang['install_admin_pwsalt_note'] = 'Hvis du v&aelig;lger at benytte salts til kodeord, s&aring; er det ikke p&aring; nogen m&aring;de muligt at nulstille glemte admin-kodeord andet end ved at bruge funktionen til glemte kodeord. Det er absolut n&oslash;dvendigt, at hver admin-konto er tilknyttet en email adresse';
$lang['admin_salt'] = 'Salt admin-kodeord';
$lang['setup_flat_urls'] = 'Flade URL&#039;er er aktiveret';
$lang['install_timezone'] = 'Nogle af de servere, som k&oslash;rer PHP 5.3, har ikke indstillet tidszonen korrekt. V&aelig;lg venligst den tidszone, som passer bedst i listen nedenfor, f&oslash;r du forts&aelig;tter. Hvis ikke det er n&oslash;dvendigt p&aring; din server, s&aring; kan du v&aelig;lge &amp;quot;Ingen&amp;quot;. <strong>Bem&aelig;rk:</strong> V&aelig;lg venligst din servers tidszone. Indstillingen vedr&oslash;rer ikke m&aring;den din hjemmeside vises p&aring; - den bruges kun i forbindelse med datoudregninger. Indstillingen kan &aelig;ndres efter installationen ved at redigere config.php filen.';
$lang['timezone'] = 'Tidszone';
$lang['none'] = 'Ingen';
$lang['test_error_estrict'] = 'Unders&oslash;ger error_reporting for at sikre, at E_STRICT er deaktiveret';
$lang['test_estrict_failed'] = 'E_STRICT er sl&aring;et til';
$lang['info_estrict_failed'] = 'Nogle af de biblioteker, som CMSMS bruger, fungerer ikke ret godt, n&aring;r E_STRICT er aktiveret. Deaktiv&eacute;r venligst E_STRICT f&oslash;r du forts&aelig;tter';
$lang['test_error_edeprecated'] = 'Unders&oslash;ger error_reporting for at sikre, at E_DEPRECATED er deaktiveret';
$lang['test_edeprecated_failed'] = 'E_DEPRECATED er sl&aring;et til';
$lang['info_edeprecated_failed'] = 'Hvis E_DEPRECATED er aktiveret i fejlrapporteringen (error reporting), vil brugerne se en masse advarselsbeskeder, hvilket kan g&aring; ud over b&aring;de udseende og funktionalitet';
$lang['invalidemail'] = 'Den angivne email adresse er ikke gyldig';
$lang['empty_query'] = 'Tom foresp&oslash;rgsel? %s';
$lang['no_db_driver'] = 'Ingen kompatibel database driver fundet';
$lang['test_check_output_buffering'] = 'Kontrollerer output bufferin';
$lang['test_check_output_buffering_failed'] = 'Output buffering er sl&aring;et fra. Du vil muligvis ikke kunne benytte funktioner der kr&aelig;ver dette.';
$lang['phpinfo'] = 'Vis PHP information';
$lang['mod_security'] = 'Apache Mod sikkerhed';
$lang['test_check_tempnam'] = 'Kontrollerer for tempnam function';
$lang['test_check_db_drivers'] = 'DB drivere';
$lang['test_check_db_drivers_failed'] = 'Ingen DB drivere found';
$lang['test_check_register_globals'] = 'Kontrollerer for PHP register globals';
$lang['test_check_register_globals_failed'] = 'PHP register globals er aktiv. Af sikkerhedshensyn b&oslash;r dette v&aelig;re sl&aring;et fra';
$lang['test_check_disable_functions'] = 'Kontrollerer PHP funktioner der er sl&aring;et fra';
$lang['test_check_disable_functions_failed'] = 'Advarsel: dette er en list over funktioner der er sl&aring;et fra p&aring; din server';
$lang['install_admin_db_port'] = 'Databaseport';
$lang['install_admin_db_port_info'] = 'Hvis du ikke ved det, lad dette felt forblive blankt for at benytte standard-installingerne';
$lang['install_admin_db_socket'] = 'Database-socket';
$lang['install_admin_db_socket_info'] = 'Ikke underst&oslash;ttet';
$lang['install_admin_frontendlang'] = 'Standard sprog for frontend. Dette angiver lokale installer for diverse dato funktioner etc.';
$lang['install_default_encoding'] = 'I stort set alle situationer skal default_encoding v&aelig;re utf-8.';
$lang['installer_done'] = '[f&aelig;rdig]';
$lang['installer_failed'] = '[fejlede]';
$lang['create_permission'] = 'Opretter tilladelse';
$lang['add_column_sql'] = 'Tilf&oslash;jer kolonne til %s tabellen ...';
$lang['update_table_sql'] = 'Opdaterer tabellen %s ...';
$lang['installing_module'] = 'Installerer modul %s ...';
$lang['updating_schema_version'] = 'Opdater til skema version %s ...';
$lang['upgrade_config'] = 'Opgraderer config.php';
$lang['upgrade_config_info'] = 'config opgradering';
$lang['upgrade_failed_again'] = 'En eller flere opgraderinger fejlede. L&oslash;s venligst problemet og klik p&aring; knappen herunder for at pr&oslash;ve igen.';
$lang['upgrade_cache_dirs'] = 'T&oslash;mmer cache mapper';
$lang['cannot_clean_cache_dirs'] = 'Kan ikke t&oslash;mme cache mapper!';
$lang['upgrade_schema'] = 'Opgrad&eacute;r skema';
$lang['need_upgrade_schema'] = 'CMS skal opgraderes.<br/>Du k&oslash;rer lige nu skema version %s og du skal opgraderes til version %s';
$lang['schema_ok'] = 'CMS-databasen er opdateret. Benytter skema version %s';
$lang['noneed_upgrade_schema'] = 'CMS-databasen er opdateret. Benytter skema version %s';
$lang['upgrade_modules'] = 'Opgrad&eacute;r moduler';
$lang['noneed_upgrade_modules'] = 'Kerne-moduler er opdateret';
$lang['upgrade_sql_module_from_to'] = 'Opgraderer SQL for modulet &quot;%s&quot; fra %s til %s ...';
$lang['upgrade_event_module_from_to'] = 'Opgraderer h&aelig;ndelser vedr&oslash;rende modulet &quot;%s&quot; fra %s til %s ...';
$lang['sitedown_not_removed'] = 'Kunne ikke fjerne filen tmp/cache/SITEDOWN. Slet den venligst manuelt ellers vil der blive ved med at v&aelig;re en besked  om, at din hjemmeside er nede grundet vedligeholdelse';
$lang['upgrade_ok'] = 'Gennemg&aring; venligst config.php og ret nye indstillinger, hvor det er n&oslash;dvendigt. Gendan herefter filens rettigheder, s&aring; den igen er l&aring;st. Du b&oslash;r ogs&aring; tjekke, om alle dine moduler er fuldt opdaterede ved at g&aring; til Udvidelser -> Moduler. P&aring; denne side kan du se efter moduler, hvorved der st&aring;r &quot;Opgradering n&oslash;dvendig&quot;';
$lang['upgrade_complete'] = 'Opgraderingen er udf&oslash;rt';
$lang['upgrade_end'] = 'CMS er opgraderet. Klik %s for at se dit cms-site eller du kan %s.';
$lang['here'] = 'her';
$lang['go_to_admin'] = 'G&aring; til administrationen';
$lang['errorfilenot'] = 'Fil ikke fundet!';
$lang['errorfilenotwritable'] = 'Fil ikke skrivbar!';
$lang['nofiles'] = 'Denne ressource eksisterer ikke!';
$lang['is_directory'] = 'Denne ressource er en mappe!';
$lang['is_readable_false'] = 'Denne ressource er ikke l&aelig;sbar!';
$lang['checksum_match'] = 'Checksum passer!';
$lang['checksum_not_match'] = 'Checksum passer ikke!';
$lang['not_checksum'] = 'Kunne ikke hente checksum.';
$lang['format_datetime'] = '%c';
$lang['upload_err_ini_size'] = 'Den upload&#039;ede fil er st&oslash;rre end den upload_max_filesize der er angivet i php.ini!';
$lang['upload_err_form_size'] = 'Den uploadede fil overstiger det MAX_FILE_SIZE direktiv, som er blevet specificeret i HTML-formularen.';
$lang['upload_err_partial'] = 'Den upload&#039;ede fil blev kun delvist upload&#039;et';
$lang['upload_err_no_file'] = 'Ingen fil blev upload&#039;et.';
$lang['upload_err_no_tmp_dir'] = 'Mangler en midlertidig mappe.';
$lang['upload_err_cant_write'] = 'Fejl ved skrivning til disk.';
$lang['upload_err_extension'] = 'Fil-upload stoppet af udvidelse.';
$lang['upload_err_empty'] = 'Filen er tom';
$lang['upload_err_unknown'] = 'Ukendt upload problem';
$lang['function_file_uploads_off'] = 'file_uploads er sl&aring;et fra i din php konfiguration!';
$lang['upload_file_no_readable'] = 'Den upload&#039;ede fil kan ikke l&aelig;ses';
$lang['upload_file_multiple'] = 'Upload af flere filer p&aring; &eacute;n gang er ikke tilladt!';
$lang['test_check_magic_quotes_gpc'] = 'Magic quotes for Get/Post/Cookie operationer';
$lang['test_check_magic_quotes_gpc_failed'] = 'N&aring;r magic_quotes er aktiveret, betyder det, at enkelte og dobbelte anf&oslash;rselstegn samt backslash pr. automatik bliver &quot;escaped&quot; med en backslash. Det kan medf&oslash;re mange problemer i CMS.';
$lang['test_check_magic_quotes_runtime'] = 'Magic quotes in runtime';
$lang['test_check_magic_quotes_runtime_failed'] = 'N&aring;r magic_quotes er aktiveret, vil de fleste af de funktioner, som henter data fra alle mulige andre eksterne kilder, inklusiv databaser og tekstfiler, returnere oplysningerne med citationstegn, der er blevet &quot;escaped&quot; - alts&aring; \&quot; i stedet for &quot;. Det giver problemer for CMS made simple.';
$lang['install_admin_checksum'] = 'Tjek din installation';
$lang['upgrade_admin_checksum'] = 'Tjek din system opgradering';
$lang['checksum'] = 'Checksum-test';
$lang['checksum_file'] = 'Checksum-fil';
$lang['install_test_checksum'] = 'Du kan validere CMS-filernes integritet ved at sammenligne med CMS&#039; originale checksum. Valideringen kan g&oslash;re det lettere at finde ud af, hvilke af de uploadede filer, der for&aring;rsager problemer.';
$lang['checksum_passed'] = 'Alle tjeksummer passer!';
$lang['checksum_failed'] = 'Checksummen matchede med nogle fejl. Kig i hj&aelig;lp for yderligere information';
$lang['test_check_open_basedir'] = 'Tjek for PHP Open Basedir';
$lang['test_check_open_basedir_failed'] = 'Open basedir restriktioner er aktiveret. Du kan derfor f&aring; problemer med visse ekstrafunktioner.';
$lang['unlimited'] = 'Ubegr&aelig;nset';
$lang['test_open_basedir_session_save_path'] = 'Open basedir irestriktioner ser ud til at v&aelig;re aktiveret. Hvis du f&aring;r problemer med sessions og ini_set fungerer, s&aring; kan du pr&oslash;ve at aktivere session cookies ved at tilf&oslash;je: ini_set(&#039;session.use_only_cookies&#039;, 1);  i toppen af include.php';
$lang['install_warn_db_createtables'] = 'Under normale omst&aelig;ndigheder skal dette felt altid v&aelig;re sl&aring;et til. Sl&aring; den kun fra hvis du virkelig ved hvad du g&oslash;r.';
$lang['install_admin_tablesnotcreated'] = 'Installation fuldf&oslash;rt. Installationen er fuldf&oslash;rt, og som du &oslash;nskede blev database-tabellerne ikke oprettet. Men config-filen er blevet genskabt og alle pr&aelig;-installations-tests er kontrolleret. Tak, og her er dit';
$lang['info_create_dir_and_file'] = 'HTTP processens ejer kan ikke oprette en fil i den mappe som den ejer. Dette betyder formentlig at safe mode er sl&aring;et til. Mange funktioner i CMS Made Simpl fungerer ikke uden at dette er muligt. Derfor kan der ikke forts&aelig;ttes.';
$lang['test_create_dir_and_file'] = 'Kontrollerer om httpd processen kan oprettet en fil i en mappe som den oprettede';
$lang['cms_site'] = 'CMS Side';
$lang['or_greater'] = 'Eller st&oslash;rre';
$lang['sitename'] = 'Website navn';
$lang['warning_safe_mode'] = '<strong><em>ADVARSEL:</em></strong> PHP&#039;s &quot;Safe mode&quot; er sl&aring;et til. Dette vil vanskeligg&oslash;re upload af filer gennem browserens web interface, heriblandt billeder, temaer og modul XML pakker. Vi anbefaler at du f&aring;r din systemadministrator til at sl&aring; &quot;safe mode&quot; fra.';
$lang['test'] = 'Test';
$lang['results'] = 'Resultater';
$lang['untested'] = 'Ikke testet';
$lang['owner'] = 'Ejer';
$lang['permissions'] = 'Tilladelser';
$lang['off'] = 'Fra';
$lang['on'] = 'Til';
$lang['permission_information'] = 'Information om tilladelse';
$lang['server_os'] = 'Server Operativ System';
$lang['server_api'] = 'Server-API';
$lang['server_software'] = 'Software installeret p&aring; serveren';
$lang['server_information'] = 'Oplysninger om serveren';
$lang['session_save_path'] = 'Sti til der hvor sessions gemmes';
$lang['max_execution_time'] = 'Maksimal k&oslash;rselstid';
$lang['gd_version'] = 'GD version';
$lang['upload_max_filesize'] = 'Maksimal upload st&oslash;rrelse';
$lang['post_max_size'] = 'Maksibal post st&oslash;rrelse';
$lang['memory_limit'] = 'PHP hukommelses gr&aelig;nse';
$lang['server_db_type'] = 'Server-database';
$lang['server_db_version'] = 'Server-database-version';
$lang['phpversion'] = 'Nuv&aelig;rende PHP version';
$lang['safe_mode'] = 'PHP Safe Mode';
$lang['php_information'] = 'Informationer om PHP';
$lang['cms_install_information'] = 'Informationer vedr&oslash;rende CMS-installationen';
$lang['cms_version'] = 'CMS Version';
$lang['systeminfo_copy_paste'] = 'Kopi&eacute;r venligst denne markerede tekst ind i dit forum-indl&aelig;g';
$lang['help_systeminformation'] = 'Informationen vist heruder er samlet fra flere forskellige steder og opsummeret her s&aring; du nemt kan finde de oplysninger der skal til at af diagnosticere et problem eller f&aring; hj&aelig;lp til din CMS Made Simple installation';
$lang['systeminfo'] = 'Informationer vedr&oslash;rende systemet';
$lang['systeminfodescription'] = 'Viser forskellig information der kan hj&aelig;lpe til at diagnosticere problemer';
$lang['error'] = 'Fejl';
$lang['new_version_available'] = '<em>Bem&aelig;rk:</em> En nyere version af CMS Made Simple er tilg&aelig;ngelig. G&oslash;r venligst din administrator opm&aelig;rksom p&aring; dette.';
$lang['info_urlcheckversion'] = 'Hvis denne url er sat til &amp;quot;none&amp;quot;, vil ingen kontrol blive foretaget<br/>Intet indhold vil resultere i at standard adressen benyttes';
$lang['urlcheckversion'] = 'Kontroll&eacute;r for nye CMS versioner med denne URL';
$lang['read'] = 'L&aelig;s';
$lang['write'] = 'Skriv';
$lang['execute'] = 'K&oslash;r';
$lang['group'] = 'Gruppe';
$lang['other'] = 'Andre';
$lang['global_umask'] = 'File Oprettelses Maske (umask)';
$lang['errorcantcreatefile'] = 'Kunne ikke oprette filen (problem med fil-tilladelser?)';
$lang['add'] = 'Tilf&oslash;j';
$lang['about'] = 'Om';
$lang['action'] = 'Handling';
$lang['actionstatus'] = 'Handling/status';
$lang['active'] = 'Aktiv';
$lang['cantremove'] = 'Kan ikke fjernes';
$lang['changepermissions'] = 'S&aelig;t tilladelser';
$lang['changepermissionsconfirm'] = 'BEM&AElig;RK\n\nDette vil fors&oslash;ge at g&oslash;re alle de filer der udg&oslash;res af moduler skrivbare for webserveren.\nEr du sikker p&aring; du vil forts&aelig;tte?';
$lang['success'] = 'Succes';
$lang['advanced'] = 'Avanceret';
$lang['back'] = 'Tilbage til menu';
$lang['cancel'] = 'Fortryd';
$lang['cantchmodfiles'] = 'Kunne ikke &aelig;ndre adgangstilladelser p&aring; nogle filer.';
$lang['cantremovefiles'] = 'Problemer ved sletning af filer (rettigheder?)';
$lang['create'] = 'Opret';
$lang['database'] = 'Database';
$lang['databaseprefix'] = 'Database pr&aelig;fiks';
$lang['databasetype'] = 'Databasetype';
$lang['date'] = 'Dato';
$lang['default'] = 'Standard';
$lang['delete'] = 'Slet';
$lang['deleteconfirm'] = 'Er du sikker p&aring; du vil slette - %s?';
$lang['description'] = 'Beskrivelse';
$lang['directoryexists'] = 'Denne mappe eksisterer allerede';
$lang['down'] = 'Ned';
$lang['edit'] = 'Redig&eacute;r';
$lang['email'] = 'Email Adresse';
$lang['errordeletingfile'] = 'Kunne ikke slette filen. Tilladelsesproblem?';
$lang['errordirectorynotwritable'] = 'Har ikke rettigheder til at skrive i mappen. Dette kan v&aelig;re for&aring;rsage af fil-rettigheder og ejerskab. Safe mode kan ogs&aring; v&aelig;re sl&aring;et til.';
$lang['cachenotwritable'] = 'Cache mappe er ikke skrivbar. Nulstilling af cache&#039;n vil ikke virke. S&oslash;rg for fulde skriveretteigheder til mappen tmp/cache (chmod 777). Du er m&aring;ske ogs&aring; n&oslash;dt til at sl&aring; safe mode fra.';
$lang['modulesnotwritable'] = 'Modul mappen er ikke skrivbar. Hvis du &oslash;nsker at kunne installere moduler ved at upload en XML file skal du s&oslash;rge for fulde skriveretteigheder for mappen modules (chmod 777).  Du er m&aring;ske ogs&aring; n&oslash;dt til at sl&aring; safe mode fra.';
$lang['false'] = 'Falsk';
$lang['settrue'] = 'S&aelig;t til sand';
$lang['filename'] = 'Filnavn';
$lang['filesize'] = 'Filst&oslash;rrelse';
$lang['help'] = 'Hj&aelig;lp';
$lang['language'] = 'Sprog';
$lang['lastname'] = 'Efternavn';
$lang['name'] = 'Navn';
$lang['password'] = 'Kodeord';
$lang['passwordagain'] = 'Kodeord (igen)';
$lang['remove'] = 'Fjern';
$lang['saveconfig'] = 'Gem konfiguration';
$lang['true'] = 'Sand';
$lang['setfalse'] = 'S&aelig;t til falsk';
$lang['type'] = 'Type';
$lang['typenotvalid'] = 'Typen er ikke gyldig';
$lang['unknown'] = 'Ukendt';
$lang['user'] = 'Brug';
$lang['userdefinedtags'] = 'Brugerdefinerede Tags';
$lang['usermanagement'] = 'Bruger-ops&aelig;tning';
$lang['username'] = 'Brugernavn';
$lang['usernameincorrect'] = 'Brugernavn eller password ikke korrekt';
$lang['version'] = 'Version';
$lang['install_title'] = 'CMS Made Simple Installation (trin %s)';
$lang['install_system'] = 'Installations system';
$lang['install_thanks'] = 'Tak fordi du installerede CMS Made Simple';
$lang['upgrade_title'] = 'CMS Made Simple Opgradering (trin %s)';
$lang['upgrade_system'] = 'Opgrad&eacute;r systemet';
$lang['upgrade_thanks'] = 'Tak fordi du opgradere CMS Made Simple til';
$lang['install_please_read'] = 'L&aelig;s venligst <a href="http://wiki.cmsmadesimple.org/index.php/User_Handbook/Installation/Troubleshooting">Installation Troubleshooting</a> siden i CMS Made Simple dokumentations-wiki&#039;en';
$lang['install_checking'] = 'Kontrollere rettigheder og PHP indstillinger';
$lang['install_test'] = 'Test';
$lang['install_result'] = 'Resultater';
$lang['install_required_settings'] = 'N&oslash;dvendige indstillinger';
$lang['install_recommended_settings'] = 'Anbefalede indstillinger';
$lang['install_you_have'] = 'Du har';
$lang['install_legend'] = 'Forklaring';
$lang['install_symbol'] = 'Symbol';
$lang['install_definition'] = 'Definition';
$lang['install_value_passed'] = 'En p&aring;kr&aelig;vet test lykkedes';
$lang['install_value_failed'] = 'En p&aring;kr&aelig;vet test mislykkedes';
$lang['install_error_fragment'] = 'Information til fejlfinding af installationen';
$lang['install_value_required'] = 'En indstilling er under den p&aring;kr&aelig;vede v&aelig;rdi';
$lang['install_value_recommended'] = 'En indstillinger er over den p&aring;kr&aelig;vede v&aelig;rdi, men under den anbefalede<br />eller... En egenskab, som <em>m&aring;ske</em> vil v&aelig;re p&aring;kr&aelig;vet af nogle valgfrie funktioner, er ikke til stede';
$lang['install_value_exceed'] = 'En indstilling er over eller lig med den anbefalede v&aelig;rdi<br />eller... En egenskab, som <em>m&aring;ske</em> vil v&aelig;re p&aring;kr&aelig;vet til nogle valgfrie funktioner, er til stede';
$lang['install_test_failed'] = 'En eller flere tests har fejlet. Du kan stadig installere systemet, men nogen funktioner vil m&aring;ske ikke virke korrekt.<br />Fors&oslash;g venligst at tilrette indstillinger og klik &quot;pr&oslash;v igen&quot;, eller klik p&aring; &quot;forts&aelig;t&quot; knappen.';
$lang['install_test_passed'] = 'Alle tests lykkedes (i det mindste p&aring; et minimum niveau). Klik venligst p&aring; &quot;forts&aelig;t&quot; knappen';
$lang['install_failed_again'] = 'En eller flere tests fejlede. Ret venligst indstillinger og klik p&aring; knappe herunder for at gentage kontrollen.';
$lang['install_try_again'] = 'Pr&oslash;v igen';
$lang['install_continue'] = 'Forts&aelig;t';
$lang['failure'] = 'Fejl';
$lang['caution'] = 'Advarsel';
$lang['install_admin_umask'] = 'Test Fil oprettelses maske';
$lang['install_test_umask'] = 'Klik venligst p&aring; &quot;test&quot;-knappen for at kontrollere';
$lang['test_umask_text'] = 'umask (forkortelse for &quot;user file creation mode mask&quot;) er en funktion i POSIX milj&oslash;er som har med standardtilstanden for nyoprettede filer og mapper for den aktuelle proces at gre. Den kontrollere hvilke af filernes tilladelser der ikke vil blive sat for nyligt oprettede filer.';
$lang['test_check_umask'] = 'Filtest oprettet i';
$lang['test_umask_not_given'] = 'Umask ikke angived';
$lang['test_check_umask_failed'] = 'Umask test fejlede';
$lang['test_username_not_given'] = 'Brugernavn ikke angivet!';
$lang['test_username_illegal'] = 'Brugernavn indeholder ugyldige tegn!';
$lang['test_not_both_passwd'] = 'Kodeordet skal angives 2 gange!';
$lang['test_passwd_not_match'] = 'De 2 kodeord er ikke ens!';
$lang['test_email_accountinfo'] = 'E-mail kontoinformation var valgt, men ingen e-mail adresse var angivet!';
$lang['test_database_prefix'] = 'Database pr&aelig;fikx indeholde ugyldige tegn';
$lang['test_no_dbms'] = 'Ingen dbms valgt!';
$lang['test_could_not_connect_db'] = 'Kunne ikke forbinde til databasen. Kontroll&eacute;r at brugernavn og kodeord er korrekte, og at brugeren har adgang til den angivne database.';
$lang['test_could_not_drop_table'] = 'Kunne ikke droppe en tabel. Kontroll&eacute;r at brugeren har tilladelse til at droppe tabeller i den angivne database.';
$lang['test_could_not_create_table'] = 'Kunne ikke oprette en tabel. Kontroll&eacute;r at brugeren har tilladelse til at oprette tabeller i den angivne database.';
$lang['test_check_php'] = 'Checking for PHP version 4.3+';
$lang['test_min_recommend'] = '(minimum %s, anbefalet %s eller h&oslash;jere)';
$lang['test_min_recommend_plus'] = '(min %s, anbefalet %s+)';
$lang['test_requires_php_version'] = 'CMS Made Simple kr&aelig;ver PHP version 4.3 eller h&oslash;jere (du har %s), men php %s eller h&oslash;jere anbefales for at sikre maksimal kompatibilitet med 3. parts tilf&oslash;jelser.';
$lang['test_check_md5_func'] = 'Kontrollerer for md5 funktion';
$lang['test_check_safe_mode'] = 'Kontrollerer for safe mode';
$lang['test_check_safe_mode_failed'] = 'PHP safe mode kan skabe problemer ved upload af filer og andre funktioner. Det kommer an p&aring; hvor strenge din servers safe mode indstillinger er sat til.';
$lang['test_check_tokenizer'] = 'Kontrollerer for tokenizer funktioner';
$lang['test_check_tokenizer_failed'] = 'Not having the tokenizer could cause pages to render as purely white. We recommend you have this installed, but your website may work fine without it.';
$lang['test_check_gd'] = 'Kontrollerer for GD funktioner';
$lang['test_check_gd_failed'] = 'GD biblioteket er obligatorisk for nogle moduler og funktionaliteter.';
$lang['test_check_write'] = 'Kontrollerer skriverettigheder for';
$lang['test_may_not_exist'] = 'Denne fil eksisterer muligvid ikke endnu. Hvis den ikke g&oslash;r, skal do oprette en tom fil med dette navn. Kontroll&eacute;r venligst at filen er skrivbar for den proces webserveren k&oslash;rer under';
$lang['could_not_retrieve_a_value'] = 'Kunne ikke finde en v&aelig;rdi... forts&aelig;tter.';
$lang['displaying_the_value_originally'] = '<br />Viser v&aelig;rdien der tidligere er sat i config filen (dette er ikke n&oslash;dvendigvis korrekt).';
$lang['test_check_xml_func'] = 'Kontrollerer for grundl&aelig;ggende XML (expat) underst&oslash;ttelse';
$lang['test_allow_url_fopen_failed'] = 'N&aring;r allow url fopen er deaktiveret, s&aring; har du ikke adgang til filer m.v. via URL hverken via ftp - eller http-protokollen.';
$lang['test_remote_url'] = 'Unders&oslash;ger remote URL';
$lang['test_remote_url_failed'] = 'Du vil sandsynligvis ikke kunne &aring;bne en fil, som ligger p&aring; en anden webserver.';
$lang['connection_error'] = 'Udg&aring;ende HTTP-forbindelser ser ikke ud til at virke! Er der en firewall eller en eller anden adgangskontrolliste til eksterne forbindelser? Det her vil medf&oslash;re, at Modulh&aring;ndteringen, og sandsynligvis ogs&aring; andre funktioner, ikke fungerer.';
$lang['remote_connection_timeout'] = 'Forbindelsen l&oslash;b ind i en time out!';
$lang['search_string_find'] = 'Forbindelse ok!';
$lang['connection_failed'] = 'Forbindelse mislykkedes!';
$lang['remote_response_ok'] = 'Svar fra fjernserver: ok!';
$lang['remote_response_404'] = 'Svar fra fjernserver: ikke fundet!';
$lang['remote_response_error'] = 'Svar fra fjernserver: fejl!';
$lang['test_check_file_upload'] = 'Unders&oslash;ger uploadede filer';
$lang['test_check_file_failed'] = 'N&aring;r upload af filer er deaktiveret, vil du ikke kunne bruge nogen af de faciliteter til upload af filer, som f&oslash;lger med i CMS Made Simple. Hvis det er muligt, s&aring; b&oslash;r denne restriktion fjernes af systemet administrator, s&aring; alle systemets filh&aring;ndteringsfunktioner kan anvendes S&aring; er du advaret, hvis du forts&aelig;tter.';
$lang['test_check_memory'] = 'Unders&oslash;ger PHP&#039;s hukommelsesgr&aelig;nse';
$lang['test_check_memory_failed'] = 'Der er muligvis ikke hukommelse nok til, at CMSMS kan k&oslash;re korrekt eller med alle de udvidelser, du m&aring;tte &oslash;nske at anvende. Hvis det er muligt, s&aring; b&oslash;r du pr&oslash;ve at f&aring; systemets administrator til at forh&oslash;je denne v&aelig;rdi. V&aelig;r opm&aelig;rksom p&aring; dette, hvis du forts&aelig;tter.';
$lang['test_check_time_limit'] = 'Unders&oslash;ger PHP&#039;s udl&oslash;bstidsgr&aelig;nse i sekunder';
$lang['test_check_time_limit_failed'] = 'Antallet af sekunder, som et script m&aring; v&aelig;re om at k&oslash;re. Hvis denne gr&aelig;nse n&aring;s, vil scriptet returnere en fejl og d&oslash;.';
$lang['test_check_post_max'] = 'Unders&oslash;ger maksimal sendest&oslash;rrelse';
$lang['test_check_post_max_failed'] = 'Du vil sandsynligvis ikke kunne sende (st&oslash;rre m&aelig;ngder) data. V&aelig;r venligst opm&aelig;rksom p&aring; denne begr&aelig;nsning.';
$lang['test_check_upload_max'] = 'Unders&oslash;ger maksimal filst&oslash;rrelse for uploads';
$lang['test_check_upload_max_failed'] = 'Du vil sandsynligvis ikke kunne uploade (st&oslash;rre) filer med de medf&oslash;lgende funktioner til h&aring;ndtering af filer. V&aelig;r venligst opm&aelig;rksom p&aring; denne begr&aelig;nsning.';
$lang['test_check_writable'] = 'Unders&oslash;ger om der kan skrives til %s';
$lang['test_check_upload_failed'] = 'Der kan ikke skrives til mappen uploads. Du kan godt bruge systemet alligevel, men du vil ikke kunne uploade filer via administrationspanelet.';
$lang['test_check_images_failed'] = 'Der kan ikke skrives til mappen images. Du kan godt bruge systemet alligevel, men du vil ikke kunne uploade og bruge billeder via administrationspanelet.';
$lang['test_check_modules_failed'] = 'Der kan ikke skrives til mappen modules. YDu kan godt bruge systemet alligevel, men du vil ikke kunne uploade moduler via administrationspanelet.';
$lang['test_check_file_get_contents'] = 'Unders&oslash;ger om file_get_contents er til stede';
$lang['test_check_file_get_contents_failed'] = 'Funktionen file_get_contents blev tilf&oslash;jet i PHP 4.3 og selvom der er lavet en m&aring;de at komme om ved det p&aring;, s&aring;ledes at det meste af den funktionalitet, som bruger denne funktion, kan k&oslash;re gnidningsl&oslash;st i PHP 4.2, s&aring; kan det anbefales at opgradere til PHP 4.3 eller derover.';
$lang['test_check_session_save_path'] = 'Unders&oslash;ger om der kan skrives til session.save_path';
$lang['test_empty_session_save_path'] = 'Din session.save_path er tom. PHP vil bruge dit operativsystems midlertidige mappe. Hvis du f&aring;r problemer med sessions og ini_set virker, s&aring; kan du pr&oslash;ve at aktivere session cookies ved at tilf&oslash;je: ini_set(&#039;session.use_only_cookies&#039;, 1);  i toppen af filen include.php';
$lang['test_check_session_save_path_failed'] = 'session.save_path er &quot;%s&quot;. N&aring;r stien er skrivebeskyttet, s&aring; kan der ske det, at det bliver umuligt at logge ind i administrationspanelet. Du b&oslash;r fjerne skrivebeskyttelsen, hvis du f&aring;r problemer med at logge ind i administrationspanelet. Denne test kan fejle, s&aring;fremt safe_mode er aktiveret (se nedenfor).';
$lang['test_check_ini_set'] = 'Unders&oslash;ger om ini_set virker';
$lang['test_check_ini_set_failed'] = 'Man <strong>skal</strong> ikke n&oslash;dvendigvis kunne tilsides&aelig;tte indstillingerne i php.ini, men der er nogle (ikke obligatoriske) udvidelser og tilf&oslash;jelser, hvis funktionalitet afh&aelig;nger af, at de kan bruge ini-set til at forl&aelig;nge k&oslash;rselstiden og til at tillade upload af st&oslash;rre filer m.v. Du kan f&aring; problemer med nogle udvidelser uden denne mulighed. Testen kan mislykkes, hvis safe_mode er aktiveret (se nedenfor)';
$lang['install_admin_header'] = 'Oplysninger om administrators konto';
$lang['install_admin_info'] = 'V&aelig;lg brugernavn, adgangskode og email adresse til din administrator-konto. Du bedes sikre dig, at du gemmer adgangskoden et eller andet sted, da det ikke er muligt at logge ind i CMS Made Simple administrationssystemet uden den.';
$lang['install_admin_email'] = 'Email adresse';
$lang['install_admin_email_info'] = 'Send en email med konto-oplysningerne';
$lang['install_admin_email_note'] = '<strong>Bem&aelig;rk:</strong> Denne funktion anvender php&#039;s mail function. Hvis ikke du modtager denne email, s&aring; kan det tyde p&aring;, at din server ikke er blevet ordentligt konfigureret og at du b&oslash;r kontakte din host administrator.';
$lang['install_admin_sitename'] = 'Dette er navnet p&aring; din hjemmeside. Det vil blive brugt forskellige steder i standardskabelonerne og kan inds&aelig;ttes hvor som helst med koden {sitename}.';
$lang['install_admin_db'] = 'Databaseinformation';
$lang['install_admin_db_info'] = '<p>V&aelig;r sikker p&aring;, at du har oprettet din database og har givet en bruger alle privilegeier, s&aring; denne bruger kan anvende den database.</p>
<p>Hvad ang&aring;r MySQL, s&aring; g&oslash;r f&oslash;lgende:</p>
<p>Log ind i mysql via en konsol og k&oslash;r f&oslash;lgende kommandoer:</p>
<ol>
<li>create database cms; (brug et hvilket som helst navn, du &oslash;nsker, men v&aelig;r sikker p&aring;, du kan huske det, for du skal sidenhen indtaste det p&aring; denne side)</li>
<li>grant all privileges on cms.* to cms_user@localhost identified by &#039;cms_pass&#039;;</li>
</ol>';
$lang['install_admin_follow'] = 'Udfyld venligst f&oslash;lgende felter';
$lang['install_admin_db_type'] = 'Databasetype';
$lang['install_admin_no_db'] = 'Det ser ikke ud til, at der er nogen gyldige database-drivers til din installation af PHP. Unders&oslash;g venligst, at der nu ogs&aring; <strong>er</strong> blevet installeret underst&oslash;ttelse af mysql, mysqli, og/eller postgres7 og pr&oslash;v s&aring; igen.';
$lang['install_admin_db_host'] = 'Databasens v&aelig;rtsadresse';
$lang['install_admin_db_name'] = 'Databasenavn';
$lang['install_admin_db_create'] = 'Opret tabeller (advarsel: sletter eksisterende data)';
$lang['install_admin_db_prefix'] = 'Tabel-pr&aelig;fiks';
$lang['install_admin_db_sample'] = 'Install&eacute;r eksempel p&aring; indhold og skabeloner';
$lang['retry'] = 'Fors&oslash;g igen';
$lang['install_admin_db_create_seq'] = 'Opretter %s tabel sekvens...';
$lang['install_admin_importing'] = 'Importerer eksempeldata...';
$lang['invalid_query'] = 'Ugyldig foresp&oslash;rgsel: %s';
$lang['install_creating_table'] = '<p>Opretter %s tabel... [%s]</p>';
$lang['install_creating_index'] = '<p>Opretter indeks i %s tabel... [%s]</p>';
$lang['done'] = 'f&aelig;rdig';
$lang['failed'] = 'fejlede';
$lang['install_admin_error_schema'] = 'Fejl: SQL schema kunne ikke hentes';
$lang['install_admin_set_account'] = 'Gemmer administrators konto-oplysninger...';
$lang['install_admin_set_sitename'] = 'Gemmer sidens navn...';
$lang['install_admin_setup'] = 'Now let&#039;s continue to setup your configuration file, we already have most of the stuff we need. Chances are you can leave all these values alone, so when you are ready, click Continue.';
$lang['install_admin_docroot'] = 'CMS dokument-rodmappe (som set fra webserveren.)';
$lang['install_admin_docroot_path'] = 'Sti til serverens rodmappe';
$lang['install_admin_querystring'] = 'Query string (lad denne v&aelig;rdi v&aelig;re som den er, med mindre du l&oslash;ber ind i problemer. I s&aring; fald skal du redigere config.php manuelt)';
$lang['invalid_querys'] = '<b>ADVARSEL<b/>: Der findes ugyldige foresp&oslash;rgsler til din database!';
$lang['install_admin_sitedown'] = 'Fejl: Kunne ikke fjerne filen tmp/cache/SITEDOWN. Slet den venligst manuelt.';
$lang['install_admin_update_hierarchy'] = 'Opdaterer hierakiske positioner..';
$lang['install_admin_set_core_event'] = 'Ops&aelig;tter kerne h&aelig;ndelser...';
$lang['install_admin_install_modules'] = 'Installerer moduler...';
$lang['install_admin_index_search'] = 'Indekserer s&oslash;gning...';
$lang['install_admin_clear_cache'] = 'Nulstiller sidens cache...';
$lang['install_admin_emailing'] = 'Sender admin konto-oplysninger via email...';
$lang['install_admin_congratulations'] = 'Tillykke, du har nu sat systemet om - her er dit';
$lang['could_not_connect_db'] = 'Kunne ikke forbinde til databasen. Kontroll&eacute;r at brugernavn og kodeord er korrekte, og at denne bruger har adgang til den angivne database';
$lang['cannot_write_config'] = 'Fejl: Kan ikke skrive til %s.';
$lang['email_accountinfo_subject'] = 'CMS Made Simple administrators konto-oplysninger';
$lang['email_accountinfo_message'] = 'Tak fordi du installerede CMS Made Simple

Dette er dine nye konto-oplysninger:
brugernavn: %s
kodeord: %s

Log ind i administrationspanelet her: %s';
$lang['utma'] = '156861353.2012825315.1357380883.1357390139.1357393703.4';
$lang['utmz'] = '156861353.1357380883.1.1.utmccn=(referral)|utmcsr=docs.cmsmadesimple.org|utmcct=/modules/add-ons|utmcmd=referral';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>