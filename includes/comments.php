<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/13/15
 * Time: 11:23 AM
 */

?>

<div class="post-comments">
    <h1>Comments</h1>
    <div class="comments-listing">
        <ul>
            <li id="">
                <div class="comment hidden-wrap">
                    <div class="avatar-container">
                        <div class="bordered-image">
                            <a href="">
                                <img src="http://themextemplates.com/demo/academy/wp-content/uploads/2013/02/avatar_1-96x96.jpg" class="avatar" width="96" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="comment-text">
                        <div class="comment-header hidden-wrap">
                            <h3>Name bla bla date bla</h3>
                        </div>
                        <p>Phasellus id velit ante, quis elementum elit. Donec bibendum consequat massa, sit amet rhoncus sapien elementum vel. Suspendisse potenti. Donec semper dapibus nisl et pellentesque. Cras vel tempus.</p>
                    </div>
                </div>
                <ul class="children">
                    <li id="">
                        <div class="comment hidden-wrap">
                            <div class="avatar-container">
                                <div class="bordered-image">
                                    <a href="">
                                        <img src="http://themextemplates.com/demo/academy/wp-content/uploads/2013/02/avatar_1-96x96.jpg" class="avatar" width="96" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="comment-text">
                                <div class="comment-header hidden-wrap">
                                    <h3>Name bla bla date bla</h3>
                                </div>
                                <p>Phasellus id velit ante, quis elementum elit. Donec bibendum consequat massa, sit amet rhoncus sapien elementum vel. Suspendisse potenti. Donec semper dapibus nisl et pellentesque. Cras vel tempus.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
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