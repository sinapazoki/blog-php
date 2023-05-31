<?php
	$currDir = dirname(__FILE__);
	require("{$currDir}/incCommon.php");

	// validate input
	$commentID = makeSafe(strtolower($_GET['commentID']));
	$approve = ($_GET['approve'] == 1 ? 0 : 1);
	sql("update comments set status='{$approve}' where id='{$commentID}'", $eo);



	if($_SERVER['HTTP_REFERER']){
		redirect($_SERVER['HTTP_REFERER'], true);
	}else{
		redirect("admin/pageViewComment.php");
	}

?>
