<?php
#CMS - CMS Made Simple
#(c)2004-6 by Ted Kulp (ted@cmsmadesimple.org)
#This project's homepage is: http://cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#BUT withOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id$

/**
 * Class for doing stylesheet related functions.  Maybe of the Group object functions are just wrappers around these.
 *
 * @since		0.11
 * @package		CMS
 */
class StylesheetOperations
{
	function & LoadStylesheets()
	{
		global $gCms;
		$db = &$gCms->GetDb();

		$result = array();

		$query = "SELECT css_id, css_name, css_text, media_type FROM ".cms_db_prefix()."css ORDER BY css_id";
		$dbresult = $db->Execute($query);

		while ($dbresult && $row = $dbresult->FetchRow())
		{
			$onestylesheet = new Stylesheet();
			$onestylesheet->id = $row['css_id'];
			$onestylesheet->name = $row['css_name'];
			$onestylesheet->value = $row['css_text'];
			$onestylesheet->media_type = $row['media_type'];
			$result[] = $onestylesheet;
		}

		return $result;
	}


	function AssociateStylesheetToTemplate( $stylesheetid, $templateid )
	{
		global $gCms;
		$db = &$gCms->GetDb();

		$time = $db->DBTimeStamp(time());
		$query = 'INSERT INTO '.cms_db_prefix().'css_assoc VALUES (?,?,?,'.$time.','.$time.')';
		$dbresult = $db->Execute( $query, array( $templateid, 
			$stylesheetid,
			'template'));
			return ($dbresult != false);
	}


	function GetTemplateAssociatedStylesheets($templateid)
	{
		$result = false;

		global $gCms;
		$db = &$gCms->GetDb();

		$query = 'SELECT assoc_css_id FROM '.cms_db_prefix().'css_assoc WHERE
		           assoc_type = ? AND assoc_to_id = ?';
		$dbresult = $db->Execute($query, array('template', $templateid));

		$result = array();
		while ($dbresult && $row = $dbresult->FetchRow())
		{
			$result[] = $row['assoc_css_id'];
		}

		return $result;
	}


	function & LoadStylesheetByID($id)
	{
		$result = false;

		global $gCms;
		$db = &$gCms->GetDb();
		$cache = &$gCms->StylesheetCache;

		if (isset($cache[$id]))
		{
			return $cache[$id];
		}

		$query = "SELECT css_id, css_name, css_text, media_type FROM ".cms_db_prefix()."css WHERE css_id = ?";
		$dbresult = $db->Execute($query, array($id));

		while ($dbresult && $row = $dbresult->FetchRow())
		{
			$onestylesheet = new Stylesheet();
			$onestylesheet->id = $row['css_id'];
			$onestylesheet->name = $row['css_name'];
			$onestylesheet->value = $row['css_text'];
			$onestylesheet->media_type = $row['media_type'];
			$result =& $onestylesheet;

			if (!isset($cache[$onestylesheet->id]))
			{
				$cache[$onestylesheet->id] =& $onestylesheet;
			}
		}

		return $result;
	}

	function InsertStylesheet($stylesheet)
	{
		$result = -1; 

		global $gCms;
		$db = &$gCms->GetDb();

		$new_stylesheet_id = $db->GenID(cms_db_prefix()."css_seq");
		$time = $db->DBTimeStamp(time());
		$query = "INSERT INTO ".cms_db_prefix()."css (css_id, css_name, css_text, media_type, create_date, modified_date) VALUES (?,?,?,?,".$time.",".$time.")";
		$dbresult = $db->Execute($query, array($new_stylesheet_id, $stylesheet->name, $stylesheet->value, $stylesheet->media_type));
		if ($dbresult !== false)
		{
			$result = $new_stylesheet_id;
		}

		return $result;
	}

	function UpdateStylesheet($stylesheet)
	{
		$result = false; 

		global $gCms;
		$db = &$gCms->GetDb();

		$time = $db->DBTimeStamp(time());
		$query = "UPDATE ".cms_db_prefix()."css SET css_name = ?,css_text = ?, media_type = ?, modified_date = ".$time." WHERE css_id = ?";
		$dbresult = $db->Execute($query, array($stylesheet->name, $stylesheet->value, $stylesheet->media_type, $stylesheet->id));
		if ($dbresult !== false)
		{
			$result = true;
		}

		return $result;
	}

	function DeleteStylesheetByID($id)
	{
		$result = false;

		global $gCms;
		$db = &$gCms->GetDb();

		$query = "DELETE FROM ".cms_db_prefix()."css_assoc where assoc_css_id = ?";
		$dbresult = $db->Execute($query, array($id));

		$query = "DELETE FROM ".cms_db_prefix()."css where css_id = ?";
		$dbresult = $db->Execute($query, array($id));

		if ($dbresult !== false)
		{
			$result = true;
		}

		return $result;
	}

	function CheckExistingStylesheetName($name)
	{
		$result = false;

		global $gCms;
		$db = &$gCms->GetDb();

		$query = "SELECT css_id from ".cms_db_prefix()."css WHERE css_name = ?";
		$dbresult = $db->Execute($query,array($name));

		if ($dbresult && $dbresult->RecordCount() > 0)
		{
			$result = true; 
		}

		return $result;
	}
}

?>