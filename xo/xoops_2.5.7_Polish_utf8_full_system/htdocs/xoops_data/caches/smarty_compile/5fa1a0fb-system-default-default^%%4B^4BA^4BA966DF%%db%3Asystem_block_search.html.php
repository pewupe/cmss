<?php /* Smarty version 2.6.28, created on 2015-03-31 10:13:22
         compiled from db:system_block_search.html */ ?>
<div class="txtcenter">
<form style="margin-top: 0;" action="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/search.php'; ?>" method="get">
  <input type="text" name="query" size="14" />
  <input type="hidden" name="action" value="results" /><br />
  <input type="submit" value="<?php echo $this->_tpl_vars['block']['lang_search']; ?>
" />
</form>
<a href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/search.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_advsearch']; ?>
"><?php echo $this->_tpl_vars['block']['lang_advsearch']; ?>
</a>
</div>