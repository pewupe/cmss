<?php /* Smarty version 2.6.28, created on 2015-03-31 11:03:54
         compiled from db:news_block_new.html */ ?>
<ul>
  <?php $_from = $this->_tpl_vars['block']['stories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news']):
?>
    <li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/altern8news/article.php?storyid=<?php echo $this->_tpl_vars['news']['id']; ?>
"><?php echo $this->_tpl_vars['news']['title']; ?>
</a> (<?php echo $this->_tpl_vars['news']['date']; ?>
)</li>
  <?php endforeach; endif; unset($_from); ?>
</ul>