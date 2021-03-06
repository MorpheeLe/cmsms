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

function smarty_cms_function_recently_updated($params, &$smarty)
{
  if(empty($params['number']))
    {
      $number = 10;
    }
  else
    {
      $number = $params['number'];
    }
    
  if(empty($params['leadin']))
    {
      $leadin = "Modified: ";
    }
  else
    {
      $leadin = $params['leadin'];
    }
    
  if(empty($params['showtitle']))
    {
      $showtitle='true';
    }
  else
    {
      $showtitle = $params['showtitle'];
    }    
    
	$dateformat = isset($params['dateformat']) ? $params['dateformat'] : "d.m.y h:m" ;    
	$css_class = isset($params['css_class']) ? $params['css_class'] : "" ;    
    
if (isset($params['css_class'])){
	$output = '<div class="'.$css_class.'"><ul>';
	}
else {
	$output = '<ul>';
}

global $gCms;
$hm =& $gCms->GetHierarchyManager();
$db = &$gCms->db;
// Get list of most recently updated pages excluding the home page
$q = "SELECT * FROM ".cms_db_prefix()."content WHERE (type='content' OR type='link')
AND default_content != 1 AND active = 1 AND show_in_menu = 1 
ORDER BY modified_date DESC LIMIT ".((int)$number);
$dbresult = $db->Execute( $q );
if( !$dbresult )
{
    echo 'DB error: '. $db->ErrorMsg()."<br/>";
}
while ($dbresult && $updated_page = $dbresult->FetchRow())
{
    $curnode =& $hm->getNodeById($updated_page['content_id']);
    $curcontent =& $curnode->GetContent();
    $output .= '<li>';
    $output .= '<a href="'.$curcontent->GetURL().'">'.$updated_page['content_name'].'</a>';
    if ((FALSE == empty($updated_page['titleattribute'])) && ($showtitle=='true'))
      {
	$output .= '<br />';
	$output .= $updated_page['titleattribute'];
      }
    $output .= '<br />';
    
    $output .= $leadin;
    $output .= date($dateformat,strtotime($updated_page['modified_date']));
    $output .= '</li>';
}

$output .= '</ul>';
if (isset($params['css_class'])){
		$output .= '</div>';
		}
		
return $output;
}

function smarty_cms_help_function_recently_updated() {
	?>
	<h3>What does this do?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{recently_updated}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
											 <li><p><em>(optional)</em> number='10' - Number of updated pages to show.</p><p>Example: <pre>{recently_updated number='15'}</pre></p></li>
											 	<li><p><em>(optional)</em> leadin='Last changed' - Text to show left of the modified date.</p><p>Example: <pre>{recently_updated leadin='Last Changed'}</pre></p></li>
											 	<li><p><em>(optional)</em> showtitle='true' - Shows the titleattribute if it exists as well (true|false).</p><p>Example: <pre>{recently_updated showtitle='true'}</pre></p></li>											 	
											 	<li><p><em>(optional)</em> css_class='some_name' - Warp a div tag with this class around the list.</p><p>Example: <pre>{recently_updated css_class='some_name'}</pre></p></li>											 	
											 		<li><p><em>(optional)</em> dateformat='d.m.y h:m' - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: <pre>{recently_updated dateformat='D M j G:i:s T Y'}</pre></p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number='15' showtitle='false' leadin='Last Change: ' css_class='my_changes' dateformat='D M j G:i:s T Y'}</pre>
	<?php
}

function smarty_cms_about_function_recently_updated() {
	?>
	<p>Author: Olaf Noehring &lt;http://www.team-noehring.de&gt;</p>
	<p>Version: 1.1</p>
	<p>Author: Elijah Lofgren &lt;elijahlofgren@elijahlofgren.com&gt;</p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	1.1: added new parameters: <br /> &lt;leadin&gt;. The contents of leadin will be shown left of the modified date. Default is &lt;Modified:&gt;<br />
	$showtitle='true' - if true, the titleattribute of the page will be shown if it exists (true|false)<br />
	css_class<br />
	dateformat - default is d.m.y h:m , use the format you whish (php format)	<br />
	
	</p>
	<?php
}
?>
