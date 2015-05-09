<?php /* Smarty version 2.6.28, created on 2015-05-09 20:18:20
         compiled from db:xforum_thread.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:xforum_thread.html', 63, false),)), $this); ?>
<a id="forumpost<?php echo $this->_tpl_vars['topic_post']['post_id']; ?>
"></a>
<table class="outer" cellpadding="0" cellspacing="0" border="0" width="100%" align="center" style="border-bottom-width: 0px;">

  <tr>
       <th width="20%" align="left">
		<div class="dropdown">
		<?php if ($this->_tpl_vars['menumode'] == 0): ?>

			<select
				name="poster" id="poster"
				class="menu"
				onchange="if(this.options[this.selectedIndex].value.length >0 )	{ window.document.location=this.options[this.selectedIndex].value;}"
			>
				<option value=""><?php echo $this->_tpl_vars['topic_post']['poster']['name']; ?>
</option>
				<?php $_from = $this->_tpl_vars['topic_post']['poster']['userbar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bar']):
?>
				<?php if ($this->_tpl_vars['bar']): ?>
				<option value="<?php echo $this->_tpl_vars['bar']['link']; ?>
"><?php echo $this->_tpl_vars['bar']['name']; ?>
</option>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</select>

		<?php elseif ($this->_tpl_vars['menumode'] == 1): ?>
			<div id="poster<?php echo $this->_tpl_vars['topic_post']['post_id']; ?>
" class="userbar">
			<table><tr><td>
				<?php $_from = $this->_tpl_vars['topic_post']['poster']['userbar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bar']):
?>
				<?php if ($this->_tpl_vars['bar']): ?>
				<a class="item" href="<?php echo $this->_tpl_vars['bar']['link']; ?>
"><?php echo $this->_tpl_vars['bar']['name']; ?>
</a>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</td></tr></table>
			</div>
			<script type="text/javascript">document.getElementById("poster<?php echo $this->_tpl_vars['topic_post']['post_id']; ?>
").onmouseout = closeMenu;</script>
			<div class="menubar"><a href="" onclick="openMenu(event, 'poster<?php echo $this->_tpl_vars['topic_post']['post_id']; ?>
');return false;"><?php echo $this->_tpl_vars['topic_post']['poster']['name']; ?>
</a></div>

		<?php elseif ($this->_tpl_vars['menumode'] == 2): ?>
			<div class="userbar">
				<ul>
					<li>
						<div class="item"><?php echo $this->_tpl_vars['topic_post']['poster']['name']; ?>
</div>
						<ul>
						<li><table><tr><td>
							<?php $_from = $this->_tpl_vars['topic_post']['poster']['userbar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bar']):
?>
							<?php if ($this->_tpl_vars['bar']): ?>
							<div class="item"><a href="<?php echo $this->_tpl_vars['bar']['link']; ?>
"><?php echo $this->_tpl_vars['bar']['name']; ?>
</a></div>
							<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						</td></tr></table></li>
						</ul>
					</li>
				</ul>
			</div>
		<?php endif; ?>
		</div>
   	</th>

    <th width="75%" align="left"><div class="comTitle"><?php echo $this->_tpl_vars['topic_post']['post_title']; ?>
</div></th>
    <th align="right"><div class="comTitle" style="float: right;"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewtopic.php?post_id=<?php echo $this->_tpl_vars['topic_post']['post_id']; ?>
#forumpost<?php echo $this->_tpl_vars['topic_post']['post_id']; ?>
">#<?php echo $this->_tpl_vars['topic_post']['post_no']; ?>
</a></div></th>
  </tr>

  <?php if ($this->_tpl_vars['topic_post']['visiblefields']): ?>
   <?php $_from = $this->_tpl_vars['topic_post']['visiblefields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
   <?php if ($this->_tpl_vars['data']['value']): ?>
   <tr style="<?php echo smarty_function_cycle(array('value' => "even,odd"), $this);?>
">
       <td><strong><?php echo $this->_tpl_vars['data']['title']; ?>
</strong></td>
       <td colspan="2"><?php echo $this->_tpl_vars['data']['value']; ?>
</td>
   </tr>
   <?php endif; ?>
   <?php endforeach; endif; unset($_from); ?>
  <?php endif; ?>   
  
  <tr>
  	<td width="190px" class="odd" rowspan="2" valign="top">
  	<?php if ($this->_tpl_vars['topic_post']['poster']['uid'] != 0): ?>
  	<div class="comUserRankText"><?php echo $this->_tpl_vars['topic_post']['poster']['rank']['title']; ?>
<br /><?php echo $this->_tpl_vars['topic_post']['poster']['rank']['image']; ?>
</div>
  	<?php if ($this->_tpl_vars['topic_post']['poster']['avatar']): ?>
  	<img class="comUserImg" src="<?php echo $this->_tpl_vars['xoops_upload_url']; ?>
/<?php echo $this->_tpl_vars['topic_post']['poster']['avatar']; ?>
" alt="" />
  	<?php endif; ?>
  	<div class="comUserStat"><span class="comUserStatCaption"><?php echo @_MD_JOINED; ?>
:</span><br /><?php echo $this->_tpl_vars['topic_post']['poster']['regdate']; ?>
</div>
  	<?php if ($this->_tpl_vars['topic_post']['poster']['from']): ?>
  	<div class="comUserStat"><span class="comUserStatCaption"><?php echo @_MD_FROM; ?>
</span> <?php echo $this->_tpl_vars['topic_post']['poster']['from']; ?>
</div>
  	<?php endif; ?>
	<?php if ($this->_tpl_vars['topic_post']['poster']['groups']): ?>
  	<div class="comUserStat"> <span class="comUserStatCaption"><?php echo @_MD_GROUP; ?>
</span>
  	<?php $_from = $this->_tpl_vars['topic_post']['poster']['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?> <br /><?php echo $this->_tpl_vars['group']; ?>
<?php endforeach; endif; unset($_from); ?>
  	</div>
	<?php endif; ?>
  	<div class="comUserStat"><span class="comUserStatCaption"><?php echo @_MD_POSTS; ?>
:</span> <?php echo $this->_tpl_vars['topic_post']['poster']['posts']; ?>
</div>
  	<?php if ($this->_tpl_vars['topic_post']['poster']['level']): ?>
  	<div class="comUserStat"><?php echo $this->_tpl_vars['topic_post']['poster']['level']; ?>
</div>
  	<?php endif; ?>
  	<?php if ($this->_tpl_vars['topic_post']['poster']['status']): ?>
  	<div class="comUserStatus"><?php echo $this->_tpl_vars['topic_post']['poster']['status']; ?>
</div>
  	<?php endif; ?>
	<?php else: ?>
   	<div class="comUserRankText"><?php echo $this->_tpl_vars['anonymous_prefix']; ?>
<?php echo $this->_tpl_vars['topic_post']['poster']['name']; ?>
</div>
	<?php endif; ?>
	</td>

    <td colspan="2" class="odd">
    <div class="comText"><?php echo $this->_tpl_vars['topic_post']['post_text']; ?>
</div>
	<?php if ($this->_tpl_vars['topic_post']['post_attachment']): ?>
	<div class="comText"><?php echo $this->_tpl_vars['topic_post']['post_attachment']; ?>
</div>
	<?php endif; ?>
    <br clear="all" />
    <div style="float: right; padding: 5px; margin-top: 10px;">
	<?php if ($this->_tpl_vars['topic_post']['poster_ip']): ?>
	IP: <a href="http://www.whois.sc/<?php echo $this->_tpl_vars['topic_post']['poster_ip']; ?>
" target="_blank"><?php echo $this->_tpl_vars['topic_post']['poster_ip']; ?>
</a> |
	<?php endif; ?>
    <?php echo @_MD_POSTEDON; ?>
<?php echo $this->_tpl_vars['topic_post']['post_date']; ?>
</div>
	<?php if ($this->_tpl_vars['topic_post']['post_edit']): ?>
    <br clear="all" />
	<div style="float: right; padding: 5px; margin-top: 10px;"><small><?php echo $this->_tpl_vars['topic_post']['post_edit']; ?>
</small></div>
	<?php endif; ?>
	</td>
  </tr>

  <tr>
    <td colspan="2" class="odd" valign="bottom">
	<?php if ($this->_tpl_vars['topic_post']['post_signature']): ?>
    <div class="signature">
	_________________<br />
	<?php echo $this->_tpl_vars['topic_post']['post_signature']; ?>

	</div>
	<?php endif; ?>
	</td>
  </tr>

  <tr>
    <td width="20%" class="foot">
	<?php $_from = $this->_tpl_vars['topic_post']['thread_action']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['abtn']):
?> <a href="<?php echo $this->_tpl_vars['abtn']['link']; ?>
&amp;post_id=<?php echo $this->_tpl_vars['topic_post']['post_id']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['abtn']['name']; ?>
"> <?php echo $this->_tpl_vars['abtn']['image']; ?>
</a> <?php endforeach; endif; unset($_from); ?>
	</td>
    <td colspan="2" class="foot"><div align="right">
    <?php $_from = $this->_tpl_vars['topic_post']['thread_buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['btn']):
?> <a href="<?php echo $this->_tpl_vars['btn']['link']; ?>
&amp;post_id=<?php echo $this->_tpl_vars['topic_post']['post_id']; ?>
" title="<?php echo $this->_tpl_vars['btn']['name']; ?>
"> <?php echo $this->_tpl_vars['btn']['image']; ?>
</a> <?php endforeach; endif; unset($_from); ?>
    <a href="#threadtop" title="<?php echo @_MD_UP; ?>
"> <?php echo $this->_tpl_vars['p_up']; ?>
</a>
    </div>
    </td>
  </tr>
  <tr>
  	<td colspan="3" class="foot"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:xforum_tag_bar.html", 'smarty_include_vars' => array('tagbar' => $this->_tpl_vars['topic_post']['tagbar'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
  </tr>
</table>