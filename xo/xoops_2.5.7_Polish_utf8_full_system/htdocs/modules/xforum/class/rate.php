<?php
// $Id: report.php,v 4.03 2008/06/05 15:35:32 wishcraft Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.chronolabs.org/>                             //
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
//  Author: wishcraft (S.A.R., sales@chronolabs.org.au)                      //
//  URL: http://www.chronolabs.org.au/forums/X-Forum/0,17,0,0,100,0,DESC,0   //
//  Project: X-Forum 4                                                       //
//  ------------------------------------------------------------------------ //
 
if (!defined("XOOPS_ROOT_PATH")) {
	exit();
}

defined("forum_FUNCTIONS_INI") || include XOOPS_ROOT_PATH.'/modules/xforum/include/functions.ini.php';
forum_load_object();

class Nrate extends ArtObject {
    function Nrate()
    {
	    $this->ArtObject("xf_votedata");
        $this->initVar('ratingid', XOBJ_DTYPE_INT);
        $this->initVar('topic_id', XOBJ_DTYPE_INT);
        $this->initVar('ratinguser', XOBJ_DTYPE_INT);
        $this->initVar('rating', XOBJ_DTYPE_INT);
        $this->initVar('ratingtimestamp', XOBJ_DTYPE_INT);
        $this->initVar('ratinghostname', XOBJ_DTYPE_TXTBOX);
    }
}

class xforumRateHandler extends ArtObjectHandler 
{
    function xforumRateHandler(&$db) {
        $this->ArtObjectHandler($db, 'xf_votedata', 'Nrate', 'ratingid');
    }
    
    /**
     * clean orphan items from database
     * 
     * @return 	bool	true on success
     */
    function cleanOrphan()
    {
	    return parent::cleanOrphan($this->db->prefix("xf_topics"), "topic_id");
    }
}

?>