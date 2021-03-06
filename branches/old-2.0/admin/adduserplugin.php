<?php
#CMS - CMS Made Simple
#(c)2004-2008 by Ted Kulp (ted@cmsmadesimple.org)
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
#$Id$

$CMS_ADMIN_PAGE=1;

require_once("../include.php");

check_login();
global $gCms;
$db =& $gCms->GetDb();

$smarty = cms_smarty();
$smarty->assign('action', 'adduserplugin.php');

$error = array();

if (isset($_POST["cancel"])) {
	redirect("listusertags.php");
	return;
}

$userid = get_userid();
$access = check_permission($userid, 'Modify User-defined Tags');

global $gCms;
$db =& $gCms->GetDb();

$submit = array_key_exists('submitbutton', $_POST);

function &get_udt_object()
{
	$udt_object = new CmsUserTag();
	if (isset($_REQUEST['udt']))
		$udt_object->update_parameters($_REQUEST['udt']);
	return $udt_object;
}
$udt_object = get_udt_object();

// Handle form submission
if ($access)
{
	if($submit)
	{
		if ($udt_object->save())
		{
			audit($udt_object->id, $udt_object->name, 'Added User Defined Tag');
			redirect("listusertags.php");
		}
	}
}


include_once("header.php");

// Assign the header
$smarty->assign('header_name', $themeObject->ShowHeader('addusertag'));

// Assign the Object
$smarty->assign('udt_object', $udt_object);

// Display the template
$smarty->display('adduserplugin.tpl');

include_once("footer.php");

# vim:ts=4 sw=4 noet
?>