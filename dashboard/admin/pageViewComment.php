<?php
	$currDir = dirname(__FILE__);
	require("{$currDir}/incCommon.php");
	$GLOBALS['page_title'] = 'کامنت ها';
	include("{$currDir}/incHeader.php");

	$numMembers = sqlValue("select count(1) from membership_users m left join membership_groups g on m.groupID=g.groupID {$where}");
	if(!$numMembers){
		echo "<div class=\"alert alert-warning\">{$Translation['no matching results found']}</div>";
		$noResults = true;
		$page = 1;
	}else{
		$noResults = false;
	}

	$page = max(1, intval($_GET['page']));
	if($page > ceil($numMembers / $adminConfig['membersPerPage']) && !$noResults){
		redirect("admin/pageViewComment.php?page=" . ceil($numMembers/$adminConfig['membersPerPage']));
	}

	$start = ($page - 1) * $adminConfig['membersPerPage'];

?>
<div class="page-header">
	<h1>
		<?php echo 'کامنت ها' ?>
		<div class="pull-left">
			<a href="pageEditMember.php" class="btn btn-success btn-lg"><i class="glyphicon glyphicon-plus"></i> <?php echo 'کامنت ها' ?></a>
		</div>
	</h1>
</div>

<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
	    	<th>آیدی</th>
			<th>نام کاربر</th>
			<th>ایمیل</th>
			<th>زمان ثبت نظر</th>
			<th>کامنت</th>
			<th>وضعیت کامنت</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php

	$res=sql("select id, name , email , DATE_FORMAT(created_at, '" . makeSafe($adminConfig['MySQLDateFormat'], false) . "'),  comment , status from comments", $eo);
	while($row = db_fetch_row($res)){
		$tr_class = '';
		?>
		<tr class="<?php echo $tr_class; ?>">
			<td class="text-left"><?php echo thisOr($row[0]); ?></td>
			<td class="text-left"><?php echo thisOr($row[1]); ?></td>
			<td class="text-left"><?php echo thisOr($row[2]); ?></td>
			<td class="text-left"><?php echo thisOr($row[3]); ?></td>
			<td class="text-left"><?php echo thisOr($row[4]); ?></td>

			<td class="text-left">
				<?php echo (($row[5] == '0') ? 'تایید نشده' : 'تایید شده'); ?>
			</td>
			<td class="text-center">

					<a href="pageDeleteComment.php?commentID=<?php echo $row[0]; ?>" onClick="return confirm('آیا از حذف کامنت مطمئن هستید ؟');"><i class="glyphicon glyphicon-trash text-danger" title="حذف کامنت"></i></a>
					<?php
						if($row[5] == '0'){ // if comment is not approved, display approve link
							?><a href="pageChangeCommentStatus.php?commentID=<?php echo $row[0]; ?>&approve=0"><i class="glyphicon glyphicon-ok text-success" title="تغییر وضعیت کامنت" title="<?php echo $Translation["approve this member"] ; ?>"></i></a><?php
						}else{
							?><a href="pageChangeCommentStatus.php?commentID=<?php echo $row[0]; ?>&approve=1"><i class="glyphicon glyphicon-ban-circle text-danger" title="تغییر وضعیت کامنت"></i></a><?php
						}
					?>

			</td>
		</tr>
		<?php
	}
?>
	</tbody>
</table>

<style>
	.form-inline .form-group{ margin: .5em 1em; }
</style>

<script>
	$j(function(){
		$j('.form-inline select').addClass('form-control');
	})
</script>


<?php
	include("{$currDir}/incFooter.php");
