<?php
	$mysql_hostname = "localhost";
	$mysql_user = "root";
	$mysql_pass = "root";
	$mysql_database = "employeedb";
	
	$link = mysqli_connect($mysql_hostname, $mysql_user, $mysql_pass)
	or die("Could not connect database");
	mysqli_select_db($link,$mysql_database)
	or die("Could not select database");
?>
