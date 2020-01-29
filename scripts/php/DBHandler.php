<?php

$ServerName = "localhost";
$DBUsername = "root";
$DBPassword = ""; 
$DBName = "algo-login";

	$SQLIConnection = new mysqli($ServerName, $DBUsername, $DBPassword, $DBName);
	if ($SQLIConnection->connect_error) {
		die("Connection failed: ".mysqli_connect_error());
	}
?>