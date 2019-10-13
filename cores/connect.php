<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "test";

	$con = new mysqli($host, $user, $pass, $db);

	if($con->connect_error){
		echo "Connection Failed !!!";
	}
?>