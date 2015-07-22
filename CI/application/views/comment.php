<?php

?>
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
    <div class="main-content">
        <div class="row">
            <?php
            $this->load->view("includes/comments.php");
            ?>
        </div>
    </div>
    <?php $this->load->view('includes/footer.php'); ?>
</div>
</body>
</html>
