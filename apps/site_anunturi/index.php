<?php
/**
 * Cod-sursa oferit gratuit de punctsivirgula.ro
 */

# username si parola
$user_corect = 'admin';
$parola_corecta = 'ghiceste-Ma';

# verific daca se acceseaza pagina ca urmare a unui request POST
$mesaj = '';
if( isset( $_POST ) && !empty( $_POST[ 'trimite' ] ) ) {
	$erori = 0;
	# validam datele, presupunem ca nu sunt erori si verificam
	
	if( !isset( $_POST[ 'user' ] ) || strlen( $_POST[ 'user' ] ) == 0 ) {
		$mesaj =  'Numele de utilizator nu a fost specificat';
		$erori = 1;
	} elseif( !isset( $_POST[ 'pass' ] ) || strlen( $_POST[ 'pass' ] ) == 0 ) {
		$mesaj = 'Parola nu a fost specificata';
		$erori = 1;
	}
	
	# daca nu au fost erori, atunci fac prelucrarile
	if( $erori == 0 ) {
		# verific daca datele introduse sunt corecte
		# pot face verificarea cu o baza de date sau un fisier ce stocheaza
		# utilizatorii.
		# pentru acum, vom face o verificare simpla
		if( 	$_POST[ 'user' ] === $user_corect &&
				$_POST[ 'pass' ] === $parola_corecta )
		{
			# login realizat, redirectionez
			echo '<html><head><meta http-equiv="refresh" content="2; URL=anunturi.php?logat=1" /></head><body>';
			echo '<small style="font-family: arial">Ati fost autentificat. Veti fi redirectionat la pagina dvs. imediat.</small>';
			echo '</body></html>';
			# nota: redirectionarea se poate face mai elegant cu headere
			
			exit; # nu mai afisez nimic altceva
		} else {
			# nu s-a facut login
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
# aici afisam mesajul de eroare, daca avem
if( strlen( $mesaj ) > 0 ) {
	echo '<p style="color: red">', $mesaj, '</p>';
}
?>
</body>
</html>
