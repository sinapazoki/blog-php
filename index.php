<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html dir="rtl" lang="AF">
<head>
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href=" dashboard/images/<?php geticon("titles"); ?>">
	<meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
	<meta name="keywords" content="<?php getkeywords("titles");?>" />

	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/jquery.desoslide.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
</head>

<body>

<?php include("header.php");?>
	<?php include("banner.php");
	?>


<a href="<?php  getwhatsapp()  ?>" class="float" target="_blank">
<span><img src="./images/whatsapp.png" alt=""></span>
</a>


	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<!--grid blogs below-->
					<div class="blog-girds-sec">
						<div class="row">
							<?php getblogridposts("blogs");?>
							<!--bloggrids-->
						</div>
					</div>
				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-right">
						<h4 class="mb-4"><strong>دسته بندی ها</strong></h4>
						<ul class="list-group single">
							<?php countcategories();?>
						</ul>

					</section>
					<!--//main-->


					<?php include("footer.php");?>
					<!---->
					<!-- js -->
					<script src="js/jquery-2.2.3.min.js"></script>
					<!-- //js -->
					<!-- desoslide-JavaScript -->
					<script src="js/jquery.desoslide.js"></script>
					<script>
						$('#demo1_thumbs').desoSlide({
							main: {
								container: '#demo1_main_image',
								cssClass: 'img-responsive'
							},
							effect: 'sideFade',
							caption: true
						});
					</script>

					<!-- requried-jsfiles-for owl -->
					<script>
						$(window).load(function () {
							$("#flexiselDemo1").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 2
									},
									tablet: {
										changePoint: 768,
										visibleItems: 3
									}
								}
							});

						});
					</script>
					<script>
						$(window).load(function () {
							$("#flexiselDemo2").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 2
									},
									tablet: {
										changePoint: 768,
										visibleItems: 3
									}
								}
							});

						});
					</script>
					<script src="js/jquery.flexisel.js"></script>
					<!-- //password-script -->
					<!--/ start-smoth-scrolling -->
					<script src="js/move-top.js"></script>
					<script src="js/easing.js"></script>
					<script>
						jQuery(document).ready(function ($) {
							$(".scroll").click(function (event) {
								event.preventDefault();
								$('html,body').animate({
									scrollTop: $(this.hash).offset().top
								}, 900);
							});
						});
					</script>
					<!--// end-smoth-scrolling -->

					<script>
						$(document).ready(function () {
							
							var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									};
									

									$().UItoTop({
										easingType: 'easeOutQuart'
									});

								});
							</script>
							<a href="#home" class="scroll" id="toTop" style="display: block;">
								<span id="toTopHover" style="opacity: 1;"> </span>
							</a>

							<!-- //Custom-JavaScript-File-Links -->
							
							<script src="js/bootstrap.js"></script>


						</body>

						</html>