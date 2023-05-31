<?php
	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	include_once("$currDir/header.php");

	if($_GET['redir']==1){
		echo '<META HTTP-EQUIV="Refresh" CONTENT="5;url=index.php?signIn=1">';
	}
?>

<center>
	<div style="width: 500px; text-align: center;">
		<h1 class="TableTitle text-cnter">ثبت نام شما با موفقیت انجام شد</h1>

		<img class="w-100" src="signup.gif"><br><br>
		</div>
	</center>
<?php include_once("$currDir/footer.php"); ?>
