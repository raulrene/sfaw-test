<!DOCTYPE html>
<html>
<head>
    <link href="../assets/css/login.css" type="text/css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/16/15
 * Time: 10:52 AM
 */
include_once('../config/config-old.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST) && !empty($_POST)){
    $user_name    = "";
    $email   = "";
    $user_password    = "";
    $pass_retyped  = "";
    if( !empty($_POST['name']))
        {
            $user_name    = test_input($_POST['name']);
            if (!preg_match("/^[a-zA-Z ]*$/",$user_name)) {
                $nameErr = "Only letters and white space allowed";
            }

        }
    else echo "Name can't be empty <br>";

    if(!empty($_POST['email'])){
        $email   = test_input($_POST['email']);
        if (!preg_match("/^[a-zA-Z ]*$/",$email)) {
            $nameErr = "Only letters and white space allowed";
        }
    }else echo "email can't be empty <br>";
    if(!empty($_POST['pass'])){
        $user_password    = test_input($_POST['pass']);
        if (!preg_match("/^[a-zA-Z ]*$/",$user_password)) {
            $nameErr = "Only letters and white space allowed";
        }
    }else
        echo "password can't be empty <br>";

    if(!empty($_POST['pass_retyped'])){
        $pass_retyped  = test_input($_POST['pass_retyped']);
        if (!preg_match("/^[a-zA-Z ]*$/",$pass_retyped)) {
            $nameErr = "Only letters and white space allowed";
        }
    }else
        echo "password can't be empty <br>";

        if($user_password == $pass_retyped){

            $user_password = sha1($user_password);

            $q = "INSERT INTO users (user_name, user_password, email)
                      VALUES ('$user_name', '$user_password', '$email')
                     ";
            if($conn->query($q) == TRUE){
                echo 'Registration success';
            }else{
                echo "Error: " . $q . "<br>" . $conn->error;
            }
        }else{
            echo 'passwords must match';
        }

}else{}

?>
    <div class="loginForm">
        <h1 class="logText">Register</h1>
        <form method="post" action="">
            <div class="form_field">
                <input type="textLogin" name="name" size="20"  placeholder="Username" required />
            </div>
            <div class="form_field">
                <input type="email" name="email" size="20"  placeholder="Email" required />
            </div>
            <div class="form_field">
                <input type="password" name="pass" size="20"  placeholder="Password" required />
            </div>
            <div class="form_field">
                <input type="password" name="pass_retyped" size="20"  placeholder="Retype Password" required />
            </div>
            <input type="submit" name="submit" value="Register" class="logbutton">

        </form>
        <br>
        <a href="login.php"><h3 class="logText">Go to Login Page</h3></a>
    </div>

</body>
</html>
