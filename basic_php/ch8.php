<?php
 echo '<h1>Arrays</h1>';
 echo '<p>Operatiile clasice de cautare, sortare, inserare, etc se pot realiza foarte usor cu ajutorul <b>functiilor specializate</b>, fara sa fie necesara parcurgerea manuala a vectorilor</p>';

$vector = array( 1, 2, 3, 4, 5, 6 );
$vectAs = array(
	'unu' => 'one',
	'doi' => 'two',
	'trei' => 3
);
echo '<pre>';
print_r($vector);
var_dump($vector);
print_r($vectAs);
var_dump($vectAs);
 
 
// lungimea unui vector (numarul de elemente) 
echo '<p>Array length--<b>count()</b></p>';
print count( $vector ); // 6
echo '<hr/>';
echo '<p>Array find value--<b>in_array()</b>></p>'; 
// se gaseste o valoare in vector?
print in_array( 3, $vector ); // true
 echo '<hr/>';
 echo '<p>finding specific key--<b>array_key_exists()</b></p>';
// exista o anumita cheie in vector?
print array_key_exists( 'trei', $vectAs ); // true
 echo '<hr/>';
  echo '<p>return array keys--<b>array_keys()</b></p>';
// returneaza toate cheile din vector:
print_r( array_keys( $vectAs ) ); // Array ( [0] => unu [1] => doi [2] => trei )
echo '<hr/>'; 
echo '<p>return array values--<b>array_values()</b></p>';
// returneaza toate valorile din vector:
print_r( array_values( $vectAs ) ); // Array ( [0] => one [1] => two [2] => 3 )
echo '<hr/>'; 
echo '<p>return array part--<b>array_slice()</b></p>';
// returneaza o parte din vector
print_r( array_slice(  $vector, 3 ) ); // de la pozitia 3 pana la final: 4, 5, 6
echo '<hr/>';
print_r( array_slice(  $vector, 3, 2 ) ); // de la pozitia 3, doua elemente: 4, 5
echo '<hr/>';
print_r( array_slice(  $vector, -5, 3 ) ); // de la final inapoi 5 pozitii: 2, 3, 4
echo '<hr/>';
echo '<p>using array key as variable</p>'; 
// foloseste cheile unui vector ca variabile:
extract( $vectAs );
print $unu; // one
echo '<hr/>';
print $doi; // two
echo '<hr/>';
print $trei; // 3
echo '<hr/>'; 
echo '<p>sorting arrays--<b>sort(),rsort(),asort(),ksort(),krsort()</b></p>';
// sorteaza un vector
sort( $vector ); // 1, 2, 3, 4, 5, 6
rsort( $vector ); // 6, 5, 4, 3, 2, 1
asort( $vectAs ); // sorteaza valorile si mentine asocierea cheilor
 echo '<hr/>';
 echo '<p>finding unique values in array--<b>array_unique()</b></p>';
// preluare elemente unice din vector
print_r( array_unique( $vector ) );
echo '<hr/>';
  echo '<p>adding an element to the end of the array--<b>array_push()</b></p>';
// adauga o valoare la sfarsitul unui vector
$vector[] = 7;
array_push( $vector, 8 );
# nota: cele 2 instructiuni de mai sus sunt echivalente
 
// modifica un anumit element din vector
$vectAs[ 'trei' ] = 'three';


?>

