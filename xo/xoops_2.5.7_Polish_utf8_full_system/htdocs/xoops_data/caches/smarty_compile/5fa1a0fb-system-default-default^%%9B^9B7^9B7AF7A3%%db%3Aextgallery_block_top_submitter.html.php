<?php /* Smarty version 2.6.28, created on 2015-04-27 22:13:12
         compiled from db:extgallery_block_top_submitter.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:extgallery_block_top_submitter.html', 9, false),)), $this); ?>
<!-- Calls to Slimbox JS -->
<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/jseffects/smoothbox/mootools.js'; ?>"></script>
<script type="text/javascript" src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/jseffects/smoothbox/smoothbox.js'; ?>"></script>
<!-- Call to Slimbox CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/jseffects/smoothbox/smoothbox.css'; ?>" />

<?php $_from = $this->_tpl_vars['block']['designers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['designer']):
?>
  <table>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
" valign="middle">
	<td align="center">
      <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-useralbum.php?id=<?php echo $this->_tpl_vars['designer']['uid']; ?>
" title="<?php echo $this->_tpl_vars['designer']['uname']; ?>
"><?php echo $this->_tpl_vars['designer']['uname']; ?>
</a>
    </td>
    <td align="center" style="width: 25px"><?php echo $this->_tpl_vars['designer']['countphoto']; ?>
</td>
  </tr>
  </table>
<?php endforeach; endif; unset($_from); ?>