<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('includes/head'); ?>
</head>
<body>
    <?php $this->load->view('includes/header.php'); ?>
    <?php $this->load->view('includes/sub_header.php'); ?>
    <div class="row">
        <p>Record successfully deleted !</p>
        <a href="<?php echo base_url(); ?>admin/index" class="button large primary">Return</a>
    </div>
</body> 
</html>
