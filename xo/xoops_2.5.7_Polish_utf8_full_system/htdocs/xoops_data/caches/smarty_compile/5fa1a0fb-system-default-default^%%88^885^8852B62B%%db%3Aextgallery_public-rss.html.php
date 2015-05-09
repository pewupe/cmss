<?php /* Smarty version 2.6.28, created on 2015-04-27 22:13:12
         compiled from db:extgallery_public-rss.html */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="<?php echo $this->_tpl_vars['channel_charset']; ?>
"<?php echo '?>'; ?>

<rss version="2.0">
    <channel>
        <title><?php echo $this->_tpl_vars['channel_title']; ?>
</title>
        <link>
        <?php echo $this->_tpl_vars['channel_link']; ?>
</link>
        <description><?php echo $this->_tpl_vars['channel_desc']; ?>
</description>
        <lastBuildDate><?php echo $this->_tpl_vars['channel_lastbuild']; ?>
</lastBuildDate>
        <docs>http://backend.userland.com/rss/</docs>
        <generator><?php echo $this->_tpl_vars['channel_generator']; ?>
</generator>
        <category><?php echo $this->_tpl_vars['channel_category']; ?>
</category>
        <managingEditor><?php echo $this->_tpl_vars['channel_editor']; ?>
</managingEditor>
        <webMaster><?php echo $this->_tpl_vars['channel_webmaster']; ?>
</webMaster>
        <language><?php echo $this->_tpl_vars['channel_language']; ?>
</language>
        <?php if ($this->_tpl_vars['image_url'] != ""): ?>
        <image>
            <title><?php echo $this->_tpl_vars['channel_title']; ?>
</title>
            <url><?php echo $this->_tpl_vars['image_url']; ?>
</url>
            <link>
            <?php echo $this->_tpl_vars['channel_link']; ?>
</link>
            <width><?php echo $this->_tpl_vars['image_width']; ?>
</width>
            <height><?php echo $this->_tpl_vars['image_height']; ?>
</height>
        </image>
        <?php endif; ?> 
        <?php unset($this->_sections['photo']);
$this->_sections['photo']['name'] = 'photo';
$this->_sections['photo']['loop'] = is_array($_loop=$this->_tpl_vars['photos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['photo']['show'] = true;
$this->_sections['photo']['max'] = $this->_sections['photo']['loop'];
$this->_sections['photo']['step'] = 1;
$this->_sections['photo']['start'] = $this->_sections['photo']['step'] > 0 ? 0 : $this->_sections['photo']['loop']-1;
if ($this->_sections['photo']['show']) {
    $this->_sections['photo']['total'] = $this->_sections['photo']['loop'];
    if ($this->_sections['photo']['total'] == 0)
        $this->_sections['photo']['show'] = false;
} else
    $this->_sections['photo']['total'] = 0;
if ($this->_sections['photo']['show']):

            for ($this->_sections['photo']['index'] = $this->_sections['photo']['start'], $this->_sections['photo']['iteration'] = 1;
                 $this->_sections['photo']['iteration'] <= $this->_sections['photo']['total'];
                 $this->_sections['photo']['index'] += $this->_sections['photo']['step'], $this->_sections['photo']['iteration']++):
$this->_sections['photo']['rownum'] = $this->_sections['photo']['iteration'];
$this->_sections['photo']['index_prev'] = $this->_sections['photo']['index'] - $this->_sections['photo']['step'];
$this->_sections['photo']['index_next'] = $this->_sections['photo']['index'] + $this->_sections['photo']['step'];
$this->_sections['photo']['first']      = ($this->_sections['photo']['iteration'] == 1);
$this->_sections['photo']['last']       = ($this->_sections['photo']['iteration'] == $this->_sections['photo']['total']);
?>
        <item>
            <title><?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
</title>
            <link><?php echo 'http://localhost/xo/xoops_2.5.7_Polish_utf8_full_system/htdocs/modules/extgallery/'; ?>public-photo.php?photoId=<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_id']; ?>
#photoNav</link>
            <description><?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_desc']; ?>

				<![CDATA[<br /><img src=<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/extgallery/public-photo/thumb/thumb_<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_name']; ?>
 alt='<?php echo $this->_tpl_vars['photos'][$this->_sections['photo']['index']]['photo_title']; ?>
'/> ]]>
            </description>
        </item>
        <?php endfor; endif; ?>
    </channel>
</rss>