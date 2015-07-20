<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/18/15
 * Time: 11:38 AM
 */

# includ fisierul cu functii
require_once 'loginFunctions.php';

// verific daca a fost solicitat logout
if( isset($_GET['action']) && $_GET['action'] == 'logout' ) {
    markLoggedOut();
}

// verific daca e deja logat
if( getAuthCode() == 0 ) {
    // sunt deja logat
    header('Location: personalPage.php');

    // opresc executia scriptului curent
    exit;
}

// verific daca a fost facut submit
if( isset($_POST['login']) ) {

    // validez datele
    if( empty($_POST['user']) || empty($_POST['pass']) ) {
        // setez un mesaj de eroare
        $error = getError(ERR_INVALID_DATA);

    } else {

        // caut user-ul si verific parola
        if( checkUserPass($_POST['user'], $_POST['pass'],$conn) == null ) {
            // setez un mesaj de eroare
            $error = getError(ERR_LOGIN_FAILED);
        } else {
            // daca s-a ajuns aici inseamna ca se poate loga
            markLoggedIn($conn);
        }
    }

}

// verific daca a fost vreo eroare venita de la o alta pagina
if( isset($_GET['error']) ) {
    $error = getError($_GET['error']);
}

?>
<!DOCTYPE html>
<html>
<head>
    <link href="../assets/css/login.css" type="text/css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
</head>
<body>
    <div class="loginForm">
        <h1 class="logText">Login</h1>
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