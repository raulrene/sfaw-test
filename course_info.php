<!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.php'); ?>
</head>
<body>
<?php include('includes/header.php'); ?>
<div class="site-wrap">
    <div class="featured-content">
        <div class="ech_col">
            <?php include('includes/each_course.php'); ?>
        </div>
    </div>
    <div class="main-content">
        <?php
        include('includes/courses.php');
        ?>
    </div>
    <?php include('includes/footer.php'); ?>
</div>
</body>
</html>