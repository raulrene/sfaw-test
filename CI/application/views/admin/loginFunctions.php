<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/18/15
 * Time: 11:39 AM
 */
include_once('../config/config-old.php');
include_once('../classes/User.php');



// coduri de eroare
define( 'ERR_UNKNOWN', 0 );
define( 'ERR_MUST_LOGIN', 100 );
define( 'ERR_INVALID_DATA', 200 );
define( 'ERR_LOGIN_FAILED', 300 );
define( 'ERR_TIMEOUT', 400 );
define( 'ERR_LOGGED_OUT', 500 );


// mesaje de eroare
$erori = array(
    ERR_UNKNOWN      => 'Eroare necunoscuta',
    ERR_MUST_LOGIN   => 'Pentru a accesa aceasta pagina trebuie sa fiti autentificat',
    ERR_INVALID_DATA => 'Datele introduse nu sunt valide',
    ERR_LOGIN_FAILED => 'Autentificarea nu se poate realiza',
    ERR_TIMEOUT      => 'Ati fost inactiv prea mult timp si ati fost deconectat',
    ERR_LOGGED_OUT   => 'Ati fost deconectat cu succes'
);


// dupa cat timp de inactivitate sa fie delogat (secunde)
define( 'LOGIN_TIMEOUT', 600 );


# deschid o sesiune
session_start();


# definesc o functie ajutatoare care face redirect la pagina de login
function checkLogin() {
    // daca nu e logat il redirectionez la pagina de login
    if(getAuthCode() != 0) {
        // nu este autentificat, fac redirect specificand codul erorii
        header('Location: login.php?error=' . ERR_MUST_LOGIN);

        // opresc executia scriptului curent
        exit;
    }
}


# definesc functia care verifica daca utilizatorul este autentificat
function getAuthCode() {
    $error = 0;

    // mai intai verific daca in sesiunea curenta utilizatorul e logat
    if( isset($_SESSION[ 'LOGIN' ]) ) {
        $data = $_SESSION[ 'LOGIN' ];

        // exista date pe sesiune, le verific
        if( empty($data) || empty($data['loggedIn']) ) {
            // datele sunt goale
            $error = ERR_MUST_LOGIN;

        } else {
            // verific ip-ul
            if( $data['ip'] != $_SERVER[ 'REMOTE_ADDR' ] ) {
                // ip-ul e diferit, probabil e un atac
                // in orice caz, marchez ca nelogat
                $error = ERR_MUST_LOGIN;

            } else {
                // daca nu este marcat ca 'pastreaza-ma logat' verific timpul
                // ultimului acces si il deloghez daca a fost inactiv prea mult
                $elapsed = time() - $data['lastAccess'];

                if( empty($data['keepLoggedIn']) && $elapsed > LOGIN_TIMEOUT ) {
                    // il deloghez cu un mesaj de eroare
                    markLoggedOut(ERR_TIMEOUT);
                }

                // daca am ajuns aici inseamna ca este logat
                $error = 0;

            }
        }

    } else if( isset($_COOKIE['logindata']) ) {

        // nu exista date pe sesiune, dar exista un cookie
        // din textul cookie-ului elimin primul caracter de control
        // apoi decodific folosind algoritmul base64
        $formaSerializata = base64_decode(substr($_COOKIE['logindata'], 1));

        if( $formaSerializata === false ) {
            // continutul cookie-ului e invalid
            $error = ERR_MUST_LOGIN;

        } else {
            // reconstruiesc structura de date plecand de la forma serializata a variabilei
            $data = unserialize( $formaSerializata );

            if( empty($data) || !is_array($data)) {
                // datele sunt invalide
                $error = ERR_MUST_LOGIN;

            } else if( $data['ip'] != $_SERVER[ 'REMOTE_ADDR' ] ) {
                // ip-ul e diferit, probabil e un atac
                // in orice caz, marchez ca nelogat
                $error = ERR_MUST_LOGIN;

            } else {
                // daca am ajuns aici inseamna ca este logat
                $error = 0;

                // marchez ca este logat prin cookie
                $data['via'] = 'cookie';

                // pun datele pe sesiune
                $_SESSION[ 'LOGIN' ] = $data;
            }
        }

    } else {
        // nu sunt logat, marchez sesiunea ca fiind not-logged-in
        $_SESSION[ 'LOGIN' ] = array('loggedIn' => false);
        $error = ERR_MUST_LOGIN;
    }

    // daca este logat, actualizez data ultimei accesari
    if( $error == 0 ) {
        $_SESSION[ 'LOGIN' ]['lastAccess'] = time();
    }

    return $error;
}


# definesc functia care marcheaza utilizatorul ca autentificat
function markLoggedIn($conn) {
    $username = $_POST['user']; // user-ul din formular
    $keep = $_POST['keep']; // checkbox-ul din formular
    $ip = $_SERVER[ 'REMOTE_ADDR' ]; // ip-ul vizitatorului
    $via = 'form'; // s-a logat prin formular, nu prin cookie

    // creez o structura de date
    $data = array();
    $data[ 'loggedIn' ] = true;
    $data[ 'username' ] = $username;
    $data[ 'loginDate' ] = time();
    $data[ 'lastAccess' ] = time();
    $data[ 'keepLoggedIn' ] = $keep;
    $data[ 'ip' ] = $ip;
    $data[ 'via' ] = $via;

    // pastrez in sesiune
    $_SESSION[ 'LOGIN' ] = $data;

    // daca trebuie sa tin minte loginul, creez un cookie
    if( $keep == 1 ) {
        /* setez un cookie ce contine structura creata mai sus si care
         * va expira in 30 de zile; structura de date este serializata
         * adica transformata intr-un format ce poate fi stocat ca text
         * dupa serializare, textul returnat este encodat cu algoritmul
         * base64 la care se adauga caracterul '1' pentru a ingreuna
         * decodificarea continutului */
        setcookie( 'logindata', '1' . base64_encode( serialize( $data ) ), time() + 2592000, '/' );

    } else {
        // sterg cookie-ul prin setarea valabilitatii la o data din trecut
        setcookie( 'logindata', "", time() - 36000, '/' );
    }

    echo checkRole($username,$conn);
    // acum ca am salvat datele pe sesiune (si posibil in cookies), redirectionez
    if(checkRole($username,$conn) == 'admin'){
        header('Location: insert.php');
    }else
        header('Location: personalPage.php');
    // opresc executia scriptului curent
    exit;
}


# definesc functia care marcheaza utilizatorul ca deconectat
# aceasta functie are un parametru implicit
function markLoggedOut($errCode = ERR_LOGGED_OUT) {
    // sterg datele de pe sesiune
    $_SESSION[ 'LOGIN' ] = null;
    unset( $_SESSION[ 'LOGIN' ] );

    // sterg cookie-ul prin setarea valabilitatii la o data din trecut
    setcookie( 'logindata', "", time() - 36000, '/' );

    // redirectionez la pagina de login
    header('Location: login.php?error=' . $errCode);

    // opresc executia scriptului curent
    exit;
}


# definesc functia care preia mesajul unei erori
function getError($errNo) {
    // voi folosi o variabila definita in afara functiei
    global $erori;

    // intrucat datele vin de la vizitatori, validez numarul
    if( !is_numeric($errNo) ) {
        return $erori[0];
    }

    // verific daca este un cod valid de eroare
    if( !isset($erori[ $errNo ]) ) {
        return $erori[0];
    }

    // totul in regula, transmit mesajul de eroare
    return $erori[ $errNo ];
}


# definesc functia de cautare a unui user
function checkUserPass($user, $pass,$conn) {
    $pass = sha1($pass);

    $q = "SELECT ".'user_password'." FROM ".'users'." WHERE ".'user_name'." = '".$user."'";
    $res = mysqli_query($conn,$q);
    $gotPass="";
    foreach($res as $row){
        //echo $row['user_password'];
        $gotPass = $row['user_password'];
    }

    //$gotPass = sha1($gotPass);
    if( $pass == $gotPass) {
        return $user;
    } else {
        return null;

    }
}

function checkRole($user,$conn){
    $q = "SELECT ".'role'." FROM ".'users'." WHERE ".'user_name'." = '".$user."'";
    $res = mysqli_query($conn,$q);
    $role="";
    foreach($res as $row){
        //echo $row['user_password'];
        $role = $row['role'];
    }
    if($role == 'admin'){
        return 'admin';
    }else{
      return 'user';
    }
}