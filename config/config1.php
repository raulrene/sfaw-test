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

$db = new Database($host, $user, $pass,$dbase);

?>
