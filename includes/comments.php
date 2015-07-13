<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/13/15
 * Time: 11:23 AM
 */

include('config/config.php');
include('classes/Comments.php');
include('classes/Replies.php');

$obj1 = new Comments();
$obj2 = new Replies();
$data1 = $obj1->getComments();
$data2 = $obj2->getReplies();

?>

<div class="post-comments">
    <h1>Comments</h1>
    <div class="comments-listing">
        <ul>
            <?php
            if(isset($data1) && !empty($data1)){
            foreach($data1 as $comm){
            ?>
            <li id="">
                <div class="comment hidden-wrap">
                    <div class="avatar-container">
                        <div class="bordered-image">
                            <a href="">
                                <img alt="aaa" src="<?php echo $comm->img;?>" />
                            </a>
                        </div>
                    </div>
                    <div class="comment-text">
                        <div class="comment-header hidden-wrap">
                            <h3><?php echo $comm->author ." ". $comm->date;?></h3>
                        </div>
                        <p><?php echo $comm->text;?></p>
                    </div>
                </div>
                <ul class="children">
                    <?php
                    foreach($data2 as $reply){

                        if($reply->id_parent == $comm->id){
                    ?>

                    <li id="">
                        <div class="comment hidden-wrap">
                            <div class="avatar-container">
                                <div class="bordered-image">
                                    <a href="">
                                        <img alt="" src="<?php echo $reply->img;?>">
                                    </a>
                                </div>
                            </div>
                            <div class="comment-text">
                                <div class="comment-header hidden-wrap">
                                    <h3><?php echo $reply->author ." ". $reply->date;?></h3>
                                </div>
                                <p><?php echo $reply->text;?></p>
                            </div>
                        </div>
                    </li>
                     <?php } }?>
                </ul>
            </li>
            <?php } }?>
        </ul>
    </div>

    <div class="comments-form eightcol column last">
        <form method="post" action="">
            <div class="form-field">
                <input id="author" type="text" placeholder="Name" size="30" value="" name="author">
            </div>
            <div class="form-field">
                <input id="email" type="text" placeholder="Email" size="30" value="" name="email">
            </div>
            <div class="form-field">
                <textarea id="comment" placeholder="Comment" rows="8" cols="45" name="comment"></textarea>
            </div>
            <p class="medium button">
                <input type="submit" value="Add Comment" name="submit" />
            </p>
        </form>
    </div>
</div>