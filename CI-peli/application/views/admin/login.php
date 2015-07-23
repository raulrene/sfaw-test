<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('includes/head') ?>
</head>
<body>
    <?php $this->load->view('includes/header.php'); ?>
    <?php $this->load->view('includes/sub_header.php'); ?>
    <div class="login_form_container">
        <div class = "login_form">
            <h1>Sign in</h1>
            <br />
            <form action="<?php echo base_url(); ?>login" method="post">
                <div class="form_field">
                    <input type="text" name="name" size="20"  placeholder="Username" required />
                </div>
                <?php echo form_error('name','<div class="error">', '</div>'); ?>
                <div class="form_field">
                    <input type="password" name="pass" size="20"  placeholder="Password" required />
                </div>
                <?php echo form_error('pass','<div class="error">', '</div>'); ?>
                <br /><br />
                <input type="checkbox" name="keep" value="1"/>&nbspRemember login<br /> 
                <input type="submit" name="submit" value="GO" class="button large"/><br />    
            </form>
            <br />
            not registered ?<a href="<?php echo base_url(); ?>welcome/register" class="fg-button teal">Do it</a>
        </div>
    </div>
</body>
</html>

