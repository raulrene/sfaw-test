<?php
include('classes/courses.php');
include('config/config.php');
$obj = new Course();
$data = $obj->getCourses();
echo '<pre>';
var_dump($data);
die();
?>

<!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.php'); ?>
</head>
<body>
<?php include('includes/header.php'); ?>
<div class="site-wrap">
    <div class="main-content">
        <div class="row">
            <?php include('includes/course_loop1.php'); ?>
        </div>
    </div>
    <?php require('includes/footer.php'); ?>
</div>
</body>
</html>