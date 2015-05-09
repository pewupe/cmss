<?php /* Smarty version 2.6.28, created on 2015-05-09 20:18:21
         compiled from db:xforum_block_author.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:xforum_block_author.html', 10, false),)), $this); ?>
<table class="outer" cellspacing="1">

  <?php if ($this->_tpl_vars['block']['disp_mode'] == 0): ?>
  <tr>
    <th class="head" nowrap="nowrap"><?php echo @_MB_XFORUM_AUTHOR; ?>
</th>
    <th class="head" align="center" nowrap="nowrap"><?php echo @_MB_XFORUM_COUNT; ?>
</th>
  </tr>

  <?php $_from = $this->_tpl_vars['block']['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['uid'] => $this->_tpl_vars['author']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
    <td><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['uid']; ?>
"><?php echo $this->_tpl_vars['author']['name']; ?>
</a></td>
    <td align="center"><?php echo $this->_tpl_vars['author']['count']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>

  <?php elseif ($this->_tpl_vars['block']['disp_mode'] == 1): ?>

  <?php $_from = $this->_tpl_vars['block']['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['uid'] => $this->_tpl_vars['author']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
    <td><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['uid']; ?>
"><?php echo $this->_tpl_vars['author']['name']; ?>
</a> <?php echo $this->_tpl_vars['author']['count']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>

  <?php endif; ?>

</table>
<?php if ($this->_tpl_vars['block']['indexNav']): ?>
<div style="text-align:right; padding: 5px;">
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/"><?php echo @_MB_XFORUM_VSTFRMS; ?>
</a>
</div>
<?php endif; ?>