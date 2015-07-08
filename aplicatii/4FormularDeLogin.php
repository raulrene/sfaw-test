<?php

echo '
Formularul de login (login.php)
<br>
Asa cum am mentionat, mecanismul general de functionare este acelasi ca la orice formular simplu:
<br>
daca datele au fost trimise (daca exista $_POST[]), se continua cu executarea codului PHP (din primul if), altfel se afiseaza codul HTML (formularul) de la sfarsitul fisierului;
se fac validari (in cazul acesta concret trebuie doar ca numele si parola sa fie nenule); daca sunt probleme cu datele trimise se seteaza un mesaj de eroare si se afiseaza codul HTML;
altfel, daca nu sunt probleme cu datele, se cauta un utilizator cu acel nume si acea parola (checkUserPass);
daca utilizatorul nu a putut fi gasit, se afiseaza codul HTML cu un mesaj de eroare; in caz contrar se marcheaza utilizatorul ca fiind autentificat (markLoggedIn).
<br><br>';
?>


<?php
/* ... */
 
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
 
/* ... */
?>
 
<html>
<body>
 
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
	<input type="checkbox" name="keep" id="kp" value="1" /> 
	<label for="kp">Pastreaza-ma logat</label><br />
</fieldset>
 
<fieldset>
	<legend>Actiuni</legend>
	<input type="submit" value="Login" name="trimite" value="1" />
	<input type="reset" value="Curata formular" /> 
</fieldset>
 
</form>
 
</body>
</html>


<?php
echo '
<br><br>
Functia markLoggedIn (functii.php)
<br>
Aceasta functie este esentiala intrucat ea salveaza pe sesiune informatii despre utilizator: user-ul, IP-ul, timpul la care s-a logat, ultima accesare a unei pagini, etc. Folosind mecanismul sesiunilor oferit de PHP, datele raman persistente si disponibile altor pagini, astfel ca se poate verifica la orice accesare daca utilizatorul este autentificat sau nu.
<br>
Mai mult decat atat, este posibila si salvarea unui cookie care sa permita autentificarea automata chiar si dupa incheierea unei sesiuni PHP (dupa inchiderea browser-ului). Cookie-ul este salvat doar daca utilizatorul solicita acest lucru.
<br>
De mentionat este ca se poate spune in orice moment cum s-a logat un utilizator, in functie de valoarea elementului via ($_SESSION["LOGIN"]["via"]). Initial acesta are valoarea "form", intrucat prima logare va fi prin intermediul formularului, dar la autentificarea automata prin cookie acesta va avea o alta valoare. De ce este util acest lucru? In functie de specificul aplicatiei, se pot implementa masuri de siguranta aditionale, cum ar fi solicitarea utilizatorilor logati prin cookie sa introduca parola atunci cand fac operatiuni senzitive.
<br>';

/*
# definesc functia care marcheaza utilizatorul ca autentificat
function markLoggedIn() {
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
		//setez un cookie ce contine structura creata mai sus si care
		 //va expira in 30 de zile; structura de date este serializata
		 //adica transformata intr-un format ce poate fi stocat ca text
		 //dupa serializare, textul returnat este encodat cu algoritmul
		 //base64 la care se adauga caracterul '1' pentru a ingreuna
		 //decodificarea continutului 
		setcookie( 'logindata', '1' . base64_encode( serialize( $data ) ), 
				time() + 2592000, '/' );
 
	} else {
		// sterg cookie-ul prin setarea valabilitatii la o data din trecut
		setcookie( 'logindata', "", time() - 36000, '/' );
	}
 
	// acum ca am salvat datele pe sesiune (si posibil in cookies), redirectionez
	header('Location: index.php');
 
	// opresc executia scriptului curent
	exit;
}
*/

echo '
<br>
Pagina protejata (index.php)
<br>
Fisierul index.php, cel care este afisat imediat dupa login, ca de altfel orice alta pagina ce poate fi accesata doar dupa autentificare, trebuie sa verifice starea utilizatorului. Astfel, o pagina protejata va verifica daca utilizatorul este autentificat, inainte de a afisa orice informatie. In exemplul nostru, verificarea se face apeland functia checkLogin, ca mai jos.
<br>
<?php
<br>
# aceasta este o pagina protejata, deci inainte sa afisez orice, vom 
<br>
# verifica daca vizita provine de la un utilizator logat
<br>
checkLogin();
<br>
?>
<br><br> 
<!-- continutul paginii trebuie pus dupa verificare -->
<br><br>';


echo '
Functia checkLogin (functii.php)
<br>
Aceasta functie verifica daca utilizatorul care acceseaza pagina este deja autentificat sau se poate loga automat prin intermediul cookie-urilor. Verificarea se face cu ajutorul unei functii utilitare, getAuthCode, iar in cazul in care rezultatul este negativ se va redirectiona catre pagina de login. In acest mod, utilizatorii neautentificati nu vor putea accesa o pagina protejata.
<br>
Functia getAuthCode este cea care face verificarea propriu-zisa. Aceasta cauta mai intai date pe sesiune pentru a vedea daca utilizatorul este deja logat, apoi verifica daca exista un cookie valid ce poate permite autentificarea. Codul complet este prezentat mai jos.
<br><br>';

?>