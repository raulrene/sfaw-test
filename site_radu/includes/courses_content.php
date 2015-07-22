<?php

$obj = new Pagination();
$data = $obj->pagination();

?>
	<h1>Popular courses</h1>
	<!-- courses section  -->

	<div class="course-list">
		<!-- course first section  -->
        <?php

        if (isset($data) && !empty($data)) {
        $i=0;

        foreach ($data as $row){
        $i++;
        ?>
		<div class = "column <?php if ($i % 4 == 0) echo 'last';?>">
			<div class="column-content">
				<!-- course first section img -->
				<div class="col-img">
					<a href="course_info.php?id=<?php echo $row->id; ?>">
						<img alt="cook" src="assets/img/<?php echo $row->img;?>">
					</a>
				</div>
				<div class=" <?php if ($row->price !== 'FREE') echo "crs-price"; else echo "crs-price-red" ?>">
					<div class="price-text">
						<span class="amount"><?php echo $row->price;?></span>
					</div>
					<!-- course first section corner div  -->
					<div class="corner-wrap">
						<div class="<?php if ($row->price !== 'FREE') echo "corner"; else echo "corner-red" ?>"></div>
						<div class="corner-background"></div>
					</div>
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
        <?php } }?>
		<!-- course first section end -->
		<!-- course second section  -->

		<!-- course last section end -->
		<div class="clear"></div>					
	</div>
<?php
$count = $obj->rez();
echo "<center ><a href='?page=1' style='color:#ccc;'>".'First<< '."</a> ";
for ($p=1; $p<=$count; $p++) {
    echo "<a style='color:#00000f;' href='?page=".$p."'>".$p."</a> ";
};
echo "<a href='?page=$count' style='color:#ccc;'>".'>>Last '."</a></center> ";
?>

	<!-- courses section end -->