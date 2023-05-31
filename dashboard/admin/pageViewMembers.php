<?php
	$currDir = dirname(__FILE__);
	require("{$currDir}/incCommon.php");
	$GLOBALS['page_title'] = $Translation['members'];
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
		redirect("admin/pageViewMembers.php?page=" . ceil($numMembers/$adminConfig['membersPerPage']));
	}

	$start = ($page - 1) * $adminConfig['membersPerPage'];

?>
<div class="page-header">
	<h1>
		<?php echo $Translation['members'] ; ?>
		<div class="pull-left">
			<a href="pageEditMember.php" class="btn btn-success btn-lg"><i class="glyphicon glyphicon-plus"></i> <?php echo $Translation['add new member']; ?></a>
		</div>
	</h1>
</div>

<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>نام کاربری</th>
			<th>گروه کاربری</th>
			<th>زمان ثبت نام</th>
			<th>وضعیت کاربر</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php

	$res=sql("select lcase(m.memberID), g.name, DATE_FORMAT(m.signupDate, '" . makeSafe($adminConfig['MySQLDateFormat'], false) . "'),  m.isBanned, m.isApproved from membership_users m left join membership_groups g on m.groupID=g.groupID $where order by m.signupDate limit $start, " . intval($adminConfig['membersPerPage']), $eo);
	while($row = db_fetch_row($res)){
		$tr_class = '';
		if($adminConfig['adminUsername'] == $row[0]) $tr_class = 'warning text-bold';
		if($adminConfig['anonymousMember'] == $row[0]) $tr_class = 'text-muted';
		?>
		<tr class="<?php echo $tr_class; ?>">
			<?php if($adminConfig['anonymousMember'] == $row[0]){ ?>
				<td class="text-left"><?php echo thisOr($row[0]); ?></td>
			<?php }else{ ?>
				<td class="text-left"><a href="pageEditMember.php?memberID=<?php echo $row[0]; ?>"><?php echo thisOr($row[0]); ?></a></td>
			<?php } ?>
			<td class="text-left"><?php echo thisOr($row[1]); ?></td>
			<td class="text-left"><?php echo thisOr($row[2]); ?></td>

			<td class="text-left">
				<?php echo (($row[3] && $row[4]) ? $Translation['Banned'] : ($row[4] ? $Translation['active'] : $Translation['waiting approval'] )); ?>
			</td>
			<td class="text-center">
				<?php if($adminConfig['anonymousMember'] == $row[0]){ ?>
					<i class="glyphicon glyphicon-pencil text-muted"></i>
				<?php }else{ ?>
					<a href="pageEditMember.php?memberID=<?php echo $row[0]; ?>"><i class="glyphicon glyphicon-pencil" title="<?php echo $Translation['Edit member'] ; ?>"></i></a>
				<?php } ?>

				<?php if($adminConfig['anonymousMember'] == $row[0] || $adminConfig['adminUsername'] == $row[0]){ ?>
					<i class="glyphicon glyphicon-trash text-muted"></i>
					<i class="glyphicon glyphicon-ban-circle text-muted"></i>
				<?php }else{ ?>
					<a href="pageDeleteMember.php?memberID=<?php echo $row[0]; ?>" onClick="return confirm('<?php echo str_replace ( '<USERNAME>' , $row[0] , $Translation['sure delete user'] ); ?>');"><i class="glyphicon glyphicon-trash text-danger" title="<?php echo $Translation['delete member'] ; ?>"></i></a>
					<?php
						if(!$row[4]){ // if member is not approved, display approve link
							?><a href="pageChangeMemberStatus.php?memberID=<?php echo $row[0]; ?>&approve=1"><i class="glyphicon glyphicon-ok text-success" title="<?php echo $Translation["unban this member"] ; ?>" title="<?php echo $Translation["approve this member"] ; ?>"></i></a><?php
						}else{
							if($row[3]){ // if member is banned, display unban link
								?><a href="pageChangeMemberStatus.php?memberID=<?php echo $row[0]; ?>&unban=1"><i class="glyphicon glyphicon-ok text-success" title="<?php echo $Translation["unban this member"] ; ?>"></i></a><?php
							}else{ // if member is not banned, display ban link
								?><a href="pageChangeMemberStatus.php?memberID=<?php echo $row[0]; ?>&ban=1"><i class="glyphicon glyphicon-ban-circle text-danger" title="<?php echo $Translation["ban this member"] ; ?>"></i></a><?php
							}
						}
					?>
				<?php } ?>


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
