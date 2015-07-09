<?php
//procedural
$host = 'localhost';
$user = 'root';
$pass = '6636';
$db = 'site';
$conn = mysqli_connect($host,$user,$pass,$db);

if (!$conn){
	die(mysql_error());
}
?>