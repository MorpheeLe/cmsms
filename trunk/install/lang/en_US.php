<?php
// A
$lang['about'] = 'About';
$lang['action'] = 'Action';
$lang['actionstatus'] = 'Action/Status';
$lang['active'] = 'Active';
$lang['add'] = 'Add';
$lang['add_column_sql'] = 'Adding column to %s table ...';
$lang['admin_salt'] = 'Salt Admin Passwords';
$lang['advanced'] = 'Advanced';
$lang['automatedtask_success'] = 'Automated Task Succeeded';

// B
$lang['back'] = 'Back to Menu';

// C
$lang['cachenotwritable'] = 'Cache folder is not writeable. Clearing cache will not work. Please make the tmp/cache folder have full read/write/execute permissions (chmod 777).  You may also have to disable safe mode.';
$lang['cancel'] = 'Cancel';
$lang['cannot_clean_cache_dirs'] = 'Cannot cleaning cache directories!';
$lang['cannot_write_config'] = 'Error: Cannot write to %s.';
$lang['cantchmodfiles'] = 'Couldn\'t change permissions on some files';
$lang['cantremove'] = 'Cannot Remove';
$lang['cantremovefiles'] = 'Problem Removing Files (permissions?)';
$lang['caution'] = 'Caution';
$lang['changepermissions'] = 'Change Permissions';
$lang['changepermissionsconfirm'] = 'USE CAUTION\n\nThis action will attempt to ensure that all of the files making up the module are writeable by the web server.\nAre you sure you want to continue?';
$lang['checksum'] = 'Checksum test';
$lang['checksum_failed'] = 'Checksum match with errors. Look at the help for more information';
$lang['checksum_file'] = 'Checksum file';
$lang['checksum_match'] = 'Checksum matches!';
$lang['checksum_not_match'] = 'Checksum does not match!';
$lang['checksum_passed'] = 'All checksums match!';
$lang['cms_install_information'] = 'CMS Install Information';
$lang['cms_site'] = 'CMS Site';
$lang['cms_version'] = 'CMS Version';
$lang['connection_error'] = 'Outgoing HTTP connections do not appear to work! Is there a firewall or some ACL for external connections? This will result in Module Manager, and potentially other functionality, failing.';
$lang['connection_failed'] = 'Connection failed!';
$lang['could_not_connect_db'] = 'Could not connect to the database. Verify that username and password are correct, and that the user has access to the given database.';
$lang['could_not_retrieve_a_value'] = 'Could not retrieve a value.... passing any ways.';
$lang['create'] = 'Create';
$lang['create_permission'] = 'Create permission ...';

// D
$lang['database'] = 'Database';
$lang['databaseprefix'] = 'Database Prefix';
$lang['databasetype'] = 'Database Type';
$lang['date'] = 'Date';
$lang['default'] = 'Default';
$lang['delete'] = 'Delete';
$lang['deleteconfirm'] = 'Are you sure you want to delete - %s - ?';
$lang['description'] = 'Description';
$lang['detected'] = 'Detected';
$lang['directoryexists'] = 'This directory already exists.';
$lang['displaying_the_value_originally'] = '<br />Displaying the value originally set in the config file (this may not be accurate).';
$lang['docroot_leaveblank'] = 'Leave this blank to use the system default';
$lang['done'] = 'done';
$lang['down'] = 'Down';

// E
$lang['edit'] = 'Edit';
$lang['email'] = 'Email Address';
$lang['email_accountinfo_message'] = <<<EOF
Thank you for installing CMS Made Simple.

This is your new account information:
username: %s
password: %s

Log into the site admin here: %s
EOF;
$lang['email_accountinfo_subject'] = 'CMS Made Simple&trade; Admin Account Information';
$lang['empty_query'] = 'Empty query?? %s';
$lang['error'] = 'Error';
$lang['errorcantcreatefile'] = 'Could not create a file (permissions problem?)';
$lang['errordeletingfile'] = 'Could not delete file. Permissions Problem?';
$lang['errordirectorynotwritable'] = 'No permission to write in directory.  This could be caused by file permissions and ownership.  Safe mode may also be in effect.';
$lang['errorfilenot'] = 'File not found!';
$lang['errorfilenotwritable'] = 'File not writeable!';
$lang['execute'] = 'Execute';

// F
$lang['failed'] = 'failed';
$lang['failure'] = 'Failure';
$lang['false'] = 'False';
$lang['filename'] = 'File name';
$lang['filesize'] = 'File Size';
$lang['format_datetime'] = '%c';
$lang['function_file_uploads_off'] = 'file_uploads is off in your php configuration!';

// G
$lang['gd_version'] = 'GD version';
$lang['global_umask'] = 'File Creation Mask (umask)';
$lang['go_to_admin'] = 'go to the Admin Panel';
$lang['group'] = 'Group';

// H
$lang['help'] = 'Help';
$lang['help_systeminformation'] = <<<EOT
The information displayed below is collected from a variety of locations, and summarized so that you may be able to conveniently find some of the information required when trying to diagnose a problem or request help with your CMS Made Simple installation.
EOT;
$lang['here'] = 'here';

// I
$lang['info_create_dir_and_file'] = 'The HTTP Process owner cannot create a file inside a directory that it owns. This probably means that safe mode is enabled in some way. Many functions inside CMS made simple will not operate properly without this ability. Continuing is not possible.';
$lang['info_edeprecated_failed'] = 'If E_DEPRECATED is enabled in your error reporting users will see a lot of warning messages that could effect the display and functionality';
$lang['info_estrict_failed'] = 'Some libraries that CMSMS uses do not work well with E_STRICT.  Please disable this before continuing';
$lang['info_urlcheckversion'] = 'If this URL is the word &quot;none&quot; no checks will be made.<br />An empty string will result in a default URL being used.';
$lang['installed_module'] = 'Module Installed';
$lang['installer_done'] = '[done]';
$lang['installer_failed'] = '[failed]';
$lang['installing_module'] = 'Installing module %s ...';
$lang['install_admin_checksum'] = 'Check your installation';
$lang['install_admin_clear_cache'] = 'Clearing website cache';
$lang['install_admin_congratulations'] = 'Congratulations, you are all setup - here is your ';
$lang['install_admin_db'] = 'Database Information';
$lang['install_admin_db_create'] = 'Create Tables (Warning: Deletes existing data)';
$lang['install_admin_db_create_seq'] = 'Creating %s table sequence...';
$lang['install_admin_db_host'] = 'Database host address';
$lang['install_admin_db_info'] = <<<EOT
<p>Make sure you have created your database and granted full privileges to a user to use that database.</p>
<p>For MySQL, use the following:</p>
<p>Log in to mysql from a console and run the following commands:</p>
<ol>
<li>create database cms; (use whatever name you want here but make sure to remember it, you'll need to enter it on this page)</li>
<li>grant all privileges on cms.* to cms_user@localhost identified by 'cms_pass';</li>
</ol>
EOT;
$lang['install_admin_db_name'] = 'Database name';
$lang['install_admin_db_port'] = 'Database port';
$lang['install_admin_db_port_info'] = 'If you don\'t know, leave this blank to use default settings.';
$lang['install_admin_db_prefix'] = 'Table prefix';
$lang['install_admin_db_sample'] = 'Install sample content and templates';
$lang['install_admin_db_socket'] = 'Database socket';
$lang['install_admin_db_socket_info'] = 'NOT SUPPORTED.';
$lang['install_admin_db_type'] = 'Database Type';
$lang['install_admin_docroot'] = 'CMS Document root (as seen from the webserver)';
$lang['install_admin_docroot_path'] = 'Path to the Document root';
$lang['install_admin_email'] = 'E-mail Address';
$lang['install_admin_emailing'] = 'E-mailing admin account information...';
$lang['install_admin_email_info'] = 'E-Mail Account Information';
$lang['install_admin_email_note'] = '<strong>Note:</strong> This task uses the php\'s mail function. If you don\'t receive this email, it may be an indication that your server is not properly configured and that you should contact your host administrator.';
$lang['install_admin_error_schema'] = 'Error in retrieve SQL schema';
$lang['install_admin_follow'] = 'Please complete the following fields';
$lang['install_admin_frontendlang'] = 'Default language for the frontend. This adjusts the locale used for various default date handling functions, etc.';
$lang['install_admin_header'] = 'Admin Account Information';
$lang['install_admin_importing'] = 'Importing sample data...';
$lang['install_admin_index_search'] = 'Index Search...';
$lang['install_admin_info'] = 'Select the username, password and email address for your admin account. Please make sure you record this password somewhere.';
$lang['install_admin_install_modules'] = 'Installing modules...';
$lang['install_admin_no_db'] = 'No valid database drivers appear to be compiled into your PHP install. Please confirm that you have mysql, mysqli, and/or postgres7 support installed, and try again.';
$lang['install_admin_pwsalt_note'] = 'If you choose to enable password salts, there is absolutely no way to reset lost admin passwords, other than through the lost password functionality.   It is critical that you associate an email address with each admin account';
$lang['install_admin_querystring'] = 'Query string (leave this alone unless you have trouble, then edit config.php by hand)';
$lang['install_admin_setup'] = 'Now let\'s continue to setup your configuration file, we already have most of the stuff we need. Chances are you can leave all these values alone, so when you are ready, click Continue.';
$lang['install_admin_set_account'] = 'Setting admin account information...';
$lang['install_admin_set_core_event'] = 'Setting up core events...';
$lang['install_admin_set_salt'] = 'Setting password salt...';
$lang['install_admin_set_sequences'] = 'Update sequence tables... [done]';
$lang['install_admin_set_sitename'] = 'Setting sitename...';
$lang['install_admin_sitedown'] = 'Error: Could not remove the tmp/cache/SITEDOWN file. Please remove manually.';
$lang['install_admin_sitename'] = 'This is the name of your site. It will be used in various places of the default templates and can be used anywhere with the {sitename} tag.';
$lang['install_admin_tablesnotcreated'] = 'Process complete. The installation process has completed, at your request database tables were not created. However, the config file has been reset and all pre-installation tests have passed. Thank you, and here is your';
$lang['install_admin_umask'] = 'Test File Creation Mask';
$lang['install_admin_update_hierarchy'] = 'Updating hierarchy positions...';
$lang['install_checking'] = 'Checking permissions and PHP settings';
$lang['install_continue'] = 'Continue';
$lang['install_creating_index'] = '<p>Creating index in %s table... [%s]</p>';
$lang['install_creating_table'] = '<p>Creating %s table... [%s]</p>';
$lang['install_default_encoding'] = 'In almost all cases, default_encoding should be utf-8.';
$lang['install_definition'] = 'Definition';
$lang['install_error_fragment'] = 'Info Installation Troubleshooting';
$lang['install_failed_again'] = 'One or more tests have failed. Please correct the problem and click the button below to recheck.';
$lang['install_legend'] = 'Legend';
$lang['install_please_read'] = 'Please read the <a rel="external" href="http://docs.cmsmadesimple.org/installation/requirements">Installation Troubleshooting</a> page in the CMS Made Simple&trade; Official Documentation.';
$lang['install_recommended_settings'] = 'Recommended settings';
$lang['install_required_settings'] = 'Required settings';
$lang['install_result'] = 'Result';
$lang['install_symbol'] = 'Symbol';
$lang['install_system'] = 'Install System';
$lang['install_test'] = 'Test';
$lang['install_test_checksum'] = 'You can validate the integrity of your CMS files by comparing against original CMS checksum.<br />It can assist in finding problems with uploads.';
$lang['install_test_failed'] = 'One or more tests have resulted in a warning... You can nevertheless install the system by clicking the "Continue" button now. But some CMS functionalities may not work correctly. You can always change the settings later.<br /><br />If you try to correct the warnings at this moment, test them by clicking "Try Again".';
$lang['install_test_passed'] = 'All tests passed (at least at a minimum level). Please click the "Continue" button.';
$lang['install_test_umask'] = 'Please click Test button for check the umask entered...';
$lang['install_thanks'] = 'Thanks for installing CMS Made Simple&trade;';
$lang['install_timezone2'] = 'Please select the timezone for your installation.  This timezone value will be used for entering times into the system and for date and time calculations.<br/><br/>CMSMS has attempted to choose an intelligent default for you based on your servers current location, however this may not be correct.<br/><br/><strong style="color: red;">Note:</strong> This is a change in behavior from previous versions of CMSMS. Also, you may need to enable the set_db_timezone config value if your server is in a different timezone than your primary user base.';
$lang['install_title'] = 'CMS Made Simple&trade; Install (step %s)';
$lang['install_try_again'] = 'Try Again';
//$lang['install_value_exceed'] = 'A setting meets or exceeds the recommended threshold, or...<br />A capability that <em>may</em> be required for some optional functionality is available';
$lang['install_value_failed'] = 'A test failed';
$lang['install_value_passed'] = 'A test passed';
$lang['install_value_recommended'] = 'A setting is above the required value, but below the recommended value, or...<br />A capability that <em>may</em> be required for some optional functionality is unavailable';
$lang['install_value_required'] = 'A setting is below a required minimum value';
$lang['install_warn_db_createtables'] = 'Normally this field should be checked at all times.  Use caution when disabling this feature';
$lang['install_you_have'] = 'You have';
$lang['invalidemail'] = 'The email address entered is invalid';
$lang['invalid_query'] = 'Invalid query: %s';
$lang['invalid_querys'] = '<b>WARNING</b>: Invalid queries on your DB!';
$lang['ip_addr'] = 'IP Address';
$lang['is_directory'] = 'This resource is a directory!';
$lang['is_readable_false'] = 'This resource is not readable!';

// J

// K

// L
$lang['language'] = 'Language';
$lang['lastname'] = 'Last Name';

// M
$lang['max_execution_time'] = 'Maximum Execution Time';
$lang['memory_limit'] = 'PHP Memory Limit';
$lang['modulesnotwritable'] = 'The modules folder is not writeable, if you would like to install modules by uploading an XML file you need to make the modules folder have full read/write/execute permissions (chmod 777).  Safe mode may also be in effect.';
$lang['mod_security'] = 'Apache Mod Security';

// N
$lang['name'] = 'Name';
$lang['need_upgrade_schema'] = 'CMS is in need of an upgrade.<br />You are now running schema version %s and you need to be upgraded to version %s';
$lang['new_version_available'] = '<em>Notice:</em> A new version of CMS Made Simple is available.  Please notify your administrator.';
$lang['nofiles'] = 'This resource does not exist!';
$lang['none'] = 'None';
$lang['noneed_upgrade_modules'] = 'The core modules are up to date';
$lang['noneed_upgrade_schema'] = 'The CMS database is up to date. Using schema version %s';
$lang['not_checksum'] = 'Could not retrieve checksum!';
$lang['no_db_driver'] = 'No compatible database drivers found';

// O
$lang['off'] = 'Off';
$lang['on'] = 'On';
$lang['or_greater'] = 'Or greater';
$lang['other'] = 'Other';
$lang['owner'] = 'Owner';

// P
$lang['password'] = 'Password';
$lang['passwordagain'] = 'Password (again)';
$lang['permissions'] = 'Permissions';
$lang['permission_information'] = 'Permission Information';
$lang['phpinfo'] = 'Display PHP Information';
$lang['phpversion'] = 'Current PHP Version';
$lang['php_information'] = 'PHP Information';
$lang['post_max_size'] = 'Maximum Post Size';

// Q

// R
$lang['read'] = 'Read';
$lang['remote_connection_timeout'] = 'Connection Timed Out!';
$lang['remote_response_404'] = 'Remote response: not found!';
$lang['remote_response_error'] = 'Remote response: error!';
$lang['remote_response_ok'] = 'Remote response: OK!';
$lang['remove'] = 'Remove';
$lang['results'] = 'Results';
$lang['retry'] = 'Retry';

// S
$lang['safe_mode'] = 'PHP Safe Mode';
$lang['saveconfig'] = 'Save Config';
$lang['schema_ok'] = 'The CMS database is up to date.  Using schema version %s';
$lang['search_string_find'] = 'Connection OK!';
$lang['server_api'] = 'Server API';
$lang['server_db_type'] = 'Server Database';
$lang['server_db_version'] = 'Server Database Version';
$lang['server_information'] = 'Server Information';
$lang['server_os'] = 'Server Operating System';
$lang['server_software'] = 'Server Software';
$lang['session_save_path'] = 'Session Save Path';
$lang['setfalse'] = 'Set False';
$lang['settrue'] = 'Set True';
$lang['setup_flat_urls'] = 'Flat URLs are setup';
$lang['sitedown_not_removed'] = 'Could not remove the tmp/cache/SITEDOWN file. Please remove manually or you will continue to show a "Site Down for Maintenance" message on your site';
$lang['sitename'] = 'Site Name';
$lang['success'] = 'Success';
$lang['systeminfo'] = 'System Information';
$lang['systeminfodescription'] = 'Display various pieces of information about your system that may be useful in diagnosing problems';
$lang['systeminfo_copy_paste'] = 'Please copy and paste this selected text into your forum posting';

// T
$lang['test'] = 'Test';
$lang['test_allow_url_fopen_failed'] = 'When allow url fopen is disabled you will not be able to accessing URL object like file using the ftp or http protocol.';
$lang['test_check_db_drivers'] = 'DB drivers';
$lang['test_check_db_drivers_failed'] = 'No DB drivers found';
$lang['test_check_disable_functions'] = 'Checking PHP disable functions';
$lang['test_check_disable_functions_failed'] = 'Warning: this is a list of functions disabled on your server.';
$lang['test_check_file_failed'] = 'When file uploads are disabled you will not be able to use any of the file uploading facilities included in CMS Made Simple. If possible, this restriction should be lifted by your system admin to properly use all file management features of the system. Proceed with caution.';
$lang['test_check_file_get_contents'] = 'Checking for file_get_contents';
$lang['test_check_file_get_contents_failed'] = 'You will probably not be able to use any of functionality that uses this function';
$lang['test_check_file_upload'] = 'Checking file uploads';
$lang['test_check_gd'] = 'Checking for GD library';
$lang['test_check_gd_failed'] = 'The GD library is mandatory for some modules and functionality.';
$lang['test_check_images_failed'] = 'The images folder is not writeable. You can still install the system, but you will not be able to upload and use images via the Admin Panel.';
$lang['test_check_ini_set'] = 'Checking if ini_set works';
$lang['test_check_ini_set_failed'] = 'Although the ability to override php ini settings is not mandatory, some add-on (optional) functionality uses ini_set to extend time-outs, and allow uploading of larger files, etc. You may have difficulty with some add-on functionality without this capability. This test may fail if safe_mode is enabled (see below).';
$lang['test_check_magic_quotes_gpc'] = 'Magic quotes for Get/Post/Cookie operations';
$lang['test_check_magic_quotes_gpc_failed'] = 'When magic_quotes are on, all single-quote, double quote and backslash are escaped with a backslash automatically. This can cause many problems in CMS.';
$lang['test_check_magic_quotes_runtime'] = 'Magic quotes in runtime';
$lang['test_check_magic_quotes_runtime_failed'] = 'When magic_quotes are on, most functions that return data from any sort of external source including databases and text files will have quotes escaped with a backslash. This will cause problems with CMS made simple.';
$lang['test_check_md5_func'] = 'Checking for md5 Function';
$lang['test_check_memory'] = 'Checking PHP memory limit';
$lang['test_check_memory_failed'] = 'You may not have enough memory to run CMSMS correctly, or with all of your desired add-ons. If possible, you should try to get your web host to raise this value. Proceed with caution.';
$lang['test_check_modules_failed'] = 'The modules folder is not writeable. You can still install the CMS system, but you will not be able to install modules via the Module Manager in the Admin Panel.';
$lang['test_check_open_basedir'] = 'Check for PHP Open Basedir';
$lang['test_check_open_basedir_failed'] = 'Open Basedir restrictions are in effect. You may have difficulty with some add-on functionality with this restriction.';
$lang['test_check_output_buffering'] = 'Checking output buffering';
$lang['test_check_output_buffering_failed'] = 'Output buffering is disabled. You will probably not be able to use any of functionality that requires this';
$lang['test_check_php'] = 'Checking for PHP version %s+';
$lang['test_check_post_max'] = 'Checking maximum post size';
$lang['test_check_post_max_failed'] = 'You will probably not be able to submit (larger) data. Please be aware of this restriction.';
$lang['test_check_register_globals'] = 'Checking PHP register globals';
$lang['test_check_register_globals_failed'] = 'PHP register globals is active. For security reasons, this should be disabled.';
$lang['test_check_safe_mode'] = 'Checking for safe mode';
$lang['test_check_safe_mode_failed'] = 'PHP safe mode could create some problems with uploading files and other functions. It all depends on how strict your server safe mode settings are.';
$lang['test_check_session_save_path'] = 'Checking if session.save_path is writeable';
$lang['test_check_session_save_path_failed'] = 'Your session.save_path is "%s". Not having this as writeable may make logins to the Admin Panel not work. You may want to look into making this path writeable if you have trouble logging into the Admin Panel. This test may fail if safe_mode is enabled (see below).';
$lang['test_check_tempnam'] = 'Checking for tempnam Function';
$lang['test_check_time_limit'] = 'Checking PHP time limit in second';
$lang['test_check_time_limit_failed'] = 'Number of seconds a script is allowed to run. If this is reached, the script returns a fatal error.';
$lang['test_check_tokenizer'] = 'Checking for tokenizer functions';
$lang['test_check_tokenizer_failed'] = 'Not having the tokenizer could cause pages to render as purely white. We required you have this installed.';
$lang['test_check_umask'] = 'Result test on file created in';
$lang['test_check_umask_failed'] = 'Test umask failed';
$lang['test_check_upload_failed'] = 'The uploads folder is not writeable. You can still install the system, but you will not be able to upload files via the Admin Panel.';
$lang['test_check_upload_max'] = 'Checking maximum upload file size';
$lang['test_check_upload_max_failed'] = 'You will probably not be able to upload (larger) files using the included file management functions. Please be aware of this restriction.';
$lang['test_check_writable'] = 'Checking if %s is writeable';
$lang['test_check_write'] = 'Checking write permission on';
$lang['test_check_xml_failed'] = 'XML support is not compiled into your php install. You can still use the system, but will not be able to use any of the remote module installation functions.';
$lang['test_check_xml_func'] = 'Checking for basic XML (expat) support';
$lang['test_could_not_connect_db'] = 'Could not connect to the database. Verify that username and password are correct, and that the user has access to the given database.';
$lang['test_could_not_create_table'] = 'Could not create a table. Verify that the user has privileges to create tables in the given database.';
$lang['test_could_not_drop_table'] = 'Could not drop a table. Verify that the user has privileges to drop tables in the given database.';
$lang['test_create_dir_and_file'] = 'Checking if the httpd process can create a file inside of a directory it created.';
$lang['test_database_prefix'] = 'Database prefix contains invalid characters';
$lang['test_edeprecated_failed'] = 'E_DEPRECATED is enabled';
$lang['test_email_accountinfo'] = 'E-mail account info selected, but no E-mail address given!';
$lang['test_empty_session_save_path'] = 'Your session.save_path is empty. PHP will use the temporary directory of your OS. If you have SESSION problems and ini_set works you can try to enable session cookies by adding: ini_set(\'session.use_only_cookies\', 1);  in the top of your config.php file';
$lang['test_error_edeprecated'] = 'Testing error_reporting to ensure E_DEPRECATED is disabled';
$lang['test_error_estrict'] = 'Testing error_reporting to ensure E_STRICT is disabled';
$lang['test_estrict_failed'] = 'E_STRICT is enabled';
$lang['test_file_timedifference'] = 'Testing for time difference in the file system';
$lang['test_file_timedifference_msg'] = 'Detected a difference of at least %d seconds.  This may effect the system dramatically';
$lang['test_may_not_exist'] = 'This file may not exist yet. If it does not, you should create an empty file with this name. Please also ensure that this file writeable by the web server process.';
$lang['test_min_recommend'] = '(minimum %s, recommend %s or greater)';
$lang['test_min_recommend_plus'] = '(Min. %s, recommend %s+)';
$lang['test_not_both_passwd'] = 'Please complete both password fields.';
$lang['test_no_dbms'] = 'No dbms selected!';
$lang['test_open_basedir_session_save_path'] = 'Open basedir restrictions appear to be in effect. If you have SESSION problems and ini_set works, you can try to enable sessions with cookies adding: ini_set(\'session.use_only_cookies\', 1);  to top of config.php';
$lang['test_passwd_not_match'] = 'Password fields do not match!';
$lang['test_remote_url'] = 'Test for remote URL';
$lang['test_remote_url_failed'] = 'You will probably not be able to open a file on a remote web server.';
$lang['test_requires_php_version'] = 'CMS Made Simple requires a php version of 5.3.2 or greater (you have %s), but PHP %s or greater is recommended to ensure maximum compatibility with third party add-ons';
$lang['test_umask_not_given'] = 'Umask not given';
$lang['test_umask_text'] = 'umask (abbreviated from User file creation mode MASK) is a function in POSIX environments which affects the default file system mode for newly created files and directories of the current process. It controls which of the file permissions will not be set for any newly created file.';
$lang['test_username_illegal'] = 'Username contains illegal characters!';
$lang['test_username_not_given'] = 'You must supply a Username.';
$lang['test_xmlreader_class'] = 'Checking if the XMLReader class exists';
$lang['test_xmlreader_failed'] = 'The XMLReader class is not enabled in your php install.  You can still use the system but will not be able to use any of the remote module installation functions.';
$lang['timezone'] = 'Time zone';
$lang['true'] = 'True';
$lang['type'] = 'Type';
$lang['typenotvalid'] = 'Type is not valid';

// U
$lang['unknown'] = 'Unknown';
$lang['unlimited'] = 'Unlimited';
$lang['untested'] = 'Not Tested';
$lang['update_table_sql'] = 'Updating table %s ...';
$lang['updating_schema_version'] = 'Updating schema version %s ...';
$lang['upgrade_admin_checksum'] = 'Check your system upgrade';
$lang['upgrade_cache_dirs'] = 'Cleaning cache directories';
$lang['upgrade_complete'] = 'Upgrade process complete';
$lang['upgrade_config'] = 'Upgrading config.php';
$lang['upgrade_config_info'] = 'config upgrade';
$lang['upgrade_end'] = 'CMS Made Simple is up to date. Please click %s to go to your CMSMS site or you can %s.';
$lang['upgrade_event_module_from_to'] = 'Upgrading Events of "%s" module from %s to %s ...';
$lang['upgrade_failed_again'] = 'One or more upgrades have failed. Please correct the problem and click the button below to recheck.';
$lang['upgrade_modules'] = 'Upgrade modules';
$lang['upgrade_ok'] = 'Please review the config.php file, modify any new settings as necessary and then reset its permissions back to a locked state. You should also check that all of your modules are up to date, by going to the Extensions -> Module Manager page and looking in the tab "Available Upgrades"';
$lang['upgrade_schema'] = 'Upgrade schema';
$lang['upgrade_sql_module_from_to'] = 'Upgrading SQL of "%s" module from %s to %s ...';
$lang['upgrade_system'] = 'Upgrade System';
$lang['upgrade_thanks'] = 'Thanks for upgrading CMS Made Simple&trade; to';
$lang['upgrade_title'] = 'CMS Made Simple&trade; Upgrade (step %s)';
$lang['upload_err_cant_write'] = 'Failed to write file to disk.';
$lang['upload_err_empty'] = 'File has size zero';
$lang['upload_err_extension'] = 'File upload stopped by extension.';
$lang['upload_err_form_size'] = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';
$lang['upload_err_ini_size'] = 'The uploaded file exceeds the upload_max_filesize directive in php.ini!';
$lang['upload_err_no_file'] = 'No file was uploaded.';
$lang['upload_err_no_tmp_dir'] = 'Missing a temporary folder.';
$lang['upload_err_partial'] = 'The uploaded file was only partially uploaded.';
$lang['upload_err_unknown'] = 'Unknown file upload problem.';
$lang['upload_file_multiple'] = 'Multiple file uploads are not allowed!';
$lang['upload_file_no_readable'] = 'Uploaded file is not readable!';
$lang['upload_max_filesize'] = 'Maximum Upload Size';
$lang['urlcheckversion'] = 'Check for new CMS versions using this URL';
$lang['user'] = 'User';
$lang['userdefinedtags'] = 'User Defined Tags';
$lang['usermanagement'] = 'User Management';
$lang['username'] = 'Username';
$lang['usernameincorrect'] = 'Username or password incorrect';

// V
$lang['version'] = 'Version';

// W
$lang['warning_safe_mode'] = '<strong><em>WARNING:</em></strong> PHP Safe mode is enabled. This will cause difficulty with files uploaded via the web browser interface, including images, theme and module XML packages. You are advised to contact your web host to see about disabling Safe mode.';
$lang['write'] = 'Write';

// X

// Y

// Z

?>