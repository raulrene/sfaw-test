<div id="comments">
    <h1>Comments</h1>
    <div class="comment">
        <ul>
            <?php foreach ($comments as $comment){ ?>
            <li id="comm<?php echo $comment->id; ?>">
                <div class="comment hidden-wrap">
                    <div class="avatar-container">
                        <div class="bordered-image">
                            <a href="<?php echo $comment->author_link; ?>">
                                <img src="<?php echo $comment->author_img; ?>" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="comment-text">
                        <header>
                            <h5>
                                <a href="<?php echo $comment->author_link; ?>"><?php echo $comment->author; ?></a>
                            </h5>
                            <time><?php echo $comment->date_posted; ?></time>
                            <a><img src="assets/img/reply_icon.png" alt="reply" />Reply</a>
                        </header>
                        <p><?php echo $comment->comm_text; ?></p>
                    </div>
                </div>
                <ul class="replies">
                    <?php foreach($replies as $reply){ ?>
                    <li id="reply<?php echo $reply->id; ?>">
                        <div class="comment hidden-wrap">
                            <div class="avatar-container">
                                <div class="bordered-image">
                                    <a href="<?php echo $reply->author_link; ?>">
                                        <img src="<?php echo $reply->author_img; ?>" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="comment-text">
                                <header>
                                    <h5>
                                        <a href="<?php echo $reply->author_link; ?>"><?php echo $reply->author; ?></a>
                                    </h5>
                                    <time><?php echo $reply->date_posted; ?></time>
                                </header>
                                <p><?php echo $reply->comm_text; ?></p>
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="comments_form"></div>
</div>