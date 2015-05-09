<?php /* Smarty version 2.6.28, created on 2015-03-31 11:00:43
         compiled from db:arts_top.html */ ?>
<ul>
  <?php $_from = $this->_tpl_vars['block']['toparticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['toparticles']):
?>
    <li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['toparticles']['dir']; ?>
/article.php?articleID=<?php echo $this->_tpl_vars['toparticles']['id']; ?>
" title="[<?php echo @_MB_SB_TIMESREAD; ?>
<?php echo $this->_tpl_vars['toparticles']['new']; ?>
]"><?php echo $this->_tpl_vars['toparticles']['linktext']; ?>
</a></li>
  <?php endforeach; endif; unset($_from); ?>
</ul>