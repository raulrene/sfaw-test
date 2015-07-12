<?php
include('config/config-old.php');
include('classes/Courses.php');

/*
$obj = new Course();
echo '<pre>';
print_r($obj);
$data = $obj->getAll();

echo '<pre>';
print_r($data);
die;
*/
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
            include('includes/courses-loop.php');
            ?>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
</div>
</body>
</html>
