<?php
include_once('config/config.php');
include_once('classes/sub_chapter.php');
include_once('classes/sub_sub_chapter.php');
include_once('classes/content.php');
include_once('classes/courses.php');

$obj= new SubChapter();
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
                    Take This Course | <?php echo $c->course_price; ?>
                </a>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="tabs">
            <ul>
                <?php
                if(isset($_GET['url']) && !empty($_GET['url'])){
                    $url = $_GET['url'];
                }else{
                    $url = '#online-learning';
                }
                $ll = $obj->getCombined($url);
                if(isset($ll) && !empty($ll)){
                    echo '<pre>';
                    var_dump($ll);
                } ?>

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