<?php


$obj = new Course();
$data = $obj->getAll();

$pag = new Pagination();
$dataPag = $pag->pagination();

?>

<div class="row">
    <h1>Courses</h1>
</div>

<div class="course-list">
    <?php
    if(isset($dataPag) && !empty($dataPag)){
        $no = 0;
        foreach($dataPag as $row){
            $no++;
            ?>
            <div class = "column <?php if($no % 4 == 0)echo "last"?>">
                <div class="column-content">
                    <!-- course first section img -->
                    <div class="col-img">
                        <a href="course-info.php?id=<?php echo $row->id; ?>">
                            <img alt="cook" src="<?php echo $row->picture;?>">
                        </a>
                    </div>
                    <div class="<?php if($row->price == "FREE")echo "corner_red"?> crs-price ">
                        <div class="price-text">
                            <span class="amount"><?php if($row->price != "FREE"){echo '$';} echo $row->price;?></span>
                        </div>
                        <!-- course first section corner div  -->
                        <div class="corner-wrap">
                            <div class="corner"></div>
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
                            <div class="crs-user"><img src="assets/img/user_icon.png" alt="user"/><?php echo $row->user;?></div>
                            <div class="crs-star">
                                <?php
                                $starCount = $row->stars;
                                for($i = 0 ; $i < 5; $i++){
                                    if($starCount != 0){
                                        echo '<img src="assets/img/star-on.png" alt="star"/>';
                                        $starCount--;
                                    }
                                    else echo '<img src="assets/img/star-off.png" alt="star"/>';
                                }

                                ?>


                            </div>
                        </footer>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

        <?php } } ?>
    <div class="clear"></div>
</div>
<div clas="row">
    <?php
    $count = $pag->getResult();
    echo "<center ><a href='?page=1' style='color:#ccc;'>".'First  << '."</a> ";
    for ($p=1; $p<=$count; $p++) {
        echo "<a style='color:#00000f;' href='?page=".$p."'>".$p."</a> ";
    };
    echo "<a href='?page=$count' style='color:#ccc;'>".'>>  Last '."</a></center> ";
    ?>
</div>
<div class="clear"></div>