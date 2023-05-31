<!DOCTYPE html>
<?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>
<?php if(!defined('datalist_db_encoding')) define('datalist_db_encoding', 'UTF-8'); ?>
<?php require_once("libs/count_records.php");?>
<html lang="en">
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo ucwords('پیشخوان'); ?> | <?php echo (isset($x->TableTitle) ? $x->TableTitle : ''); ?></title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>
  <body>
   <div id="wrapper">
  <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">پیشخوان</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav text-right">
            <li><a href="#"><i class="fa fa-dashboard"></i>پیشخوان</a></li>
            <li><a href="blogs_view.php"><i class="fa fa-rss"></i>مقالات</a></li>
            <li><a href="blog_categories_view.php"><i class="fa fa-tags"></i>دسته بندی ها</a></li>
            <li><a href="blogs_view.php?SortField=&SortDirection=&FilterAnd%5B1%5D=and&FilterField%5B1%5D=8&FilterOperator%5B1%5D=equal-to&FilterValue%5B1%5D=publish&FilterAnd%5B5%5D=and&FilterAnd%5B9%5D=and&FilterAnd%5B13%5D=and&FilterAnd%5B17%5D=and&FilterAnd%5B21%5D=and&FilterAnd%5B25%5D=and&FilterAnd%5B29%5D=and&FilterAnd%5B33%5D=and&FilterAnd%5B37%5D=and&FilterAnd%5B41%5D=and&FilterAnd%5B45%5D=and&FilterAnd%5B49%5D=and&FilterAnd%5B53%5D=and&FilterAnd%5B57%5D=and&FilterAnd%5B61%5D=and&FilterAnd%5B65%5D=and&FilterAnd%5B69%5D=and&FilterAnd%5B73%5D=and&FilterAnd%5B77%5D=and"><i class="fa fa-check"></i>مقالات منتشر شده</a></li>
            <li><a href="blogs_view.php?SortField=&SortDirection=&FilterAnd%5B1%5D=and&FilterField%5B1%5D=8&FilterOperator%5B1%5D=equal-to&FilterValue%5B1%5D=draft&FilterAnd%5B5%5D=and&FilterAnd%5B9%5D=and&FilterAnd%5B13%5D=and&FilterAnd%5B17%5D=and&FilterAnd%5B21%5D=and&FilterAnd%5B25%5D=and&FilterAnd%5B29%5D=and&FilterAnd%5B33%5D=and&FilterAnd%5B37%5D=and&FilterAnd%5B41%5D=and&FilterAnd%5B45%5D=and&FilterAnd%5B49%5D=and&FilterAnd%5B53%5D=and&FilterAnd%5B57%5D=and&FilterAnd%5B61%5D=and&FilterAnd%5B65%5D=and&FilterAnd%5B69%5D=and&FilterAnd%5B73%5D=and&FilterAnd%5B77%5D=and"><i class="fa fa-tasks"></i>پیش نویس ها</a></li>
            <?php
            $usernow=getLoggedMemberID();
            if ($usernow=="admin") {
            # code...show more links for admin only
            echo'<li><a href="titles_view.php"><i class="fa fa-desktop"></i>تنظیمات سایت</a></li>
            <li><a href="admin/pageViewMembers.php"><i class="fa fa-users"></i> مدیریت کاربران</a></li>
            <li><a href="admin/pageViewComment.php"><i class="fa fa-ticket"></i> مدیریت کامنت ها</a></li>';
          }
          ?> 
          </ul>
         <ul class="nav navbar-nav navbar-right navbar-user">

            <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo getLoggedMemberID(); ?><b class="caret"></b></a>
            <ul class="dropdown-menu p-4" style="padding:10px ; border-radius:10px;">
              <li><a href="<?php echo PREPEND_PATH; ?>membership_profile.php"><i class="fa fa-user"></i> <strong>جزئیات پروفایل</strong> </a></li>

            <li><a class="btn navbar-btn btn-primary" href="<?php echo PREPEND_PATH; ?>index.php?signOut=1"><i class="fa fa-power-off"></i> <strong style="color:white"><?php echo $Translation['sign out']; ?></strong> </a></li>
          </ul>
        </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
  <div id="page-wrapper">
 <div class="row">
          <div class="col-lg-12 text-right">
            <ol class="breadcrumb">
              <li><a href="../index.php"><i class="icon-dashboard" style="text-decoration:none;"></i> <strong>مشاهده سایت</strong></a></li>
              <li><a href="index.php"><i class="icon-dashboard" style="text-decoration:none;"></i> <strong>پیشخوان</strong></a></li>
            </ol>
            <?php include("libs/alerts.php");?>
          </div>
        </div><!-- /.row -->

    