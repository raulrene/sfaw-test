<?php

# username si parola
$user_corect = 'admin';
$parola_corecta = 'ghiceste-Ma';


$mesaj = '';
if( isset( $_POST ) && !empty( $_POST[ 'trimite' ] ) ) {
	$erori = 0;

	
	if( !isset( $_POST[ 'user' ] ) || strlen( $_POST[ 'user' ] ) == 0 ) {
		$mesaj =  'Numele de utilizator nu a fost specificat';
		$erori = 1;
	} elseif( !isset( $_POST[ 'pass' ] ) || strlen( $_POST[ 'pass' ] ) == 0 ) {
		$mesaj = 'Parola nu a fost specificata';
		$erori = 1;
	}
	

	if( $erori == 0 ) {

		if( 	$_POST[ 'user' ] === $user_corect &&
				$_POST[ 'pass' ] === $parola_corecta )
		{

			echo '<html><head><meta http-equiv="refresh" content="2; URL=anunturi.php?logat=1" /></head><body>';
			echo '<small style="font-family: arial">Ati fost autentificat. Veti fi redirectionat la pagina dvs. imediat.</small>';
			echo '</body></html>';

			exit;
		} else {

			$mesaj = 'Username-ul sau parola sunt gresite';
		}
	}
}

?>

<html>
<head>
<title>Aplicatie formular: administrare anunturi - Invata PHP</title>
<style tyle="text/css">*{font-family:tahoma;font-size:small;} table,td {border-style:solid} thead td {background-color:#eeeeee; font-weight:bold}</style>
</head>
<body style="font-family: verdana,sans-serif; font-size: small;">

<h2>Administrare anunturi - autentificare</h2><hr />

<form action="" method="post" style="width: 30%">
<fieldset>
	<legend>Date de autentificare</legend>
	<input type="text" name="user" /> User<br />
	<input type="password" name="pass" /> Pass<br />
</fieldset>

<fieldset>
	<legend>Actiuni</legend>
	<input type="submit" value="Login" name="trimite" value="1" />  <input type="reset" value="Curata formular" /> 
</fieldset>

</form>

<?php

if( strlen( $mesaj ) > 0 ) {
	echo '<p style="color: red">', $mesaj, '</p>';
}
?>
</body>
</html>
