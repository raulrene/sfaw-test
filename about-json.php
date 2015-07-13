<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/13/15
 * Time: 4:21 PM
 */

include_once('config/config.php');
include_once('classes/about.php');

$ab = new About();
$q = $ab->getInfo();
echo json_encode($q);
?>