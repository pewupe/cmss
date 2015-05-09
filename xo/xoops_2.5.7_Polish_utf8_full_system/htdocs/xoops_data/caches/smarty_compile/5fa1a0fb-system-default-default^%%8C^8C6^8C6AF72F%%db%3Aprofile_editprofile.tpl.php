<?php /* Smarty version 2.6.28, created on 2015-03-30 17:31:36
         compiled from db:profile_editprofile.tpl */ ?>
<?php $this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_breadcrumbs.tpl", 'smarty_include_vars' => array()));
 ?>


<?php if ($this->_tpl_vars['stop']): ?>
    <div class='errorMsg txtleft'><?php echo $this->_tpl_vars['stop']; ?>
</div>
    <br class='clear'/>
<?php endif; ?>

<?php $this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_form.tpl", 'smarty_include_vars' => array('xoForm' => $this->_tpl_vars['userinfo'])));
 ?>