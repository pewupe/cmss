<?php /* Smarty version 2.6.28, created on 2015-03-30 17:33:24
         compiled from db:system_block_user.html */ ?>
<div id="usermenu">
  <?php if ($this->_tpl_vars['xoops_isadmin']): ?>
	<a class="menuTop" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/admin.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_adminmenu']; ?>
"><?php echo $this->_tpl_vars['block']['lang_adminmenu']; ?>
</a>
	<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/user.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
"><?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
</a>
  <?php else: ?>
	<a class="menuTop" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/user.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
"><?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
</a>
  <?php endif; ?>
  <a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/edituser.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_editaccount']; ?>
"><?php echo $this->_tpl_vars['block']['lang_editaccount']; ?>
</a>
  <a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/notifications.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_notifications']; ?>
"><?php echo $this->_tpl_vars['block']['lang_notifications']; ?>
</a>
  <?php if ($this->_tpl_vars['block']['new_messages'] > 0): ?>
	<a class="highlight" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/viewpmsg.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
"><?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
 (<strong><?php echo $this->_tpl_vars['block']['new_messages']; ?>
</strong>)</a>
  <?php else: ?>
	<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/viewpmsg.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
"><?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
</a>
  <?php endif; ?>
  <a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/user.php?op=logout'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_logout']; ?>
"><?php echo $this->_tpl_vars['block']['lang_logout']; ?>
</a>
</div>