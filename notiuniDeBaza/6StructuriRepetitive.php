<?php
for( $i = 1; $i <= 10; $i++ ) {
	echo $i . " ";
}
echo "<br>";
$continua = true;
while( $continua == true ) {
	echo 'La nesfarsit', '<br>';
	$continua = false; # modific variabila de testare a conditiei
}
echo "<br>";
echo 'Acum se ajunge aici';
echo "<br>";
$vector = array(3,4,5,1,2,11);
foreach($vector as $element){
	print "$element ";
}
echo "<br>";
$vector = array( 'a', 'b', 'c', 'd', 'e', 'f' );
 
// afiseaza: a b c d e f
foreach( $vector as $cheie => $element) {
	print "$element ";
}
echo "<br>"; 
// afiseaza: 0 1 2 3 4 5
foreach( $vector as $cheie => $element) {
	print "$cheie ";
}
echo "<br>";
// vector asociativ (definit explicit cu chei)
$zile = array(
	'luni' => 'Mo',
	'marti' => 'Tu',
	'miercuri' => 'We',
	'joi' => 'Th',
	'vineri' => 'Fr',
	'sambata' => 'Sa',
	'duminica' => 'Su'
);
// afiseaza Mo Tu We Th Fr Sa Su
foreach( $zile as $eng) {
	print "$eng ";
}
echo "<br>"; 
// afiseaza si cheia si valoarea intr-un text
foreach( $zile as $rom => $eng) {
	print "$eng inseamna $rom <br />";
}
echo "<br>";
for($i = 0; $i < 10; $i++) {
	/* la toate executiile in care $i <= 5, se va "sari" peste
	 * instructiunile print; practic, dupa apelul continue, 
	 * executia "trece" la pasul urmator, crescandu-l pe $i */
	if( $i <= 5 ) {
		continue;
	}
	print $i;
	print "<br />\n";
}
echo "<br>";

?>