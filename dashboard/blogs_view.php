<?php
 

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/blogs.php");
	include("$currDir/blogs_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('blogs');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "blogs";

	// Fields that can be displayed in the table view
	//display time field from database as time
	$x->QueryFieldsTV = array(   
		"`blogs`.`id`" => "id",
		"`blogs`.`title`" => "title",
		"IF(    CHAR_LENGTH(`blog_categories1`.`name`), CONCAT_WS('',   `blog_categories1`.`name`), '') /* Category */" => "category",
		"`blogs`.`tags`" => "tags",
		"`blogs`.`content`" => "content",
		"`blogs`.`photo`" => "photo",
		"if(`blogs`.`date`,date_format(`blogs`.`date`,'%m/%d/%Y'),'')" => "date",
		"`blogs`.`author`" => "author",
		"`blogs`.`posted`" => "posted",
		"`blogs`.`time`" => "time"

	);
	$x->QueryFieldsTV = array(   
		"`blogs`.`id`" => "id",
		"`blogs`.`title`" => "title",
		"IF(    CHAR_LENGTH(`blog_categories1`.`name`), CONCAT_WS('',   `blog_categories1`.`name`), '') /* Category */" => "category",
		"`blogs`.`tags`" => "tags",
		"`blogs`.`content`" => "content",
		"`blogs`.`photo`" => "photo",
		"if(`blogs`.`date`,date_format(`blogs`.`date`,'%m/%d/%Y'),'')" => "date",
		"`blogs`.`author`" => "author",
		"`blogs`.`posted`" => "posted",
		"`blogs`.`time`" => "time"

	);
	// var_dump($x->QueryFieldsTV);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`blogs`.`id`',
		2 => 2,
		3 => '`blog_categories1`.`name`',
		4 => 4,
		5 => 5,
		6 => 6,
		7 => '`blogs`.`date`',
		8 => 8,
		9 => 9,
		10 =>'`blogs`.`time`'

	);

	// Fields that can be displayed in the csv file


	$x->QueryFieldsCSV = array(   
		"`blogs`.`id`" => "id",
		"`blogs`.`title`" => "title",
		"IF(    CHAR_LENGTH(`blog_categories1`.`name`), CONCAT_WS('',   `blog_categories1`.`name`), '') /* Category */" => "category",
		"`blogs`.`tags`" => "tags",
		"`blogs`.`content`" => "content",
		"`blogs`.`photo`" => "photo",
		"if(`blogs`.`date`,date_format(`blogs`.`date`,'%m/%d/%Y'),'')" => "date",
		"`blogs`.`author`" => "author",
		"`blogs`.`posted`" => "posted",
		"`blogs`.`time`" => "time"

	);
	// Fields that can be filtered
	$x->QueryFieldsFilters = array(   
		"`blogs`.`id`" => "ID",
		"`blogs`.`title`" => "Title",
		"IF(    CHAR_LENGTH(`blog_categories1`.`name`), CONCAT_WS('',   `blog_categories1`.`name`), '') /* Category */" => "Category",
		"`blogs`.`tags`" => "Tags",
		"`blogs`.`content`" => "Content",
		"`blogs`.`date`" => "Date",
		"`blogs`.`author`" => "Author",
		"`blogs`.`posted`" => "Status"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS = array(   
		"`blogs`.`id`" => "id",
		"`blogs`.`title`" => "title",
		"IF(    CHAR_LENGTH(`blog_categories1`.`name`), CONCAT_WS('',   `blog_categories1`.`name`), '') /* Category */" => "category",
		"`blogs`.`tags`" => "tags",
		"`blogs`.`content`" => "content",
		"if(`blogs`.`date`,date_format(`blogs`.`date`,'%m/%d/%Y'),'')" => "date",
		"`blogs`.`author`" => "author",
		"`blogs`.`posted`" => "posted",
		"`blogs`.`time`" => "time"

	);

	// Lookup fields that can be used as filterers
	$x->filterers = array(  'category' => 'Category');

	$x->QueryFrom = "`blogs` LEFT JOIN `blog_categories` as blog_categories1 ON `blog_categories1`.`id`=`blogs`.`category` ";
	if(isset($_GET['s'])){
		$x->QueryWhere = '`blogs`.`posted` = {$_GET[s]}';
	}else{
		$x->QueryWhere = '';

	}
	$x->QueryOrder = '';

	$x->HideTableView = ($perm[2]==0 ? 1 : 0);
	$x->AllowDelete = $perm[4];
	$x->AllowMassDelete = true;
	$x->AllowInsert = $perm[1];
	$x->AllowUpdate = $perm[3];
	$x->SeparateDV = 1;
	$x->RecordsPerPage = 10;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation["quick search"];
	$x->ScriptFileName = "blogs_view.php";
	$x->RedirectAfterInsert = "blogs_view.php?SelectedID=#ID#";
	$x->TableTitle = "مقالات";
	$x->TableIcon = "resources/table_icons/feed.png";
	$x->PrimaryKey = "`blogs`.`id`";

	$x->ColWidth   = array(  150, 150, 150, 150, 150, 150, 150, 150 , 150);
	$x->ColCaption = array("عنوان", "دسته بندی", "برچسب ها", "محتوا", "تصویر", "روز", "نویسنده", "وضعیت" , "زمان مطالعه (دقیقه)");
	$x->ColFieldName = array('title', 'category', 'tags', 'content', 'photo', 'date', 'author', 'time' , 'time');
	$x->ColNumber  = array(2, 3, 4, 5, 6, 7, 8, 9 , 10);

	// template paths below are based on the app main directory
	$x->Template = 'templates/blogs_templateTV.html';
	$x->SelectedTemplate = 'templates/blogs_templateTVS.html';
	$x->TemplateDV = 'templates/blogs_templateDV.html';
	$x->TemplateDVP = 'templates/blogs_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->ShowRecordSlots = 0;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HighlightColor = '#FFF0C2';

	// mm: build the query based on current member's permissions
	$DisplayRecords = $_REQUEST['DisplayRecords'];
	if(!in_array($DisplayRecords, array('user', 'group'))){ $DisplayRecords = 'all'; }
	if($perm[2]==1 || ($perm[2]>1 && $DisplayRecords=='user' && !$_REQUEST['NoFilter_x'])){ // view owner only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `blogs`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='blogs' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `blogs`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='blogs' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`blogs`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: blogs_init
	$render=TRUE;
	if(function_exists('blogs_init')){
		$args=array();
		$render=blogs_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: blogs_header
	$headerCode='';
	if(function_exists('blogs_header')){
		$args=array();
		$headerCode=blogs_header($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$headerCode){
		include_once("$currDir/header.php"); 
	}else{
		ob_start(); include_once("$currDir/header.php"); $dHeader=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%HEADER%%>', $dHeader, $headerCode);
	}

	echo $x->HTML;
	// hook: blogs_footer
	$footerCode='';
	if(function_exists('blogs_footer')){
		$args=array();
		$footerCode=blogs_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>