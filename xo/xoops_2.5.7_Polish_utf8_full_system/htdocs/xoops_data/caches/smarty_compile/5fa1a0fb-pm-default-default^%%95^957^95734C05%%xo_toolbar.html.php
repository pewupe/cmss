<?php /* Smarty version 2.6.28, created on 2015-03-31 10:24:46
         compiled from /var/www/html/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/system/themes/default/xotpl/xo_toolbar.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', '/var/www/html/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/system/themes/default/xotpl/xo_toolbar.html', 8, false),)), $this); ?>
<div id="xo-nav-options">
    <div id="xo-modname">
        <?php echo $this->_tpl_vars['modname']; ?>

    </div>
    <div id="xo-toolbar">
        <?php $_from = $this->_tpl_vars['mod_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['op']):
?>
        <a class="tooltip" href="<?php echo $this->_tpl_vars['op']['link']; ?>
" title="<?php echo $this->_tpl_vars['op']['title']; ?>
">
            <img src='<?php echo ((is_array($_tmp=@$this->_tpl_vars['op']['icon'])) ? $this->_run_mod_handler('default', true, $_tmp, ($this->_tpl_vars['theme_icons'])."/icon_options.png") : smarty_modifier_default($_tmp, ($this->_tpl_vars['theme_icons'])."/icon_options.png")); ?>
' alt="<?php echo $this->_tpl_vars['op']['title']; ?>
" />
        </a>
        <?php endforeach; endif; unset($_from); ?>    

        <?php if ($this->_tpl_vars['moddir'] != 'system' && $this->_tpl_vars['mod_options']): ?>
        <a class="tooltip" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=preferences&amp;op=showmod&amp;mod=<?php echo $this->_tpl_vars['modid']; ?>
" title="<?php echo @_OXYGEN_SITEPREF; ?>
">
            <img src="<?php echo $this->_tpl_vars['theme_icons']; ?>
/prefs.png" alt="<?php echo @_OXYGEN_SITEPREF; ?>
" />
        </a>
        <?php endif; ?>
        <a class="tooltip" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/system/help.php'; ?>" title="<?php echo @_AM_SYSTEM_HELP; ?>
">
            <img src='<?php echo ($this->_tpl_vars['theme_icons'])."/help.png"; ?>
' />
        </a>
    </div>
</div>