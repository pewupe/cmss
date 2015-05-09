<?php /* Smarty version 2.6.28, created on 2015-03-31 10:40:36
         compiled from db:news_topics_directory.html */ ?>
<h2><?php echo @_AM_NEWS_TOPICS_DIRECTORY; ?>
</h2>
<br />
<ul>
<?php $_from = $this->_tpl_vars['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
	<li><?php echo $this->_tpl_vars['topic']['prefix']; ?>
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/index.php?storytopic=<?php echo $this->_tpl_vars['topic']['id']; ?>
"><?php echo $this->_tpl_vars['topic']['title']; ?>
</a> (<?php echo $this->_tpl_vars['topic']['news_count']; ?>
)</li>
<?php endforeach; endif; unset($_from); ?>
</ul>