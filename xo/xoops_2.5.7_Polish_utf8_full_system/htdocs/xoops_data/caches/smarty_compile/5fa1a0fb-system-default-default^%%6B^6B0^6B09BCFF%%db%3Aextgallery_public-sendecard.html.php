<?php /* Smarty version 2.6.28, created on 2015-04-27 22:13:11
         compiled from db:extgallery_public-sendecard.html */ ?>
<div class="extgallery">
	<form id="<?php echo $this->_tpl_vars['send_ecard']['name']; ?>
" action="<?php echo $this->_tpl_vars['send_ecard']['action']; ?>
" method="<?php echo $this->_tpl_vars['send_ecard']['method']; ?>
" <?php echo $this->_tpl_vars['send_ecard']['extra']; ?>
>
	<table class="outer">
	<tr>
		<th colspan="3"><?php echo $this->_tpl_vars['send_ecard']['title']; ?>
</th>
	</tr>
	<tr>
		<td class="head bold" colspan="2"><?php echo $this->_tpl_vars['lang']['from']; ?>
</td>
		<td class="txtcenter" rowspan="6"><img src="<?php echo $this->_tpl_vars['photo']; ?>
" alt="<?php echo $this->_tpl_vars['lang']['from']; ?>
" /></td>
	</tr>
	<tr>
		<td class="odd"><?php echo $this->_tpl_vars['send_ecard']['elements']['ecard_fromname']['caption']; ?>
</td>
		<td class="odd"><?php echo $this->_tpl_vars['send_ecard']['elements']['ecard_fromname']['body']; ?>
</td>
	</tr>
	<tr>
		<td class="odd"><?php echo $this->_tpl_vars['send_ecard']['elements']['ecard_fromemail']['caption']; ?>
</td>
		<td class="odd"><?php echo $this->_tpl_vars['send_ecard']['elements']['ecard_fromemail']['body']; ?>
</td>
	</tr>
	<tr>
		<td class="head bold" colspan="2"><?php echo $this->_tpl_vars['lang']['to']; ?>
</td>
	</tr>
	<tr>
		<td class="odd"><?php echo $this->_tpl_vars['send_ecard']['elements']['ecard_toname']['caption']; ?>
</td>
		<td class="odd"><?php echo $this->_tpl_vars['send_ecard']['elements']['ecard_toname']['body']; ?>
</td>
	</tr>
	<tr>
		<td class="odd"><?php echo $this->_tpl_vars['send_ecard']['elements']['ecard_toemail']['caption']; ?>
</td>
		<td class="odd"><?php echo $this->_tpl_vars['send_ecard']['elements']['ecard_toemail']['body']; ?>
</td>
	</tr>
	<tr>
		<td class="head bold" colspan="3"><?php echo $this->_tpl_vars['send_ecard']['elements']['ecard_greetings']['caption']; ?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="odd"><?php echo $this->_tpl_vars['send_ecard']['elements']['ecard_greetings']['body']; ?>
</td>
	</tr>
	<tr>
		<td class="head bold" colspan="3"><?php echo $this->_tpl_vars['send_ecard']['elements']['ecard_desc']['caption']; ?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="odd"><?php echo $this->_tpl_vars['send_ecard']['elements']['ecard_desc']['body']; ?>
</td>
	</tr>
	<?php if ($this->_tpl_vars['send_ecard']['elements']['captcha']['body']): ?>
	<tr>
		<td class="head bold" colspan="3"><?php echo $this->_tpl_vars['send_ecard']['elements']['captcha']['caption']; ?>
</td>
	</tr>
	<tr>
		<td class="odd"><img src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>images/captcha.php" alt="captcha" /></td>
		<td class="odd" colspan="2"><?php echo $this->_tpl_vars['send_ecard']['elements']['captcha']['body']; ?>
</td>
	</tr>
	<?php endif; ?>
	<tr>
		<td class="txtcenter" colspan="3" class="even">
			<?php echo $this->_tpl_vars['send_ecard']['elements']['step']['body']; ?>

			<?php echo $this->_tpl_vars['send_ecard']['elements']['photo_id']['body']; ?>

			<?php echo $this->_tpl_vars['send_ecard']['elements']['submit']['body']; ?>

		</td>
	</tr>
	</table>
	</form>
</div>