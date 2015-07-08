<?php
/**
 * Cod-sursa oferit gratuit de punctsivirgula.ro
 */

# includ fisierul cu functii
require_once 'functii.php';


// verific daca a fost solicitat logout
if( isset($_GET['action']) && $_GET['action'] == 'logout' ) {
	markLoggedOut();
}

// verific daca e deja logat
if( getAuthCode() == 0 ) {
	// sunt deja logat
	header('Location: index.php');
	
	// opresc executia scriptului curent
	exit;
}

// verific daca a fost facut submit
if( isset($_POST['trimite']) ) {

	// validez datele
	if( empty($_POST['user']) || empty($_POST['pass']) ) {
		// setez un mesaj de eroare
		$error = getError(ERR_INVALID_DATA);
		
	} else {
		// caut user-ul si verific parola
		if( checkUserPass($_POST['user'], $_POST['pass']) == null ) {
			// setez un mesaj de eroare
			$error = getError(ERR_LOGIN_FAILED);
		} else {
			// daca s-a ajuns aici inseamna ca se poate loga
			markLoggedIn();
		}
	}
	
}

// verific daca a fost vreo eroare venita de la o alta pagina
if( isset($_GET['error']) ) {
	$error = getError($_GET['error']);
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Aplicatie de login - Invata PHP</title>
<style tyle="text/css">*{font-family:verdana,sans-serif;font-size:small;} table,td {border-style:solid} thead td {background-color:#eeeeee; font-weight:bold} .error {color: red}</style>
</head>
<body>

<h2>Autentificare</h2><hr />

<?php

if(!empty($error)) {
	echo '<p class="error">', $error, '</p>';
}

?>

<form action="" method="post" style="width: 30%">
<fieldset>
	<legend>Date de autentificare</legend>
	<input type="text" name="user" /> User<br />
	<input type="password" name="pass" /> Pass<br />
	<input type="checkbox" name="keep" id="kp" value="1" /> <label for="kp">Pastreaza-ma logat</label><br />
</fieldset>

<fieldset>
	<legend>Actiuni</legend>
	<input type="submit" value="Login" name="trimite" value="1" />
	<input type="reset" value="Curata formular" /> 
</fieldset>

</form>

</body>
</html>