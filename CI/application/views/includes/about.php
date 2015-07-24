
<div class="tabs-container vertical-tabs">
    <div class="column three-col tabs">
        <ul>
            <?php
            foreach($selectAll as $row){
                ?>
                <a href="<?php echo base_url();?>course_info/index/<?php echo $this->uri->segment(3)."/".$row->friendly_url; ?>">

                    <li class="">
                        <?php echo $row->nume;?>
                    </li>
                </a>

            <?php } ?>
        </ul>
    </div>
</div>
<div class="tabs-content">
    <?php

    foreach($selectJoin as $row){
    ?>
        <h1><?php echo $row->nume;?></h1>
        <p><?php echo $row->content_text; ?></p>
        <a class="button large primary" target="_self" href=" ">
            Purchase now
        </a>
    <?php } ?>
</div>
<div class="clear"></div>
