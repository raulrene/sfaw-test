<!DOCTYPE html>
<?php
include('config/config.php');
?>

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
