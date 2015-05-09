<?php /* Smarty version 2.6.28, created on 2015-03-31 08:49:33
         compiled from /var/www/html/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/system/language/polish/help/preferences.html */ ?>
<div id="help-template" class="outer">

<h1 class="head">Help: Preferences</h1>
<h4 class="odd">Description</h4>

<p class="even">
The preference panels are where you configure your site-wide preferences. It is worth taking the time to work through them as some settings can have a significant impact on the performance, security and ease of use of your site.
</p>
<h4 class="odd">General Settings</h4>
<p class="even">
These are the most important and most frequently accessed preferences. You will set the Site name and the Slogan for your Website. You'll also select the default Theme and Admin GUI. And if you need to work on your Website, you can close it for all users. You can also set Module-wide Cache times.
</p>

<h4 class="odd">Meta Tags and Footer</h4>
<p class="even">
Meta tags provide information about your information – they describe the nature of your website. Their main use is to help search engines and their robots to index your website correctly, i.e. to help the right people find it. The information you supply is included in the header of each webpage. It should represent the content of the site as a whole - the meta information is the same on every page, it currently cannot be customised for different modules or pages.<br /><br />

Be aware that the major search engines use different strategies for indexing websites. They may place different weightings on meta tags or even ignore them completely. Careful use of meta information may help your website to gain better search engine rankings and it is useful to seek information on the indexing strategies of your dominant referrers (see your website logfile). This may help you to optimise your meta information or other aspects of your site design and content to improve your rankings. <br /><br />

Try to be accurate and honest in providing meta information. Don’t try to ‘<em>manipulate</em>’ search engines to gain a better ranking – they may recognise this behaviour and your site may be downgraded or blacklisted from their index. 

</p>

<h4 class="odd">Word Censoring Options</h4>
<p class="even">
XOOPS can automatically censor undesirable words that may be posted by visitors to your site and replace them with a generic, alternative term of your choice. The censorship function does consume some system resources and may slow your site somewhat. It is disabled by default.<br /><br />

To implement censorship on your site select the ‘<em>enable</em>’ radio button. You need to enter a list of unwanted words in the ‘<em>words to censor</em>’ box, separating them with the pipe character. This function is case insensitive. Enter a suitable replacement term in the ‘<em>replace bad words with</em>’ box. The default is #OOPS#.

</p>

<h4 class="odd">Search Options</h4>
<p class="even">
The search facility is one of the most important tools for locating information in a portal website. The XOOPS search categorises results by module – records are identified as news items, downloads, links or other types as per the modules you have installed. <br /><br />

Global searches of all resources on your site are enabled by default. If you disable global searches this facility will no longer be available and the search block will become non-functional.
The default minimum keyword length for searches is five characters. Any terms that are shorter will be ignored. This is useful for controlling the precision of searches, though not much use for terms like “site map”. Short keywords tend to be more common so they tend to return a greater number of records, many of which may be irrelevant. Longer keywords tend to retrieve fewer records but with a higher degree of precision.<br /><br />

Searching is relatively expensive in computational terms and so excluding short terms will reduce the load on the server. However, bear in mind that sometimes it is useful to be able to search for a short term.

</p>

<h4 class="odd">Email Setup</h4>
<p class="even">
This section of the control panel is used to configure your email for the system. It is recommended that you leave the Email Delivery Method on the default setting “PHP (mail)”. You do not need to fill in the Sendmail or SMTP fields unless you use an alternative email delivery option.
</p>

<h4 class="odd">Authentication Options</h4>
<p class="even">
Just leave it at Xoops Database and you can ignore all the other options in there.<br /><br />

LDAP or Microsoft Active directory servers have been added for authentification as an alternate to the normal Xoops users. The reason is that in many company you already have a user database in ADS or LDAP and they can use that to logon to Xoops and don´t have to register yet another account.  
</p>

<h4 class="odd">System Module Settings</h4>
<p class="even">
Here you can activate/deactivate each of the System sections, as well as specify system-wide defaults, e.g. for number of displayed avatars or images per page. You can also select a default editor for blocks, comments, and for all modules.
</p>

</div> 