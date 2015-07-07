<?php
$variabila = 1;
$numar = 0;

$text = "Salut";
$text2 = 'Ce faci?';

$stiuPHP = true;
$uitRepede = false;

$vectorGol = array();
$vectorS = array( 10,11,12,13 ); // vector simplu

$vector = array(
    'luni' => 'Monday',
    'marti' => 'Tuesday',
    'miercuri' => 'Wednesday'
);

$vector[ 'joi' ] = 'Thursday';

$vectorS2 = array(
    0 => 10,
    1 => 11,
    2 => 12,
    3 => 13
);

$variabila = "negru";
$vaRiabilA = "alb";
$Variabila = 1;

$variabila = 2;

$text = $variabila;

$vectorS = $vectorS2;

$vectorS[ 0 ] = 100;
$vectorS[ 3 ] = 10;

$vector[ 'luni' ] = 'Lundi';
$vector[ 'joi' ] = 'Jeudi';

unset( $variabila );
$variabila = null;

$variabila = "Text";
$randNou = "<br>";

print $variabila;
print $randNou;

echo $variabila, $randNou;

$var1 = 123;

print "\n print_r:  "; print_r($var1);
print "\n var_dump: "; var_dump($var1);

$var2 = "test";

print "\n print_r:  "; print_r($var2);
print "\n var_dump: "; var_dump($var2);

$var3 = array('aaa', 'bbb', 'ccc');

print "\n print_r:  "; print_r($var3);
print "\n var_dump: "; var_dump($var3);

$variabila = array("componenta1", 2, 3);
$ser = serialize($variabila);

echo $ser, "\n";

$des = unserialize($ser);
print_r($des);

$today = date( 'd-m-Y' );
$text1 = "Azi e $today";
print "<br />";
print $text1;
print "<br />";

$var = 0;
// $var2 = 1;

var_dump( isset($var) );
var_dump( isset($var2) );

var_dump( empty($var1) );
var_dump( empty($var2) );

$salut = array(
    'dimineata' => 'Buna dimineata',
    'pranz' => 'Buna ziua',
    'seara' => 'Noapte buna'
);
print "{$salut[ 'pranz' ]}, vizitatorule";
print "<br />";
$masina = "Chevrolet";
$avion = "Boeing";
$tren = "TGV";

$obiect = 'masina';
print $$obiect;
print "<br />";
$obiect = 'tren';
print $$obiect;
print "<br />";
define( 'ZILE_LUCRATOARE', 5);
$zile = array( 'luni', 'marti', 'miercuri', 'joi', 'vineri', 'sambata', 'duminica' );

print 'Zilele lucratoare sunt: ';
for( $i = 0; $i < ZILE_LUCRATOARE; $i++ ) {
    print $zile[ $i ] . ' ';
}
print "<br />";
define( 'NUME', "Flo" );
define( 'VARSTA', 10 );
define( "ADEVARAT", true );

print "Ma numesc " . NUME;
print " si am " . VARSTA . " ani";
print "<br />";
if( defined( 'NUME' ) ) {
    print "Ma numesc " . NUME;
}

if ( !defined( 'VARSTA2' ) ) {
    define( 'VARSTA2' , 20 );
}
print " Am " . VARSTA2 . " ani";