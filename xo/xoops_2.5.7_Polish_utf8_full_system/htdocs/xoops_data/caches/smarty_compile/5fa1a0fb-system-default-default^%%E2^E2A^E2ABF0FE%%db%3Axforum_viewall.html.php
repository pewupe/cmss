<?php /* Smarty version 2.6.28, created on 2015-05-09 20:18:21
         compiled from db:xforum_viewall.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:xforum_viewall.html', 93, false),)), $this); ?>

<div id="forum_header">
<div><?php echo $this->_tpl_vars['folder_topic']; ?>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/index.php"><?php echo $this->_tpl_vars['forum_index_title']; ?>
</a></div>
<div>&nbsp;&nbsp;<?php echo $this->_tpl_vars['folder_topic']; ?>
<a href="<?php echo $this->_tpl_vars['current_link']; ?>
"><?php echo $this->_tpl_vars['current_type']; ?>
</a></div>
</div>

<br clear="all" />
<div>
<div class="dropdown">
<?php if ($this->_tpl_vars['menumode'] == 0): ?>

	<select
		name="topicoption" id="topicoption"
		class="menu"
		onchange="javascript: if(this.options[this.selectedIndex].value.length >0 )	{ window.document.location=this.options[this.selectedIndex].value;}"
	>
		<option value=""><?php echo @_MD_TOPICOPTION; ?>
</option>
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
	<div id="topicoption" class="menu">
	<table><tr><td>
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
	<script type="text/javascript">document.getElementById("topicoption").onmouseout = closeMenu;</script>
	<div class="menubar"><a href="" onclick="openMenu(event, 'topicoption');return false;"><?php echo @_MD_TOPICOPTION; ?>
</a></div>

<?php elseif ($this->_tpl_vars['menumode'] == 2): ?>
	<div class="menu">
		<ul>
			<li>
				<div class="item"><strong><?php echo @_MD_TOPICOPTION; ?>
</strong></div>
				<ul>
				<li><table><tr><td>
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
	                <div class="item"><a href="<?php echo $this->_tpl_vars['unread_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_UNREAD; ?>
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
		<th colspan="3" align="center"><strong><a href="<?php echo $this->_tpl_vars['h_topic_link']; ?>
"><?php echo @_MD_TOPICS; ?>
</a></strong></th>
		<th width="15%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_forum_link']; ?>
"><?php echo @_MD_FORUM; ?>
</a></strong></th>
		<th width="5%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_reply_link']; ?>
"><?php echo @_MD_REPLIES; ?>
</a></strong></th>
		<th width="10%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_poster_link']; ?>
"><?php echo @_MD_POSTER; ?>
</a></strong></th>
		<th width="5%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_views_link']; ?>
"><?php echo @_MD_VIEWS; ?>
</a></strong></th>
		<th width="15%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_date_link']; ?>
"><?php echo @_MD_DATE; ?>
</a></strong></th>
	</tr>

  <!-- start forum topic -->
<?php $_from = $this->_tpl_vars['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['topic']):
        $this->_foreach['loop']['iteration']++;
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
    <td width="4%" align="center"><?php echo $this->_tpl_vars['topic']['topic_folder']; ?>
</td>
    <td width="4%" align="center"><?php echo $this->_tpl_vars['topic']['topic_icon']; ?>
</td>
    <td>&nbsp;<a href="<?php echo $this->_tpl_vars['topic']['topic_link']; ?>
">
		<?php if ($this->_tpl_vars['topic']['allow_prefix'] && $this->_tpl_vars['topic']['topic_subject']): ?>
		<?php echo $this->_tpl_vars['topic']['topic_subject']; ?>

		<?php endif; ?>
		<?php echo $this->_tpl_vars['topic']['topic_title']; ?>
</a><?php echo $this->_tpl_vars['topic']['attachment']; ?>
 <?php echo $this->_tpl_vars['topic']['topic_page_jump']; ?>

	</td>
    <td align="left" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_forum_link']; ?>
</td>
    <td align="center" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_replies']; ?>
</td>
    <td align="center" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_poster']; ?>
</td>
    <td align="center" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_views']; ?>
</td>
    <td align="right" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_last_posttime']; ?>
<br />
		<?php echo @_MD_BY; ?>
 <?php echo $this->_tpl_vars['topic']['topic_last_poster']; ?>

	</td>
  </tr>
<?php endforeach; endif; unset($_from); ?>
  <!-- end forum topic -->

  <tr class="foot">
    <td colspan="8" align="center"> <?php echo '<form method="get" action="viewall.php"><strong>'; ?><?php echo @_MD_SORTEDBY; ?><?php echo '</strong>&nbsp;'; ?><?php echo $this->_tpl_vars['forum_selection_sort']; ?><?php echo '&nbsp;'; ?><?php echo $this->_tpl_vars['forum_selection_order']; ?><?php echo '&nbsp;'; ?><?php echo $this->_tpl_vars['forum_selection_since']; ?><?php echo '&nbsp;<input type="hidden" name="forum" value="'; ?><?php echo $this->_tpl_vars['forum_id']; ?><?php echo '" /><input type="submit" name="refresh" value="'; ?><?php echo @_MD_GO; ?><?php echo '" /></form>'; ?>

	</td>
  </tr>
</table>
<!-- end forum main table -->

<br clear="all" />

<div style="padding: 5px;float: right; text-align:right;">
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