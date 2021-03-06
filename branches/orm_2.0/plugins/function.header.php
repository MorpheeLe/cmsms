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

function smarty_cms_function_header($params, &$smarty)
{
	global $gCms;
	$config =& $gCms->GetConfig();
	$pageinfo =& $gCms->variables['pageinfo'];
	
	$result = '';
	
	if (isset($params['name']) && $params['name'] != '')
	{
		$result .= '<link rel="result" type="text/css" ';
		if (isset($params['media']) && $params['media'] != '')
		{
			$result .= 'media="' . $params['media'] . '" ';
		}
		$result .= 'href="'.$config['root_url'].'/stylesheet.php?name='.$params['name'];
		$result .= "\" />\n"; 
	}
	else
	{
		foreach (get_stylesheet_media_types($pageinfo->template_id) as $media)
		{
			$result .= '<link rel="result" type="text/css" ';
			if ($media != '')
			{
				$result .= 'media="'.$media.'" ';
			}
			$result .= 'href="'.$config['root_url'].'/stylesheet.php?templateid='.$pageinfo->template_id;
			if ($media != '')
			{
				$result .= '&amp;mediatype='.urlencode($media);
			}
			$result .= "\" />\n"; 
		}
	}
	
	$result .= get_site_preference('metadata', '');

	if (isset($pageinfo) && $pageinfo !== FALSE)
	{
		if (isset($pageinfo->content_metadata) && $pageinfo->content_metadata != '')
		{
			$result .= "\n" . $pageinfo->content_metadata;
		}
	}

	if ((!strpos($result,$smarty->left_delimiter) === false) and (!strpos($result,$smarty->right_delimiter) === false))
	{
		$smarty->_compile_source('metadata template', $result, $_compiled);
		@ob_start();
		$smarty->_eval('?>' . $_compiled);
		$result = @ob_get_contents();
		@ob_end_clean();
	}
	
	$showbase = true;
	
	#Show a base tag unless showbase is false in config.php
	#It really can't hinder, only help.
	if (isset($params['showbase']))
	{
		if ($params['showbase'] == 'false')
		{
			$showbase = false;
		}
	}

	if ($showbase)
	{
		$result .= "\n<base href=\"".$config['root_url']."/\" />\n";
	}
	
	if (array_key_exists('assign', $params))
	{
		$smarty->assign($params['assign'], $result);
	}
	else
	{
		return $result;
	}
}

function smarty_cms_help_function_header() {
	?>
	<h3>What does this do?</h3>
	<p>Displays the stylesheet link and metadata for this page. Both global metdata from the global settings page and metadata for each page will be shown.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{header}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one spefically named one, whether it's attached to the current template or not.</li>
		<li><em>(optional)</em>media - If name is defined, this allows you set a different media type for that stylesheet.</li>
		<li><em>(optional)</em>showbase (true/false) - If set to false, the base tag will not be sent to the browser.  Defaults to true if use_hierarchy is set to true in config.php.</li>
		<li><em>(optional)</em>assign - Assign the output to a smarty variable named in assign instead of outputting it directly.</li>
	</ul>
	<?php
}

function smarty_cms_about_function_header() {
	?>
	<p>Author: Ted Kulp&lt;ted@cmsmadesimple.org&gt;</p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>
	<?php
}
?>
