<?php
for( $i = 1; $i <= 10; $i++ ) {
    echo $i;
};
print "<br />";
$i = 0;
while( $i <= 10 ) {
    echo $i;
    $i++;
}

print "<br />";

$i = 11;
do {
    echo $i;
    $i++;
} while( $i <= 10 );
print "<br />";

$vector = array( 3, 4, 5, 1, 2, 9, 76, 42, 2, 9, 6, 0, 4, 1, 10 );
$pozitie = 0;
$gasit = true;
do {
    $gasit = true;



    if( $vector[ $pozitie ] != 0 ) {
        $gasit = false;
    }


    $pozitie++;

} while ( !$gasit && $pozitie < count( $vector ) );

if( $gasit == true ) print "Am gasit 0 pe pozitia $pozitie";
else print "Nu am gasit 0 in vectorul asta";
print "<br />";
$vector = array( 3, 4, 5, 1, 2, 9 );

foreach( $vector as $element) {
    print "$element ";
}

print "<br />";

$vector = array( 'a', 'b', 'c', 'd', 'e', 'f' );

// afiseaza: a b c d e f
foreach( $vector as $cheie => $element) {
    print "$element ";
}

// afiseaza: 0 1 2 3 4 5
foreach( $vector as $cheie => $element) {
    print "$cheie ";
}

print "<br />";

$zile = array(
    'luni' => 'Mo',
    'marti' => 'Tu',
    'miercuri' => 'We',
    'joi' => 'Th',
    'vineri' => 'Fr',
    'sambata' => 'Sa',
    'duminica' => 'Su'
);

foreach( $zile as $eng) {
    print "$eng ";
}

foreach( $zile as $rom => $eng) {
    print "$eng inseamna $rom <br />";
}
print "<br />";
for($i = 0; $i < 10; $i++) {

    if( $i <= 5 ) {
        continue;
    }
    print $i;
    print "<br />\n";
}

for($i = 0; $i < 10; $i++) {
    // cand $i == 2, se va "iesi" din structura
    if( $i == 2 ) {
        break;
    }
    print $i;
    print "<br />\n";
}
print "Gata!";

print "<br />";
$n = 7;
for($i = 0; $i < $n; $i++) {

    echo 'Iteratia #', $i, ': ';
    for($j = 0; $j < $n; $j++) {
        if( $i == 4 && $j == 4 ) {
            break 2;
        }
        if( $j >= $n - $i ) {
            continue 1;
        }
        print "$j ";
    }
    print "\n";
}
?>