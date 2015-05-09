<?php /* Smarty version 2.6.28, created on 2015-03-31 11:03:54
         compiled from db:news_article.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:news_article.html', 30, false),)), $this); ?>
<?php if ($this->_tpl_vars['pagenav']): ?><div style="text-align: left; margin: 10px;"><?php echo @_NW_PAGE; ?>
 <?php echo $this->_tpl_vars['pagenav']; ?>
</div><?php endif; ?>

<div style="padding: 3px; margin-right:3px;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:news_item.html", 'smarty_include_vars' => array('story' => $this->_tpl_vars['story'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>

<?php if ($this->_tpl_vars['attached_files_count'] > 0): ?>
	<div class="itemInfo"><?php echo $this->_tpl_vars['lang_attached_files']; ?>

		<?php $_from = $this->_tpl_vars['attached_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['onefile']):
?>
			<a href='<?php echo $this->_tpl_vars['onefile']['visitlink']; ?>
' target='_blank'><?php echo $this->_tpl_vars['onefile']['file_realname']; ?>
</a>&nbsp;
		<?php endforeach; endif; unset($_from); ?>
	</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['pagenav']): ?><div style="text-align: left; margin: 10px;"><?php echo @_NW_PAGE; ?>
 <?php echo $this->_tpl_vars['pagenav']; ?>
</div><?php endif; ?>

<?php if ($this->_tpl_vars['tags']): ?>
	<br /><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:tag_bar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<div style="padding: 5px; text-align: right; margin-right:3px;">
	<?php if ($this->_tpl_vars['nav_links']): ?><?php if ($this->_tpl_vars['previous_story_id'] != -1): ?><a href='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/article.php?storyid=<?php echo $this->_tpl_vars['previous_story_id']; ?>
' title="<?php echo $this->_tpl_vars['previous_story_title']; ?>
"><?php echo $this->_tpl_vars['lang_previous_story']; ?>
</a> - <?php endif; ?><?php if ($this->_tpl_vars['next_story_id'] != -1): ?><a href='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/article.php?storyid=<?php echo $this->_tpl_vars['next_story_id']; ?>
' title="<?php echo $this->_tpl_vars['next_story_title']; ?>
"><?php echo $this->_tpl_vars['lang_next_story']; ?>
</a><?php endif; ?><?php endif; ?>	<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/print.php?storyid=<?php echo $this->_tpl_vars['story']['id']; ?>
" rel="nofollow" title="<?php echo $this->_tpl_vars['lang_printerpage']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/print.gif" border="0" alt="<?php echo $this->_tpl_vars['lang_printerpage']; ?>
" /></a> <a target="_top" href="<?php echo $this->_tpl_vars['mail_link']; ?>
" title="<?php echo $this->_tpl_vars['lang_sendstory']; ?>
" rel="nofollow"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/friend.gif" border="0" alt="<?php echo $this->_tpl_vars['lang_sendstory']; ?>
" /></a>  <a target="_blank" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/makepdf.php?storyid=<?php echo $this->_tpl_vars['story']['id']; ?>
" rel="nofollow" title="<?php echo $this->_tpl_vars['lang_pdfstory']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/acrobat.gif" border="0" alt="<?php echo $this->_tpl_vars['lang_pdfstory']; ?>
" /></a>
</div>

<?php if ($this->_tpl_vars['showsummary'] == true && $this->_tpl_vars['summary_count'] > 0): ?>
<br /><br />
<table width='50%' cellspacing='0' cellpadding='1'>
<tr>
	<th><?php echo $this->_tpl_vars['lang_other_story']; ?>
</th>
</tr>
<?php $_from = $this->_tpl_vars['summary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['onesummary']):
?>
<tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
	<td align='left'><?php echo $this->_tpl_vars['onesummary']['story_published']; ?>
 - <a href='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/article.php?storyid=<?php echo $this->_tpl_vars['onesummary']['story_id']; ?>
'<?php echo $this->_tpl_vars['onesummary']['htmltitle']; ?>
><?php echo $this->_tpl_vars['onesummary']['story_title']; ?>
</a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<br />
<?php endif; ?>

<?php if ($this->_tpl_vars['bookmarkme'] == true): ?>
<br /><br />
<table width='50%' cellspacing='0' cellpadding='1'>
<tr>
	<th><?php echo @_NW_BOOKMARK_ME; ?>
</th>
</tr>
<tr>
	<td><br />
		<a target="_blank" title="<?php echo @_NW_BOOKMARK_TO_BLINKLIST; ?>
" href="http://www.blinklist.com/index.php?Action=Blink/addblink.php&Description=&Url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/article.php?storyid=<?php echo $this->_tpl_vars['story']['id']; ?>
&Title=<?php echo $this->_tpl_vars['encoded_title']; ?>
" title=""><img border="0" alt="" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/blinklist.gif" /></a>&nbsp;
		<a target="_blank" title="<?php echo @_NW_BOOKMARK_TO_DELICIOUS; ?>
" href="http://del.icio.us/post?url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/article.php?storyid=<?php echo $this->_tpl_vars['story']['id']; ?>
&title=<?php echo $this->_tpl_vars['encoded_title']; ?>
" title=""><img border="0" alt="" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/delicious.gif" /></a>&nbsp;
		<a target="_blank" title="<?php echo @_NW_BOOKMARK_TO_DIGG; ?>
" href="http://digg.com/submit?phase=2&url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/article.php?storyid=<?php echo $this->_tpl_vars['story']['id']; ?>
" title=""><img border="0" alt="" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/diggman.gif" /></a>&nbsp;
		<a target="_blank" title="<?php echo @_NW_BOOKMARK_TO_FARK; ?>
" href="http://cgi.fark.com/cgi/fark/edit.pl?new_url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/article.php?storyid=<?php echo $this->_tpl_vars['story']['id']; ?>
&new_comment=<?php echo $this->_tpl_vars['encoded_title']; ?>
&new_link_other=<?php echo $this->_tpl_vars['encoded_title']; ?>
&linktype=Misc" title=""><img border="0" alt="" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/fark.gif" /></a>&nbsp;
		<a target="_blank" title="<?php echo @_NW_BOOKMARK_TO_FURL; ?>
" href="http://www.furl.net/storeIt.jsp?t=<?php echo $this->_tpl_vars['encoded_title']; ?>
&u=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/article.php?storyid=<?php echo $this->_tpl_vars['story']['id']; ?>
" title=""><img border="0" alt="" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/furl.gif" /></a>&nbsp;
		<a target="_blank" title="<?php echo @_NW_BOOKMARK_TO_NEWSVINE; ?>
" href="http://www.newsvine.com/_tools/seed&save?u=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/article.php?storyid=<?php echo $this->_tpl_vars['story']['id']; ?>
&h=<?php echo $this->_tpl_vars['encoded_title']; ?>
" title=""><img border="0" alt="" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/newsvine.gif" /></a>&nbsp;
		<a target="_blank" title="<?php echo @_NW_BOOKMARK_TO_REDDIT; ?>
" href="http://reddit.com/submit?url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/article.php?storyid=<?php echo $this->_tpl_vars['story']['id']; ?>
&title=<?php echo $this->_tpl_vars['encoded_title']; ?>
" title=""><img border="0" alt="" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/reddit.gif" /></a>&nbsp;
		<a target="_blank" title="<?php echo @_NW_BOOKMARK_TO_SIMPY; ?>
" href="http://www.simpy.com/simpy/LinkAdd.do?href=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/article.php?storyid=<?php echo $this->_tpl_vars['story']['id']; ?>
&title=<?php echo $this->_tpl_vars['encoded_title']; ?>
" title=""><img border="0" alt="" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/simpy.png" /></a>&nbsp;
		<a target="_blank" title="<?php echo @_NW_BOOKMARK_TO_SPURL; ?>
" href="http://www.spurl.net/spurl.php?title=<?php echo $this->_tpl_vars['encoded_title']; ?>
&url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/article.php?storyid=<?php echo $this->_tpl_vars['story']['id']; ?>
" title=""><img border="0" alt="" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/spurl.gif" /></a>&nbsp;
		<a target="_blank" title="<?php echo @_NW_BOOKMARK_TO_YAHOO; ?>
" href="http://myweb2.search.yahoo.com/myresults/bookmarklet?t=<?php echo $this->_tpl_vars['encoded_title']; ?>
&u=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/article.php?storyid=<?php echo $this->_tpl_vars['story']['id']; ?>
" title=""><img border="0" alt="" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/yahoomyweb.gif" /></a>&nbsp;
	</td>
</tr>
</table>
<br />
<?php endif; ?>

<div style="text-align: center; padding: 3px; margin:3px;">
	<?php echo $this->_tpl_vars['commentsnav']; ?>

	<?php echo $this->_tpl_vars['lang_notice']; ?>

</div>

<div style="margin:3px; padding: 3px;">
<?php if ($this->_tpl_vars['comment_mode'] == 'flat'): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_flat.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['comment_mode'] == 'thread'): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_thread.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['comment_mode'] == 'nest'): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_nest.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>