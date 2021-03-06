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

function check_login(&$config) {
	if (!isset($_COOKIE["cms_admin_user_id"])) {
		redirect($config->root_url."/admin/login.php");
	}
}

function get_userid() {
	if (isset($_COOKIE["cms_admin_user_id"])) {
		return $_COOKIE["cms_admin_user_id"];
	}
}

function check_permission(&$config, $userid, $permname) {
	$check = false;

	$db = new DB($config);

	$query = "SELECT * FROM ".$config->db_prefix."user_groups ug INNER JOIN ".$config->db_prefix."group_perms gp ON gp.group_id = ug.group_id INNER JOIN ".$config->db_prefix."permissions p ON p.permission_id = gp.permission_id WHERE ug.user_id = ".$userid." AND permission_name = '".$permname."'";
	$result = $db->query($query);

	if ($db->rowcount($result) > 0) {
		$check = true;
	}

	$db->freeresult($result);
	$db->close();


	return $check;
}

function check_ownership(&$config, $userid, $pagename, $pageid = "") {
	$check = false;

	$db = new DB($config);

	$query = "";
	if ($pageid == "") {
		$query = "SELECT * FROM ".$config->db_prefix."pages WHERE owner = ".$userid." AND page_url = '".$pagename."'";
	} else {
		$query = "SELECT * FROM ".$config->db_prefix."pages WHERE owner = ".$userid." AND page_id = ".$pageid;
	}
	$result = $db->query($query);

	if ($db->rowcount($result) > 0) {
		$check = true;
	}

	$db->freeresult($result);
	$db->close();

	return $check;
}

function check_authorship(&$config, $userid, $pageid) {
	$check = false;

	$db = new DB($config);

	$query = "SELECT * FROM ".$config->db_prefix."additional_users WHERE page_id = $pageid AND user_id = $userid";
	$result = $db->query($query);
	if ($db->_rowcount($result) > 0) {
		$check = true;
	}

	$db->freeresult($result);
	$db->close();

	return $check;
}

function audit(&$config, $userid, $username, $itemid, $itemname, $action) {

	$db = new DB($config);

	$query = "INSERT INTO ".$config->db_prefix."adminlog (timestamp, user_id, username, item_id, item_name, action) VALUES (".time().", $userid, '".$db->escapestring($username)."', $itemid, '".$db->escapestring($itemname)."', '".$db->escapestring($action)."')";
	$db->query($query);

	$db->close();

}

function get_preference(&$config, $userid, $prefname) {

	$value = "";

	$db = new DB($config);
	$query = "SELECT value from ".$config->db_prefix."userprefs WHERE user_id = $userid AND preference = '".$db->escapestring($prefname)."'";
	$result = $db->query($query);
	
	if ($db->rowcount($result) > 0) {
		$row = $db->getresulthash($result);
		$value = $row["value"];
	}

	$db->freeresult($result);
	$db->close();

	return $value;
}

function set_preference(&$config, $userid, $prefname, $value) {

	$doinsert = true;

	$db = new DB($config);
	$query = "SELECT value from ".$config->db_prefix."userprefs WHERE user_id = $userid AND preference = '".$db->escapestring($prefname)."'";
	$result = $db->query($query);

	if ($db->rowcount($result) > 0) {
		$doinsert = false;
	}

	$db->freeresult($result);

	if ($doinsert) {
		$query = "INSERT INTO ".$config->db_prefix."userprefs (user_id, preference, value) VALUES ($userid, '".$db->escapestring($prefname)."', '".$db->escapestring($value)."')";
		$db->query($query);
	} else {
		$query = "UPDATE ".$config->db_prefix."userprefs SET value = '".$db->escapestring($value)."' WHERE user_id = $userid AND preference = '".$db->escapestring($prefname)."'";
		$db->query($query);
	}

	$db->close();
}

function get_stylesheet(&$config, $templateid) {

	$css = "";

	$db = new DB($config);
	$query = "SELECT stylesheet FROM ".$config->db_prefix."templates WHERE template_id = ".$templateid;
	$result = $db->query($query);

	if ($db->rowcount($result) > 0) {
		$line = $db->getresulthash($result);
		$css = $line[stylesheet];
	}

	$db->freeresult($result);
	$db->close();

	return $css;
}

function & strip_slashes(&$str) {

	if(is_array($str)) {
		while(list($key, $val) = each($str)) {
			$str[$key] = strip_slashes($val);
		}
	}
	else {
		$str = stripslashes($str);
	}

	return $str;
}

# vim:ts=4 sw=4 noet
?>
