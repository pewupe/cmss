<?php /* Smarty version 2.6.28, created on 2015-05-09 20:18:21
         compiled from db:xforum_viewtopic_flat.html */ ?>

<div id="forum_header">
<div><?php echo $this->_tpl_vars['folder_topic']; ?>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/index.php"><?php echo $this->_tpl_vars['lang_forum_index']; ?>
</a></div>

<?php if ($this->_tpl_vars['parent_forum']): ?>
<!--<div>&nbsp;&nbsp;<?php echo $this->_tpl_vars['folder_topic']; ?>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewforum.php?forum=<?php echo $this->_tpl_vars['parent_forum']; ?>
"><?php echo $this->_tpl_vars['parent_name']; ?>
</a></div>-->
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
<div>&nbsp;&nbsp;<?php echo $this->_tpl_vars['post_content']; ?>
 <strong><?php echo $this->_tpl_vars['topic_title']; ?>
</strong></div>
</div>

<br clear="all" />

<?php if ($this->_tpl_vars['online']): ?>
<div style="padding: 5px;">
<?php echo @_MD_BROWSING; ?>
&nbsp;
<?php $_from = $this->_tpl_vars['online']['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
	<a href="<?php echo $this->_tpl_vars['user']['link']; ?>
">
		<?php if ($this->_tpl_vars['user']['color']): ?>
		<span style="color:<?php echo $this->_tpl_vars['user']['color']; ?>
"><?php echo $this->_tpl_vars['user']['uname']; ?>
</span>
		<?php else: ?>
		<?php echo $this->_tpl_vars['user']['uname']; ?>

		<?php endif; ?>
	</a>&nbsp;
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['online']['num_anonymous']): ?>&nbsp;<?php echo $this->_tpl_vars['online']['num_anonymous']; ?>
 <?php echo @_MD_ANONYMOUS_USERS; ?>

<?php endif; ?>
</div>
<br clear="all" />
<?php endif; ?>
	&nbsp;<script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script><style> html .fb_share_link { padding:2px 0 0 20px; height:16px; background:url(http://static.ak.facebook.com/images/share/facebook_share_icon.gif?12:26981) no-repeat top left; }</style><a href="http://www.facebook.com/share.php?u=<url>" onclick="return fbs_click()" target="_blank" class="fb_share_link">Share on Facebook</a>
	&nbsp;<script>digg_skin = 'compact';digg_window = 'new';</script><script src="http://digg.com/tools/diggthis.js" type="text/javascript"></script>
<br>
<?php if ($this->_tpl_vars['topic_poll']): ?>
<?php if ($this->_tpl_vars['topic_pollresult']): ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:xforum_poll_results.html", 'smarty_include_vars' => array('poll' => $this->_tpl_vars['poll'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:xforum_poll_view.html", 'smarty_include_vars' => array('poll' => $this->_tpl_vars['poll'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php endif; ?>
<?php endif; ?>

<br clear="all" />

<div style="padding: 5px;">
<span style="float: left; text-align:left;">
<a id="threadtop"></a><?php echo $this->_tpl_vars['down2']; ?>
&nbsp;<a href="#threadbottom"><?php echo @_MD_BOTTOM; ?>
</a>&nbsp;&nbsp;<?php echo $this->_tpl_vars['left']; ?>
&nbsp;<a href="viewtopic.php?viewmode=flat&amp;order=<?php echo $this->_tpl_vars['order_current']; ?>
&amp;topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;move=prev"><?php echo @_MD_PREVTOPIC; ?>
</a>&nbsp;&nbsp;<?php echo $this->_tpl_vars['right']; ?>
&nbsp;<a href="viewtopic.php?viewmode=flat&amp;order=<?php echo $this->_tpl_vars['order_current']; ?>
&amp;topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;move=next"><?php echo @_MD_NEXTTOPIC; ?>
</a>
</span>
<span style="float: right; text-align:right;">
<?php echo $this->_tpl_vars['forum_addpoll']; ?>
<?php echo $this->_tpl_vars['forum_reply']; ?>
&nbsp;<?php echo $this->_tpl_vars['forum_post_or_register']; ?>

</span>
</div>

<br clear="all" />

<div>
<div class="dropdown">
<?php if ($this->_tpl_vars['menumode'] == 0): ?>

	<select
		name="topicoption" id="topicoption"
		class="menu"
		onchange="if(this.options[this.selectedIndex].value.length >0 )	{ window.document.location=this.options[this.selectedIndex].value;}"
	>
		<option value=""><?php echo @_MD_TOPICOPTION; ?>
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
		<?php $_from = $this->_tpl_vars['admin_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
	    <option value="<?php echo $this->_tpl_vars['action']['link']; ?>
"><?php echo $this->_tpl_vars['action']['name']; ?>
</option>
    	<?php endforeach; endif; unset($_from); ?>
	   	<?php $_from = $this->_tpl_vars['adminpoll_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
	    <option value="<?php echo $this->_tpl_vars['action']['link']; ?>
"><?php echo $this->_tpl_vars['action']['name']; ?>
</option>
	    <?php endforeach; endif; unset($_from); ?>
		<!--<?php $_from = $this->_tpl_vars['menumode_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
		<option value="<?php echo $this->_tpl_vars['menu']['link']; ?>
"><?php echo $this->_tpl_vars['menu']['title']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>-->
	</select>

	<select
		name="viewmode" id="viewmode"
		class="menu"
		onchange="if(this.options[this.selectedIndex].value.length >0 )	{ window.document.location=this.options[this.selectedIndex].value;}"
	>
		<option value=""><?php echo @_MD_VIEWMODE; ?>
</option>
		<?php $_from = $this->_tpl_vars['viewmode_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['act']):
?>
		<option value="<?php echo $this->_tpl_vars['act']['link']; ?>
"><?php echo $this->_tpl_vars['act']['title']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
	</select>

<?php elseif ($this->_tpl_vars['menumode'] == 1): ?>
	<div id="topicoption" class="menu">
	<table><tr><td>
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
		<?php $_from = $this->_tpl_vars['admin_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
	    <a class="item" href="<?php echo $this->_tpl_vars['action']['link']; ?>
"><?php echo $this->_tpl_vars['action']['name']; ?>
</a>
    	<?php endforeach; endif; unset($_from); ?>
	   	<?php $_from = $this->_tpl_vars['adminpoll_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
	    <a class="item" href="<?php echo $this->_tpl_vars['action']['link']; ?>
"><?php echo $this->_tpl_vars['action']['name']; ?>
</a>
	    <?php endforeach; endif; unset($_from); ?>
		<!--<?php $_from = $this->_tpl_vars['menumode_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
		<a class="item" href="<?php echo $this->_tpl_vars['menu']['link']; ?>
"><?php echo $this->_tpl_vars['menu']['title']; ?>
</a>
		<?php endforeach; endif; unset($_from); ?>-->
	</td></tr></table>
	</div>
	<script type="text/javascript">document.getElementById("topicoption").onmouseout = closeMenu;</script>
	<div class="menubar"><a href="" onclick="openMenu(event, 'topicoption');return false;"><?php echo @_MD_TOPICOPTION; ?>
</a></div>

	<div id="view_mode" class="menu">
	<table><tr><td>
		<?php $_from = $this->_tpl_vars['viewmode_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['act']):
?>
		<a class="item" href="<?php echo $this->_tpl_vars['act']['link']; ?>
"><?php echo $this->_tpl_vars['act']['title']; ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
	</td></tr></table>
	</div>
	<script type="text/javascript">document.getElementById("view_mode").onmouseout = closeMenu;</script>
	<div class="menubar"><a href="" onclick="openMenu(event, 'view_mode');return false;"><?php echo @_MD_VIEWMODE; ?>
</a></div>

<?php elseif ($this->_tpl_vars['menumode'] == 2): ?>
	<div class="menu">
		<ul>
			<li>
				<div class="item"><strong><?php echo @_MD_VIEWMODE; ?>
</strong></div>
				<ul>
				<li><table><tr><td>
					<?php $_from = $this->_tpl_vars['viewmode_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['act']):
?>
					<div class="item"><a href="<?php echo $this->_tpl_vars['act']['link']; ?>
"><?php echo $this->_tpl_vars['act']['title']; ?>
</a></div>
					<?php endforeach; endif; unset($_from); ?>
				</td></tr></table></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="menu">
		<ul>
			<li>
				<div class="item"><strong><?php echo @_MD_TOPICOPTION; ?>
</strong></div>
				<ul>
				<li><table><tr><td>
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
                    <?php $_from = $this->_tpl_vars['admin_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
                    <a class="item" href="<?php echo $this->_tpl_vars['action']['link']; ?>
"><?php echo $this->_tpl_vars['action']['name']; ?>
</a>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php $_from = $this->_tpl_vars['adminpoll_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
                    <div class="item"><a href="<?php echo $this->_tpl_vars['action']['link']; ?>
"><?php echo $this->_tpl_vars['action']['name']; ?>
</a></div>
                    <?php endforeach; endif; unset($_from); ?>
					<div class="separator"></div>
					<!--<?php $_from = $this->_tpl_vars['menumode_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
                    <div class="item"><a href="<?php echo $this->_tpl_vars['action']['link']; ?>
"><?php echo $this->_tpl_vars['action']['name']; ?>
</a></div>
					<?php endforeach; endif; unset($_from); ?>-->
				</td></tr></table></li>
				</ul>
			</li>
		</ul>
	</div>

<?php endif; ?>
</div>
<div style="padding: 5px;float: right; text-align:right;">
<?php echo $this->_tpl_vars['forum_page_nav']; ?>

</div>
</div>
<br clear="all" />
<br clear="all" />

<?php $_from = $this->_tpl_vars['topic_posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic_post']):
?>
<?php if ($this->_tpl_vars['viewmode_compact']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:xforum_item.html", 'smarty_include_vars' => array('topic_post' => $this->_tpl_vars['topic_post'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:xforum_thread.html", 'smarty_include_vars' => array('topic_post' => $this->_tpl_vars['topic_post'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<br clear="all" />
<br clear="all" />
<?php endforeach; endif; unset($_from); ?>

<br clear="all" />
<div style="float: left; text-align:left;">
	<a id="threadbottom"></a><?php echo $this->_tpl_vars['up']; ?>
&nbsp;<a href="#threadtop"><?php echo @_MD_TOP; ?>
</a>&nbsp;&nbsp;<?php echo $this->_tpl_vars['left']; ?>
&nbsp;<a href="viewtopic.php?viewmode=flat&amp;order=<?php echo $this->_tpl_vars['order_current']; ?>
&amp;topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;move=prev"><?php echo @_MD_PREVTOPIC; ?>
</a>&nbsp;&nbsp;<?php echo $this->_tpl_vars['right']; ?>
&nbsp;<a href="viewtopic.php?viewmode=flat&amp;order=<?php echo $this->_tpl_vars['order_current']; ?>
&amp;topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;move=next"><?php echo @_MD_NEXTTOPIC; ?>
</a>
</div>
<div style="float: right; text-align:right;">
<?php echo $this->_tpl_vars['forum_page_nav']; ?>

</div>

<br clear="all" />

<div style="padding: 5px; float: left; text-align:left;">
<?php echo $this->_tpl_vars['forum_addpoll']; ?>
<?php echo $this->_tpl_vars['forum_reply']; ?>
&nbsp;<?php echo $this->_tpl_vars['forum_post_or_register']; ?>

</div>

<br clear="all" />
<br clear="all" />

<?php if ($this->_tpl_vars['quickreply']['show']): ?>
<div>
<a href="#threadbottom" onclick="ToggleBlock('qr', this)"> <?php echo $this->_tpl_vars['quickreply']['icon']; ?>
</a>
</div>
<br clear="all" />
<div id="qr" style="display: <?php echo $this->_tpl_vars['quickreply']['display']; ?>
">
<div><?php echo $this->_tpl_vars['quickreply']['form']; ?>
</div>
</div>
<br clear="all" />
<br clear="all" />
<?php endif; ?>

<div style="float: left; text-align: left;">
<?php $_from = $this->_tpl_vars['permission_table']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['perm']):
?>
<div><?php echo $this->_tpl_vars['perm']; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
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

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>