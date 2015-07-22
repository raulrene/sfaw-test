
	<div class="comments_wrap">
        <h1 class="titlu_comments">Comments</h1>

        <div class="comments_list">
            <ul>
                <?php

                if (isset($data) && !empty($data)) {

                foreach ($data as $row){
                ?>
                <li>
                    <div class="comments">
                        <div class="img_wrap"><img src="<?php echo base_url();?>assets/img/<?php echo $row->img;?>"/></div>
						<div class="comments_author"><a href="#" ><?php echo $row->name;?></a></div>
						<div class="comments_date"><span><?php echo $row->date;?></span></div>
						<div class="reply_link"><a href="#"><img src="<?php echo base_url();?>assets/img/reply_icon.png" /><span>Reply</span></a></div>
						<div class="comments_text"><p><?php echo $row->comment;?></p></div>
                    </div>
                        <ul class="replies_list">
                            <?php
                            foreach ($data1 as $row1){
                            if ($row1->comment_id == $row->id){



                            ?>
                            <li>
								<div class="replies">
									<div class="img_wrap"><img src="<?php echo base_url();?>assets/img/<?php echo $row1->img;?>"/></div>
									<div class="comments_author"><a href="#" ><?php echo $row1->name;?></a></div>
									<div class="reply_date"><span><?php echo $row1->date;?></span></div>
									<div class="replies_text"><p><?php echo $row1->reply;?>
							</li>
                            <?php } }?>
                        </ul>

                </li>
                            <?php } }?>
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