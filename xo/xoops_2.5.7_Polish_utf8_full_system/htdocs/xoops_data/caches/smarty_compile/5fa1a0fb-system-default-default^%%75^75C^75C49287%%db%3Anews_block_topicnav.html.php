<?php /* Smarty version 2.6.28, created on 2015-03-31 10:40:36
         compiled from db:news_block_topicnav.html */ ?>
<table cellspacing="0">
<tr>
	<td id="mainmenu">
    <?php $_from = $this->_tpl_vars['block']['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
    	<a class="menuMain" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/index.php?storytopic=<?php echo $this->_tpl_vars['topic']['id']; ?>
"><?php echo $this->_tpl_vars['topic']['title']; ?>
 <?php echo $this->_tpl_vars['topic']['news_count']; ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
    </td>
</tr>
</table>