<div class="row">
	<?php
		
		if (isset($data1) && !empty($data1)) {
			$i=0;
			
			foreach ($data1 as $row){
				$i++;
			?>
            <div class="fourcol column <?php if ($i % 3 == 0) echo "last";?>">
                <div class="three-col">
                    <img class="alignnone float-left" alt="" src="assets/img/<?php echo $row->img;?>">
                    <h3><?php echo $row->title;?></h3>
                </div>
                <div class="clear"></div>
                <p><?php echo $row->text;?></p>
            </div>
		<?php } }?>
</div>
<div class="clear"></div>