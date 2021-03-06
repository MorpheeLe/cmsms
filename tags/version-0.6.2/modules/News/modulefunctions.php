<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://cmsmadesimple.sf.net
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

function news_module_install($cms) {
	//This function should install the database functions and do other basic init stuff for first time use.
	$db = $cms->db;
	$dict = NewDataDictionary($db);
	$flds = "
		news_id I KEY,
		news_title C(255),
		news_data X,
		news_date T,
		start_time T,
		end_time T,
		icon C(255),
		create_date T,
		modified_date T
	";
	$taboptarray = array('mysql' => 'TYPE=MyISAM');
	$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_news", $flds, $taboptarray);
	$dict->ExecuteSQLArray($sqlarray);

	$db->CreateSequence(cms_db_prefix()."module_news_seq");

	cms_mapi_create_permission($cms, 'Modify News', 'Modify News');

	#Throw in a test for now
	$new_id = $db->GenID(cms_db_prefix()."module_news_seq");
	$query = "INSERT INTO ".cms_db_prefix()."module_news (news_id, news_title, news_data, news_date, create_date, modified_date) VALUES ($new_id, 'News Module Installed', 'The news module was installed.  Exciting.', ".$db->DBTimeStamp(time()).", ".$db->DBTimeStamp(time()).", ".$db->DBTimeStamp(time()).")";
	$result = $db->Execute($query);
}

function news_module_upgrade($cms, $oldversion, $newversion)
{
	$current_version = $oldversion;
	if ($current_version == "1.0")
	{
		$db = $cms->db;
		$dict = NewDataDictionary($db);
		$sqlarray = $dict->AddColumnSQL(cms_db_prefix()."module_news", "start_time T, end_time T, icon C(255)");
		$dict->ExecuteSQLArray($sqlarray);
		$current_version = "1.1";
	}
}

function news_module_uninstall($cms) {
	//This function should uninstall database tables and generally cleanup.
	$db = $cms->db;
	$dict = NewDataDictionary($db);
	$sqlarray = $dict->DropTableSQL(cms_db_prefix()."module_news");
	$dict->ExecuteSQLArray($sqlarray);

	$db->DropSequence(cms_db_prefix()."module_news_seq");

	cms_mapi_remove_permission($cms, 'Modify News');
}

function news_module_execute($cms, $id, $params)
{
	news_module_executeuser($cms, $id, $cms->variables['page'], $params);
}

function news_module_executeuser($cms, $id, $return_id, $params)
{
	if (isset($params["makerssbutton"]))
	{
		$params = array_merge($params, array("showtemplate"=>"false","type"=>"rss"));
		echo cms_mapi_create_user_link('News', $id, $return_id, $params, "<img border=\"0\" src=\"images/cms/xml_rss.gif\" />");
		return;
	}

	//This is the entryway into the module.  All requests from CMS will come through here.
	$db = $cms->db;
	$query = "SELECT news_id, news_title, news_data, news_date FROM ".cms_db_prefix()."module_news WHERE (".$db->IfNull('start_time',"''")." = '' AND ".$db->IfNull('end_time',"''")." = '') OR (start_time < ".$db->DBTimeStamp(time())." AND end_time > ".$db->DBTimeStamp(time()).") ORDER BY news_date desc";
	if (isset($params["number"]))
	{
		$dbresult = $db->SelectLimit($query, $params["number"]);
	}
	else
	{
		$dbresult = $db->Execute($query);
	}

	$dateformat = "F j, Y, g:i a";
	if (isset($params["dateformat"]))
	{
		$dateformat = $params["dateformat"];
	}

	$type = "text";
	if (isset($params[$id."type"]))
	{
		$type = $params[$id."type"];
	}
	else if (isset($params["type"]))
	{
		$type = $params["type"];
	}

	if ($dbresult && $dbresult->RowCount() > 0)
	{
		if ($type == "rss")
		{
			header('Content-type: text/xml');
			echo "<?xml version='1.0'?>\n";
			echo "<rss version='2.0'>\n";
			echo "   <channel>\n";
		}

		while ($row = $dbresult->FetchRow())
		{
			if ($type == "rss")
			{
				echo "        <item>\n";
				echo "            <title>".$row["news_title"]."</title>\n";
				echo "            <description>".$row["news_data"]."</description>\n";
				echo "            <pubDate>".gmdate('D d M, Y H:i:s', $db->UnixTimeStamp($row["news_date"]))." GMT</pubDate>\n";
				echo "        </item>\n";
			}
			else
			{
				echo "<div class=\"cms-module-news\">";
				echo "<span class=\"cms-news-date\">".date($dateformat, $db->UnixTimeStamp($row['news_date']))."</span><br />";
				echo "<span class=\"cms-news-title\">".$row["news_title"]."</span><br />";
				echo "<span class=\"cms-news-content\">".$row["news_data"]."</span>";
				echo "</div>";
			}
		}

		if ($type == "rss")
		{
			echo "   </channel>\n";
			echo "</rss>";
		}
	}
}

function news_module_executeadmin($cms,$id) {

	$access = cms_mapi_check_permission($cms, "Modify News");

	if ((isset($_POST[$id."action"]) || isset($_GET[$id."action"])) && $access) {
		$moduleaction = (isset($_POST[$id."action"])?$_POST[$id."action"]:"") . (isset($_GET[$id."action"])?$_GET[$id."action"]:"");
		include_once(dirname(__FILE__)."/adminform.php");
	} else {

		if ((isset($_POST[$id."action"]) || isset($_GET[$id."action"])) && !$access) {
			echo "<p class=\"error\">You need the 'Modify News' permission to perform that function.</p>";
		}
		$db = $cms->db;
		$query = "SELECT news_id, news_title, news_data, news_date FROM ".cms_db_prefix()."module_news ORDER BY news_date desc";
		$dbresult = $db->Execute($query);
		if ($dbresult && $dbresult->RowCount()) {
			echo "<table cellspacing=\"0\" class=\"admintable\">\n";
			echo "<tr>\n";
			echo "<td>Title</td>\n";
			echo "<td width=\"20%\">Posting Date</td>\n";
			echo "<td width=\"10%\">&nbsp;</td>\n";
			echo "<td width=\"10%\">&nbsp;</td>\n";
			echo "</tr>\n";
			$rowclass="row1";
			while ($row = $dbresult->FetchRow()) {
				echo "<tr class=\"$rowclass\">\n";
				echo "<td>".$row["news_title"]."</td>\n";
				echo "<td>".$row["news_date"]."</td>\n";
				echo "<td>".cms_mapi_create_admin_link("News",$id,array("action"=>"edit","news_id"=>$row["news_id"]),"Edit")."</td>\n";
				echo "<td>".cms_mapi_create_admin_link("News",$id,array("action"=>"delete","news_id"=>$row["news_id"]),"Delete", "Are you sure you want to delete?")."</td>\n";
				echo "</tr>\n";
				($rowclass=="row1"?$rowclass="row2":$rowclass="row1");
			}
			echo "</table>\n";
		}
		echo "<div class=\"button\">".cms_mapi_create_admin_link("News",$id,array("action"=>"add"),"Add News Item")."</div>";
	}
}

function news_module_help($cms)
{
	//Text to show for the help box...
	?>

	<h3>What does this do?</h3>
	<p>News is a module for displaying News events on your page, similar to a blog style.  When the module is installed, a News admin page is added to the left menu that will show a list of news items for the site.  The user must belong to a group with the 'Modify News' permission in order to add, edit or delete News entries.  While still being very basic, this module is perfect for adding some quick news items to your site.</p>
	<h3>How do I use it?</h3>
	<p>News works in two ways.</p>
	<p>The perferred way is to use it in conjunction with the cms_module tag.  This will insert the module into your template or page anywhere you wish and display the number of news items.  The code would look something like: <code>{cms_module module="news" number="5"}</code></p>
	<p>The other way is to use it as a content module.  Basically, when you add or edit a page, you can set the content type of that page to News.  This basically means that there will be one whole page on your site dedicated to showing all news postings.  This is great for a "News Archive".</p>
	<h3>What parameters are there?</h3>
	<p>
	<ul>
		<li><em>(optional)</em>number="5" - Maximum number of items to display -- leaving empty will show all items</li>
		<li><em>(optional)</em>dateformat - Date/Time format using parameters from php's strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
		<li><em>(optional)</em>makerssbutton="true" - Make a button to link to an RSS feed of the News items</li>
	</ul>
	</p>

	<?php

}

function news_module_about() {
	?>
	<p>Author: Ted Kulp &lt;tedkulp@users.sf.net&gt;</p>
	<p>Version: 1.2</p>
	<p>
	Change History:
	</p>
	<p>
	1.2 -- Sep 20, 2004<br />
	Added makerssbutton and RSS functionality
	</p>
	<p>
	1.1 -- Sep 15, 2004<br/>
	Added time modification and date format
	</p>
	<?php
}

# vim:ts=4 sw=4 noet
?>
