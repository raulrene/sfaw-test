<?php
 
$folder = getcwd();             // va lista folderul curent
$handle = opendir( $folder );   // deschid folderul
 
if ( !empty( $handle ) ) {
    echo "Fisiere si directoare:\n";
 
    $terminat = false;
    while ($terminat == false) {
        $file = readdir($handle);   // citesc urmatorul fisier
        if( $file === false ) {
            // atentie la operatorul de exactitate ===
            // daca nu mai sunt alte fisiere/foldere trebuie sa ies din bucla
            $terminat = true;
        } else {
            // aici pot face orice procesare, de exemplu sa redenumesc fisierul/subdirectorul
            // doar afisez numele fisierului/subdirectorului
            echo "$file\n";
            echo "<br />";
        }
    }
 
    closedir($handle);   // inchei citirea din folder
}

$output = `pwd`;
echo "<pre>$output</pre>";
# deschiderea unui fisier si citirea din el
$id_fisier = fopen("\\var\\www\\html\\sfaw-test\\notiuniDeBaza\\14GetVsPost.php", 'r');   // deschidere
fread( $id_fisier, 10 );   // citire 10 octeti din fisier
fclose($id_fisier);   // inchidere


?>