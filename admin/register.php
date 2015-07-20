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

if(isset($_POST)){
    if( !empty($_POST['name']) &&
        !empty($_POST['email']) &&
        !empty($_POST['pass']) &&
        !empty($_POST['pass_retyped']) ){
        function clean_data($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $user_name    = clean_data($_POST['name']);
        $email   = clean_data($_POST['email']);
        $user_password    = clean_data($_POST['pass']);
        $pass_retyped  = clean_data($_POST['pass_retyped']);
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
    }else{
        echo 'please fill in fields !';
    }
}

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
