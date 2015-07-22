
<div class="tabs-container vertical-tabs">
    <div class="column three-col tabs">
        <ul>
            <?php
            while($row = mysqli_fetch_assoc($selectAll)){
                ?>
                <a href="<?php echo base_url();?>course-info.php?id=<?php echo $_GET['id']."&url=".$row['friendly_url']; ?>">

                    <li class="">
                        <?php echo $row['nume'];?>
                    </li>
                </a>

            <?php } ?>
        </ul>
    </div>
</div>
<div class="tabs-content">
    <?php
        while($row = mysqli_fetch_assoc($selectJoin)){
    ?>
        <h1><?php echo $row['nume'];?></h1>
        <p><?php echo $row['content_text']; ?></p>
        <a class="button large primary" target="_self" href=" ">
            Purchase now
        </a>
    <?php } ?>
</div>
<div class="clear"></div>
