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

    <div class="main-content">
        <div class="row">
            <?php
            $this->load->view('includes/courses_content.php');
            ?>
        </div>
    </div>
    <?php $this->load->view('includes/site_footer.php'); ?>
</div>
</body>
</html>
