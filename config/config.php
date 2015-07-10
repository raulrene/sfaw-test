<?php

include('../database/database.php');
$servername = "localhost";
$username = "root";
$password = "root";
$dbName = 'newSite';


// Create connection
//$conn = mysqli_connect($servername, $username, $password,$db);

$db = new Database($servername,$username,$password,$dbName);
