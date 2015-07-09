<?php include('connection.php');?>
<!-- courses section header  -->
<h1>Popular courses</h1>
<!-- courses section  -->
<div class="course-list">
    <!-- course first section  -->
    <?php
        $q  = mysqli_query($conn,"SELECT * FROM courses");
        if(isset($q) && !empty($q)){
            $i = 0;
        foreach($q as $row){
            $i++;
    ?>
    <div class = "column <?php if($i % 4 == 0){echo "last";} ?>">
        <div class="column-content">
            <!-- course first section img -->
            <div class="col-img">
                <a href="#">
                    <img src="<?php echo $row['course_img']; ?>" alt="<?php echo $row['img_alt']; ?>" />
                </a>
            </div>
            <div class="crs-price <?php if($row['course_price'] == 'free'){echo 'corner_red';} ?>" >
                <div class="price-text">
                    <span class="amount"><?php if($row['course_price'] != 'free'){echo '$'.$row['course_price'];}else{echo $row['course_price'];}  ?></span>
                </div>
                <!-- course first section corner div  -->
                <div class="corner-wrap">
                    <div class="corner"></div>
                    <div class="corner-background"></div>
                </div>
            </div>
            <!-- course first section  links-->
            <div class="col-txt">
                <header class="crs-header">
                    <h5><a href="#"><?php echo $row['course_name'];?></a></h5>
                    <a class="author" href="#"><?php echo $row['course_author'];?></a>
                </header>
                <footer class="crs-footer">
                    <div class="crs-user"><img src="assets/img/user_icon.png" alt="user"/> <?php echo $row['course_user'];?></div>
                    <div class="crs-star">
                        <?php
                        for($n=0;$n<5;$n++){
                            if($n<$row['course_stars']){
                                echo'<img src="assets/img/star-on.png" alt="star"/>';
                            }else{
                                echo'<img src="assets/img/star-off.png" alt="star"/>';
                            }
                        }
                         ?>
                    </div>
                </footer>
                <div class="clear"></div>
            </div>
        </div>
    </div>
     <?php  } } ?>
</div>
<!-- courses section end -->