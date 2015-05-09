<?php /* Smarty version 2.6.28, created on 2015-04-27 22:29:13
         compiled from /var/www/html/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/templates/admin/extgallery_admin_album.html */ ?>
<?php if ($this->_tpl_vars['displayalbum']): ?>
	<fieldset>
		<legend style="font-weight:bold; color:#990000;"><?php echo @_AM_EXTGALLERY_ALBUM_CONF; ?>
</legend>
		<div class="green bold"><?php echo @_AM_EXTGALLERY_ALBUM_ENABLE; ?>
</div>
	</fieldset>
<?php else: ?>
	<fieldset>
		<legend style="font-weight:bold; color:#990000;"><?php echo @_AM_EXTGALLERY_ALBUM_CONF; ?>
</legend>
		<div class="red bold"><?php echo @_AM_EXTGALLERY_ALBUM_NOT_ENABLE; ?>
</div>
	</fieldset>
<?php endif; ?>

<fieldset>
	<legend style="font-weight:bold; color:#990000;"><?php echo @_AM_EXTGALLERY_OVERLAY_CONF; ?>
</legend>
	<?php echo $this->_tpl_vars['overlayform']; ?>

</fieldset>

<fieldset>
	<legend style="font-weight:bold; color:#990000;"><?php echo @_AM_EXTGALLERY_TOOLTIP_CONF; ?>
</legend>
	<?php echo $this->_tpl_vars['tooltipform']; ?>

</fieldset>

<fieldset>
	<legend style="font-weight:bold; color:#990000;"><?php echo @_AM_EXTGALLERY_FANCYBOX_CONF; ?>
</legend>
	<?php echo $this->_tpl_vars['fancyboxform']; ?>

</fieldset>

<fieldset>
	<legend style="font-weight:bold; color:#990000;"><?php echo @_AM_EXTGALLERY_PRETTPHOTO_CONF; ?>
</legend>
	<?php echo $this->_tpl_vars['prettyphotoform']; ?>

</fieldset>