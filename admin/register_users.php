<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
	</head>
	<body>
<?php
include("../config/config_old.php");

$username = $email = $password = $password2 = '';
$nameErr = $emailErr = $passErr = $pass2Err = '';
if(isset($_POST)){
    function clean_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if(empty($_POST['username'])){
        echo 'please fill in name filed!' . '<br />';
    }else{
        $name    = clean_data($_POST['username']);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed!";
        }
    }
    if(empty($_POST['email'])){
        echo 'email is required !' . '<br />';
    }else{
        $email   = clean_data($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format!";
        }
    }
    
    if(empty($_POST['password'])){
	echo 'password is required' . '<br />';
		}else{
        $password    = clean_data($_POST['password']);
        if (!preg_match("/^[a-zA-Z ]*$/",$password)) {
            $passErr = "Only letters and white space allowed!";
        }
    }
    if(empty($_POST['password2'])){
        echo 'password retype is required' . '<br />';
		}else{
        $password2    = clean_data($_POST['password2']);
        if (!preg_match("/^[a-zA-Z ]*$/",$password2)) {
            $pass2Err = "Only letters and white space allowed!";
        }
    }
    if($password == $password2){
        $password = sha1($password);
        $q = "INSERT INTO users (username, password, email)
		VALUES ('$username', '$password', '$email')
		";
        if($conn->query($q) == TRUE){
            $msg = 'added success now please..';
			}else{
            echo "Error: " . $q . "<br>" . $conn->error;
        }
		}else{
        echo 'passwords must match';
    }
}
?>