<?php
$host = "localhost";
$user = "root";
$password = "";
$database="primarydb";
$conn=mysqli_connect($host, $user, $password, $database );
if(!$conn){
    die("Cannot connect: ".mysqli_error($conn));
};
?>