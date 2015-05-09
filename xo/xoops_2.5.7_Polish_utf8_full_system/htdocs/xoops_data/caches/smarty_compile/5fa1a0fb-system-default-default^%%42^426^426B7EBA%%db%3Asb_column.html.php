<?php /* Smarty version 2.6.28, created on 2015-03-31 11:00:43
         compiled from db:sb_column.html */ ?>
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
</a> &bull; <?php echo $this->_tpl_vars['category']['name']; ?>
</div>

<table class="clean" cellspacing="0" cellpadding="0"><tr><td>

<?php if ($this->_tpl_vars['category']['image'] != 'blank.png'): ?>
	<span class="picleft"><img class="pic" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/<?php echo $this->_tpl_vars['uploaddir']; ?>
/<?php echo $this->_tpl_vars['category']['image']; ?>
" /></span>
<?php endif; ?>

<h3 class="reddish"><?php echo $this->_tpl_vars['category']['name']; ?>
</h3>
<div class="byline"><?php echo @_MD_SB_BY; ?>
<?php echo $this->_tpl_vars['category']['author']; ?>
</div>
<div class="intro"><?php echo $this->_tpl_vars['category']['description']; ?>
</div>
<div class="nine"><?php echo @_MD_SB_MAININDEXTOTAL; ?>
: <?php echo $this->_tpl_vars['category']['total']; ?>
</div>
</tr></td></table>
<!-- Start topic loop -->
<?php $_from = $this->_tpl_vars['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['articles']):
?>
<div class="art">
	<div>
		<table><tbody><tr>
			<td>
				<h3 class="reddish"><a href="article.php?articleID=<?php echo $this->_tpl_vars['articles']['id']; ?>
"><?php echo $this->_tpl_vars['articles']['headline']; ?>
</a></h3>
			</td>
			<td style="text-align: right;"><?php echo $this->_tpl_vars['articles']['adminlinks']; ?>
<?php echo $this->_tpl_vars['articles']['userlinks']; ?>
</td>
		</tr></tbody></table>
	</div>

	<div class="intro8"><?php echo $this->_tpl_vars['articles']['teaser']; ?>
</div>

	<table class="clean" cellspacing="0" cellpadding="0">
		<tr>
			<td valign="top">
				<div class="coldesc8"><?php echo @_MD_SB_POSTED; ?>
: <?php echo $this->_tpl_vars['articles']['datesub']; ?>
 | <?php echo @_MD_SB_TIMESREAD; ?>
: <?php echo $this->_tpl_vars['articles']['counter']; ?>
 <?php if ($this->_tpl_vars['showrating'] == 1): ?> | <?php echo $this->_tpl_vars['articles']['rating']; ?>
 [<?php echo $this->_tpl_vars['articles']['votes']; ?>
]<?php endif; ?></div>
			</td>
			<td>
				<div class="coldesc8" align="right" ><a href="article.php?articleID=<?php echo $this->_tpl_vars['articles']['id']; ?>
"><b><?php echo @_MD_SB_MORE; ?>
</b></a></div>
			</td>
		</tr>
	</table>
</div>
<?php endforeach; endif; unset($_from); ?>

<div align = 'left'><?php echo $this->_tpl_vars['category']['navbar']; ?>
</div>
<p><div align = 'center'> [ <a href='javascript:history.go(-1)'><?php echo @_MD_SB_RETURN; ?>
</a><b> | </b><a href='./index.php'><?php echo @_MD_SB_RETURN2INDEX; ?>
</a> ] </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>