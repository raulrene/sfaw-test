<?php
include_once('config/config.php');
include_once('classes/sub_chapter.php');
include_once('classes/sub_sub_chapter.php');
include_once('classes/content.php');


?>
<!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.php'); ?>
</head>
<body>
<?php include('includes/header.php'); ?>
<div class="site-wrap">
    <div class="featured-content">
        <div class="ech_col">
            <?php include('includes/each_course.php'); ?>
        </div>

        <div class="course_decription">
            <div class="description_title">
                <h4>Course Description</h4>
            </div>
            <div class="description_content">
                <h4>Course Overview</h4>
                <p>Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!</p>
                <h4>About the Author</h4>
                <p>Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.</p>
                <a class="button large primary" target="_self" href=" ">
                    Take This Course | $128
                </a>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="tabs">
            <ul>
                <?php if(isset($q) && !empty($q)){
                    foreach($q as $row){ ?>
                    <a href="/course_info?url=<?php echo $row->friendly_link; ?>"><li class="<?php echo $row->class; ?>" id="<?php echo $row->idname; ?>"><?php echo $row->link; ?></li></a>
                <?php } } ?>
            </ul>
        </div>
        <div class="tabs_content">

            <h1><?php echo $row->h1; ?></h1>
            <p><b><?php echo $row->p1; ?></b></p>
            <p><?php echo $row->p2; ?></p>
            <p><?php echo $row->p3; ?> </p>
            <a class="button large primary" target="_self" href=" ">
                <img src="assets/img/image_66.png" alt="" />
                Purchase now
            </a>

        </div>
        <div class="clear"></div>
    </div>
</div>
<script type="text/javascript" src="assets/js/links.js" language="JavaScript">
</script>
</body>
</html>