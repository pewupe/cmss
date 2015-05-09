<?php
/**
 * $Id: modinfo.php v 1.5 25 April 2004 hsalazar Exp $
 * Module: Soapbox
 * Version: v 1.5
 * Release Date: 25 April 2004
 * Author: hsalazar
 * Licence: GNU
 */// translation into japanese , by movie (and domifara)   

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_SB_MD_NAME","�����");

// A brief description of this module
define("_MI_SB_MD_DESC","���ʤ��Υ������Ѥ�OpEd");

// Sub menus in main menu block
define("_MI_SB_SUB_SMNAME1","���������");

// A brief description of this module
define("_MI_SB_ALLOWSUBMIT","1. �桼�������:");
define("_MI_SB_ALLOWSUBMITDSC","�桼������������Ƥ��뤳�Ȥ���Ĥ��ޤ���?");

define('_MI_SB_AUTOAPPROVE','2. �����μ�ư��ǧ:');
define('_MI_SB_AUTOAPPROVEDSC','�����Ԥ���ߤ��ʤ��ǡ�������ư��ǧ���ޤ�');

define('_MI_SB_ALLOWADMINHITS','3. �����ԤΥҥåȥ������:');
define('_MI_SB_ALLOWADMINHITSDSC','�����Ԥ�ɽ����������ҥåȿ�Ȥ��ƥ�����Ȥ��ޤ���?');

define('_MI_SB_PERPAGE','4. ���ڡ���������κ��絭����(��������):');
define('_MI_SB_PERPAGEDSC','�������̤ǣ��٤�ɽ�����룱�ڡ���������κ��絭����');

define('_MI_SB_PERPAGEINDEX','5. ���ڡ���������κ��絭����(�桼��������):');
define('_MI_SB_PERPAGEINDEXDSC','�⥸�塼����̤ǣ��٤�ɽ�����룱�ڡ���������κ��絭����');

define('_MI_SB_IMGDIR','6. �����١����ǥ��쥯�ȥ�URL�ѥ�:');
define('_MI_SB_IMGDIRDSC','��������Ѥ���Ȥ��Υ١����ǥ��쥯�ȥ�URL�ѥ�����ꤷ�ޤ� (�Ǹ��\'/\'���դ��ʤ�����)');

define('_MI_SB_UPLOADDIR','7. �������åץ���ɥǥ��쥯�ȥ�ѥ�:');
define('_MI_SB_UPLOADDIRDSC','�����䵭���β������Ǽ����ǥ��쥯�ȥ�ѥ� (�Ǹ��\'/\'���դ��ʤ�����)');

define('_MI_SB_IMGWIDTH','8. ���᡼���κ������:');
define('_MI_SB_IMGWIDTHDSC','���åץ���ɤ��륤�᡼���κ������򥻥åȤ��Ƥ�������');

define('_MI_SB_IMGHEIGHT','9. ���᡼���κ���ι⤵:');
define('_MI_SB_IMGHEIGHTDSC','���åץ���ɤ��륤�᡼���κ���ι⤵�򥻥åȤ��Ƥ�������');

define('_MI_SB_MAXFILESIZE','10. ����Υ��åץ���ɡ�������:');
define('_MI_SB_MAXFILESIZEDSC','�ե�����򥢥åץ���ɤ�����κ���Υե����륵���������ꤷ�Ƥ�������. �ʥ����С��ǵ��Ĥ���Ƥ����������.');

define('_MI_SB_DATEFORMAT','11.���շ���:');
define('_MI_SB_DATEFORMATDSC','������ɽ���������շ�������ꤷ�Ƥ�������');

define('_MI_SB_ALLOWCOMMENTS','12. ����ñ�̤ǤΥ���������:');
define('_MI_SB_ALLOWCOMMENTSDSC','���Υ��ץ�����֤Ϥ��פ˥��åȤ���ȡ������ե�����ǵ������ȤΥ����Ȥε��ĤΥ����å��ܥå���������ˤʤäƤ���Ȥ����������Ȥ򸫤뤳�Ȥ�����ޤ�. <br /><br />
�֤������פ˥��åȤ���ȥ⥸�塼��ñ�̤Υ���������ˤʤ�ޤ� (�����Υ����Ȥ������ߤƤ���������.');

define('_MI_SB_MOREARTS','13. ��ɮ�Ԥ�¦�̤�Ȣ����ε���:');
define('_MI_SB_MOREARTSDSC','¦�̤�Ȣ��ɽ�����뵭���ο����ꤷ�Ƥ�������.');

define('_MI_SB_COLSINMENU','14. �ᥤ���˥塼��˥����̾��ɽ��?:');
define('_MI_SB_COLSINMENUDSC','���Υ��ץ�����֤Ϥ��פ˥��åȤ���ȡ���ɮ�Ԥ������̾��ᥤ���˥塼�Υ��֥�˥塼��ɽ�����뤳�Ȥ�����ޤ��� <br /><br />
¿���Υ���ब���륵���ȤǤϿ侩����ʤ��Τǡ֤������פˤ��Ƥ�������');

define('_MI_SB_COLSPERINDEX','15. �����ڡ�����ɽ�����륳����:');
define('_MI_SB_COLSPERINDEXDSC','�����ڡ����ˣ��ڡ����������ɽ�����륳����Ϥ����Ĥˤ��ޤ���? [����� = 3]');

define("_MI_SB_ALLOWRATING","16. ������ɾ�����ץ�������Ѥ��ޤ���?:");
define("_MI_SB_ALLOWRATINGDSC","�֤Ϥ��פ����ꤹ��ȡ������˥桼����������ɾ�����뤹�뤿��˥���դ��ܥ������ɽ������ޤ�[����� =�֤Ϥ���]");

define("_MI_SB_INTROTIT","17. ����ʸ�κǽ�:");
define("_MI_SB_INTROTITDSC","����ǥå����ڡ����ǤΤ�������ʸ�κǽ�");
define("_MI_SB_INTROTITDFLT","�褦����");

define("_MI_SB_INTROTEXT","18. ����ʸ:");
define("_MI_SB_INTROTEXTDSC","����ǥå����ڡ����Ǥΰ���ʸ");
define("_MI_SB_INTROTEXTDFLT","�����ǡ����ʤ��ϻ䤿���κ�Ԥγƿͤ���κǿ������κܤä��䤿���Υ����ΰ����򸫤Ĥ���Ǥ��礦�����Υ����˴�Ϣ�դ����Ƥ��뤹�٤Ƥε����򸫤�ˤϡ������̾�򥯥�å����Ƥ����������ޤ��ϡ������쥯�Ȥ˵������ɤ�ʤ鵭��̾�򥯥�å����Ƥ������������ʤ��ˡ�������ɾ���䡢���٥�����Τλ��ꡢ�����Ȥ�Ĥ���ĺ����й����Ǥ���");

define("_MI_SB_BUTTSTXT","19. ���������ܥ����ɽ��:");
define("_MI_SB_BUTTSTXTDSC","�֤Ϥ��פˤ����, �����ᥤ��ڡ����Ǥ�'��������'�ܥ����ɽ������ޤ��� [����� = �֤�������]");

define("_MI_SB_WARNING","This module comes as is, without any guarantees whatsoever. Although this module is not beta, it is still under active development. This release can be used in a live website or a production environment, but its use is under your own responsibilityi, which means the author is not responsible.");
define("_MI_SB_AUTHORMSG","Soapbox is my first XOOPS module and as such contains all the errors of someone just beginning in the world of PHP and such things. My first steps in this world I gave them with the help of Catzwolf, now retired from the XOOPS world, and Soapbox owes him a lot, including both good pointers and mistakes.<br /><br />The history of Soapbox is told in more detail in the documentation, but I must thank here the valuable help of many XOOPS users, including herko, w4z004, marcan, ackbarr, Mithrandir, Predator and many more.<br /><br />Of course, I also take into account the help of those that have criticized, praised or commented the module, those who have looked in it more than it's designed to do, and in general to all those that have accepted the risk and installed the module in their sites for their enyojment. To you all, my friends, many thanks.");

// Names of admin menu items
define("_MI_SB_ADMENU1","�����ᥤ��");
define("_MI_SB_ADMENU2","�����ο�������");
define("_MI_SB_ADMENU3","�����ο�������");
define("_MI_SB_ADMENU4","�����Υ�����������");
define("_MI_SB_ADMENU5","�֥�å�����");
define("_MI_SB_ADMENU6","�⥸�塼������");

//Names of Blocks and Block information
define("_MI_SB_ARTSRATED","�Ǥ�ɾ�����줿����");
define("_MI_SB_ARTSNEW","�Ƕ�ε���");
define("_MI_SB_ARTSTOP","�͵��ε���");
define("_MI_SB_ARTSPOTLIGHT","���ݥåȥ饤��");

// Defines for the About page
define("_MI_SB_AUTHOR_INFO","Author's information");
define("_MI_SB_AUTHOR_WEBSITE","Author's website");
define("_MI_SB_AUTHOR_EMAIL","Author's E-mail");
define("_MI_SB_AUTHOR_CREDITS","Module credits");
define("_MI_SB_MODULE_INFO","General module information");
define("_MI_SB_MODULE_STATUS","Version");
define("_MI_SB_MODULE_DEMO","Demo site");
define("_MI_SB_MODULE_SUPPORT","Support site");
define("_MI_SB_MODULE_BUG","Submit a bug");
define("_MI_SB_MODULE_FEATURE","Request a feature");
define("_MI_SB_MODULE_DISCLAIMER","Disclaimer");
define("_MI_SB_AUTHOR_WORD","Author's comment");


// Text for notifications

define('_MI_SB_GLOBAL_NOTIFY','�⥸�塼������');
define('_MI_SB_GLOBAL_NOTIFYDSC','�⥸�塼�����Τˤ��������Υ��ץ����');

define('_MI_SB_COLUMN_NOTIFY','�����');
define('_MI_SB_COLUMN_NOTIFYDSC','ɽ����Υ������Ф������Υ��ץ����');

define('_MI_SB_ARTICLE_NOTIFY','����');
define('_MI_SB_ARTICLE_NOTIFYDSC','ɽ����ε������Ф������Υ��ץ����');

define('_MI_SB_GLOBAL_NEWCOLUMN_NOTIFY','���������');
define('_MI_SB_GLOBAL_NEWCOLUMN_NOTIFYCAP','��������ब�������줿�������Τ���');
define('_MI_SB_GLOBAL_NEWCOLUMN_NOTIFYDSC','��������ब�������줿�������Τ���');
define('_MI_SB_GLOBAL_NEWCOLUMN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} ��ư���� : ��������ब��������ޤ���');

define('_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFY','�׵ᤵ�줿�����������ޤ�');
define('_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFYCAP','Ǥ�դε������������줿�������Τ���');
define('_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFYDSC','���Ƥε������������줿�������Τ���');
define('_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} ��ư���� : �����ν������׵ᤷ�ޤ���');

define('_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFY','��������»���');
define('_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFYCAP','��������»����𤬤��ä��������Τ���');
define('_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFYDSC','��������»����𤬤��ä��������Τ���');
define('_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} ��ư���� : ��������»����𤬤���ޤ���');

define('_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFY','��������Ƥ���ޤ���');
define('_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFYCAP','������������Ƥ���ǧ�ڤ��ԤäƤ���������Τ���');
define('_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFYDSC','������������Ƥ���ǧ�ڤ��ԤäƤ���������Τ���');
define('_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} ��ư���� : ��������������Ƥ���ޤ���');

define('_MI_SB_GLOBAL_NEWARTICLE_NOTIFY','���嵭��');
define('_MI_SB_GLOBAL_NEWARTICLE_NOTIFYCAP','�����������Ǻܤ��줿�������Τ���');
define('_MI_SB_GLOBAL_NEWARTICLE_NOTIFYDSC','�����������Ǻܤ��줿�������Τ���');
define('_MI_SB_GLOBAL_NEWARTICLE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} ��ư���� : �������������Ǻܤ���ޤ���');

define('_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFY','��������Ƥ���ޤ���');
define('_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFYCAP','��������ब��Ƥ���ǧ�ڤ��ԤäƤ���������Τ���');
define('_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFYDSC','��������ब��Ƥ���ǧ�ڤ��ԤäƤ���������Τ���');
define('_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} ��ư���� : ��������ब��Ƥ���ޤ���');

define('_MI_SB_COLUMN_NEWARTICLE_NOTIFY','���嵭��');
define('_MI_SB_COLUMN_NEWARTICLE_NOTIFYCAP','���������������˵������줿�������Τ���');
define('_MI_SB_COLUMN_NEWARTICLE_NOTIFYDSC','���������������˵������줿�������Τ���');
define('_MI_SB_COLUMN_NEWARTICLE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} ��ư���� : ���������ε���');

define('_MI_SB_ARTICLE_APPROVE_NOTIFY','�����Ͼ�ǧ���ޤ���');
define('_MI_SB_ARTICLE_APPROVE_NOTIFYCAP','��������ǧ���줿�������Τ���');
define('_MI_SB_ARTICLE_APPROVE_NOTIFYDSC','��������ǧ���줿�������Τ���');
define('_MI_SB_ARTICLE_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} ��ư���� : �����Ͼ�ǧ���ޤ���');

define('_MI_SB_ALLOWEDSUBMITGROUPS','�ɤΥ��롼�פ���������ƤǤ��ޤ���?');
define('_MI_SB_ALLOWEDSUBMITGROUPSDSC','��������Ƥ��뤳�Ȥ��Ǥ���桼�������롼��');

//HACK by domifara
define("_MI_SB_FORM_OPTIONS","�ե�����४�ץ����");
define("_MI_SB_FORM_OPTIONS_DESC","���Ѥ���ե����२�ǥ��������򤷤ޤ����⤷�⥷��ץ�ʥ��󥹥ȡ�������������Ƥ��ʤ��ʤ�(e.gɸ���xoops�����ѥå������Ƕ��뤵��Ƥ���xoops�����Υ��饹�������Ѥ��Ƥ�����),��DHTML�פ��������ѤǤ��ޤ�");
define("_MI_SB_FORM_COMPACT","����ѥ���");
define("_MI_SB_FORM_DHTML","DHTML");
define("_MI_SB_FORM_SPAW","Spaw Editor");
define("_MI_SB_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_SB_FORM_FCK","FCK Editor");
define("_MI_SB_FORM_KOIVI","Koivi Editor");
define("_MI_SB_FORM_TINYMCE","TinyMCE Editor");

// 1.06
define("_MI_SB_SUBMITS", 'Submissions');
define("_MI_SB_ADD_ARTICLE", 'Add Article');
define("_MI_SB_ADD_COLUMN", 'Add Column');