<?php /* Smarty version 2.6.28, created on 2015-04-27 22:13:11
         compiled from db:extgallery_public-upload-applet.html */ ?>
<div class="txtcenter">

<form name="uploadForm" id="uploadForm">
 <?php echo $this->_tpl_vars['categorySelect']; ?>

  <input type="hidden" name="step" value="enreg" />
  <input type="hidden" name="photo_title" value="" />
  <input type="hidden" name="photo_desc" value="" />
 </form>
<br />
<!-- --------------------------------------------------------------------------------------------------- -->
<!-- --------     A DUMMY APPLET, THAT ALLOWS THE NAVIGATOR TO CHECK THAT JAVA IS INSTALLED   ---------- -->
<!-- --------               If no Java: Java installation is prompted to the user.            ---------- -->
<!-- --------------------------------------------------------------------------------------------------- -->
<!--"CONVERTED_APPLET"-->
<!-- HTML CONVERTER -->
<script language="JavaScript" type="text/javascript"><!--
    var _info = navigator.userAgent;
    var _ns = false;
    var _ns6 = false;
    var _ie = (_info.indexOf("MSIE") > 0 && _info.indexOf("Win") > 0 && _info.indexOf("Windows 3.1") < 0);
//--></script>
    <comment>
        <script language="JavaScript" type="text/javascript"><!--
        var _ns = (navigator.appName.indexOf("Netscape") >= 0 && ((_info.indexOf("Win") > 0 && _info.indexOf("Win16") < 0 && java.lang.System.getProperty("os.version").indexOf("3.5") < 0) || (_info.indexOf("Sun") > 0) || (_info.indexOf("Linux") > 0) || (_info.indexOf("AIX") > 0) || (_info.indexOf("OS/2") > 0) || (_info.indexOf("IRIX") > 0)));
        var _ns6 = ((_ns == true) && (_info.indexOf("Mozilla/5") >= 0));
//--></script>
    </comment>

<script language="JavaScript" type="text/javascript"><!--
    if (_ie == true) document.writeln('<object classid="clsid:8AD9C840-044E-11D1-B3E9-00805F499D93" WIDTH = "0" HEIGHT = "0" NAME = "JUploadApplet"  codebase="http://java.sun.com/update/1.5.0/jinstall-1_5-windows-i586.cab#Version=5,0,0,3"><noembed><xmp>');
    else if (_ns == true && _ns6 == false) document.writeln('<embed ' +
	    'type="application/x-java-applet;version=1.5" \
            CODEBASE = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/include/applet" \
            ARCHIVE = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/include/applet/wjhk.jupload.jar" \
            CODE = "wjhk.jupload2.EmptyApplet" \
            NAME = "JUploadApplet" \
            WIDTH = "0" \
            HEIGHT = "0" \
            type ="application/x-java-applet;version=1.6" \
            scriptable ="false" ' +
	    'scriptable=false ' +
	    'pluginspage="http://java.sun.com/products/plugin/index.html#download"><noembed><xmp>');
//--></script>
<applet CODEBASE = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/include/applet" ARCHIVE = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/include/applet/wjhk.jupload.jar" CODE = "wjhk.jupload2.EmptyApplet" WIDTH = "0" HEIGHT = "0" NAME = "JUploadApplet"></xmp>
    <PARAM NAME = CODE VALUE = "wjhk.jupload2.EmptyApplet" >
    <PARAM NAME = ARCHIVE VALUE = "wjhk.jupload.jar" >
    <PARAM NAME = NAME VALUE = "JUploadApplet" >
    <param name="type" value="application/x-java-applet;version=1.5">
    <param name="scriptable" value="false">
    <PARAM NAME = "type" VALUE="application/x-java-applet;version=1.6">
    <PARAM NAME = "scriptable" VALUE="false">

</xmp>

Java 1.5 or higher plugin required.
</applet>
</noembed>
</embed>
</object>

  <applet codebase="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/include/applet" code="wjhk.jupload2.JUploadApplet"
  archive="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/include/applet/wjhk.jupload.jar" width="640" height="600" alt="">
  <param name="postURL" value="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extgallery/public-post-applet.php" />
  <param name="uploadPolicy" value="PictureUploadPolicy" />
  <param name="maxChunkSize" value="<?php echo $this->_tpl_vars['maxphotosize']; ?>
" />
  <param name="nbFilesPerRequest" value="1" />
  <param name="debugLevel" value="0" />
  <param name="lookAndFeel" value="system" />
  <param name="maxPicHeight" value="<?php echo $this->_tpl_vars['imageHeight']; ?>
" />
  <param name="realMaxPicHeight" value="<?php echo $this->_tpl_vars['imageHeight']; ?>
" />
  <param name="maxPicWidth" value="<?php echo $this->_tpl_vars['imageWidth']; ?>
" />
  <param name="realMaxPicWidth" value="<?php echo $this->_tpl_vars['imageWidth']; ?>
" />
  <param name="pictureCompressionQuality" value="<?php echo $this->_tpl_vars['imageQuality']; ?>
" />
  <param name="showLogWindow" value="false" />
  <param name="showStatusBar" value="false" />
  <param name="lang" value="<?php echo $this->_tpl_vars['appletLang']; ?>
" />
  <param name="formdata" value="uploadForm" />
  <!-- Optionnal, see code comments --> Java 1.5 or higher
  plugin required. </applet>

</div>