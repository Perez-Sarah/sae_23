<?php
	$servername = "localhost";
	$username = "ibouras";
	$password = "passsae23";
	$dbname="sae23";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
		die("Connection failed : " . $conn->connect-error);
	}
?>