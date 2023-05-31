<?php
	$currDir=dirname(__FILE__);
	require("$currDir/incCommon.php");

	// validate input
	$commentID=makeSafe(strtolower($_GET['commentID']));
	
	sql("delete from comments where id='{$commentID}'", $eo);

	if($_SERVER['HTTP_REFERER']){
		redirect($_SERVER['HTTP_REFERER'], TRUE);
	}else{
		redirect("admin/pageViewComment.php");
	}

?>