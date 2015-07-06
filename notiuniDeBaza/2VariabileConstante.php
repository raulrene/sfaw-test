<?php
// variabile numerice
$variabila = 1;
$numar = 0;
 
// variabile text (stringuri)
$text = "Salut";
$text2 = 'Ce faci?';
 
// variabile logice (boolean)
$stiuPHP = true;
$uitRepede = false;
 
// vector
$vectorGol = array();
$vectorS = array( 10,11,12,13 ); // vector simplu
 
// vector asociativ
$vector = array( 
	'luni' => 'Monday', 
	'marti' => 'Tuesday',
	'miercuri' => 'Wednesday'
);
 
// definirea unei noi componente a unui vector asociativ
$vector[ 'joi' ] = 'Thursday';
 
// vector simplu definit ca asociativ, echivalentul lui $vectorS
$vectorS2 = array(
	0 => 10,
	1 => 11,
	2 => 12,
	3 => 13
);

# atribuirea unei valori anume
$variabila = 2;
 
# copierea valorii de la o alta variabila
$text = $variabila;
 
# copierea valorii functioneaza si in cazul vectorilor
# in urma copierii cei 2 vectori vor fi identici
$vectorS = $vectorS2; # toate componentele lui $vectorS2 sunt copiate in $vectorS
 
# in cazul vectorilor se pot atribui valori separat fiecarei componente
$vectorS[ 0 ] = 100;
$vectorS[ 3 ] = 10;
 
$vector[ 'luni' ] = 'Lundi';
$vector[ 'joi' ] = 'Jeudi';

$var1 = 123;
echo "<br>" ;
print "\n print_r:  "; print_r($var1);  // afiseaza 123
echo "<br>" ;
print "\n var_dump: "; var_dump($var1); // afiseaza int(123)
echo "<br>"  ;
 
$var2 = "test";
 
print "\n print_r:  "; print_r($var2);  // afiseaza test
echo "<br>" ;
print "\n var_dump: "; var_dump($var2); // afiseaza string(4) "test"
echo "<br>" ; 
 
$var3 = array('aaa', 'bbb', 'ccc');
 
print "\n print_r:  "; print_r($var3);  // afiseaza Array ( ... )
echo "<br>" ;
print "\n var_dump: "; var_dump($var3); // afiseaza array(3) { ... }
echo "<br>" ;
$variabila = array("componenta1", 2, 3);
$ser = serialize($variabila);
 
echo $ser, "\n"; // afiseaza a:3:{i:0;s:11:"componenta1";i:1;i:2;i:2;i:3;}
echo "<br>" ;
$des = unserialize($ser);
print_r($des);  // afiseaza vectorul initial
echo "<br>" ;
$today = date( 'd-m-Y' );
$text1 = "Azi e $today"; 
 
print $text1; // Azi e 17-07-2008
echo "<br>" ;
// definim o variabila, cealalta definire nu se executa
 
$var = 0;
// $var2 = 1;
 
var_dump( isset($var) ); // bool(true)
var_dump( isset($var2) ); // bool(false)
 
var_dump( empty($var1) ); // bool(true), pentru ca 0 este considerat nul
var_dump( empty($var2) ); // bool(true)
echo "<br>" ;
$salut = array(
	'dimineata' => 'Buna dimineata',
	'pranz' => 'Buna ziua',
	'seara' => 'Noapte buna'
);

 print "{$salut['pranz']} , vizitatorule ";
echo "<br>" ;
 $masina = "Chevrolet";
$avion = "Boeing";
$tren = "TGV";
 
$obiect = 'masina';
print $$obiect; // Chevrolet
echo "<br>" ; 
$obiect = 'tren';
print $$obiect; // TGV
echo "<br>" ;
define( 'ZILE_LUCRATOARE', 5);
$zile = array( 'luni', 'marti', 'miercuri', 'joi', 'vineri', 'sambata', 'duminica' );
 
print 'Zilele lucratoare sunt: ';
for( $i = 0; $i < ZILE_LUCRATOARE; $i++ ) {
	print $zile[ $i ] . ' ';
}

?>