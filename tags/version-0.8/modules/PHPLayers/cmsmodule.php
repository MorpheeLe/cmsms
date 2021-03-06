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
#$Id$

//Set the module name -- should be the name of the class
$module_name = "PHPLayers";

//Load functions
require_once(dirname(__FILE__)."/functions.php");

//Register Module
cms_mapi_register_module($module_name, "Ted Kulp <tedkulp@users.sf.net>", "1.0");

//Register module to work as a plugin (cms_module)
cms_mapi_register_plugin_module($module_name);

//Register callback functions
cms_mapi_register_execute_function($module_name, 'phplayers_module_execute');
cms_mapi_register_content_prerender_function($module_name, 'phplayers_prerender_function');

//Register help callback functions
cms_mapi_register_help_function($module_name, 'phplayers_module_help');
cms_mapi_register_about_function($module_name, 'phplayers_module_about');

# vim:ts=4 sw=4 noet
?>
