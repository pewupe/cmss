<?php /* Smarty version 2.6.28, created on 2015-05-09 20:18:21
         compiled from db:xforum_item.html */ ?>
<div style="padding: 5px;">

<a id="forumpost<?php echo $this->_tpl_vars['topic_post']['post_id']; ?>
"></a>

<div class="head" style="padding:5px;">
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xforum/viewtopic.php?post_id=<?php echo $this->_tpl_vars['topic_post']['post_id']; ?>
#forumpost<?php echo $this->_tpl_vars['topic_post']['post_id']; ?>
">#<?php echo $this->_tpl_vars['topic_post']['post_no']; ?>
</a> 
<?php echo $this->_tpl_vars['topic_post']['post_title']; ?>

</div>

<div class="even">
<?php echo $this->_tpl_vars['topic_post']['poster']['link']; ?>

<?php if ($this->_tpl_vars['topic_post']['poster_ip']): ?>
IP: <a href="http://www.whois.sc/<?php echo $this->_tpl_vars['topic_post']['poster_ip']; ?>
" target="_blank"><?php echo $this->_tpl_vars['topic_post']['poster_ip']; ?>
</a>
<?php endif; ?> 
<?php echo @_MD_POSTEDON; ?>
 <?php echo $this->_tpl_vars['topic_post']['post_date']; ?>

</div>

<div class="odd" style="padding:5px;"><?php echo $this->_tpl_vars['topic_post']['post_text']; ?>
</div>
<?php if ($this->_tpl_vars['topic_post']['post_attachment']): ?>
<div class="odd" style="padding:5px;"><?php echo $this->_tpl_vars['topic_post']['post_attachment']; ?>

</div>
<?php endif; ?>

<div class="foot">
<?php $_from = $this->_tpl_vars['topic_post']['thread_buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['btn']):
?> <a href="<?php echo $this->_tpl_vars['btn']['link']; ?>
&amp;post_id=<?php echo $this->_tpl_vars['topic_post']['post_id']; ?>
" title="<?php echo $this->_tpl_vars['btn']['name']; ?>
"> <?php echo $this->_tpl_vars['btn']['image']; ?>
</a> <?php endforeach; endif; unset($_from); ?>
<a href="#threadtop" title="<?php echo @_MD_UP; ?>
"> <?php echo $this->_tpl_vars['p_up']; ?>
</a>
</div>

</div>