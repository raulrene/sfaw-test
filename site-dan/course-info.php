<?php
include('classes/Courses.php');
include_once('config/config.php');
include('classes/SubCapitol.php');
include('classes/SubSubCapitol.php');
include('classes/Content.php');
include_once('classes/Description.php');

?>
<!DOCTYPE html>

<html>
<head>
    <?php
    include('includes/head.php');
    ?>
    <script language="javascript" src="assets/js/course-info.js"></script>
    <script>


    </script>
</head>
<body class="single-course">
<?php
include('includes/header.php');
?>


<div class="site-wrap">
    <div class="featured-content">
        <div class="row">

              <?php
              include('includes/single-course.php');
              ?>

        </div>
    </div>
    <div class="main-content">
        <div class="row">
            <?php include('includes/about.php'); ?>
    </div>

        <?php include('includes/footer.php'); ?>

</div>


</body>
</html>

