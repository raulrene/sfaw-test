<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = 'primarydb';
$charset = "utf8";
$debug = false;
$errormsg = "Database connection failed.";
include('database/database.php');
$db = new Database($database, $host,$user,$password);


?>