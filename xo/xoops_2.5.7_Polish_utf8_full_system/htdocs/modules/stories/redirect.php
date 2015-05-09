<?php

/************************************************************************/
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

include_once("../../mainfile.php");
include_once("class/class.newsstory.php");

foreach ($HTTP_POST_VARS as $k => $v) {
	${$k} = $v;
}

$storyid = (isset($HTTP_GET_VARS['storyid'])) ? $HTTP_GET_VARS['storyid'] : 0;
$storyid = intval($storyid);
if (empty($storyid)) {
	redirect_header("index.php",2,_NW_NOSTORY);
	exit();
}

$story = new NewsStory($storyid);
$location = $story->storyurl();

if ( $location ) {
   $story->updateCounter();
   Header("Location: $location");
} else {
   $location = "article.php?storyid=$item_id";
   Header("Location: $location");
}

exit();

?>