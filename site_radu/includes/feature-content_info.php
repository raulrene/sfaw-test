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
	<?php
	if (isset($_GET['url']) && !empty($_GET['url'])){
		$url = $_GET['url'];
	}
	else {
		$url = "online-learning";
		}
	include('config/config_old.php');
	$query = "
	SELECT * FROM capitol X
	LEFT JOIN sub_capitol Y ON X.id = Y.capitol_id
	LEFT JOIN content C ON Y.id = C.sub_capitol_id
	WHERE X.url =" ."'". $url ."'
		";
	$q = "SELECT * FROM capitol" ;
	$a = mysqli_query($conn, $q);
	$b = mysqli_query($conn, $query);
	
	//var_dump($b);
	
	?>
	<div class="info_content">
        <div class="info_learning">
            <div class="meniu_lateral">
                <div class="meniu_lateral_content">
                    <ul>
						<?php 
						while ($row = mysqli_fetch_assoc($a))
						{?>
                        <li class="active"><a href="course_info.php?id=<?php echo $_GET['id'] . '&url=' . $row['url'];?>"><?php echo $row['capitol'];?></a></li>
                        
						<?php }?>
                    </ul>
                </div>
            </div>
            <div class="tabs-content">
				<?php 
					foreach ($b as $row1)
						{?>
                <h1><?php echo $row1['sub_capitol'];?></h1>
                <p><?php echo $row1['text_1'];?></p>
                <p><?php echo $row1['text_2'];?></p>
                <p><?php echo $row1['text_3'];?></p>
					<?php }?>
                <a class="button large primary" target="_self" href=" ">
                    Purchase now
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
 