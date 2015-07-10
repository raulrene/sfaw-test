<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = 'newSite';


// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

//db = ...

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>