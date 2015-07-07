<?php
if( 2 < 4 ) print "2 e mai mic decat 4 <br />";

if( 3 > 1 ) {
    print "3 e mai mare ca 1 \n";
    print "<br />";
}

echo "Este 3 mai mic decat 2? <br />\n";
if( 3 < 2 )
    print "Da, 3 < 2 - prima linie <br />";
print "Da, 3 < 2 - a doua linie <br />";
print "<br />";

echo "Este 3 mai mic decat 2? <br />\n";
if( 3 < 2 ) {
    print "Da, 3 < 2 - prima linia <br />";
    print "Da, 3 < 2 - a doua linie <br />";
}

print "<br />";

echo "Este 3 mai mic decat 2? <br />\n";
if( 3 < 2 ) {
    print "Da, 3 < 2 - prima linia <br />";
    print "Da, 3 < 2 - a doua linie <br />";
} else {
    print "Nu, 3 > 2 - prima linia <br />";
    print "Nu, 3 > 2 - a doua linie <br />";
}

print "<br />";

$var = 3;


switch( $var ) {
    case 0:
        print 'zero';
        break;
    case 1:
        print 'unu';
        break;
    case 2:
        print 'doi';
        break;
    case 3:
        print 'trei';
        break;
    case 4:
        print 'patru';
        break;
    case 5:
        print 'cinci';
        break;
}

echo "\n", 'Gata!';
print "<br />";
$numar = 2;


switch( $numar ) {
    case 0:
        print 0;
    case 1:
        print 1;
    case 2:
        print 2;
    case 3:
        print 3;
    case 4:
        print 4;
    case 5:
        print 5;
}

echo "\n", 'Gata!';

?>