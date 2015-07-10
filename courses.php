<?php
include('config/config.php');
include('classes/courses_class.php');
$obj = new Courses();
$data = $obj->getCourses();
echo '<pre>';
print_r($data);
die;
?>

<!DOCTYPE html>
<html>
<head>
    <?php
    include('includes/head.php');
    ?>
</head>
<body>
<?php
include('includes/header.php');
?>
<div class="site-wrap">

    <div class="main-content">
        <div class="row">
            <?php
            include('includes/courses_content.php');
            ?>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
</div>
</body>
</html>
