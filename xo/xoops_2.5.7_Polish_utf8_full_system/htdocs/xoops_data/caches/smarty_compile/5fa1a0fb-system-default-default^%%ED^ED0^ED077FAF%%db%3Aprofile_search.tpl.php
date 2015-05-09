<?php /* Smarty version 2.6.28, created on 2015-03-30 17:31:35
         compiled from db:profile_search.tpl */ ?>
<?php $this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_breadcrumbs.tpl", 'smarty_include_vars' => array()));
 ?>
<div>( <?php echo $this->_tpl_vars['total_users']; ?>
 )</div>
<?php $this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_form.tpl", 'smarty_include_vars' => array('xoForm' => $this->_tpl_vars['searchform'])));
 ?>