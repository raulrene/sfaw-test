<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/10/15
 * Time: 11:52 AM
 */

$host = 'localhost';
$user = 'root';
$pass = '6636';
$dbase   = 'site';

include('../database/database1');

//instantiating new database class
$pdo = new Database1($host,$user,$pass,$dbase);
//creating connection object
$db = $pdo->connect();
global $db;
?>
