<?php
$id_fisier = fopen("c:\\fisier.txt", 'r');
fread( $id_fisier, 10 );
fclose($id_fisier);


$id_fisier = fopen("c:\\fisier.txt", 'w');
fwrite( $id_fisier, 'Text nou in fisier' );
fclose($id_fisier);


$id_fisier = fopen("c:\\fisier.txt", 'a');
fwrite( $id_fisier, 'Text adaugat in fisier' );
fclose($id_fisier);


$continut = file_get_contents( "c:\\fisier1.txt" );


$continut = $continut . ' -- Text adaugat de PHP';

file_put_contents( "c:\\fisier2.txt", $continut );


file_put_contents( "c:\\fisier3.txt", '11' );




$linii = file( "c:\\fisier4.txt" );

echo 'Linia a 3a din fisier este: ', $linii[ 2 ];

copy ("c:\\fisier1.txt", "c:\\fisiernou.txt");

$folder = getcwd();             // va lista folderul curent
$handle = opendir( $folder );   // deschid folderul

if ( !empty( $handle ) ) {
    echo "Fisiere si directoare:\n";

    $terminat = false;
    while ($terminat == false) {
        $file = readdir($handle);
        if( $file === false ) {

            $terminat = true;
        } else {

            echo "$file\n";
            echo "<br />";
        }
    }

    closedir($handle);  
}


?>




