<?php
//set database connection data
$dbServer = 'localhost';
$dbUsername =  'root';
$dbPassword ='';
$dbDatabase = 'sina-blog';

($GLOBALS["___mysqli_ston"] = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbDatabase));  //host,user,password,database
?>
