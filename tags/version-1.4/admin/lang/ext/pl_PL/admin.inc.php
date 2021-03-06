<?php
$lang['admin']['start_upgrade_process'] = 'Wystartuj proces aktualizacji systemu';
$lang['admin']['warning_upgrade'] = '<em><strong>Ostrzeżenie:</strong></em> CMSMS wymaga aktualizacji!';
$lang['admin']['warning_upgrade_info1'] = 'Aktualnie działasz na schemacie wersji %s. Potrzebujesz wykonać aktualizację do wersji %s';
$lang['admin']['warning_upgrade_info2'] = 'Naciśnij na następujący link: %s.';
$lang['admin']['warning_mail_settings'] = 'Your mail settings have not been configured.  This could interfere with the ability of your website to send email mssages.  You should go to <a href=&quot;moduleinterface.php?module=CMSMailer&quot;>Extensions >> CMSMailer</a> and configure the mail settings with the information provided by your host.';
$lang['admin']['view_page'] = 'View this page in a new window';
$lang['admin']['off'] = 'Off';
$lang['admin']['on'] = 'On';
$lang['admin']['permission_information'] = 'Informacje o uprawnieniach';
$lang['admin']['server_os'] = 'Server Operating System';
$lang['admin']['server_api'] = 'Server API';
$lang['admin']['server_software'] = 'Server Software';
$lang['admin']['server_information'] = 'Server Information';
$lang['admin']['session_save_path'] = 'Session Save Path';
$lang['admin']['max_execution_time'] = 'Maximum Execution Time';
$lang['admin']['gd_version'] = 'GD version';
$lang['admin']['upload_max_filesize'] = 'Maximum Upload Size';
$lang['admin']['post_max_size'] = 'Maximum Post Size';
$lang['admin']['memory_limit'] = 'PHP Memory Limit';
$lang['admin']['server_db_type'] = 'Server Database';
$lang['admin']['server_db_version'] = 'Server Database Version';
$lang['admin']['phpversion'] = 'Current PHP Version';
$lang['admin']['safe_mode'] = 'PHP Safe Mode';
$lang['admin']['php_information'] = 'Informacje o PHP';
$lang['admin']['cms_install_information'] = 'Informacje o instalce CMS MS';
$lang['admin']['cms_version'] = 'Wersja CMS MS';
$lang['admin']['installed_modules'] = 'Zainstalowane moduły';
$lang['admin']['config_information'] = 'Informacje z pliku config';
$lang['admin']['systeminfo_copy_paste'] = 'Skopiuj i wklej zaznaczony tekst do swojego postu na forum';
$lang['admin']['help_systeminformation'] = 'The information displayed below is collected from a variety of locations, and summarized here so that you may be able to conveniently find some of the information required when trying to diagnose a problem or request help with your CMS Made Simple installation.';
$lang['admin']['systeminfo'] = 'Informacje o systemie';
$lang['admin']['systeminfodescription'] = 'Display various pieces of information about your system that may be useful in diagnosing problems';
$lang['admin']['welcome_user'] = 'Witamy';
$lang['admin']['help_css_max_age'] = 'This parameter should be set relatively high for static sites, and should be set to 0 for site development';
$lang['admin']['css_max_age'] = 'Maximum amount of time (seconds) stylesheets can be cached in the browser';
$lang['admin']['error'] = 'Błąd';
$lang['admin']['clear_version_check_cache'] = 'Clear any cached version check information on submit';
$lang['admin']['new_version_available'] = '<em>Notice:</em> A new version of CMS Made Simple is available.  Please notify your administrator.';
$lang['admin']['info_urlcheckversion'] = 'If this url is the word &quot;none&quot; no checks will be made.<br/>An empty string will result in a default URL being used.';
$lang['admin']['urlcheckversion'] = 'Sprawdź czy są dostępne nowe wersje CMS-a używając tego adresu URL';
$lang['admin']['master_admintheme'] = 'Domyślny szablon administratora (szablon strony loginu i nowych kont w panelu admina)';
$lang['admin']['contenttype_separator'] = 'Separator';
$lang['admin']['contenttype_sectionheader'] = 'Nagł&oacute;wek sekcji';
$lang['admin']['contenttype_link'] = 'Zewnętrzny link';
$lang['admin']['contenttype_content'] = 'Treść';
$lang['admin']['contenttype_pagelink'] = 'Link do strony serwisu';
$lang['admin']['nogcbwysiwyg'] = 'Zabroń używania aplikacji WYSIWYG przy Globalnych Blokach HTML';
$lang['admin']['destination_page'] = 'Docelowa strona';
$lang['admin']['additional_params'] = 'Dodatkowe parametry';
$lang['admin']['help_function_current_date'] = '	<h3>What does this do?</h3>
	<p>Prints the current date and time.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>here</a> for a parameter list and information.</li>
		<li><em>(optional)</em>ucword - If true return uppercase the first character of each word.</li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c HTML validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_xhtml}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
	<li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://validator.w3.org/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is &#039;valid XHTML 1.0 Transitional&#039;.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
	<li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_valid_css'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c CSS validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_css}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
        <li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://jigsaw.w3.org/css-validator/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is &#039;Valid CSS 2.1&#039;.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
        <li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_title'] = '	<h3>What does this do?</h3>
	<p>Prints the title of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{title}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>What does this do?</h3>
	<p>Gets stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page&#039;s head section like: <code>{stylesheet}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one spefically named one, whether it&#039;s attached to the current template or not.</li>
		<li><em>(optional)</em>media - If name is defined, this allows you set a different media type for that stylesheet.</li>
	</ul>
	</p>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href=&quot;#expand1&quot; onClick=&quot;expandcontent(&#039;expand1&#039;)&quot; style=&quot;cursor:hand; cursor:pointer&quot;>Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name=&quot;help&quot;></a> - Here is all the info you will ever need...</a></span></p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}<br />
	This is all the content the user will see when they click the title &quot;Click Here&quot; above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: If you intend to use this multiple times on a single page each startExpandCollapse tag must have a unique id.</p>
	<h3>What if I want to change the look of the title?</h3>
	<p>The look of the title can be changed via css. The title is wrapped in a div with the id you specify.</p>

	<h3>What parameters does it take?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_startexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href=&quot;#expand1&quot; onClick=&quot;expandcontent(&#039;expand1&#039;)&quot; style=&quot;cursor:hand; cursor:pointer&quot;>Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name=&quot;help&quot;></a> - Here is all the info you will ever need...</a></span></p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}</code>. Also, you must use the {stopExpandCollapse} at the end of the collapseable content. Here is an example:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}<br />
	This is all the content the user will see when they click the title &quot;Click Here&quot; above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: If you intend to use this multiple times on a single page each startExpandCollapse tag must have a unique id.</p>
	<h3>What if I want to change the look of the title?</h3>
	<p>The look of the title can be changed via css. The title is wrapped in a div with the id you specify.</p>

	<h3>What parameters does it take?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_sitemap'] = '    <h3>Notice</h3>
    <p>This plugin is deprecated.  Users should now see the <code>{site_mapper}</code> plugin.</p>
    <h3>What does this do?</h3>
    <p>Prints out a sitemap.</p>
    <h3>How do I use it?</h3>
    <p>Just insert the tag into your template/page like: <code>{sitemap}</code></p>
    <h3>What parameters does it take?</h3>
    <p>
        <ul>
            <li><em>(optional)</em> <tt>class</tt> - A css_class for the ul-tag which includes the complete sitemap.</li>
            <li><em>(optional)</em> <tt>start_element</tt> - The hierarchy of your element (ie : 1.2 or 3.5.1 for example). This parameter sets the root of the menu. You can use the page alias instead of hierarchy.</li>
            <li><em>(optional)</em> <tt>number_of_levels</tt> - An integer, the number of levels you want to show in your menu. Should be set to 2 using a delimiter.</li>
            <li><em>(optional)</em> <tt>delimiter</tt> - Text to separate entries not on depth 1 of the sitemap (i.e. 1.1, 1.2). This is helpful for showing entries on depth 2 beside each other (using css display:inline).</li>
            <li><em>(optional)</em> <tt>initial 1/0</tt> - If set to 1, begin also the first entries not on depth 1 with a delimiter (i.e. 1.1, 2.1).</li>
            <li><em>(optional)</em> <tt>relative 1/0</tt> - We are not going to show current page (with the sitemap) - we&#039;ll show only his childs.</li>
            <li><em>(optional)</em> <tt>showall 1/0</tt> - We are going to show all pages if showall is enabled, else we&#039;ll only show pages with active menu entries.</li>
            <li><em>(optional)</em> <tt>add_elements</tt> - A comma separated list of alias names which will be added to the shown pages with active menu entries (showall not enabled).</li>
        </ul>
        </p>';
$lang['admin']['help_function_adsense'] = '	<h3>What does this do?</h3>
	<p>Google adsense is a popular advertising program for websites.  This tag will take the basic parameters that would be provided by the adsense program and puts them in a easy to use tag that makes your templates look much cleaner.  See <a href=&quot;http://www.google.com/adsense&quot; target=&quot;_blank&quot;>here</a> for more details on adsense.</p>
	<h3>How do I use it?</h3>
	<p>First, sign up for a google adsense account and get the parameters for your ad.  Then just use the tag in your page/template like so: <code>{adsense ad_client=&quot;pub-random#&quot; ad_width=&quot;120&quot; ad_height=&quot;600&quot; ad_format=&quot;120x600_as&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>All parameters are optional, though skipping one might not necessarily made the ad work right.  Options are:
	<ul>
		<li>ad_client - This would be the pub_random# id that would represent your adsense account number</li>
		<li>ad_width - width of the ad</li>
		<li>ad_height - height of the ad</li>
		<li>ad_format - &quot;format&quot; of the ad <em>e.g. 120x600_as</em></li>
		<li>ad_channel - channels are an advanced feature of adsense.  Put it here if you use it.</li>
		<li>ad_type - possible options are text, image or text_image.</li>
		<li>color_border - the color of the border. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_link - the color of the linktext. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_url - the color of the URL. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_text - the color of the text. Use HEX color or type the color name (Ex. Red)</li>
	</ul>
	</p>';
$lang['admin']['help_function_sitename'] = '        <h3>What does this do?</h3>
        <p>Shows the name of the site.  This is defined during install and can be modified in the Global Settings section of the admin panel.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{sitename}</code></p>
        <h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_search'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=Search&quot;>Search module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Search&#039;}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=Search&quot;>Search module help</a>.';
$lang['admin']['help_function_root_url'] = '	<h3>What does this do?</h3>
	<p>Prints the root url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{root_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>What does this do?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>How do I use it?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=&#039;repeat this &#039; times=&#039;3&#039;}</code>
  <h3>What parameters does it take?</h3>
  <ul>
  <li>string=&#039;text&#039; - The string to repeat</li>
  <li>times=&#039;num&#039; - The number of times to repeat it.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>What does this do?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{recently_updated}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
	 <li><p><em>(optional)</em> number=&#039;10&#039; - Number of updated pages to show.</p><p>Example: <pre>{recently_updated number=&#039;15&#039;}</pre></p></li>
 	 <li><p><em>(optional)</em> leadin=&#039;Last changed&#039; - Text to show left of the modified date.</p><p>Example: <pre>{recently_updated leadin=&#039;Last Changed&#039;}</pre></p></li>
 	 <li><p><em>(optional)</em> showtitle=&#039;true&#039; - Shows the titleattribute if it exists as well (true|false).</p><p>Example: <pre>{recently_updated showtitle=&#039;true&#039;}</pre></p></li>											 	
	 <li><p><em>(optional)</em> css_class=&#039;some_name&#039; - Warp a div tag with this class around the list.</p><p>Example: <pre>{recently_updated css_class=&#039;some_name&#039;}</pre></p></li>											 	
	 <li><p><em>(optional)</em> dateformat=&#039;d.m.y h:m&#039; - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: <pre>{recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</pre></p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Last Change: &#039; css_class=&#039;my_changes&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=Printing&quot;>Printing module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Printing&#039;}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=Printing&quot;>Printing module help</a>.';
$lang['admin']['help_function_oldprint'] = '	<h3>What does this do?</h3>
	<p>Creates a link to only the content of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{oldprint}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em> goback - Set to &quot;true&quot; to show a &quot;Go Back&quot; link on the page to print.</li>
                <li><em>(optional)</em> popup - Set to &quot;true&quot; and page for printing will by opened in new window.</li>
                <li><em>(optional)</em> script - Set to &quot;true&quot; and in print page will by used java script for run print of page.</li>
                <li><em>(optional)</em> showbutton - Set to &quot;true&quot; and will show a printer graphic instead of a text link.</li>
                <li><em>(optional)</em> class - class for the link, defaults to &quot;noprint&quot;.</li>
                <li><em>(optional)</em> text - Text to use instead of &quot;Print This Page&quot; for the print link.
                <li><em>(optional)</em> title - Text to show for title attribute. If blank show text parameter.</li>
                <li><em>(optional)</em> more - Place additional options inside the <a> link.</li>
                <li><em>(optional)</em> src_img - Show this image file. Default images/cms/printbutton.gif.</li>
                <li><em>(optional)</em> class_img - Class of <img> tag if showbutton is sets.</li>

                    <p>Example:</p>
                     <pre>{oldprint text=&quot;Printable Page&quot;}</pre>      
                     </li>
        </ul>';
$lang['admin']['login_info_title'] = 'Informacje';
$lang['admin']['login_info'] = 'Od tej chwili weź pod uwagę następujące parametry';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Ciasteczka (cookies) włączone w przeglądarce</li> 
  <li>Javascript włączony w przeglądarce</li> 
  <li>Wyskakujące okienka (popup) aktywne dla następującego adresu:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=News&quot;>News module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;News&#039;}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=News&quot;>News module help</a>.';
$lang['admin']['help_function_modified_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was last modified.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{modified_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '	<h3>What does this do?</h3>
	<p>Displays the metadata for this page. Both global metdata from the global settings page and metadata for each page will be shown.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{metadata}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>showbase (true/false) - If set to false, the base tag will not be sent to the browser.  Defaults to true if use_hierarchy is set to true in config.php.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '	<h3>What does this do?</h3>
	<p>Prints the menu text of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{menu_text}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_menu'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=MenuManager&quot;>Menu Manager module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;MenuManager&#039;}</code> you can now just use <code>{menu}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{menu}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=MenuManager&quot;>Menu Manager module help</a>.';
$lang['admin']['help_function_last_modified_by'] = '        <h3>What does this do?</h3>
        <p>Prints last person that edited this page.  If no format is given, it will default to a ID number of user .</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{last_modified_by format=&quot;fullname&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - id, username, fullname</li>
        </ul>';
$lang['admin']['help_function_iamge'] = '  <h3>What does this do?</h3>
  <p>Creates an image tag to an image stored within your images directory</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page like: <code>{image src=&quot;something.jpg&quot;}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
     <li><em>(required)</em>  <tt>src</tt> - Image filename within your images directory.</li>
     <li><em>(optional)</em>  <tt>width</tt> - Width of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>height</tt> - Height of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>alt</tt> - Alt text for the image -- needed for xhtml compliance. Defaults to filename.</li>
     <li><em>(optional)</em>  <tt>class</tt> - CSS class for the image.</li>
     <li><em>(optional)</em>  <tt>title</tt> - Mouse over text for the image. Defaults to Alt text.</li>
     <li><em>(optional)</em>  <tt>addtext</tt> - Additional text to put into the tag</li>
  </ul>';
$lang['admin']['help_function_imagegallery'] = '	<h3>What does this do?</h3>
	<p>Creates a gallery out of a folder of images (.gif, .jpg or .png). 
	You can click on a thumbnail image to view the bigger image. It can use 
	captions which are based on the image name, minus the file extension. It 
	follows web standards and uses CSS for formatting. There are classes 
	for various elements and for the surrounding &#039;div&#039;. Check out the CSS below for
	more information.</p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template or page like: </p>
	<code>{ImageGallery picFolder=&quot;uploads/images/yourfolder/&quot;}</code>
	<p>Where picFolder is the folder where your images are stored.</p>
	
    <h3>What parameters does it take?</h3>
    <p>It can take quite a few parameters, but the example above is probably 
good for most people :) </p>
        <ol>
		<li><strong>picFolder e.g. picFolder=&quot;uploads/images/yourfolder/&quot;</strong><br/>
		Is the path to the gallery (yourfolder) ending in&#039;/&#039;. So you can have 
		lots of directories and lots of galleries.</li>

		<li><strong>type e.g. type=&quot;click&quot; or type=&quot;popup&quot;</strong><br/>
		For the &quot;popup&quot; function to work you need to include the popup javascript into
		the head of your template e.g. &quot;<head></head>&quot;. The javascript is at
		the bottom of this page! <em>The default is &#039;click&#039;.</em></li>

		<li><strong>divID e.g. divID =&quot;imagegallery&quot;</strong><br/>
		Sets the wrapping &#039;div id&#039; around your gallery so that you can have 
		different CSS for each gallery. <em>The default is &#039;imagegallery&#039;.</em></li>

		<li><strong>sortBy e.g. sortBy = &quot;name&quot; or sortBy = &quot;date&quot;</strong><br/>
		Sort images by &#039;name&#039; OR &#039;date&#039;. <em>No default.</em></li>

		<li><strong>sortByOrder e.g. sortByOrder = &quot;asc&quot; or sortByOrder = &quot;desc&quot;</strong><br/> 
		 <em>No default.</em>.</li>

		<li>This sets caption above the big (clicked on) image<br/>
		<strong>bigPicCaption = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicCaption = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicCaption = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicCaption = &quot;none&quot; </strong>(No caption)<br/>
		<em>The Default is &quot;name&quot;. </em></li>

		<li>This sets the caption below the small thumbnail<br/>
		<strong>thumbPicCaption = &quot;name&quot;</strong> (filename excluding extension)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;file&quot;</strong> (filename including extension)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;none&quot; </strong>(No caption)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li>Sets the &#039;alt&#039; tag for the big image - compulsory.<br/>
		<strong>bigPicAltTag = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicAltTag = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicAltTag = &quot;number&quot; </strong>(a number sequence)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li> Sets the &#039;title&#039; tag for the big image. <br/>
		<strong>bigPicTitleTag = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;none&quot; </strong>(No title)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li><strong>thumbPicAltTag</strong><br/>
		<em>Is the same as bigPicAltTag, but for the small thumbnail images.<em></li>

		<li><strong>thumbPicTitleTag *</strong><br/>
		<em>Is the same as bigPicTitleTag but for the small thumbnail images.<br/>
		<strong>*Except that after the options you have &#039;... click for a bigger image&#039; 
		or if you do not set this option then you get the default of 
		&#039;Click for a bigger image...&#039;</em></strong></li>
        </ol>
  <p>A More Complex Example</p>
        <p>&#039;div id&#039; is &#039;cdcovers&#039;, no Caption on big images, thumbs have default caption. 
        &#039;alt&#039; tags for the big image are set to the name of the image file without the extension 
        and the big image &#039;title&#039; tag is set to the same but with an extension. 
        The thumbs have the default &#039;alt&#039; and &#039;title&#039; tags. The default being the name 
        of the image file without the extension for &#039;alt&#039; and &#039;Click for a bigger image...&#039; for the &#039;title&#039;,
		would be:</p>
		<code>{ImageGallery picFolder=&quot;uploads/images/cdcovers/&quot; divID=&quot;cdcovers&quot; bigPicCaption=&quot;none&quot;  bigPicAltTag=&quot;name&quot; bigPicTitleTag=&quot;file&quot;}</code>
        <br/>
		<p>It&#039;s got lots of options but I wanted to keep it very flexible and you don&#039;t have to set them, the defaults are sensible.</p>
		
  <br/>
	<h4>Example CSS</h4>
<pre>
	/* Image Gallery - Small Thumbnail Images */
	.thumb {
		margin: 1em 1em 1.6em 0; /* Space between images */
		padding: 0;
		float: left;
		text-decoration: none;
		line-height: normal;
		text-align: left;
	}

	.thumb img, .thumb a img, .thumb a:link img{ /* Set link formatting*/
		width: 100px; /* Image width*/
		height: 100px; /* Image height*/
		display: inline;
		padding: 12px; /* Image padding to form photo frame */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /*Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc;
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none;
	}

	.thumb a:visited img {
		background-color: #eee; /*Background of photo on hover - sort of a light grey */
	}

	.thumb a:hover img {
		background-color: #dae6e4; /*Background of photo on hover - sort of light blue/green */
	}

	.thumbPicCaption {
		text-align: center;
		font-size: smaller;
		margin: 0 1px 0 0;
		padding: 0;
		width: 124px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	/* Image Gallery - Big Images */
	.bigPic {
		margin: 10px 0 5px 0;
		padding: 0;
		line-height: normal;
	}

	.bigPicCaption { /*Big Image Name - above image above .bigpicImageFileName (Without extension) */
		text-align: center;
		font-weight: bold;
		font-variant: small-caps;
		font-weight: bold;
		margin: 0 1px 0 0;
		padding: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	.bigPic img{ /* Big Image settings */
		width: 350px; /* Width of Big Image */
			height: auto;
		display: inline;
		padding: 18px; /* Image padding to form photo frame. */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /* Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc; 
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none; 
		text-align: left;
	}

	.bigPicNav { /* Big Image information: &#039;Image 1 of 4&#039; and gallery navigation */
		margin: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		padding: 0;
		color: #000;
		font-size: smaller;
		line-height: normal;
		text-align: center;
		/* display: none;  if you do not want to display this text. Why? You Lose Navigation! */
	}

</pre>
<br/>

	<h4>The popup javascript is now included in plugin code and will be generated automatically if you still have javascript in your template please remove it.</h4>';
$lang['admin']['help_function_html_blob'] = '	<h3>What does this do?</h3>
	<p>See the help for global_content for a description.</p>';
$lang['admin']['help_function_googlepr'] = '	<h3>What does this do?</h3>
	<p>Display&#039;s a number that represents your google pagerank.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{googlepr}</code><br>
	<br>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - The website to display the pagerank for.</li>
	</ul>
	</p>';
$lang['admin']['help_function_google_search'] = '	<h3>What does this do?</h3>
	<p>Search&#039;s your website using Google&#039;s search engine.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{google_search}</code><br>
	<br>
	Note: Google needs to have your website indexed for this to work. You can submit your website to google <a href=&quot;http://www.google.com/addurl.html&quot;>here</a>.</p>
	<h3>What if I want to change the look of the textbox or button?</h3>
	<p>The look of the textbox and button can be changed via css. The textbox is given an id of textSearch and the button is given an id of buttonSearch.</p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - This tells google the website domain to search. This script tries to determine this automatically.</li>
		<li><em>(optional)</em> buttonText - The text you want to display on the search button. The default is &quot;Search Site&quot;.</li>
	</ul>
	</p>';
$lang['admin']['help_function_global_content'] = '	<h3>What does this do?</h3>
	<p>Inserts a global content block into your template or page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{global_content name=&#039;myblob&#039;}</code>, where name is the name given to the block when it was created.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>name - The name of the global content block to display.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>What does this do?</h3>
	<p>Dumps all the known smarty variables into your page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{get_template_vars}</code></p>
	<h3>What parameters does it take?</h3>
											  <p>None at this time</p>';
$lang['admin']['help_function_embed'] = '	<h3>What does this do?</h3>
	<p>Enable inclusion (embeding) of any other application into the CMS. The most usual use could be a forum. 
	This implementation is using IFRAMES so older browsers can have problems. Sorry bu this is the only known way 
	that works without modifing the embeded application.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{embed url=http://www.google.com/}</code><br></p>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <h3>What parameters does it take?</h3>
        <ul>
               <li><em>(required)</em>url - the url to be included 
               <li><em>(optional)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>

        </ul>
       <p>You must include in your page content {embed url=..} and in the &quot;Metadata:&quot; section (advanced tab) you must put {embed header=true}. Also be sure to put this in between the &quot;head&quot; tags of your template: {metadata}</p>';
$lang['admin']['help_function_edit'] = '	<h3>What does this do?</h3>
	<p>Creates a link to edit the page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{edit}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>showbutton - Set to &quot;true&quot; and will show a edit graphic instead of a text link.</li>
        </ul>';
$lang['admin']['help_function_description'] = '	<h3>What does this do?</h3>
	<p>Prints the description (title attribute) of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{description}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was created.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{created_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>What does this do?</h3>
	<p>This is where the content for your page will be displayed.  It&#039;s inserted into the template and changed based on the current page being displayed.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>block - Allows you to have more than one content block per page.  When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block=&quot;Second Content Block&quot;}</pre>
<p>Now, when you edit a page there will a textarea called &quot;Second Content Block&quot;.</li>
		<li><em>(optional)</em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block.  If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block.  If false, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>default - Allows you to specify default content content for this content blocks (additional content blocks only).</li>
		<li><em>(optional)</em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
    <p>This smarty plugin is deprecated, and may not be included with further versions of CMS Made Simple.  We recommend you use the formbuilder module and it&#039;s included contact form.</p>
	<h3>What does this do?</h3>
	<p>Display&#039;s a contact form. This can be used to allow others to send an email message to the address specified.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{contact_form email=&quot;yourname@yourdomain.com&quot;}</code><br>
	<br>
	If you would like to send an email to multiple adresses, seperate each address with a comma.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>email - The email address that the message will be sent to.</li>
		<li><em>(optional)</em>style - true/false, use the predefined styles. Default is true.</li>
		<li><em>(optional)</em>subject_get_var - string, allows you to specify which _GET var to use as the default value for subject.
               <p>Example:</p>
               <pre>{contact_form email=&quot;yourname@yourdomain.com&quot; subject_get_var=&quot;subject&quot;}</pre>
             <p>Then call the page with the form on it like this: /index.php?page=contact&amp;subject=test+subject</p>
             <p>And the following will appear in the &quot;Subject&quot; box: &quot;test subject&quot;
           </li>
		<li><em>(optional)</em>captcha - true/false, use Captcha response test (Captcha module must be installed). Default is false.</li>
	</ul>
	</p>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn&#039;t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn&#039;t display any extra besides the version number.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_version}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['about_function_cms_selflink'] = '		<p>Author: Ted Kulp <tedkulp@users.sf.net></p>
		<p>Version: 1.1</p>
		<p>Modified: Martin B. Vestergaard <mbv@nospam.dk></p>
		<p>Version: 1.41</p>
		<p>Modified: Russ Baldwin</p>
		<p>Version: 1.42</p>
		<p>Modified: Marcus Bointon <coolbru@users.sf.net></p>
		<p>Version: 1.43</p>
		<p>Modified: Tatu Wikman <tsw@backspace.fi></p>
		<p>Version: 1.44</p>
		<p>Modified: Hans Mogren <http://hans.bymarken.net/></p>
		<p>Version: 1.45</p>

		<p>
		Change History:<br/>
		1.46 - Fixes a problem with too many queries when using the dir=start option.<br/>
		1.45 - Added a new option for &quot;dir&quot;, &quot;up&quot;, for links to the parent page e.g. dir=&quot;up&quot; (Hans Mogren).<br />
		1.44 - Added new parameters &quot;ext&quot; and &quot;ext_info&quot; to allow external links with class=&quot;external&quot; and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters &quot;image&quot; and &quot;imageonly&quot; to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter &quot;anchorlink&quot; and a new option for &quot;dir&quot; namely, &quot;anchor&quot;, for internal page links. e.g. dir=&quot;anchor&quot; anchorlink=&quot;internal_link&quot;. (Russ)<br />
		1.41 - added new parameter &quot;href&quot; (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option &quot;more&quot;<br />
		1.2 - by Martin B. Vestergaard
		<ul>
		<li>changed default text to Page Name (was Page Alias)</li>
		<li>added option dir=next/prev to display next or previous item in the hirachy - thanks to 100rk</li>
		<li>added option class to add a class= statement to the a-tag.</li>
		<li>added option menu to display menu-text in sted of Page Name</li>
		<li>added option lang to display link-labels in different languages</li>
		</ul>
		1.1 - Changed to new content system<br />
		1.0 - Initial release
		</p>';
$lang['admin']['help_function_cms_selflink'] = '		<h3>What does this do?</h3>
		<p>Creates a link to another CMSMS content page inside your template or content. Can also be used for external links with the ext parameter.</p>
		<h3>How do I use it?</h3>
		<p>Just insert the tag into your template/page like: <code>{cms_selflink page=&quot;1&quot;}</code> or  <code>{cms_selflink page=&quot;alias&quot;}</code></p>
		<h3>What parameters does it take?</h3>
		<p>
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - New option for an internal page link. If this is used then <tt>anchorlink</tt> should be set to your link. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - New paramater for an internal page link. If this is used then <tt>dir =&quot;anchor&quot;</tt> should also be set. No need to add the #, because it is added automatically.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Specify additional parameters to the URL.  <strong>Do not use this in conjunction with the <em>anchorlink</em> parameter</em></strong>
		<li><em>(optional)</em> <tt>tabindex =&quot;a value&quot;</tt> - Set a tabindex for the link.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links to the default start page or the next or previous page, or the parent page (up). If this is used <tt>page</tt> should not be set.</li> <!-- mbv - 21-06-2005 -->
		<B>Note!</B> Only one of the above may be used in the same cms_selflink statement!!
		<li><em>(optional)</em> <tt>text</tt> - Text to show for the link.  If not given, the Page Name is used instead.</li>
		<li><em>(optional)</em> <tt>menu 1/0</tt> - If 1 the Menu Text is used for the link text instead of the Page Name</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>target</tt> - Optional target for the a link to point to.  Useful for frame and javascript situations.</li>
		<li><em>(optional)</em> <tt>class</tt> - Class for the <a> link. Useful for styling the link.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>lang</tt> - Display link-labels  (&quot;Next Page&quot;/&quot;Previous Page&quot;) in different languages (0 for no label.) Danish (dk), English (en) or French (fr), for now.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>id</tt> - Optional css_id for the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - place additional options inside the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Label to use in with the link if applicable.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Side of link to place the label (defaults to &quot;left&quot;).</li>
		<li><em>(optional)</em> <tt>title</tt> - Text to use in the title attribute.  If none is given, then the title of the page will be used for the title.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Make a relational link for accessible navigation.  Only works if the dir parameter is set and should only go in the head section of a template.</li>
		<li><em>(optional)</em> <tt>href</tt> - If href is used only the href value is generated (no other parameters possible). <strong>Example:</strong> <a href=&quot;{cms_selflink href=&quot;alias&quot;}&quot;><img src=&quot;&quot;></a></li>
		<li><em>(optional)</em> <tt>image</tt> - A url of an image to use in the link. <strong>Example:</strong> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot;}</li>
		<li><em>(optional)</em> <tt>alt</tt> - Alternative text to be used with image (alt=&quot;&quot; will be used if no alt parameter is given).</li>
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <B>Example:</B> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot; imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class=&quot;external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with &quot;ext&quot; defaults to (external link)</li>
		</ul>
		</p>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages.  If a module is created to be used as a tag plugin (check it&#039;s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It&#039;s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module=&quot;somemodulename&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>
	</p>';
$lang['admin']['about_function_breadcrumbs'] = '<p>Author: Marcus Deglos <<a href=&quot;mailto:md@zioncore.com&quot;>md@zioncore.com</a>></p>
<p>Version: 1.7</p>
<p>
Change History:<br/>
1.1 - Modified to use new content rewrite (wishy)<br />
1.2 - Added parameters: delimiter, initial, and root (arl)<br />
1.3 - Added parameter: classid (tdh / perl4ever)<br />
1.4 - Added parameter currentclassid and fixed some bugs (arl)<br />
1.5 - Modified to use new hierarchy manager<br />
1.6 - Modified to skip any parents that are marked to be &quot;not shown in menu&quot; except for root<br />
1.7 - Added root_url parameter (elijahlofgren)<br />
</p>';
$lang['admin']['help_function_breadcrumbs'] = '<h3>What does this do?</h3>
<p>Prints a breadcrumb trail .</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{breadcrumbs}</code></p>
<h3>What parameters does it take?</h3>
<p>
<ul>
<li><em>(optional)</em> <tt>delimiter</tt> - Text to seperate entries in the list (default &quot;>>&quot;).</li>
<li><em>(optional)</em> <tt>initial</tt> - 1/0 If set to 1 start the breadcrumbs with a delimiter (default 0).</li>
<li><em>(optional)</em> <tt>root</tt> - Page alias of a page you want to always appear as the first page in
    the list. Can be used to make a page (e.g. the front page) appear to be the root of everything even though it is not.</li>
<li><em>(optional)</em> <tt>root_url</tt> - Override the URL of the root page. Useful for making link be to &#039;/&#039; instead of &#039;/home/&#039;. This requires that the root page be set as the default page.</li>
<li><em>(optional)</em> <tt>classid</tt> - The CSS class for the non current page names, i.e. the first n-1 pages in the list. If the name is a link it is added to the <a href> tags, otherwise it is added to the <span> tags.</li>
<li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the <span> tag surrounding the current page name.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like &quot;You are here&quot;.</li>
</ul>
</p>';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include &#039;anchorlink&#039;.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>What does this do?</h3>
	<p>Makes a proper anchor link.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{anchor anchor=&#039;here&#039; text=&#039;Scroll Down&#039;}</code></p>
	<h3>What parameters does it take?</h3>
	<p>
	<ul>
	<li><tt>anchor</tt> - Where we are linking to.  The part after the #.</li>
	<li><tt>text</tt> - The text to display in the link.</li>
	<li><tt>class</tt> - The class for the link, if any</li>
	<li><tt>title</tt> - The title to display for the link, if any.</li>
	<li><tt>tabindex</tt> - The numeric tabindex for the link, if any.</li>
	<li><tt>accesskey</tt> - The accesskey for the link, if any.</li>
	<li><em>(optional)</em> <tt>onlyhref</tt> - Only display the href and not the entire link. No other options will work</li>
	</ul>
	</p>';
$lang['admin']['help_function_site_mapper'] = '<h3>What does this do?</h3>
  <p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=MenuManager&quot;>Menu Manager module</a> to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=MenuManager&quot;>Menu Manager module help</a>.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>What does this do?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet).</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url urle=&#039;www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>What does this do?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['of'] = 'z';
$lang['admin']['first'] = 'Pierwszy';
$lang['admin']['last'] = 'Ostatni';
$lang['admin']['adminspecialgroup'] = 'UWAGA: Członkowie tej grupy automatycznie mają włączone wszystkie uprawnienia';
$lang['admin']['disablesafemodewarning'] = 'Wyłącz ostrzeżenie o trybie bezpiecznym (safe mode warning)';
$lang['admin']['allowparamcheckwarnings'] = 'Pozw&oacute;l, żeby sprawdzenie parametr&oacute;w serwera tworzyło ostrzeżenia';
$lang['admin']['date_format_string'] = 'Format daty (string)';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> sformatowany łańcuch znak&oacute;w formatu daty';
$lang['admin']['last_modified_at'] = 'Ostatnio zmodyfikowano o';
$lang['admin']['last_modified_by'] = 'Ostatnio zmodyfikowano przez';
$lang['admin']['read'] = 'Czytanie (read)';
$lang['admin']['write'] = 'Zapisywanie (write)';
$lang['admin']['execute'] = 'Wykonywanie (execute)';
$lang['admin']['group'] = 'Grupa';
$lang['admin']['other'] = 'Inni';
$lang['admin']['event_desc_moduleupgraded'] = 'Wyślij po upgradzie modułu';
$lang['admin']['event_desc_moduleinstalled'] = 'Wyślij po instalacji modułu';
$lang['admin']['event_desc_moduleuninstalled'] = 'Wyślij po deinstalacji modułu';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Wyślij po aktualizacji znacznika własnego ';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Wyślij przed aktualizacją znacznika własnego';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Wyślij przed usunięciem znacznika własnego';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Wyślij po usunięciu znacznika własnego';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Wyślij po wstawieniu znacznika własnego';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Wyślij przed wstawieniem znacznika własnego';
$lang['admin']['global_umask'] = 'Maska tworzenia pliku (umask)';
$lang['admin']['errorcantcreatefile'] = 'Nie można utworzyć pliku (sprawdź uprawnienia)';
$lang['admin']['errormoduleversionincompatible'] = 'Moduł nie jest kompatybilny z tą wersją CMS';
$lang['admin']['errormodulenotloaded'] = 'Błąd wewnętrzny, moduł nie został zainicjalizowany';
$lang['admin']['errormodulenotfound'] = 'Błąd wewnętrzny, nie można znaleźć instancji modułu';
$lang['admin']['errorinstallfailed'] = 'Błąd podczas instalacji modułu';
$lang['admin']['errormodulewontload'] = 'Problem przy inicjalizacji dostępnego modułu';
$lang['admin']['frontendlang'] = 'Domyślny język dla interfejsu użytkownika';
$lang['admin']['info_edituser_password'] = 'Zmień to pole aby zmienić hasło użytkownika';
$lang['admin']['info_edituser_passwordagain'] = 'Zmień to pole aby zmienić hasło użytkownika';
$lang['admin']['originator'] = 'Originator';
$lang['admin']['module_name'] = 'Nazwa modułu';
$lang['admin']['event_name'] = 'Nazwa zdarzenia';
$lang['admin']['event_description'] = 'Opis zdarzenia';
$lang['admin']['error_delete_default_parent'] = 'Nie możesz usunąć el. nadrzędnego domyślnej strony.';
$lang['admin']['jsdisabled'] = 'Przykro mi, ta funkcja wymaga włączenia obsługi Javascript.';
$lang['admin']['order'] = 'Numer porządkowy';
$lang['admin']['reorderpages'] = 'Zmień kolejność stron';
$lang['admin']['reorder'] = 'Uporządkuj';
$lang['admin']['page_reordered'] = 'Strona została pomyślnie uporządkowana.';
$lang['admin']['pages_reordered'] = 'Strony zostały pomyślnie uporządkowane.';
$lang['admin']['sibling_duplicate_order'] = 'Sąsiadujące strony nie mogą posiadać tego samego numeru porządkowego. Strony nie zostały uporządkowane.';
$lang['admin']['no_orders_changed'] = 'Wybrano uporządkowanie stron, ale nie dokonano zmian numeru porządkowego żadnej z nich. Strony nie zostały uporządkowane.';
$lang['admin']['order_too_small'] = 'Numer porządkowy strony nie może wynosić zero. Strony nie zostały uporządkowane.';
$lang['admin']['order_too_large'] = 'Numer porządkowy strony nie może być większy niż ilość stron na tym poziomie. Strony nie zostały uporządkowane.';
$lang['admin']['user_tag'] = 'Znacznik użytkownika';
$lang['admin']['add'] = 'Dodaj';
$lang['admin']['CSS'] = 'Styl CSS';
$lang['admin']['about'] = 'Opis';
$lang['admin']['action'] = 'Akcja';
$lang['admin']['actionstatus'] = 'Akcja/Status';
$lang['admin']['active'] = 'Aktywny/a';
$lang['admin']['addcontent'] = 'Dodaj nową treść';
$lang['admin']['cantremove'] = 'Nie można usunąć';
$lang['admin']['changepermissions'] = 'Zmiana uprawnień';
$lang['admin']['changepermissionsconfirm'] = 'UWAGA !\n\nTa operacja wymaga aby wszystkie pliki tworzące moduł miały uprawnienia do zapisu przez serwer www.\nCzy na pewno chcesz kontynuować?';
$lang['admin']['contentadded'] = 'Zawartość została pomyślnie dodana do bazy danych.';
$lang['admin']['contentupdated'] = 'Zawartość została pomyślnie zaktualizowana.';
$lang['admin']['contentdeleted'] = 'Zawartość została pomyślnie usunięta z bazy danych.';
$lang['admin']['success'] = 'Powodzenie';
$lang['admin']['addcss'] = 'Dodaj nowy arkusz CSS';
$lang['admin']['addgroup'] = 'Dodaj nową grupę';
$lang['admin']['additionaleditors'] = 'Dodatkowi edytorzy';
$lang['admin']['addtemplate'] = 'Dodaj nowy szablon';
$lang['admin']['adduser'] = 'Dodaj nowego użytkownika';
$lang['admin']['addusertag'] = 'Dodaj własny znacznik';
$lang['admin']['adminaccess'] = 'Dostęp do logowania na administratora';
$lang['admin']['adminlog'] = 'Dziennik administratora';
$lang['admin']['adminlogcleared'] = 'Dziennik administratora został wyczyszczony';
$lang['admin']['adminlogempty'] = 'Dziennik administratora jest pusty';
$lang['admin']['adminsystemtitle'] = 'System administracji CMS';
$lang['admin']['adminpaneltitle'] = 'Panel administracyjny CMS Made Simple';
$lang['admin']['advanced'] = 'Zaawansowane';
$lang['admin']['aliasalreadyused'] = 'Alias jest już używany na innej stronie';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Alias musi być alfanumeryczny';
$lang['admin']['aliasnotaninteger'] = 'Alias nie może być liczbą';
$lang['admin']['allpagesmodified'] = 'Wszystkie strony zostały zmodyfikowane!';
$lang['admin']['assignments'] = 'Przypisz użytkownik&oacute;w';
$lang['admin']['associationexists'] = 'To przyporządkowanie już istnieje';
$lang['admin']['autoinstallupgrade'] = 'Automatyczna instalacja lub aktualizacja';
$lang['admin']['back'] = 'Wr&oacute;ć do menu';
$lang['admin']['backtoplugins'] = 'Wr&oacute;ć do listy wtyczek';
$lang['admin']['cancel'] = 'Anuluj';
$lang['admin']['cantchmodfiles'] = 'Nie udało się zmienić praw dostępu dla niekt&oacute;rych plik&oacute;w';
$lang['admin']['cantremovefiles'] = 'Problem przy usuwaniu plik&oacute;w (uprawnienia?)';
$lang['admin']['confirmcancel'] = 'Czy na pewno odrzucić zmiany? Kliknij OK aby odrzucić wszystkie zmiany. Kliknij Anuluj aby kontynuować edycję.';
$lang['admin']['canceldescription'] = 'Odrzuć zmiany';
$lang['admin']['clearadminlog'] = 'Wyczyść dziennik administratora';
$lang['admin']['code'] = 'Kod';
$lang['admin']['confirmdefault'] = 'Czy na pewno chcesz ustawić tę stronę jako domyślną?';
$lang['admin']['confirmdeletedir'] = 'Czy na pewno chcesz usunąć ten katalog i całą jego zawartość?';
$lang['admin']['content'] = 'Treść';
$lang['admin']['contentmanagement'] = 'Zarządzanie treścią';
$lang['admin']['contenttype'] = 'Typ zawartości';
$lang['admin']['copy'] = 'Kopiuj';
$lang['admin']['copytemplate'] = 'Kopiuj szablon';
$lang['admin']['create'] = 'Utw&oacute;rz';
$lang['admin']['createnewfolder'] = 'Utw&oacute;rz nowy folder';
$lang['admin']['cssalreadyused'] = 'Nazwa tego CSS jest już w użyciu';
$lang['admin']['cssmanagement'] = 'Zarządzanie CSS';
$lang['admin']['currentassociations'] = 'Bieżące przyporządkowania';
$lang['admin']['currentdirectory'] = 'Bieżący katalog';
$lang['admin']['currentgroups'] = 'Bieżące grupy';
$lang['admin']['currentpages'] = 'Bieżące strony';
$lang['admin']['currenttemplates'] = 'Bieżące szablony';
$lang['admin']['currentusers'] = 'Bieżący użytkownicy';
$lang['admin']['custom404'] = 'Własny komunikat błędu 404';
$lang['admin']['database'] = 'Baza danych';
$lang['admin']['databaseprefix'] = 'Prefiks bazy danych';
$lang['admin']['databasetype'] = 'Typ bazy danych';
$lang['admin']['date'] = 'Data';
$lang['admin']['default'] = 'Domyślny/a';
$lang['admin']['delete'] = 'Usuń';
$lang['admin']['deleteconfirm'] = 'Na pewno chcesz usunąć?';
$lang['admin']['deleteassociationconfirm'] = 'Czy na pewno chcesz usunąć połączenie z - %s - ?';
$lang['admin']['deletecss'] = 'Usuń CSS';
$lang['admin']['dependencies'] = 'Zależności';
$lang['admin']['description'] = 'Opis';
$lang['admin']['directoryexists'] = 'Taki katalog już istnieje';
$lang['admin']['down'] = 'W d&oacute;ł';
$lang['admin']['edit'] = 'Edytuj';
$lang['admin']['editconfiguration'] = 'Edycja konfiguracji';
$lang['admin']['editcontent'] = 'Edycja treści';
$lang['admin']['editcss'] = 'Edycja arkusza styli';
$lang['admin']['editcsssuccess'] = 'Arkusz styli zaktualizowano';
$lang['admin']['editgroup'] = 'Edycja grupy';
$lang['admin']['editpage'] = 'Edycja strony';
$lang['admin']['edittemplate'] = 'Edycja szablonu';
$lang['admin']['edittemplatesuccess'] = 'Szablon zaktualizowano';
$lang['admin']['edituser'] = 'Edycja użytkownika';
$lang['admin']['editusertag'] = 'Edycja własnych znacznik&oacute;w';
$lang['admin']['usertagadded'] = 'Znacznik własny został pomyślnie dodany.';
$lang['admin']['usertagupdated'] = 'Znacznik własny został pomyślnie zaktualizowany.';
$lang['admin']['usertagdeleted'] = 'Znacznik własny został pomyślnie usunięty.';
$lang['admin']['email'] = 'Adres e-mail';
$lang['admin']['errorattempteddowngrade'] = 'Instalacja tego modułu spowoduje użycie niższej wersji. Operacja zaniechana.';
$lang['admin']['errorchildcontent'] = 'Nadal istnieją dokumenty podrzędne. Usuń je najpierw.';
$lang['admin']['errorcopyingtemplate'] = 'Błąd przy kopiowaniu szablonu';
$lang['admin']['errorcouldnotparsexml'] = 'Błąd podczas parsowania pliku XML';
$lang['admin']['errorcreatingassociation'] = 'Błąd przy tworzeniu przyporządkowania';
$lang['admin']['errorcssinuse'] = 'Ten arkusz jest używany przez jakiś szablon lub stronę. Usuń najpierw to przyporządkowanie.';
$lang['admin']['errordefaultpage'] = 'Nie można usunąć bieżącej strony domyślnej. Ustaw najpierw jakąś inną.';
$lang['admin']['errordeletingassociation'] = 'Błąd przy usuwaniu przyporządkowania';
$lang['admin']['errordeletingcss'] = 'Błąd przy usuwaniu CSS';
$lang['admin']['errordeletingdirectory'] = 'Nie można usunąć katalogu. Może to być problem z uprawnieniami';
$lang['admin']['errordeletingfile'] = 'Nie można usunąć pliku. Może to być problem z uprawnieniami.';
$lang['admin']['errordirectorynotwritable'] = 'Brak uprawnień do zapisu w katalogu';
$lang['admin']['errordtdmismatch'] = 'Brak informacji o wersji DTD lub jest niekompatybilna z plikiem XML';
$lang['admin']['errorgettingcssname'] = 'Bład przy odczycie nazwy arkusza styli';
$lang['admin']['errorgettingtemplatename'] = 'Błąd przy odczycie nazwy szablonu';
$lang['admin']['errorincompletexml'] = 'Plik XML jest niekompletny lub nieprawidłowy';
$lang['admin']['uploadxmlfile'] = 'Instaluj moduł poprzez plik XML';
$lang['admin']['cachenotwritable'] = 'Folder cache nie jest zapisywalny. Nie działa czyszczenie cache. nadaj folderowi tmp/cache pełne uprawnienia odczyt/zapis/wykonanie (chmod 777)';
$lang['admin']['modulesnotwritable'] = 'Folder modules nie jest zapisywalny, jeśli chcesz instalować moduły poprzez uploading plik&oacute;w XML powinieneś nadać mu pełne uprawnienia odczyt/zapis/wykonanie (chmod 777)';
$lang['admin']['noxmlfileuploaded'] = 'Nie załadowano plik&oacute;w. Aby zainstalować moduł via XML musisz wybrać i załadować plik modułu .xml z twojego komputera.';
$lang['admin']['errorinsertingcss'] = 'Błąd przy wstawianiu arkusza styli';
$lang['admin']['errorinsertinggroup'] = 'Błąd przy wstawianiu grupy';
$lang['admin']['errorinsertingtag'] = 'Błąd przy wstawianiu znacznika użytkownika';
$lang['admin']['errorinsertingtemplate'] = 'Błąd przy wstawianiu szablonu';
$lang['admin']['errorinsertinguser'] = 'Błąd przy wstawianiu użytkownika';
$lang['admin']['errornofilesexported'] = 'Błąd przy eksporcie plik&oacute;w do xml';
$lang['admin']['errorretrievingcss'] = 'Błąd podczas dostępu do arkusza styli';
$lang['admin']['errorretrievingtemplate'] = 'Błąd podczas dostępu do szablonu';
$lang['admin']['errortemplateinuse'] = 'Ten szablon jest używany przez jakąś stronę. Usuń ją najpierw.';
$lang['admin']['errorupdatingcss'] = 'Błąd przy aktualizacji arkusza styli';
$lang['admin']['errorupdatinggroup'] = 'Błąd przy aktualizacji grupy';
$lang['admin']['errorupdatingpages'] = 'Błąd podczas uaktualniania stron';
$lang['admin']['errorupdatingtemplate'] = 'Błąd przy aktualizacji szablonu';
$lang['admin']['errorupdatinguser'] = 'Błąd przy aktualizacji użytkownika';
$lang['admin']['errorupdatingusertag'] = 'Błąd przy aktualizacji znacznika użytkownika';
$lang['admin']['erroruserinuse'] = 'Ten użytkownik nadal posiada strony. Zmień własność stron na innego użytkownika zanim usuniesz tego';
$lang['admin']['eventhandlers'] = 'Zdarzenia';
$lang['admin']['editeventhandler'] = 'Edytuj obsługę zdarzeń';
$lang['admin']['eventhandlerdescription'] = 'Przypisz znaczniki własne do zdarzeń';
$lang['admin']['export'] = 'Eksport';
$lang['admin']['event'] = 'Zdarzenie';
$lang['admin']['false'] = 'Fałsz';
$lang['admin']['settrue'] = 'Ustaw na Prawda';
$lang['admin']['filecreatedirnodoubledot'] = 'Nazwa katalogu nie może zawierać \&#039;..\&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Nie można utworzyć katalogu bez nazwy';
$lang['admin']['filecreatedirnoslash'] = 'Nazwa katalogu nie może zawierać \&#039;/\&#039; ani \&#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Zarządzanie plikami';
$lang['admin']['filename'] = 'Nazwa pliku';
$lang['admin']['filenotuploaded'] = 'Nie można wgrać pliku. Może to być problem z uprawnieniami.';
$lang['admin']['filesize'] = 'Rozmiar pliku';
$lang['admin']['firstname'] = 'Imię';
$lang['admin']['groupmanagement'] = 'Zarządzanie grupą';
$lang['admin']['grouppermissions'] = 'Uprawnienia grupy';
$lang['admin']['handler'] = 'Program obsługi (znacznik własny)';
$lang['admin']['headtags'] = 'Nagł&oacute;wki';
$lang['admin']['help'] = 'Pomoc';
$lang['admin']['new_window'] = 'nowe okno';
$lang['admin']['helpwithsection'] = '%s Pomoc';
$lang['admin']['helpaddtemplate'] = '<p>Szablon jest tym, co kontroluje wygląd Twojego serwisu.</p><p>Możesz tutaj stworzyć układ serwisu i dodać CSS w sekcji Arkusze styli, aby kontrolować wygląd r&oacute;żnych element&oacute;w.</p>';
$lang['admin']['helplisttemplate'] = 'Ta strona pozwala edytować, usuwać i tworzyć szablony.</p><p>Aby utworzyć nowy szablon kliknij na przycisk <u>Dodaj nowy szablon</u>.</p><p>Jeśli chcesz ustawić wszystkie strony korzystały z tego samego szablonu, kliknij na link <u>Ustaw dla wszystkich treści</u>.</p><p>Jeśli chcesz powielić szablon, kliknij na ikonę <u>Kopiuj</userdefined> i podaj nową nazwę dla powielonego szablonu.</p>';
$lang['admin']['home'] = 'Home (start)';
$lang['admin']['homepage'] = 'Strona startowa (homepage)';
$lang['admin']['hostname'] = 'Nazwa hosta';
$lang['admin']['idnotvalid'] = 'Podany identyfikator jest nieprawidłowy';
$lang['admin']['imagemanagement'] = 'Menadżer obrazk&oacute;w';
$lang['admin']['informationmissing'] = 'Brakująca informacja';
$lang['admin']['install'] = 'Instaluj';
$lang['admin']['invalidcode'] = 'Wprowadzono błędny kod.';
$lang['admin']['illegalcharacters'] = 'Nieprawidłowe znaki w polu %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Nieparzysta liczba nawias&oacute;w';
$lang['admin']['invalidtemplate'] = 'Szablon jest nieprawidłowy';
$lang['admin']['itemid'] = 'Identyfikator';
$lang['admin']['itemname'] = 'Nazwa';
$lang['admin']['language'] = 'Język';
$lang['admin']['lastname'] = 'Nazwisko';
$lang['admin']['logout'] = 'Wyloguj';
$lang['admin']['loginprompt'] = 'Wprowadź poprawne dane uprawnionego użytkownika aby uzyskać dostęp do panelu administracyjnego';
$lang['admin']['logintitle'] = 'Logowanie do panelu administracyjnego CMS Made Simple';
$lang['admin']['menutext'] = 'Tekst w menu';
$lang['admin']['missingparams'] = 'Brakuje niekt&oacute;rych parametr&oacute;w lub są nieprawidłowe';
$lang['admin']['modifygroupassignments'] = 'Modyfikuj przypisania grupy';
$lang['admin']['moduleabout'] = 'O module %s';
$lang['admin']['modulehelp'] = 'Pomoc dla modułu %s';
$lang['admin']['msg_defaultcontent'] = 'Dodaj kod, kt&oacute;ry pojawiać się będzie jako domyślna treść każdej nowej strony';
$lang['admin']['msg_defaultmetadata'] = 'Dodaj kod, kt&oacute;ry pojawiać się będzie jako domyślna wartość sekcji meta-znacznik&oacute;w (metadata) każdej nowej strony';
$lang['admin']['wikihelp'] = 'Pomoc Społeczności';
$lang['admin']['moduleinstalled'] = 'Moduł jest już zainstalowany';
$lang['admin']['moduleinterface'] = 'Interfejs %s';
$lang['admin']['modules'] = 'Moduły';
$lang['admin']['move'] = 'Przesuń';
$lang['admin']['name'] = 'Nazwa';
$lang['admin']['needpermissionto'] = 'Musisz mieć dostęp \&#039;%s\&#039; aby wykonać tę funkcję';
$lang['admin']['needupgrade'] = 'Wymaga aktualizacji';
$lang['admin']['newtemplatename'] = 'Nowa nazwa szablony';
$lang['admin']['next'] = 'Następny';
$lang['admin']['noaccessto'] = 'Brak dostępu do %s';
$lang['admin']['nocss'] = 'Brak arkusza styli';
$lang['admin']['noentries'] = 'Brak wpis&oacute;w';
$lang['admin']['nofieldgiven'] = 'Nie podano %s !';
$lang['admin']['nofiles'] = 'Brak plik&oacute;w';
$lang['admin']['nopasswordmatch'] = 'Hasła nie zgadzają się';
$lang['admin']['norealdirectory'] = 'Nie podano właściwego katalogu';
$lang['admin']['norealfile'] = 'Nie podano właściwego pliku';
$lang['admin']['notinstalled'] = 'Nie zainstalowano';
$lang['admin']['overwritemodule'] = 'Nadpisz istniejące moduły';
$lang['admin']['owner'] = 'Właściciel';
$lang['admin']['pagealias'] = 'Alias strony';
$lang['admin']['pagedefaults'] = 'Ustawienia domyślne strony';
$lang['admin']['pagedefaultsdescription'] = 'Ustaw domyślne wartości dla nowych stron';
$lang['admin']['parent'] = 'Nadrzędny';
$lang['admin']['password'] = 'Hasło';
$lang['admin']['passwordagain'] = 'Hasło (powt&oacute;rz)';
$lang['admin']['permission'] = 'Uprawnienie';
$lang['admin']['permissions'] = 'Uprawnienia';
$lang['admin']['permissionschanged'] = 'Uaktualniono uprawnienia';
$lang['admin']['pluginabout'] = 'O znaczniku %s';
$lang['admin']['pluginhelp'] = 'Pomoc dla znacznika %s';
$lang['admin']['pluginmanagement'] = 'Zarządzanie wtyczkami';
$lang['admin']['prefsupdated'] = 'Uaktualniono preferencje';
$lang['admin']['preview'] = 'Podgląd';
$lang['admin']['previewdescription'] = 'Podgląd zmian';
$lang['admin']['previous'] = 'Poprzedni';
$lang['admin']['remove'] = 'Usuń';
$lang['admin']['removeconfirm'] = 'Ta operacja spowoduje trwałe usunięcie plik&oacute;w tworzących ten moduł z danej instalacji.\nCzy na pewno chcesz kontynuować ?';
$lang['admin']['removecssassociation'] = 'Usuń przyporządkowania arkusza styli';
$lang['admin']['saveconfig'] = 'Zapisz konfigurację';
$lang['admin']['send'] = 'Wyślij';
$lang['admin']['setallcontent'] = 'Ustaw dla wszystkich treści';
$lang['admin']['setallcontentconfirm'] = 'Czy jesteś pewny/a, że chcesz aby wszystkie strony używały tego szablonu ?';
$lang['admin']['showinmenu'] = 'Wyświetl w menu';
$lang['admin']['showsite'] = 'Wyświetl stronę';
$lang['admin']['sitedownmessage'] = 'Wiadomość o niedostępności strony';
$lang['admin']['siteprefs'] = 'Ustawienia og&oacute;lne';
$lang['admin']['status'] = 'Status ';
$lang['admin']['stylesheet'] = 'Arkusz styli';
$lang['admin']['submit'] = 'Zatwierdź';
$lang['admin']['submitdescription'] = 'Zapisz zmiany';
$lang['admin']['tags'] = 'Znaczniki';
$lang['admin']['template'] = 'Szablon';
$lang['admin']['templateexists'] = 'Nazwa szablonu już istnieje';
$lang['admin']['templatemanagement'] = 'Zarządzanie szablonami';
$lang['admin']['title'] = 'Tytuł';
$lang['admin']['tools'] = 'Narzędzia';
$lang['admin']['true'] = 'Prawda';
$lang['admin']['setfalse'] = 'Ustaw na Fałsz';
$lang['admin']['type'] = 'Typ';
$lang['admin']['typenotvalid'] = 'Typ jest nieprawidłowy';
$lang['admin']['uninstall'] = 'Odinstaluj';
$lang['admin']['uninstallconfirm'] = 'Na pewno chcesz odinstalować ten moduł? Nazwa:';
$lang['admin']['up'] = 'W g&oacute;rę';
$lang['admin']['upgrade'] = 'Aktualizuj';
$lang['admin']['upgradeconfirm'] = 'Czy na pewno chcesz to aktualizować?';
$lang['admin']['uploadfile'] = 'Wgraj plik';
$lang['admin']['url'] = 'Link URL';
$lang['admin']['useadvancedcss'] = 'Użyj zaawansowanego zarządzania arkuszami styli';
$lang['admin']['user'] = 'Użytkownik';
$lang['admin']['userdefinedtags'] = 'Znaczniki użytkownika';
$lang['admin']['usermanagement'] = 'Zarządzanie użytkownikami';
$lang['admin']['username'] = 'Nazwa użytkownika';
$lang['admin']['usernameincorrect'] = 'Niewłaściwa nazwa lub hasłu użytkownika';
$lang['admin']['userprefs'] = 'Preferencje użytkownika';
$lang['admin']['usersassignedtogroup'] = 'Użytkownicy przypisani do grupy %s';
$lang['admin']['usertagexists'] = 'Znacznik o tej nazwie już istnieje. Wybierz inną nazwę.';
$lang['admin']['usewysiwyg'] = 'Użyj edytora WYSIWYG dla treści';
$lang['admin']['version'] = 'Wersja';
$lang['admin']['view'] = 'Zobacz';
$lang['admin']['welcomemsg'] = 'Witaj %s';
$lang['admin']['directoryabove'] = 'katalog powyżej bieżącego poziomu';
$lang['admin']['nodefault'] = 'Nie wybrano wartości domyślnej';
$lang['admin']['blobexists'] = 'Taka nazwa globalnego bloku HTML już istnieje';
$lang['admin']['blobmanagement'] = 'Zarządzanie globalnymi blokami HTML';
$lang['admin']['errorinsertingblob'] = 'Wystąpił błąd przy wstawianiu globalnego bloku HTML';
$lang['admin']['addhtmlblob'] = 'Dodaj globalny blok HTML';
$lang['admin']['edithtmlblob'] = 'Edytuj globalny blok HTML';
$lang['admin']['edithtmlblobsuccess'] = 'Globalny blok HTML zaktualizowano';
$lang['admin']['tagtousegcb'] = 'Znacznik wykorzystania tego bloku';
$lang['admin']['gcb_wysiwyg'] = 'Włącz GCB WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Włącz edytor WYSIWYG podczas edytowania globalnych blok&oacute;w zawartości';
$lang['admin']['filemanager'] = 'Menadżer plik&oacute;w';
$lang['admin']['imagemanager'] = 'Menadżer obrazk&oacute;w';
$lang['admin']['encoding'] = 'Kodowanie';
$lang['admin']['clearcache'] = 'Wyczyść pamięc podręczną';
$lang['admin']['clear'] = 'Wyczyść';
$lang['admin']['cachecleared'] = 'Wyczyszczono pamięć podręczną';
$lang['admin']['apply'] = 'Zastosuj';
$lang['admin']['applydescription'] = 'Zachowaj zmiany i przejdź do edycji';
$lang['admin']['none'] = 'Brak';
$lang['admin']['wysiwygtouse'] = 'Wybierz edytor WYSIWYG';
$lang['admin']['syntaxhighlightertouse'] = 'Wybierz podświetlenie składni, kt&oacute;re chcesz użyć';
$lang['admin']['cachable'] = 'Cache-owalny';
$lang['admin']['hasdependents'] = 'Ma zależności';
$lang['admin']['missingdependency'] = 'Brakująca zależność';
$lang['admin']['minimumversion'] = 'Minimalna wersja';
$lang['admin']['minimumversionrequired'] = 'Wymagana minimalnie wersja CMSMS';
$lang['admin']['maximumversion'] = 'Wersja maksymalna';
$lang['admin']['maximumversionsupported'] = 'Najwyższa wersja CMSMS wspierana';
$lang['admin']['depsformodule'] = 'Zależności dla modułu %s';
$lang['admin']['installed'] = 'Zainstalowany/a';
$lang['admin']['author'] = 'Autor';
$lang['admin']['changehistory'] = 'Historia zmian';
$lang['admin']['moduleerrormessage'] = 'Komunikat błędu dla modułu %s';
$lang['admin']['moduleupgradeerror'] = 'Wystąpił błąd podczas aktualizowania modułu';
$lang['admin']['moduleinstallmessage'] = 'Komunikat instalacyjny modułu %s';
$lang['admin']['moduleuninstallmessage'] = 'Komunikat deinstalacyjny modułu %s';
$lang['admin']['admintheme'] = 'Motyw administracyjny';
$lang['admin']['addstylesheet'] = 'Dodaj arkusz styli';
$lang['admin']['editstylesheet'] = 'Edytuj arkusz styli';
$lang['admin']['addcssassociation'] = 'Dodaj powiązanie arkusza styli';
$lang['admin']['attachstylesheet'] = 'Dołącz ten arkusz styli';
$lang['admin']['attachtemplate'] = 'Dołącz do tego szablonu';
$lang['admin']['main'] = 'Gł&oacute;wna';
$lang['admin']['pages'] = 'Strony';
$lang['admin']['page'] = 'Strona';
$lang['admin']['files'] = 'Pliki';
$lang['admin']['layout'] = 'Wygląd';
$lang['admin']['usersgroups'] = 'Użytkownicy i Grupy';
$lang['admin']['extensions'] = 'Dodatki';
$lang['admin']['preferences'] = 'Preferencje';
$lang['admin']['admin'] = 'Administracja serwisu';
$lang['admin']['viewsite'] = 'Podgląd strony';
$lang['admin']['templatecss'] = 'Przypisz szablony do arkusza styli';
$lang['admin']['plugins'] = 'Wtyczki';
$lang['admin']['movecontent'] = 'Przenieś strony';
$lang['admin']['module'] = 'Moduł';
$lang['admin']['usertags'] = 'Znaczniki użytkownika';
$lang['admin']['htmlblobs'] = 'Globalne bloki HTML';
$lang['admin']['adminhome'] = 'Strona administracyjna';
$lang['admin']['liststylesheets'] = 'Arkusze styli';
$lang['admin']['preferencesdescription'] = 'Tutaj ustawia się r&oacute;żne preferencje dotyczące całego serwisu.';
$lang['admin']['adminlogdescription'] = 'Wyświetla dziennik kto i co robił administracyjnie';
$lang['admin']['mainmenu'] = 'Menu gł&oacute;wne';
$lang['admin']['users'] = 'Użytkownicy';
$lang['admin']['usersdescription'] = 'Zarządzanie użytkownikami';
$lang['admin']['groups'] = 'Grupy';
$lang['admin']['groupsdescription'] = 'Zarządzanie grupami';
$lang['admin']['groupassignments'] = 'Przypisania grup';
$lang['admin']['groupassignmentdescription'] = 'Przypisywanie użytkownik&oacute;w do grup';
$lang['admin']['groupperms'] = 'Uprawnienia grup';
$lang['admin']['grouppermsdescription'] = 'Ustawianie uprawnień i poziom&oacute;w dostępu dla grup';
$lang['admin']['pagesdescription'] = 'Dodawanie i edycja stron i innych treści';
$lang['admin']['htmlblobdescription'] = 'Globalne bloki HTML są fragmentami treści, kt&oacute;re możesz umieścić na swoich stronach lub w szablonach.';
$lang['admin']['templates'] = 'Szablony';
$lang['admin']['templatesdescription'] = 'Tutaj można dodawać i edytować szablony. Szablony definiują wygląd i zachowanie się Twojego serwisu.';
$lang['admin']['stylesheets'] = 'Arkusze styli';
$lang['admin']['stylesheetsdescription'] = 'Zarządzanie arkuszami styli jest zaawansowaną techniką utrzymywania arkuszy CSS oddzielnie od szablon&oacute;w';
$lang['admin']['filemanagerdescription'] = 'Wgrywanie i zarządzanie plikami';
$lang['admin']['imagemanagerdescription'] = 'Wgrywanie, edycja i usuwanie obrazk&oacute;w';
$lang['admin']['moduledescription'] = 'Moduły rozszerzają CMS Made Simple i dostarczają zr&oacute;żnicowaną funkcjonalność.';
$lang['admin']['tagdescription'] = 'Znaczniki są małymi fragmentami funkcjonalnymi, kt&oacute;re mogą być dodane do Twojej treści i/lub szablon&oacute;w';
$lang['admin']['usertagdescription'] = 'Znaczniki, kt&oacute;re możesz tworzyć i modydikować sam, aby wykonać specyficzne zadania wprost z przeglądarki';
$lang['admin']['installdirwarning'] = '<em><strong>Uwaga:</strong></em> katalog instalacyjny (install) ciągle istnieje. Proszę go usunąć.';
$lang['admin']['subitems'] = 'Elementy podrzędne';
$lang['admin']['extensionsdescription'] = 'Moduły, znaczniki i inne.';
$lang['admin']['usersgroupsdescription'] = 'Elementy odnoszące się do użytkownik&oacute;w i grup';
$lang['admin']['layoutdescription'] = 'Opcje układu serwisu';
$lang['admin']['admindescription'] = 'Funkcje administracyjne serwisu';
$lang['admin']['contentdescription'] = 'Tutaj można dodawać i edytować treści.';
$lang['admin']['enablecustom404'] = 'Włącz własny komunikat błędu 404';
$lang['admin']['enablesitedown'] = 'Włącz komunikat niedostępności strony';
$lang['admin']['bookmarks'] = 'Zakładki';
$lang['admin']['user_created'] = 'Skr&oacute;ty użytkownika';
$lang['admin']['forums'] = 'Fora';
$lang['admin']['wiki'] = 'Wiki ';
$lang['admin']['irc'] = 'IRC';
$lang['admin']['module_help'] = 'Pomoc dla modułu';
$lang['admin']['managebookmarks'] = 'Zarządzanie zakładkami';
$lang['admin']['editbookmark'] = 'Edycja zakładki';
$lang['admin']['addbookmark'] = 'Dodaj zakładkę';
$lang['admin']['recentpages'] = 'Ostatnio używane strony';
$lang['admin']['groupname'] = 'Nazwa grupy';
$lang['admin']['selectgroup'] = 'Wybierz grupę';
$lang['admin']['updateperm'] = 'Aktualizuj uprawnienia';
$lang['admin']['admincallout'] = 'Skr&oacute;ty administratora';
$lang['admin']['showbookmarks'] = 'Wyświetl zakładki administratora';
$lang['admin']['hide_help_links'] = 'Ukryj linki pomocy';
$lang['admin']['hide_help_links_help'] = 'Zaznacz to pole aby wyłączyć wiki i linki pomocy do modułu w nagł&oacute;wkach strony.';
$lang['admin']['showrecent'] = 'Wyświetl ostatnio używane strony';
$lang['admin']['attachtotemplate'] = 'Dołącz arkusz styli do szablonu';
$lang['admin']['attachstylesheets'] = 'Dołącz arkusz styli';
$lang['admin']['indent'] = 'R&oacute;b wcięcia w liście stron aby uwydatnić hierarchię';
$lang['admin']['adminindent'] = 'Wyświetlanie zawartości';
$lang['admin']['contract'] = 'Zwiń sekcję';
$lang['admin']['expand'] = 'Rozwiń sekcję';
$lang['admin']['expandall'] = 'Rozwiń wszystkie sekcje';
$lang['admin']['contractall'] = 'Zwiń wszystkie sekcje';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Ustawienia globalne';
$lang['admin']['adminpaging'] = 'Ilość element&oacute;w zawartości do pokazania na stronie w liście stron';
$lang['admin']['nopaging'] = 'Pokaż wszystkie elementy';
$lang['admin']['myprefs'] = 'Moje preferencje';
$lang['admin']['myprefsdescription'] = 'Tutaj możesz dostosować interfejs administracyjny do swoich potrzeb.';
$lang['admin']['myaccount'] = 'Moje konto';
$lang['admin']['myaccountdescription'] = 'Tutaj możesz zaktualizować szczeg&oacute;ły dotyczące Twojego konta osobistego.';
$lang['admin']['adminprefs'] = 'Preferencje użytkownika';
$lang['admin']['adminprefsdescription'] = 'Tutaj można ustawić specyficzne preferencje dotyczące administracji serwisu';
$lang['admin']['managebookmarksdescription'] = 'Tutaj można zarządzać zakładkami administracyjnymi';
$lang['admin']['options'] = 'Opcje';
$lang['admin']['langparam'] = 'Ten parametr jest używany do określenia kt&oacute;rego języka używać do wyświetlania frontendu. Nie wszystkie moduły wspierają to i nie wszystkie tego potrzebują.';
$lang['admin']['parameters'] = 'Parametry';
$lang['admin']['mediatype'] = 'Typ medium';
$lang['admin']['mediatype_'] = 'Nic nie ustawiono : będzie dotyczyło wszystkich ustawień ';
$lang['admin']['mediatype_all'] = 'wszystko : Wygląd dla wszystkich urządzeń.';
$lang['admin']['mediatype_aural'] = 'aural : Przeznaczone dla syntezator&oacute;w mowy.';
$lang['admin']['mediatype_braille'] = 'braille : Przeznaczone dla czytnik&oacute;w braille.';
$lang['admin']['mediatype_embossed'] = 'embossed : Przeznaczone dla drukarek braille.';
$lang['admin']['mediatype_handheld'] = 'handheld : Przeznaczone dla urządzeń przenośnych';
$lang['admin']['mediatype_print'] = 'print : Intended for paged, opaque material and for documents viewed on screen in print preview mode.';
$lang['admin']['mediatype_projection'] = 'projection : Intended for projected presentations, for example projectors or print to transparencies.';
$lang['admin']['mediatype_screen'] = 'screen : Przeznaczone dla kolorowych ekran&oacute;w komputerowych';
$lang['admin']['mediatype_tty'] = 'tty : Intended for media using a fixed-pitch character grid, such as teletypes and terminals.';
$lang['admin']['mediatype_tv'] = 'tv : Przeznaczone dla urządzeń typu telewizyjnego';
$lang['admin']['assignmentchanged'] = 'Przypisania do grup zostały zaktualizowane';
$lang['admin']['stylesheetexists'] = 'Arkusz styli już istnieje';
$lang['admin']['errorcopyingstylesheet'] = 'Błąd przy kopiowaniu arkusz styli';
$lang['admin']['copystylesheet'] = 'Kopiuj arkusz styli';
$lang['admin']['newstylesheetname'] = 'Nowa nazwa arkusza styli';
$lang['admin']['target'] = 'Cel';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'URL serwera Repozytorium Moduł&oacute;w';
$lang['admin']['metadata'] = 'Metadane';
$lang['admin']['globalmetadata'] = 'Globalne Metadane';
$lang['admin']['titleattribute'] = 'atrybut Title';
$lang['admin']['tabindex'] = 'Kolejność tabulacji';
$lang['admin']['accesskey'] = 'Klawisz skr&oacute;tu aktywujący link';
$lang['admin']['sitedownwarning'] = '<strong>Uwaga:</strong>
Twoja strona wyświetla obecnie wiadomość \&quot;System nie działa\&quot;. Usuń plik %s by usunąć ten problem.';
$lang['admin']['deletecontent'] = 'Usuń zawartość';
$lang['admin']['deletepages'] = 'Usunąć te strony?';
$lang['admin']['selectall'] = 'Zaznacz wszystko';
$lang['admin']['selecteditems'] = 'Wybrane elementy';
$lang['admin']['inactive'] = 'Nieaktywny';
$lang['admin']['deletetemplates'] = 'Usuń szablony';
$lang['admin']['templatestodelete'] = 'Te szablony zostaną usunięte';
$lang['admin']['wontdeletetemplateinuse'] = 'Te szablony są używane i nie zostaną usunięte';
$lang['admin']['deletetemplate'] = 'Usuń arkusze styli';
$lang['admin']['stylesheetstodelete'] = 'Te arkusze styli zostaną usunięte';
$lang['admin']['sitename'] = 'Nazwa strony';
$lang['admin']['siteadmin'] = 'Administrator serwisu';
$lang['admin']['images'] = 'Menadżer obrazk&oacute;w';
$lang['admin']['blobs'] = 'Globalne obiekty blokowe';
$lang['admin']['groupmembers'] = 'Przynależności grupowe';
$lang['admin']['troubleshooting'] = '(Rozwiązywanie problem&oacute;w)';
$lang['admin']['event_desc_loginpost'] = 'Wyślij po zalogowaniu się użytkownika do panelu administratora';
$lang['admin']['event_desc_logoutpost'] = 'Wyślij po wylogowaniu się użytkownika z panelu administratora';
$lang['admin']['event_desc_adduserpre'] = 'Wyślij przed utowrzeniem nowego użytkownika';
$lang['admin']['event_desc_adduserpost'] = 'Wyślij po utowrzeniu nowego użytkownika';
$lang['admin']['event_desc_edituserpre'] = 'Wyślij przed zapisaniem zmian dotyczących użytkownika';
$lang['admin']['event_desc_edituserpost'] = 'Wyślij po zapisaniu zmian dotyczących użytkownika';
$lang['admin']['event_desc_deleteuserpre'] = 'Wyślij przed usunięciem użytkownika z systemu';
$lang['admin']['event_desc_deleteuserpost'] = 'Wyślij po usunięciu użytkownika z systemu';
$lang['admin']['event_desc_addgrouppre'] = 'Wyślij przed utowrzeniem nowej grupy';
$lang['admin']['event_desc_addgrouppost'] = 'Wyślij po utowrzeniu nowej grupy';
$lang['admin']['event_desc_changegroupassignpre'] = 'Wysłane przed zapisaniem powiązań grup';
$lang['admin']['event_desc_changegroupassignpost'] = 'Wysłane po zapisie powiązań grup';
$lang['admin']['event_desc_editgrouppre'] = 'Wyślij przed zapisaniem zmian w grupach';
$lang['admin']['event_desc_editgrouppost'] = 'Wyślij po zapisaniu zmian w grupach';
$lang['admin']['event_desc_deletegrouppre'] = 'Wyślij przed usunięciem grupy z systemu';
$lang['admin']['event_desc_deletegrouppost'] = 'Wyślij po usunięciu grupy z systemu';
$lang['admin']['event_desc_addstylesheetpre'] = 'Wyślij przed utworzeniem nowego arkusza styli';
$lang['admin']['event_desc_addstylesheetpost'] = 'Wyślij po utworzeniu nowego arkusza styli';
$lang['admin']['event_desc_editstylesheetpre'] = 'Wyślij przed zapisaniem zmian w arkuszu styli';
$lang['admin']['event_desc_editstylesheetpost'] = 'Wyślij po zapisaniu zmian w arkuszu styli';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Wyslij przed usunięciem arkusza styli z systemu';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Wyslij po usunięciu arkusza styli z systemu';
$lang['admin']['event_desc_addtemplatepre'] = 'Wyslij przed utworzeniem nowego szablonu';
$lang['admin']['event_desc_addtemplatepost'] = 'Wyslij po utworzeniu nowego szablonu';
$lang['admin']['event_desc_edittemplatepre'] = 'Wyślij przed zapisaniem zmian w szablonie';
$lang['admin']['event_desc_edittemplatepost'] = 'Wyślij po zapisaniu zmian w szablonie';
$lang['admin']['event_desc_deletetemplatepre'] = 'Wyślij przed usunięciem szablonu z systemu';
$lang['admin']['event_desc_deletetemplatepost'] = 'Wyślij po usunięciu szablonu z systemu';
$lang['admin']['event_desc_templateprecompile'] = 'Wyślij zanim szablon zostanie wysłany do przetworzenia przez smarty';
$lang['admin']['event_desc_templatepostcompile'] = 'Wyślij po przetworzeniu szablonu przez smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Wyślij przed utworzeniem nowego globalnego bloku zawartości';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Wyślij po utworzeniu nowego globalnego bloku zawartości';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Wyślij przed zapisaniem zmian w globalnym bloku zawartości';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Wyślij po zapisaniu zmian w globalnym bloku zawartości';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Wyślij przed usunięciem globalnego bloku zawartości z systemu';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Wyślij po usunięciu globalnego bloku zawartości z systemu';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Wyślij przed wysłaniem globalnego bloku zawartości do smarty w celu prztworzenia';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Wyślij po przetworzeniu globalnego bloku zawartości przez smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Wyślij przed zapisaniem zmian w zawartości';
$lang['admin']['event_desc_contenteditpost'] = 'Wyślij po zapisaniu zmian w zawartości';
$lang['admin']['event_desc_contentdeletepre'] = 'Wyślij przed usunięciem zawartości z systemu';
$lang['admin']['event_desc_contentdeletepost'] = 'Wyślij po usunięciu zawartości z systemu';
$lang['admin']['event_desc_contentstylesheet'] = 'Wyślij zanim arkusz styli zostanie wysłany do przeglądarki';
$lang['admin']['event_desc_contentprecompile'] = 'Wyślij przed przetworzeniem zawartości przez smarty';
$lang['admin']['event_desc_contentpostcompile'] = 'Wyślij po przetworzeniu zawartości przez smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Wyślij zanim połączony html zostanie wysłany do przeglądarki';
$lang['admin']['event_desc_smartyprecompile'] = 'Wyślij przed wysłaniem do przetworzenia jakiejkolwiek zawartości przeznaczonej do smarty';
$lang['admin']['event_desc_smartypostcompile'] = 'Wyślij po przetworzeniu jakiejkolwiek zawartości przeznaczonej do smarty';
$lang['admin']['event_help_loginpost'] = '<p>Sent after a user logs into the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;user\&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Sent after a user logs out of the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;user\&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Sent before a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;user\&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Sent after a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;user\&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Sent before edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;user\&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Sent after edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;user\&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Sent before a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;user\&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Sent after a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;user\&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Sent before a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;group\&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Sent after a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;group\&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Sent before group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>\&#039;group\&#039; - Reference to the group object.</li>
<li>\&#039;users\&#039; - Array of references to user objects belonging to the group.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Sent after group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>\&#039;group\&#039; - Reference to the affected group object.</li>
<li>\&#039;users\&#039; - Array of references to user objects now belonging to the affected group.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Sent before edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;group\&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Sent after edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;group\&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Sent before a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;group\&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Sent after a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;group\&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Sent before a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;stylesheet\&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Sent after a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;stylesheet\&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Sent before edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;stylesheet\&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Sent after edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;stylesheet\&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Sent before a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;stylesheet\&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Sent after a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;stylesheet\&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Sent before a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Sent after a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Sent before edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Sent after edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Sent before a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Sent after a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Sent before a template is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Sent after a template has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Sent before a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Sent after a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Sent before edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Sent after edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Sent before a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Sent after a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Sent before a global content block is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Sent after a global content block has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Sent before edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Sent after edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Sent before content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Sent after content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Sent before the sytlesheet is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected stylesheet text.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Sent before content is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Sent after content has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Sent before the combined html is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the html text.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Sent before any content destined for smarty is sent to for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected text.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Sent after any content destined for smarty has been processed.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected text.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Filtruj po modułach';
$lang['admin']['showall'] = 'Pokaż wszystko';
$lang['admin']['core'] = 'Rdzeń';
$lang['admin']['defaultpagecontent'] = 'Domyślna treść strony';
$lang['admin']['file_url'] = 'Linkuj do pliku (zamiast do URL-a)';
$lang['admin']['no_file_url'] = 'Brak (używa URL-a powyżej)';
$lang['admin']['defaultparentpage'] = 'Domyślna strona-rodzic';
$lang['admin']['error_udt_name_whitespace'] = 'Błąd: Znaczniki Użytkownika nie mogą mieć spacji w nazwach';
$lang['admin']['warning_safe_mode'] = '<strong><em>UWAGA:</em></strong> PHP Safe mode (tryb bezpieczeństwa PHP) jest włączony. To może spowodować problemy przy wgrywaniu plik&oacute;w na serwer przez przeglądarkę, np. przy obrazkach, motywach graficznych lub przy wgrywaniu moduł&oacute;w przez XML. Polecamy kontakt z administratorem serwera (strony) i pytanie, czy może ten tryb wyłączyć.';
$lang['admin']['test'] = 'Test';
$lang['admin']['results'] = 'Wynik&oacute;w';
$lang['admin']['untested'] = 'Nie testowano';
$lang['admin']['unknown'] = 'Nieznane';
$lang['admin']['download'] = 'Ściągnij';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend wysiwyg';
$lang['admin']['utma'] = '156861353.1717093438.1205410641.1213879854.1213951556.31';
$lang['admin']['utmz'] = '156861353.1210698509.19.10.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/|utmcmd=referral';
$lang['admin']['utmb'] = '156861353';
$lang['admin']['utmc'] = '156861353';
?>