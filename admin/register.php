<?php
include_once '../connection.php';
$name = $email = $phone = $pass = $pass_2 = '';
$nameErr = $emailErr = $phoneErr = $passErr = $pass2Err = '';
if(isset($_POST)){

    function clean_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(empty($_POST['name'])){
        echo 'please fill in name filed!';
    }else{
        $name    = clean_data($_POST['name']);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed!";
        }
    }

    if(empty($_POST['email'])){
        echo 'email is required !';
    }else{
        $email   = clean_data($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format!";
        }
    }

    if(empty($_POST['phone'])){
        echo 'phone is required !';
    }else{
        $phone   = clean_data($_POST['phone']);
        if(!is_numeric($_POST["phone"])){
            $phoneErr = "numbers only please!";
        }
    }

    if(empty($_POST['pass'])){
        echo 'password is required';
    }else{
        $pass    = clean_data($_POST['pass']);
        if (!preg_match("/^[a-zA-Z ]*$/",$pass)) {
            $passErr = "Only letters and white space allowed!";
        }
    }

    if(empty($_POST['pass_2'])){
        echo 'password retype is required';
    }else{
        $pass_2    = clean_data($_POST['pass_2']);
        if (!preg_match("/^[a-zA-Z ]*$/",$pass_2)) {
            $pass2Err = "Only letters and white space allowed!";
        }
    }

    if($pass == $pass_2){
        $pass = sha1($pass);

        $q = "INSERT INTO users (name, password, email, phone)
              VALUES ('$name', '$pass', '$email', '$phone')
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

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Register Form</title>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="../assets/css/index.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/slider.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/main-content.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/footer.css" type="text/css" rel="stylesheet">
</head>
<body>

<div style="background: url('../assets/img/bck.jpg');width:100%;height:700px">
    <div style="border: 1px dotted #000;width:230px;padding:30px;position:relative;top:100px;left:300px">
        <h1>Register</h1>
        <br />
        <form action="" method="post">
            <div class="form_field">
                <input type="text" name="name" size="20"  placeholder="Username" required /><span><?php echo $nameErr; ?></span>
            </div>
            <div class="form_field">
                <input type="email" name="email" size="20"  placeholder="Email" required /><span><?php echo $emailErr; ?></span>
            </div>
            <div class="form_field">
                <input type="text" name="phone" size="20"  placeholder="Phone" required /><span><?php echo $phoneErr; ?></span>
            </div>
            <div class="form_field">
                <input type="password" name="pass" size="20"  placeholder="Password" required /><span><?php echo $passErr; ?></span>
            </div>
            <div class="form_field">
                <input type="password" name="pass_2" size="20"  placeholder="Retype Password" required /><span><?php echo $pass2Err; ?></span>
            </div>
            <br /><br />
            <input type="submit" name="submit" value="Push" class="fg-button teal"/>
        </form>
    </div>
</div>

</body>

</html>



