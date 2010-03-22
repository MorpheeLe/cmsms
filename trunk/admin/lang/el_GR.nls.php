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

#NLS (National Language System) array.

#The basic idea and values was taken from then Horde Framework (http://horde.org)
#The original filename was horde/config/nls.php.
#The modifications to fit it for Gallery were made by Jens Tkotz
#(http://gallery.meanalto.com) 

#Ideas from Gallery's implementation made to CMS by Ted Kulp

#GR Greek
#Created by: Panagiotis Skarvelis <sl45sms@yahoo.gr>


#Native language name
#NOTE: Encode me with HTML escape chars like &#231; or &ntilde; so I work on every page
$cms_nls['language']['el_GR'] = '&Epsilon;&lambda;&lambda;&eta;&nu;&iota;&kappa;&alpha;';
$cms_nls['englishlang']['el_GR'] = 'Greek';

#Possible aliases for language
$cms_nls['alias']['gr'] = 'el_GR';
$cms_nls['alias']['greek'] = 'el_GR' ;
$cms_nls['alias']['hellenic'] = 'el_GR' ;
$cms_nls['alias']['el'] = 'el_GR' ;
$cms_nls['alias']['el_GR.ISO8859-7'] = 'el_GR' ;

#Encoding of the language
$cms_nls['encoding']['el_GR'] = "UTF-8";

#Location of the file(s)
$cms_nls['file']['el_GR'] = array(dirname(__FILE__).'/el_GR/admin.inc.php');

#Language setting for HTML area
# Only change this when translations exist in HTMLarea and plugin dirs
# (please send language files to HTMLarea development)

$cms_nls['htmlarea']['en_US'] = 'en';
?>