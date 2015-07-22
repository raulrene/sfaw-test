
<html>
<head>
    <?php
    $this->load->view('includes/head.php');
    ?>

    <script>


    </script>
</head>
<body class="single-course">
<?php
$this->load->view('includes/header.php');
?>


<div class="site-wrap">
    <div class="featured-content">
        <div class="row">

              <?php
              $this->load->view('includes/single-course.php');
              ?>

        </div>
    </div>
    <div class="main-content">
        <div class="row">
            <?php $this->load->view('includes/about.php'); ?>
    </div>

        <?php $this->load->view('includes/footer.php'); ?>

</div>

    <script language="javascript" src="<?php echo base_url();?>assets/js/course-info.js"></script>
</body>
</html>

