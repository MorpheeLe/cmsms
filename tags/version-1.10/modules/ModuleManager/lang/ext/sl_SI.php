<?php
$lang['error_search'] = 'Search Error';
$lang['prompt_disable_caching'] = 'Disable caching of requests from the server';
$lang['info_disable_caching'] = '<strong>Not Recommended</strong>.  For performance reasons, ModuleManager will cache for (by default one hour) much of the information retrieved from the remote server';
$lang['operation_results'] = 'Operation Results';
$lang['error_noresults'] = 'We expected some results to be available from queued operations, but none were found.  Please try to reproduce this experience, and provide sufficient information to support personell for diagnoses';
$lang['versionsformodule'] = 'Available versions of the module %s';
$lang['yourversion'] = 'Your Version';
$lang['latestdepends'] = 'Always install the newest modules';
$lang['info_latestdepends'] = 'When installing a module with dependencies, this option will make sure that the latest version of the dependency will be installed';
$lang['error_internal'] = 'Internal Error... Please report this to your system administrator';
$lang['error_downloadxml'] = 'A problem occurred downloading the XML FILE: %s';
$lang['error_request_problem'] = 'A problem occurred communicating with the module server';
$lang['error_searchterm'] = 'Navedite veljavno besedo za iskanje';
$lang['search_noresults'] = 'Iskanje je uspelo, vendar ni rezultatov ki se ujemajo formuli';
$lang['advancedsearch_help'] = 'Specify words to include or exclude from the search using a + or -, surround exact phrases with quotes.  i.e:  &quot;+red -apple +&quot;some text&quot;';
$lang['search_results'] = 'Rezultati iskanja';
$lang['prompt_advancedsearch'] = 'Napredno iskanje';
$lang['search_input'] = 'Polje za iskanje';
$lang['searchterm'] = 'Iskalni pojem';
$lang['search'] = 'Iskanje';
$lang['available_updates'] = 'Moduli na voljo za posodobitev';
$lang['all_modules_up_to_date'] = 'Trenutno ni novej&scaron;ih modulov na voljo v repozitoriju';
$lang['error_module_object'] = 'Napaka: ne morem prenesti modula %s';
$lang['error_nomatchingmodules'] = 'Napaka: noben modul v repozitoriju ne ustreza';
$lang['error_nomodules'] = 'Napaka: ne morem pridobiti seznama name&scaron;čenih modulov';
$lang['upgrade_available'] = 'Na voljo je nova različica (%s), vi uporabljate staro različico (%s)';
$lang['newversions'] = 'Nadgradnje na voljo';
$lang['notice_depends'] = '%s je odvisno od naslednjih ukrepov. Klikni &quot;Namesti&quot; da greste naprej.';
$lang['install_submit'] = 'Namesti';
$lang['depend_upgrade'] = 'Modul %s je treba nadgraditi na verzijo %s.';
$lang['depend_install'] = 'Modul %s (različica %s ali kasneje) je treba namestiti.';
$lang['depend_activate'] = 'Modul %s mora biti aktiviran.';
$lang['action_activated'] = 'Modul %s je bil aktiviran.';
$lang['action_installed'] = 'Modul %s je bila name&scaron;čen z naslednjim(i) sporočilom(i): %s';
$lang['action_upgraded'] = 'Modul %s je bil posodobljen';
$lang['title_installation_complete'] = 'Namestitev je kompletna!';
$lang['install_with_deps'] = 'Oceni vse odvisnosti in namestite';
$lang['msg_nodependencies'] = 'Ta datoteka ni odvisna od drugih modulov';
$lang['error_upgrade'] = 'Nadgradnja modula %s ni uspela!';
$lang['error_skipping'] = 'Preskakuje namestitev/nadgradnjo %s zaradi napak pri vzpostavljanju odvisnosti. Oglejte si sporočilo zgoraj, in poskusite znova';
$lang['dependstxt'] = 'Odvisnosti';
$lang['use_at_your_own_risk'] = 'Uporaba na lastno odgovornost';
$lang['compatibility_disclaimer'] = 'Module, ki so tu prikazani, prispevajo razvijalci sistema CMS ter neodvisni posamezniki. Ne jamčimo, da so vsi moduli testirani, kompatibilni z va&scaron;im sistemom ali pa da v celoti delujejo. Svetujemo vam, da preberete informacije, ki jih najdete na povezavah pomoč in predstavitev pri posameznem modulu, preden ta modul namestite.';
$lang['notice'] = 'V vednost';
$lang['general_notice'] = 'Prikazane različice predstavljajo najnovej&scaron;e XML datoteke, ki so naložene v va&scaron; izbran repozitorij (navadno CMS %s). To ne pomeni, da so to zares najnovej&scaron;e različice, ki so na voljo. Svetujemo vam, da preverite, ali obstajajo morda &scaron;e kak&scaron;ne novej&scaron;e različice teh modulov. Če uporabljate privzeti repozitorij to lahko storite tako, da vpi&scaron;ete naziv modula v iskalnik na %s in kliknete gumb &amp;quot;Files&amp;quot;.';
$lang['incompatible'] = 'Ni kompatibilen';
$lang['prompt_settings'] = 'Nastavitve';
$lang['prompt_otheroptions'] = 'Ostale možnosti';
$lang['reset'] = 'Ponastavi';
$lang['error_permissions'] = '<strong><em>OPOZORILO:</em></strong> Na mapi za namestitev modulov ni dovolj pravic za namestitev. Morda imate težave s PHP varnim načinom (safe_mode). Prosimo preverite, da je varni način onemogočen in da imate ustrezne pravice na datotečnem sistemu.';
$lang['error_minimumrepository'] = 'Različica v repozitoriju ni kompatibilna s tem upraviteljem modulov';
$lang['prompt_reseturl'] = 'Ponastavi URL na privzeti';
$lang['prompt_resetcache'] = 'Osveži lokalni predpomnilnik podatkov z repozitorija';
$lang['prompt_dl_chunksize'] = 'Velikost paketa prenosa (Kb)';
$lang['text_dl_chunksize'] = 'Največja velikost podatkov za prenos s strežnika v enem paketu (ob namestitvi modula)';
$lang['error_nofilesize'] = 'Parameter filesize ni podan';
$lang['error_nofilename'] = 'Parameter filename ni podan';
$lang['error_unsatisfiable_dependency'] = 'Ne najde zahtevanega modula &quot;%s&quot; (različica %s ali kasneje) v skladi&scaron;ču. To neposredno zahteva %s; to lahko kaže na težave z različico tega modula v skladi&scaron;ču. Obrnite se na modula avtorja. Prekinja.';
$lang['error_checksum'] = 'Checksum napaka. To najverjetneje pomeni, da je datoteka po&scaron;kodovana. Do po&scaron;kodbe datoteke lahko pride pri nalaganju v repozitorij ali pa ob prenosu na va&scaron; strežnik.';
$lang['cantdownload'] = 'Ne morem prenesti';
$lang['download'] = 'Prenesi in namesti';
$lang['error_moduleinstallfailed'] = 'Namestitev modula ni uspe&scaron;na';
$lang['error_connectnomodules'] = 'Povezava je bila uspe&scaron;no vzpostavljena v izbran repozitorij, vendar kaže, da ta repozitorij ne vsebuje nobenih modulov.';
$lang['submit'] = 'Po&scaron;lji';
$lang['text_repository_url'] = 'URL naslov naj bo v obliki  http://www.mycmssite.com/ModuleRepository/request/v2';
$lang['prompt_repository_url'] = 'URL naslov repozitorija modulov:';
$lang['title_installation'] = 'Namestitev';
$lang['availmodules'] = 'Moduli na voljo';
$lang['preferences'] = 'Nastavitve';
$lang['preferencessaved'] = 'Nastavitve shranjene';
$lang['repositorycount'] = 'Najdeni moduli v repozitoriju';
$lang['instcount'] = 'Trenutno name&scaron;čeni moduli';
$lang['availablemodules'] = 'Trenuten status modulov, ki so na voljo v trenutnem repozitoriju';
$lang['time_warning'] = 'Seznam namestitev ima dva ali več modulov. Zavedajte se, da namestitev traja nekaj minut. Prosimo, bodite potrpežljivi!';
$lang['helptxt'] = 'Pomoč';
$lang['abouttxt'] = 'Predstavitev';
$lang['xmltext'] = 'XML datoteka';
$lang['nametext'] = 'Naziv modula';
$lang['mod_name_ver'] = '%s različica %s';
$lang['unknown'] = 'Neznano';
$lang['vertext'] = 'Različica';
$lang['sizetext'] = 'Velikost (Kb)';
$lang['statustext'] = 'Status/Akcija';
$lang['uptodate'] = 'Name&scaron;čen';
$lang['install'] = 'namestitev';
$lang['newerversion'] = 'Name&scaron;čena je novej&scaron;a različica';
$lang['onlynewesttext'] = 'Prikaži samo najnovej&scaron;o različico';
$lang['upgrade'] = 'Posodobi';
$lang['error_norepositoryurl'] = 'URL repozitorija modulov ni bil določen';
$lang['friendlyname'] = 'Upravitelj modulov';
$lang['postinstall'] = 'Upravitelj modulov je bil uspe&scaron;no name&scaron;čen';
$lang['postuninstall'] = 'Upravitelj modulov je bil uspe&scaron;no odstranjen. Uporabniki nimajo več možnosti namestitve modulov iz oddaljenega repozitorija. Lokalne namestitve so &scaron;e vedno možne.';
$lang['really_uninstall'] = 'Ste prepričani, da želite odstraniti? S tem boste zmanj&scaron;ali funkcionalnost sistema.';
$lang['uninstalled'] = 'Modul odstranjen.';
$lang['installed'] = 'Modul različice %s name&scaron;čen.';
$lang['upgraded'] = 'Modul nadgrajen na različico %s.';
$lang['moddescription'] = 'Klient za repozitorij modulov; modul omogoča predogled ter namestitev modulov iz oddaljenih strani brez potrebe po FTP povezavi ali ekstrahiranju paketov. XML datoteke modulov so prene&scaron;ene preko SOAP protokola, preverjene in avtomatično name&scaron;čene.';
$lang['back_to_module_manager'] = '&laquo; vrni se v Module Manager';
$lang['error'] = 'Napaka!';
$lang['admindescription'] = 'Orodje za prenos in namestitev modulov iz oddaljenih strežnikov.';
$lang['accessdenied'] = 'Dostop zavrnjen. Prosimo, preverite va&scaron;e pravice.';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10 January 2006. Initial Release.</li>
<li>Version 1.1. July, 2006. Released with the 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP</li>
<li>Version 1.1.2 September, 2006.  Fixed a mistake that resulted in upgrade not not working at all</li>
<li>Version 1.1.3 September, 2006.
  <ul>
  <li>Bumped minimum CMS Version to 1.0</li>
  <li>Now use 1 request to get the complete list of modules from the repository</li>
  <li>Added some missing lang strings</li>
  <li>Added the ability to reset the local cache of repository information</li>
  <li>Added the ability to restore the repository url to factory defaults</li>
  </ul>
</li>
<li>Version 1.1.4 February, 2007.  Now handles the safe mode check, and disables upgrading or installing modules if the permissions are wrong.</li>
<li>Version 1.1.5 September, 2007. New preference to make only latest module version show. Added nice message after saving preferences</li>
</li>
<li>Version 1.1.6 May, 2008. Now show if available modules are incompatible with the current CMS_VERSION.</li>
</li>
<li>Version 1.2 June, 2008.<br/>
This version should reduce the memory requirements of this module, and trade it off for performance on the server, and mroe requests to the server.
   <ul>
    <li>Bumped Minimum CMS Version to 1.3</li>
    <li>Bumped Minimum repository version to 1.1</li>
    <li>Get rid of all of the session stuff</li>
    <li>Add support for requesting modules beginning with a prefix (usually a single letter)</li>
    <li>Add support for requestion only the newest versions of the modules</li>
   </ul>
</li>
<li>Version 1.2.1 August, 2008.<br/>
Added a warning message to the top of the admin display.
</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the &#039;Modify Modules&#039; permission, and you will also need the complete, and full URL to a &#039;Module Repository&#039; installation.  You can specify this url in the &#039;Site Admin&#039; --> &#039;Global Settings&#039; page.</p><br/>
<p>You can find the interface for this module under the &#039;Extensions&#039; menu.  When you select this module, the &#039;Module Repository&#039; installation will automatically be queried for a list of it&#039;s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['qca'] = 'P0-1458450664-1284573084918';
$lang['utma'] = '156861353.652452006.1315907550.1315907550.1315907550.1';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1315907550.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
?>