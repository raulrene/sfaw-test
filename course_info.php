<?php
include_once('config/config.php');
include_once('classes/sub_chapter.php');
include_once('classes/sub_sub_chapter.php');
include_once('classes/content.php');
include_once('classes/courses.php');
$title = 'Course-Info';
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
                <p><?php echo $c->course_overview; ?></p>
                <h4>About the Author</h4>
                <p><?php echo $c->about_author; ?></p>
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
                        $url = 'online-learning';
                    }
                    include_once('database/database1.php');
                    $s =  "SELECT * FROM sub_chapters";
                    $l = mysqli_query($conn, $s);
                    while($row = mysqli_fetch_assoc($l)){ ?>

                            <li class="<?php echo $row['class']; ?>" id="<?php echo $row['id_html']; ?>">
                                <a href="course_info.php?id=<?php echo $_GET['id'].'&url='.$row['friendly_url']; ?>">
                                <?php echo $row['links']; ?>
                                </a>
                            </li>

                    <?php } ?>
            </ul>
        </div>
        <?php
                    $q =   "SELECT *
                            FROM sub_chapters A
                            LEFT JOIN sub_sub_ch B
                            ON A.id = B.sub_ch_id
                            LEFT JOIN  content C
                            ON B.id = C.sub_sub_ch_id
                            WHERE A.friendly_url = " ."'". $url ."'
                          ";
                    $j = mysqli_query($conn, $q);
                    while($row = mysqli_fetch_assoc($j)){
        ?>

        <div class="tabs_content">

            <h1><?php echo $row['sub_sub_ch_name']; ?></h1>
            <p><b><?php echo $row['text_1']; ?></b></p>
            <p><?php echo $row['text_2']; ?></p>
            <p><?php echo $row['text_3']; ?> </p>
            <a class="button large primary" target="_self" href=" ">
                <img src="assets/img/image_66.png" alt="" />
                Purchase now
            </a>

        </div>
        <?php } ?>

        <div class="clear"></div>
    </div>
</div>
<script type="text/javascript" src="assets/js/links.js" language="JavaScript">
</script>
</body>
</html>