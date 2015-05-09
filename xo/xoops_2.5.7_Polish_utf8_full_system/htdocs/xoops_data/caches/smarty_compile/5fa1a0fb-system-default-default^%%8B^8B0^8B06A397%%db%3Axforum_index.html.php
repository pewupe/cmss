<?php /* Smarty version 2.6.28, created on 2015-05-09 20:18:20
         compiled from db:xforum_index.html */ ?>
<div id="index_welcome">
	<div class="title"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/"><?php echo $this->_tpl_vars['lang_welcomemsg']; ?>
</a></div>
	<div class="desc"><?php echo @_MD_TOSTART; ?>
</div>
	<div class="visit"><?php echo $this->_tpl_vars['lang_currenttime']; ?>

		<br /><?php echo $this->_tpl_vars['lang_lastvisit']; ?>

		<br /><?php echo @_MD_TOTALTOPICSC; ?>
<strong><?php echo $this->_tpl_vars['total_topics']; ?>
</strong> | <?php echo @_MD_TOTALPOSTSC; ?>
<strong><?php echo $this->_tpl_vars['total_posts']; ?>
</strong>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="xforum.css">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:xforum_dropdown_menu.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- start forum categories -->
<?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
<div style="height:0.3em; clear:both">&nbsp;</div>
<table cellpadding="0" cellspacing="0">
<tr>
	<td background="images/brdr-tlc.png" class="tbl-brdr-tlc" width="15px" height="15px"></td>
	<td background="images/brdr-top.png" class="tbl-brdr-top"></td>
	<td background="images/brdr-trc.png" class="tbl-brdr-trc" width="15px" height="15px"></td>        
</tr>
<tr>
	<td background="images/brdr-left.png" class="tbl-brdr-left"></td>
	<td>
    <table class="index_category" cellspacing="0" width="100%">
        <tr class="head">
            <td width="<?php if ($this->_tpl_vars['category']['cat_image']): ?>7%<?php else: ?>0%<?php endif; ?>" align="center" valign="middle"><?php if ($this->_tpl_vars['category']['cat_image']): ?><img src="<?php echo $this->_tpl_vars['category']['cat_image']; ?>
" alt="<?php echo $this->_tpl_vars['category']['cat_title']; ?>
" /><?php else: ?>&nbsp;<?php endif; ?></td>
            <?php if ($this->_tpl_vars['category']['cat_image']): ?>            <?php endif; ?>
            <td width="90%" align="left">
          <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/index.php?cat=<?php echo $this->_tpl_vars['category']['cat_id']; ?>
"><?php echo $this->_tpl_vars['category']['cat_title']; ?>
</a><br />
          <?php echo $this->_tpl_vars['category']['cat_description']; ?>
<br />
          <a href="<?php echo $this->_tpl_vars['category']['cat_sponsor']['link']; ?>
" title="<?php echo $this->_tpl_vars['category']['cat_sponsor']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['category']['cat_sponsor']['title']; ?>
</a></td>
          <td width="10%" align="center" valign="middle" nowrap="nowrap">
            <img style="position:relative; top:10px;" onclick="ToggleBlock2('cat_<?php echo $this->_tpl_vars['category']['cat_id']; ?>
', this)" src="<?php echo $this->_tpl_vars['category']['cat_display_icon']; ?>
" alt="" />            
          </td>
		</tr>
    </table>

<div id="cat_<?php echo $this->_tpl_vars['category']['cat_id']; ?>
" style="display: <?php echo $this->_tpl_vars['category']['cat_display']; ?>
">
<table cellspacing="1" width="100%">
<?php if ($this->_tpl_vars['category']['forums']): ?>
    <tr class="head" align="center">
		<td width="5%">&nbsp;</td>
		<?php if ($this->_tpl_vars['subforum_display'] == 'expand'): ?>
		<td colspan="2" width="57%" nowrap="nowrap" align="left"><?php echo @_MD_FORUM; ?>
</td>
		<?php else: ?>
		<td width="57%" nowrap="nowrap" align="left"><?php echo @_MD_FORUM; ?>
</td>
		<?php endif; ?>
		<td width="9%" nowrap="nowrap"><?php echo @_MD_TOPICS; ?>
</td>
		<td width="9%" nowrap="nowrap"><?php echo @_MD_POSTS; ?>
</td>
		<td width="20%" nowrap="nowrap"><?php echo @_MD_LASTPOST; ?>
</td>
    </tr>
<?php endif; ?>

<!-- start forums -->

<?php if ($this->_tpl_vars['subforum_display'] == 'expand'): ?>

<?php $_from = $this->_tpl_vars['category']['forums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['forum']):
?>
    <tr>
      <td class="even" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_folder']; ?>
</td>
      <td colspan="2" class="odd">
		<div id="index_forum">
	      	<span class="item"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewforum.php?forum=<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
"><?php echo $this->_tpl_vars['forum']['forum_name']; ?>
</a>
	      	<?php if ($this->_tpl_vars['rss_enable']): ?>
			<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/rss.php?f=<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
" target="_blank" title="RSS feed"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/images/rss-small.gif"></a>
			<?php endif; ?>
	      	<br /><?php echo $this->_tpl_vars['forum']['forum_desc']; ?>

	      	</span>
			<?php if ($this->_tpl_vars['forum']['forum_moderators']): ?>
			<span class="extra">
        	<?php echo @_MD_MODERATOR; ?>
: <?php echo $this->_tpl_vars['forum']['forum_moderators']; ?>

        	</span>
        	<?php endif; ?>
        </div>
      </td>
      <td class="even" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_topics']; ?>
 </td>
      <td class="odd" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_posts']; ?>
 </td>
      <td class="even" align="right" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_lastpost_time']; ?>
 <br />
		<?php echo $this->_tpl_vars['forum']['forum_lastpost_icon']; ?>
 <br />
		<?php echo $this->_tpl_vars['forum']['forum_lastpost_user']; ?>

	  </td>
    </tr>
<?php if ($this->_tpl_vars['forum']['subforum']): ?>
    <tr class="head" >
      <td width="5%">&nbsp;</td>
      <td width="5%" align="center"><?php echo $this->_tpl_vars['img_subforum']; ?>
&nbsp;</td>
      <td colspan="4" nowrap="nowrap" align="left"><?php echo @_MD_SUBFORUMS; ?>
</td>
    </tr>
<?php $_from = $this->_tpl_vars['forum']['subforum']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subforum']):
?>
    <tr>
      <td class="odd" width="5%">&nbsp;</td>
      <td class="even" align="center" valign="middle" width="5%"><?php echo $this->_tpl_vars['subforum']['forum_folder']; ?>
</td>
      <td width="52%" class="odd">
		<div id="index_forum">
	      	<span class="item"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewforum.php?forum=<?php echo $this->_tpl_vars['subforum']['forum_id']; ?>
"><strong><?php echo $this->_tpl_vars['subforum']['forum_name']; ?>
</strong></a>
	      	<?php if ($this->_tpl_vars['rss_enable']): ?>
			<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/rss.php?f=<?php echo $this->_tpl_vars['subforum']['forum_id']; ?>
" target="_blank" title="RSS feed"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/images/rss-small.gif"></a>
			<?php endif; ?>
	      	<br /><?php echo $this->_tpl_vars['subforum']['forum_desc']; ?>

	      	</span>
			<?php if ($this->_tpl_vars['subforum']['forum_moderators']): ?>
			<span class="extra">
        	<?php echo @_MD_MODERATOR; ?>
: <?php echo $this->_tpl_vars['subforum']['forum_moderators']; ?>

        	</span>
        	<?php endif; ?>
        </div>
	  </td>
      <td class="even" width="9%" align="center" valign="middle"><?php echo $this->_tpl_vars['subforum']['forum_topics']; ?>
 </td>
      <td class="odd" width="9%" align="center" valign="middle"><?php echo $this->_tpl_vars['subforum']['forum_posts']; ?>
 </td>
      <td class="even" width="20%" align="right" valign="middle"><?php echo $this->_tpl_vars['subforum']['forum_lastpost_time']; ?>
 <br />
		<?php echo $this->_tpl_vars['subforum']['forum_lastpost_icon']; ?>
 <br />
		<?php echo $this->_tpl_vars['subforum']['forum_lastpost_user']; ?>

	  </td>
   </tr>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>


<?php endforeach; endif; unset($_from); ?>

<?php elseif ($this->_tpl_vars['subforum_display'] == 'collapse'): ?>

<?php $_from = $this->_tpl_vars['category']['forums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['forum']):
?>
	<tr>
		<?php if ($this->_tpl_vars['forum']['subforum']): ?>
      	<td class="even" rowspan="2" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_folder']; ?>
</td>
		<?php else: ?>
      	<td class="even" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_folder']; ?>
</td>
		<?php endif; ?>
      	<td class="odd">
		<div id="index_forum">
	      	<span class="item"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewforum.php?forum=<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
"><?php echo $this->_tpl_vars['forum']['forum_name']; ?>
</a>
	      	<?php if ($this->_tpl_vars['rss_enable']): ?>
			<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/rss.php?f=<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
" target="_blank" title="RSS feed"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/images/rss-small.gif"></a>
			<?php endif; ?>
	      	<br /><?php echo $this->_tpl_vars['forum']['forum_desc']; ?>

	      	</span>
			<?php if ($this->_tpl_vars['forum']['forum_moderators']): ?>
			<span class="extra">
        	<?php echo @_MD_MODERATOR; ?>
: <?php echo $this->_tpl_vars['forum']['forum_moderators']; ?>

        	</span>
        	<?php endif; ?>
        </div>
        </td>
      	<td class="even" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_topics']; ?>
 </td>
      	<td class="odd" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_posts']; ?>
 </td>
      	<td class="even" align="right" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_lastpost_time']; ?>
 <br />
			<?php echo $this->_tpl_vars['forum']['forum_lastpost_icon']; ?>
 <br />
			<?php echo $this->_tpl_vars['forum']['forum_lastpost_user']; ?>
  </td>
    </tr>
	<?php if ($this->_tpl_vars['forum']['subforum']): ?>
    <tr>
     	<td class="odd" colspan="4" align="left"><?php echo @_MD_SUBFORUMS; ?>
&nbsp;<?php echo $this->_tpl_vars['img_subforum']; ?>
&nbsp;
			<?php $_from = $this->_tpl_vars['forum']['subforum']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subforum']):
?>
            <?php if ($this->_tpl_vars['subforum']['forum_permission']): ?>
			&nbsp;[<a href="viewforum.php?forum=<?php echo $this->_tpl_vars['subforum']['forum_id']; ?>
"><?php echo $this->_tpl_vars['subforum']['forum_name']; ?>
</a>]
            <?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		</td>
	</tr>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php else: ?>

<?php $_from = $this->_tpl_vars['category']['forums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['forum']):
?>
	<tr>
      	<td class="even" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_folder']; ?>
</td>
      	<td class="odd">
		<div id="index_forum">
	      	<span class="item"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewforum.php?forum=<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
"><?php echo $this->_tpl_vars['forum']['forum_name']; ?>
</a>
	      	<?php if ($this->_tpl_vars['rss_enable']): ?>
			<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/rss.php?f=<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
" target="_blank" title="RSS feed"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/images/rss-small.gif"></a>
			<?php endif; ?>
	      	<br /><?php echo $this->_tpl_vars['forum']['forum_desc']; ?>

	      	</span>
			<?php if ($this->_tpl_vars['forum']['forum_moderators']): ?>
			<span class="extra">
        	<?php echo @_MD_MODERATOR; ?>
: <?php echo $this->_tpl_vars['forum']['forum_moderators']; ?>

        	</span>
        	<?php endif; ?>
        </div>
        </td>
      	<td class="even" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_topics']; ?>
 </td>
      	<td class="odd" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_posts']; ?>
 </td>
      	<td class="even" align="right" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_lastpost_time']; ?>
 <br />
			<?php echo $this->_tpl_vars['forum']['forum_lastpost_icon']; ?>
 <br />
			<?php echo $this->_tpl_vars['forum']['forum_lastpost_user']; ?>

		</td>
    </tr>
<?php endforeach; endif; unset($_from); ?>

<?php endif; ?>
  <!-- end forums -->
</table>
</div>
   </td>
   <td background="images/brdr-right.png" class="tbl-brdr-right"></td>
</tr>
<tr>
	<td background="images/brdr-blc.png" class="tbl-brdr-blc" width="15px" height="15px"></td>
	<td background="images/brdr-bottom.png" class="tbl-brdr-bottom"></td>
	<td background="images/brdr-brc.png" class="tbl-brdr-brc" width="15px" height="15px"></td>        
</tr>
</table>
<?php endforeach; endif; unset($_from); ?>
<!-- end forum categories -->

<br clear="all" />
<div style="float: left; text-align: left;">
	<?php echo $this->_tpl_vars['img_hotfolder']; ?>
 = <?php echo @_MD_NEWPOSTS; ?>
<br />
	<?php echo $this->_tpl_vars['img_folder']; ?>
 = <?php echo @_MD_NONEWPOSTS; ?>
<br />
	<?php echo $this->_tpl_vars['img_locked_newposts']; ?>
 = <?php echo @_MD_INACTIVEFORUM_NEWPOSTS; ?>
<br />
	<?php echo $this->_tpl_vars['img_locked_nonewposts']; ?>
 = <?php echo @_MD_INACTIVEFORUM_NONEWPOSTS; ?>

</div>
<div style="float: right; text-align: right;">
	<form action="search.php" method="post" name="search" id="search">
        <input name="term" id="term" type="text" size="20" />
        <input type="hidden" name="forum" id="forum" value="all" />
        <input type="hidden" name="sortby" id="sortby" value="p.post_time desc" />
        <input type="hidden" name="searchin" id="searchin" value="both" />
        <input type="submit" name="submit" id="submit" value="<?php echo @_MD_SEARCH; ?>
" />
        <br />
        [ <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/search.php"><?php echo @_MD_ADVSEARCH; ?>
</a> ]
	</form>
</div>

<br clear="all" />
<div><div style="float:left; text-align:left; padding-top:5px;"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/rss.php?r=0"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/images/rss-a.png"></a></div>
<div style="float:right;text-align:right;padding-top: 5px;"><a href="http://www.chronolabs.coop/modules/smartsection/item.php?itemid=71"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/images/xforum.png" alt="Powered by X-Forum" /></a></div>
<div style="float:right;text-align:right;padding-top: 5px; padding-right: 5px;"><a href="http://www.xoops.org/"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/images/category/topxoops.png" alt="Top Xoops" /></a></div></div>
<br />
<br />
<?php if ($this->_tpl_vars['online']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:xforum_online.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- end module contents -->