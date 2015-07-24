<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo base_url(); ?>assets/css/login.css" type="text/css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
</head>
<body class="formBG">
<div class="loginForm">
    <h1 class="logText">Login</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('verifylogin'); ?>
    <form method="post" action="">
        <div class="form_field">
            <input type="textLogin" name="user" size="20"  placeholder="Username" required />
        </div>
        <div class="form_field">
            <input type="password" name="pass" size="20"  placeholder="Password" required />
        </div>
        <input type="checkbox" name="keep" id="kp" value="1" /> <label for="kp">Keep me logged in</label><br />
        <input type="submit" name="login" value="Login" class="logbutton">
    </form>
</div>

</body>
</html>