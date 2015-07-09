<?php
include('config/config.php');
?>

<h1>Popular courses</h1>

<div class="course-list">
    <?php
    $query = "SELECT * FROM courses ";
    $result = mysqli_query($conn,$query);

    if(isset($result) && !empty($result)){
        $no = 0;
        foreach($result as $row){
            $no++;

    ?>
    <div class = "column <?php if($no % 4 == 0)echo "last"?>">
        <div class="column-content">
            <!-- course first section img -->
            <div class="col-img">
                <a href="#">
                    <img alt="cook" src="<?php echo $row['picture'];?>">
                </a>
            </div>
            <div class="<?php if($row['price'] == "FREE")echo "corner_red"?> crs-price ">
                <div class="price-text">
                    <span class="amount"><?php if($row['price'] != "FREE"){echo '$';} echo $row['price'];?></span>
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
                    <h5><a href="#"><?php echo $row['name'];?></a></h5>
                    <a class="author" href="#"><?php echo $row['author'];?></a>
                </header>
                <footer class="crs-footer">
                    <div class="crs-user"><img src="assets/img/user_icon.png" alt="user"/><?php echo $row['user'];?></div>
                    <div class="crs-star">
                        <?php
                            $starCount = $row['stars'];
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
</div>