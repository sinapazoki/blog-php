<!DOCTYPE html>
<?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', '../'); ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="rtl" class="no-js"> <!--<![endif]-->
	<head>
	<link rel="preconnect" href="//fdn.fontcdn.ir">
	<link rel="preconnect" href="//v1.fontapi.ir">
	<link href="https://v1.fontapi.ir/css/Shabnam" rel="stylesheet">
	<style>
		body , h1 , div , span , h2 , h4 , h3 , h6 , span , p, a , input {
			font-family: Shabnam, sans-serif!important;
		letter-spacing: normal;
	}
	</style>
		<meta charset="<?php echo datalist_db_encoding; ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo ucwords('BLOG ADMIN') . ' | ' . $Translation['admin area']; ?><?php echo html_attr(isset($GLOBALS['page_title']) ? " | {$GLOBALS['page_title']}" : ''); ?></title>

		<link id="browser_favicon" rel="shortcut icon" href="<?php echo PREPEND_PATH; ?>resources/table_icons/administrator.png">

		<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/initializr/css/yeti.css">
		<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>dynamic.css.php">

		<!--[if lt IE 9]>
			<script src="<?php echo PREPEND_PATH; ?>resources/initializr/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<![endif]-->
		<script src="<?php echo PREPEND_PATH; ?>resources/jquery/js/jquery-1.12.4.min.js"></script>
		<script>var $j = jQuery.noConflict(); var AppGini = AppGini || {};</script>
		<script src="toolTips.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/initializr/js/vendor/bootstrap.min.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/lightbox/js/prototype.js"></script>
		<script src="<?php echo PREPEND_PATH; ?>resources/lightbox/js/scriptaculous.js?load=effects"></script>
		<script>

		

			function showDialog(dialogId){
				$$('.dialog-box').invoke('addClassName', 'hidden-block');
				$(dialogId).removeClassName('hidden-block');
				return false
			};

			function hideDialogs(){
				$$('.dialog-box').invoke('addClassName', 'hidden-block');
				return false
			};


			$j(function(){
				$j('input[type=submit],input[type=button]').each(function(){
					var label = $j(this).val();
					var onclick = $j(this).attr('onclick') || '';
					var name = $j(this).attr('name') || '';
					var type = $j(this).attr('type');

					$j(this).replaceWith('<button class="btn btn-primary" type="' + type + '" onclick="' + onclick + '" name="' + name + '" value="' + label + '">' + label + '</button>');
				});
			});

		</script>

		<link rel="stylesheet" href="adminStyles.css">

		<style>
			.dialog-box{
				background-color: white;
				border: 1px solid silver;
				border-radius: 10px 10px 10px 10px;
				box-shadow: 0 3px 100px silver;
				left: 30%;
				padding: 10px;
				position: absolute;
				top: 20%;
				width: 40%;
			}
			.hidden-block{
				display: none;
			}
			.menu-item-icon{
				margin-right: .5em;
			}
			.rtl .menu-item-icon{
				margin-right: inherit !important;
				margin-left: .5em;
			}
		</style>
	</head>
	<body>
	<div class="container theme-yeti theme-compact">

		<!-- top navbar -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only"><?php echo $Translation['toggle navigation'];?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand p-4" href="<?php echo PREPEND_PATH; ?>index.php"><i class="glyphicon glyphicon-home"></i>پیشخوان</a>

			</div>

	
		</nav>
		<script>
			/* periodically check if user is still signed in */
			setInterval(function(){
				$j.ajax({
					url: '<?php echo PREPEND_PATH; ?>ajax_check_login.php',
					success: function(username){
						if(!username.length) window.location = '<?php echo PREPEND_PATH; ?>index.php?signIn=1';
					}
				});
			}, 60000);
		</script>

		<?php echo handle_maintenance(true); ?>
		<div style="height: 80px;"></div>

		<?php echo Notification::placeholder(); ?>

		<!-- tool tips support -->
		<div id="TipLayer" style="visibility:hidden;position:absolute;z-index:1000;top:-100"></div>
		<script src="toolTipData.js"></script>
		<!-- /tool tips support -->

