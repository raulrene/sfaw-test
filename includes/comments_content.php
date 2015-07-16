<?php

$obj = new Comments();
$data = $obj->getAll();
$obj1 = new Replies();
$data1 = $obj1->getAllReplies();

?>
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
                        <div class="img_wrap"><img src="assets/img/<?php echo $row->img;?>"/></div>
						<div class="comments_author"><a href="#" ><?php echo $row->name;?></a></div>
						<div class="comments_date"><span><?php echo $row->date;?></span></div>
						<div class="reply_link"><a href="#"><img src="assets/img/reply_icon.png" /><span>Reply</span></a></div>
						<div class="comments_text"><p><?php echo $row->comment;?></p></div>
                    </div>
                        <ul class="replies_list">
                            <?php
                            foreach ($data1 as $row1){
                            if ($row1->comment_id == $row->id){



                            ?>
                            <li>
								<div class="replies">
									<div class="img_wrap"><img src="assets/img/<?php echo $row1->img;?>"/></div>
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

		<div class="formular_comments">
			<form name="formular_comm" action="#" method="post">
				<input class="input" type="text" name="name" value="Name"/><br />
				<input class="input" type="text" name="email"value="Email"/><br />
				<input class="input_area" type="text" name="comment" value="Comment"/><br />
				<input type="submit" value="Add Comment" class="submit"/>
			</form>
		</div>


    </div>