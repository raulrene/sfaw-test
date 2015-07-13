<?php
include_once('config/config.php');
include_once('classes/comments.php');
include_once('classes/replies.php');

$comm = new Comments();
$q = $comm->getComments();
$reply = new Replies();
$s = $reply->getReplies();
?>
<!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.php'); ?>
</head>
<body>
<?php include('includes/header.php'); ?>
<div class="site-wrap">
    <div class="main-content">
        <?php
        include('includes/comm_page.php');
        ?>
    </div>
    <?php include('includes/footer.php'); ?>
</div>
</body>
</html>
