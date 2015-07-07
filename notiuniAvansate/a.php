<?php
 
// a.php
session_start(); // pornesc sesiunea pentru a putea stoca o variabila
 
$_SESSION[ 'text' ] = 'Mesaj de pe prima pagina';
 
echo '<a href="b.php">Mergeti la pagina urmatoare</a>';
 
?>