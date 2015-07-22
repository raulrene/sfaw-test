<! DOCTYPE html>
<html>
<head>
   <?php $this->load->view('includes/head.php'); ?>
</head>
<body>
<?php $this->load->view('includes/header.php'); ?>
<?php $this->load->view('includes/sub_header.php'); ?>
<div class="site-wrap">
    <div class="main-content">
        <div class="row">
            <?php $this->load->view('includes/course_loop1.php'); ?>
        </div>
    </div>
    <?php $this->load->view('includes/footer.php'); ?>
</div>
</body>
</html>