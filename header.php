<!--Header-->
<header>
<link rel="preconnect" href="//fdn.fontcdn.ir">
<link rel="preconnect" href="//v1.fontapi.ir">
<link href="https://v1.fontapi.ir/css/Shabnam" rel="stylesheet">
<style>
	body , h1 , div , span , h2 , h4 , h3 , h6 , span , p, a , input {
		font-family: Shabnam, sans-serif!important;
    letter-spacing: normal;
}
</style>
		<div class="top-bar_sub_w3layouts container-fluid">
			<div class="row d-flex justify-content-between">
				<div class="col-md-4 logo text-right">
					<a class="navbar-brand" href="index.php">
						<i class="fab fa-linode"></i> <?php getwebname("titles"); ?></a>
				</div>
				<div class="col-md-4 top-forms d-none d-md-block text-left mt-lg-3 mt-md-1 mt-0">
					<span class="mx-lg-2 mx-md-2  mx-1 button-style">
						<a href=" dashboard/index.php">
							<i class="fas fa-lock"></i> <strong>ورود</strong></a>
					</span>
					<span class="button-style">
						<a href=" dashboard/membership_signup.php">
							<i class="far fa-user"></i> <strong>ثبت نام</strong></a>
					</span>
				</div>
			</div>
		</div>

			<div class="header_top" id="home">
				<nav class="navbar-expand-lg navbar-light bg-light text-right">
					<div class="col-md-4 d-md-none mobile-nav top-forms text-left mt-lg-3 mt-md-1 mt-0">
						<span class="mx-lg-2 mx-md-2  mx-1 button-style">
							<a href=" dashboard/index.php">
								<i class="fas fa-lock"></i> <strong>ورود</strong></a>
						</span>
						<span class="button-style">
							<a href=" dashboard/membership_signup.php">
								<i class="far fa-user"></i> <strong>ثبت نام</strong></a>
						</span>
					</div>
					<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				   </button>


					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto  ">
							<li class="nav-item">
								<a class="nav-link" href="index.php">خانه
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.php">درباره ما</a>
							</li>
							<!-- <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								    aria-expanded="false">
									دسته بندی ها
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#"></a>
									<?php getcategoriesmenu("blog_categories"); ?>
								</div>
							</li> -->
							<li class="nav-item">
								<a class="nav-link" href="contact.php">تماس با ما</a>
							</li>

						</ul>


							<form action="search.php" method="post" class="rounded form-inline my-2 my-lg-0 header-search" name="form">
								<input class="rounded text-right form-control" type="search" placeholder="جستجو مقالات..." required="yes" type="text" name="search[keyword]">
								<button class="btn rounded btn1 my-2 my-sm-0" type="submit" name="submit"><i class="fas fa-search"></i></button>
							</form>
		
						

					</div>
				</nav>

			</div>
	</header>
	<!--//header-->