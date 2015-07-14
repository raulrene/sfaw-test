<div class = "column">
    <div class="column-content">
        <!-- course second section image  -->
        <?php
            if(isset($_GET['id']) && !empty($_GET['id'])){
                $id = $_GET['id'];
                $crs = new Course();
                $c = $crs->getCourseById($id);
            }
        ?>
        <div class="col-img">
            <a href="#">
                <img  alt="<?php echo $c->img_alt; ?>" src="<?php echo $c->course_img; ?>">
            </a>
        </div>
        <!-- course second section links  -->
        <div class="col-txt">
            <header class="crs-header">
                <h5><a href="#"><?php echo $c->course_name; ?></a></h5>
                <a class="author" href="#"><?php  echo $c->course_author ?></a>
            </header>
            <footer class="crs-footer">
                <div class="crs-user"><img src="assets/img/user_icon.png" alt="user"/> <?php  echo $c->course_user; ?></div>
                <div class="crs-star">
                    <?php
                    for($n=0;$n<5;$n++){
                        if($n<$c->course_stars){
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