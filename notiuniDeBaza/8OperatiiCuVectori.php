<?php
$vector = array( 1, 2, 3, 4, 5, 6 );
$vectAs = array(
	'unu' => 'one',
	'doi' => 'two',
	'trei' => 3
);
 
 
// lungimea unui vector (numarul de elemente) 
print count( $vector ); // 6
 
// se gaseste o valoare in vector?
print in_array( 3, $vector ); // true
 
// exista o anumita cheie in vector?
print array_key_exists( 'trei', $vectAs ); // true
 
// returneaza toate cheile din vector:
print_r( array_keys( $vectAs ) ); // Array ( [0] => unu [1] => doi [2] => trei )
 
// returneaza toate valorile din vector:
print_r( array_values( $vectAs ) ); // Array ( [0] => one [1] => two [2] => 3 )
 
// returneaza o parte din vector
print_r( array_slice(  $vector, 3 ) ); // de la pozitia 3 pana la final: 4, 5, 6
print_r( array_slice(  $vector, 3, 2 ) ); // de la pozitia 3, doua elemente: 4, 5
print_r( array_slice(  $vector, -5, 3 ) ); // de la final inapoi 5 pozitii: 2, 3, 4
 
// foloseste cheile unui vector ca variabile:
extract( $vectAs );
print $unu; // one
print $doi; // two
print $trei; // 3
 
// sorteaza un vector
sort( $vector ); // 1, 2, 3, 4, 5, 6
rsort( $vector ); // 6, 5, 4, 3, 2, 1
asort( $vectAs ); // sorteaza valorile si mentine asocierea cheilor
 
// preluare elemente unice din vector
print_r( array_unique( $vector ) );
 
// adauga o valoare la sfarsitul unui vector
$vector[] = 7;
array_push( $vector, 8 );
# nota: cele 2 instructiuni de mai sus sunt echivalente
 
// modifica un anumit element din vector
$vectAs[ 'trei' ] = 'three';
?>