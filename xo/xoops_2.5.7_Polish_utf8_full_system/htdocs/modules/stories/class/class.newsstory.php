<?php
// $Id: class.newsstory.php,v 1.10 2003/04/13 01:18:35 okazu Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
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
// ------------------------------------------------------------------------- //

include_once XOOPS_ROOT_PATH."/class/xoopsstory.php";
include_once XOOPS_ROOT_PATH."/modules/stories/class/stories_textsanitizer.php";

class NewsStory extends XoopsStory
{
	var $newstopic;   // XoopsTopic object
	var $storyid;
	var $vltable;
	var $tocid;
	var $storyurl = '';
	var $author = '';
	var $authorid = 0;
	var $comdate;
	var $module_dirname = 'stories';

	function getStory($storyid)
	{
		$db =& Database::getInstance();
		$this->table = $db->prefix("stories");
		$this->topicstable = $db->prefix("topics");
		$this->vltable = $db->prefix("vlstories");
		$sql = "SELECT * FROM ".$this->table.", ".$this->vltable." WHERE ".$this->table.".storyid=".$storyid." AND ".$this->vltable.".storyid=".$storyid;
		$array = $db->fetchArray($db->query($sql));
		$this->makeStory($array);
	}

	function linktitle($format="Show")
	{
		$myts =& storiesTextSanitizer::getInstance();
		$smiley = 1;
		if ( $this->nosmiley() ) {
			$smiley = 0;
		}
		switch ( $format ) {
		case "Show":
			$title = $myts->makeTboxData4Show($this->title,$smiley);
			break;
		case "Edit":
			$title = $myts->makeTboxData4Edit($this->title);
			break;
		case "Preview":
			$title = $myts->makeTboxData4Preview($this->title,$smiley);
			break;
		case "InForm":
			$title = $myts->makeTboxData4PreviewInForm($this->title);
			break;
		}
		if ($this->storyurl) {
			$title = "<a href='".XOOPS_URL."/modules/".$this->module_dirname."/redirect.php?storyid=".$this->storyid."'>$title</a>";
		} else {
			$title = "<a href='".XOOPS_URL."/modules/".$this->module_dirname."/article.php?storyid=".$this->storyid."'>$title</a>";
		}
		return $title;
	}

	function NewsStory($storyid=-1)
	{
		$this->db =& Database::getInstance();
		$this->table = $this->db->prefix("stories");
		$this->topicstable = $this->db->prefix("topics");
		$this->vltable = $this->db->prefix("vlstories");
		if (is_array($storyid)) {
			$this->makeStory($storyid);
			$this->newstopic = $this->topic();
		} elseif($storyid != -1) {
			$this->getStory(intval($storyid));
			$this->newstopic = $this->topic();
		}
	}

	function getAllPublished($limit=0, $start=0, $topic=0, $ihome=0, $asobject=true)
	{
		$db =& Database::getInstance();
		$this->table = $db->prefix("stories");
		$this->topicstable = $db->prefix("topics");
		$this->vltable = $db->prefix("vlstories");
		$myts =& storiesTextSanitizer::getInstance();
		$this->table = $db->prefix("stories");
		$this->topicstable = $db->prefix("topics");
		$this->vltable = $db->prefix("vlstories");
		$ret = array();
		$sql = "SELECT * FROM ".$this->table.", ".$this->vltable." WHERE ".$this->table.".storyid=".$this->vltable.".storyid AND published > 0 AND published <= ".time()." AND (expired = 0 OR expired > ".time().")";
		if ( !empty($topic) ) {
			$sql .= " AND topicid=".intval($topic)." AND (ihome=1 OR ihome=0)";
		} else {
			if ( $ihome == 0 ) {
				$sql .= " AND ihome=0";
			}
		}
		if (!empty($uid) && intval($uid) > 0) {
			$sql .= ' AND uid='.$uid;
		}
 		$sql .= " ORDER BY published DESC";
		$result = $db->query($sql,intval($limit),intval($start));
		while ( $myrow = $db->fetchArray($result) ) {
			if ( $asobject ) {
				$ret[] = new NewsStory($myrow);
			} else {
				$ret[$myrow['storyid']] = $myts->makeTboxData4Show($myrow['title']);
			}
		}
		return $ret;
	}

	function getPublished($limit=0, $start=0, $topic=0, $author='', $ihome=0, $asobject=true)
	{
		$db =& Database::getInstance();
		$this->table = $db->prefix("stories");
		$this->topicstable = $db->prefix("topics");
		$this->vltable = $db->prefix("vlstories");
		$myts =& storiesTextSanitizer::getInstance();
		$ret = array();
		$sql = "SELECT DISTINCT * FROM ".$this->table.", ".$this->vltable." WHERE ".$this->table.".storyid=".$this->vltable.".storyid AND published > 0 AND published <= ".time()." AND (expired = 0 OR expired > ".time().")";
		if ( !empty($topic) ) {
			$sql .= " AND topicid=".intval($topic);
		}
		if ( !empty($author) ) {
			$sql .= " AND author='".$author."'";
		}
		if ( $ihome == 0 ) {
			$sql .= " AND ihome=0";
		} else {
			$sql .= " AND (ihome=1 OR ihome=0)";
		}
		if (!empty($uid) && intval($uid) > 0) {
			$sql .= ' AND uid='.$uid;
		}
 		$sql .= " ORDER BY tocid DESC";
		$result = $db->query($sql,intval($limit),intval($start));
		while ( $myrow = $db->fetchArray($result) ) {
			if ( $asobject ) {
				$ret[] = new NewsStory($myrow);
			} else {
				$ret[$myrow['storyid']] = $myts->makeTboxData4Show($myrow['title']);
			}
		}
		return $ret;
	}

	// added new function to get all expired stories
	function getAllExpired($limit=0, $start=0, $topic=0, $ihome=0, $asobject=true)
	{
		$db =& Database::getInstance();
		$this->table = $db->prefix("stories");
		$this->topicstable = $db->prefix("topics");
		$this->vltable = $db->prefix("vlstories");
		$myts =& storiesTextSanitizer::getInstance();
		$ret = array();
		$sql = "SELECT * FROM ".$this->table.", ".$this->vltable." WHERE ".$this->table.".storyid=".$this->vltable.".storyid AND expired <= ".time()." AND expired > 0";
		if ( !empty($topic) ) {
			$sql .= " AND topicid=".intval($topic)." AND (ihome=1 OR ihome=0)";
		} else {
			if ( $ihome == 0 ) {
				$sql .= " AND ihome=0";
			}
		}
		if (!empty($uid) && intval($uid) > 0) {
			$sql .= ' AND uid='.$uid;
		}
 		$sql .= " ORDER BY expired DESC";
		$result = $db->query($sql,intval($limit),intval($start));
		while ( $myrow = $db->fetchArray($result) ) {
			if ( $asobject ) {
				$ret[] = new NewsStory($myrow);
			} else {
				$ret[$myrow['storyid']] = $myts->makeTboxData4Show($myrow['title']);
			}
		}
		return $ret;
	}

	function getAllAutoStory($limit=0, $asobject=true)
	{
		$db =& Database::getInstance();
		$this->table = $db->prefix("stories");
		$this->topicstable = $db->prefix("topics");
		$this->vltable = $db->prefix("vlstories");
		$myts =& storiesTextSanitizer::getInstance();
		$ret = array();
		$sql = "SELECT * FROM ".$this->table.", ".$this->vltable." WHERE ".$this->table.".storyid=".$this->vltable.".storyid AND published > ".time()." ORDER BY published ASC";
		$result = $db->query($sql,$limit,0);
		while ( $myrow = $db->fetchArray($result) ) {
			if ( $asobject ) {
				$ret[] = new NewsStory($myrow);
			} else {
				$ret[$myrow['storyid']] = $myts->makeTboxData4Show($myrow['title']);
			}
		}
		return $ret;
	}

	function getAllSubmitted($limit=0, $asobject=true)
	{
		$db =& Database::getInstance();
		$this->table = $db->prefix("stories");
		$this->topicstable = $db->prefix("topics");
		$this->vltable = $db->prefix("vlstories");
		$myts =& storiesTextSanitizer::getInstance();
		$ret = array();
		$sql = "SELECT * FROM ".$this->table.", ".$this->vltable." WHERE ".$this->table.".storyid=".$this->vltable.".storyid AND published=0 ORDER BY created DESC";
		$result = $db->query($sql,$limit,0);
		while ( $myrow = $db->fetchArray($result) ) {
			if ( $asobject ) {
				$ret[] = new NewsStory($myrow);
			} else {
				$ret[$myrow['storyid']] = $myts->makeTboxData4Show($myrow['title']);
			}
		}
		return $ret;
	}

	function getByAuthor($author)
	{
		$db =& Database::getInstance();
		$this->table = $db->prefix("stories");
		$this->topicstable = $db->prefix("topics");
		$this->vltable = $db->prefix("vlstories");
		$ret = array();
		$result = $db->query("SELECT DISTINCT * FROM ".$this->table.", ".$this->vltable." WHERE ".$this->table.".storyid=".$this->vltable.".storyid AND author='".$author."'");
		while( $myrow = $db->fetchArray($result) ){
			$ret[] = new NewsStory($myrow);
		}
		return $ret;
	}

	function getByTopic($topicid)
	{
		$db =& Database::getInstance();
		$this->table = $db->prefix("stories");
		$this->topicstable = $db->prefix("topics");
		$this->vltable = $db->prefix("vlstories");
		$ret = array();
		$result = $db->query("SELECT DISTINCT * FROM ".$this->table.", ".$this->vltable." WHERE ".$this->table.".storyid=".$this->vltable.".storyid AND topicid=".intval($topicid)."");
		while( $myrow = $db->fetchArray($result) ){
			$ret[] = new NewsStory($myrow);
		}
		return $ret;
	}

	function countByTopic($topicid=0)
	{
		$db =& Database::getInstance();
		$this->table = $db->prefix("stories");
		$this->topicstable = $db->prefix("topics");
		$this->vltable = $db->prefix("vlstories");
		$sql = "SELECT COUNT(*) FROM ".$this->table."
		WHERE expired >= ".time()."";
		if ( $topicid != 0 ) {
			$sql .= " AND  topicid=".intval($topicid);
		}
		$result = $db->query($sql);
		list($count) = $db->fetchRow($result);
		return $count;
	}

	function countPublishedByTopic($topicid=0)
	{
		$db =& Database::getInstance();
		$this->table = $db->prefix("stories");
		$this->topicstable = $db->prefix("topics");
		$this->vltable = $db->prefix("vlstories");
		$sql = "SELECT COUNT(*) FROM ".$this->table." WHERE published > 0 AND published <= ".time()." AND (expired = 0 OR expired > ".time().")";
		if ( !empty($topicid) ) {
			$sql .= " AND topicid=".intval($topicid);
		} else {
			$sql .= " AND ihome=0";
		}
		$result = $db->query($sql);
		list($count) = $db->fetchRow($result);
		return $count;
	}
	
	function countPublished($topicid=0,$author='')
	{
		$db =& Database::getInstance();
		$this->table = $db->prefix("stories");
		$this->topicstable = $db->prefix("topics");
		$this->vltable = $db->prefix("vlstories");
		$sql = "SELECT DISTINCT COUNT(*) FROM ".$this->table.", ".$this->vltable." WHERE ".$this->table.".storyid=".$this->vltable.".storyid AND published > 0 AND published <= ".time()." AND (expired = 0 OR expired > ".time().")";
		if ( !empty($topicid) ) {
			$sql .= " AND topicid=".intval($topicid);
		}
		if ( !empty($author) ) {
			$sql .= " AND author='".$author."'";
		}
		if ( empty($topicid) && empty($author) ) {
			$sql .= " AND ihome=0";
		}
		$result = $db->query($sql);
		list($count) = $db->fetchRow($result);
		return $count;
	}
	
	function moveStoryUp()
	{
		$current_toc = $this->tocid; 
		$current_storyid = $this->storyid;
		$result = $this->db->query("SELECT MAX(tocid) FROM ".$this->vltable."");
		list($maxtoc) = $this->db->fetchRow($result);
		if ($current_toc < $maxtoc) {
			$higher_toc = $current_toc + 1;
			$result = $this->db->query("SELECT storyid FROM ".$this->vltable." WHERE tocid=".$higher_toc."");
			list($oldsid) = $this->db->fetchRow($result);
			$result = $this->db->queryF("UPDATE ".$this->vltable." SET tocid=".$current_toc." WHERE storyid=".$oldsid."");
			$result = $this->db->queryF("UPDATE ".$this->vltable." SET tocid=".$higher_toc." WHERE storyid=".$current_storyid."");
		}
	}

	function moveToTop()
	{
		$current_toc = $this->tocid; 
		$current_storyid = $this->storyid;
		$result = $this->db->query("SELECT MAX(tocid) FROM ".$this->vltable."");
		list($maxtoc) = $this->db->fetchRow($result);
		if ($current_toc < $maxtoc) {
			$this->tocid = $maxtoc;
			for ($i=$current_toc; $i<$maxtoc; $i++) {
				$higher_toc = $i+1;
				$result = $this->db->queryF("UPDATE ".$this->vltable." SET tocid=".intval($i)." WHERE tocid=".intval($higher_toc)."");
			}
			$result = $this->db->queryF("UPDATE ".$this->vltable." SET tocid=".intval($maxtoc)." WHERE storyid=".intval($current_storyid)."");
		}
	}

	function setTocid($tocid=0)
	{
		if (! $tocid) {
			$tocid = $this->storyid;
		}
		$this->tocid = $tocid;
	}
	
	function setURL($storyurl='')
	{
		$this->storyurl = $storyurl;
	}
	
	function setAuthor($author='')
	{
		$this->author = $author;
	}

	function tocid()
	{
		$ret = $this->tocid;
		return $ret;
	}
	
	function topic_title()
	{
		return $this->newstopic->topic_title();
	}

	function adminlink()
	{
		$ret = "&nbsp;[ <a href='".XOOPS_URL."/modules/".$this->module_dirname."/admin/index.php?op=edit&amp;storyid=".$this->storyid."'>"._EDIT."</a> | <a href='".XOOPS_URL."/modules/".$this->module_dirname."/admin/index.php?op=delete&amp;storyid=".$this->storyid."'>"._DELETE."</a> | <a href='".XOOPS_URL."/modules/".$this->module_dirname."/admin/index.php?op=moveup&amp;storyid=".$this->storyid."'>"._NW_MOVEUP."</a> ]&nbsp;";
		return $ret;
	}

	function imglink()
	{
		$ret = '';
		if ($this->newstopic->topic_imgurl() != '' && file_exists(XOOPS_ROOT_PATH."/modules/".$this->module_dirname."/images/topics/".$this->newstopic->topic_imgurl())) {
			$ret = "<a href='".XOOPS_URL."/modules/".$this->module_dirname."/index.php?storytopic=".$this->topicid."'><img src='".XOOPS_URL."/modules/".$this->module_dirname."/images/topics/".$this->newstopic->topic_imgurl()."' alt='".$this->newstopic->topic_title()."' hspace='10' vspace='10' align='".$this->topicalign()."' /></a>";
		}
		return $ret;
	}

	function textlink()
	{
		$ret = "<a href='".XOOPS_URL."/modules/".$this->module_dirname."/index.php?storytopic=".$this->topicid()."'>".$this->newstopic->topic_title()."</a>";
		return $ret;
	}
	
	function storyurl($format="Show")
	{
		$myts =& storiesTextSanitizer::getInstance();
		$smiley = 0;
		$storyurl = $this->storyurl;
		switch ( $format ) {
		case "Show":
			$storyurl = $myts->makeTboxData4Show($this->storyurl,$smiley);
			break;
		case "Edit":
			$storyurl = $myts->makeTboxData4Edit($this->storyurl);
			break;
		case "Preview":
			$storyurl = $myts->makeTboxData4Preview($this->storyurl,$smiley);
			break;
		case "InForm":
			$storyurl = $myts->makeTboxData4PreviewInForm($this->storyurl);
			break;
		}
		return $storyurl;
	}

	function author($format="Show")
	{
		$myts =& storiesTextSanitizer::getInstance();
		$smiley = 0;
		$author = $this->author;
		switch ( $format ) {
		case "Show":
			$author = $myts->makeTboxData4Show($this->author,$smiley);
			break;
		case "Edit":
			$author = $myts->makeTboxData4Edit($this->author);
			break;
		case "Preview":
			$author = $myts->makeTboxData4Preview($this->author,$smiley);
			break;
		case "InForm":
			$author = $myts->makeTboxData4PreviewInForm($this->author);
			break;
		}
		return $author;
	}

	function hometext($format="Show")
	{
		$myts =& storiesTextSanitizer::getInstance();
		$html = 1;
		$smiley = 1;
		$xcodes = 1;
		if ( $this->nohtml() ) {
			$html = 0;
		}
		if ( $this->nosmiley() ) {
			$smiley = 0;
		}
		$this->hometext = eregi_replace("\[quote\]","[i]",$this->hometext);
		$this->hometext = eregi_replace("\[\/quote\]","[/i]",$this->hometext);
		switch ( $format ) {
		case "Show":
			$hometext = $myts->makeTareaData4Show($this->hometext,$html,$smiley,$xcodes);
			break;
		case "Edit":
			$hometext = $myts->makeTareaData4Edit($this->hometext);
			break;
		case "Preview":
			$hometext = $myts->makeTareaData4Preview($this->hometext,$html,$smiley,$xcodes);
			break;
		case "InForm":
			$hometext = $myts->makeTareaData4PreviewInForm($this->hometext);
			break;
		}
		return $hometext;
	}

	function bodytext($format="Show")
	{
		$myts =& storiesTextSanitizer::getInstance();
		$html = 1;
		$smiley = 1;
		$xcodes = 1;
		if ( $this->nohtml() ) {
			$html = 0;
		}
		if ( $this->nosmiley() ) {
			$smiley = 0;
		}
		switch ( $format ) {
		case "Show":
			$bodytext = $myts->makeTareaData4Show($this->bodytext,$html,$smiley,$xcodes);
			break;
		case "Edit":
			$bodytext = $myts->makeTareaData4Edit($this->bodytext);
			break;
		case "Preview":
			$bodytext = $myts->makeTareaData4Preview($this->bodytext,$html,$smiley, $xcodes);
			break;
		case "InForm":
			$bodytext = $myts->makeTareaData4PreviewInForm($this->bodytext);
			break;
		}
		return $bodytext;
	}

	function storylink()
	{
		if ($this->storyurl) {
			$ret = "<a href='".XOOPS_URL."/modules/".$this->module_dirname."/redirect.php?storyid=".$this->storyid."'>"._NW_STORYLINK."</a>";
		} else {
			$ret = '';
		}
		return $ret; 
	}

	function storiesauthor()
	{
		if ($this->author) {
			$ret = "<a href='".XOOPS_URL."/modules/".$this->module_dirname."/index.php?author=".$this->author."'>"._NW_MOREAUTHOR." ".$this->author."</a>";
		} else {
			$ret = '';
		}
		return $ret;
	}

	function store($approved=false)
	{
		$db =& Database::getInstance();
		//$newpost = 0;
		$myts =& storiesTextSanitizer::getInstance();
		$title =$myts->censorString($this->title);
		$title =$myts->makeTboxData4Save($title);
		$hometext =$myts->censorString($this->hometext);
		$bodytext =$myts->censorString($this->bodytext);
		$storyurl = $myts->makeTboxData4Save($this->storyurl);
		$author = $myts->makeTareaData4Save($this->author);
		$authorid = 0;
		$hometext = $myts->makeTareaData4Save($hometext);
		$bodytext = $myts->makeTareaData4Save($bodytext);
		if ( !isset($this->nohtml) || $this->nohtml != 1 ) {
			$this->nohtml = 0;
		}
		if ( !isset($this->nosmiley) || $this->nosmiley != 1 ) {
			$this->nosmiley = 0;
		}
		if ( !isset($this->notifypub) || $this->notifypub != 1 ) {
			$this->notifypub = 0;
		}
		if( !isset($this->topicdisplay) || $this->topicdisplay != 0 ) {
			$this->topicdisplay = 1;
		}
		$expired = !empty($this->expired) ? $this->expired : 0;
		if ( !isset($this->storyid) ) {
			//$newpost = 1;
			$newstoryid = $this->db->genId($this->table."_storyid_seq");
			$storyid = $newstoryid;
			$comdate = 0;
			$this->tocid = $newstoryid;
			$created = time();
			$published = ( $this->approved ) ? $this->published : 0;

//			$sql = sprintf("INSERT INTO %s (storyid, uid, title, created, published, expired, hostname, nohtml, nosmiley, hometext, bodytext, counter, topicid, ihome, notifypub, story_type, topicdisplay, topicalign, comments) VALUES (%u, %u, '%s', %u, %u, %u, '%s', %u, %u, '%s', '%s', %u, %u, %u, %u, '%s', %u, '%s', %u)", $this->table, $newstoryid, $this->uid, $title, $created, $published, $expired, $this->hostname, $this->nohtml, $this->nosmiley, $hometext, $bodytext, 0, $this->topicid, $this->ihome, $this->notifypub, $this->type, $this->topicdisplay, $this->topicalign, $this->comments);
			$sql = sprintf("INSERT INTO %s (storyid, uid, title, created, published, expired, hostname, nohtml, nosmiley, hometext, bodytext, counter, topicid, ihome, notifypub, story_type, topicdisplay, topicalign, comments) VALUES (%u, %u, '%s', %u, %u, %u, '%s', %u, %u, '%s', '%s', %u, %u, %u, %u, '%s', %u, '%s', %u)", $this->table, $newstoryid, $this->uid, $title, $created, $published, $expired, $this->hostname, $this->nohtml, $this->nosmiley, $hometext, $bodytext, 0, $this->topicid, $this->ihome, $this->notifypub, $this->type, $this->topicdisplay, $this->topicalign, $this->comments);
			if (!$result = $this->db->queryF($sql)) {
				return false;
			}
			if ( empty($newstoryid) ) {
				$newstoryid = $this->db->getInsertId();
				$storyid = $newstoryid;
				$this->storyid = $newstoryid;
				$this->tocid = $this->storyid;
			}
			$sql = sprintf("INSERT INTO %s (storyid, tocid, storyurl, comdate, author, authorid) VALUES (%u, %u, '%s', %u, '%s', %u)", $this->vltable, $newstoryid, $newstoryid, $storyurl, $comdate, $author, $authorid);
			if (!$result = $this->db->queryF($sql)) {
				return false;
			}
		} else {
			$comdate = 0;
			if ($this->comments) {
				$result = $this->db->query("SELECT MAX(com_modified) FROM ".$db->prefix("xoopscomments")." WHERE com_rootid=".$this->storyid."");
				list($comdate) = $this->db->fetchRow($result);
				if (! $comdate) {
					$result = $this->db->query("SELECT MAX(com_created) FROM ".$db->prefix("xoopscomments")." WHERE com_rootid=".$this->storyid."");
					list($comdate) = $this->db->fetchRow($result);
				}
			}
			$storyid = $this->storyid;
			$tocid = $this->tocid;
			if ( $this->approved ) {
				$sql = sprintf("UPDATE %s SET title = '%s', published = %u, expired = %u, nohtml = %u, nosmiley = %u, hometext = '%s', bodytext = '%s', topicid = %u, ihome = %u, topicdisplay = %u, topicalign = '%s', comments = %u WHERE storyid = %u", $this->table, $title, $this->published, $expired, $this->nohtml, $this->nosmiley, $hometext, $bodytext, $this->topicid, $this->ihome, $this->topicdisplay, $this->topicalign, $this->comments, $storyid);
			} else {
				$sql = sprintf("UPDATE %s SET title = '%s', expired = %u, nohtml = %u, nosmiley = %u, hometext = '%s', bodytext = '%s', topicid = %u, ihome = %u, topicdisplay = %u, topicalign = '%s', comments = %u WHERE storyid = %u", $this->table, $title, $expired, $this->nohtml, $this->nosmiley, $hometext, $bodytext, $this->topicid, $this->ihome, $this->topicdisplay, $this->topicalign, $this->comments, $storyid);
			}
			if (!$result = $this->db->queryF($sql)) {
				return false;
			}
			if ( $this->approved ) {
				$sql = sprintf("UPDATE %s SET tocid = %u, storyurl = '%s', comdate = %u, author = '%s', authorid = %u WHERE storyid = %u", $this->vltable, $tocid, $storyurl, $comdate, $author, $authorid, $storyid);
			} else {
				$sql = sprintf("UPDATE %s SET tocid = %u, storyurl = '%s', comdate = %u, author = '%s', authorid = %u WHERE storyid = %u", $this->vltable, $tocid, $storyurl, $comdate, $author, $authorid, $storyid);
			}
			if (!$result = $this->db->queryF($sql)) {
				return false;
			}
		}
		return $storyid;
	}

	function updateCommentsDate()
	{
		$db =& Database::getInstance();
		$this->table = $db->prefix("stories");
		$this->topicstable = $db->prefix("topics");
		$this->vltable = $db->prefix("vlstories");
		$result = $db->query("SELECT MAX(com_modified), MAX(com_created) FROM ".$db->prefix("xoopscomments")." WHERE com_itemid=".$this->storyid."");
		list($commod, $comcreate) = $db->fetchRow($result);
		if ($commod > $comcreate) {
			$comdate = $commod;
		} else {
			$comdate = $comcreate;
		}
		$result = $db->queryF("UPDATE ".$this->vltable." set comdate=".intval($comdate)." WHERE storyid=".$this->storyid."");
	}
	
	function setCommentsDate($date)
	{
		$db =& Database::getInstance();
		$this->table = $db->prefix("stories");
		$this->topicstable = $db->prefix("topics");
		$this->vltable = $db->prefix("vlstories");
		$result = $db->queryF("UPDATE ".$this->vltable." set comdate=".intval($date)." WHERE storyid=".$this->storyid."");
	}
	
	function comdate()
	{
		$ret = $this->comdate;
		return $ret;
/*		
		$db =& Database::getInstance();
		$result = $this->db->query("SELECT comdate FROM ".$this->vltable." WHERE storyid=".$this->storyid."");
        	list($comdate) = $this->db->fetchRow($result);
		return $comdate;
*/		
	}

}
?>