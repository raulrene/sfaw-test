<?php
print'<h1>Cookies</h1>';
echo '
<b>Cookies</b> reprezinta <b>portiuni de informatii </b>(stocate sub forma de fisiere de mici dimensiuni) ce <u>se afla pe calculatorul utilizatorului</u> si care <i>sunt create si folosite de catre browser in comunicarea cu serverul web</i>. De obicei cookie-urile <u>sunt folosite pentru a identifica utilizatorii sau a pastra urma vizitelor pe un site.</u>
Cookie-urile pot fi sterse cu usurinta de catre utilizator, sau pot fi blocate de catre browser, deci folosirea lor trebuie facuta cu grija si doar in cazuri de necesitate. Un cookie poate contine o cantitate limitata de informatie iar durata de viata poate fi limitata (la un anumit numar de zile, la inchiderea sesiunii de lucru, etc) sau nelimitata (pana la stergerea lor).
<br/>
PHP dispune de 2 functii prin care se pot crea cookie-uri:<b> setcookie</b> si <b>setrawcookie</b>. Cookie-urile create pe calculatorul utilizatorului pentru un site sunt transmise de catre browser inapoi la server si sunt disponibile in variabila globala $_COOKIE. 
';

echo '<h3>Setting a cookie</h3>';
echo ' Adaugarea unui cookie pe calculatorul vizitatorului se realizeaza cu ajutorul functiei <b>setcookie</b>. Aceasta va trimite un header pe care browserul client il va interpreta si va crea cookie-ul. Fiind vorba de headere, se aplica regula de a nu printa nimic intainte de apelarea functiei setcookie. In cazul in care o instructiune de afisare a fost apelata inainte, cookie-ul nu va mai putea fi creat.

<br/>Pentru a vedea cookie-urile deja create in browser-ul vizitatorului se foloseste variabila predefinita $_COOKIE. Aceasta este un vector asociativ ce contine un element pentru fiecare cookie existent. Popularea acestuia se face in mod automat in functie de informatiile transmise de browser.

<br/>Nota: elemente de tip cookie se pot crea si la nivel de browser (folosind JavaScript sau un alt limbaj de client-side scripting). Acestea vor fi disponibile in variabila $_COOKIE la urmatorul request (efectuat, evident, dupa ce cookie-urile au fost create). ';

 print '<hr/>';
# crearea unui cookie de test care expira la sfarsitul sesiunii de lucru
setcookie("Test", 'acesta este un test');
 
# crearea unui cookie care expira intr-o ora
setcookie("Test2", 'o ora', time()+3600);
 
 
# vizualizarea cookie-urilor
if( isset( $_COOKIE[ 'Test' ] ) ) {
	echo 'Test: ', $_COOKIE[ 'Test' ], '<br>';
}
  print '<hr/>';
if( isset( $_COOKIE[ 'Test2' ] ) ) {
	echo 'Test2: ', $_COOKIE[ 'Test2' ], '<br>';
}
// Rezultat (e nevoie de refresh prima data)
//   
//   
 echo '<br/>';
 

echo '# stergerea unui cookie se face printr-un truc: alegand o data de expirare din trecut
<br/>setcookie("Test2", "o ora", time()-3600) // timpul de expirare a trecut, deci cookie-ul
// nu va mai fi valid si va fi sters de catre browser';

echo '<h3>check if user browser accepts cookies</h3>';
echo '<p> 1.se incearca sa se creeze un cookie,<br/> 2.apoi se face un redirect la aceeasi pagina iar in urma redirectului (practic la a doua accesare a paginii)<br/> 3.se verifica daca acel cookie a fost creat cu succes.

<br/>Redirect-ul se face folosind headere, deci va fi transparent pentru utilizator, care probabil nici nu va observa ca a fost redirectionat. Pentru a stii cand se face verificarea cookie-ului, se foloseste un parametru GET ce va avea valoarea 1 dupa redirect. </p>';


function testCookie() {
 
	# se foloseste variabila globala $_SERVER pentru a prelua numele
	# scripului curent (folosit la redirect)
	$paginaCurenta = $_SERVER[ 'PHP_SELF' ];
 
	# testez mai intai daca am creat cookie-ul
	if( empty( $_GET[ 'creat' ] ) ) {
		# este prima data cand accesez pagina
		#  adaug un cookie de test
		setcookie( 'ctest', 'verificare' );
 
		# fac redirect la aceasi pagina si adaug parametrul "creat"
		# pentru a putea semnala faptul ca s-a incercat deja crearea cookie-ului
		header( 'Location: ' . $paginaCurenta . '?creat=1' );
		exit;
	} else {
		# se va executa asta  atunci cand exista parametrul GET, deci dupa
		# redirect, cand cookie-ul a fost deja creat
		if( isset( $_COOKIE[ 'ctest' ] ) && !empty( $_COOKIE[ 'ctest' ] ) ) {
			return true;
		} else {
			return false;
		}
	}
 
}
 
if (testCookie()) print 'Browserul dvs. accepta cookie-uri';
else print 'Ne pare rau dar browserul dvs. nu accepta cookies';

echo '<h3>creating a cookie that retains multiple visits</h3>';
# verific daca cookie-ul exista deja si preiau numarul de vizite stocat
$vizite = 0;
if( isset( $_COOKIE[ 'visits' ] ) ) {
	$vizite  = $_COOKIE[ 'visits' ];
}
 
# cresc numarul vizitelor cu o unitate
$vizite++;
 
# actualizez (sau setez) cookie-ul ce va retine nr de vizite
setcookie( 'visits', $vizite, time() * 2 ); // va expira peste mult timp
 
# afisez un mesaj corespunzator
if( $vizite == 1 ) {
	echo "Bun venit! Se pare ca nu ne-ai mai vizitat pana acum!";
} else {
	echo "Bine ai revenit. E a $vizite-a oara cand ne vizitezi.";
}
?>