<?php
$a = 1;
// atribuie lui $a valoarea 1, apoi printeaza rezultatul expresiei $a = 1, adica 1
print ($a = 1);
print "<br>";
// atribuie lui $a valoarea 1, apoi atribuie lui $b rezultatul expresiei, adica 1
print $b = ($a = 1);
print "<br>";
$a = 4; # initializam $a cu numarul 4
$b = "4"; # initializam $b cu string-ul "4"
 
# operatorul de egalitate
if( $a == 4 ) print "\$a este 4";   # va afisa "$a este 4"
else print "\$a nu este 4";
 print "<br>";
# operatorul de egalitate
if( $a == $b ) print "Sunt egale";  # va afisa "Sunt egale"
else print "Nu sunt egale";
print "<br>"; 
# operatorul de echivalenta
if( $a === $b ) print "Sunt identice";  # va afisa "Nu sunt identice"
else print "Nu sunt identice";
# Nota: deoarece $a este numar iar $b string, ele nu sunt identice
print "<br>"; 
# operatorul de comparare
if( $a > 4 ) print "\$a este mai mare decat 4";
print "<br>";
print ( 1 == 2 ? 'egal' : 'ne-egal' ); // afiseaza ne-egal
print "<br>";
$a = 1;
print $a++; // afiseaza 1 - mai intai se afiseaza valoarea curenta, dupa care $a devine 2;
print "<br>";
print $a; // afiseaza 2 - $a are valoarea 2 dupa incrementare;
print "<br>"; 
$a = 1;
print ++$a; // afiseaza 2 - mai intai $a creste cu o unitate, apoi este afisata noua valoare
print "<br>";
print $a; // afiseaza 2 - $a are valoarea 2;
print "<br>";
print "Text1" . " legat de " . "Text2"; // afiseaza Text1 legat de Text2
print "<br>"; 
$a = "Eu am";
print $a . " mere"; // afiseaza Eu am mere;
print "<br>";
# in ambele situatii de mai jos este afisat continutul directrului curent
$output = `ls -al`;
echo "<pre>$output</pre>";
print "<br>"; 
?>