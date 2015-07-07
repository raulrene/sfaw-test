<?php
$vector = array();
$n = 10;



for( $i = 1; $i <= $n; $i++) {


    $vector[ $i ] = "php$i";
}

print_r( $vector );

print "<br />";

$links = array(
    'www.punctsivirgula.ro',
    'php.punctsivirgula.ro',
    'php.punctsivirgula.ro?despre',
    'php.punctsivirgula.ro?legal'
);

$n = count( $links );

echo '<ul>';
for( $i = 0; $i < $n; $i++ ) {
    echo <<<LINK
	  <li>
	    <a href="http://{$links[ $i ]}" title="{$links[ $i ]}">{$links[ $i ]}</a>
	  </li>
LINK;
}
echo '</ul>';
print "<br />";
$end = 100;

print "<select>";
for( $i = 1; $i <= $end; $i++ ) {
    print "<option value=\"$i\">$i</option>\n";
}
print "</select>";

print "<br />";

$countries = array(
    'AF'=>'Afghanistan',
    'AL'=>'Albania',
    'DZ'=>'Algeria',
    'AS'=>'American Samoa',
    'AD'=>'Andorra',
    'AO'=>'Angola',
    'AI'=>'Anguilla',
    'AQ'=>'Antarctica',
    'AG'=>'Antigua And Barbuda',
    'AR'=>'Argentina',
    'AM'=>'Armenia',
    /* ... */
    'WS'=>'Western Samoa',
    'YE'=>'Yemen',
    'YU'=>'Yugoslavia',
    'ZM'=>'Zambia',
    'ZW'=>'Zimbabwe'
);



echo '<select name="tara">', "\n";
foreach( $countries as $code => $name ) {
    echo '<option value="', $code, '">', $name, '</option>', "\n";
}
echo "</select>\n";

print "<br />";

$vector = array( 3, 4, 5, 1, 2, 9, 76, 42, 2, 9, 6, 0, 4, 1, 10 );



$gasit = false;
$pozitie = 0;
while( !$gasit ) {
    if( $vector[ $pozitie ] == 0 ) {
        $gasit = true;
        print "Am gasit 0 pe pozitia $pozitie";
    }


    $pozitie++;



    if( $pozitie == count( $vector ) ) {
        $gasit = true;
        print "Nu am gasit 0 in vectorul asta";
    }
}
print "<br />";
$vector = array( 3, 4, 5, 1, 2, 9, 76, 42, 2, 9, 6, 0, 4, 1, 10 );

$pozitie = array_search(0, $vector );

if( $pozitie === false ) print "Nu am gasit 0 in vectorul asta";
else print "Am gasit 0 pe pozitia $pozitie";

print "<br />";

//$emails = $_POST['email'];//

$emails = array( 'ok@test.com', 'zzz', 'test@site', 'test@test.com', 'aaa' );

$gasitInvalid = false;

$n = count( $emails );

$i = 0;

while( $gasitInvalid == false && $i < $n ){
    if( strpos( $emails[ $i ], '@' ) === false ||
        strpos( $emails[ $i ], '.' ) === false ) {

        $gasitInvalid = true;
        echo 'Am gasit un email invalid: ', $emails[ $i ], '<br />';


    }
    $i++;
}

if( !$gasitInvalid ) echo 'Toate email-urile sunt valide!<br />';