

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
                    Take This Course | <?php if($data->price != "FREE"){echo '$';} echo $data->price;?>
                </a>
            </footer>
        </div>
    </div>

