<?php
include('/config/config.php');
?>

    <?php
    $id = 5; //$_GET...
    $query = "SELECT * FROM courses WHERE id=$id";
    $result = mysqli_query($conn,$query);

    if(isset($result) && !empty($result)){
        $no = 0;
        foreach($result as $row){
            $no++;

            ?>
            <div class = "column <?php if($no % 4 == 0)echo "last"?>">
                <div class="column-content course-preview">
                    <!-- course first section img -->
                    <div class="col-img">
                        <a href="course-info.php/<?php echo $row['id']; ?>">
                            <img alt="cook" src="<?php echo $row['picture'];?>">
                        </a>
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
