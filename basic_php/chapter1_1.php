<?php 
//Constantele sunt entitati care nu isi schimba valoarea pe parcursul executiei. Sunt utile pentru a recunoaste usor valorile folosite in cod. De exemplu, e mai usor de inteles urmatorul cod, cand se foloseste o constanta decat daca s-ar folosi cifra 5

define( 'ZILE_LUCRATOARE', 5);
$zile = array( 'luni', 'marti', 'miercuri', 'joi', 'vineri', 'sambata', 'duminica' );
 
print 'Zilele lucratoare sunt: ';
for( $i = 0; $i < ZILE_LUCRATOARE; $i++ ) {
	print $zile[ $i ] . ' ';
}

//Asadar constantele de definesc folosind define:
define( 'NUME', "Flo" );
define( 'VARSTA', 10 );
define( "ADEVARAT", true );

//Este recomandat ca numele constantelor sa fie scris cu majuscule (pentru a fi mai usor identificate) desi nu este obligatoriu. Atunci cand se folosesc, se specifica doar numele, fara ghilimele sau $:

print "Ma numesc " . NUME;
print " si am " . VARSTA . " ani";

//Pentru a verifica daca o constanta este definita, se foloseste functia defined

if( defined( 'NUME' ) ) {
	print "Ma numesc " . NUME;
}
 
if ( !defined( 'VARSTA2' ) ) {
	define( 'VARSTA2' , 20 );
}
print " Am " . VARSTA . " ani";
?>