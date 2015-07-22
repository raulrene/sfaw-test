	<!-- courses section header  -->
	<h1>Popular courses</h1>
	<!-- courses section  -->
	<div class="course-list">
		<?php     
            if(isset($crs) && !empty($crs)){
                $v = 0;
                foreach($crs as $row){
                    $v++;
        ?>
                    <div class = "column <?php if($v % 4 == 0){echo "last";} ?>">
                        <div class="column-content">
                            <!-- course first section img -->
                            <div class="col-img">
                                <a href="course_info.php/<?php echo $row->id; ?>">
                                    <img src="<?php echo base_url().$row->course_img; ?>" alt="<?php echo $row->img_alt; ?>" />
                                </a>
                            </div>
                            <div class="crs-price <?php if($row->course_price == 'free'){echo 'corner_red';} ?>" >
                                <div class="price-text">
                                    <span class="amount"><?php if($row->course_price != 'free'){echo '$'.$row->course_price;}else{echo $row->course_price;}  ?></span>
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
                                    <h5><a href="#"><?php echo $row->course_name;?></a></h5>
                                    <a class="author" href="#"><?php echo $row->course_author;?></a>
                                </header>
                                <footer class="crs-footer">
                                    <div class="crs-user"><img src="<?php echo base_url(); ?>assets/img/user_icon.png" alt="user"/> <?php echo $row->course_user;?></div>
                                    <div class="crs-star">
                                        <?php
                                        for($n=0;$n<5;$n++){
                                            if($n<$row->course_stars){ ?>
                                                <img src="<?php echo base_url(); ?>assets/img/star-on.png" alt="star"/>
                                            <?php }else{ ?>
                                                <img src="<?php echo base_url(); ?>assets/img/star-off.png" alt="star"/>
                                            <?php }
                                        }
                                        ?>
                                    </div>
                                </footer>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
        <?php } } ?>
		<div class="clear"></div>					
	</div>
	<!-- courses section end -->