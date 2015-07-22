<?php

?>
    <div class="featured-content">
        <div class="row">
            <div class="fivecol column" style="top: 150.5px;">
                <h1><?php echo $slider[0]->title?></h1>
                <p>
                    <?php echo $slider[0]->text; ?>
                </p>
                <a href=" " target="_self" class="button large primary">
                    <img class="alignnone" alt="" src="<?php echo base_url();?>assets/img/bookImg.png">
                Get Started
                </a>
            </div>
            <div class="sevencol column last">
                <img class="alignnone" alt="" src="<?php echo base_url().$slider[0]->img?>">
            </div>
        </div>
        <div class="arrow arrow-left"></div>
        <div class="arrow arrow-right"></div>
    </div>
 