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
$db   = 'site';

include_once('../database/database');

$dbb = new Database($host, $user, $pass,$db);

