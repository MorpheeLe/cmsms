<?php
$lang['prompt_dl_chunksize'] = 'Maximale Download-Gr&ouml;&szlig;e (Kb)';
$lang['text_dl_chunksize'] = 'Maximalwert der an einem St&uuml;ck vom Server herunter zu ladenden Daten (beim Installieren eines Moduls)';
$lang['error_nofilesize'] = 'Der Parameter Dateigr&ouml;&szlig;e wurde nicht angegeben';
$lang['error_nofilename'] = 'Der Parameter Dateiname wurde nicht angegeben';
$lang['error_checksum'] = 'Pr&uuml;fsummen-Fehler. Dieser Fehler deutet auf eine besch&auml;digte Datei. Die Datei kann entweder beim Hochladen in das Depot oder bei der &Uuml;bertragung auf Ihr System besch&auml;digt worden sein.';
$lang['cantdownload'] = 'Konnte nichts herunterladen';
$lang['download'] = 'Herunterladen &amp; Installieren';
$lang['error_moduleinstallfailed'] = 'Modulinstallation fehlerhaft';
$lang['error_connectnomodules'] = 'Die Verbindung zu dem festgelegten Moduldepot wurde erfolgreich aufgebaut. Gegenw&auml;rtig sind jedoch in diesem Depot keine Module verf&uuml;gbar.';
$lang['submit'] = 'Absenden';
$lang['text_repository_url'] = 'Die URL sollte folgendes Format haben:  http://www.meinecmsseite.de/Pfad/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL des Moduldepots:';
$lang['availmodules'] = 'Verf&uuml;gbare Module';
$lang['preferences'] = 'Voreinstellungen';
$lang['repositorycount'] = 'Module im Depot gefunden';
$lang['instcount'] = 'Module aktuell installiert';
$lang['availablemodules'] = 'Aktueller Status der im Depot verf&uuml;gbaren Module';
$lang['helptxt'] = 'Hilfe';
$lang['abouttxt'] = '&Uuml;ber';
$lang['xmltext'] = 'XML-Datei';
$lang['nametext'] = 'Modul-Name';
$lang['vertext'] = 'Version';
$lang['sizetext'] = 'Gr&ouml;&szlig;e (Kilobytes)';
$lang['statustext'] = 'Status/Aktion';
$lang['uptodate'] = 'Installiert';
$lang['install'] = 'Installieren';
$lang['newerversion'] = 'Neuere Version installiert';
$lang['upgrade'] = 'Aktualisieren';
$lang['error_nosoapconnect'] = 'Verbindung zum SOAP-Server konnte nicht hergestellt werden.';
$lang['error_soaperror'] = 'SOAP-Problem';
$lang['error_norepositoryurl'] = 'Die URL f&uuml;r das Moduldepot wurde noch nicht festgelegt.';
$lang['friendlyname'] = 'ModulManager';
$lang['postinstall'] = 'Bitte stellen Sie sicher, dass die User dieses Moduls die Berechtigung \&quot;Modify Modules\&quot; haben!';
$lang['postuninstall'] = 'Der ModulManager wurde deinstalliert. Die Benutzer haben nicht l&auml;nger die M&ouml;glichkeit, Module aus dem Remote-Depot zu installieren. Es ist nur noch eine lokale Installation m&ouml;glich.';
$lang['really_uninstall'] = 'Wirklich? Sind Sie sicher, dass Sie das wunderbare Modul deinstallieren wollen?';
$lang['uninstalled'] = 'Modul deinstalliert.';
$lang['installed'] = 'Modulversion %s installiert.';
$lang['upgraded'] = 'Modul auf Version %s aktualisiert.';
$lang['moddescription'] = 'Ein Client f&uuml;r das Modul \&quot;ModuleRepository\&quot;, dieses Modul erlaubt die Vorschau und die Modul-Installation von Remote-Seiten aus, ohne dass diese &uuml;ber FTP auf den Server geladen oder entpackt werden m&uuml;ssen. Die XML-Modul-Dateien werden &uuml;ber die SOAP-Technologie herunter geladen, auf Integrit&auml;t &uuml;berpr&uuml;ft und automatisch entpackt.';
$lang['error'] = 'Fehler!';
$lang['admindescription'] = 'Ein Werkzeug zum Auffinden und Installieren von Modulen von Remote-Servern.';
$lang['accessdenied'] = 'Zugriff verweigert. Bitte &uuml;berpr&uuml;fen Sie Ihre Berechtigungen.';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10. Januar 2006. Erste Ver&ouml;ffentlichung.</li>
<li>Version 1.1. July, 2006. Ver&ouml;ffentlicht mit 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Ben&ouml;tigt nuSOAP-Modul Version 1.0.1</li>
</ul>';
$lang['help'] = '<h3>Was macht dieses Modul?</h3>
<p>Ein Client f&uuml;r das Modul \&quot;ModuleRepository\&quot;, dieses Modul erlaubt die Vorschau und die Modul-Installation von Remote-Seiten aus, ohne dass diese per FTP auf den Server geladen oder entpackt werden m&uuml;ssen. Die XML-Modul-Dateien werden &uuml;ber die SOAP-Technologie herunter geladen, auf Integrit&auml;t &uuml;berpr&uuml;ft und automatisch entpackt.</p>
<h3>Wie wird es eingesetzt ?</h3>
<p>Zur Verwendung dieses Moduls ben&ouml;tigen Sie die Berechtigung &#039;Modify Modules&#039;. Desweiteren ben&ouml;tigen Sie eine komplette URL einer &#039;Module Repository&#039;-Installation. Diese URL k&ouml;nnen Sie unter &#039;Administrator > Globale Einstellungen&#039; festlegen.</p><br/>
<p>Die Administration dieses Moduls finden Sie im Men&uuml; &#039;Erweiterungen&#039;. Wenn Sie dieses Modul ausw&auml;hlen, wird die &#039;Module Repository&#039;-Modul automatisch auf die verf&uuml;gbaren XML-Module abgefragt.  Diese Liste wird auf die Liste der aktuell installierten Module referenziert und eine Zusammenfassung angezeigt. Von hier k&ouml;nnen Sie sich die Beschreibung, die Hilfe und weitere Informationen zu den Modulen anzeigen lassen, ohne diese physisch auf Ihrem Server zu installieren. Sie k&ouml;nnen hier auch die Aktualisierung oder Installation von Modulen ausw&auml;hlen.</p>
<h3>Support</h3>
<p>Nach der GPL wird diese Software so ver&ouml;ffentlicht, wie sie ist. Bitte lesen Sie den Lizenztext f&uuml;r den vollen Haftungsausschluss.</p>
<h3>Copyright und Lizenz</h3>
<p>Copyright &copy; 2006, calguy1000 <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. Alle Rechte vorbehalten.</p>
<p>Dieses Modul wurde unter der <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a> ver&ouml;ffentlicht. Sie m&uuml;ssen dieser Lizenz zustimmen, bevor Sie das Modul verwenden.</p>';
$lang['utmz'] = '156861353.1156481462.45.22.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/projects/archiver/|utmcmd=referral';
$lang['utma'] = '156861353.717462736.1147511856.1156425493.1156481462.45';
?>