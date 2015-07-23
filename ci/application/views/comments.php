<!DOCTYPE html>
<html>
	<head>
	<?php
	$this->load->view('includes/site_head.php');

	?>
	</head>
	<body>
		<?php 	
		$this->load->view('includes/site_header.php');
		?>
		<div class="site-wrap">
			<?php
			$this->load->view('includes/comments_content.php');
			?>
		   <div class="main-content">
			<?php

			?>
			</div>
			<?php $this->load->view('includes/site_footer.php'); ?>
		</div>
	</body>
</html>
