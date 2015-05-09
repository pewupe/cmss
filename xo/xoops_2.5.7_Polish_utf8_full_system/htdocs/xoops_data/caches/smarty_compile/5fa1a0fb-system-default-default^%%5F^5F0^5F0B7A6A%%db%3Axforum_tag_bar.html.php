<?php /* Smarty version 2.6.28, created on 2015-05-09 20:18:21
         compiled from db:xforum_tag_bar.html */ ?>
<?php if ($this->_tpl_vars['tagbar']): ?>
<strong><?php echo $this->_tpl_vars['tagbar']['title']; ?>
:</strong> <?php $_from = $this->_tpl_vars['tagbar']['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tag']):
?><?php echo $this->_tpl_vars['tagbar']['delimiter']; ?>
 <?php echo $this->_tpl_vars['tag']; ?>
&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>