<?php
include_once('config/config.php');
include_once('classes/home.php');
include_once('classes/courses.php');

$hm = new Home();
$course = new Course();

?>
<!DOCTYPE html>
<html>
	<head>
	<?php include('includes/head.php'); ?>
	</head>
	<body>
		<?php include('includes/header.php'); ?>
		<div class="site-wrap">
			<?php include('includes/feature-content.php'); ?>
		   <div class="main-content">
               <div class="row">
                <?php
                    include('includes/three-col.php');
                    include('includes/courses.php');
                    include('includes/main-content.php');
                ?>
                </div>
			</div>
			<?php include('includes/footer.php'); ?>
		</div>
	</body>
</html>
