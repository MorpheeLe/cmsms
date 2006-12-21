<?php
#CMS - CMS Made Simple
#(c)2004-2006 by Ted Kulp (ted@cmsmadesimple.org)
#This project's homepage is: http://cmsmadesimple.org
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

class CmsLanguage extends CmsObject
{
	private static $nls = null;
	private static $lang = array();
	private static $current_language = null;

	function __construct()
	{
		parent::__construct();
	}
	
	public static function translate($name, $params = array(), $module = 'core', $current_language = '', $default_language = 'en_US')
	{
		if (self::$nls == null)
			CmsLanguage::load_nls_files();
		
		$current_language = $current_language != '' ? $current_language : CmsLanguage::get_current_language();
		
		if (!array_key_exists($module, self::$lang) || !array_key_exists($current_language, self::$lang[$module]))
		{
			CmsLanguage::load_lang_file($module, $default_language);
			
			if ($current_language != $default_language)
			{
				CmsLanguage::load_lang_file($module, $current_language);
			}
		}
		
		if (array_key_exists($name, self::$lang[$module][$current_language]))
			return self::$lang[$module][$current_language][$name];
		else if ($default_language != $current_language && array_key_exists($name, self::$lang[$module][$default_language]))
			return self::$lang[$module][$default_language][$name];
		else
			return "--Add Me - $name --";
	}
	
	private static function load_lang_file($module, $language)
	{
		$lang = array();
		
		$root = dirname(dirname(dirname(__FILE__)));

		$file = cms_join_path($root, "lang", $module . '.' . $language . ".php");
		if (!is_file($file))
		{
			if ($module == 'core')
			{
			    $file = cms_join_path($root, "admin", "lang", "ext", $language, "admin.inc.php");
				if (!is_file($file))
				{
					$file = cms_join_path($root, "admin", "lang", $language, "admin.inc.php");
				}
			}
			else
			{
			    $file = cms_join_path($root, "modules", $module, "lang", "ext", $language . ".php");
				if (!is_file($file))
				{
					$file = cms_join_path($root, "modules", $module, "lang", $language . ".php");
				}
			}
		}

	    if (is_file($file) && strlen($language) == 5 && strpos($language, ".") === false)
	    {
	        include ($file);
			if (isset($lang['admin']) && is_array($lang['admin']) && count($lang['admin'] > 1))
			{
				$lang = $lang['admin'];
			}
	    }
		
		self::$lang[$module][$language] =& $lang;
	}
	
	private static function load_nls_files()
	{
		$nls = array();
		
		#Read in all current languages...
		$dir = cms_join_path(dirname(dirname(dirname(__FILE__))), 'admin', 'lang');

		$handle = opendir($dir);
		while (false!==($file = readdir($handle))) {
			if (is_file("$dir/$file") && strpos($file, "nls.php") != 0) {
				include("$dir/$file");
			}
		}

		closedir($handle);
		
		self::$nls =& $nls;
	}
	
	private static function get_current_language()
	{
		#Check to see if there is already a language in use...
		if (self::$current_language == null)
		{
			$current_language = '';
		
			//See if it's in a cookie or posted.
			if (isset($_POST["default_cms_lang"]))
			{
				$current_language = $_POST["default_cms_lang"];
				if ($current_language == '')
				{
					setcookie("cms_language", '', time() - 3600);
				}
				else
				{
					setcookie("cms_language", $_POST["change_cms_lang"]);
				}
			}
			else if (isset($_SESSION['login_cms_language']))
			{
				debug_buffer('Setting language to: ' . $_SESSION['login_cms_language']);
				$current_language = $_SESSION['login_cms_language'];
				setcookie('cms_language', $_SESSION['login_cms_language']);
				unset($_SESSION['login_cms_language']);
			}
			else if (isset($_COOKIE["cms_language"]))
			{
				$current_language = $_COOKIE["cms_language"];
			}
			
			//Anything yet?
			if ($current_language == '')
			{
				//Do we have a default locale in the config file?
				$config = cms_config();
				if (isset($config['locale']) && $config['locale'] != '')
				{
					$current_language = $config['locale'];
				}
				else
				{
					//No, take a stab at figuring out the default language...
					//Figure out default language and set it if it exists
					if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])) 
					{
						$alllang = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
						if (strpos($alllang, ";") !== FALSE)
							$alllang = substr($alllang,0,strpos($alllang, ";"));
						$langs = explode(",", $alllang);

						foreach ($langs as $onelang)
						{
							#Check to see if lang exists...
							if (isset(self::$nls['language'][$onelang]))
							{
								$current_language = $onelang;
								setcookie("cms_language", $onelang);
								break;
							}
							#Check to see if alias exists...
							if (isset(self::$nls['alias'][$onelang]))
							{
								$alias = self::$nls['alias'][$onelang];
								if (isset(self::$nls['language'][$alias]))
								{
									$current_language = $alias;
									setcookie("cms_language", $alias);
									break;
								}
							}
						}
					}
				}
			}
			
			self::$current_language = ($current_language != '' ? $current_language : 'en_US');
		}
		
		return self::$current_language;
	}
}

# vim:ts=4 sw=4 noet
?>