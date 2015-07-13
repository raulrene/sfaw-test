<?php
$obj = new Courses();
$row = $obj->getCourse($_GET['id']);
?>
    <div class="featured-content_info">
		<div class = "column_info">
			<div class="column-content">
				<!-- course first section img -->
				<div class="col-img">
					<a href="#">
						<img alt="cook" src="assets/img/<?php echo $row->img;?>">
					</a>
				</div>
				<!-- course first section  links-->			
				<div class="col-txt">
					<header class="crs-header">
						<h5><a href="#"><?php echo $row->name;?></a></h5>
						<a class="author" href="#"><?php echo $row->author;?></a>
					</header>
					<footer class="crs-footer">
						<div class="crs-user"><img src="assets/img/user_icon.png" alt="user"/><?php echo $row->users;?></div>
						<div class="crs-star">
                    <?php
                        for ($j=0; $j<5; $j++ ) {
                            if ($j < $row->stars) {
                                echo '<img src="assets/img/star-on.png" alt="star"/>';
                            }
                            else {
                                echo '<img src="assets/img/star-off.png" alt="star"/>';
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
			<h4>Course Overview</h4>
			<p>Maecenas a leo nisi. Nam pharetra imperdiet diam, ut consequat felis egestas sagittis. Donec at nunc augue, cursus iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim lobortis ligula, quis fringilla justo dictum phasellus adipiscing dictum!</p>
			<h4>About the Author</h4>
			<p>Nam sem nulla, mollis ac ullamcorper in, placerat eget lectus. Suspendisse in dui eu neque suscipit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam lobortis.</p>
			
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
                        <li class="active"><a href="#">Online Learning</a></li>
                        <li class=""><a href="#"> WooCommerce</a></li>
                        <li class=""><a href="#"> User Profiles</a></li>
                        <li class=""><a href="#"> Media Player</a></li>
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
 