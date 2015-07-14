<?php
$tag = 'slider';
$s = $hm->getInfoByTag($tag);
?>
    <div class="featured-content">
        <div class="row">
            <div class="fivecol column" style="top: 150px;">
                <h1><?php echo $s[2]->title; ?></h1>
                <p>
                    <?php echo $s[2]->text; ?>
                </p>
                <a href=" " target="_self" class="button large primary">
                    <img class="alignnone" alt="" src="assets/img/bookImg.png">
                Get Started
                </a>
            </div>
            <div class="sevencol column last">
                <img class="alignnone" alt="" src="<?php echo $s[2]->img; ?>">
            </div>
        </div>
        <div class="arrow arrow-left"></div>
        <div class="arrow arrow-right"></div>
    </div>
 