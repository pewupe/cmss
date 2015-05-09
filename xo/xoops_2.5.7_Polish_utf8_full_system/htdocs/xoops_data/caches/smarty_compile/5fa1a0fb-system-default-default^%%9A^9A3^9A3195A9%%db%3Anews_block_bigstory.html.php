<?php /* Smarty version 2.6.28, created on 2015-03-31 11:03:54
         compiled from db:news_block_bigstory.html */ ?>
<p><?php echo $this->_tpl_vars['block']['message']; ?>
</p>

<?php if ($this->_tpl_vars['block']['story_id'] != ""): ?>
  <p><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/article.php?storyid=<?php echo $this->_tpl_vars['block']['story_id']; ?>
"<?php echo $this->_tpl_vars['block']['htmltitle']; ?>
><?php echo $this->_tpl_vars['block']['story_title']; ?>
</a></p>
<?php endif; ?>