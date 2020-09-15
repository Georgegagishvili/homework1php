<?php 
	$server="localhost";
	$username="root";
	$password="";
	$db="hw1";
	$conn= new mysqli($server,$username,$password,$db);
	if ($conn->connect_error) {
		die("connection failed");

	}
?>