<?php /* Smarty version 2.6.28, created on 2015-05-09 20:18:21
         compiled from db:xforum_viewforum.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:xforum_viewforum.html', 179, false),)), $this); ?>

<div id="forum_header">
<div><?php echo $this->_tpl_vars['folder_topic']; ?>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/index.php"><?php echo $this->_tpl_vars['forum_index_title']; ?>
</a></div>
<?php if ($this->_tpl_vars['parent_forum']): ?>
<div>&nbsp;&nbsp;<?php echo $this->_tpl_vars['folder_topic']; ?>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewforum.php?forum=<?php echo $this->_tpl_vars['parent_forum']; ?>
"><?php echo $this->_tpl_vars['parent_name']; ?>
</a></div>
<div>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['folder_topic']; ?>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewforum.php?forum=<?php echo $this->_tpl_vars['forum_id']; ?>
"><?php echo $this->_tpl_vars['forum_name']; ?>
</a></div>
<?php else: ?>
<div>&nbsp;&nbsp;<?php echo $this->_tpl_vars['folder_topic']; ?>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewforum.php?forum=<?php echo $this->_tpl_vars['forum_id']; ?>
"><?php echo $this->_tpl_vars['forum_name']; ?>
</a></div>
<?php endif; ?>
</div>

<br clear="all" />

<?php if ($this->_tpl_vars['subforum']): ?>
<table cellspacing="1" class="outer" width="100%">

    <tr class="head" align="center">
      <td width="5%">&nbsp;</td>
      <td nowrap="nowrap" align="left"><?php echo @_MD_SUBFORUMS; ?>
</td>
      <td nowrap="nowrap"><?php echo @_MD_TOPICS; ?>
</td>
      <td nowrap="nowrap"><?php echo @_MD_POSTS; ?>
</td>
      <td nowrap="nowrap"><?php echo @_MD_LASTPOST; ?>
</td>
    </tr>

    <!-- start subforums -->
  <?php $_from = $this->_tpl_vars['subforum']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['xforum']):
?> <?php if ($this->_tpl_vars['xforum']['forum_permission']): ?>
  <tr>
    <td class="even" align="center" valign="middle"><?php echo $this->_tpl_vars['xforum']['forum_folder']; ?>
</td>
    <td class="odd" onclick="window.location='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewforum.php?forum=<?php echo $this->_tpl_vars['xforum']['forum_id']; ?>
'"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewforum.php?forum=<?php echo $this->_tpl_vars['xforum']['forum_id']; ?>
"><strong><?php echo $this->_tpl_vars['xforum']['forum_name']; ?>
</strong></a><br />
		<?php echo $this->_tpl_vars['xforum']['forum_desc']; ?>

		<?php if ($this->_tpl_vars['xforum']['forum_moderators']): ?><br/>
      	<strong><?php echo @_MD_MODERATOR; ?>
:&nbsp;</strong><?php echo $this->_tpl_vars['xforum']['forum_moderators']; ?>

      	<?php endif; ?>
   	</td>
    <td class="even" align="center" valign="middle"><?php echo $this->_tpl_vars['xforum']['forum_topics']; ?>
</td>
    <td class="odd" align="center" valign="middle"><?php echo $this->_tpl_vars['xforum']['forum_posts']; ?>
</td>
    <td class="even" valign="middle"><?php echo $this->_tpl_vars['xforum']['forum_lastpost_time']; ?>
<br />
		<?php echo $this->_tpl_vars['xforum']['forum_lastpost_user']; ?>
	<?php echo $this->_tpl_vars['xforum']['forum_lastpost_icon']; ?>

	</td>
  </tr>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
  <!-- end subforums -->

</table>
<br clear="all" />
<?php endif; ?>

<?php if ($this->_tpl_vars['forum_moderators']): ?>
<div>
<?php echo @_MD_MODERATEDBY; ?>
: <?php echo $this->_tpl_vars['forum_moderators']; ?>

</div>
<br clear="all" />
<?php endif; ?>

<div style="padding: 5px;float: right; text-align:right;">
<?php echo $this->_tpl_vars['forum_addpoll']; ?>
&nbsp;<?php echo $this->_tpl_vars['forum_newtopic']; ?>
&nbsp;<?php echo $this->_tpl_vars['forum_post_or_register']; ?>

</div>

<br clear="all" />
<div>
<div class="dropdown">
<?php if ($this->_tpl_vars['menumode'] == 0): ?>

	<select
		name="forumoption" id="forumoption"
		class="menu"	onchange="if(this.options[this.selectedIndex].value.length >0 )	{ window.location=this.options[this.selectedIndex].value;}"
	>
		<option value=""><?php echo @_MD_FORUMOPTION; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['mark_read']; ?>
"><?php echo @_MD_MARK_ALL_TOPICS; ?>
&nbsp;<?php echo @_MD_MARK_READ; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['mark_unread']; ?>
"><?php echo @_MD_MARK_ALL_TOPICS; ?>
&nbsp;<?php echo @_MD_MARK_UNREAD; ?>
</option>
		<option value="">--------</option>
		<option value="<?php echo $this->_tpl_vars['post_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_ALLPOSTS; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['newpost_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_NEWPOSTS; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['all_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_ALL; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['digest_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_DIGEST; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['unreplied_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_UNREPLIED; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['unread_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_UNREAD; ?>
</option>
		<option value="">--------</option>
		<?php $_from = $this->_tpl_vars['menumode_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
		<option value="<?php echo $this->_tpl_vars['menu']['link']; ?>
"><?php echo $this->_tpl_vars['menu']['title']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
	</select>

<?php elseif ($this->_tpl_vars['menumode'] == 1): ?>
	<div id="forumoption" class="menu">
	<table><tr><td>
		<a class="item" href="<?php echo $this->_tpl_vars['mark_read']; ?>
"><?php echo @_MD_MARK_ALL_TOPICS; ?>
&nbsp;<?php echo @_MD_MARK_READ; ?>
</a>
		<a class="item" href="<?php echo $this->_tpl_vars['mark_unread']; ?>
"><?php echo @_MD_MARK_ALL_TOPICS; ?>
&nbsp;<?php echo @_MD_MARK_UNREAD; ?>
</a>
		<div class="separator"></div>
		<a class="item" href="<?php echo $this->_tpl_vars['post_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_ALLPOSTS; ?>
</a>
		<a class="item" href="<?php echo $this->_tpl_vars['newpost_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_NEWPOSTS; ?>
</a>
	    <a class="item" href="<?php echo $this->_tpl_vars['all_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_ALL; ?>
</a>
		<a class="item" href="<?php echo $this->_tpl_vars['digest_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_DIGEST; ?>
</a>
		<a class="item" href="<?php echo $this->_tpl_vars['unreplied_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_UNREPLIED; ?>
</a>
		<a class="item" href="<?php echo $this->_tpl_vars['unread_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_UNREAD; ?>
</a>
		<div class="separator"></div>
		<?php $_from = $this->_tpl_vars['menumode_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
		<a class="item" href="<?php echo $this->_tpl_vars['menu']['link']; ?>
"><?php echo $this->_tpl_vars['menu']['title']; ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
	</td></tr></table>
	</div>
	<script type="text/javascript">document.getElementById("forumoption").onmouseout = closeMenu;</script>
	<div class="menubar"><a href="" onclick="openMenu(event, 'forumoption');return false;"><?php echo @_MD_FORUMOPTION; ?>
</a></div>

<?php elseif ($this->_tpl_vars['menumode'] == 2): ?>
	<div class="menu">
		<ul>
			<li>
				<div class="item"><strong><?php echo @_MD_FORUMOPTION; ?>
</strong></div>
				<ul>
				<li><table><tr><td>
	                <div class="item"><a href="<?php echo $this->_tpl_vars['mark_read']; ?>
"><?php echo @_MD_MARK_ALL_TOPICS; ?>
&nbsp;<?php echo @_MD_MARK_READ; ?>
</a></div>
	                <div class="item"><a href="<?php echo $this->_tpl_vars['mark_unread']; ?>
"><?php echo @_MD_MARK_ALL_TOPICS; ?>
&nbsp;<?php echo @_MD_MARK_UNREAD; ?>
</a></div>
					<div class="separator"></div>
	                <div class="item"><a href="<?php echo $this->_tpl_vars['post_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_ALLPOSTS; ?>
</a></div>
	                <div class="item"><a href="<?php echo $this->_tpl_vars['newpost_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_NEWPOSTS; ?>
</a></div>
	                <div class="item"><a href="<?php echo $this->_tpl_vars['all_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_ALL; ?>
</a></div>
	                <div class="item"><a href="<?php echo $this->_tpl_vars['digest_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_DIGEST; ?>
</a></div>
	                <div class="item"><a href="<?php echo $this->_tpl_vars['unreplied_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_UNREPLIED; ?>
</a></div>
					<div class="separator"></div>
					<?php $_from = $this->_tpl_vars['menumode_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
					<div class="item"><a href="<?php echo $this->_tpl_vars['menu']['link']; ?>
"><?php echo $this->_tpl_vars['menu']['title']; ?>
</a></div>
					<?php endforeach; endif; unset($_from); ?>
				</td></tr></table></li>
				</ul>
			</li>
		</ul>
	</div>
<?php endif; ?>
</div>
<div style="padding: 5px;float: right; text-align:right;">
<?php echo $this->_tpl_vars['forum_pagenav']; ?>

</div>
</div>
<br clear="all" />
<br clear="all" />

<table class="outer" cellpadding="6" cellspacing="1" border="0" width="100%" align="center">
	<tr class="head" align="left">
      <td  width="5%" colspan="2">&nbsp;</td>
      <td>&nbsp;<strong><a href="<?php echo $this->_tpl_vars['h_topic_link']; ?>
"><?php echo @_MD_TOPICS; ?>
</a></strong></td>
      <td width="10%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_poster_link']; ?>
"><?php echo @_MD_POSTER; ?>
</a></strong></td>
      <td width="10%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_publish_link']; ?>
"><?php echo @_MD_TOPICTIME; ?>
</a></strong></td>
      <td width="5%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_reply_link']; ?>
"><?php echo @_MD_REPLIES; ?>
</a></strong></td>
      <td width="5%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_views_link']; ?>
"><?php echo @_MD_VIEWS; ?>
</a></strong></td>
<?php if ($this->_tpl_vars['rating_enable']): ?>
      <td width="5%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_rating_link']; ?>
"><?php echo @_MD_RATINGS; ?>
</a></strong></td>
<?php endif; ?>
      <td width="15%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_date_link']; ?>
"><?php echo @_MD_DATE; ?>
</a></strong></td>
	</tr>

	<?php if ($this->_tpl_vars['sticky'] > 0): ?>
	<tr class="head">
		<td colspan="2">&nbsp;</td>
		<?php if ($this->_tpl_vars['rating_enable']): ?>
		<td colspan="7"><strong><?php echo @_MD_IMTOPICS; ?>
</strong></td>
		<?php else: ?>
		<td colspan="6"><strong><?php echo @_MD_IMTOPICS; ?>
</strong></td>
		<?php endif; ?>
	</tr>
	<?php endif; ?>

	<!-- start forum topic -->

	<?php $_from = $this->_tpl_vars['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['topic']):
        $this->_foreach['loop']['iteration']++;
?>

	<?php if ($this->_tpl_vars['topic']['stick'] && $this->_foreach['loop']['iteration'] == $this->_tpl_vars['sticky']+1): ?>
	<tr class="head">
		<td colspan="2">&nbsp;</td>
		<?php if ($this->_tpl_vars['rating_enable']): ?>
		<td colspan="7"><strong><?php echo @_MD_NOTIMTOPICS; ?>
</strong></td>
		<?php else: ?>
		<td colspan="6"><strong><?php echo @_MD_NOTIMTOPICS; ?>
</strong></td>
		<?php endif; ?>
	</tr>
	<?php endif; ?>

	<tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
		<td width="4%" align="center"><?php echo $this->_tpl_vars['topic']['topic_folder']; ?>
</td>
		<td width="4%" align="center"><?php echo $this->_tpl_vars['topic']['topic_icon']; ?>
</td>
		<td>&nbsp;<a href="<?php echo $this->_tpl_vars['topic']['topic_link']; ?>
" title="<?php echo $this->_tpl_vars['topic']['topic_excerpt']; ?>
">
			<?php echo $this->_tpl_vars['topic']['topic_title']; ?>
</a><?php echo $this->_tpl_vars['topic']['attachment']; ?>
 <?php echo $this->_tpl_vars['topic']['topic_page_jump']; ?>

		</td>
		<td align="center" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_poster']; ?>
</td>
		<td align="center" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_time']; ?>
</td>
		<td align="center" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_replies']; ?>
</td>
		<td align="center" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_views']; ?>
</td>
		<?php if ($this->_tpl_vars['rating_enable']): ?>
		<td align="center" valign="middle"><?php echo $this->_tpl_vars['topic']['rating_img']; ?>
</td>
		<?php endif; ?>
		<td align="right" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_last_posttime']; ?>
<br />
		<?php echo $this->_tpl_vars['topic']['topic_last_poster']; ?>
 <?php echo $this->_tpl_vars['topic']['topic_page_jump_icon']; ?>
</td>

	</tr>

	<?php endforeach; endif; unset($_from); ?>

	<!-- end forum topic -->

	<tr class="foot">
		<?php if ($this->_tpl_vars['rating_enable']): ?>
		<td colspan="9" align="center"><?php else: ?><td colspan="8" align="center"><?php endif; ?>
		<?php echo '<form method="get" action="viewforum.php"><strong>'; ?><?php echo @_MD_SORTEDBY; ?><?php echo '</strong>&nbsp;'; ?><?php echo $this->_tpl_vars['forum_selection_sort']; ?><?php echo '&nbsp;'; ?><?php echo $this->_tpl_vars['forum_selection_order']; ?><?php echo '&nbsp;'; ?><?php echo $this->_tpl_vars['forum_selection_since']; ?><?php echo '&nbsp;<input type="hidden" name="forum" id="forum" value="'; ?><?php echo $this->_tpl_vars['forum_id']; ?><?php echo '" /><input type="submit" name="refresh" value="'; ?><?php echo @_MD_GO; ?><?php echo '" /></form>'; ?>

		</td>
	</tr>
</table>
<!-- end forum main table -->

<br clear="all" />

<div style="float: left; text-align:left;">
<?php echo $this->_tpl_vars['forum_newtopic']; ?>
&nbsp;<?php echo $this->_tpl_vars['forum_addpoll']; ?>
&nbsp;<?php echo $this->_tpl_vars['forum_post_or_register']; ?>

</div>
<div style="float: right; text-align:right;">
<?php echo $this->_tpl_vars['forum_pagenav']; ?>

</div>

<br clear="all" />
<br clear="all" />

<div style="float: left; text-align: left;">
	<?php echo $this->_tpl_vars['img_newposts']; ?>
 = <?php echo @_MD_NEWPOSTS; ?>
 (<?php echo $this->_tpl_vars['img_hotnewposts']; ?>
 = <?php echo @_MD_MORETHAN; ?>
) <br />
	<?php echo $this->_tpl_vars['img_folder']; ?>
 = <?php echo @_MD_NONEWPOSTS; ?>
 (<?php echo $this->_tpl_vars['img_hotfolder']; ?>
 = <?php echo @_MD_MORETHAN2; ?>
) <br />
	<?php echo $this->_tpl_vars['img_locked']; ?>
 = <?php echo @_MD_TOPICLOCKED; ?>
 <br />
	<?php echo $this->_tpl_vars['img_sticky']; ?>
 = <?php echo @_MD_TOPICSTICKY; ?>
 <br />
	<?php echo $this->_tpl_vars['img_digest']; ?>
 = <?php echo @_MD_TOPICDIGEST; ?>
 <br />
	<?php echo $this->_tpl_vars['img_poll']; ?>
 = <?php echo @_MD_TOPICHASPOLL; ?>

</div>
<div style="float: right; text-align: right;">
<form action="search.php" method="get">
<input name="term" id="term" type="text" size="15" />
<input type="hidden" name="forum" id="forum" value="<?php echo $this->_tpl_vars['forum_id']; ?>
" />
<input type="hidden" name="sortby" id="sortby" value="p.post_time desc" />
<input type="hidden" name="since" id="since" value="<?php echo $this->_tpl_vars['forum_since']; ?>
" />
<input type="hidden" name="action" id="action" value="yes" />
<input type="hidden" name="searchin" id="searchin" value="both" />
<input type="submit" class="formButton" value="<?php echo @_MD_SEARCH; ?>
" /><br />
[<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/search.php"><?php echo @_MD_ADVSEARCH; ?>
</a>]
</form><br />
<?php echo $this->_tpl_vars['forum_jumpbox']; ?>

</div>
<br clear="all" />
<br clear="all" />

<div style="float: left;">
<?php $_from = $this->_tpl_vars['permission_table']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['perm']):
?>
<div><?php echo $this->_tpl_vars['perm']; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
</div>
<div style="float: right;">
<?php echo $this->_tpl_vars['rss_button']; ?>

</div>

<br clear="all" />
<br clear="all" />
<?php if ($this->_tpl_vars['online']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:xforum_online.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- end module contents -->