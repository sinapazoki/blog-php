<?php
require __DIR__ . '/conn.php';

	$pdo_conn = new PDO( "mysql:host=$dbServer;dbname=$dbDatabase", $dbUsername, $dbPassword );
?>
