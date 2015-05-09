<?php /* Smarty version 2.6.28, created on 2015-03-31 11:00:43
         compiled from db:sb_article.html */ ?>
<?php echo $this->_tpl_vars['xoops_module_header']; ?>


<div id="moduleName"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/<?php echo $this->_tpl_vars['imgdir']; ?>
/icon/open.png" width="36" height="24" />&nbsp;<?php echo $this->_tpl_vars['lang_modulename']; ?>
&nbsp;<img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/<?php echo $this->_tpl_vars['imgdir']; ?>
/icon/close.png" width="36" height="24" /></div>
<div id="pagePath"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
"><?php echo @_MD_SB_HOME; ?>
</a> &bull; <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['lang_moduledirname']; ?>
/"><?php echo $this->_tpl_vars['lang_modulename']; ?>
</a> &bull; <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['lang_moduledirname']; ?>
/column.php?columnID=<?php echo $this->_tpl_vars['story']['columnID']; ?>
"><?php echo $this->_tpl_vars['story']['colname']; ?>
</a> &bull; <?php echo $this->_tpl_vars['story']['headline']; ?>
</div>

<h3 class="reddish"><?php echo $this->_tpl_vars['story']['colname']; ?>
</h3>

<table><tbody><tr>
	<td>
		<h3><?php echo $this->_tpl_vars['story']['headline']; ?>
</a></h3>
	</td>
	<td style="text-align: right;"><?php echo $this->_tpl_vars['story']['adminlinks']; ?>
<?php echo $this->_tpl_vars['story']['userlinks']; ?>
</td>
</tr></tbody></table>
<div class="spacer6"> </div>
<?php if ($this->_tpl_vars['story']['colimage'] != 'blank.png'): ?>
	<div class="picleft"><img class="pic" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/<?php echo $this->_tpl_vars['uploaddir']; ?>
/<?php echo $this->_tpl_vars['story']['colimage']; ?>
" width="80" /></div>
<?php endif; ?>

<?php if ($this->_tpl_vars['listarts']['links'] != 0): ?>
<div class="rightfloater">
<table cellspacing="0" cellpadding="1" width="100%">
<th style="font-size: 11px;"><?php echo @_MD_SB_MOREBY; ?>
<?php echo $this->_tpl_vars['story']['authorname']; ?>
</th>
<tr>
<td><ul style="margin: 0;">
<?php $_from = $this->_tpl_vars['listarts']['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?>
<li class="box"><a style="font-size: 10px;" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['lang_moduledirname']; ?>
/article.php?articleID=<?php echo $this->_tpl_vars['link']['articleID']; ?>
"><?php echo $this->_tpl_vars['link']['arttitle']; ?>
<br /><span class="smallpub"><?php echo $this->_tpl_vars['link']['published']; ?>
</span></a></li>
<?php endforeach; endif; unset($_from); ?>
</ul></td>
</tr>
<tr><td><div class="pad18"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/<?php echo $this->_tpl_vars['imgdir']; ?>
/rarrow.gif" width="10" /><?php echo $this->_tpl_vars['readmore']; ?>
</div></td></tr>
</table>
</div>
<?php endif; ?>

<div class="byline"><?php echo @_MD_SB_BY; ?>
<?php echo $this->_tpl_vars['story']['author']; ?>
 | <?php echo $this->_tpl_vars['story']['posted']; ?>
</div>
<div class="texto"><?php echo $this->_tpl_vars['story']['bodytext']; ?>
</div>

<?php if ($this->_tpl_vars['story']['artimage']): ?>
<div class="storypic"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/<?php echo $this->_tpl_vars['uploaddir']; ?>
/<?php echo $this->_tpl_vars['story']['artimage']; ?>
" /></div>
<?php endif; ?>

<div class="storynav"><?php if ($this->_tpl_vars['pagenav']): ?><?php echo @_MD_SB_PAGE; ?>
<?php echo $this->_tpl_vars['pagenav']; ?>
<?php endif; ?></div>

<div class="colteaser"><?php echo $this->_tpl_vars['story']['colname']; ?>
: <?php echo $this->_tpl_vars['story']['coldesc']; ?>
</div>

<div class="coldesc8"><?php echo @_MD_SB_ARTREAD; ?>
<?php echo $this->_tpl_vars['story']['counter']; ?>
<?php echo @_MD_SB_TIMES; ?>


<?php if ($this->_tpl_vars['showrating'] != 0): ?>
	<?php if ($this->_tpl_vars['story']['rating'] == '0.000'): ?>
	| <?php echo $this->_tpl_vars['story']['rating']; ?>

	<?php elseif ($this->_tpl_vars['story']['rating'] != '0.000'): ?>
	| <?php echo $this->_tpl_vars['story']['rating']; ?>
 | <?php echo $this->_tpl_vars['story']['votes']; ?>
.</div>
	<?php endif; ?>
<?php endif; ?>

<div class="iconlinks">
<?php if ($this->_tpl_vars['authorpm_link']): ?>
<?php echo $this->_tpl_vars['authorpm_link']; ?>

<?php endif; ?>
<a href="print.php?articleID=<?php echo $this->_tpl_vars['story']['id']; ?>
"><img src="<?php 
echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/Frameworks/moduleclasses/icons/16/printer.png'; ?>" border="0" alt="<?php echo @_MD_SB_PRINTERFRIENDLY; ?>
" /></a>
<a href="<?php echo $this->_tpl_vars['mail_link']; ?>
" target="_top"><img src="<?php 
echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/Frameworks/moduleclasses/icons/16/mail_forward.png'; ?>" border="0" alt="<?php echo @_MD_SB_SENDSTORY; ?>
" /></a>
</div>

<?php if ($this->_tpl_vars['showrating'] != 0): ?>
<form method="POST" action="article.php">
  <input type="hidden" name="lid" value="<?php echo $this->_tpl_vars['articleID']; ?>
">
  <div align="center"></div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class= "outer">
    <tr > 
      <td rowspan="2" align="right" width="29%" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
      <td align="center" width="4%" nowrap valign="middle" bgcolor="#CCCCCC">1 
        <input type="radio" name="rating" value="1" border="0" checked>
      </td>
      <td align="center" width="4%" nowrap valign="middle" bgcolor="#CCCCCC">2 
        <input type="radio" name="rating" value="2" border="0">
      </td>
      <td align="center" width="4%" nowrap valign="middle" bgcolor="#CCCCCC">3 
        <input type="radio" name="rating" value="3" border="0">
      </td>
      <td align="center" width="4%" nowrap valign="middle" bgcolor="#CCCCCC">4 
        <input type="radio" name="rating" value="4" border="0">
      </td>
      <td align="center" width="4%" nowrap valign="middle" bgcolor="#CCCCCC">5 
        <input type="radio" name="rating" value="5" border="0">
      </td>
      <td align="center" width="4%" nowrap valign="middle" bgcolor="#CCCCCC" >6 
        <input type="radio" name="rating" value="6" border="0">
      </td>
      <td align="center" width="4%" nowrap valign="middle" bgcolor="#CCCCCC">7 
        <input type="radio" name="rating" value="7" border="0">
      </td>
      <td align="center" width="4%" nowrap valign="middle" bgcolor="#CCCCCC">8 
        <input type="radio" name="rating" value="8" border="0">
      </td>
      <td align="center" width="4%" nowrap valign="middle" bgcolor="#CCCCCC">9 
        <input type="radio" name="rating" value="9" border="0">
      </td>
      <td align="center" width="5%" nowrap valign="middle" bgcolor="#CCCCCC">10 
        <input type="radio" name="rating" value="10" border="0">
      </td>
      <td rowspan="2" align="left" width="30%" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
  </table>
	
  <div align="center"> <br>
	<?php echo $this->_tpl_vars['rate_gtickets']; ?>

    <input type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang_ratethis']; ?>
">
  </div>
</form>
<?php endif; ?>

<table border="0" width="100%" cellspacing="1" cellpadding="0" align="center" >
   <tr> 
    <td colspan="3" align ="left"> 
      <div style="text-align: center; padding: 3px;
		margin:3px;"> <?php echo $this->_tpl_vars['commentsnav']; ?>
 <?php echo $this->_tpl_vars['lang_notice']; ?>
</div>
      <div style="margin:3px; padding: 3px;"> 
        <!-- start comments loop -->
        <?php if ($this->_tpl_vars['comment_mode'] == 'flat'): ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_flat.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
        <?php elseif ($this->_tpl_vars['comment_mode'] == 'thread'): ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_thread.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
        <?php elseif ($this->_tpl_vars['comment_mode'] == 'nest'): ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_nest.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
        <?php endif; ?> 
        <!-- end comments loop -->
      </div>
    </td>
  </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>