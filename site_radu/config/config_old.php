<?php

//procedural
    $serverName = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'primarydb';
    $conn = new mysqli($serverName, $user, $pass,$db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }