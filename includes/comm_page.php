<div id="comments">
    <h1>Comments</h1>
    <div class="comment">
        <ul>
            <?php foreach ($comments as $comment){ ?>
            <li>
                <div class="comment hidden-wrap">
                    <div class="avatar-container">
                        <div class="bordered-image">
                            <a href="">
                                <img src="" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="comment-text">
                        <header>
                            <h5>
                                <a href=""></a>
                            </h5>
                            <time></time>
                            <a></a>
                        </header>
                        <p></p>
                    </div>
                </div>
                <ul class="replies">
                    <?php foreach($replies as $reply){ ?>
                    <li>
                        <div class="comment hidden-wrap">
                            <div class="avatar-container">
                                <div class="bordered-image">
                                    <a href="">
                                        <img src="" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="comment-text"></div>
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