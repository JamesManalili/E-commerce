<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "e-commerce";
	
	//Create Connection	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	//To check the connection
	
	
	if($conn->connect_error){
		die("connection failed: ".$conn->connect_error);
	}

?>