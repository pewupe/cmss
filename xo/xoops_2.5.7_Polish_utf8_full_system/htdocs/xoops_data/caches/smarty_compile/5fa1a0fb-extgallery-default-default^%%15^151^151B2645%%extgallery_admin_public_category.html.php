<?php /* Smarty version 2.6.28, created on 2015-04-27 22:20:30
         compiled from /var/www/html/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/templates/admin/extgallery_admin_public_category.html */ ?>
<?php if ($this->_tpl_vars['formselectcat']): ?>
<fieldset>
	<legend style="font-weight:bold; color:#990000;"><?php echo @_AM_EXTGALLERY_MODDELETE_PUBLICCAT; ?>
</legend>
		<fieldset>
			<legend style="font-weight:bold; color:#990000;"><?php echo @_AM_EXTGALLERY_INFORMATION; ?>
</legend>
			<div><?php echo @_AM_EXTGALLERY_MODDELETE_PUBLICCAT_INFO; ?>
</div>
		</fieldset>
	<div><?php echo $this->_tpl_vars['formselectcat']; ?>
</div>
</fieldset>
<?php endif; ?>

<?php if ($this->_tpl_vars['formcreatecat']): ?>
<fieldset>
	<legend style="font-weight:bold; color:#990000;"><?php echo @_AM_EXTGALLERY_ADD_PUBLIC_CAT; ?>
</legend>
		<fieldset>
			<legend style="font-weight:bold; color:#990000;"><?php echo @_AM_EXTGALLERY_INFORMATION; ?>
</legend>
			<div><?php echo @_AM_EXTGALLERY_ADD_PUBLIC_CAT_INFO; ?>
</div>
		</fieldset>
	<div><?php echo $this->_tpl_vars['formcreatecat']; ?>
</div>
</fieldset>
<?php endif; ?>

<?php if ($this->_tpl_vars['formmodifcat']): ?>
<fieldset>
<legend style="font-weight:bold; color:#990000;"><?php echo @_AM_EXTGALLERY_MOD_PUBLIC_CAT; ?>
</legend>
<div><?php echo $this->_tpl_vars['formmodifcat']; ?>
</div>
</fieldset>
<?php endif; ?>