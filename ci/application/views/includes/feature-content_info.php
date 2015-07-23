    <div class="featured-content_info">
		<div class = "column_info">
			<div class="column-content">
				<!-- course first section img -->
				<div class="col-img">
					<a href="#">
						<img alt="cook" src="<?php echo base_url();?>assets/img/<?php echo $row->img;?>">
					</a>
				</div>
				<!-- course first section  links-->			
				<div class="col-txt">
					<header class="crs-header">
						<h5><a href="#"><?php echo $row->name;?></a></h5>
						<a class="author" href="#"><?php echo $row->author;?></a>
					</header>
					<footer class="crs-footer">
						<div class="crs-user"><img src="<?php echo base_url();?>assets/img/user_icon.png" alt="user"/><?php echo $row->users;?></div>
						<div class="crs-star">
                    <?php
                        for ($j=0; $j<5; $j++ ) {
                            if ($j < $row->stars) {
                                echo '<img src="' . base_url() . 'assets/img/star-on.png" alt="star"/>';
                            }
                            else {
                                echo '<img src="' . base_url() . 'assets/img/star-off.png" alt="star"/>';
                            }
						}
						
					?>
							
						</div>
					</footer>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="description">
			<div class="description_title">
				<h1>Description</h1>
			</div>
			<div class="description_text">
				<h4><?php echo $row->title_1; ?></h4>
				<p><?php echo $row->text_1; ?></p>
				<h4><?php echo $row->title_2; ?></h4>
				<p><?php echo $row->text_2; ?></p>
				
				<div >
					<a href="#"><div class="link_info">
						<div class="link_take">Take this course</div>
						<div class="link_price"><?php echo $row->price;?></div>
					</div></a>
				</div>
			</div>
		</div>
    </div>
	<div class="info_content">
        <div class="info_learning">
            <div class="meniu_lateral">
                <div class="meniu_lateral_content">
                    <ul>
					<?php 
						$capitol_curent = 0;
						$ul_deschis = false;
						foreach ($allSubcapitols as $row)
						{
								if($row->capitol_id != $capitol_curent) { 
									
									if($ul_deschis) {
										?>
										</ul >
										</li>
										<?php
									}

								?>
									<li class="active"><a href=""><?php echo $row->capitol;?></a>
									<ul class="subcapitol">
								<?php
									$ul_deschis = true;
									$capitol_curent = $row->capitol_id ;
								}
								
								if($row->sub_capitol_id == $selectedSubCapitol->sub_capitol_id) {
									$clasaSubCapitolSelectat = 'sub_capitol_selectat';
								}
								else {
									$clasaSubCapitolSelectat = '';
								}
								?>
								<li class="active <?php echo $clasaSubCapitolSelectat; ?>" ><a href="<?php echo base_url();?>coursesinfo/index/<?php echo $row->sub_capitol_id ;?>"><?php echo $row->nume;?></a></li>
								
					<?php
						}
						
						if($ul_deschis) {
									?>
									</ul >
									</li>
									<?php
						}
					?>
                    </ul>
                </div>
            </div>
			<div class="tabs-content">
				
					<?php 
					foreach ($contentForSubCapitol as $row)
						{?>
							<h4><?php echo $row->nume;?></h4>
							<p><?php echo $row->content;?></p>
		
						
					<?php }?>
                <a class="button large primary" target="_self" href=" ">
                    Purchase now
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </div>