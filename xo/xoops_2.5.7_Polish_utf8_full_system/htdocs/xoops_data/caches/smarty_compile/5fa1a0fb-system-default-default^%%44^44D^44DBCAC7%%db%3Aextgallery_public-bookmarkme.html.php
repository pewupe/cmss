<?php /* Smarty version 2.6.28, created on 2015-04-27 22:13:12
         compiled from db:extgallery_public-bookmarkme.html */ ?>
<?php if ($this->_tpl_vars['show_social_book'] != 0): ?>

	<?php if ($this->_tpl_vars['show_social_book'] == 1 || $this->_tpl_vars['show_social_book'] == 3): ?>
		<div class="socialnetwork">
			<ul>
				<li><div class="facebook"><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav" layout="button_count" show_faces="false"></fb:like></div></li>
				<li><div class="twitter"><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script><a href="http://twitter.com/share/<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav" class="twitter-share-button">Tweet</a></div></li>
                <li><div class="google"><script src="https://apis.google.com/js/plusone.js" type="text/javascript"></script><g:plusone size="medium" count="true"></g:plusone></div></li>
			</ul>
		</div>
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['show_social_book'] == 2 || $this->_tpl_vars['show_social_book'] == 3): ?>
		<div class="bookmarkme">
			<!-- <div class="head bookmarkmetitle"><?php echo @_MD_EXTGALLERY_BOOKMARK_ME; ?>
</div> -->
			<div class="bookmarkmeitems">
				<a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_BLINKLIST; ?>
" href="http://www.blinklist.com/index.php?Action=Blink/addblink.php&Description=&Url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav&Title=<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/blinklist.gif" /></a>
				<a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_DELICIOUS; ?>
" href="http://del.icio.us/post?url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav&title=<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/delicious.gif" /></a>
				<a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_DIGG; ?>
" href="http://digg.com/submit?phase=2&url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/diggman.gif" /></a>
				<a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_FARK; ?>
" href="http://cgi.fark.com/cgi/fark/edit.pl?new_url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav&new_comment=<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
&new_link_other=<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
&linktype=Misc"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/fark.gif" /></a>
				<a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_FURL; ?>
" href="http://www.furl.net/storeIt.jsp?t=<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
&u=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/furl.gif" /></a>
				<a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_NEWSVINE; ?>
" href="http://www.nwvine.com/_tools/seed&save?u=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav&h=<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/newsvine.gif" /></a>
				<a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_REDDIT; ?>
" href="http://reddit.com/submit?url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav&title=<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/reddit.gif" /></a>
				<a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_SIMPY; ?>
" href="http://www.simpy.com/simpy/LinkAdd.do?href=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav&title=<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/simpy.png" /></a>
				<a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_SPURL; ?>
" href="http://www.spurl.net/spurl.php?title=<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
&url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/spurl.gif" /></a>
				<a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_YAHOO; ?>
" href="http://myweb2.search.yahoo.com/myresults/bookmarklet?t=<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
&u=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/yahoomyweb.gif" /></a>
				<a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_BALATARIN; ?>
" href="http://balatarin.com/links/submit?phase=2&amp;url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav"><img  alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/balatarin.png"></a>
				<a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_FACEBOOK; ?>
" href="http://www.facebook.com/share.php?u=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/facebook_share_icon.gif" /></a>
			   <a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_TWITTER; ?>
" href="http://twitter.com/home?status=Browsing:%20<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/twitter_share_icon.gif" /></a>
			   <a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_SCRIPSTYLE; ?>
" href="http://scriptandstyle.com/submit?url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/scriptandstyle.png" /></a>
			   <a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_STUMBLE; ?>
" href="http://www.stumbleupon.com/submit?url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/stumbleupon.png" /></a>
			   <a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_TECHNORATI; ?>
" href="http://technorati.com/faves?add=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/technorati.png" /></a>
			   <a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_MIXX; ?>
" href="http://www.mixx.com/submit?page_url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/mixx.png" /></a>
		      <a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_MYSPACE; ?>
" href="http://www.myspace.com/Modules/PostTo/Pages/?u=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/myspace.jpg" /></a>
		      <a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_DESIGNFLOAT; ?>
" href="http://www.designfloat.com/submit.php?url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/designfloat.png" /></a>
		      <a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_GOOGLEPLUS; ?>
" href="https://plusone.google.com/_/+1/confirm?hl=en&url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/google_plus_icon.png" /></a>
		      <a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_GOOGLEREADER; ?>
" href="http://www.google.com/reader/link?url=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav&amp;title=<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/google-reader-icon.png" /></a>
		      <a rel="nofollow external" title="<?php echo @_MD_EXTGALLERY_BOOKMARK_TO_GOOGLEBOOKMARKS; ?>
" href="https://www.google.com/bookmarks/mark?op=add&amp;bkmk=<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-photo.php?photoId=<?php echo $this->_tpl_vars['photo']['photo_id']; ?>
#photoNav&amp;title=<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
"><img alt="<?php echo $this->_tpl_vars['photo']['photo_title']; ?>
" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/images/bookmarks/google-icon.png" /></a>
			</div>
		</div>
	<?php endif; ?>
	
<?php endif; ?>