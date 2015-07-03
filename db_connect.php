<?php
	$db_host='localhost';
	$db_name='ecommerce';
	$db_user='root';
	$db_pass='';
	
	$connect=mysqli_connect($db_host, $db_name, $db_pass);
	if (mysqli_connect_errno()){
		die ("Could not connect to the database: <br />". mysqli_connect_error());
	}
?>