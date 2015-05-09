<?php /* Smarty version 2.6.28, created on 2015-05-09 20:18:20
         compiled from db:xforum_search.html */ ?>
<!-- start module contents -->

<table border="0" cellpadding="5" align="center">
  <tr>
    <td colspan="2" align="left"><?php echo $this->_tpl_vars['img_folder']; ?>
&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/index.php"><?php echo $this->_tpl_vars['forumindex']; ?>
</a><br />
		&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['img_folder']; ?>
&nbsp;&nbsp;<a href="search.php"><?php echo @_SR_SEARCH; ?>
</a></td>
  </tr>
</table>
<?php if ($this->_tpl_vars['search_info']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:xforum_searchresults.html', 'smarty_include_vars' => array('results' => $this->_tpl_vars['results'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<form name="Search" action="search.php" method="get">
  <table class="outer" border="0" cellpadding="1" cellspacing="0" align="center" width="95%">
    <tr>
      <td><table border="0" cellpadding="1" cellspacing="1" width="100%" class="head">
          <tr>
            <td class="head" width="10%" align="right"><strong><?php echo @_SR_KEYWORDS; ?>
</strong>&nbsp;</td>
            <td class="even"><input type="text" name="term" /></td>
          </tr>
          <tr>
            <td class="head" align="right"><strong><?php echo @_SR_TYPE; ?>
</strong>&nbsp;</td>
            <td class="even">
	            <select name="andor">
	            <option value="any" selected="selected"><?php echo @_SR_ANY; ?>
</option>
	            <option value="all"><?php echo @_SR_ALL; ?>
</option>
	            <option value="exact"><?php echo @_SR_EXACT; ?>
</option>
	            </select>
            </td>
          </tr>
          <tr>
            <td class="head" align="right"><strong><?php echo @_MD_FORUMC; ?>
</strong>&nbsp;</td>
            <td class="even"><?php echo $this->_tpl_vars['forum_selection_box']; ?>
</td>
          </tr>
          <tr>
            <td class="head" align="right"><strong><?php echo @_SR_SEARCHIN; ?>
</strong>&nbsp;</td>
            <td class="even"><input type="radio" name="searchin" value="title" /><?php echo @_MD_SUBJECT; ?>
&nbsp;&nbsp;
              <input type="radio" name="searchin" value="text" /><?php echo @_MD_BODY; ?>
&nbsp;&nbsp;
              <input type="radio" name="searchin" value="both" checked="checked" /><?php echo @_MD_SUBJECT; ?>
 & <?php echo @_MD_BODY; ?>
&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td class="head" align="right"><strong><?php echo @_MD_AUTHOR; ?>
</strong>&nbsp;</td>
            <td class="even"><input type="text" name="uname" value="" /></td>
          </tr>
          <tr>
            <td class="head" align="right"><strong><?php echo @_MD_SORTBY; ?>
</strong>&nbsp;</td>
            <td class="even">
            	<select name=="sortby">
            	<option value="p.post_time desc" selected="selected"><?php echo @_MD_DATE; ?>
</option>
              	<option value="t.topic_title"><?php echo @_MD_TOPIC; ?>
</option>
              	<option value="f.forum_name"><?php echo @_MD_FORUM; ?>
</option>
              	<option value="u.uname"><?php echo @_MD_USERNAME; ?>
</option>
              	</select>
          	</td>
          </tr>
          <tr>
            <td class="head" align="right"><strong><?php echo @_MD_SINCE; ?>
</strong>&nbsp;</td>
            <td class="even"><?php echo $this->_tpl_vars['since_selection_box']; ?>
</td>
          </tr>
          <?php if ($this->_tpl_vars['search_rule']): ?>
          <tr>
            <td class="head" align="right"><strong><?php echo @_SR_SEARCHRULE; ?>
</strong>&nbsp;</td>
            <td class="even"><?php echo $this->_tpl_vars['search_rule']; ?>
</td>
          </tr>
          <?php endif; ?>
          <tr>
            <td class="head" align="right">&nbsp;</td>
            <td class="even"><input type="submit" name="submit" value="<?php echo @_MD_SEARCH; ?>
" /></td>
        </table></td>
    </tr>
  </table>
</form>
<!-- end module contents -->