<?php
include('config/config.php');
include('classes/index_class.php');
include('classes/courses_class.php');
include('classes/pages_class.php');

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
			<?php 	
			include('includes/feature-content.php');
			?>
		   <div class="main-content">
			<?php
				include('includes/three-col.php');
				include('includes/courses.php');
				include('includes/main-content.php');
			?>
			</div>
			<?php include('includes/footer.php'); ?>
		</div>
	</body>
</html>
