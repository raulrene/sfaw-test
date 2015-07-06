<?php
// data curenta
print date( 'd.m.Y H.i.s' ); // 06.07.2015 14.58.48 
print "<br>";
// data in format Unix (UNIX timestamp)
print time(); // 1436183928 
print "<br>";
// alegerea unui fus orar
date_default_timezone_set( 'Europe/Bucharest' );
 
// parsarea unei date
print strtotime("now");
print "<br>";
print strtotime('1st January 2004'); //1072915200
print "<br>";
?>