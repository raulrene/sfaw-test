<?php
include('config/config.php');
include('classes/Courses.php');

?>
<!DOCTYPE html>

<html>
<head>
    <?php
    include('includes/head.php');
    ?>
    <script language="javascript" src="assets/js/course-info.js"></script>
    <script>


    </script>
</head>
<body class="single-course">
<?php
include('includes/header.php');
?>


<div class="site-wrap">
    <div class="featured-content">
        <div class="row">

              <?php
              include('includes/single-course.php');
              ?>

           <div class="sixcol column">
               <div class="course-description widget">
                   <div class="widget-title"><h4 class="nomargin">Description</h4></div>
                   <div class="widget-content">
                       <h4>Course Overview</h4>
                       <p>Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!</p>
                       <h4>About the Author</h4>
                       <p>Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.</p>
                   </div>
                   <footer class="course-footer">

                       <a href="#" class="button medium">
                           Take This Course
                       </a>
                   </footer>
               </div>
           </div>

        </div>
    </div>
    <div class="main-content">
        <div class="row">
            <div class="tabs-container vertical-tabs">
                <div class="column three-col tabs">
                    <ul>
                        <li class="current"><a href="#online-learning">Online Learning</a></li>
                        <li class=""><a href="#woocommerce"> WooCommerce</a></li>
                        <li class=""><a href="#user-profiles"> User Profiles</a></li>
                        <li class=""><a href="#media-player"> Media Player</a></li>
                    </ul>
                </div>
            </div>
            <div class="tabs-content">
                <h1>Learning Management</h1>
                <p>Quisque id augue erat, suscipit ultricies est. Maecenas feugiat justo ac massa porttitor mollis auctor nulla ullamcorper. sed blandit interdum.</p>
                <p>Penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem. Nam mattis consectetur suscipit. Vivamus quis ante enim. Cras id sodales metus.</p>
                <p>Suspendisse luctus, felis at fringilla dictum, erat massa vehicula velit, id venenatis eros libero et lectus. Proin ullamcorper molestie lectus, sit amet condimentum dui tincidunt ut. In tempor faucibus eros, sed auctor orci ultricies non suspen.</p>
                <a class="button large primary" target="_self" href=" ">
                    Purchase now
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="footer-wrap">
        <?php include('includes/footer.php'); ?>
    </div>
</div>


</body>
</html>

