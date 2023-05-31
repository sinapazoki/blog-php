<?php require("libs/fetch_data.php");?>
<?php  require_once("libs/jdf.php"); ?>
<?php //code to get the item using its id
include("database/conn.php");//database config file
include("database/db_connect.php");//database config file
$id=$_REQUEST['id']; $query="SELECT * from blogs where id='".$id."'"; $result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);

//query to get user details
$query2="SELECT * from membership_users where memberID='".$row['author']."'"; $result2=mysqli_query($GLOBALS["___mysqli_ston"],$query2) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true)));
$user = mysqli_fetch_assoc($result2);

?>
<!DOCTYPE html>
<html dir="rtl" lang=" AF">
<head>
	<title><?php echo $row['title']; ?>|<?php getwebname("titles");?></title>
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
	<link rel="stylesheet" href="css/single.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
	<!--additional javascripts will be placed here-->
	<?php getjavascripts("links"); ?>
</head>

<style>
	.blockquote-custom {
  position: relative;
  font-size: 1.1rem;
}

.blockquote-custom-icon {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: -25px;
  left: 50px;
}

</style>

<body>
	<!--Header-->
	<?php include("header.php");?> 
	<!--//header-->
	<!--update database on page views-->

	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">خانه</a>
		</li>
		<li class="breadcrumb-item active">مقاله</li>
	</ol>

	<!--//banner-->
	<section class="banner-bottom">
		<!--/blog-->
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div  dir="rtl" class="blog-grid-top text-right">
						<div  class="b-grid-top ">
							<div class="blog_info_left_grid">
								<a href="#">
									<img src=" dashboard/images/<?php echo $row['photo']; ?>" class="img-fluid" alt="image not available" style="width:900px;height:300px">
								</a>
							</div>
							<div  class="blog-info-middle ">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i>
											<?php
											//  echo $row['date']; 
											$y =  substr($row['date'], 0, 4);
											 $m = substr($row['date'],5, 2);
											 $d  =substr($row['date'],8, 2);

											echo gregorian_to_jalali($y,$m, $d,'/');
											 ?></a>
										</li>
										<li class="mx-2">
											<a href="#">
												<i class="far fa-user"></i><?php echo $row['author']; ?></a>
											</li>
											<li>
												<a href="#" class="d-flex align-items-center">
												<i class="far fa-clock"></i>
												<?php echo $row['time']; ?>
												<span>دقیقه</span></a>
												</li>


												</ul>
											</div>
										</div>

										<h3 class="text-right">
											<a href="single.html"><?php echo $row['title']; ?></a>
										</h3>
										<div   class="text-justify">
											<?php echo $row['content']; ?>
										</div>


										<!-- about blogger section -->
										<div class="my-5">
										<blockquote class="blockquote blockquote-custom bg-white py-5 shadow rounded">
											<div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
											<p class="mb-0 mt-2 font-italic text-right">
											<?php echo $user['about']; ?>
											</p>
											<div class="blockquote-footer pt-4 mt-4 border-top"><?php echo $user['full_name']; ?>
												<cite title="Source Title"><?php echo $user['email']; ?></cite>
										</div>
										</blockquote>
									</div>
									<!-- end of about blogger section -->



									<!-- comment section for blogs -->
									<h4 class="text-right mb-4">ارسال نظر</h4>
									
									<form class="form-block my-5" method="post">
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<div class="form-group fl_icon">
													<div class="icon"><i class="far fa-user"></i></div>
													<input class="form-input" type="text" name="name" placeholder="نام و نام خانوادگی">
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 fl_icon">
												<div class="form-group fl_icon">
													<div class="icon"><i class="far fa-envelope"></i></div>
													<input class="form-input" type="email" name="email" placeholder="ایمیل">
												</div>
											</div>
											<div class="col-xs-12 2 col-sm-12 text-left">									
												<div class="form-group">
													<textarea class="form-input"  name="text" required="" placeholder="کامنت خود را بنویسید"></textarea>
												</div>
												<input class="btn btn-primary pull-right" type="submit" name="submit" value="ارسال نظر"><br>

											</div>
										</div>
									 </form>
										<?php
											if(isset($_POST['submit'])){
												$name  = $_POST['name'];
												$email = $_POST['email'];
												$text  = $_POST['text'];
												$blog_id = $row['id'] ;
													if(empty($name)){
														echo "نام خود را وارد کنید";
													}elseif(empty($email)){
														echo "ایمیل خود را وارد کنید";
													}elseif(empty($text)){
														echo "نظر خود را وارد کنید";
													}elseif(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
														echo "ایمیل صحیح نیست";
													}else{
														$insert = "INSERT INTO comments (name , email , comment , status , blog_id)
														VALUES (N'$name' , N'$email' , N'$text' , '0' , $blog_id)";

															$insert_s = mysqli_query($con,$insert);
																if($insert_s){
																	echo "<div class='succesful_comment fs-3'>نظر شما با موفقیت ثبت و پس از تایید منتشر خواهد شد</div>";
																	$_POST = array();
																	?>
																	<script>
																	if ( window.history.replaceState ) {
																	  window.history.replaceState( null, null, window.location.href );
																	}
																	</script>
																	<?php
																	// exit();
																}else{
																	echo "<div class='error_comment'>ثبت نظر شما با خطا مواجه شد !</div>";
																}
													}
											}
										?>


									<div class="">
										<div class="be-comment-block">
												<?php
											$select="SELECT * FROM `comments` WHERE blog_id='".$row['id']."'  AND status = '1'" ;
												$run=mysqli_query($con,"SET NAME utf8");
												$run=mysqli_query($con,"SET CHARACTER SET utf8");
												$run=mysqli_query($con,$select);
													while($row=mysqli_fetch_array($run)){
														$S_name    = $row['name'];
														$S_comment= $row['comment'];
														$S_email = $row['email'];
														$S_created_at = $row['created_at'];
										?>

											<div class="be-comment">
												<div class="be-comment-content w-100">
														<span class="be-comment-name">
															<a href="blog-detail-2.html"><?php echo $S_name; ?></a>
															<span><?php echo $S_email; ?></span>
															</span>
														<span class="be-comment-time text-left">
															<i class="fa fa-clock-o"></i>
															<?php echo $S_created_at; ?>
														</span>

													<p class="be-comment-text">
													<?php echo $S_comment; ?>
													</p>
												</div>
											</div>


										<?php
													}
										?>
										</div>
									</div>

									<!-- end of comment section -->

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


										</div>
								</aside>
												<!--//right-->
									</div>
										</div>
									</section>
									<!--//main-->
									<!--footer-->
									<?php include("footer.php");?>
									<!---->
									<!-- js -->
									<script src="js/jquery-2.2.3.min.js"></script>
									<!-- //js -->
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
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
							 		*/

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