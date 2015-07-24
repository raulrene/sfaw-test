<! DOCTYPE html>
<html>
<head>
    <?php $this->load->view('includes/head'); ?>
</head>
<body>
    <?php $this->load->view('includes/header.php'); ?>
    <?php $this->load->view('includes/sub_header.php'); ?>
    <div class="row">
        <p class="resp_par">write your changes</p>
        <?php 
            if($table == 'Chapters'){ ?>
                <div class = "admin_forms">
                    <form method="post" action="<?php echo base_url(); ?>do_update" id="">
                        <input type="hidden" name="table" value="<?php echo $table ?>" />
                        <input type="hidden" name="id" value="<?php echo $result->id; ?>" />
                        <div class="form_field">
                            <input type="text" name="ch_name" size="18"  value="<?php echo $result->chapter_name; ?>" required />
                        </div>
                        <div class="form_field">
                            <input type="text" name="url" size="18"  value="<?php echo $result->url; ?>" required />
                        </div>
                        <br />
                        <input type="submit" name="update" value="update" class="button large primary" />
                    </form>
                </div>
            <?php }elseif($table == 'sub_chapters'){ ?>
                <div class = "admin_forms">
                    <form method="post" action="edit.php" id="">
                        <input type="hidden" name="table" value="<?php echo $table; ?>" />
                        <input type="hidden" name="id" value="<?php echo $result->id; ?>" />
                        <div class="form_field">
                            <input type="text" name="chapter_id" size="18"  value="<?php echo $result->chapter_id; ?>" required />
                        </div>
                        <div class="form_field">
                            <input type="text" name="links" size="18"  value="<?php echo $result->links; ?>" required />
                        </div>
                        <br />
                        <div class="form_field">
                            <input type="text" name="friendly_url" size="18"  value="<?php echo $result->friendly_url; ?>" required />
                        </div>
                        <br />
                        <input type="submit" name="update" value="update" class="button large primary" />
                    </form>
                </div>
        <?php }elseif($table == 'sub_sub_ch'){ ?>
            <div class = "admin_forms">
                <form method="post" action="<?php echo base_url() ?>operation" id="">
                    <input type="hidden" name="table" value="<?php echo $table; ?>" />
                    <input type="hidden" name="id" value="<?php echo $result->id; ?>" />
                    <div class="form_field">
                        <input type="text" name="sub_chapter_id" size="18"  value="<?php echo $result->sub_ch_id; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="sub_sub_chapter_name" size="18"  value="<?php echo $result->sub_sub_ch_name; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="order" size="18"  value="<?php echo $result->ord; ?>" required />
                    </div>
                    <br />
                    <input type="submit" name="submit" value="add" class="button large primary"/>
                </form>
            </div>
        <?php }elseif($table == 'content'){ ?>   
            <div class = "admin_forms">
                <form method="post" action="<?php echo base_url() ?>operation" id="">
                    <input type="hidden" name="table" value="<?php echo $table; ?>" />
                    <input type="hidden" name="id" value="<?php echo $result->id; ?>" />
                    <div class="form_field">
                        <input type="text" name="sub_sub_chapter_id" size="18"  value="<?php echo $result->sub_sub_ch_id; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="text_1" size="18"  value="<?php echo $result->text_1; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="text_2" size="18"  value="<?php echo $result->text_2; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="text_3" size="18"  value="<?php echo $result->text_3; ?>" required />
                    </div>
                    <br />
                    <input type="submit" name="submit" value="add" class="button large primary"/>
                </form>
            </div> 
         <?php }elseif($table == 'comments'){ ?>
             <div class = "admin_forms">
                <form method="post" action="<?php echo base_url() ?>operation" id="">
                    <input type="hidden" name="table" value="<?php echo $table; ?>" />
                    <input type="hidden" name="id" value="<?php echo $result->id; ?>" />
                    <div class="form_field">
                        <input type="text" name="author" size="18"  value="<?php echo $result->author; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="author_img" size="18"  value="<?php echo $result->author_img; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="author_link" size="18"  value="<?php echo $result->author_link; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="date_posted" size="18"  value="<?php echo $result->date_posted; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="comm_text" size="18"  value="<?php echo $result->comm_text; ?>" required />
                    </div>
                    <br />
                    <input type="submit" name="submit" value="add" class="button large primary"/>
                </form>
            </div>
        <?php }elseif($table == 'replies'){ ?>
            <div class = "admin_forms">
                <form method="post" action="<?php echo base_url() ?>operation" id="">
                    <input type="hidden" name="table" value="<?php echo $table; ?>" />
                    <input type="hidden" name="id" value="<?php echo $result->id; ?>" />
                    <div class="form_field">
                        <input type="text" name="author" size="18"  value="<?php echo $result->comments_id; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="author_id" size="18"  value="<?php echo $result->author; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="author_img" size="18"  value="<?php echo $result->author_img; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="author_link" size="18"  value="<?php echo $result->author_link; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="date_posted" size="18"  value="<?php echo $result->date_posted; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="comm_text" size="18"  value="<?php echo $result->comm_text; ?>" required />
                    </div>
                    <br />
                    <input type="submit" name="submit" value="add" class="button large primary"/>
                </form>
            </div>
        <?php }elseif($table == 'courses'){ ?>    
            <div class = "admin_forms">
                <form method="post" action="<?php echo base_url() ?>operation" id="">
                    <input type="hidden" name="table" value="<?php echo $table; ?>" />
                    <input type="hidden" name="id" value="<?php echo $result->id; ?>" />
                    <div class="form_field">
                    <input type="text" name="name" size="18"  value="<?php echo $result->course_name; ?>" required />
                    </div>
                    <div class="form_field">
                        <input  type="text" name="price" size="18"  value="<?php echo $result->course_price; ?>" required />
                    </div>
                    <div class="form_field">
                        <input  type="text" name="img" size="18"  value="<?php echo $result->course_img; ?>" required />
                    </div>
                    <div class="form_field">
                        <input  type="text" name="author" size="18"  value="<?php echo $result->course_author; ?>" required />
                    </div>
                    <div class="form_field">
                        <input  type="text" name="user" size="18"  value="<?php echo $result->course_user; ?>" required />
                    </div>
                    <div class="form_field">
                        <input  type="text" name="stars" size="18"  value="<?php echo $result->course_stars; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="alt" size="18"  value="<?php echo $result->img_alt; ?>" required />
                    </div>
                        <br />
                    <input type="submit" name="submit" value="add" class="button large primary"/>
                </form>
            </div> 
        <?php } ?>       
    </div>
</body> 
</html>

