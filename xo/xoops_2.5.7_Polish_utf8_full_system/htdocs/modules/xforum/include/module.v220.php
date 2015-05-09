<?php
// $Id: module.php,v 4.04 2008/06/05 16:23:50 wishcraft Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License 2.0 as published by //
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
//  Author: wishcraft (S.F.C., sales@chronolabs.org.au)                      //
//  URL: http://www.chronolabs.org.au/forums/X-Forum/0,17,0,0,100,0,DESC,0   //
//  Project: X-Forum 4                                                       //
//  ------------------------------------------------------------------------ //

function xoops_module_update_XFORUM_v220(&$module) 
{
    $perms=array('post','view','reply','edit','delete','addpoll','vote','attach','noapprove');
    foreach($perms as $perm){
        $sql = "UPDATE ".$GLOBALS['xoopsDB']->prefix('group_permission')." SET gperm_name='forum_".$perm."' WHERE gperm_name='forum_can_".$perm."'";
        $result = $GLOBALS['xoopsDB']->queryF($sql);
		if (!$result) {
			/* Shouldn't setErrors from here, otherwise the update will be failed in cleanVars check */
			$module->setErrors("Could not change ".$perm.": ".$sql);
		}
    }
    $sql = "UPDATE ".$GLOBALS['xoopsDB']->prefix('group_permission')." SET gperm_name='forum_access' WHERE gperm_name='global_forum_access'";
    $result = $GLOBALS['xoopsDB']->queryF($sql);
	if (!$result) {
		/* Shouldn't setErrors from here, otherwise the update will be failed in cleanVars check */
		$module->setErrors("Could not change forum_access");
	}
    $sql = "UPDATE ".$GLOBALS['xoopsDB']->prefix('group_permission')." SET gperm_name='category_access' WHERE gperm_name='forum_cat_access'";
    $result = $GLOBALS['xoopsDB']->queryF($sql);
	if (!$result) {
		$module->setErrors("Could not change category_access");
	}
	
    $sql = "SELECT forum_id, forum_moderator FROM ".$GLOBALS['xoopsDB']->prefix('xf_forums');
    $result = $GLOBALS['xoopsDB']->query($sql);
    while ($row = $GLOBALS['xoopsDB']->fetchArray($result)) {
        $mods = explode(" ", $row["forum_moderator"]);
        $mods = is_array($mods)?serialize($mods):serialize(array());
        $sql_sub = "UPDATE ".$GLOBALS['xoopsDB']->prefix('xf_forums')." SET forum_moderator='".$mods."' WHERE forum_id=".$row["forum_id"];
        $result_sub = $GLOBALS['xoopsDB']->queryF($sql_sub);
		if (!$result) {
			$module->setErrors("Could not forum_moderator for forum ".$row["forum_id"]);
		}
    }
	return true;
}
?>