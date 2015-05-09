<?php /* Smarty version 2.6.28, created on 2015-04-27 22:13:11
         compiled from db:extgallery_public-slideshow.html */ ?>
<?php if ($this->_tpl_vars['jquery']): ?>
	<?php if ($this->_tpl_vars['use_slideshow_effects'] == galleryview): ?>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#gallery').galleryView({
					panel_width: <?php echo $this->_tpl_vars['galleryview_panelwidth']; ?>
,
					panel_height: <?php echo $this->_tpl_vars['galleryview_panelheight']; ?>
,
					frame_width: <?php echo $this->_tpl_vars['galleryview_framewidth']; ?>
,
					frame_height: <?php echo $this->_tpl_vars['galleryview_frameheight']; ?>
,
					transition_speed: <?php echo $this->_tpl_vars['galleryview_transitionspeed']; ?>
,
					transition_interval: <?php echo $this->_tpl_vars['galleryview_transitioninterval']; ?>
,
					overlay_color: '<?php echo $this->_tpl_vars['galleryview_overlaycolor']; ?>
',
					overlay_opacity: '<?php echo $this->_tpl_vars['galleryview_overlayopacity']; ?>
',
		         nav_theme: '<?php echo $this->_tpl_vars['galleryview_navtheme']; ?>
',
		         filmstrip_position: '<?php echo $this->_tpl_vars['galleryview_position']; ?>
',
		         overlay_position: '<?php echo $this->_tpl_vars['galleryview_position']; ?>
',
		         easing: '<?php echo $this->_tpl_vars['galleryview_easing']; ?>
',
		         theme_path: '<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/images/galleryview/'; ?>'
				});
			});
		</script>
		<style type="text/css">
			.gallery { background: <?php echo $this->_tpl_vars['galleryview_backgroundcolor']; ?>
;}
			.overlay-background { height: <?php echo $this->_tpl_vars['galleryview_overlayheight']; ?>
px;}
			.overlay-background { background: <?php echo $this->_tpl_vars['galleryview_overlaycolor']; ?>
; }
			.panel-overlay { color: <?php echo $this->_tpl_vars['galleryview_overlaytextcolor']; ?>
; font-size: <?php echo $this->_tpl_vars['galleryview_overlayfontsize']; ?>
px; }
         .panel-overlay a { color: <?php echo $this->_tpl_vars['galleryview_overlaytextcolor']; ?>
; }
         .frame.current .img_wrap { border-color: <?php echo $this->_tpl_vars['galleryview_captiontextcolor']; ?>
; }
         .pointer { border-color: <?php echo $this->_tpl_vars['galleryview_captiontextcolor']; ?>
; }
         .galleryview_imagesize { max-width: <?php echo $this->_tpl_vars['galleryview_framewidth']; ?>
; max-height: <?php echo $this->_tpl_vars['galleryview_frameheight']; ?>
;}
      </style>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['use_slideshow_effects'] == galleria): ?>
     <style>
         .content{color:#eee;font:14px/1.4 "helvetica neue", arial,sans-serif;width:<?php echo $this->_tpl_vars['galleria_panelwidth']; ?>
px;margin:20px auto}
         #galleria{height:<?php echo $this->_tpl_vars['galleria_height']; ?>
px;}
         .galleria-container {background-color: <?php echo $this->_tpl_vars['galleria_bgcolor']; ?>
 !important;}
         .galleria-thumbnails .galleria-image {border: 1px solid <?php echo $this->_tpl_vars['galleria_bcolor']; ?>
;}
         .galleria-thumb-nav-left, .galleria-thumb-nav-right, .galleria-info-link, .galleria-info-close, .galleria-image-nav-left, .galleria-image-nav-right {background-image: url(<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>images/galleria/<?php echo $this->_tpl_vars['galleria_bgimg']; ?>
.png) !important; background-repeat: no-repeat !important;}
     </style>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['use_slideshow_effects'] == microgallery): ?>
	   <script type="text/javascript">
         $(function() {
             $("#mG1").microgallery({
                 menu:true,
                 size:'large',
                 mode:'single'
             });
         });
      </script>
	<?php endif; ?>
<?php else: ?>
	<?php if ($this->_tpl_vars['use_slideshow_effects'] == galleryview): ?>
			<link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleryview/galleryview.css'; ?>" />
			<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleryview/galleryview.js'; ?>"></script>
			<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleryview/timers.js'; ?>"></script>
			<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleryview/easing.js'; ?>"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$('#gallery').galleryView({
						panel_width: <?php echo $this->_tpl_vars['galleryview_panelwidth']; ?>
,
						panel_height: <?php echo $this->_tpl_vars['galleryview_panelheight']; ?>
,
						frame_width: <?php echo $this->_tpl_vars['galleryview_framewidth']; ?>
,
						frame_height: <?php echo $this->_tpl_vars['galleryview_frameheight']; ?>
,
						transition_speed: <?php echo $this->_tpl_vars['galleryview_transitionspeed']; ?>
,
						transition_interval: <?php echo $this->_tpl_vars['galleryview_transitioninterval']; ?>
,
						overlay_color: '<?php echo $this->_tpl_vars['galleryview_overlaycolor']; ?>
',
						overlay_opacity: '<?php echo $this->_tpl_vars['galleryview_overlayopacity']; ?>
',
			         nav_theme: '<?php echo $this->_tpl_vars['galleryview_navtheme']; ?>
',
			         filmstrip_position: '<?php echo $this->_tpl_vars['galleryview_position']; ?>
',
			         overlay_position: '<?php echo $this->_tpl_vars['galleryview_position']; ?>
',
			         easing: '<?php echo $this->_tpl_vars['galleryview_easing']; ?>
',
			         theme_path: '<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/images/galleryview/'; ?>'
					});
				});
			</script>
			<style type="text/css">
				.gallery { background: <?php echo $this->_tpl_vars['galleryview_backgroundcolor']; ?>
;}
				.overlay-background { height: <?php echo $this->_tpl_vars['galleryview_overlayheight']; ?>
px;}
				.overlay-background { background: <?php echo $this->_tpl_vars['galleryview_overlaycolor']; ?>
; }
				.panel-overlay { color: <?php echo $this->_tpl_vars['galleryview_overlaytextcolor']; ?>
; font-size: <?php echo $this->_tpl_vars['galleryview_overlayfontsize']; ?>
px; }
	         .panel-overlay a { color: <?php echo $this->_tpl_vars['galleryview_overlaytextcolor']; ?>
; }
	         .frame.current .img_wrap { border-color: <?php echo $this->_tpl_vars['galleryview_captiontextcolor']; ?>
; }
	         .pointer { border-color: <?php echo $this->_tpl_vars['galleryview_captiontextcolor']; ?>
; }
	         .galleryview_imagesize { max-width: <?php echo $this->_tpl_vars['galleryview_framewidth']; ?>
; max-height: <?php echo $this->_tpl_vars['galleryview_frameheight']; ?>
;}
	      </style>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['use_slideshow_effects'] == galleria): ?>
			<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleria/galleria.js'; ?>"></script>
	        <style>
	            .content{color:#eee;font:14px/1.4 "helvetica neue", arial,sans-serif;width:<?php echo $this->_tpl_vars['galleria_panelwidth']; ?>
px;margin:20px auto}
	            #galleria{height:<?php echo $this->_tpl_vars['galleria_height']; ?>
px;}
	            .galleria-container {background-color: <?php echo $this->_tpl_vars['galleria_bgcolor']; ?>
 !important;}
	            .galleria-thumbnails .galleria-image {border: 1px solid <?php echo $this->_tpl_vars['galleria_bcolor']; ?>
;}
	            .galleria-thumb-nav-left, .galleria-thumb-nav-right, .galleria-info-link, .galleria-info-close, .galleria-image-nav-left, .galleria-image-nav-right {background-image: url(<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>images/galleria/<?php echo $this->_tpl_vars['galleria_bgimg']; ?>
.png) !important; background-repeat: no-repeat !important;}
	        </style>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['use_slideshow_effects'] == microgallery): ?>
		   <script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/microgallery/jquery.microgallery.js'; ?>"></script>      
		   <script type="text/javascript">
	            $(function() {
	                $("#mG1").microgallery({
	                    menu:true,
	                    size:'large',
	                    mode:'single'
	                });
	            });
	        </script>
			<link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/microgallery/style.css'; ?>" />
	<?php endif; ?>
	<?php if ($this->_tpl_vars['use_slideshow_effects'] == galleriffic): ?>
			<link rel="stylesheet" type="text/css" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleriffic/galleriffic2.css'; ?>" />
			<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleriffic/jquery.galleriffic.js'; ?>"></script>
			<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleriffic/jquery.history.js'; ?>"></script>
			<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleriffic/jquery.opacityrollover.js'; ?>"></script>
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


	<?php if ($this->_tpl_vars['use_slideshow_effects'] == galleryview): ?>
		<ul id="gallery">
			<?php $_from = $this->_tpl_vars['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['photo']):
?>
				<li>
					<div class="panel-overlay">
						<h2><?php echo $this->_tpl_vars['photo']['photo_title']; ?>
</h2>
						<?php echo $this->_tpl_vars['photo']['photo_desc']; ?>
 <a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><?php echo @_MD_EXTGALLERY_MOREINFO; ?>
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


	<?php if ($this->_tpl_vars['use_slideshow_effects'] == galleria): ?>
	  <div class="content">
	     <div id="galleria">
			  <?php $_from = $this->_tpl_vars['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
	
	<?php if ($this->_tpl_vars['use_slideshow_effects'] == microgallery): ?>
		<div class="extmicrogallery">
			<div id="mG1" class="microGallery">
				<?php $_from = $this->_tpl_vars['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
	
	<?php if ($this->_tpl_vars['use_slideshow_effects'] == galleriffic): ?>
		<div id="galleriffic_page" class="page">
			<div id="galleriffic_container" class="container">
				<div id="gallery" class="content">
					<div id="controls" class="controls"></div>
					<div class="slideshow-container">
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
					</div>
					<div id="caption" class="caption-container">
						<div class="photo-index"></div>
					</div>
				</div>
			<div id="thumbs" class="navigation">
				<ul class="thumbs noscript">
					<?php $_from = $this->_tpl_vars['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['photo']):
?>
						<li>
							<a class="thumb" name="<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
">
								<img width="75" height="75" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" />
							</a>
						<div class="caption">
							<div class="image-title"><?php echo $this->_tpl_vars['photo']['photo_title']; ?>
</div>
							<div class="image-desc"><?php if ($this->_tpl_vars['galleriffic_show_descr'] == 1): ?><?php echo $this->_tpl_vars['photo']['photo_desc']; ?>
<?php endif; ?></div>
							<div class="download"><?php if ($this->_tpl_vars['galleriffic_download'] == 1): ?><a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-download.php?id=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><?php echo @_MD_EXTGALLERY_GFIC_DOWNLOAD; ?>
</a><?php endif; ?></div>
							<div class="info"> <a title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><?php echo @_MD_EXTGALLERY_MOREINFO; ?>
</a></div>
						</div>
						</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>     
			</div>
			<div style="clear: both;"></div>
			</div>
		</div>    
	<?php endif; ?>
	
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

<?php if ($this->_tpl_vars['use_slideshow_effects'] == galleria): ?>
    <script type="text/javascript">
    // Load the classic theme
    Galleria.loadTheme('<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/browse.php?modules/extgallery/include/galleria/galleria.classic.js'; ?>');
    // Initialize Galleria
    $('#galleria').galleria({
			transition:        '<?php echo $this->_tpl_vars['galleria_transition']; ?>
',
      transition_speed:  <?php echo $this->_tpl_vars['galleria_tspeed']; ?>
,
      autoplay:          <?php echo $this->_tpl_vars['galleria_autoplay']; ?>

    });
    </script>
<?php endif; ?>

<?php if ($this->_tpl_vars['use_slideshow_effects'] == galleriffic): ?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			// Initially set opacity on thumbs and add
			// additional styling for hover effect on thumbs
			var onMouseOutOpacity = 0.67;
			$('#thumbs ul.thumbs li').opacityrollover({
				mouseOutOpacity:   onMouseOutOpacity,
				mouseOverOpacity:  1.0,
				fadeSpeed:         'fast',
				exemptionSelector: '.selected'
			});
			
			// Initialize Advanced Galleriffic Gallery
			var gallery = $('#thumbs').galleriffic({
				delay:                     <?php echo $this->_tpl_vars['galleriffic_tdelay']; ?>
,
				numThumbs:                 <?php echo $this->_tpl_vars['galleriffic_nb_thumbs']; ?>
,
				preloadAhead:              <?php echo $this->_tpl_vars['galleriffic_nb_preload']; ?>
,
				enableTopPager:            true,
				enableBottomPager:         true,
				maxPagesToShow:            5,
				imageContainerSel:         '#slideshow',
				controlsContainerSel:      '#controls',
				captionContainerSel:       '#caption',
				loadingContainerSel:       '#loading',
				renderSSControls:          true,
				renderNavControls:         true,
				enableHistory:             false,
				syncTransitions:           true, 
				playLinkText:              '<?php echo @_MD_EXTGALLERY_GFIC_PLAY; ?>
',
				pauseLinkText:             '<?php echo @_MD_EXTGALLERY_GFIC_PAUSE; ?>
',
				prevLinkText:              '<?php echo @_MD_EXTGALLERY_GFIC_PREVIOUS; ?>
',
				nextLinkText:              '<?php echo @_MD_EXTGALLERY_GFIC_NEXT; ?>
',
				nextPageLinkText:          '<?php echo @_MD_EXTGALLERY_GFIC_NEXTP; ?>
',
				prevPageLinkText:          '<?php echo @_MD_EXTGALLERY_GFIC_PREVIOUSP; ?>
',
				autoStart:                 '<?php echo @_MD_EXTGALLERY_MOREINFO; ?>
<?php echo $this->_tpl_vars['galleriffic_autoplay']; ?>
',
				defaultTransitionDuration: '<?php echo @_MD_EXTGALLERY_MOREINFO; ?>
<?php echo $this->_tpl_vars['galleriffic_tspeed']; ?>
',
				onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);

						// Update the photo index display
						this.$captionContainer.find('div.photo-index')
							.html('Photo '+ (nextIndex+1) +' of '+ this.data.length);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						var prevPageLink = this.find('a.prev').css('visibility', 'hidden');
						var nextPageLink = this.find('a.next').css('visibility', 'hidden');
						
						// Show appropriate next / prev page links
						if (this.displayedPage > 0)
							prevPageLink.css('visibility', 'visible');

						var lastPage = this.getNumPages() - 1;
						if (this.displayedPage < lastPage)
							nextPageLink.css('visibility', 'visible');

						this.fadeTo('fast', 1.0);
					}
				});

				gallery.find('a.prev').click(function(e) {gallery.previousPage();e.preventDefault();});
				gallery.find('a.next').click(function(e) {gallery.nextPage();e.preventDefault();});
				function pageload(hash){if(hash){$.galleriffic.gotoImage(hash);} else {gallery.gotoIndex(0);}}
				$.historyInit(pageload, "advanced.html");
				$("a[rel='history']").live('click', function(e) {if (e.button != 0) return true;var hash = this.href;hash = hash.replace(/^.*#/, '');$.historyLoad(hash);return false;});
			});
	</script>
	<style type="text/css">
		div#galleriffic_page {background-color: <?php echo $this->_tpl_vars['galleriffic_bgcolor']; ?>
 !important;border-color: <?php echo $this->_tpl_vars['galleriffic_bordercolor']; ?>
;width:<?php echo $this->_tpl_vars['page_width']; ?>
px;}
		div#galleriffic_container {background-color: <?php echo $this->_tpl_vars['galleriffic_bgcolor']; ?>
 !important;border-color: <?php echo $this->_tpl_vars['galleriffic_bordercolor']; ?>
;}
		div.navigation{width:<?php echo $this->_tpl_vars['nav_width']; ?>
px;visibility:<?php echo $this->_tpl_vars['nav_visibility']; ?>
;}
		div.content{width:<?php echo $this->_tpl_vars['content_width']; ?>
px;}
		div.slideshow-container{height:<?php echo $this->_tpl_vars['pic_height']; ?>
px;}
		div.loader{height:<?php echo $this->_tpl_vars['pic_height']; ?>
px;width:<?php echo $this->_tpl_vars['pic_width']; ?>
px;}
		div.slideshow a.advance-link{height:<?php echo $this->_tpl_vars['pic_height']; ?>
px;line-height:<?php echo $this->_tpl_vars['pic_height']; ?>
px;width:<?php echo $this->_tpl_vars['content_width']; ?>
px;}
		span.image-caption{width:<?php echo $this->_tpl_vars['pic_width']; ?>
px;}
		div.content a, div.navigation a {color:<?php echo $this->_tpl_vars['galleriffic_fontcolor']; ?>
;}
	</style>
<?php endif; ?>