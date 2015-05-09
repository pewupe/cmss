<?php /* Smarty version 2.6.28, created on 2015-03-31 10:13:22
         compiled from db:system_block_siteinfo.html */ ?>
<table class="outer collapse">

  <?php if ($this->_tpl_vars['block']['showgroups'] == true): ?>

  <!-- start group loop -->
  <?php $_from = $this->_tpl_vars['block']['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
  <tr>
    <th colspan="2"><?php echo $this->_tpl_vars['group']['name']; ?>
</th>
  </tr>

  <!-- start group member loop -->
  <?php $_from = $this->_tpl_vars['group']['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
  <tr>
    <td class="even txtcenter alignmiddle">
        <img style="width:32px;" src="<?php echo $this->_tpl_vars['user']['avatar']; ?>
" alt="<?php echo $this->_tpl_vars['user']['name']; ?>
" /><br />
        <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['user']['id']; ?>
" title="<?php echo $this->_tpl_vars['user']['name']; ?>
"><?php echo $this->_tpl_vars['user']['name']; ?>
</a>
    </td>
    <td class="odd width20 txtright alignmiddle">
        <?php echo $this->_tpl_vars['user']['msglink']; ?>

    </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <!-- end group member loop -->

  <?php endforeach; endif; unset($_from); ?>
  <!-- end group loop -->
  <?php endif; ?>
</table>

<br />

<div class="txtcenter marg3">
  <img src="<?php echo $this->_tpl_vars['block']['logourl']; ?>
" alt="" /><br /><?php echo $this->_tpl_vars['block']['recommendlink']; ?>

</div>