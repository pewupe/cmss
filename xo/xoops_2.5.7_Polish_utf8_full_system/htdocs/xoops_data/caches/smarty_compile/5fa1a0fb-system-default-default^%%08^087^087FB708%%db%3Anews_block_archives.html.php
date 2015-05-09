<?php /* Smarty version 2.6.28, created on 2015-03-31 10:40:36
         compiled from db:news_block_archives.html */ ?>
<h2><?php echo @_NW_NEWSARCHIVES; ?>
</h2>
<ul>
<?php $_from = $this->_tpl_vars['block']['archives']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['onedate']):
?>
<li>
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/archive.php?year=<?php echo $this->_tpl_vars['onedate']['year']; ?>
&amp;month=<?php echo $this->_tpl_vars['onedate']['month']; ?>
"><?php echo $this->_tpl_vars['onedate']['formated_month']; ?>
 <?php echo $this->_tpl_vars['onedate']['year']; ?>
</a></li>
</li>
<?php endforeach; endif; unset($_from); ?>
</ul>