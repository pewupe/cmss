<?php /* Smarty version 2.6.28, created on 2015-04-27 22:13:12
         compiled from db:extgallery_block_list.html */ ?>
<div class="listphotos">
	<ul>
		<?php $_from = $this->_tpl_vars['block']['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['photo']):
?>
		<li>
			<a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><?php echo $this->_tpl_vars['photo']['photo_title']; ?>
</a>
			<?php if ($this->_tpl_vars['block']['hits']): ?> [ <?php echo $this->_tpl_vars['photo']['photo_hits']; ?>
 ] <?php endif; ?>
			<?php if ($this->_tpl_vars['block']['date']): ?> [ <?php echo $this->_tpl_vars['photo']['photo_date']; ?>
 ] <?php endif; ?>
			<?php if ($this->_tpl_vars['block']['rate']): ?> [ <?php echo $this->_tpl_vars['photo']['photo_rating']; ?>
 ] <?php endif; ?>
		</li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>