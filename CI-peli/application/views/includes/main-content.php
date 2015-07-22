<div class="sixcol column">
    <h1>Top Experts</h1>
    <div class="experts">
        <div class="expert-preview">
            <div class="expert-meta">
                <div class="expert-image bordered-image">
                    <img src="<?php echo base_url(); ?>assets/img/expAvatar.jpg" class="avatar" width="96" alt="">
                </div>

                <div class="user-links">
                    <a href="http://twitter.com/" class="twitter" target="_blank" title="Twitter"></a>
                    <a href="http://www.facebook.com/" class="facebook" target="_blank" title="Facebook"></a>
                    <a href="http://www.tumblr.com/" class="tumblr" target="_blank" title="Tumblr"></a>
                    <a href="http://vimeo.com/" class="vimeo" target="_blank" title="Vimeo"></a>
                </div>
            </div>

            <div class="expert-text">
                <h3>Steven Granger</h3>
                <div class="clear"></div>
                <span class="expert-signature">Project Manager</span>
                <p>Cras a neque diam. Aenean dapibus accumsan velit eget imperdiet. Quisque sapien neque, fermentum ac pharetra ac, iaculis a elit. Morbi tincidunt, lectus et dignissim pharetra, elit leo lacinia purus, eu porta. Aenean adipiscing, sed lacinia sapien tincidunt.</p>
            </div>
        </div>
        <div class="expert-preview">
            <div class="expert-meta">
                <div class="expert-image bordered-image">
                    <img src="<?php echo base_url(); ?>assets/img/mb.jpg" class="avatar" width="96" alt="">
                </div>

                <div class="user-links">
                    <a href="http://twitter.com/" class="twitter" target="_blank" title="Twitter"></a>
                    <a href="http://www.facebook.com/" class="facebook" target="_blank" title="Facebook"></a>
                    <a href="http://www.tumblr.com/" class="tumblr" target="_blank" title="Tumblr"></a>
                    <a href="http://vimeo.com/" class="vimeo" target="_blank" title="Vimeo"></a>
                </div>
            </div>

            <div class="expert-text">
                <h3>Mark Blackwood</h3>
                <div class="clear"></div>
                <span class="expert-signature">Software Engineer</span>
                <p>Fusce vehicula tortor quis odio interdum auctor. Ut iaculis eleifend pharetra. Nulla rutrum, magna non pulvinar tincidunt, neque dui eleifend lacus, fringilla cursus justo augue non nulla. Vivamus sem nunc, tincidunt sit cursus, porttitor pharetra.</p>
            </div>
        </div>
    </div>
</div>

<div class="sixcol column last">
    <h1><?php echo $t[0]->title; ?></h1>
    <div class="testimonials">
        <?php
        if(isset($t) && !empty($t)){
            foreach($t as $row){ ?>
                <article class="testimonial">
                    <div class="testimonial-image">
                        <div class="bubble-image">
                            <img width="264" height="264" src="<?php echo base_url().$row->img;  ?>" class="attachment-small wp-post-image" alt="avatar">
                            <div class="substrate">
                                <img src="http://themextemplates.com/demo/academy/wp-content/themes/academy/images/bgs/testimonial_bg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p><?php echo $row->text; ?></p>
                        <h5><?php echo $row->name; ?></h5>
                    </div>
                </article>
        <?php } } ?>

         <div class="clear"></div>
    </div>

</div>
<div class="clear"></div>