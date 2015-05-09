<?php
// $Id: news_top.php,v 1.8 2003/03/28 04:04:51 w4z004 Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

include "../../../mainfile.php";

	global $xoopsDB, $xoopsUser;

	foreach ($HTTP_POST_VARS as $k => $v) {
		${$k} = $v;
	}

	if (!isset($HTTP_GET_VARS['storycount'])) {
		$storycount = 50;
	} else {
		$storycount = $HTTP_GET_VARS['storycount'];
	}
	
	if (!isset($HTTP_GET_VARS['titlelength'])) {
		$titlelength = 80;
	} else {
		$titlelength = $HTTP_GET_VARS['titlelength'];
	}
	
	if (!isset($HTTP_GET_VARS['toptype'])) {
		$toptype = 'comments';
	} else {
		$toptype = $HTTP_GET_VARS['toptype'];
	}
	
	if (!isset($HTTP_GET_VARS['storyorder'])) {
		$storyorder = 1;
	} else {
		$storyorder = $HTTP_GET_VARS['storyorder'];
	}

	if ($storyorder == 1) {
		$sqlorder = " DESC ";
	} else {
		$sqlorder = "";
	}
	
	if (!isset($HTTP_GET_VARS['tablewidth'])) {
		$tablewidth = 150;
	} else {
		$tablewidth = $HTTP_GET_VARS['tablewidth'];
	}

	if (!isset($HTTP_GET_VARS['limitreach'])) {
		$limitreach = 1;
	} else {
		$limitreach = $HTTP_GET_VARS['limitreach'];
	}

	if (!isset($HTTP_GET_VARS['reachback'])) {
		$reachback = 150;
	} else {
		$reachback = $HTTP_GET_VARS['reachback'];
	}

	$myts =& MyTextSanitizer::getInstance();
	$block = array();

	switch ($toptype) {
		case 'counter':
			$sql = "SELECT MAX(tocid) from ".$xoopsDB->prefix("vlstories").", ".$xoopsDB->prefix("stories")." WHERE ".$xoopsDB->prefix("stories").".storyid=".$xoopsDB->prefix("vlstories").".storyid AND published > 0 AND comments > 0";
			$result = $xoopsDB->query($sql, 1, 0);
			$num_rows = $xoopsDB->getRowsNum($result);
			if ($num_rows) {
				list($maxtoc) = $xoopsDB->fetchRow($result);
			}
			if ($limitreach) {
				$mintoc = $maxtoc - $reachback;
/*				
				$sql = "select tocid from ".$xoopsDB->prefix("vlstories").", ".$xoopsDB->prefix("stories")." WHERE ".$xoopsDB->prefix("stories").".storyid=".$xoopsDB->prefix("vlstories").".storyid AND published > 0 AND comments > 0 ORDER BY tocid ";
				$sql .= $sqlorder;
				$sql .= " LIMIT " . $reachback;
				$result = $xoopsDB->query($sql);
				for($i = 0; $i < $storycount; $i++) {
					list($mintoc) = $xoopsDB->fetchRow($result);
				}
*/				
			} else {
				$mintoc = 0;
			}
			$sql = "select ".$xoopsDB->prefix("stories").".storyid, title, published, expired, counter, comdate, comments FROM ".$xoopsDB->prefix("vlstories").", ".$xoopsDB->prefix("stories")." WHERE ".$xoopsDB->prefix("stories").".storyid=".$xoopsDB->prefix("vlstories").".storyid AND tocid <= ".$maxtoc." AND tocid >= ".$mintoc." AND published > 0 ORDER BY counter ";
			$sql .= $sqlorder;
			$result = $xoopsDB->query($sql);
			break;
		case 'published':
			$sql = "select ".$xoopsDB->prefix("stories").".storyid, title, published, expired, counter, comdate, comments FROM ".$xoopsDB->prefix("vlstories").", ".$xoopsDB->prefix("stories")." WHERE ".$xoopsDB->prefix("stories").".storyid=".$xoopsDB->prefix("vlstories").".storyid AND published > 0 ORDER BY published DESC";
			// Reachback and ASC/DESC order mean nothing when ordering by publish date
			$result = $xoopsDB->query($sql);
			break;
		case 'comments':
		default:
			$sql = "SELECT MAX(tocid) from ".$xoopsDB->prefix("vlstories").", ".$xoopsDB->prefix("stories")." WHERE ".$xoopsDB->prefix("stories").".storyid=".$xoopsDB->prefix("vlstories").".storyid AND published > 0 AND comments > 0";
			$result = $xoopsDB->query($sql, 1, 0);
			$num_rows = $xoopsDB->getRowsNum($result);
			if ($num_rows) {
				list($maxtoc) = $xoopsDB->fetchRow($result);
			}
			if ($limitreach) {
				$mintoc = $maxtoc - $reachback;
/*
				$sql = "select tocid from ".$xoopsDB->prefix("vlstories").", ".$xoopsDB->prefix("stories")." WHERE ".$xoopsDB->prefix("stories").".storyid=".$xoopsDB->prefix("vlstories").".storyid AND published > 0 AND comments > 0 ORDER BY tocid ";
				$sql .= $sqlorder;
				$sql .= " LIMIT " . $reachback;
				$result = $xoopsDB->query($sql);
				for($i = 0; $i < $storycount; $i++) {
					list($mintoc) = $xoopsDB->fetchRow($result);
				}
*/				
			} else {
				$mintoc = 0;
			}
			$sql = "SELECT ".$xoopsDB->prefix("stories").".storyid, title, published, expired, counter, comdate, comments FROM ".$xoopsDB->prefix("stories").", ".$xoopsDB->prefix("vlstories")." WHERE published > 0 AND ".$xoopsDB->prefix("stories").".storyid=".$xoopsDB->prefix("vlstories").".storyid AND tocid <= ".$maxtoc." AND tocid >= ".$mintoc." AND comments > 0 ORDER BY comments ";
			$sql .= $sqlorder . ", tocid ";
			$sql .= $sqlorder;
			$result = $xoopsDB->query($sql);
			break;
	}

	$news = array();

	$currenttheme = getTheme();
	echo "<html><head>";
	if (is_file(XOOPS_ROOT_PATH . '/themes/' . $currenttheme . '/style.css')) {
		echo "<style type='text/css' media='all'>
			<!-- @import url(" . XOOPS_URL . "/themes/" . $currenttheme . "/style.css); -->
		</style>";
	}
	echo '</head><body TOPMARGIN="0" LEFTMARGIN="0" RIGHTMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0">';

	echo "<table style='width: " . $tablewidth . "px; margin: 0; padding: 0; font-size: 11px; font-family: Verdana, Arial, Helvetica, sans-serif;'>";
	echo "<tr><td>";
	for ($i = 0; $i < $storycount; $i++) {
		$myrow = $xoopsDB->fetchArray($result); 
		$title = $myts->makeTboxData4Show($myrow["title"]);
		if ( !XOOPS_USE_MULTIBYTES ) {
			if (strlen($myrow['title']) >= $titlelength) {
				$title = $myts->makeTboxData4Show(substr($myrow['title'],0,($titlelength -1)))."...";
			}
		}
		$news['title'] = $title;
		$news['id'] = $myrow['storyid'];
		
		$news['unread'] = '&nbsp;';
		if ($myrow['comments'] > 0 && $xoopsUser) {
			$tstoryid = $myrow['storyid'];
			$comdate = $myrow['comdate'];
			$uid = $xoopsUser->getVar('uid');
			$lvcid = sprintf("STORIES%08d%08d",$uid,$tstoryid); 
			$tresult = $xoopsDB->query("SELECT lastviewed from ". $xoopsDB->prefix('commentstracker') ." WHERE lvcid='".$lvcid."'");
			if ($tresult) {
				list($lastviewed) = $xoopsDB->fetchRow($tresult);
			} else {
				$lastviewed = 1;
			}
			if ($comdate > $lastviewed) {
				$news['unread'] = "&nbsp;(<font color='red'>*</font>)&nbsp;";
			}
		}
		switch ($toptype) {
			case 'counter':
				$news['hits'] = strval($myrow['counter']);
				break;
			case 'published':
				$news['hits'] = formatTimestamp($myrow['published'],"s");
				break;
			case 'comments':
			default:
				$news['hits'] = strval($myrow['comments']);
				break;
		}
		$block['stories'][] = $news;
		echo "-".$news['unread']."<a target='_parent' href='".XOOPS_URL."/modules/stories/article.php?storyid=".$news['id']."'>".$news['title']."</a> <font style='font-size: 9px;'>(".$news['hits'].")</font> <br />";
	}
	echo "</td></tr><table>";
	echo "</body></html>";

?>