<?php /* Smarty version 2.6.28, created on 2015-03-31 11:00:43
         compiled from db:columns_spot.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:columns_spot.html', 65, false),)), $this); ?>
<?php if ($this->_tpl_vars['block']['display'] != 0): ?>
	<?php if ($this->_tpl_vars['block']['verticaltemplate'] == 1): ?>
		<?php if ($this->_tpl_vars['block']['showspotlight'] != 1): ?>
			<?php $_from = ($this->_tpl_vars['block']['coldatas']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['column']):
?>
				<div style='font-size: 12px; font-weight: bold; background-color: #ccc; padding: 2px 6px; margin: 0;'><a href='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['block']['moduledir']; ?>
/column.php?columnID=<?php echo $this->_tpl_vars['column']['columnID']; ?>
'><?php echo $this->_tpl_vars['column']['name']; ?>
</div>
				<?php $_from = ($this->_tpl_vars['column']['artdatas']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['art']):
?>
					<?php if ($this->_tpl_vars['key'] == 1): ?>
					<ul>
					<?php endif; ?>
						<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['block']['moduledir']; ?>
/article.php?articleID=<?php echo $this->_tpl_vars['art']['articleID']; ?>
"><?php echo $this->_tpl_vars['art']['subhead']; ?>
</a> [<?php echo $this->_tpl_vars['art']['new']; ?>
]</li>
				<?php endforeach; endif; unset($_from); ?>
					<?php if ($this->_tpl_vars['key'] >= 1): ?>
					</ul>
					<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php else: ?>
			<?php $_from = ($this->_tpl_vars['block']['coldatas']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['column']):
?>
				<div style="font-size: 12px; font-weight: bold; background-color: #ccc; padding: 2px 6px; margin: 0;"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['block']['moduledir']; ?>
/column.php?columnID=<?php echo $this->_tpl_vars['column']['columnID']; ?>
"><?php echo $this->_tpl_vars['column']['name']; ?>
</div>
					<?php if ($this->_tpl_vars['block']['showbylineask'] == 1): ?><?php echo @_MB_SB_BY; ?>
<?php echo $this->_tpl_vars['column']['authorname']; ?>
<br /><?php endif; ?>
					<div style="margin: 8px 0 2px 0;">
					<?php if ($this->_tpl_vars['block']['showpicask'] == 1): ?>
						<?php if ($this->_tpl_vars['column']['colimage'] != "blank.png"): ?>
							<div style="float: left; width: 80px; margin-right: 10px; border: 1px solid black; "><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/<?php echo $this->_tpl_vars['block']['sbuploaddir']; ?>
/<?php echo $this->_tpl_vars['column']['colimage']; ?>
" width="80" /></div>
						<?php endif; ?>
					<?php endif; ?>
					<?php echo $this->_tpl_vars['column']['description']; ?>
</div>
					<div style="height: 0; clear: both;"></div>
				<?php $_from = ($this->_tpl_vars['column']['artdatas']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['art']):
?>
					<?php if ($this->_tpl_vars['key'] == 1): ?>
					<div>
						<h4 style="margin: 6px 0;"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['block']['moduledir']; ?>
/article.php?articleID=<?php echo $this->_tpl_vars['art']['articleID']; ?>
"><?php echo $this->_tpl_vars['art']['headline']; ?>
</a></h4>
						<?php if ($this->_tpl_vars['block']['showdateask'] == 1): ?><div style="font-size: xx-small; margin: 0 0 6px 0;"><?php echo $this->_tpl_vars['art']['date']; ?>
</div><?php endif; ?>
						<div style="margin: 8px 0 2px 0;">
						<?php echo $this->_tpl_vars['art']['teaser']; ?>
</div>
						<?php if ($this->_tpl_vars['block']['showstatsask'] == 1): ?><div style="font-size: xx-small; margin-top: 4px;"><?php echo @_MB_SB_HIT; ?>
<?php echo $this->_tpl_vars['art']['counter']; ?>
<?php echo @_MB_SB_RATE; ?>
<?php echo $this->_tpl_vars['art']['rating']; ?>
<?php echo @_MB_SB_VOTE; ?>
<?php echo $this->_tpl_vars['art']['votes']; ?>
</div><?php endif; ?>
					</div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['key'] == 2): ?>
					<div style="font-size: 12px; font-weight: bold; background-color: #ccc; padding: 2px 6px; margin: 6px 0 0 0;"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['block']['moduledir']; ?>
/column.php?columnID=<?php echo $this->_tpl_vars['art']['column']['columnID']; ?>
"><?php echo @_MB_SB_MOREHERE; ?>
</a></div>
					<ul>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['key'] >= 2): ?>
						<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['block']['moduledir']; ?>
/article.php?articleID=<?php echo $this->_tpl_vars['art']['articleID']; ?>
"><?php echo $this->_tpl_vars['art']['subhead']; ?>
</a> [<?php echo $this->_tpl_vars['art']['new']; ?>
]</li>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
					<?php if ($this->_tpl_vars['key'] >= 2): ?>
					</ul>
					<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	<?php elseif (verticaltemplate == 0): ?>
		<?php if ($this->_tpl_vars['block']['showspotlight'] != 1): ?>
			<?php $_from = ($this->_tpl_vars['block']['coldatas']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['column']):
?>
				<div style='float:left; width: 48%; margin-right: 10px;'>
				<div style='font-size: 12px; font-weight: bold; background-color: #ccc; padding: 2px 6px; margin: 0;'><a href='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['block']['moduledir']; ?>
/column.php?columnID=<?php echo $this->_tpl_vars['column']['columnID']; ?>
'><?php echo $this->_tpl_vars['column']['name']; ?>
</div>
				<?php $_from = ($this->_tpl_vars['column']['artdatas']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['art']):
?>
					<?php if ($this->_tpl_vars['key'] == 1): ?>
					<ul>
					<?php endif; ?>
						<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['block']['moduledir']; ?>
/article.php?articleID=<?php echo $this->_tpl_vars['art']['articleID']; ?>
"><?php echo $this->_tpl_vars['art']['subhead']; ?>
</a> [<?php echo $this->_tpl_vars['art']['new']; ?>
]</li>
				<?php endforeach; endif; unset($_from); ?>
					<?php if ($this->_tpl_vars['key'] >= 1): ?>
					</ul>
					<?php endif; ?>
				<?php echo smarty_function_cycle(array('values' => "</div>,</div><div style='height: 0; clear: both;'></div>"), $this);?>

			<?php endforeach; endif; unset($_from); ?>
		<?php else: ?>
			<?php $_from = ($this->_tpl_vars['block']['coldatas']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['column']):
?>
				<div style="float:left; width: 48%; margin-right: 10px;">
					<div style="font-size: 12px; font-weight: bold; background-color: #ccc; padding: 2px 6px; margin: 0;"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['block']['moduledir']; ?>
/column.php?columnID=<?php echo $this->_tpl_vars['column']['columnID']; ?>
"><?php echo $this->_tpl_vars['column']['name']; ?>
</div>
					<?php if ($this->_tpl_vars['block']['showbylineask'] == 1): ?><?php echo @_MB_SB_BY; ?>
<?php echo $this->_tpl_vars['column']['authorname']; ?>
<br /><?php endif; ?>
					<div style="margin: 8px 0 2px 0;">
					<?php if ($this->_tpl_vars['block']['showpicask'] == 1): ?>
						<?php if ($this->_tpl_vars['column']['colimage'] != "blank.png"): ?>
							<div style="float: left; width: 80px; margin-right: 10px; border: 1px solid black; "><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/<?php echo $this->_tpl_vars['block']['sbuploaddir']; ?>
/<?php echo $this->_tpl_vars['column']['colimage']; ?>
" width="80" /></div>
						<?php endif; ?>
					<?php endif; ?>
					<?php echo $this->_tpl_vars['column']['description']; ?>
</div>
				</div>
				<?php if ($this->_tpl_vars['block']['showartcles'] != 1): ?>
					<?php echo smarty_function_cycle(array('values' => ",</div><div style='height: 0; clear: both;'></div>"), $this);?>

				<?php else: ?>
					<?php $_from = ($this->_tpl_vars['column']['artdatas']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['art']):
?>
						<?php if ($this->_tpl_vars['key'] == 1): ?>
							<div>
							<div style="font-size: 12px; font-weight: bold; background-color: #ccc; padding: 2px 6px; margin: 0;"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['block']['moduledir']; ?>
/index.php"><?php echo @_MB_SB_MOREHERE; ?>
</a></div>
							<ul>
						<?php endif; ?>
							<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['block']['moduledir']; ?>
/article.php?articleID=<?php echo $this->_tpl_vars['art']['articleID']; ?>
"><?php echo $this->_tpl_vars['art']['subhead']; ?>
</a> [<?php echo $this->_tpl_vars['art']['new']; ?>
]</li>
					<?php endforeach; endif; unset($_from); ?>
						<?php if ($this->_tpl_vars['key'] >= 1): ?>
							</ul>
							</div>
						<?php endif; ?>
					<div style="height: 0; clear: both;"></div>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	<?php endif; ?>
<?php elseif ($this->_tpl_vars['block']['diaplay'] == 0): ?>
	<div style="font-size: 12px; font-weight: bold; background-color: #ccc; padding: 2px 6px; margin: 0;"><?php echo @_MB_SB_NOTHINGYET; ?>
</div>
<?php endif; ?>