<div id="comments">
    <h1>Comments</h1>
    <div class="comment">
        <ul>
            <?php 
            foreach ($q as $comment){ ?>
            <li id="comm<?php echo $comment->id; ?>">
                <div class="comment">
                    <div class="avatar-container">
                        <div class="bordered-img">
                            <a href="<?php echo $comment->author_link; ?>">
                                <img src="<?php echo base_url(). $comment->author_img; ?>" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="comment-text">
                        <header>
                            <h5>
                                <a href="<?php echo $comment->author_link; ?>"><?php echo $comment->author; ?></a>
                            </h5>
                            <time><?php echo $comment->date_posted; ?></time>
                            <a><img src="<?php echo base_url(); ?>assets/img/reply_icon.png" alt="reply" />Reply</a>
                            <div class="clear"></div>
                        </header>
                        <p><?php echo $comment->comm_text; ?></p>
                    </div>
                </div>
                <ol class="replies">
                    <?php foreach($s as $reply){
                        if($reply->comment_id == $comment->id){?>
                    <li id="reply<?php echo $reply->id; ?>">
                        <div class="comment">
                            <div class="avatar-container">
                                <div class="bordered-img">
                                    <a href="<?php echo $reply->author_link; ?>">
                                        <img src="<?php echo base_url() . $reply->author_img; ?>" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="comment-text">
                                <header>
                                    <h5>
                                        <a href="<?php echo $reply->author_link; ?>"><?php echo $reply->author; ?></a>
                                    </h5>
                                    <time><?php echo $reply->date_posted; ?></time>
                                    <div class="clear"></div>
                                </header>
                                <p><?php echo $reply->comm_text; ?></p>
                            </div>
                        </div>
                    </li>
                    <?php } } ?>
                </ol>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="comments_form">
        <form method="post" action="">
            <div class="form_field">
                <input id="author" type="text" placeholder="Name" size="30" value="" name="author">
            </div>
            <div class="form_field">
                <input id="email" type="text" placeholder="Email" size="30" value="" name="email">
            </div>
            <div class="form_field">
                <textarea id="comment" placeholder="Comment" rows="8" cols="45" name="comment"></textarea>
            </div>
            <p class="button large primary">
                <input type="submit" value="Add Comment" name="submit" />
            </p>
        </form>
    </div>
</div>