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
                <li class="current" id="online">Online Learning</li>
                <li id="woo">WooCommerce</li>
                <li id="profiles">User Profiles</li>
                <li id="media"> Media Player</li>
            </ul>
        </div>
        <div class="tabs_content">
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
<script type="text/javascript">
    $(function(){
        alert('acaca');
    });
</script>
</body>
</html>