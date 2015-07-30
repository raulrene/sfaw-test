<?php

include('database/database.php');
$serverName = "localhost";
$username = "root";
$password = "root";
$dbName = 'newSite';
$charset = "utf8"; $debug = true;$errormsg = "Database connection failed";

// Create connection
//$conn = mysqli_connect($serverName, $username, $password,$dbName);

$db = new Database($serverName,$username,$password,$dbName,$charset,$debug,$errormsg);

