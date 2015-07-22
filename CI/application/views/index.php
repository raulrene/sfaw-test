<!DOCTYPE html>
<html>
	<head>
	<?php
	$this->load->view('includes/head.php');
	?>
	</head>
	<body>
		<?php
        $this->load->view('includes/header.php');
		?>
		<div class="site-wrap">
			<?php
            $this->load->view('includes/feature-content.php');
			?>
		   <div class="main-content">
               <div class="row">
                    <?php
                    $this->load->view('includes/three-col.php');
                    $this->load->view('includes/courses.php');
                    $this->load->view('includes/main-content.php');
                    ?>
                   </div>
               <?php $this->load->view('includes/footer.php'); ?>
			</div>



        </div>

	</body>
</html>
