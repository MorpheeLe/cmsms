<?php
$lang['title_browsecat_template'] = 'Browse Category Template Editor';
$lang['title_browsecat_sysdefault'] = 'Default Browse category Template';
$lang['browsecattemplate'] = 'Browse Category Templates';
$lang['error_filesize'] = 'An uploaded file exceeded the maximum allowed size';
$lang['post_date_desc'] = 'Post Date Descending';
$lang['post_date_asc'] = 'Post Date Ascending';
$lang['expiry_date_desc'] = 'Expiry Date Descending';
$lang['expiry_date_asc'] = 'Expiry Date Ascending';
$lang['title_desc'] = 'Title Descending';
$lang['title_asc'] = 'Title Ascending';
$lang['fesubmit_status'] = 'The status of news articles submitted via the frontend';
$lang['error_invalidfiletype'] = 'Cannot upload this type of file';
$lang['error_upload'] = 'Problem occurred uploading a file';
$lang['error_movefile'] = 'Could not create file: %s';
$lang['error_mkdir'] = 'Could not create directory: %s';
$lang['expiry_interval'] = 'The number of days (by default) before an article expires (if expiry is selected)';
$lang['removed'] = 'Removed';
$lang['msg_contenttype_removed'] = <<<EOT
The news content type has been removed.  Please place {news} tags with appropriate parameters into your page template or into your page content to replace this functionality.
EOT;
$lang['delete_selected'] = 'Delete Selected Articles';
$lang['areyousure_deletemultiple'] = 'Are you sure you want to delete all of these news articles?\nThis action cannot be undone!';
$lang['error_templatenamexists'] = 'A template by that name already exists';
$lang['error_noarticlesselected'] = 'No Articles Were Selected';
$lang['reassign_category'] = 'Change Category To';
$lang['select'] = 'Select';
$lang['approve'] = 'Set Status to \'Published\'';
$lang['revert'] = 'Set Status to \'Draft\'';
$lang['hide_summary_field'] = 'Hide the summary field when adding or editing articles';
$lang['textbox'] = 'Text Input';
$lang['checkbox'] = 'Checkbox';
$lang['textarea'] = 'Text Area';
$lang['file'] = 'File';
$lang['auto_create_thumbnails'] = 'Automatically create thumbnail files for files with these extensions';
$lang['allowed_upload_types'] = 'Allow only files with these extensions to be uploaded';
$lang['fielddefupdated'] = 'Field Definition Updated';
$lang['editfielddef'] = 'Edit Field Definition';
$lang['up'] = 'Up';
$lang['down'] = 'Down';
$lang['fielddefdeleted'] = 'Field Definition Deleted';
$lang['nameexists'] = 'A field by that name already exists';
$lang['notanumber'] = 'Maximum Length is Not a Number';
$lang['fielddef'] = 'Field Definition';
$lang['fielddefadded'] = 'Field Definition Successfully Added';
$lang['public'] = 'Public';
$lang['type'] = 'Type';
$lang['info_maxlength'] = 'The maximum length only applies to text input fields.';
$lang['maxlength'] = 'Maximum Length';
$lang['addfielddef'] = 'Add Field Definition';
$lang['customfields'] = 'Field Definitions';
$lang['deprecated'] = 'unsupported';
$lang['subject_newnews'] = 'A new News article has been posted';
$lang['email_subject'] = 'The Subject of the outgoing email';
$lang['email_template'] = 'The format of the email message';
$lang['formsubmit_emailaddress'] = 'Email address to receive notification of news submission';
$lang['extra'] = 'Extra';
$lang['uploadscategory'] = 'Uploads Category';
$lang['title_available_templates'] = 'Available Templates';
$lang['resettodefault'] = 'Reset to Factory Defaults';
$lang['title_form_template'] = 'Form Template Editor';
$lang['title_detail_template'] = 'Detail Template Editor';
$lang['title_summary_template'] = 'Summary Template Editor';
$lang['prompt_templatename'] = 'Template Name';
$lang['prompt_template'] = 'Template Source';
$lang['title_form_sysdefault'] = 'Default Form Template';
$lang['title_summary_sysdefault'] = 'Default Summary Template';
$lang['title_detail_sysdefault'] = 'Default Detail Template';
$lang['info_sysdefault2'] = '<strong>Note:</strong> This tab contains text areas to allow you to edit a set of templates that are displayed when you create a \'new\' summary, detail, or form template.  Changing content in this tab, and clicking \'submit\' will <strong>not effect any current displays</strong>.';
$lang['info_sysdefault'] = '<em>(the content used by default when a new template is created)</em>';
$lang['template'] = 'Template';
$lang['prompt_name'] = 'Name';
$lang['prompt_default'] = 'Default';
$lang['prompt_newtemplate'] = 'Create A New Template';
$lang['help_pagelimit'] = 'Maximum number of items to display (per page).  If this parameter is not supplied all matching items will be displayed.  If it is, and there are more items available than specified in the pararamter, text and links will be supplied to allow scrolling through the results';
$lang['prompt_page'] = 'Page';
$lang['firstpage'] = '<<';
$lang['prevpage'] = '<';
$lang['nextpage'] = '>';
$lang['lastpage'] = '>>';
$lang['prompt_of'] = 'of';
$lang['prompt_pagelimit'] = 'Page Limit';
$lang['prompt_sorting'] = 'Sort By';
$lang['title_filter'] = 'Filters';
$lang['published'] = 'Published';
$lang['draft'] = 'Draft';
$lang['expired'] = 'Expired';
$lang['author'] = 'Author';
$lang['sysdefaults'] = 'Restore to defaults';
$lang['restoretodefaultsmsg'] = 'This operation will restore the template contents to their system defaults.  Are you sure you want to proceed?';
$lang['addarticle'] = 'Add Article';
$lang['articleadded'] = 'The article was successfully added.';
$lang['articleupdated'] = 'The article was successfully updated.';
$lang['articledeleted'] = 'The article was successfully deleted.';
$lang['addcategory'] = 'Add Category';
$lang['categoryadded'] = 'The category was successfully added.';
$lang['categoryupdated'] = 'The category was successfully updated.';
$lang['categorydeleted'] = 'The category was successfully deleted.';
$lang['addnewsitem'] = 'Add News Item';
$lang['allcategories'] = 'All Categories';
$lang['allentries'] = 'All Entries';
$lang['areyousure'] = 'Are you sure you want to delete?';
$lang['articles'] = 'Articles';
$lang['cancel'] = 'Cancel';
$lang['category'] = 'Category';
$lang['categories'] = 'Categories';
$lang['default_category'] = 'Default Category';
$lang['changelog'] = '
<ul>
<li>
<p>Version: 1.0</p>
<p>This module is a hacked and extended version of <em>Ted Kulp\'s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it\'s Ted\'s code.</p>
</li> 
<li> 
<p>Version: 1.1</p> 
<p>Added the ability to set an automatic expiry date from a pulldown, moved the category selection, and on the main page you now filter the entries you want to see.</p> 
</li> 
<li> 
<p>Version: 1.2</p> 
<p>Added summary, no_anchor and length parameters.  In summary mode links are made to the real articles, tags are stripped, and links are insreted to the news page and the specific news item.</p> 
</li> 
<li> 
<p>Version: 1.3</p> 
<p>Minor cosmetic changes</p> 
</li> 
<li> 
<p>Version 1.5</p> 
<p>Merged into the trunk News module</p> 
</li> 
<li> 
<p>Version 1.6</p> 
<p>Added pagination, and moved the add button to the top (calguy)</p>
</li>
<li>
<p>Version 2.0</p>
<p>Re-written to use smarty templates, and several other significant improvements</p>
</li>
<li>
<p>Version 2.0.1</p>
<p>Minor tweaks to the RSS output to allow it to work correctly on different browsers, and to support non alpha numeric characters in the description.</p> 
</li> 
<li>
<p>Version 2.0.2</p>
<p>- Add a "start" parameter to specify a start offset for news items</p>
<p>- The template tabs now have a "reset to default" button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The "Modify News" permission is only for articles and categories. "Modify Templates" permission is required to edit the templates, and "Modify Site Preferences" is required to edit the options.</p> 
<p>- Put the rss feed titile into the lang entries</p>
</li> 
<li>
<p>Version 2.0.3</p>
<p>- Added the ability to track the original author of an article</p>
</li>
<li>
<p>Version 2.2</p>
<p>- Added browsecat parameter
</li>
<li>
<p>Version 2.3</p>
<p>- Changed to use multiple database templates <em>Old file templates will not work.</p>
<p>- Now allow for admin approval to change news state from draft to published.</p>
<p>- Pagination is now available in the default summary templates</p>
<p>- More.</p>
</li>
<li>
<p>Version 2.3.0.2</p>
<p>- Minor fixes to the help, changelog, to the number parameter, and to add a missing CreatePermission call.</p>
<p>- Fixes to the start parameter to work differently</p>
</li>
<li>
<p>Version 2.4</p>
<p>- Added a form on the frontend to allow users to submit news articles.  This should be wrapped with customcontent to prevent spamming, etc.</p>
<p>- Fixes to allow 1.0.x compatibility.</p>
<p>- Updated the help.</p>
</li>
<li>Version 2.5
<p>Adds an extra field that can be re-used for anything (associating with a file, an extra image, etc.</p>
</li>
<li>Version 2.5.1
<p>Removes a small error I left in a template.</p>
<p>Moves the default templates into their own tab to remove confusion.</p>
<p>Use SelectLimit in the summary view instead of the LIMIT n,start or LIMIT n offset startelement</p>
<p>Bumped minimum version to 1.1</p>
</li>
<li>Version 2.6
<p>Adds user defined fields, including text areas, text input, checkboxes, and \'files\' which allows you to associate a file with a particular news article.</p>
<p>Adds the ability to bulk change the category of selected news articles</p>
<p>Adds the ability to bulk delete selected news articles</p>
<p>Adds a new permission \'Delete News\'.  Users will need this permission to be able to delete news articles.</p>
<p>Fixes some frontend editing capabilities (extra fields aren\'t in there yet)</p>
<p>Adds a preference to allow hiding the summary text area for adding and editing articles.</p.
<p>Remove the news content type (was deprecated in News 2.5.1)</p>
<p>Now Requires CMS 1.2 or later</p>
<p>Fixes some hardcoded lang strings in the articles tab</p>
<p>Adds a preference that allows specifying the default number of days before an article expires (if expiry is used)</p>
<p>Fixes the browsecat mode so that extra parameters added on the tag are carried down through the links</p>
<p>Adds multiple database templates to the browsecat action.</p>
</li>
<li>Version 2.6.1
<p>Now use cms_move_uploaded_file instead of move_uploaded_file.</p>
<p>Fixes a minor issue with the start parameter.</p>
<p>Now Require CMS 1.2.1 or later</p>
<p>Fixes an issue where I was assuming that the db prefix was cms_</p>
<p>Fixes some warnings if no custom fields were defined.</p>
<p>Fixes some calls to GetModuleInstance().</p>
</li>
</ul>
';
$lang['content'] = 'Content';
$lang['dateformat'] = '%s not in a valid yyyy-mm-dd hh:mm:ss format';
$lang['delete'] = 'Delete';
$lang['description'] = 'Add, edit and remove News entries';
$lang['formtemplate'] = 'Form Templates';
$lang['detailtemplate'] = 'Detail Templates';
$lang['default_templates'] = 'Default Templates';
$lang['detailtemplateupdated'] = 'The updated Detail Template was successfully saved to the database.';
$lang['displaytemplate'] = 'Display Template';
$lang['edit'] = 'Edit';
$lang['enddate'] = 'End Date';
$lang['endrequiresstart'] = 'Entering an end date requires a start date also';
$lang['entries'] = '%s Entries';
$lang['status'] = 'Status';
$lang['expiry'] = 'Expiry';
$lang['filter'] = 'Filter';
$lang['more'] = 'More';
$lang['category_label'] = 'Category:';
$lang['author_label'] = 'Posted by:';
$lang['moretext'] = 'More Text';
$lang['name'] = 'Name';
$lang['news'] = 'News';
$lang['news_return'] = 'Return';
$lang['newcategory'] = 'New Category';
$lang['needpermission'] = 'You need the \'%s\' permission to perform that function.';
$lang['nocategorygiven'] = 'No Category Given';
$lang['startdatetoolate'] = 'The Start Date is too late (after end date?)';
$lang['nocontentgiven'] = 'No Content Given';
$lang['noitemsfound'] = '<strong>No</strong> items found for category: %s';
$lang['nopostdategiven'] = 'No Post Date Given';
$lang['note'] = '<em>Note:</em> Dates must be in a \'yyyy-mm-dd hh:mm:ss\' format.';
$lang['notitlegiven'] = 'No Title Given';
$lang['nonamegiven'] = 'No Name Given';
$lang['numbertodisplay'] = 'Number to Display (empty shows all records)';
$lang['print'] = 'Print';
$lang['postdate'] = 'Post Date';
$lang['postinstall'] = 'Make sure to set the "Modify News" permission on users who will be administering News items.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed';
$lang['rsstemplate'] = 'RSS Template';
$lang['selectcategory'] = 'Select Category';
$lang['showchildcategories'] = 'Show Child Categories';
$lang['sortascending'] = 'Sort Ascending';
$lang['startdate'] = 'Start Date';
$lang['startoffset'] = 'Start displaying at the nth item';
$lang['startrequiresend'] = 'Entering a start date requires an end date also';
$lang['submit'] = 'Submit';
$lang['summary'] = 'Summary';
$lang['summarytemplate'] = 'Summary Templates';
$lang['summarytemplateupdated'] = 'The News Summary Template was successfully updated.';
$lang['title'] = 'Title';
$lang['options'] = 'Options';
$lang['optionsupdated'] = 'The options were successfully updated.';
$lang['useexpiration'] = 'Use Expiration Date';
$lang['showautodiscovery'] = 'Show Feed Auto-Discovery Link';
$lang['autodiscoverylink'] = 'Feed Auto-Discovery URL (blank for default)';
$lang['eventdesc-NewsArticleAdded'] = 'Sent when an article is added.';
$lang['eventhelp-NewsArticleAdded'] = '<p>Sent when an article is added.</p>
<h4>Parameters</h4>
<ul>
<li>\"news_id\" - Id of the news article</li>
<li>\"category_id\" - Id of the category for this article</li>
<li>\"title\" - Title of the article</li>
<li>\"content\" - Content of the article</li>
<li>\"summary\" - Summary of the article</li>
<li>\"status\" - Status of the article ("draft" or "publish")</li>
<li>\"start_time\" - Date the article should start being displayed</li>
<li>\"end_time\" - Date the article should stop being displayed</li>
<li>\"useexp\" - Whether the expiration date should be ignored or not</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'Sent when an article is edited.';
$lang['eventhelp-NewsArticleEdited'] = '<p>Sent when an article is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\"news_id\" - Id of the news article</li>
<li>\"category_id\" - Id of the category for this article</li>
<li>\"title\" - Title of the article</li>
<li>\"content\" - Content of the article</li>
<li>\"summary\" - Summary of the article</li>
<li>\"status\" - Status of the article ("draft" or "publish")</li>
<li>\"start_time\" - Date the article should start being displayed</li>
<li>\"end_time\" - Date the article should stop being displayed</li>
<li>\"useexp\" - Whether the expiration date should be ignored or not</li>
</ul>
';
$lang['eventdesc-NewsArticleDeleted'] = 'Sent when an article is deleted.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Sent when an article is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\"news_id\" - Id of the news article</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Sent when a category is added.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Sent when a category is added.</p>
<h4>Parameters</h4>
<ul>
<li>\"category_id\" - Id of the news category</li>
<li>\"name\" - Name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Sent when a category is edited.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Sent when a category is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\"category_id\" - Id of the news category</li>
<li>\"name\" - Name of the news category</li>
<li>\"origname\" - The original name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Sent when a category is deleted.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Sent when a category is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\"category_id\" - Id of the deleted category </li>
<li>\"name\" - Name of the deleted category</li>
</ul>
';
$lang['helpnumber'] = 'Maximum number of items to display =- leaving empty will show all items.';
$lang['helpstart'] = 'Start at the nth item -- leaving empty will start at the first item.';
$lang['helpmakerssbutton'] = 'Make a button to link to an RSS feed of the News items.';
$lang['helpcategory'] = 'Only display items for that category. <b>Use * after the name to show children.</b>  Multiple categories can be used if separated with a comma. Leaving empty, will show all categories.';
$lang['helpmoretext'] = 'Text to display at the end of a news item if it goes over the summary length.  Defaults to "more..."';
$lang['helpsummarytemplate'] = 'Use a separate database template for displaying the article summary.  This template must exist and be visible in the summary template tab of the News admin, though it does not need to be the default.  If this parameter is not specified, then the current template marked as default will be used.';
$lang['helpformtemplate'] = 'Use a database template for displaying the article submission form. This template must exist and be visible in the form templates tab of the News admin, though it does not need to be the default.  If this parameter is not specified, then the current template marked as default will be used.';
$lang['helpbrowsecattemplate'] = 'Use a database template for displaying the category browser. This template must exist and be visible in the Browse Category Templates tab of the News admin, though it does not need to be the default.  If this parameter is not specified, then the current template marked as default will be used.';
$lang['helpdetailtemplate'] = 'Use a separate database template for displaying the article detail. This template must exist and be visible in the detail template tab of the News admin, though it does not need to be the default.  If this parameter is not specified, then the current template marked as default will be used.';
$lang['helpsortby'] = 'Field to sort by.  Options are: "news_date", "summary", "news_data", "news_category", "news_title", "news_extra", "end_time", "start_time", "random".  Defaults to "news_date". If "random" is specified, the sortasc param is ignored.';
$lang['helpsortasc'] = 'Sort news items in ascending date order rather than descending.';
$lang['helpdetailpage'] = 'Page to display News details in.  This can either be a page alias or an id. Used to allow details to be displayed in a different template from the summary.';
$lang['helpdateformat'] = 'Format to display the article\'s post date with.  This is based on the <a href="http://php.net/strftime" target="_blank">strftime</a> function and can be used in your template with $entry->formatpostdate.  It defaults to %x, which is the default date format for the server\'s locale.';
$lang['helpshowarchive'] = 'Show only expired news articles.';
$lang['helpbrowsecat'] = 'Shows a browseable category list.';
$lang['helpaction'] = 'Override the default action.  Possible values are \'default\' to display the summary view, and \'fesubmit\' to display the frontend form for allowing users to submit news articles on the front end.';
$lang['help'] = <<<EOF
<h3>Important Notes</h3>
<p>This version of News is greater than the one supplied with the 1.1 branch of CMS Made Simple.  If you use this version of News you must use extreme caution when upgrading CMS Made Simple to ensure that nothing in the modules/News directory is overwritten.</p>
	<h3>What does this do?</h3>
	<p>News is a module for displaying news events on your page, similar to a blog style, except with more features!.  When the module is installed, a News admin page is added to administration menu that will allow you to select or add a news category.  Once a news category is created or selected, a list of news items for that category will be displayed.  From here, you can add, edit or delete news items for that category.</p>
	<h3>Template variables</h3>
	<ul>
		<li><b>itemcount</b> - The number of news articles to be shown.</li>
		<li><b>entry->authorname</b> - The full name of the the author including First and Last name.</li>
	</ul>
	<h3>Security</h3>
	<p>The user must belong to a group with the 'Modify News' permission in order to add or edit News entries.</p>
        <p>As well, In order to delete news entries, the user must belong to a group with the 'Delete News Articles' permission.</p>
	<p>In order to edit the layout templates, the user must belong to a group with the 'Modify Templates' permission.</p>
	<p>In order to edit the global news preferences, the user must belong to a group with the 'Modify Site Preferences' permission.</p>
	<p>Additionally, to approve news for frontend display the user must belong to a group with the 'Approve News' permission.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is with the {news} wrapper tag (wraps the module in a tag, to simplify the syntax).  This will insert the module into your template or page anywhere you wish, and display news items.  The code would look something like: <code>{news number='5'}</code></p>
<h3>Templates</h3>
	<p>Since version 2.3 News supports multiple database templates, and no longer supports additional file templates.  Users who used the old file template system should follow these steps (for each file template):
<ul>
<li>Copy the file template into the clipboard</li>
<li>Create a new database template <em>(either summary or detailed as required)</em>.  Give the new template the same name (including the .tpl extension) as the old file template, and paste the contents.</li>
<li>Hit Submit</li>
</ul>
Following these steps should solve the problem of your news templates not being found and other similar smarty errors when you upgrade to a version of CMS that has News 2.3 or greater.</p>
EOF;
?>
