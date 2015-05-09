<?php /* Smarty version 2.6.28, created on 2015-04-27 22:13:12
         compiled from db:extgallery_block_ajax.html */ ?>
<?php if ($this->_tpl_vars['block']['jquery']): ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == galleryview): ?>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#gallery').galleryView({
					panel_width: <?php echo $this->_tpl_vars['block']['panel_width']; ?>
,
					panel_height: <?php echo $this->_tpl_vars['block']['panel_height']; ?>
,
					frame_width: <?php echo $this->_tpl_vars['block']['frame_width']; ?>
,
					frame_height: <?php echo $this->_tpl_vars['block']['frame_height']; ?>
,
					transition_speed: <?php echo $this->_tpl_vars['block']['transition_speed']; ?>
,
					transition_interval: <?php echo $this->_tpl_vars['block']['transition_interval']; ?>
,
					overlay_color: '#<?php echo $this->_tpl_vars['block']['overlay_color']; ?>
',
					overlay_opacity: '<?php echo $this->_tpl_vars['block']['overlay_opacity']; ?>
',
		         nav_theme: '<?php echo $this->_tpl_vars['block']['nav_theme']; ?>
',
		         filmstrip_position: '<?php echo $this->_tpl_vars['block']['position']; ?>
',
		         overlay_position: '<?php echo $this->_tpl_vars['block']['position']; ?>
',
		         easing: '<?php echo $this->_tpl_vars['block']['easing']; ?>
',
		         theme_path: '<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/images/galleryview/'; ?>'
				});
			});
		</script>
		<style type="text/css">
			.gallery { background: #<?php echo $this->_tpl_vars['block']['background_color']; ?>
;}
			.overlay-background { height: <?php echo $this->_tpl_vars['block']['overlay_height']; ?>
px;}
			.overlay-background { background: #<?php echo $this->_tpl_vars['block']['overlay_color']; ?>
; }
			.panel-overlay { color: #<?php echo $this->_tpl_vars['block']['overlay_text_color']; ?>
; font-size: <?php echo $this->_tpl_vars['block']['overlay_font_size']; ?>
px; }
	      .panel-overlay a { color: #<?php echo $this->_tpl_vars['block']['overlay_text_color']; ?>
; }
	      .frame.current .img_wrap { border-color: #<?php echo $this->_tpl_vars['block']['caption_text_color']; ?>
; }
	      .pointer { border-color: #<?php echo $this->_tpl_vars['block']['caption_text_color']; ?>
; }
	      .galleryview_imagesize { max-width: <?php echo $this->_tpl_vars['galleryview_framewidth']; ?>
; max-height: <?php echo $this->_tpl_vars['galleryview_frameheight']; ?>
;}
	   </style>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == galleria): ?>
	     <style>
	         .content{color:#eee;font:14px/1.4 "helvetica neue", arial,sans-serif;width:<?php echo $this->_tpl_vars['block']['galleria_panelwidth']; ?>
px;margin:20px auto}
	         #galleria{height:<?php echo $this->_tpl_vars['block']['galleria_height']; ?>
px;}
	         .galleria-container {background-color: <?php echo $this->_tpl_vars['block']['galleria_bgcolor']; ?>
 !important;}
	         .galleria-thumbnails .galleria-image {border: 1px solid <?php echo $this->_tpl_vars['block']['galleria_bcolor']; ?>
;}
	         .galleria-thumb-nav-left, .galleria-thumb-nav-right, .galleria-info-link, .galleria-info-close, .galleria-image-nav-left, .galleria-image-nav-right {background-image: url(<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/galleria/<?php echo $this->_tpl_vars['block']['galleria_bgimg']; ?>
.png) !important; background-repeat: no-repeat !important;}
	     </style>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == microgallery): ?>
	   <script type="text/javascript">
            $(function() {
                $("#mG1").microgallery({
                    menu:true,
                    size:'<?php echo $this->_tpl_vars['block']['micro_size']; ?>
',
                    mode:'single'
                });
            });
      </script>
	<?php endif; ?>
<?php else: ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == galleryview): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleryview/galleryview.css'; ?>" />
		<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleryview/galleryview.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleryview/timers.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleryview/easing.js'; ?>"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#gallery').galleryView({
					panel_width: <?php echo $this->_tpl_vars['block']['panel_width']; ?>
,
					panel_height: <?php echo $this->_tpl_vars['block']['panel_height']; ?>
,
					frame_width: <?php echo $this->_tpl_vars['block']['frame_width']; ?>
,
					frame_height: <?php echo $this->_tpl_vars['block']['frame_height']; ?>
,
					transition_speed: <?php echo $this->_tpl_vars['block']['transition_speed']; ?>
,
					transition_interval: <?php echo $this->_tpl_vars['block']['transition_interval']; ?>
,
					overlay_color: '#<?php echo $this->_tpl_vars['block']['overlay_color']; ?>
',
					overlay_opacity: '<?php echo $this->_tpl_vars['block']['overlay_opacity']; ?>
',
		         nav_theme: '<?php echo $this->_tpl_vars['block']['nav_theme']; ?>
',
		         filmstrip_position: '<?php echo $this->_tpl_vars['block']['position']; ?>
',
		         overlay_position: '<?php echo $this->_tpl_vars['block']['position']; ?>
',
		         easing: '<?php echo $this->_tpl_vars['block']['easing']; ?>
',
		         theme_path: '<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/images/galleryview/'; ?>'
				});
			});
		</script>
		<style type="text/css">
			.gallery { background: #<?php echo $this->_tpl_vars['block']['background_color']; ?>
;}
			.overlay-background { height: <?php echo $this->_tpl_vars['block']['overlay_height']; ?>
px;}
			.overlay-background { background: #<?php echo $this->_tpl_vars['block']['overlay_color']; ?>
; }
			.panel-overlay { color: #<?php echo $this->_tpl_vars['block']['overlay_text_color']; ?>
; font-size: <?php echo $this->_tpl_vars['block']['overlay_font_size']; ?>
px; }
	      .panel-overlay a { color: #<?php echo $this->_tpl_vars['block']['overlay_text_color']; ?>
; }
	      .frame.current .img_wrap { border-color: #<?php echo $this->_tpl_vars['block']['caption_text_color']; ?>
; }
	      .pointer { border-color: #<?php echo $this->_tpl_vars['block']['caption_text_color']; ?>
; }
	      .galleryview_imagesize { max-width: <?php echo $this->_tpl_vars['galleryview_framewidth']; ?>
; max-height: <?php echo $this->_tpl_vars['galleryview_frameheight']; ?>
;}
	   </style>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == galleria): ?>
		<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleria/galleria.js'; ?>"></script>
	     <style>
	         .content{color:#eee;font:14px/1.4 "helvetica neue", arial,sans-serif;width:<?php echo $this->_tpl_vars['block']['galleria_panelwidth']; ?>
px;margin:20px auto}
	         #galleria{height:<?php echo $this->_tpl_vars['block']['galleria_height']; ?>
px;}
	         .galleria-container {background-color: <?php echo $this->_tpl_vars['block']['galleria_bgcolor']; ?>
 !important;}
	         .galleria-thumbnails .galleria-image {border: 1px solid <?php echo $this->_tpl_vars['block']['galleria_bcolor']; ?>
;}
	         .galleria-thumb-nav-left, .galleria-thumb-nav-right, .galleria-info-link, .galleria-info-close, .galleria-image-nav-left, .galleria-image-nav-right {background-image: url(<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/galleria/<?php echo $this->_tpl_vars['block']['galleria_bgimg']; ?>
.png) !important; background-repeat: no-repeat !important;}
	     </style>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['ajaxeffect'] == microgallery): ?>
	   <script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/microgallery/jquery.microgallery.js'; ?>"></script>      
	   <script type="text/javascript">
            $(function() {
                $("#mG1").microgallery({
                    menu:true,
                    size:'<?php echo $this->_tpl_vars['block']['micro_size']; ?>
',
                    mode:'single'
                });
            });
        </script>
		<link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/microgallery/style.css'; ?>" />
	<?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['block']['ajaxeffect'] == galleryview): ?>
<ul id="gallery">
	<?php $_from = $this->_tpl_vars['block']['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['photo']):
?>
		<li>
			<div class="panel-overlay">
				<h2><?php echo $this->_tpl_vars['photo']['photo_title']; ?>
</h2>
				<?php echo $this->_tpl_vars['photo']['photo_desc']; ?>
 <a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><?php echo @_MB_EXTGALLERY_MOREINFO; ?>
</a></p>
			</div>
			<img class="galleryview_imagesize" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" />
		</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>
<?php endif; ?>

<?php if ($this->_tpl_vars['block']['ajaxeffect'] == galleria): ?>
  <div class="content">
     <div id="galleria">
		  <?php $_from = $this->_tpl_vars['block']['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['photo']):
?>
			  <img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_desc']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" />
		  <?php endforeach; endif; unset($_from); ?>
     </div>
   </div>
    <script type="text/javascript">
    // Load the classic theme
    Galleria.loadTheme('<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleria/galleria.classic.js'; ?>');
    // Initialize Galleria
    $('#galleria').galleria({
		transition:        '<?php echo $this->_tpl_vars['block']['galleria_transition']; ?>
',
      transition_speed:  <?php echo $this->_tpl_vars['block']['galleria_tspeed']; ?>
,
      autoplay:          <?php echo $this->_tpl_vars['block']['galleria_autoplay']; ?>

    });
    </script>
<?php endif; ?>

<?php if ($this->_tpl_vars['block']['ajaxeffect'] == microgallery): ?>
	<div class="extmicrogalleryblock">
		<div id="mG1" class="microGallery">
		  <?php $_from = $this->_tpl_vars['block']['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['photo']):
?>
			  <img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_desc']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" />
		  <?php endforeach; endif; unset($_from); ?>
		</div>
	</div>
<?php endif; ?>