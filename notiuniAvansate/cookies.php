<?php
# crearea unui cookie de test care expira la sfarsitul sesiunii de lucru
setcookie("Test", 'acesta este un test');
 
# crearea unui cookie care expira intr-o ora
setcookie("Test2", 'o ora', time()+3600);
 
 
# vizualizarea cookie-urilor
if( isset( $_COOKIE[ 'Test' ] ) ) {
	echo 'Test: ', $_COOKIE[ 'Test' ], '<br>';
}
 
if( isset( $_COOKIE[ 'Test2' ] ) ) {
	echo 'Test2: ', $_COOKIE[ 'Test2' ], '<br>';
}
// Rezultat (e nevoie de refresh prima data)
// Test: acesta este un test  
// Test2: o ora  
 
 
# stergerea unui cookie se face printr-un truc: alegand o data de expirare din trecut
//setcookie("Test2", 'o ora', time()-3600); // timpul de expirare a trecut, deci cookie-ul
// nu va mai fi valid si va fi sters de catre browser
echo "<br>";

//verific numarul de vizite

$vizite = 0;
if(isset($_COOKIE['visits'])){
	$vizite = $_COOKIE['visits'];
}

//cresc nr de vizite
$vizite++;

//seterz cookie-ul ce va retine nr de vizite
setcookie('visits',$vizite,time()*2);

//afisez mesaj
echo "Ati vizitat pagina de ". $vizite . " ori";
?>