<?php /* Smarty version 2.6.28, created on 2015-03-31 11:03:53
         compiled from db:news_archive.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:news_archive.html', 20, false),)), $this); ?>
<table>
<tr>
    <th><?php echo $this->_tpl_vars['lang_newsarchives']; ?>
</th>
</tr>
<?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['year']):
?>
<?php $_from = $this->_tpl_vars['year']['months']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['month']):
?>
<tr class="even">
    <td><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/archive.php?year=<?php echo $this->_tpl_vars['year']['number']; ?>
&amp;month=<?php echo $this->_tpl_vars['month']['number']; ?>
"><?php echo $this->_tpl_vars['month']['string']; ?>
 <?php echo $this->_tpl_vars['year']['number']; ?>
</a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
</table>

<?php if ($this->_tpl_vars['show_articles'] == true): ?>
<table>
<tr>
	<th><?php echo $this->_tpl_vars['lang_articles']; ?>
</th><th align="center"><?php echo $this->_tpl_vars['lang_actions']; ?>
</th><th align="center"><?php echo $this->_tpl_vars['lang_views']; ?>
</th><th align="center"><?php echo $this->_tpl_vars['lang_date']; ?>
</th>
</tr>
<?php $_from = $this->_tpl_vars['stories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['story']):
?>
<tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
	<td><?php echo $this->_tpl_vars['story']['title']; ?>
</td><td align="center"><a href="<?php echo $this->_tpl_vars['story']['print_link']; ?>
" rel="nofollow"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/print.gif" border="0" alt="<?php echo $this->_tpl_vars['lang_printer']; ?>
" /></a> <a href="<?php echo $this->_tpl_vars['story']['mail_link']; ?>
" target="_top" /><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/images/friend.gif" border="0" alt="<?php echo $this->_tpl_vars['lang_sendstory']; ?>
" /></a></td><td align="center"><?php echo $this->_tpl_vars['story']['counter']; ?>
</td><td align="center"><?php echo $this->_tpl_vars['story']['date']; ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<div><?php echo $this->_tpl_vars['lang_storytotal']; ?>
</div>
<?php endif; ?>