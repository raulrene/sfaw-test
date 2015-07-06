<?php 
//Variabilele sunt elemente ce au o anumita valoare la un moment dat. Valoare unei variabile se poate schimba de-a lungul executiei unui script. 
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
echo '<hr/>';
/*Atribuirea de valori

Se realizeaza la fel ca si declararea prin intermediul instructiunii de atribuire.
*/

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

//stergerea variabilelor
echo '<hr/>';
unset($var);
$var = null;

//afisare variabile

//echo
//print
//print_r -- prints array or object data  
//var_dump  prints data type and data length 

//serialize variables
//changing var content stock into a text file 
$variabila = array("componenta1", 2, 3);
$ser = serialize($variabila);
 
echo $ser, "\n"; // afiseaza a:3:{i:0;s:11:"componenta1";i:1;i:2;i:2;i:3;}
 
$des = unserialize($ser);
print_r($des);  // afiseaza vectorul initial

//Diferenta dintre ghilimele simple si duble la declararea variabilelor
//Ghilimelele duble permite compilatorului sa "citeasca" variabilele ce apar in interiorul textului. 

/*
==  isset ==  verifica daca variabila a fost definita, 
== empty  ==  verifica daca a fost definita si daca are o valoare considerata vida. 
O variabila este vida daca are urmatoarele valori:
    "" (text de lungime 0)
    0 (cifra 0)
    "0" (textul "0")
    null
    false
    array() (vector gol)

Nota: pentru valorile de mai sus, empty returneaza true
*/

//Dubla indirectare ($$nume)
//Limbajul PHP permite referirea la numele unei variabile printr-o alta variabila.
$masina = "dacia";
$obj = "masina";
echo $$obj; 
echo '<hr/>';


?>