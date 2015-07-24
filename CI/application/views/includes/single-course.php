<?php

if(isset($singleCap) && !empty($singleCap)){
?>
            <div class = "three-col column">
                <div class="column-content course-preview">
                    <!-- course first section img -->
                    <div class="col-img">
                        <a href="course-info.php/<?php echo $singleCap[0]->id; ?>">
                            <img alt="cook" src="<?php echo base_url().$singleCap[0]->picture;?>">
                        </a>
                    </div>

                    <!-- course first section  links-->
                    <div class="col-txt">
                        <header class="crs-header">
                            <h5><a href="#"><?php echo $singleCap[0]->name;?></a></h5>
                            <a class="author" href="#"><?php echo $singleCap[0]->author;?></a>
                        </header>
                        <footer class="crs-footer">
                            <div class="crs-user"><img src="<?php echo base_url();?>assets/img/user_icon.png" alt="user"/><?php echo $singleCap[0]->user;?></div>
                            <div class="crs-star">
                                <?php
                                $starCount = $singleCap[0]->stars;
                                for($i = 0 ; $i < 5; $i++){
                                    if($starCount != 0){?>
                                        <img src="<?php echo base_url();?>assets/img/star-on.png" alt="star"/>
                                        <?php $starCount--;
                                    }
                                    else {?>
                                        <img src="<?php echo base_url();?>assets/img/star-off.png" alt="star"/>
                                    <?php
                                    }    }?>


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
                <p><?php echo $descr[0]->course_text;?></p>
                <h4>About the Author</h4>
                <p><?php echo $descr[0]->about_text;?></p>
            </div>
            <footer class="course-footer">

                <a href="#" class="button medium">
                    Take This Course | <?php if($singleCap[0]->price != "FREE"){echo '$';} echo $singleCap[0]->price;?>
                </a>
            </footer>
        </div>
    </div>

<?php } ?>