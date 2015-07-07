<?php
session_start();
 
echo session_id();
echo "<br>"; 
echo SID; // are acelasi efect ca instructiunea anterioara
echo "<br>"; 

// inregistrarea datelor in sesiune
$_SESSION[ 'text' ] = 'Mesaj persistat';
 
// citirea din sesiune
echo $_SESSION[ 'text' ];
echo "<br>"; 
 
// pe sesiune se pot inregistra aproape orice tipuri de date
$vector = array('a', 'b', 'c');
$_SESSION[ 'litere' ] = $vector;
 
// accesez o parte din vectorul stocat
echo $_SESSION[ 'litere' ][0];  // afiseaza a
echo "<br>"; 
echo $_SESSION[ 'litere' ][2];  // afiseaza c
echo "<br>"; 

session_write_close(); // permite inchiderea sesiunii in scriptul curent
?>