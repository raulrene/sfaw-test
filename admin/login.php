
<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="../assets/css/index.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/slider.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/main-content.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/footer.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div style="background: url('../assets/img/bck.jpg');width:100%;height:700px;">
        <div style="border: 1px dotted #000;width:230px;padding:30px;position:relative;top:100px;left:300px;">
            <h1>Sign in</h1>
            <br />
            <form action="" method="post">
                <div class="form_field">
                    <input type="text" name="name" size="20"  placeholder="Username" required />
                </div>
                <div class="form_field">
                    <input type="password" name="pass" size="20"  placeholder="Password" required />
                </div>
                <br /><br />
                <input type="submit" name="submit" value="GO" class="fg-button teal"/><br />
                <input type="checkbox" name="keep" value="1"/>&nbspRemember login

            </form>
        </div>
    </div>
</body>

</html>

<?php
include_once '../connection.php';
if(isset($_POST)){
    if(!empty($_POST['name']) && !empty($_POST['pass'])){
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $keep = $_POST['keep'];
        function clean_data($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $name = clean_data($name);
        $pass = clean_data($pass);
        $pass = sha1($pass);

        $q = "SELECT * FROM users WHERE name = '$name' AND password = '$pass'";
        $result = $conn->query($q);

        if(mysqli_num_rows($conn,$result) == 1){
             echo 'succesfully logged in';
             session_start();
             $info = array(
                 'username'     => $name,
                 'loggedin'     => TRUE,
                 'loginDate'    => time(),
                 'ip'           => $_SERVER[ 'REMOTE_ADDR' ],
                 'via'          => 'form',
                 'keepLoggedIn' => $keep
             );
             $_SESSION['LOGIN'] = $info;
            echo'<pre>';
            print_r($_SESSION['LOGIN']);
            if($keep == 1){
                $cookie = setcookie( 'logindata', '1' . base64_encode( serialize($info) ), time() + 2592000, '/' );
            }else{
                setcookie('logindata', '', time() - 36000, '/' );
            }
        }else{
            echo 'Password and|or username do not match';
        }
    }else{
        echo 'please fill in all fields';
    }
}
?>