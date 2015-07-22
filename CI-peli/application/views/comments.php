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
        <?php
        $this->load->view('includes/comm_page.php');
        ?>
    </div>
    <?php $this->load->view('includes/footer.php'); ?>
</div>
</body>
</html>
