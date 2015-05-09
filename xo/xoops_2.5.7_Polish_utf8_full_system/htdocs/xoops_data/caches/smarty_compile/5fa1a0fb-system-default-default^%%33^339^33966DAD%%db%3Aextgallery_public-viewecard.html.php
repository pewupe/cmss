<?php /* Smarty version 2.6.28, created on 2015-04-27 22:13:11
         compiled from db:extgallery_public-viewecard.html */ ?>
<div class="extgallery">
	<table id="viewecard">
		<tr>
			<td>
				<img src="<?php echo $this->_tpl_vars['ecard']['photoUrl']; ?>
" alt="<?php echo $this->_tpl_vars['ecard']['ecard_greetings']; ?>
" title="eCard from <?php echo $this->_tpl_vars['ecard']['ecard_fromname']; ?>
" /><br />
			</td>
			<td id="viewecardtd">
				<div class="txtright">
					<img src="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>images/stamp.gif" alt="<?php echo $this->_tpl_vars['ecard']['ecard_greetings']; ?>
" />
				</div>
				<h2><?php echo $this->_tpl_vars['ecard']['ecard_greetings']; ?>
</h2>
				<p><?php echo $this->_tpl_vars['ecard']['ecard_desc']; ?>
</p>
				<p><?php echo $this->_tpl_vars['ecard']['ecard_fromname']; ?>
<br />
				(<a title="<?php echo $this->_tpl_vars['ecard']['ecard_fromemail']; ?>
" href="mailto:<?php echo $this->_tpl_vars['ecard']['ecard_fromemail']; ?>
"><?php echo $this->_tpl_vars['ecard']['ecard_fromemail']; ?>
</a>)</p>
			</td>
		</tr>
	</table>
	<p class="txtcenter">
		<a title="<?php echo $this->_tpl_vars['lang']['clickFormMore']; ?>
" href="<?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>"><?php echo $this->_tpl_vars['lang']['clickFormMore']; ?>
</a>
	</p>
</div>