<! DOCTYPE html>
<html>
<head>
    <?php $this->load->view('includes/head.php'); ?>
</head>
<body>
<?php $this->load->view('includes/header.php'); ?>
<div class="site-wrap">
    <div class="featured-content">
        <div class="ech_col">
            <?php $this->load->view('includes/each_course.php'); ?>
        </div>
        <div class="course_decription">
            <div class="description_title">
                <h4>Course Description</h4>
            </div>
            <div class="description_content">
                <h4>Course Overview</h4>
                <p><?php echo $c->course_overview; ?></p>
                <h4>About the Author</h4>
                <p><?php echo $c->about_author; ?></p>
                <a class="button large primary" target="_self" href=" ">
                    Take This Course | <?php echo $c->course_price; ?>
                </a>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="tabs">
            <ul>
                <?php 
                    if(isset($l) && !empty($l)){
                    foreach($l as $row){ ?>
                        <li class="<?php echo $row->class; ?>" id="<?php echo $row->id_html; ?>">
                            <a href="<?php echo $this->uri->segment(3).'/'.$row->friendly_url; ?>">
                                <?php echo $row->links; ?>
                                </a>
                            </li>

                    <?php } } ?>
            </ul>
        </div>
        <?php 
            if(isset($j) && !empty($j)){
            foreach ($j as $row) {
           
        ?>
        <div class="tabs_content">

            <h1><?php echo $row->sub_sub_ch_name; ?></h1>
            <p><b><?php echo $row->text_1; ?></b></p>
            <p><?php echo $row->text_2; ?></p>
            <p><?php echo $row->text_3; ?> </p>
            <a class="button large primary" target="_self" href=" ">
                <img src="<?php echo base_url(); ?>assets/img/image_66.png" alt="" />
                Purchase now
            </a>

        </div>
        <?php } } ?>
        <div class="clear"></div>
    </div>
    <?php $this->load->view('includes/footer.php'); ?>
</div>
</body>
</html>