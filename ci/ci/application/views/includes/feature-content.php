<div class="featured-content">
	<?php
		
		if (isset($data) && !empty($data)) {
			
			foreach ($data as $row){
			?>
			<div class="row">
				
				<div class="fivecol column" style="top: 150.5px;">
					
					<h1><?php echo $row->title;?></h1>
					<p>
						<?php echo $row->text;?>
					</p>
					<a href=" " target="_self" class="button large primary">
						<img class="alignnone" alt="" src="assets/img/bookImg.png">
						Get Started
					</a>
				</div>
				<div class="sevencol column last">
					<img class="alignnone" alt="" src="assets/img/<?php echo $row->img;?>">
					
				</div>
			</div>
		<?php } }?>
	<div class="arrow arrow-left"></div>
	<div class="arrow arrow-right"></div>
</div>
