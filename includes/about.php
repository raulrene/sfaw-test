<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/13/15
 * Time: 3:52 PM
 */

//$obj = new SubCapitol();
//$data = $obj->getJoinedData("online-learning");
include_once('config/config-old.php');

$q = "SELECT * FROM sub_capitol";
if(isset($_GET['url']) && !empty($_GET['url'])){
    $friendlyUrl = $_GET['url'];
}
else{
    $friendlyUrl='online-learning';
}
$query = "
            SELECT * FROM sub_capitol X
            LEFT JOIN sub_sub_capitol Y ON X.id = Y.sub_capitol_id
            LEFT JOIN content C ON Y.id = C.sub_sub_capitol_id
            WHERE X.friendly_url =" ."'". $friendlyUrl ."'
            ";
$dd = mysqli_query($conn,$q);
$xx = mysqli_query($conn,$query);
?>
<div class="tabs-container vertical-tabs">
    <div class="column three-col tabs">
        <ul>
            <?php
            while($row = mysqli_fetch_assoc($dd)){
                ?>
                <a href="course-info.php?id=<?php echo $_GET['id']."&url=".$row['friendly_url']; ?>">
                    <?php $friendlyUrl = $row['friendly_url']; ?>
                    <li class="<?php echo $row['class'];?>">
                        <?php echo $row['nume'];?>
                    </li>
                </a>

            <?php } ?>
        </ul>
    </div>
</div>
<div class="tabs-content">
    <?php
        while($row = mysqli_fetch_assoc($xx)){
    ?>
        <h1><?php echo $row['nume'];?></h1>
        <p><?php echo $row['content_text']; ?></p>
        <a class="button large primary" target="_self" href=" ">
            Purchase now
        </a>
    <?php } ?>
</div>
<div class="clear"></div>
