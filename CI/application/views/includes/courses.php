
	<!-- courses section header  -->
	<h1>Popular courses</h1>
	<!-- courses section  -->
    <div class="course-list">
    <?php
        $no = 0;
        foreach($crs as $row){
            $no++;
    ?>


		<div class = "column <?php if($no % 4 == 0)echo "last"?>">
			<div class="column-content">

				<div class="col-img">
					<a href="<?php echo base_url();?>course_info/index/<?php echo $row->id; ?>">
						<img alt="" src="<?php echo base_url().$row->picture;?>">
					</a>
				</div>
				<div class="<?php if($row->price == "FREE")echo "corner_red"?> crs-price">
					<div class="price-text">
                        <span class="amount"><?php if($row->price != "FREE"){echo '$';} echo $row->price;?></span>
					</div>

					<div class="corner-wrap">
						<div class="corner"></div>
						<div class="corner-background"></div>
					</div>
				</div>
				<div class="col-txt">
					<header class="crs-header">
						<h5><a href="#"><?php echo $row->name;?></a></h5>
						<a class="author" href="#"><?php echo $row->author;?></a>
					</header>
					<footer class="crs-footer">
						<div class="crs-user"><img src="<?php echo base_url();?>assets/img/user_icon.png" alt="user"/><?php echo $row->user;?></div>
						<div class="crs-star">
                            <?php
                            $starCount = $row->stars;
                            for($i = 0 ; $i < 5; $i++){
                                if($starCount != 0){
                                    ?>
                                    <img src="<?php echo base_url();?>assets/img/star-on.png" alt="star"/>
                                <?php
                                    $starCount--;
                                }else{
                                ?>
                                <img src="<?php echo base_url();?>assets/img/star-off.png" alt="star"/>
                            <?php
                            } }
                            ?>
						</div>
					</footer>
					<div class="clear"></div>
				</div>
			</div>
		</div>


        <?php } ?>
        <!-- course last section end -->
        <div class="clear"></div>
    </div>