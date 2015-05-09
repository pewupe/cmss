<?php /* Smarty version 2.6.28, created on 2015-03-31 11:00:43
         compiled from db:arts_new.html */ ?>
<ul>
  <?php $_from = $this->_tpl_vars['block']['newarts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newarts']):
?>
    <li class="sbblock"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['newarts']['dir']; ?>
/article.php?articleID=<?php echo $this->_tpl_vars['newarts']['id']; ?>
" title="[<?php echo @_MB_SB_PUBDATE; ?>
<?php echo $this->_tpl_vars['newarts']['new']; ?>
]"><?php echo $this->_tpl_vars['newarts']['linktext']; ?>
</a></li>
  <?php endforeach; endif; unset($_from); ?>
</ul>