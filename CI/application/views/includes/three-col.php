<?php
    $no = 0;
    foreach($threeCol as $row){
        $no++;
?>

            <div class="fourcol column <?php if($no % 3 == 0)echo "last"?>"">
                <div class="three-col">
                    <img class="alignnone float-left" alt="" src="<?php echo base_url().$row->img;?>">
                    <h3><?php echo $row->title;?></h3>
                </div>
                <div class="clear"></div>
                <p><?php echo $row->text;?></p>
            </div>
    <?php }?>
            <div class="clear"></div>
