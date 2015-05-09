<?php /* Smarty version 2.6.28, created on 2015-04-27 22:13:11
         compiled from db:extgallery_public-userphoto.html */ ?>
<div class="extgallery">
	<a title="<?php echo $this->_tpl_vars['extgalleryName']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>"><?php echo $this->_tpl_vars['extgalleryName']; ?>
</a> <img src="images/breadcrumb-link.gif" alt="BreadCrumb" /> <a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-useralbum.php?id=<?php echo $this->_tpl_vars['photo']['user']['uid']; ?>
"><?php echo $this->_tpl_vars['lang']['albumName']; ?>
</a> <img src="images/breadcrumb-link.gif" alt="BreadCrumb" /> <?php echo $this->_tpl_vars['photo']['photo_title']; ?>

	<table id="photoNav" class="outer">
		<tr>
			<td id="photoNavLeft" class="even"><?php if ($this->_tpl_vars['prevId'] != 0): ?><a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-userphoto.php?photoId=<?php echo $this->_tpl_vars['prevId']; ?>
">&lt;&lt; <?php echo $this->_tpl_vars['lang']['preview']; ?>
</a><?php else: ?>&nbsp;<?php endif; ?></td>
			<td id="photoNavCenter" class="even"><?php echo $this->_tpl_vars['currentPhoto']; ?>
 <?php echo $this->_tpl_vars['lang']['of']; ?>
 <?php echo $this->_tpl_vars['totalPhoto']; ?>
</td>
			<td id="photoNavRight" class="even"><?php if ($this->_tpl_vars['nextId'] != 0): ?><a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-userphoto.php?photoId=<?php echo $this->_tpl_vars['nextId']; ?>
"><?php echo $this->_tpl_vars['lang']['next']; ?>
 &gt;&gt;</a><?php else: ?>&nbsp;<?php endif; ?></td>
		</tr>
	</table>
	
	<div id="photo">
	<?php if ($this->_tpl_vars['photo']['photo_serveur']): ?>
		<img src="<?php echo $this->_tpl_vars['photo']['photo_serveur']; ?>
<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" />
	<?php else: ?>
		<img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/medium/<?php echo $this->_tpl_vars['photo']['photo_name']; ?>
" alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" title="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" />
	<?php endif; ?>
	</div>
	
	<?php if ($this->_tpl_vars['disp_ph_title'] == 1): ?>
	<!-- Start Photo Title -->
		<div class="photoTitle"><h2><?php echo $this->_tpl_vars['photo']['photo_title']; ?>
</h2></div>
	<!-- End Photo Title -->
	<?php endif; ?>
	
	<!-- Start Photo desc -->
		<div class="photoDesc"><?php echo $this->_tpl_vars['photo']['photo_desc']; ?>
</div>
	<!-- End Photo desc -->
	
	<?php if ($this->_tpl_vars['enableExtra']): ?>
	<!-- Start extra field -->
		<div class="photoExtra"><?php echo $this->_tpl_vars['photo']['photo_extra']; ?>
</div>
	<!-- End extra filed -->
	<?php endif; ?>
	
	<!-- Start Admin link -->
	<?php if ($this->_tpl_vars['xoops_isadmin']): ?>
	<div class="adminLink">
		<a title="edit" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-modify.php?op=edit&id=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><img src="images/edit.png" alt="edit"  /></a>&nbsp;
		<a title="delete" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-modify.php?op=delete&id=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><img src="images/delete.png" alt="delete" /></a>
	</div>
	<?php endif; ?>
	<!-- End Admin link -->
	
	<!-- Start XOOPS Tag -->
	<?php if ($this->_tpl_vars['tags']): ?>
		<div class="tagbar"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:tag_bar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
	<?php endif; ?>
	<!-- End XOOPS Tag -->
	
	<!-- Start Rating part -->
	<?php if ($this->_tpl_vars['canRate']): ?>
	<table id="rateTable" class="outer">
	<tr>
		<th colspan="5"><?php echo $this->_tpl_vars['lang']['voteFor']; ?>
</th>
	</tr>
	<tr>
		<td class="even"><a title="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 1" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-rating.php?id=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
&amp;rate=1"><img src="images/rating_1.gif" alt="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 1" title="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 1" /></a></td>
		<td class="even"><a title="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 2" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-rating.php?id=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
&amp;rate=2"><img src="images/rating_2.gif" alt="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 2" title="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 2" /></a></td>
		<td class="even"><a title="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 3" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-rating.php?id=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
&amp;rate=3"><img src="images/rating_3.gif" alt="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 3" title="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 3" /></a></td>
		<td class="even"><a title="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 4" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-rating.php?id=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
&amp;rate=4"><img src="images/rating_4.gif" alt="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 4" title="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 4" /></a></td>
		<td class="even"><a title="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 5" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-rating.php?id=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
&amp;rate=5"><img src="images/rating_5.gif" alt="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 5" title="<?php echo $this->_tpl_vars['lang']['voteFor']; ?>
 : 5" /></a></td>
	</tr>
	</table>
	<?php endif; ?>
	<!-- End Rating part -->
	
	<!-- Start Photo Information -->
	<?php if ($this->_tpl_vars['enable_info']): ?>
		<table class="outer">
			<tr>
				<th colspan="2"><?php echo $this->_tpl_vars['lang']['photoInfo']; ?>
</th>
			</tr>
			<tr>
				<?php if ($this->_tpl_vars['enable_submitter_lnk']): ?>
					<td <?php if (! $this->_tpl_vars['enable_photo_hits']): ?>colspan="2"<?php endif; ?> class="even"><?php echo $this->_tpl_vars['lang']['submitter']; ?>
 : <a title="<?php echo $this->_tpl_vars['photo']['user']['uname']; ?>
" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['photo']['user']['uid']; ?>
"><?php echo $this->_tpl_vars['photo']['user']['uname']; ?>
</a>, <a title="<?php echo $this->_tpl_vars['lang']['allPhotoBy']; ?>
 <?php echo $this->_tpl_vars['photo']['user']['uname']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-useralbum.php?id=<?php echo $this->_tpl_vars['photo']['user']['uid']; ?>
"><?php echo $this->_tpl_vars['lang']['allPhotoBy']; ?>
 <?php echo $this->_tpl_vars['photo']['user']['uname']; ?>
</a></td>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['enable_photo_hits']): ?>
					<td <?php if (! $this->_tpl_vars['enable_submitter_lnk']): ?>colspan="2"<?php endif; ?> class="even"><?php echo $this->_tpl_vars['lang']['view']; ?>
 : <?php echo $this->_tpl_vars['photo']['photo_hits']; ?>
 <?php echo $this->_tpl_vars['lang']['hits']; ?>
</td>
				<?php endif; ?>
			</tr>
			<tr>
				<?php if ($this->_tpl_vars['enable_resolution']): ?>
					<td <?php if (! $this->_tpl_vars['enable_date']): ?>colspan="2"<?php endif; ?> class="even"><?php echo $this->_tpl_vars['lang']['resolution']; ?>
 : <?php echo $this->_tpl_vars['photo']['photo_res_x']; ?>
 x <?php echo $this->_tpl_vars['photo']['photo_res_y']; ?>
 <?php echo $this->_tpl_vars['lang']['pixels']; ?>
<br /><?php echo $this->_tpl_vars['lang']['fileSize']; ?>
 : <?php echo $this->_tpl_vars['photo']['photo_size']; ?>
 Kb</td>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['enable_date']): ?>
					<td <?php if (! $this->_tpl_vars['enable_resolution']): ?>colspan="2"<?php endif; ?> class="even"><?php echo $this->_tpl_vars['lang']['added']; ?>
 : <?php echo $this->_tpl_vars['photo']['photo_date']; ?>
</td>
				<?php endif; ?>
			</tr>
			<?php if ($this->_tpl_vars['canRate']): ?>
			<tr>
				<td class="even"><?php echo $this->_tpl_vars['lang']['score']; ?>
 : <img src="images/rating_<?php echo $this->_tpl_vars['rating']; ?>
.gif" alt="rating"  /></td>
				<td class="even"><?php echo $this->_tpl_vars['photo']['photo_nbrating']; ?>
 <?php echo $this->_tpl_vars['lang']['votes']; ?>
</td>
			</tr>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['canDownload'] && $this->_tpl_vars['enable_download']): ?>
				<tr>
					<td class="even"><a title="<?php echo $this->_tpl_vars['lang']['downloadOrig']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-download.php?id=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><?php echo $this->_tpl_vars['lang']['downloadOrig']; ?>
 <img src="images/download.gif" alt="<?php echo $this->_tpl_vars['lang']['downloadOrig']; ?>
" /></a></td>
					<td class="even"><?php echo $this->_tpl_vars['photo']['photo_download']; ?>
 <?php echo $this->_tpl_vars['lang']['donwloads']; ?>
</td>
				</tr>
			<?php endif; ?>			
			<?php if ($this->_tpl_vars['canSendEcard'] && $this->_tpl_vars['enable_ecards']): ?>
				<tr>
					<td class="even"><a title="<?php echo $this->_tpl_vars['lang']['sendEcard']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-sendecard.php?id=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
"><?php echo $this->_tpl_vars['lang']['sendEcard']; ?>
 <img src="images/mail_forward.png" alt="<?php echo $this->_tpl_vars['lang']['sendEcard']; ?>
"  /></a></td>
					<td class="even"><?php echo $this->_tpl_vars['photo']['photo_ecard']; ?>
 <?php echo $this->_tpl_vars['lang']['sends']; ?>
</td>
				</tr>
			<?php endif; ?>
		</table>
	<?php endif; ?>
	<!-- End Photo Information -->
	
	<?php if ($this->_tpl_vars['show_rss']): ?>
	<div id="rss">
		<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/public-rss.php'; ?>" title="<?php echo @_MD_EXTGALLERY_RSS; ?>
">
			<img src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/images/feed.png'; ?>" alt="<?php echo @_MD_EXTGALLERY_RSS; ?>
" />
		</a>
	</div>
	<?php endif; ?>
	
	<div class="txtcenter comments">
	  <?php echo $this->_tpl_vars['commentsnav']; ?>

	  <?php echo $this->_tpl_vars['lang_notice']; ?>

	</div>
	
	<div class="comments">
	<!-- start comments loop -->
	<?php if ($this->_tpl_vars['comment_mode'] == 'flat'): ?>
	  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_flat.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php elseif ($this->_tpl_vars['comment_mode'] == 'thread'): ?>
	  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_thread.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php elseif ($this->_tpl_vars['comment_mode'] == 'nest'): ?>
	  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_nest.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<!-- end comments loop -->
	</div>
	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>