<?php /* Smarty version 2.6.28, created on 2015-05-09 20:18:21
         compiled from db:xforum_admin_fieldlist.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:xforum_admin_fieldlist.html', 13, false),)), $this); ?>
<div><a href="field.php?op=new"><?php echo @_ADD; ?>
 <?php echo @_AM_XFORUM_FIELD; ?>
</a></div>
<form action="field.php" method="post" id="fieldform">
    <table>
        <th><?php echo @_AM_XFORUM_NAME; ?>
</th>
        <th><?php echo @_AM_XFORUM_TITLE; ?>
</th>
        <th><?php echo @_AM_XFORUM_DESCRIPTION; ?>
</th>
        <th><?php echo @_AM_XFORUM_TYPE; ?>
</th>
        <th><?php echo @_AM_XFORUM_FORUMS; ?>
</th>
        <th><?php echo @_AM_XFORUM_WEIGHT; ?>
</th>
        <th></th>
        <?php $_from = $this->_tpl_vars['fieldcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
            <?php $_from = $this->_tpl_vars['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                <tr class="<?php echo smarty_function_cycle(array('values' => 'odd, even'), $this);?>
">
                    <td><?php echo $this->_tpl_vars['field']['field_name']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['field']['field_title']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['field']['field_description']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['field']['fieldtype']; ?>
</td>
                    <td align="center">
                        <?php if ($this->_tpl_vars['field']['canEdit']): ?>
                            <select multiple="multiple" name="forums[<?php echo $this->_tpl_vars['field']['field_id']; ?>
][]" size="4" ><?php $_from = $this->_tpl_vars['forums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['forum']):
?><option value="<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
"<?php if (in_array ( $this->_tpl_vars['forum']['forum_id'] , $this->_tpl_vars['field']['forum_id'] )): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['forum']['forum_title']; ?>
</option><?php endforeach; endif; unset($_from); ?></select>
                        <?php endif; ?>
                    </td>
                    <td align="center">
                        <?php if ($this->_tpl_vars['field']['canEdit']): ?>
                            <input type="text" name="weight[<?php echo $this->_tpl_vars['field']['field_id']; ?>
]" size="5" maxlength="5" value="<?php echo $this->_tpl_vars['field']['field_weight']; ?>
" />
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if ($this->_tpl_vars['field']['canEdit']): ?>
                        	<?php $_from = $this->_tpl_vars['forums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['forum']):
?>
                            <?php if (in_array ( $this->_tpl_vars['forum']['forum_id'] , $this->_tpl_vars['field']['forum_id'] )): ?>
                            <input type="hidden" name="oldforums[<?php echo $this->_tpl_vars['field']['field_id']; ?>
][<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
]" value="<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
" />
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                            <input type="hidden" name="oldweight[<?php echo $this->_tpl_vars['field']['field_id']; ?>
]" value="<?php echo $this->_tpl_vars['field']['field_weight']; ?>
" />
                            <?php $_from = $this->_tpl_vars['field']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cat_id']):
?>
                            <input type="hidden" name="oldcat[<?php echo $this->_tpl_vars['field']['field_id']; ?>
][<?php echo $this->_tpl_vars['cat_id']; ?>
]" value="<?php echo $this->_tpl_vars['cat_id']; ?>
" />
                            <?php endforeach; endif; unset($_from); ?>
                            <input type="hidden" name="field_ids[]" value="<?php echo $this->_tpl_vars['field']['field_id']; ?>
" />
                            <a href="field.php?id=<?php echo $this->_tpl_vars['field']['field_id']; ?>
" title="<?php echo @_EDIT; ?>
"><?php echo @_EDIT; ?>
</a>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['field']['canDelete']): ?>
                            &nbsp;<a href="field.php?op=delete&amp;id=<?php echo $this->_tpl_vars['field']['field_id']; ?>
" title="<?php echo @_DELETE; ?>
"><?php echo @_DELETE; ?>
</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        <?php endforeach; endif; unset($_from); ?>
        <tr class="<?php echo smarty_function_cycle(array('values' => 'odd, even'), $this);?>
">
            <td colspan="5">
            </td>
            <td>
                <?php echo $this->_tpl_vars['token']; ?>

                <input type="hidden" name="op" value="reorder" />
                <input type="submit" name="submit" value="<?php echo @_SUBMIT; ?>
" />
            </td>
            <td colspan="2">
            </td>
        </tr>
    </table>
</form>