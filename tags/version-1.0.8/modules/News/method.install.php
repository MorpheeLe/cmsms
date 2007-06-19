<?php
if (!isset($gCms)) exit;

$db =& $this->GetDb();

$dict = NewDataDictionary($db);
$flds = "
	news_id I KEY,
	news_category_id I,
	news_title C(255),
	news_data X,
	news_date " . CMS_ADODB_DT . ",
	summary X,
	start_time " . CMS_ADODB_DT . ",
	end_time " . CMS_ADODB_DT . ",
	status C(25),
	icon C(255),
	create_date " . CMS_ADODB_DT . ",
	modified_date " . CMS_ADODB_DT . ",
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
$this->CreatePermission('Approve News', 'Approve News For Frontend Display');

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

?>