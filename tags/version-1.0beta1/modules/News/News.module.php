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
#
#$Id: News.module.php 2114 2005-11-04 21:51:13Z wishy $

class News extends CMSModule
{
	function GetName()
	{
		return 'News';
	}

	function GetFriendlyName()
	{
		return $this->Lang('news');
	}

	function IsPluginModule()
	{
		return true;
	}

	function HasAdmin()
	{
		return true;
	}

	function GetVersion()
	{
		return '2.1';
	}

	function MinimumCMSVersion()
	{
		return '1.0-svn';
	}

	function GetAdminDescription()
	{
		return $this->Lang('description');
	}

	function GetAdminSection()
	{
		return 'content';
	}

	function SetParameters()
	{
		$this->RegisterRoute('/[nN]ews\/(?P<articleid>[0-9]+)\/(?P<returnid>[0-9]+)\/d,(?P<detailtemplate>.*?)$/');
		$this->RegisterRoute('/[nN]ews\/(?P<articleid>[0-9]+)\/(?P<returnid>[0-9]+)$/');
		$this->RegisterRoute('/[nN]ews\/(?P<articleid>[0-9]+)$/');
		$this->RegisterRoute('/[nN]ews\/(?P<action>rss)\/(?P<category>.*?)$/', array('showtemplate'=>'false'));
		$this->RegisterRoute('/[nN]ews\/(?P<action>rss)$/', array('showtemplate'=>'false'));

		$this->CreateParameter('sortasc', 'true', $this->lang('helpsortasc'));
		$this->CreateParameter('sortby', 'news_date', $this->lang('helpsortby'));
		$this->CreateParameter('detailpage', 'pagealias', $this->lang('helpdetailpage'));
		$this->CreateParameter('detailtemplate', 'sometemplate.tpl', $this->lang('helpdetailtemplate'));
		$this->CreateParameter('summarytemplate', 'sometemplate.tpl', $this->lang('helpsummarytemplate'));
		$this->CreateParameter('moretext', 'more...', $this->lang('helpmoretext'));
		$this->CreateParameter('category', 'category', $this->lang('helpcategory'));
		$this->CreateParameter('makerssbutton', 'true', $this->lang('helpmakerssbutton'));
		$this->CreateParameter('dateformat', '%b %d, %Y', $this->lang('helpdateformat'));
		$this->CreateParameter('number', '5', $this->lang('helpnumber'));
		$this->CreateParameter('start', '5', $this->lang('helpstart'));
		$this->mCachable = false;
	}

	function ContentPostRender(&$content)
	{
		if ($this->GetPreference('showautodiscovery', 'yes') == 'yes')
		{
			#if (eregi('\{cms_module module=[\"\']?news[\"\']?', $content))
			if (strpos($content, '<!-- Displaying News Module -->') !== FALSE)
			{
				global $gCms;
				$config =& $gCms->GetConfig();

				$matches = array();
				$categories = '';
				if (preg_match("/<!-- News Categories: '(.*?)' -->/", $content, $matches))
					$categories = $matches[1];

				$params = array("showtemplate"=>"false");
				
				$url = '';
				if ($this->GetPreference('autodiscoverylink', '') == '')
				{
					if (($config['assume_mod_rewrite'] == true || $config['internal_pretty_urls'] == true) && $config['use_hierarchy'] == true)
					{
						if ($config['assume_mod_rewrite'] == true)
							$url = $config['root_url'].'/News/rss/'.rawurlencode($categories);
						else
							$url = $config['root_url'].'/index.php/News/rss/'.rawurlencode($categories);
					}
					else
						$url = $config['root_url'].'/index.php?mact=News,cntnt01,rss&amp;cntnt01showtemplate=false&amp;cntnt01category='.rawurlencode($categories).'&amp;cntnt01number=20&amp;cntnt01returnid='.$gCms->variables['content_id'];
				}
				else
				{
					$url = $this->GetPreference('autodiscoverylink', '');
				}
	
				$text = '<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="'.$url.'" />';
				if (function_exists('str_ireplace'))
				{
					$content = str_ireplace('</head>', $text.'</head>', $content);
				}
				else
				{
					$content = eregi_replace('<\/head>', $text.'</head>', $content);
				}
			}
		}
	}

    function VisibleToAdminUser()
    {
      return $this->CheckPermission('Modify News') || $this->CheckPermission('Modify Site Preferences') || $this->CheckPermission('Modify Templates');
    }

	/**
	 * This function is not in the API!!!
	 */
	function GetSummaryHtmlTemplate()
	{
		return '<!-- Start News Display Template -->
{foreach from=$items item=entry}
<div class="NewsSummary">

<div class="NewsSummaryLink">
	{$entry->titlelink}
</div>

<div class="NewsSummaryCategory">
	{$entry->category}
</div>

{if $entry->formatpostdate}
	<div class="NewsSummaryPostdate">
		{$entry->formatpostdate}
	</div>
{/if}

{if $entry->author}
	<div class="NewsSummaryAuthor">
		{$entry->author}
	</div>
{/if}

{if $entry->summary}
	<div class="NewsSummarySummary">
		{eval var=$entry->summary}
	</div>

	<div class="NewsSummaryMorelink">
		[{$entry->morelink}]
	</div>

{else if $entry->content}

	<div class="NewsSummaryContent">
		{eval var=$entry->content}
	</div>
{/if}

</div>
{/foreach}
<!-- End News Display Template -->';
	}

	function GetDetailHtmlTemplate()
	{
		return '<h3 id="NewsPostDetailTitle">{$entry->title}</h3>

<hr id="NewsPostDetailHorizRule">

{if $entry->category}
	<div id="NewsPostDetailCategory">
		{$entry->category}
	</div>
{/if}

{if $entry->formatpostdate}
	<div id="NewsPostDetailDate">
		{$entry->formatpostdate}
	</div>
{/if}

{if $entry->summary}
	<div id="NewsPostDetailSummary">
		<strong>
			{eval var=$entry->summary}
		</strong>
	</div>
{/if}

{if $entry->author}
	<div id="NewsPostDetailAuthor">
		{$entry->author}
	</div>
{/if}

<div id="NewsPostDetailContent">
	{eval var=$entry->content}
</div>

<div id="NewsPostDetailPrintLink">
	{$entry->printlink}
</div>
{if $return_url != ""}
<div id="NewsPostDetailReturnLink">{$return_url}</div>
{/if}';
	}

	function Install()
	{
		$db =& $this->GetDb();

		$dict = NewDataDictionary($db);
		$flds = "
			news_id I KEY,
			news_category_id I,
			news_title C(255),
			news_data X,
			news_date DT,
			summary X,
			start_time DT,
			end_time DT,
			status C(25),
			icon C(255),
			create_date DT,
			modified_date DT,
			author_id I
		";

		$taboptarray = array('mysql' => 'TYPE=MyISAM');
		$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_news", 
				$flds, $taboptarray);
		$dict->ExecuteSQLArray($sqlarray);

		$db->CreateSequence(cms_db_prefix()."module_news_seq");

		$flds = "
			news_category_id I KEY,
			news_category_name C(255),
			parent_id I,
			hierarchy C(255),
			long_name X,
			create_date T,
			modified_date T
		";

		$taboptarray = array('mysql' => 'TYPE=MyISAM');
		$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_news_categories", 
				$flds, $taboptarray);
		$dict->ExecuteSQLArray($sqlarray);

		$db->CreateSequence(cms_db_prefix()."module_news_categories_seq");

		#Set Permission
		$this->CreatePermission('Modify News', 'Modify News');

		# Setup summary template
		$this->SetTemplate('displaysummary', $this->GetSummaryHtmlTemplate());

		# Setup detail template
		$this->SetTemplate('displaydetail', $this->GetDetailHtmlTemplate());

		# Setup General category
		$catid = $db->GenID(cms_db_prefix()."module_news_categories_seq");
		$query = 'INSERT INTO '.cms_db_prefix().'module_news_categories (news_category_id, news_category_name, parent_id, create_date, modified_date) VALUES (?,?,?,'.$db->DBTimeStamp(time()).','.$db->DBTimeStamp(time()).')';
		$db->Execute($query, array($catid, 'General', -1));

		# Setup initial news article
		$articleid = $db->GenID(cms_db_prefix()."module_news_seq");
		$query = 'INSERT INTO '.cms_db_prefix().'module_news ( NEWS_ID, NEWS_CATEGORY_ID, AUTHOR_ID, NEWS_TITLE, NEWS_DATA, NEWS_DATE, SUMMARY, START_TIME, END_TIME, STATUS, ICON, CREATE_DATE, MODIFIED_DATE ) VALUES (?,?,?,?,?,'.$db->DBTimeStamp(time()).',?,?,?,?,?,'.$db->DBTimeStamp(time()).','.$db->DBTimeStamp(time()).')';
		$db->Execute($query, array($articleid, $catid, 1, 'News Module Installed', 'The news module was installed.  Exciting. This news article is not using the Summary field and therefore there is no link to read more. But you can click on the news heading to read only this article.', null, null, null, 'published', null));

		$this->UpdateHierarchyPositions();

		# Setup permissions
		$perm_id = $db->GetOne("SELECT permission_id FROM ".cms_db_prefix()."permissions WHERE permission_name = 'Modify News'");
		$group_id = $db->GetOne("SELECT group_id FROM ".cms_db_prefix()."groups WHERE group_name = 'Admin'");

		$count = $db->GetOne("SELECT count(*) FROM " . cms_db_prefix() . "group_perms WHERE group_id = ? AND permission_id = ?", array($group_id, $perm_id));
		if (isset($count) && intval($count) == 0)
		{
			$new_id = $db->GenID(cms_db_prefix()."group_perms_seq");
			$query = "INSERT INTO " . cms_db_prefix() . "group_perms (group_perm_id, group_id, permission_id, create_date, modified_date) VALUES (".$new_id.", ".$group_id.", ".$perm_id.", ". $db->DBTimeStamp(time()) . ", " . $db->DBTimeStamp(time()) . ")";
			$db->Execute($query);
		}

		$group_id = $db->GetOne("SELECT group_id FROM ".cms_db_prefix()."groups WHERE group_name = 'Editor'");

		$count = $db->GetOne("SELECT count(*) FROM " . cms_db_prefix() . "group_perms WHERE group_id = ? AND permission_id = ?", array($group_id, $perm_id));
		if (isset($count) && intval($count) == 0)
		{
			$new_id = $db->GenID(cms_db_prefix()."group_perms_seq");
			$query = "INSERT INTO " . cms_db_prefix() . "group_perms (group_perm_id, group_id, permission_id, create_date, modified_date) VALUES (".$new_id.", ".$group_id.", ".$perm_id.", ". $db->DBTimeStamp(time()) . ", " . $db->DBTimeStamp(time()) . ")";
			$db->Execute($query);
		}
		
		#Setup events
		$this->CreateEvent('NewsArticleAdded');
		$this->CreateEvent('NewsArticleEdited');
		$this->CreateEvent('NewsArticleDeleted');
		$this->CreateEvent('NewsCategoryAdded');
		$this->CreateEvent('NewsCategoryEdited');
		$this->CreateEvent('NewsCategoryDeleted');
		
	}

	function InstallPostMessage()
	{
		return $this->Lang('postinstall');
	}

	function Upgrade($oldversion, $newversion)
	{
		$current_version = $oldversion;
		$db =& $this->GetDb();
		switch($current_version)
		{
			case "1.0":
				$dict = NewDataDictionary($db);
				$sqlarray = $dict->AddColumnSQL(cms_db_prefix()."module_news", "start_time DT, end_time DT, icon C(255)");
				$dict->ExecuteSQLArray($sqlarray);
				$current_version = "1.1";
			case "1.1":
			case "1.2":
			case "1.3":
			case "1.4":
			case "1.5":
				$dict = NewDataDictionary($db);
				$sqlarray = $dict->AddColumnSQL(cms_db_prefix()."module_news", "news_cat C(255)");
				$dict->ExecuteSQLArray($sqlarray);
				$current_version = "1.6";
			case "1.6":
				$this->SetTemplate('displaysummary', $this->GetSummaryHtmlTemplate());
				$this->SetTemplate('displaydetail', $this->GetDetailHtmlTemplate());

				$current_version = "1.7";
			case '1.7':
				#Makey new tables....

				$dict = NewDataDictionary($db);
				$sqlarray = $dict->AddColumnSQL(cms_db_prefix()."module_news", "status C(25)");
				$dict->ExecuteSQLArray($sqlarray);

				$sqlarray = $dict->AddColumnSQL(cms_db_prefix()."module_news", "summary X");
				$dict->ExecuteSQLArray($sqlarray);

				$sqlarray = $dict->AddColumnSQL(cms_db_prefix()."module_news", "news_category_id I");
				$dict->ExecuteSQLArray($sqlarray);

				$query = "UPDATE ".cms_db_prefix()."module_news SET summary = ?, status = ?";
				$db->Execute($query, array('', 'published'));

				$flds = "
					news_category_id I KEY,
					news_category_name C(255),
					parent_id I,
					hierarchy C(255),
					long_name X,
					create_date DT,
					modified_date DT
				";
				$dict = NewDataDictionary($db);

				$taboptarray = array('mysql' => 'TYPE=MyISAM');
				$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_news_categories", 
						$flds, $taboptarray);
				$dict->ExecuteSQLArray($sqlarray);

				$db->CreateSequence(cms_db_prefix()."module_news_categories_seq");

				$query = "SELECT DISTINCT news_cat FROM ".cms_db_prefix()."module_news WHERE news_cat IS NOT NULL";
				$dbresult = $db->Execute($query);
				while ($dbresult && $row = $dbresult->FetchRow())
				{
					$catid = $db->GenID(cms_db_prefix()."module_news_categories_seq");
					$query = "INSERT INTO ".cms_db_prefix()."module_news_categories (news_category_id, news_category_name, parent_id, hierarchy, long_name, create_date, modified_date) VALUES (?,?,?,?,?,".$db->DBTimeStamp(time()).",".$db->DBTimeStamp(time()).")";
					$db->Execute($query,array($catid, $row['news_cat'], -1, '', ''));

					$query = "UPDATE ".cms_db_prefix()."module_news SET news_category_id = ? WHERE news_cat = ?";
					$db->Execute($query, array($catid, $row['news_cat']));
				}

				# Setup summary template
				$this->SetTemplate('displaysummary', $this->GetSummaryHtmlTemplate());

				# Setup detail template
				$this->SetTemplate('displaydetail', $this->GetDetailHtmlTemplate());

				$this->UpdateHierarchyPositions();

				$current_version = "2.0";

			case '2.0':
			case '2.0.1':
			case '2.0.2':
				$dict = NewDataDictionary($db);
				$sqlarray = $dict->AddColumnSQL(cms_db_prefix()."module_news", "author_id I");
				$dict->ExecuteSQLArray($sqlarray);
				$current_version = "2.0.3";
			case '2.0.3':
				#Setup events
				$this->CreateEvent('NewsArticleAdded');
				$this->CreateEvent('NewsArticleEdited');
				$this->CreateEvent('NewsArticleDeleted');
				$this->CreateEvent('NewsCategoryAdded');
				$this->CreateEvent('NewsCategoryEdited');
				$this->CreateEvent('NewsCategoryDeleted');
				$current_version = '2.1';
		}
	}

	function Uninstall()
	{
		$db =& $this->GetDb();
		
		$this->DeleteTemplate('displaysummary');
		$this->DeleteTemplate('displaydetail');
		
		$dict = NewDataDictionary( $db );

		$sqlarray = $dict->DropTableSQL( cms_db_prefix()."module_news" );
		$dict->ExecuteSQLArray($sqlarray);

		$sqlarray = $dict->DropTableSQL( cms_db_prefix()."module_news_categories" );
		$dict->ExecuteSQLArray($sqlarray);

		$db->DropSequence( cms_db_prefix()."module_news_seq" );
		$db->DropSequence( cms_db_prefix()."module_news_categories_seq" );

		$this->RemovePermission('Modify News');
		
		#Setup events
		$this->RemoveEvent('NewsArticleAdded');
		$this->RemoveEvent('NewsArticleEdited');
		$this->RemoveEvent('NewsArticleDeleted');
		$this->RemoveEvent('NewsCategoryAdded');
		$this->RemoveEvent('NewsCategoryEdited');
		$this->RemoveEvent('NewsCategoryDeleted');
	}

    function UpdateHierarchyPositions()
    {
		$db =& $this->GetDb();

		$query = "SELECT news_category_id, news_category_name FROM ".cms_db_prefix()."module_news_categories";
		$dbresult = $db->Execute($query);
		while ($dbresult && $row = $dbresult->FetchRow())
		{
			$current_hierarchy_position = "";
			$current_long_name = "";
			$content_id = $row['news_category_id'];
			$current_parent_id = $row['news_category_id'];
			$count = 0;

			while ($current_parent_id > -1)
			{
				$query = "SELECT news_category_id, news_category_name, parent_id FROM ".cms_db_prefix()."module_news_categories WHERE news_category_id = ?";
				$row2 = $db->GetRow($query, array($current_parent_id));
				if ($row2)
				{
					$current_hierarchy_position = str_pad($row2['news_category_id'], 5, '0', STR_PAD_LEFT) . "." . $current_hierarchy_position;
					$current_long_name = $row2['news_category_name'] . ' | ' . $current_long_name;
					$current_parent_id = $row2['parent_id'];
					$count++;
				}
				else
				{
					$current_parent_id = 0;
				}
			}

			if (strlen($current_hierarchy_position) > 0)
			{
				$current_hierarchy_position = substr($current_hierarchy_position, 0, strlen($current_hierarchy_position) - 1);
			}

			if (strlen($current_long_name) > 0)
			{
				$current_long_name = substr($current_long_name, 0, strlen($current_long_name) - 3);
			}

			$query = "UPDATE ".cms_db_prefix()."module_news_categories SET hierarchy = ?, long_name = ? WHERE news_category_id = ?";
			$db->Execute($query, array($current_hierarchy_position, $current_long_name, $content_id));
		}
    }

	function CreateParentDropdown($id, $catid = -1, $selectedvalue = -1)
	{
		$db =& $this->GetDb();

		$longname = '';

		$items['(None)'] = '-1';

		$query = "SELECT hierarchy, long_name FROM ".cms_db_prefix()."module_news_categories WHERE news_category_id = ?";
		$dbresult = $db->Execute($query, array($catid));
		while ($dbresult && $row = $dbresult->FetchRow())
		{
			$longname = $row['hierarchy'] . '%';
		}

		$query = "SELECT news_category_id, news_category_name, hierarchy, long_name FROM ".cms_db_prefix()."module_news_categories WHERE hierarchy not like ? ORDER by hierarchy";
		$dbresult = $db->Execute($query, array($longname));
		while ($dbresult && $row = $dbresult->FetchRow())
		{
			$items[$row['long_name']] = $row['news_category_id'];
		}

		return $this->CreateInputDropdown($id, 'parent', $items, -1, $selectedvalue);
	}

	/*
	function DoAction($action, $id, $params, $returnid = -1)
	{
		include_once(dirname(__FILE__) . '/DoAction.php');
	}
	*/

	function GetHelp($lang='en_US')
	{
		return $this->Lang('help');
	}

	function GetAuthor()
	{
		return 'Ted Kulp';
	}

	function GetAuthorEmail()
	{
		return 'wishy@cmsmadesimple.org';
	}

	function GetChangeLog()
	{
		return $this->Lang('changelog');
	}
	
	function GetEventDescription( $eventname )
	{
		return $this->lang('eventdesc-' . $eventname);
	}

	function GetEventHelp( $eventname )
	{
		return $this->lang('eventhelp-' . $eventname);
	}
	
	
	function SearchResult($returnid, $articleid, $attr = '')
	{
		$result = array();
		
		if ($attr == 'article')
		{
			$db =& $this->GetDb();
			$q = "SELECT news_title FROM ".cms_db_prefix()."module_news WHERE
			      news_id = ?";
			$dbresult = $db->Execute( $q, array( $articleid ) );
			if ($dbresult)
			{
				$row = $dbresult->FetchRow();

				//0 position is the prefix displayed in the list results.
				$result[0] = $this->GetFriendlyName();
		
				//1 position is the title
				$result[1] = $row['news_title'];

				//2 position is the URL to the title.
				$prettyurl = 'news/' . $articleid;
				$result[2] = $this->CreateLink('cntnt01', 'detail', $returnid, '', array('articleid' => $articleid) ,'', true, false, '', true, $prettyurl);
			}
		}
		
		return $result;
	}
	
	function SearchReindex(&$module)
	{
		$db =& $this->GetDb();
		
		$query = 'SELECT * FROM '.cms_db_prefix().'module_news ORDER BY news_date';
		$result = &$db->Execute($query);

		while ($result && !$result->EOF)
		{
			if ($result->fields['status'] == 'published')
			{
				$module->AddWords($this->GetName(), $result->fields['news_id'], 'article', $result->fields['news_data'] . ' ' . $result->fields['summary'] . ' ' . $result->fields['news_title'] . ' ' . $result->fields['news_title']);
			}
			$result->MoveNext();
		}
	}

	/**
	* An api function (callable from user tags) that allows the creation
	* of a new news article in a named category.
	*
	* AuthorID, is taken from the currently logged in ID, or is set at 0
	*/
	function AddNewArticle( $category, $title, $summary, $text = null, $start_time = null, $end_time = null, $status = 'published', $icon = null )
	{
		$db =& $this->GetDb();

		// find the category id
		$q = "SELECT news_category_id AS id FROM ".cms_db_prefix()."module_news_categories
		WHERE news_category_name = ?";
		$dbresult = $db->Execute( $q, array( $category ) );
		if( !$dbresult || $dbresult->RecordCount() == 0 )
		{
			return array( FALSE, $this->Lang('error_api_nocategory') );
		}
		$row = $dbresult->FetchRow();
		$catid = $row['id'];

		// find the author id given a name
		$authorid = 0;
		if( get_userid() != false )
		{
			$authorid = get_userid();
		}

		// check the remaining params
		if( $summary == '' )
		{
			return array( FALSE, $this->Lang('error_api_nosummary') );
		}

		if( $start_time == null )
		{
			$start_time = trim($db->DBTimeStamp(time()), "'");
		}

		// get a new article id
		$newsid = $db->GenID(cms_db_prefix()."module_news_seq");

		// prepare the query
		$query = 'INSERT INTO '.cms_db_prefix().'module_news ( NEWS_ID, NEWS_CATEGORY_ID, AUTHOR_ID, NEWS_TITLE, NEWS_DATA, NEWS_DATE, SUMMARY, START_TIME, END_TIME, STATUS, ICON, CREATE_DATE, MODIFIED_DATE ) VALUES (?,?,?,?,?,?,?,?,?,?,?,'.$db->DBTimeStamp(time()).','.$db->DBTimeStamp(time()).')';
		$parms = array( $newsid, $catid, $authorid, $title, $text, 
			$start_time,
			$summary, $start_time, $end_time, $status, $icon);

		// and go
		$dbresult = $db->Execute( $query, $parms );
		if( !$dbresult )
		{
			return array( FALSE, $this->Lang('error_api_dberror') );
		}
		
		@$this->SendEvent('NewsArticleAdded', array('news_id' => $newsid, 'category_id' => $catid, 'title' => $title, 'content' => $text, 'summary' => $summary, 'status' => $status, 'start_time' => $start_time, 'end_time' => $end_time));

		return array( TRUE );
	}
}

class NewsModule extends CMSModuleContentType
{
	function SetProperties()
	{
		$this->mProperties->Add('string', 'start', '');
		$this->mProperties->Add('string', 'number', '');
		$this->mProperties->Add('string', 'dateformat', 'F j, Y, g:i a');
		$this->mProperties->Add('string', 'category');
		$this->mProperties->Add('string', 'moretext', 'more...');
		$this->mProperties->Add('bool', 'sortasc', 0);

		#Turn on preview
		$this->mPreview = true;

		#Turn off caching
		$this->mCachable = false;
	}

	function EditAsArray($adding = false)
	{
		global $gCms;
		$config = $gCms->config;

		$ret = array();

		array_push($ret,array(lang('title').':','<input type="text" name="title" value="'.$this->mName.'">'));
		array_push($ret,array(lang('menutext').':','<input type="text" name="menutext" value="'.$this->mMenuText.'">'));
		array_push($ret,array(lang('pagealias').':','<input type="text" name="alias" value="'.$this->mAlias.'">'));
		array_push($ret,array(lang('template').':',TemplateOperations::TemplateDropdown('template_id', $this->mTemplateId)));
		array_push($ret,array($this->Lang('numbertodisplay').':','<input type="text" name="number" value="'.$this->GetPropertyValue('number').'" />'));
		array_push($ret,array($this->Lang('startoffset').':','<input type="text" name="start" value="'.$this->GetPropertyValue('start').'" />'));
		array_push($ret,array($this->Lang('category').':','<input type="text" name="category" value="'.$this->GetPropertyValue('category').'" />'));
		array_push($ret,array($this->Lang('moretext').':','<input type="text" name="moretext" value="'.$this->GetPropertyValue('moretext').'" />'));
		array_push($ret,array($this->Lang('sortascending').':','<input type="checkbox" name="sortasc" '.($this->GetPropertyValue('sortasc') == 1?' checked="true"':'').' />'));
		array_push($ret,array(lang('active').':','<input type="checkbox" name="active"'.($this->mActive?' checked="true"':'').'>'));
		array_push($ret,array(lang('showinmenu').':','<input type="checkbox" name="showinmenu"'.($this->mShowInMenu?' checked="true"':'').'>'));
		array_push($ret,array(lang('parent').':',ContentManager::CreateHierarchyDropdown($this->mId, $this->mParentId)));

		return $ret;
	}


	function Edit($adding = false)
	{
		global $gCms;
		$config = $gCms->config;

		$text = '';

		$text .= '<tr><td>'.lang('title').':</td><td><input type="text" name="title" value="'.$this->mName.'"></td></tr>';
		$text .= '<tr><td>'.lang('menutext').':</td><td><input type="text" name="menutext" value="'.$this->mMenuText.'"></td></tr>';
		$text .= '<tr><td>'.lang('pagealias').':</td><td><input type="text" name="alias" value="'.$this->mAlias.'"></td></tr>';
		$text .= '<tr><td>'.lang('template').':</td><td>'.TemplateOperations::TemplateDropdown('template_id', $this->mTemplateId).'</td></tr>';
		$text .= '<tr><td>'.$this->Lang('numbertodisplay').':</td><td><input type="text" name="number" value="'.$this->GetPropertyValue('number').'" /></td></tr>';
		$text .= '<tr><td>'.$this->Lang('startoffset').':</td><td><input type="text" name="start" value="'.$this->GetPropertyValue('start').'" /></td></tr>';
		$text .= '<tr><td>'.$this->Lang('category').':</td><td><input type="text" name="category" value="'.$this->GetPropertyValue('category').'" /></td></tr>';
		$text .= '<tr><td>'.$this->Lang('moretext').':</td><td><input type="text" name="moretext" value="'.$this->GetPropertyValue('moretext').'" /></td></tr>';
		$text .= '<tr><td>'.$this->Lang('sortascending').':</td><td><input type="checkbox" name="sortasc" '.($this->GetPropertyValue('sortasc')?' checked="true"':'').' /></td></tr>';
		$text .= '<tr><td>'.lang('active').':</td><td><input type="checkbox" name="active"'.($this->mActive?' checked="true"':'').'></td></tr>';
		$text .= '<tr><td>'.lang('showinmenu').':</td><td><input type="checkbox" name="showinmenu"'.($this->mShowInMenu?' checked="true"':'').'></td></tr>';
		$text .= '<tr><td>'.lang('parent').':</td><td>'.ContentManager::CreateHierarchyDropdown($this->mId, $this->mParentId).'</td></tr>';

		return $text;
	}

	function FillParams(&$params)
	{
		global $gCms;
		$config = $gCms->config;

		if (isset($params))
		{
			$parameters = array('start', 'number', 'category', 'moretext');
			foreach ($parameters as $oneparam)
			{
				if (isset($params[$oneparam]))
				{
					$this->SetPropertyValue($oneparam, $params[$oneparam]);
				}
			}
			if (isset($params['sortasc']))
			{
				$this->SetPropertyValue('sortasc', 1);
			}
			else
			{
				$this->SetPropertyValue('sortasc', 0);
			}
			if (isset($params['title']))
			{
				$this->mName = $params['title'];
			}
			if (isset($params['menutext']))
			{
				$this->mMenuText = $params['menutext'];
			}
			if (isset($params['template_id']))
			{
				$this->mTemplateId = $params['template_id'];
			}
			if (isset($params['alias']))
			{
				$this->SetAlias($params['alias']);
			}
			else
			{
				$this->SetAlias('');
			}
			if (isset($params['parent_id']))
			{
				if ($this->mParentId != $params['parent_id'])
				{
					$this->mHierarchy = '';
					$this->mItemOrder = -1;
				}
				$this->mParentId = $params['parent_id'];
			}
			if (isset($params['active']))
			{
				$this->mActive = true;
			}
			else
			{
				$this->mActive = false;
			}
			if (isset($params['showinmenu']))
			{
				$this->mShowInMenu = true;
			}
			else
			{
				$this->mShowInMenu = false;
			}
		}
	}

	function Show($param = 'content_en')
	{
		if ($param == 'content_en')
		{
			global $gCms;
			$variables = &$gCms->variables;

			$params = array();

			if (strlen($this->GetPropertyValue('number')) > 0)
			{
				$params['number'] = $this->GetPropertyValue('number');
			}

			if (strlen($this->GetPropertyValue('start')) > 0)
			{
				$params['start'] = $this->GetPropertyValue('start');
			}

			if (strlen($this->GetPropertyValue('category')) > 0)
			{
				$params['category'] = $this->GetPropertyValue('category');
			}

			$params['moretext'] = $this->GetPropertyValue('moretext');
			$params['sortasc'] = $this->GetPropertyValue('sortasc');

			$newnews = new News();

			//Buffer all this crap spit out by the News module and return it
			@ob_start();
			$newnews->DoAction('default', 'newsmodule', $params, $variables['content_id']);
			$text = @ob_get_contents();
			@ob_end_clean();
			#return $text;
			return '{literal}'.$text.'{/literal}';
		}
		else
		{
			return '';
		}
	}

	function GetURL()
	{
		global $gCms;
		$config = $gCms->config;

		$url = "";

		if ($config["assume_mod_rewrite"])
		{
			// we could use $this->mId instead of mAlias but i think it's better
			$url = $config["root_url"]."/".$this->mAlias . $config["page_extension"];
		}
		else 
		{
			$url = $config["root_url"]."/index.php?".$config["query_var"]."=". $this->mAlias;
		}

		return $url;
	}

    function FriendlyName()
	{
		return 'News';
	}

	function ModuleName()
	{
		return 'News';
	}

	function IsDefaultPossible()
	{
		return TRUE;
	}
}

# vim:ts=4 sw=4 noet
?>
