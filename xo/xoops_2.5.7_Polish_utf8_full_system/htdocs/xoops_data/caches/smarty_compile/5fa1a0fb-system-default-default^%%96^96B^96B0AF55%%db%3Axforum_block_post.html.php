<?php /* Smarty version 2.6.28, created on 2015-05-09 20:18:21
         compiled from db:xforum_block_post.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:xforum_block_post.html', 11, false),)), $this); ?>
<table class="outer" cellspacing="1">

  <?php if ($this->_tpl_vars['block']['disp_mode'] == 0): ?>
  <tr>
    <th class="head" nowrap="nowrap"><?php echo @_MB_XFORUM_FORUM; ?>
</th>
    <th class="head" nowrap="nowrap"><?php echo @_MB_XFORUM_TITLE; ?>
</th>
    <th class="head" align="center" nowrap="nowrap"><?php echo @_MB_XFORUM_AUTHOR; ?>
</th>
  </tr>

  <?php $_from = $this->_tpl_vars['block']['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
    <td><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewforum.php?forum=<?php echo $this->_tpl_vars['topic']['forum_id']; ?>
"><?php echo $this->_tpl_vars['topic']['forum_name']; ?>
</a></td>
    <td><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewtopic.php?forum=<?php echo $this->_tpl_vars['topic']['forum_id']; ?>
&amp;post_id=<?php echo $this->_tpl_vars['topic']['post_id']; ?>
#forumpost<?php echo $this->_tpl_vars['topic']['post_id']; ?>
"><?php echo $this->_tpl_vars['topic']['title']; ?>
</a></td>
    <td align="right"><?php echo $this->_tpl_vars['topic']['time']; ?>
<br /><?php echo $this->_tpl_vars['topic']['topic_poster']; ?>
&nbsp;<?php echo $this->_tpl_vars['topic']['jump_post']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>

  <?php elseif ($this->_tpl_vars['block']['disp_mode'] == 1): ?>

  <tr>
    <th class="head" nowrap="nowrap"><?php echo @_MB_XFORUM_TOPIC; ?>
</th>
    <th class="head" align="center" nowrap="nowrap"><?php echo @_MB_XFORUM_AUTHOR; ?>
</th>
  </tr>

  <?php $_from = $this->_tpl_vars['block']['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
    <td><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewtopic.php?forum=<?php echo $this->_tpl_vars['topic']['forum_id']; ?>
&amp;post_id=<?php echo $this->_tpl_vars['topic']['post_id']; ?>
#forumpost<?php echo $this->_tpl_vars['topic']['post_id']; ?>
"><?php echo $this->_tpl_vars['topic']['title']; ?>
</a></td>
    <td align="right"><?php echo $this->_tpl_vars['topic']['time']; ?>
<br /><?php echo $this->_tpl_vars['topic']['topic_poster']; ?>
&nbsp;<?php echo $this->_tpl_vars['topic']['jump_post']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>

  <?php elseif ($this->_tpl_vars['block']['disp_mode'] == 2): ?>

  <?php $_from = $this->_tpl_vars['block']['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
    <td><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewtopic.php?forum=<?php echo $this->_tpl_vars['topic']['forum_id']; ?>
&amp;post_id=<?php echo $this->_tpl_vars['topic']['post_id']; ?>
#forumpost<?php echo $this->_tpl_vars['topic']['post_id']; ?>
"><?php echo $this->_tpl_vars['topic']['title']; ?>
</a></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>

  <?php else: ?>
  <tr><td>
	<?php $_from = $this->_tpl_vars['block']['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
	<div><strong><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewtopic.php?forum=<?php echo $this->_tpl_vars['topic']['forum_id']; ?>
&amp;post_id=<?php echo $this->_tpl_vars['topic']['post_id']; ?>
#forumpost<?php echo $this->_tpl_vars['topic']['post_id']; ?>
"><?php echo $this->_tpl_vars['topic']['title']; ?>
</a></strong></div>
	<div>
	<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewforum.php?forum=<?php echo $this->_tpl_vars['topic']['forum_id']; ?>
"><?php echo $this->_tpl_vars['topic']['forum_name']; ?>
</a> | 
	<?php echo $this->_tpl_vars['topic']['topic_poster']; ?>
 | <?php echo $this->_tpl_vars['topic']['time']; ?>

	</div>
	<div style="padding: 5px 0px 10px 0px;"><?php echo $this->_tpl_vars['topic']['post_text']; ?>
</div>
	<?php endforeach; endif; unset($_from); ?>
  </td></tr>
  <?php endif; ?>

</table>

<?php if ($this->_tpl_vars['block']['indexNav']): ?>
<div style="text-align:right; padding: 5px;">
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewpost.php"><?php echo @_MB_XFORUM_ALLPOSTS; ?>
</a> |
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/"><?php echo @_MB_XFORUM_VSTFRMS; ?>
</a>
</div>
<?php endif; ?>