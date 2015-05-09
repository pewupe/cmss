<?php /* Smarty version 2.6.28, created on 2015-04-27 22:27:38
         compiled from db:extgallery_public-album.html */ ?>
<?php if ($this->_tpl_vars['jquery']): ?>
	<?php if ($this->_tpl_vars['use_ajax_effects'] == lightbox): ?>
		    <script type="text/javascript">
		    $(function() {
		        $('#gallery a').lightBox({
			        imageLoading:'<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/lightbox/lightbox-ico-loading.gif'; ?>',
			        imageBtnClose:'<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/lightbox/lightbox-btn-close.gif'; ?>',
			        imageBtnNext:'<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/lightbox/lightbox-btn-next.gif'; ?>',
			        imageBtnPrev:'<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/lightbox/lightbox-btn-prev.gif'; ?>',
			        imageBlank:'<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/lightbox/lightbox-blank.gif'; ?>'
			    });
		    });
		    </script>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['use_ajax_effects'] == tooltip): ?>
			<style>#screenshot img {max-width: <?php echo $this->_tpl_vars['album_tooltip_width']; ?>
px; border: <?php echo $this->_tpl_vars['album_tooltip_borderwidth']; ?>
px solid <?php echo $this->_tpl_vars['album_tooltip_bordercolor']; ?>
;}</style>   
	<?php endif; ?>
	<?php if ($this->_tpl_vars['use_ajax_effects'] == overlay): ?>
			<style>
				.apple_overlay {
					background-color: <?php echo $this->_tpl_vars['album_overlay_bg']; ?>
;
					width: <?php echo $this->_tpl_vars['album_overlay_width']; ?>
px !important;
					height: <?php echo $this->_tpl_vars['album_overlay_height']; ?>
px !important;
				}
				.apple_overlay img {
					max-width: <?php echo $this->_tpl_vars['album_overlay_width']; ?>
px !important;
					max-height: <?php echo $this->_tpl_vars['album_overlay_height']; ?>
px !important;
				}
			</style> 
	<?php endif; ?>
	<?php if ($this->_tpl_vars['use_ajax_effects'] == fancybox): ?>
	      <script type="text/javascript">
				$(document).ready(function() {
					<?php if ($this->_tpl_vars['album_fancybox_showtype'] == group): ?> 
						$("a[rel=example_group]").fancybox({
					<?php else: ?> 
						$("a.example").fancybox({
					<?php endif; ?>
						'overlayColor'		: '<?php echo $this->_tpl_vars['album_fancybox_color']; ?>
',
						'overlayOpacity'	: <?php echo $this->_tpl_vars['album_fancybox_opacity']; ?>
,
						'transitionIn'		: '<?php echo $this->_tpl_vars['album_fancybox_tin']; ?>
',
						'transitionOut'	: '<?php echo $this->_tpl_vars['album_fancybox_tout']; ?>
',
						'titlePosition' 	: '<?php echo $this->_tpl_vars['album_fancybox_title']; ?>
',
						'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
							return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
						}
					});
				});
		</script>
	<?php endif; ?>
<?php else: ?>
	<?php if ($this->_tpl_vars['use_ajax_effects'] == lightbox): ?>
		    <script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?Frameworks/jquery/plugins/jquery.lightbox.js'; ?>"></script>
		    <link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/system/css/lightbox.css'; ?>" />
		    <script type="text/javascript">
		    $(function() {
		        $('#gallery a').lightBox({
			        imageLoading:'<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/lightbox/lightbox-ico-loading.gif'; ?>',
			        imageBtnClose:'<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/lightbox/lightbox-btn-close.gif'; ?>',
			        imageBtnNext:'<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/lightbox/lightbox-btn-next.gif'; ?>',
			        imageBtnPrev:'<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/lightbox/lightbox-btn-prev.gif'; ?>',
			        imageBlank:'<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/lightbox/lightbox-blank.gif'; ?>'
			    });
		    });
		    </script>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['use_ajax_effects'] == tooltip): ?>
			<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/tooltip/image.tooltip.js'; ?>"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/tooltip/image.tooltip.css'; ?>" />	
			<style>#screenshot img {max-width: <?php echo $this->_tpl_vars['album_tooltip_width']; ?>
px; border: <?php echo $this->_tpl_vars['album_tooltip_borderwidth']; ?>
px solid <?php echo $this->_tpl_vars['album_tooltip_bordercolor']; ?>
;}</style>   
	<?php endif; ?>
	<?php if ($this->_tpl_vars['use_ajax_effects'] == overlay): ?>
			<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/overlay/overlay.jquery.tools.min.js'; ?>"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/overlay/overlay.css'; ?>" media="screen" />
			<style>
				.apple_overlay {
					background-color: <?php echo $this->_tpl_vars['album_overlay_bg']; ?>
;
					width: <?php echo $this->_tpl_vars['album_overlay_width']; ?>
px !important;
					height: <?php echo $this->_tpl_vars['album_overlay_height']; ?>
px !important;
				}
				.apple_overlay img {
					max-width: <?php echo $this->_tpl_vars['album_overlay_width']; ?>
px !important;
					max-height: <?php echo $this->_tpl_vars['album_overlay_height']; ?>
px !important;
				}
			</style> 
		
	<?php endif; ?>
	<?php if ($this->_tpl_vars['use_ajax_effects'] == fancybox): ?>
		   <script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/fancybox/mousewheel.js'; ?>"></script>
		   <script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/fancybox/fancybox.pack.js'; ?>"></script>
	      <link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/fancybox/fancybox.css'; ?>" />	
	      <script type="text/javascript">
				$(document).ready(function() {
					<?php if ($this->_tpl_vars['album_fancybox_showtype'] == group): ?> 
						$("a[rel=example_group]").fancybox({
					<?php else: ?> 
						$("a.example").fancybox({
					<?php endif; ?>
						'overlayColor'		: '<?php echo $this->_tpl_vars['album_fancybox_color']; ?>
',
						'overlayOpacity'	: <?php echo $this->_tpl_vars['album_fancybox_opacity']; ?>
,
						'transitionIn'		: '<?php echo $this->_tpl_vars['album_fancybox_tin']; ?>
',
						'transitionOut'	: '<?php echo $this->_tpl_vars['album_fancybox_tout']; ?>
',
						'titlePosition' 	: '<?php echo $this->_tpl_vars['album_fancybox_title']; ?>
',
						'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
							return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
						}
					});
				});
		</script>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['use_ajax_effects'] == prettyphoto): ?>
		   <script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/prettyphoto/jquery.prettyPhoto.js'; ?>"></script>
	      <link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/prettyphoto/prettyPhoto.css'; ?>" />	
	<?php endif; ?>
<?php endif; ?>

<div class="extgallery">
	<a title="<?php echo $this->_tpl_vars['extgalleryName']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>"><?php echo $this->_tpl_vars['extgalleryName']; ?>
</a><?php $this->_foreach['breadcrumb'] = array('total' => count($this->_tpl_vars['catPath']), 'iteration' => 0);
if ($this->_foreach['breadcrumb']['total'] > 0):
    foreach ($this->_tpl_vars['catPath'] as $this->_tpl_vars['node']):
        $this->_foreach['breadcrumb']['iteration']++;
 ?> <img src="images/breadcrumb-link.gif" alt="BreadCrumb" /> <a title="<?php echo $this->_tpl_vars['node']['cat_name']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-categories.php?id=<?php echo $this->_tpl_vars['node']['cat_id']; ?>
"><?php echo $this->_tpl_vars['node']['cat_name']; ?>
</a><?php endforeach; endif; unset($_from); ?> <img src="images/breadcrumb-link.gif" alt="BreadCrumb" /> <?php echo $this->_tpl_vars['cat']['cat_name']; ?>

	<div class="center">
		<div class="bold"><?php echo $this->_tpl_vars['extgallerySortbyOrderby']; ?>
</div>
		<div class="margin-top10">
			<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-album.php?id=<?php echo $this->_tpl_vars['extgalleryID']; ?>
&amp;start=<?php echo $this->_tpl_vars['extgalleryStart']; ?>
&amp;sortby=photo_date&amp;orderby=DESC" title="<?php echo @_MD_EXTGALLERY_SORTDATEDESC; ?>
"><img src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/sort_up.png'; ?>" width="16" height="16" border="0" align="middle" alt="<?php echo @_MD_EXTGALLERY_SORTDATEDESC; ?>
" /></a>
			<span class="smallsort"><?php echo @_MD_EXTGALLERY_SORTDATE; ?>
</span>
			<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-album.php?id=<?php echo $this->_tpl_vars['extgalleryID']; ?>
&amp;start=<?php echo $this->_tpl_vars['extgalleryStart']; ?>
&amp;sortby=photo_date&amp;orderby=ASC" title="<?php echo @_MD_EXTGALLERY_SORTDATEASC; ?>
"><img src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/sort_down.png'; ?>" width="16" height="16" border="0" align="middle" alt="<?php echo @_MD_EXTGALLERY_SORTDATEASC; ?>
" /></a>&nbsp;
			<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-album.php?id=<?php echo $this->_tpl_vars['extgalleryID']; ?>
&amp;start=<?php echo $this->_tpl_vars['extgalleryStart']; ?>
&amp;sortby=photo_title&amp;orderby=ASC" title="<?php echo @_MD_EXTGALLERY_SORTNAMEASC; ?>
"><img src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/sort_up.png'; ?>" width="16" height="16" border="0" align="middle" alt="<?php echo @_MD_EXTGALLERY_SORTNAMEASC; ?>
" /></a>
			<span class="smallsort"><?php echo @_MD_EXTGALLERY_SORTNAME; ?>
</span>
			<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-album.php?id=<?php echo $this->_tpl_vars['extgalleryID']; ?>
&amp;start=<?php echo $this->_tpl_vars['extgalleryStart']; ?>
&amp;sortby=photo_title&amp;orderby=DESC" title="<?php echo @_MD_EXTGALLERY_SORTNAMEDESC; ?>
"><img src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/sort_down.png'; ?>" width="16" height="16" border="0" align="middle" alt="<?php echo @_MD_EXTGALLERY_SORTNAMEDESC; ?>
" /></a>&nbsp;
			<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-album.php?id=<?php echo $this->_tpl_vars['extgalleryID']; ?>
&amp;start=<?php echo $this->_tpl_vars['extgalleryStart']; ?>
&amp;sortby=photo_hits&amp;orderby=DESC" title="<?php echo @_MD_EXTGALLERY_SORTHITSDESC; ?>
"><img src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/sort_up.png'; ?>" width="16" height="16" border="0" align="middle" alt="<?php echo @_MD_EXTGALLERY_SORTHITSDESC; ?>
" /></a>
			<span class="smallsort"><?php echo @_MD_EXTGALLERY_SORTHITS; ?>
</span>
			<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-album.php?id=<?php echo $this->_tpl_vars['extgalleryID']; ?>
&amp;start=<?php echo $this->_tpl_vars['extgalleryStart']; ?>
&amp;sortby=photo_hits&amp;orderby=ASC" title="<?php echo @_MD_EXTGALLERY_SORTHITSASC; ?>
"><img src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/sort_down.png'; ?>" width="16" height="16" border="0" align="middle" alt="<?php echo @_MD_EXTGALLERY_SORTHITSASC; ?>
" /></a>&nbsp;
			<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-album.php?id=<?php echo $this->_tpl_vars['extgalleryID']; ?>
&amp;start=<?php echo $this->_tpl_vars['extgalleryStart']; ?>
&amp;sortby=photo_rating&amp;orderby=DESC" title="<?php echo @_MD_EXTGALLERY_SORTNOTEDESC; ?>
"><img src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/sort_up.png'; ?>" width="16" height="16" border="0" align="middle" alt="<?php echo @_MD_EXTGALLERY_SORTNOTEDESC; ?>
" /></a>
			<span class="smallsort"><?php echo @_MD_EXTGALLERY_SORTNOTE; ?>
</span>
			<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-album.php?id=<?php echo $this->_tpl_vars['extgalleryID']; ?>
&amp;start=<?php echo $this->_tpl_vars['extgalleryStart']; ?>
&amp;sortby=photo_rating&amp;orderby=ASC" title="<?php echo @_MD_EXTGALLERY_SORTNOTEASC; ?>
"><img src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/sort_down.png'; ?>" width="16" height="16" border="0" align="middle" alt="<?php echo @_MD_EXTGALLERY_SORTNOTEASC; ?>
" /></a>
		</div>
	</div>
	<div class="pageNav">
		<?php echo $this->_tpl_vars['pageNav']; ?>

	</div>
	<table id="thumbTable" class="outer">
		<tr>
			<th colspan="<?php echo $this->_tpl_vars['nbColumn']; ?>
"><?php echo $this->_tpl_vars['cat']['cat_name']; ?>
</th>
		</tr>
		<tr class="even">
      <?php if ($this->_tpl_vars['use_ajax_effects'] == prettyphoto): ?>
         <ul class="gallery clearfix">
	   <?php endif; ?>
		<?php unset($this->_sections['photo']);
$this->_sections['photo']['name'] = 'photo';
$this->_sections['photo']['loop'] = is_array($_loop=$this->_tpl_vars['photos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['photo']['show'] = true;
$this->_sections['photo']['max'] = $this->_sections['photo']['loop'];
$this->_sections['photo']['step'] = 1;
$this->_sections['photo']['start'] = $this->_sections['photo']['step'] > 0 ? 0 : $this->_sections['photo']['loop']-1;
if ($this->_sections['photo']['show']) {
    $this->_sections['photo']['total'] = $this->_sections['photo']['loop'];
    if ($this->_sections['photo']['total'] == 0)
        $this->_sections['photo']['show'] = false;
} else
    $this->_sections['photo']['total'] = 0;
if ($this->_sections['photo']['show']):

            for ($this->_sections['photo']['index'] = $this->_sections['photo']['start'], $this->_sections['photo']['iteration'] = 1;
                 $this->_sections['photo']['iteration'] <= $this->_sections['photo']['total'];
                 $this->_sections['photo']['index'] += $this->_sections['photo']['step'], $this->_sections['photo']['iteration']++):
$this->_sections['photo']['rownum'] = $this->_sections['photo']['iteration'];
$this->_sections['photo']['index_prev'] = $this->_sections['photo']['index'] - $this->_sections['photo']['step'];
$this->_sections['photo']['index_next'] = $this->_sections['photo']['index'] + $this->_sections['photo']['step'];
$this->_sections['photo']['first']      = ($this->_sections['photo']['iteration'] == 1);
$this->_sections['photo']['last']       = ($this->_sections['photo']['iteration'] == $this->_sections['photo']['total']);
?>
		<?php if ($this->_sections['photo']['index'] % $this->_tpl_vars['nbColumn'] == 0 && ! $this->_sections['photo']['first']): ?>
		</tr>
		<tr class="even">
		<?php endif; ?>
			<td>
			<?php if ($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']): ?>

				<!-- Start Admin link -->
				<?php if ($this->_tpl_vars['xoops_isadmin']): ?>
				<div class="adminLink">
					<a title="edit" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-modify.php?op=edit&id=<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
"><img src="images/edit.png" alt="edit"  /></a>&nbsp;
					<a title="delete" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-modify.php?op=delete&id=<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
"><img src="images/delete.png" alt="delete" /></a>
				</div>
				<?php endif; ?>
				<!-- End Admin link -->

           <!-- Start Normal show -->
	         <?php if ($this->_tpl_vars['use_ajax_effects'] == none): ?>
		         <?php if ($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_serveur'] && $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']): ?>
					<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-photo.php?photoId=<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_serveur']; ?>
thumb_<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" /></a>
					<?php elseif ($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']): ?>
					<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-photo.php?photoId=<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" /></a>	
					<?php endif; ?>            
			   <?php endif; ?>
            <!-- End Normal show -->

           <!-- Start Tooltip show -->
	         <?php if ($this->_tpl_vars['use_ajax_effects'] == tooltip): ?>
		         <?php if ($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_serveur'] && $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']): ?>
					<a class="screenshot" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-photo.php?photoId=<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
" rel="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_serveur']; ?>
thumb_<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" /></a>
					<?php elseif ($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']): ?>
					<a class="screenshot" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-photo.php?photoId=<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
" rel="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" /></a>	
				   <?php endif; ?>            
			   <?php endif; ?>
            <!-- End Tooltip show -->
            
            <!-- Start Lightbox -->
            <?php if ($this->_tpl_vars['use_ajax_effects'] == lightbox): ?>
	            <div id="gallery">
						<?php if ($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_serveur'] && $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']): ?>
						<a title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_serveur']; ?>
thumb_<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" /></a>
						<?php elseif ($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']): ?>
						<a title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" /></a>
						<?php endif; ?>
	            </div>
	         <?php endif; ?>
	         <!-- End Lightbox -->
	         
	         <!-- Start Overlay -->
	         <?php if ($this->_tpl_vars['use_ajax_effects'] == overlay): ?>
					<div align="center" id="apple">
						<?php if ($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_serveur'] && $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']): ?>
						<img rel="#photo<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
" class="thumb" src="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_serveur']; ?>
thumb_<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" />
						<?php elseif ($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']): ?>
						<img rel="#photo<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
" class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" />
						<?php endif; ?>
					</div>
					<div class="apple_overlay" id="photo<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
"><a class="close"></a>
						<img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
">                
						<div class="details">
							<?php if ($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_serveur'] && $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']): ?>
							<div align="center"><a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-photo.php?photoId=<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
"><?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
</a></div>
							<?php elseif ($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']): ?>
							<div align="center"><a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-photo.php?photoId=<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
"><?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
</a></div>
							<?php endif; ?> 
							<p><?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_desc']; ?>
</p>
						</div>       
					</div>
	         <?php endif; ?>
            <!-- End Overlay -->
            
            <!-- Start Fansybox -->
            <?php if ($this->_tpl_vars['use_ajax_effects'] == fancybox): ?>
	            <a <?php if ($this->_tpl_vars['album_fancybox_showtype'] == group): ?>rel="example_group"<?php else: ?>class="example"<?php endif; ?> href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
"><img class="last thumb" alt="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" /></a>
            <?php endif; ?>
            <!-- End Fansybox -->
            
            <!-- Start prettyPhoto show -->
	         <?php if ($this->_tpl_vars['use_ajax_effects'] == prettyphoto): ?>
	            <ul class="gallery clearfix">
			         <?php if ($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_serveur'] && $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']): ?>
						<li><a title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" rel="prettyPhoto[gallery2]"><img class="thumb" src="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_serveur']; ?>
thumb_<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" /></a></li>
						<?php elseif ($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']): ?>
						<li><a title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" rel="prettyPhoto[gallery2]"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" /></a></li>
						<?php endif; ?>  
               </ul>          
			   <?php endif; ?>
            <!-- End prettyPhoto show -->
            
			<?php if ($this->_tpl_vars['enable_info']): ?>
			
				<!-- Photo Title -->
				<?php if ($this->_tpl_vars['disp_ph_title'] == 1): ?>
				<div class="PhotoTitle"><h2><a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-photo.php?photoId=<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
"><?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
</a></h2></div>
				<?php endif; ?>

				<!-- Start Hit count -->
				<?php if ($this->_tpl_vars['enable_photo_hits']): ?>
				<div class="photoHit"><h5><?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_hits']; ?>
 <?php echo $this->_tpl_vars['lang']['hits']; ?>
</h5></div>
				<?php endif; ?>
				<!-- End Hit count -->

				<!-- Start Comment count -->
				<?php if ($this->_tpl_vars['enable_show_comments']): ?>
				<div class="photoComment"><h5><?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_comment']; ?>
 <?php echo $this->_tpl_vars['lang']['comments']; ?>
</h5></div>
				<?php endif; ?>
				<!-- End Comment count -->

				<!-- Start photo date -->
				<?php if ($this->_tpl_vars['enable_date']): ?>
				<div class="photoDate"><h5><?php echo @_MD_EXTGALLERY_INFODATE; ?>
 <?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_date']; ?>
</h5></div>
				<?php endif; ?>
				<!-- End photo date -->

				<!-- Start Submitter link -->
				<?php if ($this->_tpl_vars['enable_submitter_lnk']): ?>
				<div class="photoSubmitter"><h4><a title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['user']['uname']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['user']['uid']; ?>
"><?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['user']['uname']; ?>
</a></h4></div>
            <?php endif; ?>				
				<!-- End Submitter link -->		
			
				<?php if ($this->_tpl_vars['enableRating']): ?>
				<!-- Start Rating score -->
				<div class="photoRating"><img src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>images/rating_<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_rating']; ?>
.gif" alt="<?php echo $this->_tpl_vars['lang']['rate_score']; ?>
 : <?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_rating']; ?>
" title="<?php echo $this->_tpl_vars['lang']['rate_score']; ?>
" /></div>
				<!-- End Rating score -->
				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['enableExtra']): ?>
				<!-- Start extra field -->
				<div class="photoExtra"><?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_extra']; ?>
</div>
				<!-- End extra filed -->
				<?php endif; ?>

			<?php endif; ?>
			
				<?php if (count($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['link'])):
    foreach ($this->_tpl_vars['photos'][$this->_sections['photo']['index']]['link'] as $this->_tpl_vars['pluginLink']):
 ?>
                	<a href="<?php echo $this->_tpl_vars['pluginLink']['link']; ?>
<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
" title="<?php echo $this->_tpl_vars['pluginLink']['name']; ?>
"><?php echo $this->_tpl_vars['pluginLink']['name']; ?>
</a>
				<?php endforeach; endif; unset($_from); ?>

				<!-- Start Displaying Hook code -->
<!--			<?php if ($this->_tpl_vars['xoops_isadmin']): ?>
					<div class=""> <input type="text" value='[gallery title="<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
"]<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
[/gallery]' /></div>
				<?php endif; ?>
	-->
				<!-- End Displaying Hook code -->
			<?php endif; ?>
			</td>
		<?php endfor; endif; ?>
      <?php if ($this->_tpl_vars['use_ajax_effects'] == prettyphoto): ?>
         </ul>
	   <?php endif; ?>
		</tr>
	</table>
	<div class="pageNav">
		<?php echo $this->_tpl_vars['pageNav']; ?>

	</div>

	<?php if ($this->_tpl_vars['show_rss']): ?>
	<div id="rss">
		<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/public-rss.php?id='; ?><?php echo $this->_tpl_vars['extgalleryID']; ?>
" title="<?php echo @_MD_EXTGALLERY_ALBUMRSS; ?>
">
			<img src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/feedblue.png'; ?>" alt="<?php echo @_MD_EXTGALLERY_ALBUMRSS; ?>
" />
		</a>
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

<?php if ($this->_tpl_vars['use_ajax_effects'] == overlay): ?>
	<script type="text/javascript">
	$(function() {
		$("#apple img[rel]").overlay({effect: 'apple'});
	});
	</script> 
<?php endif; ?>

<?php if ($this->_tpl_vars['use_ajax_effects'] == prettyphoto): ?>
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'<?php echo $this->_tpl_vars['album_prettyphoto_speed']; ?>
',theme:'<?php echo $this->_tpl_vars['album_prettyphoto_theme']; ?>
',slideshow:<?php echo $this->_tpl_vars['album_prettyphoto_slidspeed']; ?>
, autoplay_slideshow: <?php echo $this->_tpl_vars['album_prettyphoto_autoplay']; ?>
});
	});
	</script>
<?php endif; ?>