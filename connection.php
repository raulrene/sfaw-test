<?php
//procedural
$host = 'localhost';
$user = 'root';
$pass = '6636';
$conn = mysqli_connect($host,$user,$pass);

if (!$conn){
	die(mysql_error());
}else{
	print 'connected!';
}
//oop
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=site", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    }
?>