<?php

$vector = array( 1, 2, 3, 4, 5, 6 );
$vectAs = array(
    'unu' => 'one',
    'doi' => 'two',
    'trei' => 3
);



print count( $vector ); // 6


print in_array( 3, $vector ); // true


print array_key_exists( 'trei', $vectAs ); // true


print_r( array_keys( $vectAs ) ); // Array ( [0] => unu [1] => doi [2] => trei )


print_r( array_values( $vectAs ) ); // Array ( [0] => one [1] => two [2] => 3 )


print_r( array_slice(  $vector, 3 ) ); // de la pozitia 3 pana la final: 4, 5, 6
print_r( array_slice(  $vector, 3, 2 ) ); // de la pozitia 3, doua elemente: 4, 5
print_r( array_slice(  $vector, -5, 3 ) ); // de la final inapoi 5 pozitii: 2, 3, 4


extract( $vectAs );
print $unu; // one
print $doi; // two
print $trei; // 3


sort( $vector ); // 1, 2, 3, 4, 5, 6
rsort( $vector ); // 6, 5, 4, 3, 2, 1
asort( $vectAs ); //

print_r( array_unique( $vector ) );


$vector[] = 7;
array_push( $vector, 8 );



$vectAs[ 'trei' ] = 'three';
print "<br />";
$browser = array( 'Firefox', 'MSIE', 'Chrome', 'Safari', 'Opera' );

$gasit = false;
foreach( $browser as $i => $b ) {


    if( stristr( $_SERVER[ 'HTTP_USER_AGENT' ], $b ) ) {
        $gasit = true;
        print "Folositi {$browser[ $i ]}!<br />";
    }
    if( $gasit ) break;
}