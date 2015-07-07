<?php


$a = 1;
print ($a = 1);

$b = ($a = 1);

$a == $b;
$a === $b;

$a != $b;
$a <> $b;
$a !== $b;

$a < $b;
$a <= $b;

$a > $b;
$a >= $b;

$a = 4;
$b = "4";
print "<br />";

if( $a == 4 ) print "\$a este 4";
else print "\$a nu este 4";

print "<br />";
if( $a == $b ) print "Sunt egale";
else print "Nu sunt egale";

print "<br />";
if( $a === $b ) print "Sunt identice";
else print "Nu sunt identice";

print "<br />";

if( $a > 4 ) print "\$a este mai mare decat 4";


$a = 10;
var_dump( $a = 10 );

var_dump( $a == 1 );
var_dump( $a === '1' );
if( $a == 1 ) echo 'egal';

print ( 1 == 2 ? 'egal' : 'ne-egal' );
$a = ( 1 == 2 ? 'egal' : 'ne-egal' );

print "<br />";
$a = 1;

print ++$a;

print "<br />";
$a = 1;
print $a++;
print $a;
print "<br />";
$a = 1;
print ++$a;
print $a;

print "<br />";
$a = 2;
print $a--;
print $a;
print "<br />";
$a = 2;
print --$a;
print $a;

$a = 1;

$a += 4;
$a -= 1;
$a *= 2;
$a /= 3;
$a %= 2;

$a = &$b;

$s = "Salut";
$s .= " straine!";
print "<br />";

print "Text1" . " legat de " . "Text2";
print "<br />";
$a = "Eu am";
print $a . " mere";
@print $nedefinit;
@include( "inexistent.php" );

$output = `ls -al`;
echo "<pre>$output</pre>";

$output = shell_exec('ls -al');
echo "<pre>$output</pre>";







?>