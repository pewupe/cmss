<?php /* Smarty version 2.6.28, created on 2015-03-31 11:00:43
         compiled from db:sb_index.html */ ?>
<?php echo $this->_tpl_vars['xoops_module_header']; ?>


<div id="moduleName"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/<?php echo $this->_tpl_vars['imgdir']; ?>
/icon/open.png" width="36" height="24" />&nbsp;<?php echo $this->_tpl_vars['lang_modulename']; ?>
&nbsp;<img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/<?php echo $this->_tpl_vars['imgdir']; ?>
/icon/close.png" width="36" height="24" /></div>
<div id="pagePath"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
"><?php echo @_MD_SB_HOME; ?>
</a> &bull; <?php echo $this->_tpl_vars['lang_modulename']; ?>
</div>
<h2><?php echo $this->_tpl_vars['lang_mainhead']; ?>
</h2>
<div class="intro"><?php echo $this->_tpl_vars['lang_maintext']; ?>
</div>

<?php if ($this->_tpl_vars['lang_nothing'] != ''): ?>
<div class="nocontent"><div class="padded"><?php echo $this->_tpl_vars['lang_nothing']; ?>
</div></div>
<?php endif; ?>

<div>
<?php $_from = $this->_tpl_vars['cols']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['columna']):
?>

	<div class="columnHeader">
		<div class="rfloat"><?php echo @_MD_SB_BY; ?>
 <?php echo $this->_tpl_vars['columna']['authorname']; ?>
</div>
		<a href="column.php?columnID=<?php echo $this->_tpl_vars['columna']['columnID']; ?>
"><?php echo $this->_tpl_vars['columna']['name']; ?>
</a>
	</div>
	<table class="clean"><tbody><tr><td>
		<?php if ($this->_tpl_vars['columna']['colimage'] != 'blank.png'): ?>
			<div class="picleft"><img class="pic" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/<?php echo $this->_tpl_vars['uploaddir']; ?>
/<?php echo $this->_tpl_vars['columna']['colimage']; ?>
" /></div>
		<?php endif; ?>
		<?php $_from = $this->_tpl_vars['columna']['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['articulo']):
?>

		<table class="clean"><tbody><tr>
			<td>
				<h3><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['lang_moduledirname']; ?>
/article.php?articleID=<?php echo $this->_tpl_vars['articulo']['articleID']; ?>
"><?php echo $this->_tpl_vars['articulo']['headline']; ?>
</a></h3>
			</td>
			<td style="text-align: right;"><?php echo $this->_tpl_vars['articulo']['adminlinks']; ?>
<?php echo $this->_tpl_vars['articulo']['userlinks']; ?>
</td>
		</tr></tbody></table>

		<div class="teaser">
			<span class="subdate"><?php echo $this->_tpl_vars['articulo']['datesub']; ?>
</span> | <?php echo $this->_tpl_vars['articulo']['teaser']; ?>

		</div>
		<?php endforeach; endif; unset($_from); ?>

		<div class="coldesc"><?php echo $this->_tpl_vars['columna']['description']; ?>
</div>
		<div class="nine"><?php echo @_MD_SB_ARTCOUNT; ?>
<?php echo $this->_tpl_vars['columna']['totalarts']; ?>
<?php echo @_MD_SB_ARTICLES; ?>
</div>
	</td></tr></tbody></table>
<?php endforeach; endif; unset($_from); ?>

<div><?php echo $this->_tpl_vars['columna']['navbar']; ?>
</div>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>