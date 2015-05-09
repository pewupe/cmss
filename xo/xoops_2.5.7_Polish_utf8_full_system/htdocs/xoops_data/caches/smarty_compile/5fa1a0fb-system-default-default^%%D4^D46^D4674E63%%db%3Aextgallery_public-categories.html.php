<?php /* Smarty version 2.6.28, created on 2015-04-27 22:13:10
         compiled from db:extgallery_public-categories.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:extgallery_public-categories.html', 16, false),)), $this); ?>
<div class="extgallery">
	<a title="<?php echo $this->_tpl_vars['extgalleryName']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>"><?php echo $this->_tpl_vars['extgalleryName']; ?>
</a>
	<?php $this->_foreach['breadcrumb'] = array('total' => count($this->_tpl_vars['catPath']), 'iteration' => 0);
if ($this->_foreach['breadcrumb']['total'] > 0):
    foreach ($this->_tpl_vars['catPath'] as $this->_tpl_vars['node']):
        $this->_foreach['breadcrumb']['iteration']++;
 ?> 
	  <img src="images/breadcrumb-link.gif" alt="BreadCrumb" /> 
	  <a title="<?php echo $this->_tpl_vars['node']['cat_name']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-categories.php?id=<?php echo $this->_tpl_vars['node']['cat_id']; ?>
"><?php echo $this->_tpl_vars['node']['cat_name']; ?>
</a>
	<?php endforeach; endif; unset($_from); ?> 
	<img src="images/breadcrumb-link.gif" alt="BreadCrumb" /> <?php echo $this->_tpl_vars['cat']['cat_name']; ?>


	<table class="outer">
		<tr>
			<th><?php echo $this->_tpl_vars['lang']['categoriesAlbums']; ?>
</th>
			<th class="txtcenter"><?php echo $this->_tpl_vars['lang']['nbAlbums']; ?>
</th>
			<th class="txtcenter"><?php echo $this->_tpl_vars['lang']['nbPhotos']; ?>
</th>
		</tr>
		<?php if (count($this->_tpl_vars['catChild'])):
    foreach ($this->_tpl_vars['catChild'] as $this->_tpl_vars['child']):
 ?>
		<tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
			<?php if ($this->_tpl_vars['child']['cat_nb_album'] == 0): ?>
				<td colspan="2">
			<?php else: ?>
				<td>
			<?php endif; ?>

			<!-- Category/album image -->
			<!-- Si l'option d'affichage de la photo de la categorie est active, alors -->
			<?php if ($this->_tpl_vars['disp_cat_img'] == 1): ?>
				<?php if ($this->_tpl_vars['child']['cat_imgurl'] != ""): ?>
					<div class="catThumb">
						<?php if ($this->_tpl_vars['child']['cat_isalbum']): ?>
							<a title="<?php echo $this->_tpl_vars['child']['cat_name']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-<?php echo $this->_tpl_vars['display_type']; ?>
.php?id=<?php echo $this->_tpl_vars['child']['cat_id']; ?>
"><img src="<?php echo $this->_tpl_vars['child']['cat_imgurl']; ?>
" alt="<?php echo $this->_tpl_vars['child']['cat_name']; ?>
" title="" width="100" /></a>
						<?php else: ?>
							<a title="<?php echo $this->_tpl_vars['child']['cat_name']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-categories.php?id=<?php echo $this->_tpl_vars['child']['cat_id']; ?>
"><img src="<?php echo $this->_tpl_vars['child']['cat_imgurl']; ?>
" alt="<?php echo $this->_tpl_vars['child']['cat_name']; ?>
" title="" width="100" /></a>
						<?php endif; ?>
					</div>
				<?php else: ?>
					<?php if ($this->_tpl_vars['child']['photo']): ?>
						<div class="catThumb">
							<?php if ($this->_tpl_vars['child']['cat_isalbum']): ?>
								<a title="<?php echo $this->_tpl_vars['child']['cat_name']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-<?php echo $this->_tpl_vars['display_type']; ?>
.php?id=<?php echo $this->_tpl_vars['child']['cat_id']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['child']['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['child']['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['child']['photo']['photo_title']; ?>
" /></a>
							<?php else: ?>
								<a title="<?php echo $this->_tpl_vars['child']['cat_name']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-categories.php?id=<?php echo $this->_tpl_vars['child']['cat_id']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['child']['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['child']['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['child']['photo']['photo_title']; ?>
" /></a>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			<?php else: ?>
				<?php if ($this->_tpl_vars['child']['photo']): ?>
					<div class="catThumb">
						<?php if ($this->_tpl_vars['child']['cat_isalbum']): ?>
							<a title="<?php echo $this->_tpl_vars['child']['cat_name']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-<?php echo $this->_tpl_vars['display_type']; ?>
.php?id=<?php echo $this->_tpl_vars['child']['cat_id']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['child']['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['child']['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['child']['photo']['photo_title']; ?>
" /></a>
						<?php else: ?>
							<a title="<?php echo $this->_tpl_vars['child']['cat_name']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-categories.php?id=<?php echo $this->_tpl_vars['child']['cat_id']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['child']['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['child']['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['child']['photo']['photo_title']; ?>
" /></a>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			<?php endif; ?>
			
			<!-- Fin de la modif -->
			<?php if ($this->_tpl_vars['child']['cat_isalbum']): ?>
				<h2><a title="<?php echo $this->_tpl_vars['child']['cat_name']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-<?php echo $this->_tpl_vars['display_type']; ?>
.php?id=<?php echo $this->_tpl_vars['child']['cat_id']; ?>
"><?php echo $this->_tpl_vars['child']['cat_name']; ?>
</a></h2><br /><h3><?php echo $this->_tpl_vars['child']['cat_desc']; ?>
</h3></td>
			<?php else: ?>
				<h2><a title="<?php echo $this->_tpl_vars['child']['cat_name']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-categories.php?id=<?php echo $this->_tpl_vars['child']['cat_id']; ?>
"><?php echo $this->_tpl_vars['child']['cat_name']; ?>
</a></h2><br /><h3><?php echo $this->_tpl_vars['child']['cat_desc']; ?>
</h3></td>
			<?php endif; ?>

			<?php if ($this->_tpl_vars['child']['cat_nb_album'] != 0): ?>
			<td class="txtcenter"><?php echo $this->_tpl_vars['child']['cat_nb_album']; ?>
</td>
			<?php endif; ?>
			<td class="txtcenter"><?php echo $this->_tpl_vars['child']['cat_nb_photo']; ?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>

	<?php if ($this->_tpl_vars['show_rss']): ?>
	<div id="rss">
		<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/public-rss.php'; ?>" title="<?php echo @_MD_EXTGALLERY_RSS; ?>
">
			<img src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/feed.png'; ?>" alt="<?php echo @_MD_EXTGALLERY_RSS; ?>
" />
		</a>
	</div>
	<?php endif; ?>
	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>