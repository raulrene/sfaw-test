<?php
if( 2 < 4 ) print "2 e mai mic decat 4 <br />";
print "<br>";  
if( 3 > 1 ) {
	print "3 e mai mare ca 1 \n";
	print "<br />";
}
print "<br>"; 
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
print "<br>";  
echo "\n", 'Gata!';
print "<br>"; 
require( '1NotiuniDeBaza.php' );  // genereaza un warning si merge mai departe
print "<br> <br>"; 
echo '^ Acest mesaj este din fisierul 1NotiuniDeBaza';
print "<br>"; 
?>