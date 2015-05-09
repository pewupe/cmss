<?php /* Smarty version 2.6.28, created on 2015-05-09 20:18:20
         compiled from db:xforum_poll_results.html */ ?>
<div style="text-align: center; margin: 3px;">
  <table width="100%" class="outer" cellspacing="1">
    <tr>
      <th colspan="2"><?php echo $this->_tpl_vars['poll']['question']; ?>
</th>
    </tr>
    <tr>
      <td class="head" align="right" colspan="2"><?php echo $this->_tpl_vars['poll']['end_text']; ?>
 </td>
    </tr>
<?php $_from = $this->_tpl_vars['poll']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
    <tr>
      <td class="even" width="30%" align="left"><?php echo $this->_tpl_vars['option']['text']; ?>
 </td>
      <td class="odd" width="70%" align="left"><?php echo $this->_tpl_vars['option']['image']; ?>
 <?php echo $this->_tpl_vars['option']['percent']; ?>
 </td>
    </tr>
<?php endforeach; endif; unset($_from); ?>
    <tr>
      <td class="foot" colspan="2" align="center"><?php echo $this->_tpl_vars['poll']['totalVotes']; ?>
<br />
<?php echo $this->_tpl_vars['poll']['totalVoters']; ?>
</td>
    </tr>
  </table>
</div>
<br />