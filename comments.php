<?php
include('config/config.php');
include('classes/comments_class.php');
include('classes/replies_class.php');

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
            include('includes/comments_content.php');
			?>
		   <div class="main-content">
			<?php

			?>
			</div>
			<?php include('includes/footer.php'); ?>
		</div>
	</body>
</html>
