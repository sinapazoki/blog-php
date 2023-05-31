<?php
	$app_name = 'BLOG ADMIN';
	$currDir = dirname(__FILE__);
	include("{$currDir}/defaultLang.php");
	include("{$currDir}/language.php");
	include("{$currDir}/lib.php");
	include_once("{$currDir}/header.php");

	$adminConfig = config('adminConfig');
	if(!$cg = sqlValue("select count(1) from membership_groups where allowSignup=1")){
		$noSignup = true;
		echo error_message($Translation['sign up disabled']);
		exit;
	}

	if($_POST['signUp'] != ''){
		// receive data
		$memberID = is_allowed_username($_POST['newUsername']);
		$email = isEmail($_POST['email']);
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$groupID = intval($_POST['groupID']);
		$custom1 = makeSafe($_POST['full_name']);
		$custom2 = makeSafe($_POST['about']);

		// validate data
		if(!$memberID){
			echo error_message($Translation['username invalid']);
			exit;
		}
		if(strlen($password) < 4 || trim($password) != $password){
			echo error_message($Translation['password invalid']);
			exit;
		}
		if($password != $confirmPassword){
			echo error_message($Translation['password no match']);
			exit;
		}
		if(!$email){
			echo error_message($Translation['email invalid']);
			exit;
		}
		if(!sqlValue("select count(1) from membership_groups where groupID='$groupID' and allowSignup=1")){
			echo error_message($Translation['group invalid']);
			exit;
		}

		// save member data
		$needsApproval = sqlValue("select needsApproval from membership_groups where groupID='$groupID'");
		sql("INSERT INTO `membership_users` set memberID='$memberID', passMD5='".md5($password)."', email='$email', signupDate='".@date('Y-m-d')."', groupID='$groupID', isBanned='0', isApproved='".($needsApproval==1 ? '0' : '1')."', full_name='$custom1', about='$custom2', comments=''", $eo);

		// admin mail notification
		/* ---- application name as provided in AppGini is used here ---- */
		$message = nl2br(
			"A new member has signed up for {$app_name}.\n\n" .
			"Member name: {$memberID}\n" .
			"Member group: " . sqlValue("select name from membership_groups where groupID='{$groupID}'") . "\n" .
			"Member email: {$email}\n" .
			"IP address: {$_SERVER['REMOTE_ADDR']}\n" .
			"Custom fields:\n" .
			($adminConfig['custom1'] ? "{$adminConfig['custom1']}: {$custom1}\n" : '') 
		);

		if($adminConfig['notifyAdminNewMembers'] == 2 && !$needsApproval){
			sendmail(array(
				'to' => $adminConfig['senderEmail'],
				'subject' => "[{$app_name}] New member signup",
				'message' => $message
			));
		}elseif($adminConfig['notifyAdminNewMembers'] >= 1 && $needsApproval){
			sendmail(array(
				'to' => $adminConfig['senderEmail'],
				'subject' => "[{$app_name}] New member awaiting approval",
				'message' => $message
			));
		}

		// hook: member_activity
		if(function_exists('member_activity')){
			$args = array();
			member_activity(getMemberInfo($memberID), ($needsApproval ? 'pending' : 'automatic'), $args);
		}

		// redirect to thanks page
		$redirect = ($needsApproval ? '' : '?redir=1');
		redirect("membership_thankyou.php$redirect");

		exit;
	}

	// drop-down of groups allowing self-signup
	$groupsDropDown = preg_replace('/<option.*?value="".*?><\/option>/i', '', htmlSQLSelect('groupID', "select groupID, concat(name, if(needsApproval=1, ' *', ' ')) from membership_groups where allowSignup=1 order by name", ($cg == 1 ? sqlValue("select groupID from membership_groups where allowSignup=1 order by name limit 1") : 0 )));
	$groupsDropDown = str_replace('<select ', '<select class="form-control" ', $groupsDropDown);
?>

<?php if(!$noSignup){ ?>
	<div dir="rtl" class="row d-flex justify-content-center align-items-center text-right">

		<div class="col-sm-8 col-md-6 col-lg-4">
			<div class="panel panel-success">

				<div class="panel-heading">
					<h1 class="panel-title"><strong><?php echo $Translation['sign up here']; ?></strong></h1>
				</div>

				<div class="panel-body">
					<form method="post" action="membership_signup.php">
						<div class="form-group">
							<label for="username" class="control-label"><?php echo $Translation['username']; ?></label>
							<input class="form-control input-lg" type="text" required="" placeholder="<?php echo $Translation['username']; ?>" id="username" name="newUsername">
							<span id="usernameAvailable" class="help-block hidden pull-left"><i class="glyphicon glyphicon-ok"></i> <?php echo str_ireplace(array("'", '"', '<memberid>'), '', $Translation['user available']); ?></span>
							<span id="usernameNotAvailable" class="help-block hidden pull-left"><i class="glyphicon glyphicon-remove"></i> <?php echo str_ireplace(array("'", '"', '<memberid>'), '', $Translation['username invalid']); ?></span>
							<div class="clearfix"></div>
						</div>

						
						<div class="form-group">
							<label for="full_name" class="control-label"><?php echo $adminConfig['full_name']; ?></label>
							<input class="form-control" type="text" required="" placeholder="<?php echo $adminConfig['full_name']; ?>" id="full_name" name="full_name">
						</div>


						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="password" class="control-label"><?php echo $Translation['password']; ?></label>
									<input class="form-control" type="password" required="" placeholder="<?php echo $Translation['password']; ?>" id="password" name="password">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="confirmPassword" class="control-label"><?php echo $Translation['confirm password']; ?></label>
									<input class="form-control" type="password" required="" placeholder="<?php echo $Translation['confirm password']; ?>" id="confirmPassword" name="confirmPassword">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="control-label"><?php echo $Translation['email']; ?></label>
							<input class="form-control" type="text" required="" placeholder="<?php echo $Translation['email']; ?>" id="email" name="email">
						</div>

						<div class="form-group">
							<label for="group" class="control-label"><?php echo $Translation['group']; ?></label>
							<?php echo $groupsDropDown; ?>
						</div>



						<div class="form-group">
							<label for="about" class="control-label"><?php echo $adminConfig['about']; ?></label>
							<textarea rows="4" class="form-control" type="textarea" required="" placeholder="<?php echo $adminConfig['about']; ?>" id="about" name="about"></textarea>
						</div>


						<div class="row">
							<div class="col-sm-offset-3 col-sm-6">
								<button class="btn btn-primary btn-lg btn-block" value="signUp" id="submit" type="submit" name="signUp"><?php echo $Translation['sign up']; ?></button>
							</div>
						</div>

					</form>
				</div> <!-- /div class="panel-body" -->
			</div> <!-- /div class="panel ..." -->
		</div> <!-- /div class="col..." -->
	</div> <!-- /div class="row" -->

	<script>
		$j(function() {
			$j('#username').focus();

			$j('#usernameAvailable, #usernameNotAvailable').click(function(){ $j('#username').focus(); });
			$j('#username').on('keyup blur', checkUser);

			/* password strength feedback */
			$j('#password').on('keyup blur', function(){
				var ps = passwordStrength($j('#password').val(), $j('#username').val());

				if(ps == 'strong'){
					$j('#password').parents('.form-group').removeClass('has-error has-warning').addClass('has-success');
					$j('#password').attr('title', '<?php echo html_attr($Translation['Password strength: strong']); ?>');
				}else if(ps == 'good'){
					$j('#password').parents('.form-group').removeClass('has-success has-error').addClass('has-warning');
					$j('#password').attr('title', '<?php echo html_attr($Translation['Password strength: good']); ?>');
				}else{
					$j('#password').parents('.form-group').removeClass('has-success has-warning').addClass('has-error');
					$j('#password').attr('title', '<?php echo html_attr($Translation['Password strength: weak']); ?>');
				}
			});

			/* inline feedback of confirm password */
			$j('#confirmPassword').on('keyup blur', function(){
				if($j('#confirmPassword').val() != $j('#password').val() || !$j('#confirmPassword').val().length){
					$j('#confirmPassword').parents('.form-group').removeClass('has-success').addClass('has-error');
				}else{
					$j('#confirmPassword').parents('.form-group').removeClass('has-error').addClass('has-success');
				}
			});

			/* inline feedback of email */
			$j('#email').on('change', function(){
				if(validateEmail($j('#email').val())){
					$j('#email').parents('.form-group').removeClass('has-error').addClass('has-success');
				}else{
					$j('#email').parents('.form-group').removeClass('has-success').addClass('has-error');
				}
			});

			/* validate form before submitting */
			$j('#submit').click(function(e){ if(!jsValidateSignup()) e.preventDefault(); })
		});

		var uaro; // user availability request object
		function checkUser(){
			// abort previous request, if any
			if(uaro != undefined) uaro.abort();

			reset_username_status();

			uaro = $j.ajax({
					url: 'checkMemberID.php',
					type: 'GET',
					data: { 'memberID': $j('#username').val() },
					success: function(resp){
						var ua=resp;
						if(ua.match(/\<!-- AVAILABLE --\>/)){
							reset_username_status('success');
						}else{
							reset_username_status('error');
						}
					}
			});
		}

		function reset_username_status(status){
			$j('#usernameNotAvailable, #usernameAvailable')
				.addClass('hidden')
				.parents('.form-group')
				.removeClass('has-error has-success');

			if(status == undefined) return;
			if(status == 'success'){
				$j('#usernameAvailable')
					.removeClass('hidden')
					.parents('.form-group')
					.addClass('has-success');
			}
			if(status == 'error'){
				$j('#usernameNotAvailable')
					.removeClass('hidden')
					.parents('.form-group')
					.addClass('has-error');
			}
		}

		/* validate data before submitting */
		function jsValidateSignup(){
			var p1 = $j('#password').val();
			var p2 = $j('#confirmPassword').val();
			var email = $j('#email').val();

			/* user exists? */
			if(!$j('#username').parents('.form-group').hasClass('has-success')){
				modal_window({ message: '<div class="alert alert-danger"><?php echo html_attr($Translation['username invalid']); ?></div>', title: "<?php echo html_attr($Translation['error:']); ?>", close: function(){ $j('#username').focus(); } });
				return false;
			}

			/* passwords not matching? */
			if(p1 != p2){
				modal_window({ message: '<div class="alert alert-danger"><?php echo html_attr($Translation['password no match']); ?></div>', title: "<?php echo html_attr($Translation['error:']); ?>", close: function(){ $j('#confirmPassword').focus(); } });
				return false;
			}

			if(!validateEmail(email)){
				modal_window({ message: '<div class="alert alert-danger"><?php echo html_attr($Translation['email invalid']); ?></div>', title: "<?php echo html_attr($Translation['error:']); ?>", close: function(){ $j('#email').focus(); } });
				return false;
			}

			return true;
		}
	</script>

	<style>
		#usernameAvailable,#usernameNotAvailable{ cursor: pointer; }
	</style>

<?php } ?>

<?php include_once("{$currDir}/footer.php"); ?>
