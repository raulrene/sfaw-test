<?php
print date( 'd.m.Y H.i.s' );


print time();


date_default_timezone_set( 'Europe/Bucharest' );


print strtotime("now");
print strtotime('1st January 2004');

print "<br />";

echo mktime( 13, 0, 0, 1, 31, 2004);


echo mktime( 10, 30, 0, 9, 3, 2014);


$ultima = mktime(0, 0, 0, 3, 0, 2000);
echo strftime("Ultima zi din Februarie 2000 este: %d", $ultima );

$zi = mktime(0, 0, 0, 3, -3, 2000);
echo strftime("Inainte de Martie 2000 cu 4 zile: %d", $zi );

print "<br />";
$acum = time();


echo date("H:i:s") . "<br>";
echo date("Y-m-d") . "<br>";
echo date("F j, Y, g:i a") . "<br>";
echo date("l") . "<br>";


echo date("d-m-Y H:i:s", $acum) . "<br>";
echo date("D, M d, Y", 1072915200) . "<br>";


$iulie4 = mktime( 0, 0, 0, 7, 4, 2000 );
echo date( 'l', $iulie4 );

$acum = time();
$maiTarziu = 480  * 60  * 60 ;

print "Data ceruta este: " . date( 'd.m.Y H.i.s', $acum + $maiTarziu );
print "<br />";
$rezultat = mktime( 0, 0, 0, 2, 29, 2004 );
if( $rezultat === FALSE || $rezultat === -1 ) {

    echo "Data nu exista";
} else {
    echo "Data este valida: " . date( 'd.m.Y', $rezultat);
}

print "<br />";


$rezultat = strtotime( "2 days ago" );
if( $rezultat === FALSE || $rezultat === -1 ) {
    echo "Data nu exista";
} else {
    echo "Data este valida: " . date( 'd.m.Y', $rezultat);
}

print "<br />";

$t = localtime( time(), true );
$h = $t[ 'tm_hour' ];

if( $h >= 7 && $h <= 11 ) print "Buna dimineata!";
elseif( $h > 11 && $h < 18 ) print "Buna ziua!";
elseif( $h >= 18 && $h < 22 ) print "Buna seara!";
elseif( $h >= 22 ) print "Noapte buna!";
else print "Ce? Esti treaz(a) la ora asta?";
print "<br />";
setlocale( LC_TIME , 'ROM_ROM' );


for( $m = 1; $m <= 12; $m++ ) {
    print strftime( "%B", mktime( 0,0,0, $m, 1, 2008 ) ) . "\n";
}


print 'Luna curenta este: ' . strftime( "%B", time() );

print "<br />";

$time_start = microtime(true);



$time_end = microtime(true);

print "Durata de executie (secunde): " . ( number_format($time_end - $time_start, 6) );
