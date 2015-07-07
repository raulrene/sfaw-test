<?php
function afisLuna()
{
    $luni = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
        'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
    echo '<select>';
    for( $i = 0; $i < 12; $i++ ) {

        echo "<option>{$luni[ $i ]}</option>\n";
    }
    echo '</select>';
}


echo 'Luna inceperii activitatii: ';
afisLuna();

echo '<br /><br />Luna terminarii activitatii: ';
afisLuna();

print "<br />";

function unu() {
    print 'Azi suntem in intai!<br />';
}

function alta() {
    print 'Azi e o zi obisnuita<br />';
}


$functie = 'unu';


if( date( 'd' ) == 7 ) $functie = 'unu';
else $functie = 'alta';



if( function_exists( $functie ) && is_callable( $functie ) ) {
    call_user_func( $functie );
} else {
    echo "Nu pot apela functia $functie";
}

$a = "Afara e frumos";

print "<br />";
function afisMesaj() {

    global $a;
    echo $a;
}

afisMesaj();

print "<br />";
function formatareData() {
    $rezultat = date( 'd-m-Y' );
    return $rezultat;
}


$azi = formatareData();
print formatareData();
print "<br />";

function minim($a, $b) {
    if( $a < $b ) return $a;
    else return $b;
}

print minim( 3, 4 );

$a = 1 + minim( 4, 3 );

if( minim( $a, 4 ) > 5 ) { echo "If-ul este True"; }
else { echo "If-ul este False"; }
print "<br />";

