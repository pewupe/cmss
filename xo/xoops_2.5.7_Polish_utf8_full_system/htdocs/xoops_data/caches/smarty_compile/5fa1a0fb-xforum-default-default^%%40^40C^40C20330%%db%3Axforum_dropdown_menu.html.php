<?php /* Smarty version 2.6.28, created on 2015-05-09 20:18:46
         compiled from db:xforum_dropdown_menu.html */ ?>
<div class="dropdown">
<?php if ($this->_tpl_vars['menumode'] == 0): ?>

	<select
		name="mainoption" id="mainoption"
		class="menu"
		onchange="if(this.options[this.selectedIndex].value.length >0 )	{ window.document.location=this.options[this.selectedIndex].value;}"
	>
		<option value=""><?php echo @_MD_MAINFORUMOPT; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['mark_read']; ?>
"><?php echo @_MD_MARK_ALL_FORUMS; ?>
&nbsp;<?php echo @_MD_MARK_READ; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['mark_unread']; ?>
"><?php echo @_MD_MARK_ALL_FORUMS; ?>
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
		<?php if ($this->_tpl_vars['forum_index_cpanel']): ?>
		<option value="">--------</option>
		<option value="<?php echo $this->_tpl_vars['forum_index_cpanel']['link']; ?>
"><?php echo $this->_tpl_vars['forum_index_cpanel']['name']; ?>
</option>
		<?php endif; ?>
	</select>

<?php elseif ($this->_tpl_vars['menumode'] == 1): ?>
	<div id="mainoption" class="menu">
	<table><tr><td>
		<a class="item" href="<?php echo $this->_tpl_vars['mark_read']; ?>
"><?php echo @_MD_MARK_ALL_FORUMS; ?>
&nbsp;<?php echo @_MD_MARK_READ; ?>
</a>
		<a class="item" href="<?php echo $this->_tpl_vars['mark_unread']; ?>
"><?php echo @_MD_MARK_ALL_FORUMS; ?>
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
		<?php if ($this->_tpl_vars['forum_index_cpanel']): ?>
		<div class="separator"></div>
		<a class="item" href="<?php echo $this->_tpl_vars['forum_index_cpanel']['link']; ?>
"><?php echo $this->_tpl_vars['forum_index_cpanel']['name']; ?>
</a>
		<?php endif; ?>
	</td></tr></table>
	</div>
	<script type="text/javascript">document.getElementById("mainoption").onmouseout = closeMenu;</script>
	<div class="menubar"><a href="" onclick="openMenu(event, 'mainoption');return false;"><?php echo @_MD_MAINFORUMOPT; ?>
</a></div>

<?php elseif ($this->_tpl_vars['menumode'] == 2): ?>

	<div class="menu">
		<ul>
			<li>
				<div class="item"><strong><?php echo @_MD_MAINFORUMOPT; ?>
</strong></div>
				<ul>
				<li><table><tr><td>
					<div class="item"><a href="<?php echo $this->_tpl_vars['mark_read']; ?>
"><?php echo @_MD_MARK_ALL_FORUMS; ?>
&nbsp;<?php echo @_MD_MARK_READ; ?>
</a></div>
					<div class="item"><a href="<?php echo $this->_tpl_vars['mark_unread']; ?>
"><?php echo @_MD_MARK_ALL_FORUMS; ?>
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
					<?php if ($this->_tpl_vars['forum_index_cpanel']): ?>
					<div class="separator"></div>
					<div class="item"><a href="<?php echo $this->_tpl_vars['forum_index_cpanel']['link']; ?>
"><?php echo $this->_tpl_vars['forum_index_cpanel']['name']; ?>
</a></div>
					<?php endif; ?>
				</td></tr></table></li>
				</ul>
			</li>
		</ul>
	</div>
<?php endif; ?>
</div>
<br clear="all" />
<br clear="all" />