<?php
//set database connection data

$data = [
    'me' => '44'
];
$dbServer = 'localhost';
$dbUsername =  'root';
$dbPassword ='';
$dbDatabase = 'blog';

($GLOBALS["___mysqli_ston"] = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbDatabase));  //host,user,password,database
?>
