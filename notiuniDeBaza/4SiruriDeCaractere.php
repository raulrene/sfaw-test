<?php
$a = "valoarea variabilei"; // definesc o variabila
print "Textul definit cu ghilimele contine $a";
print "<br>"; 
print "Ma numesc \"Alex\"!"; // sir ce contine ghilimele, se foloseste \" pentru a afisa ghilimele
print "<br>"; 
print "Text afisat pe 3 linii: \n linia 2 si \n linia3";
// atentie, textul e afisat pe 2 linii in sursa HTML cu ajutorul caracterului \n  (new-line) 
// pentru verificare vizualizati sursa paginii (alegeti "View Source" din browser) 
print "<br>"; 
print "Am castigat \$30 :D"; // caracterul dolar are un statut aparte (marcheaza variabilele) 
// pentru a afisa semnul $ asa cum este se foloseste \$
print "<br>"; 
print "Text cu \\backslash\\."; // intrucat backslash \ este un caracter special el 
// poate fi afisat ca atare intr-un text doar daca este dublat
print "<br>"; 
// daca e folosit doar un singur \ PHP ar trata textul diferit:
print "Text fara \backslash\- \nu se afiseaza corec\t.";
print "<br>";
$a = 'valoarea'; // definesc o variabila
 
print <<<'TXT'
Incepand cu versiunea 5.3.0 exista un alt mod de delimitare a sirurilor 
in care variabilele si caracterele speciale nu sunt interpretate. <br />
Asadar $a si \n raman asa cum sunt.
TXT;
print "<br>";
$s = "acesta este un text";
$sir = "stiu PHP stiu HTML stiu CSS";
 
# ce lungime are sirul? (numarul de caractere) 
print strlen( $s ); // 19
print "<br>";
# verific daca un cuvant sau text (in cazul de fata cuvantul 'PHP') apare in 
# sirul exprimat prin variabila $sir
if( strstr( $sir, 'PHP' ) !== false ) print 'gasit';
else print "nu am gasit";
print "<br>"; 
# pentru a nu tine cont de litere mari/mici se foloseste stristr
if( stristr( $sir, 'phP' ) !== false ) print 'gasit';

# afisez o sectiune din sir
print substr( $sir, 0, 4); // stiu
print "<br>";
print substr( $sir, 5 ); // PHP stiu HTML stiu CSS
print "<br>";
print substr( $sir, 5, -3 ); // PHP stiu HTML stiu
print "<br>";
print substr( $sir, -3 ); // CSS
print "<br>"; 
# returnez doar un caracter din string
print $sir{5}; // P
print "<br>";
print $sir{ strlen($sir)-1 }; // S
print "<br>";
# inlocuirea unor secvente
print str_replace( "stiu", "invat", $sir); // invat PHP invat HTML invat CSS
print "<br>"; 
# schimb tipul literelor (mari, mici)
print strtoupper( $s ); // ACESTA ESTE UN TEXT
print "<br>";
print strtolower( $sir ); // stiu php stiu html stiu css
print "<br>";
print ucfirst( $s ); // Acesta este un text
print "<br>";
print ucwords( $s ); // Acesta Este Un Text
print "<br>"; 
# sterg spatiile de la inceput si sfarsit: trim, ltrim, rtrim
print trim('      ok        '); // ok
print "<br>"; 
# caractere "enter" transformate in <br />
print nl2br( "acesta e afisat pe \n 2 linii" ); // acesta e afisat pe <br /> 2 linii
print "<br>";
# impart sirul dupa un caracter, cuvant sau un alt sir
$output1 = explode( "stiu ", $sir ); // impart dupa stiu<spatiu>
/*
Array (
    [0] => PHP 
    [1] => HTML 
    [2] => CSS
)
*/
 
# impart sirul dupa o expresie regulata (regex)
$output2 = preg_split( '/ /', $s ); // impart dupa spatiu
/* 
Array (
    [0] => acesta
    [1] => este
    [2] => un
    [3] => text
)
*/
 
# operatia inversa impartirii unui sir:
$a = implode( 'invat ', $output1 ); // invat PHP invat HTML invat CSS
$b = join( '-', $output2 ); // acesta-este-un-text

# parsez un Query String
$str = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($str);
print $first;  // value
print "<br>";
print $arr[0]; // foo bar
print "<br>";
print $arr[1]; // baz
print "<br>"; 
parse_str($str, $output);
print $output['first'];  // value
print "<br>";
print $output['arr'][0]; // foo bar
print "<br>";
print $output['arr'][1]; // baz
?>