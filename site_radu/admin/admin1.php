<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "primarydb";
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$query_edit = "SELECT * FROM `index`";
$data = mysqli_query($conn, $query_edit);

foreach($data as $row){
	echo $row['id'];
	echo $row['title'];
	echo $row['name'];
	echo $row['text'];
}
var_dump($data);
















?>