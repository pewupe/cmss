<?php /* Smarty version 2.6.28, created on 2015-04-27 22:13:12
         compiled from db:extgallery_block.html */ ?>
<?php if ($this->_tpl_vars['block']['jquery'] == 'true'): ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == lightbox): ?>
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
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == tooltip): ?>
	      <style>#screenshot img {max-width: <?php echo $this->_tpl_vars['block']['tooltipw']; ?>
px; border: <?php echo $this->_tpl_vars['block']['tooltipbw']; ?>
px solid <?php echo $this->_tpl_vars['block']['tooltipbbg']; ?>
 !important;}</style>   
	<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == overlay): ?>
		    <style>
		    .apple_overlay {
		        background-color: <?php echo $this->_tpl_vars['block']['overlyabg']; ?>
;
		        width: <?php echo $this->_tpl_vars['block']['overlyaw']; ?>
px !important;
		        height: <?php echo $this->_tpl_vars['block']['overlyah']; ?>
px !important;
		     }
		     .apple_overlay img {
		        max-width: <?php echo $this->_tpl_vars['block']['overlyaw']; ?>
px !important;
		        max-height: <?php echo $this->_tpl_vars['block']['overlyah']; ?>
px !important;
	        }
		    </style> 
	<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == fancybox): ?>
	      <script type="text/javascript">
				$(document).ready(function() {
				<?php if ($this->_tpl_vars['block']['fancyboxshow'] == group): ?>
					$("a[rel=example_group]").fancybox({
				<?php else: ?>
					$("a.example").fancybox({
				<?php endif; ?>	
						'overlayColor'		: '<?php echo $this->_tpl_vars['block']['fancyboxbg']; ?>
',
						'overlayOpacity'	: <?php echo $this->_tpl_vars['block']['fancyboxop']; ?>
,
						'transitionIn'		: '<?php echo $this->_tpl_vars['block']['fancyboxtin']; ?>
',
						'transitionOut'	: '<?php echo $this->_tpl_vars['block']['fancyboxtout']; ?>
',
						'titlePosition' 	: '<?php echo $this->_tpl_vars['block']['fancyboxtp']; ?>
',
						'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
							return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
						}
					});
				});
		</script>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == jcarousel): ?>
			<script type="text/javascript">
				jQuery(document).ready(function() {
					jQuery('#mycarousel').jcarousel(<?php if ($this->_tpl_vars['block']['direction'] == 1): ?>{vertical: true, scroll: 2}<?php endif; ?>);
				});
			</script>
			<style>
			.jcarousel-skin-tango .jcarousel-container-horizontal {width: <?php echo $this->_tpl_vars['block']['jcarouselhwidth']; ?>
px;}
			.jcarousel-skin-tango .jcarousel-container-vertical {height: <?php echo $this->_tpl_vars['block']['jcarouselvheight']; ?>
px; width: <?php echo $this->_tpl_vars['block']['jcarouselvwidth']; ?>
px;}
			.jcarousel-skin-tango .jcarousel-clip-vertical {height: <?php echo $this->_tpl_vars['block']['jcarouselvheight']; ?>
px;}
		</style>
	<?php endif; ?>
<?php else: ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == lightbox): ?>
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
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == tooltip): ?>
		   <script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/tooltip/image.tooltip.js'; ?>"></script>
	      <link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/tooltip/image.tooltip.css'; ?>" />	
	      <style>#screenshot img {max-width: <?php echo $this->_tpl_vars['block']['tooltipw']; ?>
px; border: <?php echo $this->_tpl_vars['block']['tooltipbw']; ?>
px solid <?php echo $this->_tpl_vars['block']['tooltipbbg']; ?>
 !important;}</style>   
	<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == overlay): ?>
		    <script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/overlay/overlay.jquery.tools.min.js'; ?>"></script>
		    <link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/overlay/overlay.css'; ?>" media="screen" />
		    <style>
		    .apple_overlay {
		        background-color: <?php echo $this->_tpl_vars['block']['overlyabg']; ?>
;
		        width: <?php echo $this->_tpl_vars['block']['overlyaw']; ?>
px !important;
		        height: <?php echo $this->_tpl_vars['block']['overlyah']; ?>
px !important;
		     }
		     .apple_overlay img {
		        max-width: <?php echo $this->_tpl_vars['block']['overlyaw']; ?>
px !important;
		        max-height: <?php echo $this->_tpl_vars['block']['overlyah']; ?>
px !important;
	        }
		    </style> 
	<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == fancybox): ?>
		   <script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/fancybox/mousewheel.js'; ?>"></script>
		   <script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/fancybox/fancybox.pack.js'; ?>"></script>
	      <link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/fancybox/fancybox.css'; ?>" />	
	      <script type="text/javascript">
				$(document).ready(function() {
				<?php if ($this->_tpl_vars['block']['fancyboxshow'] == group): ?>
					$("a[rel=example_group]").fancybox({
				<?php else: ?>
					$("a.example").fancybox({
				<?php endif; ?>	
						'overlayColor'		: '<?php echo $this->_tpl_vars['block']['fancyboxbg']; ?>
',
						'overlayOpacity'	: <?php echo $this->_tpl_vars['block']['fancyboxop']; ?>
,
						'transitionIn'		: '<?php echo $this->_tpl_vars['block']['fancyboxtin']; ?>
',
						'transitionOut'	: '<?php echo $this->_tpl_vars['block']['fancyboxtout']; ?>
',
						'titlePosition' 	: '<?php echo $this->_tpl_vars['block']['fancyboxtp']; ?>
',
						'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
							return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
						}
					});
				});
		</script>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == prettyphoto): ?>
		   <script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/prettyphoto/jquery.prettyPhoto.js'; ?>"></script>
	      <link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/prettyphoto/prettyPhoto.css'; ?>" />	
	<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == jcarousel): ?>
		   <script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/jcarousel/jquery.jcarousel.min.js'; ?>"></script>
	      <link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/jcarousel/skin.css'; ?>" />	
			<script type="text/javascript">
				jQuery(document).ready(function() {
					jQuery('#mycarousel').jcarousel(<?php if ($this->_tpl_vars['block']['direction'] == 1): ?>{vertical: true, scroll: 2}<?php endif; ?>);
				});
			</script>
			<style>
			.jcarousel-skin-tango .jcarousel-container-horizontal {width: <?php echo $this->_tpl_vars['block']['jcarouselhwidth']; ?>
px;}
			.jcarousel-skin-tango .jcarousel-container-vertical {height: <?php echo $this->_tpl_vars['block']['jcarouselvheight']; ?>
px; width: <?php echo $this->_tpl_vars['block']['jcarouselvwidth']; ?>
px;}
			.jcarousel-skin-tango .jcarousel-clip-vertical {height: <?php echo $this->_tpl_vars['block']['jcarouselvheight']; ?>
px;}
		</style>
	<?php endif; ?>
<?php endif; ?>

<!-- Start prettyPhoto show -->
<?php if ($this->_tpl_vars['block']['ajaxeffect'] == prettyphoto): ?>
   <ul class="gallery clearfix">
<?php endif; ?>
<!-- End prettyPhoto show -->

<table style="width:100%;">
	<?php if ($this->_tpl_vars['block']['direction'] == 0): ?>
	<tr>
	   <!-- Start jcarousel show -->
      <?php if ($this->_tpl_vars['block']['ajaxeffect'] == jcarousel): ?>
         <ul id="mycarousel" class="jcarousel-skin-tango">
	   <?php endif; ?>
      <!-- End jcarousel show -->
	
		<?php $_from = $this->_tpl_vars['block']['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['photo']):
?>
		<?php if ($this->_tpl_vars['block']['ajaxeffect'] != jcarousel): ?>
		<td style="text-align:center; vertical-align:middle;">
		<?php endif; ?>
            <!-- Start Normal show -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == none): ?>
					<a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" /></a>	
			   <?php endif; ?>
            <!-- End Normal show -->

           <!-- Start Tooltip show -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == tooltip): ?>
					<a class="screenshot" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
" rel="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" /></a>	
			   <?php endif; ?>
            <!-- End Tooltip show -->
            
            <!-- Start Lightbox -->
            <?php if ($this->_tpl_vars['block']['ajaxeffect'] == lightbox): ?>
	            <div id="gallery">
						<a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" /></a>
	            </div>
	         <?php endif; ?>
	         <!-- End Lightbox -->
	         
	         <!-- Start Overlay -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == overlay): ?>
					<div align="center" id="apple">
						<img rel="#photo<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
" class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" />
					</div>
					<div class="apple_overlay" id="photo<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><a class="close"></a>
						<img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" />                
						<div class="details">
							<div align="center"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><?php echo $this->_tpl_vars['photo']['photo_title']; ?>
</a></div>
						   <p><?php echo $this->_tpl_vars['photo']['photo_desc']; ?>
</p>
						</div>       
					</div>
	         <?php endif; ?>
            <!-- End Overlay -->
            
            <!-- Start Fansybox -->
            <?php if ($this->_tpl_vars['block']['ajaxeffect'] == fancybox): ?>
	            <a <?php if ($this->_tpl_vars['block']['fancyboxshow'] == group): ?>rel="example_group"<?php else: ?>class="example"<?php endif; ?> href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
"><img class="last" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" /></a>
            <?php endif; ?>
            <!-- End Fansybox -->
            
            <!-- Start prettyPhoto show -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == prettyphoto): ?>
	            <ul class="gallery clearfix">
						<li><a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" rel="prettyPhoto[gallery2]"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" /></a></li>
               </ul>          
			   <?php endif; ?>
            <!-- End prettyPhoto show -->
            
            <!-- Start jcarousel show -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == jcarousel): ?>
			         <li><a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" /></a></li>
			   <?php endif; ?>
            <!-- End jcarousel show -->
            
			<?php if ($this->_tpl_vars['block']['title']): ?>
			<div class="center"><a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><?php echo $this->_tpl_vars['photo']['photo_title']; ?>
</a></div>
			<?php endif; ?>
		<?php if ($this->_tpl_vars['block']['ajaxeffect'] != jcarousel): ?>	
		</td>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		
      <!-- Start jcarousel show -->
      <?php if ($this->_tpl_vars['block']['ajaxeffect'] == jcarousel): ?>
         </ul>
	   <?php endif; ?>
      <!-- End jcarousel show -->
      
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['direction'] == 1): ?>
	<!-- Start jcarousel show -->
   <?php if ($this->_tpl_vars['block']['ajaxeffect'] == jcarousel): ?>
      <ul id="mycarousel" class="jcarousel-skin-tango">
   <?php endif; ?>
   <!-- End jcarousel show -->
	<?php $_from = $this->_tpl_vars['block']['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['photo']):
?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] != jcarousel): ?>
	<tr>
		<td style="text-align:center; vertical-align:middle;">
   <?php endif; ?>      
           <!-- Start Normal show -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == none): ?>
					<a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" /></a>	
			   <?php endif; ?>
            <!-- End Normal show -->

           <!-- Start Tooltip show -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == tooltip): ?>
					<a class="screenshot" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
" rel="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" /></a>	
			   <?php endif; ?>
            <!-- End Tooltip show -->
            
            <!-- Start Lightbox -->
            <?php if ($this->_tpl_vars['block']['ajaxeffect'] == lightbox): ?>
	            <div id="gallery">
						<a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" /></a>
	            </div>
	         <?php endif; ?>
	         <!-- End Lightbox -->
	         
	         <!-- Start Overlay -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == overlay): ?>
					<div align="center" id="apple">
						<img rel="#photo<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
" class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" />
					</div>
					<div class="apple_overlay" id="photo<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><a class="close"></a>
						<img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
">                
						<div class="details">
							<div align="center"><a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><?php echo $this->_tpl_vars['photo']['photo_title']; ?>
</a></div>
						   <p><?php echo $this->_tpl_vars['photo']['photo_desc']; ?>
</p>
						</div>       
					</div>
	         <?php endif; ?>
            <!-- End Overlay -->
            
            <!-- Start Fansybox -->
            <?php if ($this->_tpl_vars['block']['ajaxeffect'] == fancybox): ?>
	            <a <?php if ($this->_tpl_vars['block']['fancyboxshow'] == group): ?>rel="example_group"<?php else: ?>class="example"<?php endif; ?> href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
"><img class="last" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" /></a>
            <?php endif; ?>
            <!-- End Fansybox -->
            
            <!-- Start prettyPhoto show -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == prettyphoto): ?>
	            <ul class="gallery clearfix">
						<li><a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" rel="prettyPhoto[gallery2]"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" /></a></li>
               </ul>          
			   <?php endif; ?>
            <!-- End prettyPhoto show -->
            
            <!-- Start jcarousel show -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == jcarousel): ?>
			         <li><a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" /></a></li>
			   <?php endif; ?>
            <!-- End jcarousel show -->
            
			<?php if ($this->_tpl_vars['block']['title']): ?>
			<div class="center"><a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><?php echo $this->_tpl_vars['photo']['photo_title']; ?>
</a></div>
			<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] != jcarousel): ?>
		</td>
	</tr>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
   <!-- Start jcarousel show -->
   <?php if ($this->_tpl_vars['block']['ajaxeffect'] == jcarousel): ?>
      </ul>
   <?php endif; ?>
   <!-- End jcarousel show -->
	<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['direction'] == 2): ?>
		<tr>
		<!-- Start jcarousel show -->
      <?php if ($this->_tpl_vars['block']['ajaxeffect'] == jcarousel): ?>
         <ul id="mycarousel" class="jcarousel-skin-tango">
	   <?php endif; ?>
      <!-- End jcarousel show -->
		<?php unset($this->_sections['photo']);
$this->_sections['photo']['name'] = 'photo';
$this->_sections['photo']['loop'] = is_array($_loop=$this->_tpl_vars['block']['photos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<?php if ($this->_sections['photo']['index'] % $this->_tpl_vars['block']['column'] == 0 && ! $this->_sections['photo']['first']): ?>
		</tr>
		<tr>
		<?php endif; ?>
		<td>	
		
<?php if ($this->_tpl_vars['block']['ajaxeffect'] != jcarousel): ?>
		<td style="text-align:center; vertical-align:middle;">
		<?php endif; ?>
            <!-- Start Normal show -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == none): ?>
					<a title="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" /></a>	
			   <?php endif; ?>
            <!-- End Normal show -->

           <!-- Start Tooltip show -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == tooltip): ?>
					<a title="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" class="screenshot" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
" rel="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" /></a>	
			   <?php endif; ?>
            <!-- End Tooltip show -->
            
            <!-- Start Lightbox -->
            <?php if ($this->_tpl_vars['block']['ajaxeffect'] == lightbox): ?>
	            <div id="gallery">
						<a title="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" /></a>
	            </div>
	         <?php endif; ?>
	         <!-- End Lightbox -->
	         
	         <!-- Start Overlay -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == overlay): ?>
					<div align="center" id="apple">
						<img alt="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" rel="#photo<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
" class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" />
					</div>
					<div class="apple_overlay" id="photo<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
"><a class="close"></a>
						<img alt="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
">                
						<div class="details">
							<div align="center"><a title="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
"><?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
</a></div>
						   <p><?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_desc']; ?>
</p>
						</div>       
					</div>
	         <?php endif; ?>
            <!-- End Overlay -->
            
            <!-- Start Fansybox -->
            <?php if ($this->_tpl_vars['block']['ajaxeffect'] == fancybox): ?>
	            <a <?php if ($this->_tpl_vars['block']['fancyboxshow'] == group): ?>rel="example_group"<?php else: ?>class="example"<?php endif; ?> href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" title="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
"><img class="last" alt="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" /></a>
            <?php endif; ?>
            <!-- End Fansybox -->
            
            <!-- Start prettyPhoto show -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == prettyphoto): ?>
	            <ul class="gallery clearfix">
						<li><a title="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" rel="prettyPhoto[gallery2]"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" /></a></li>
               </ul>          
			   <?php endif; ?>
            <!-- End prettyPhoto show -->
            
            <!-- Start jcarousel show -->
	         <?php if ($this->_tpl_vars['block']['ajaxeffect'] == jcarousel): ?>
			         <li><a title="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
"><img class="thumb" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" /></a></li>
			   <?php endif; ?>
            <!-- End jcarousel show -->
            
			<?php if ($this->_tpl_vars['block']['title']): ?>
			<div class="center"><a title="<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
"><?php echo $this->_tpl_vars['block']['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
</a></div>
			<?php endif; ?>
		<?php if ($this->_tpl_vars['block']['ajaxeffect'] != jcarousel): ?>	
		</td>
		<?php endif; ?>
		</td>
		<?php endfor; endif; ?>
		<!-- Start jcarousel show -->
      <?php if ($this->_tpl_vars['block']['ajaxeffect'] == jcarousel): ?>
         </ul>
	   <?php endif; ?>
      <!-- End jcarousel show -->
		</tr>
	<?php endif; ?>
</table>

<!-- Start prettyPhoto show -->
<?php if ($this->_tpl_vars['block']['ajaxeffect'] == prettyphoto): ?>
   </ul>
<?php endif; ?>
<!-- End prettyPhoto show -->

<?php if ($this->_tpl_vars['block']['ajaxeffect'] == overlay): ?>
	<script type="text/javascript">
	$(function() {
		$("#apple img[rel]").overlay({effect: 'apple'});
	});
	</script> 
<?php endif; ?>

<?php if ($this->_tpl_vars['block']['ajaxeffect'] == prettyphoto): ?>
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'<?php echo $this->_tpl_vars['block']['prettyphotospeed']; ?>
',theme:'<?php echo $this->_tpl_vars['block']['prettyphototheme']; ?>
',slideshow:<?php echo $this->_tpl_vars['block']['prettyphotoslidspeed']; ?>
, autoplay_slideshow: <?php echo $this->_tpl_vars['block']['prettyphotoautoplay']; ?>
});
	});
	</script>
<?php endif; ?>