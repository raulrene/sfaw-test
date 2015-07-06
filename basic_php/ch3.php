<?php
/*
 Expresiile sunt constructii ale limbajului PHP care au o valoare. 
 O expresie poate fi un sir de caractere, un numar, 
 o variabila sau chiar o constructie mai complexa (cum ar fi un apel de functie). 
 Ideea de baza este ca orice poate fi evaluat la o valoare este considerat a fi expresie


De mentionat este ca expresiile sunt evaluate de la dreapta la stanga.

Nu doar atribuirile sunt expresii.
 Apelurile de functii (predefinite sau definite de programator) sunt considerate expresii si ele,
  intrucat returneaza o valoare. De asemenea, asocierea mai multor expresii, 
  folosind operatori, genereaza o noua expresie.

Un alt lucru important referitor la expresii este ca valoarea lor se poate modifica in functie de context
. Mai exact, se modifica tipul de date de care apartine expresia (din string in numeric, din numeric in logic, etc). Astfel, daca intr-o operatie este necesar un anumit tip de date, iar expresia folosita are alt tip, atunci valoarea este convertita in mod automat. Asta poate fi un lucru bun, sau poate introduce erori in cod; de aceea este important sa se acorde o atentie sporita valorilor expresiilor, in special atunci cand se combina tipuri de date diferite.

Expresiile sunt fundamentul limbajului PHP si aproape orice este o expresie. 
Ele apar peste tot in codul sursa si pot fi folosite in atribuiri, 
ca parametrii ai functiilor sau pentru specificarea conditiilor din structurile de control.

*/

/*comparison operators
	==      is equal
	!=,<>   is different	
	===     is identic(data type)
	!==     not identic
	< , >   less than , greater than
	<= , >=  less and equal than,greater and equal than

when compared a string with a number the string is converted to a number

Operatorul ternar

PHP ofera un operator care are 3 termeni si a carui evaluare returneaza o valoare. Sintaxa lui este urmatoarea:

(conditie ? adevarat : fals )

De remarcat ca adevarat, fals si conditie nu sunt instructiuni ci expresii (variabile, constante, stringuri, etc) iar operatorul returneaza o valoare si nu o variabila.
*/
print ( 1 == 2 ? 'egal' : 'ne-egal' ); // afiseaza ne-egal
$a = ( 1 == 2 ? 'egal' : 'ne-egal' ); // $a va avea valoarea ne-egal

//Operatori de atribuire

$a = 1; // atribuire simpla
 
$a += 4; // echivalent cu $a = $a + 4; $a are valoarea 5 acum
$a -= 1; // echivalent cu $a = $a - 1;
$a *= 2; // echivalent cu $a = $a * 2;
$a /= 3; // echivalent cu $a = $a / 3;
$a %= 2; // echivalent cu $a = $a % 2; restul impartirii lui $a la 2
 
$a = &$b; /* $a este o referinta la $b, adica ambele variabile fac referire 
   la aceeasi entitate; daca $a se schimba, se va schimba si $b. 
   Altfel spus, $a este un alias pentru $b */
 
$s = "Salut"; // atribuire simpla
$s .= " straine!"; // echivalent $s = $s . " straine!";



//Operatori pentru siruri de caractere

//In aceasta categorie sunt inclusi 2 operatori ".=" (operator de atribuire prin concatenare - vezi mai sus) si "."
//Punctul (.) este operatorul de concatenare (legare) stringuri.

print "Text1" . " legat de " . "Text2"; // afiseaza Text1 legat de Text2
 echo '<br/>';
$a = "Eu am";
print $a . " mere"; // afiseaza Eu am mere;
 echo '<br/>';

//Operatori de control al erorilor @

//Operatorul @ este folosit pentru a suprima erorile sau avertismentele produse de PHP.

// $nedefinit = 1; - nu se executa, variabila nu e definita
print $nedefinit; // Notice: Undefined variable: nedefinit in file.php on line 120
@print $nedefinit; // nu va genera nici un avertisment / notificare
 
include( "inexistent.php" ); // Warning: include(nedefinit) failed to open...
@include( "inexistent.php" ); // nu afiseaza nici un avertisment


//Operatorul de executie ` `

//Operatorul de executie permite rularea unor aplicatii sau comenzi ale sistemului de operare direct din PHP. Rezultatul executiei este capturat de script si poate fi prelucrat sau afisat. Operatorul ` ` este echivalent cu functia shell_exec.

# in ambele situatii de mai jos este afisat continutul directrului curent
$output = `ls -al`;
echo "<pre>$output</pre>";
 
$output = shell_exec('ls -al');
echo "<pre>$output</pre>";


//Alti operatori
/*
PHP mai dispune de urmatoarele tipuri de operatori:

    Operatori aritmetici: +, -, *, etc
    Operatori pe biti: &, |, ^, ~, <<, >>
    Operatori logici: and, or, xor, &&, ||
    Operatori de tip: instanceof
    Operatori pentru vectori: asemanatori celor de comparare, doar ca se aplica vectorilor, operatorul de uniune (+) leaga doi sau mai multi vectori
*/
?>