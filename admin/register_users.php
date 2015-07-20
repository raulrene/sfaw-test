<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
	</head>
	<body>
<?php
include("../config/config_old.php");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
//var_dump($_POST);
if (isset ($_POST['register'])){
if (isset($_POST) && !empty($_POST)){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		
		$query_index ="INSERT INTO `users` (`username`, `password`, `email`)
		VALUES
		('$username', '$password', '$email')";
		if (mysqli_query($conn, $query_index)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
		}
}
}