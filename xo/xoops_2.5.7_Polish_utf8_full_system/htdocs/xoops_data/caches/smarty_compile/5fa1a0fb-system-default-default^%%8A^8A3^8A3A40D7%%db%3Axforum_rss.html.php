<?php /* Smarty version 2.6.28, created on 2015-05-09 20:18:21
         compiled from db:xforum_rss.html */ ?>
<?php echo '<?xml'; ?>
 version="<?php echo $this->_tpl_vars['rss']['xml_version']; ?>
" encoding="<?php echo $this->_tpl_vars['rss']['xml_encoding']; ?>
"<?php echo '?>'; ?>

<rss version="<?php echo $this->_tpl_vars['rss']['rss_version']; ?>
">
  <channel>
    <title><?php echo $this->_tpl_vars['rss']['channel_title']; ?>
</title>
    <link><?php echo $this->_tpl_vars['rss']['channel_link']; ?>
</link>
    <description><?php echo $this->_tpl_vars['rss']['channel_desc']; ?>
</description>
    <lastBuildDate><?php echo $this->_tpl_vars['rss']['channel_lastbuild']; ?>
</lastBuildDate>
    <docs>http://backend.userland.com/rss/</docs>
    <generator><?php echo $this->_tpl_vars['rss']['channel_generator']; ?>
</generator>
    <category><?php echo $this->_tpl_vars['rss']['channel_category']; ?>
</category>
    <managingEditor><?php echo $this->_tpl_vars['rss']['channel_editor']; ?>
</managingEditor>
    <webMaster><?php echo $this->_tpl_vars['rss']['channel_webmaster']; ?>
</webMaster>
    <language><?php echo $this->_tpl_vars['rss']['channel_language']; ?>
</language>
    <?php if ($this->_tpl_vars['rss']['image_url'] != ""): ?>
    <image>
      <title><?php echo $this->_tpl_vars['rss']['image_title']; ?>
</title>
      <url><?php echo $this->_tpl_vars['rss']['image_url']; ?>
</url>
      <link><?php echo $this->_tpl_vars['rss']['image_link']; ?>
</link>
      <width><?php echo $this->_tpl_vars['rss']['image_width']; ?>
</width>
      <height><?php echo $this->_tpl_vars['rss']['image_height']; ?>
</height>
    </image>
    <?php endif; ?>
    <?php $_from = $this->_tpl_vars['rss']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
    <item>
      <title><?php echo $this->_tpl_vars['item']['title']; ?>
</title>
      <link><?php echo $this->_tpl_vars['item']['link']; ?>
</link>
      <description><?php echo $this->_tpl_vars['item']['description']; ?>
</description>
      <pubDate><?php echo $this->_tpl_vars['item']['pubdate']; ?>
</pubDate>
      <guid><?php echo $this->_tpl_vars['item']['guid']; ?>
</guid>
    </item>
    <?php endforeach; endif; unset($_from); ?>
  </channel>
</rss>