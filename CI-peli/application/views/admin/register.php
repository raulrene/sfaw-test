<!DOCTYPE html>
<html>
<head>
 <?php $this->load->view('includes/head'); ?>
</head>
<body>
    <?php $this->load->view('includes/header.php'); ?>
    <?php $this->load->view('includes/sub_header.php'); ?>
    <div class="login_form_container">
        <div class="login_form">
            <h1>Register</h1>
            <br />
            <form action="<?php echo base_url(); ?>register" method="post">
                <div class="form_field">
                    <input type="text" name="name" size="20"  placeholder="Username" required />
                </div>
                <?php echo form_error('name','<div class="error">', '</div>'); ?>
                <div class="form_field">
                    <input type="email" name="email" size="20"  placeholder="Email" required />
                </div>
                <?php echo form_error('email','<div class="error">', '</div>'); ?>
                <div class="form_field">
                    <input type="text" name="phone" size="20"  placeholder="Phone" required />
                </div>
                <?php echo form_error('phone','<div class="error">', '</div>'); ?>
                <div class="form_field">
                    <input type="password" name="pass" size="20"  placeholder="Password" required />
                </div>
                <?php echo form_error('pass','<div class="error">', '</div>'); ?>
                <div class="form_field">
                    <input type="password" name="pass_2" size="20"  placeholder="Retype Password" required />
                </div>
                <?php echo form_error('pass_2','<div class="error">', '</div>'); ?>
                <br /><br />
                <input type="submit" name="submit" value="Push" class="fg-button teal"/>
            </form>
        </div>
    </div>  
</body>
</html>



