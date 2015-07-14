<?php
include('classes/Courses.php');
include('config/config.php');
include('classes/Testimonials.php');
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
               <div class="row">
                    <?php
                        include('includes/three-col.php');
                        include('includes/courses.php');
                        include('includes/main-content.php');
                    ?>
                   </div>
			</div>
            <div class="footer-wrap"?
			<?php include('includes/footer.php'); ?>
		    </div>
        </div>
	</body>
</html>
