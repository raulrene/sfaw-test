<?php
echo '<h1>Structuri de control in PHP <?h1>'; 
/*
In limbajul PHP, la fel ca in oricare alt limbaj de programare, instructiunile cuprinse intr-o secventa de cod-sursa se executa succesiv, una dupa alta. Exista insa anumite instructiuni care modifica ordinea de executie a liniilor de cod. Din acest motiv ele poarta numele de structuri de control, intrucat ele controleaza fluxul de executie.
Structurile de control din PHP sunt: structura alternativa (instructiunea if cu variantele ei), structura de selectie multipla (switch), structuri repetitive (for, while, do... while, foreach), structuri de intrerupere a fluxului (break, continue, return), structura de salt neconditionat (goto), directivele de includere (include, require) si directiva declare.
O parte din acestea sunt rar folosite in practica (cum ar fi goto sau declare), motiv pentru care nu le vom trata in acest ghid. Restul vor fi prezentate succint in cele ce urmeaza sau in lectia urmatoare.
comentarii unul
*/

echo '<h4>Structura alternativa if</h4> ';

echo '<p>Poate cea mai des intalnita structura de control este instructiunea if. Aceasta este folosita pentru a executa o secventa de cod in functie de valoarea de adevar a unei conditii. Sintaxa este prezentata mai jos:
<?p>';

echo '<p>if( conditie ) instructiune 1</p>';
/*
Aceasta forma permite executarea unei instructiuni numai daca este indeplinita o conditie. Conditia poate fi orice expresie de genul "2 mai mic decat 3", "variabila $a este definita", s.a. tradusa in limbajul PHP.
Instructiunea de executat poate fi simpla (o singura instructiune) sau un bloc (mai multe instructiuni delimitate de acolade). Regula este ca atunci cand este nevoie sa se execute mai mult de o instructiune, trebuie obligatoriu creat un bloc (trebuie folosite acoladele).
*/

if( 2 < 4 ) print "2 e mai mic decat 4 <br />";
 echo '<br/>';
if( 3 > 1 ) {
	print "3 e mai mare ca 1 \n";
	print "<br />";
}

//Atentie! Daca nu se foloseste un bloc in cadrul instructiunii if, atunci doar prima instructiune dintre cele existente se executa sau nu, in urma evaluarii conditiei, pe cand celelalte se vor executa intotdeauna, indiferent de rezultatul verificarii. De exemplu:

echo "Este 3 mai mic decat 2? <br />\n";
if( 3 < 2 )
	print "Da, 3 < 2 - prima linie <br />";
	print "Da, 3 < 2 - a doua linie <br />";


//Pentru ca nu am inclus cele 2 instructiuni print intr-un bloc, a doua instructiune s-a executat indiferent de valoarea de adevar a conditiei. Practic, doar prima instructiune print a fost considerata ca facand parte din structura if. Codul corect (din punct de vedere logic) ar fi urmatorul, care contine un bloc de instructiuni:

echo "Este 3 mai mic decat 2? <br />\n";
if( 3 < 2 ) {
	print "Da, 3 < 2 - prima linia <br />";
	print "Da, 3 < 2 - a doua linie <br />";
}

/*
Instructiunea if - else

De multe ori este nevoie sa se specifice si o operatie ce trebuie efectuata daca nu este indeplinita o conditie. In acest caz se foloseste if - else.

if( conditie ) instructiune 1;
else instructiune 2;

Aceasta forma permite executarea unei instructiuni atunci cand se indeplineste conditia sau executarea alteia diferite in caz contrar. Aceleasi observatii ca si mai sus se aplica.
*/
echo "Este 3 mai mic decat 2? <br />\n";
if( 3 < 2 ) {
	print "Da, 3 < 2 - prima linia <br />";
	print "Da, 3 < 2 - a doua linie <br />";
} else {
	print "Nu, 3 > 2 - prima linia <br />";
	print "Nu, 3 > 2 - a doua linie <br />";
}



echo '<h4>Instructiunea de selectie multipla</h4>'; 

//O instructiune ce se aseamana cu if este switch, o structura ce permite executarea uneia sau mai multor linii de cod in functie de valoarea unei expresii. Instructiunea switch este utila in cazurile in care este nevoie sa se verifice mai multe valori posibile ale unei expresii.

$var = 3;
 
// se vor executa instructiunile de pe ramura care
// corespunde valorii variabilei $var
switch( $var ) {
	case 0:
		print 'zero';
		break;
	case 1:
		print 'unu';
		break;
	case 2:
		print 'doi';
		break;
	case 3:
		print 'trei';  // afisez trei
		break;         // intrerup fluxul executiei switch
	case 4:
		print 'patru';
		break;
	case 5:
		print 'cinci';
		break;
}
 
echo "\n", 'Gata!';
echo '<br/>';

//De mentionat este faptul ca, daca nu se foloseste instructiunea de control break, in momentul in care o ramura este selectata, se vor executa atat instructiunile aferente acelei ramuri cat si instructiunile ramurilor urmatoare. Acest lucru poate sa nu fie dorit intotdeauna, de aceea este important ca break sa fie folosita ori de cate ori fluxul de executie al blocului switch trebuie intrerupt.
$numar = 2;
 
// se vor executa instructiunile de pe ramura care
// corespunde valorii variabilei $numar
switch( $numar ) {
	case 0:
		print 0;
	case 1:
		print 1;
	case 2:
		print 2;
	case 3:
		print 3;
	case 4:
		print 4;
	case 5:
		print 5;
}
 
echo "\n", 'Gata!';
 
// va afisa 2345 Gata

echo '<br/>';

echo '<h4>Includerea altor scripturi</h4>'; 

//PHP permite referirea unor fisiere PHP externe si includerea lor in fluxul curent de executie folosind functiile include sau require. Important de mentionat, in momentul in care un script este inclus cu una din cele 2 functii, el este imediat si executat (interpretat). Practic, fluxul de executie al scriptului initial (cel in care apare instructiunea include sau require) este intrerupt temporar pentru a executa scriptul inclus, urmand ca dupa finalizarea executiei, fluxul initial sa fie reluat.

//Spre exemplu, daca avem doua fisiere ca mai jos, la accesarea scriptului script.php vor fi afisate ambele mesaje - asta pentru ca in urma instructiunii include scriptul config.php este imediat interpretat.

// fisierul config.php
echo 'Sunt in config.php <br />';

// fisierul script.php
include( 'config.php' );
echo 'Sunt in script.php <br />';
/*
Prin functionalitatea lor, instructiunile include si require devin utile la organizarea codului PHP si la mentinerea unei structuri simple de executie prin folosirea mai multor fisiere pentru o singura activitate. Astfel, putem sa separam codul in scripturi PHP de sine statatoare ce vor fi "puse cap la cap" prin apeluri de include sau require.

Spre exemplu, putem avea niste declaratii de date intr-un script numit config.php si codul propriu-zis intr-un altul, pagina.php. Putem apoi include fisierul de configurari (config.php) direct din scriptul principal (pagina.php), reusind astfel sa mentinem codul aerisit.

Include sau require?

Functia require face acelasi lucru ca si include dar exista o diferenta intre cele doua: daca fisierul solicitat pentru includere nu exista, include va returna un avertisment, continuand executia, pe cand require va returna o eroare iar executia codului va fi intrerupta.
Testeaza
*/
include( 'fisier_inexistent.php' );  // genereaza un warning si merge mai departe
echo 'Acest mesaj va fi afisat';
 
require( 'fisier_inexistent.php' );  // genereaza o eroare iar executia se intrerupe
echo 'Aceasta instructiune nu va mai fi executata';


//Cele doua functii au fiecare cate o varianta: include_once respectiv require_once. Aceste forme, dupa cum si numele o spune, includ fisierul specificat o singura data, astfel incat, daca fisierul solicitat a fost deja inclus la o noua apelare a include_once sau require_once acesta nu va fi inclus a doua oara. Aceste forme ale functiilor sunt utile atunci cand fisierle incluse contin declaratii ce trebuie sa fie facute o singura data. 