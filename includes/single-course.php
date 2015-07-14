

    <?php
    $obj = new Course();
    $data = $obj->getCapitol($_GET['id']);
            ?>
            <div class = "three-col column">
                <div class="column-content course-preview">
                    <!-- course first section img -->
                    <div class="col-img">
                        <a href="course-info.php/<?php echo $data->id; ?>">
                            <img alt="cook" src="<?php echo $data->picture;?>">
                        </a>
                    </div>

                    <!-- course first section  links-->
                    <div class="col-txt">
                        <header class="crs-header">
                            <h5><a href="#"><?php echo $data->name;?></a></h5>
                            <a class="author" href="#"><?php echo $data->author;?></a>
                        </header>
                        <footer class="crs-footer">
                            <div class="crs-user"><img src="assets/img/user_icon.png" alt="user"/><?php echo $data->user;?></div>
                            <div class="crs-star">
                                <?php
                                $starCount = $data->stars;
                                for($i = 0 ; $i < 5; $i++){
                                    if($starCount != 0){
                                        echo '<img src="assets/img/star-on.png" alt="star"/>';
                                        $starCount--;
                                    }
                                    else echo '<img src="assets/img/star-off.png" alt="star"/>';
                                }

                                ?>


                            </div>
                        </footer>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

