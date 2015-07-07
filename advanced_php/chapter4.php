<?php
echo '<h1 style="background:lightgreen;">Files</h1>';
echo '<p style="background:magenta;">Fisierele sunt colectii de informatii stocate pe un dispozitiv de stocare (hard-disk, CD, etc). In functie de formatul datelor continute fisierele se impart in doua categorii: fisiere text si fisiere binare. </p>';
echo '<p style="background:magenta;">Fisierele text sunt cele care contin text simplu ce poate fi citit, reprezentat si modificat de catre oricine si de catre orice secventa de cod. Spre exemplu, un fisier cu extensia .txt, creat cu un utilitar cum este Notepad, este cel mai definitoriu tip de fisier text. Un alt exemplu este un cod-sursa PHP salvat intr-un fisier. Desi codul sursa PHP are o anumita structura si poate fi interpretat intr-un anumit mod, el este la baza un fisier text, ce poate fi citit de oricine (orice om). De asemenea continutul sau poate fi modificat oricand, fie de un om, fie de un program. </p>';
echo '<p style="background:magenta;">Fisierele binare sunt acele fisiere ce contin secvente de text intr-un anumit format si cu o structura specifica inteleasa doar de un calculator (de o anumita secventa de cod). Un exemplu de fisier binar este o imagine (fisier cu extensia .jpg) sau o melodie (fisier cu extensia .mp3). Desi acestea pot fi vizualizate cu un editor de texte, ca Notepad, continutul lor nu poate fi modificat de oricine (cel putin nu fara a corupe fisierul). Fisierele binare sunt utile pentru ca pot contine orice tip de date, cu orice structura se doreste. Avantajul este ca prin intermediul fisierelor binare si pot crea formate proprietare, care permit modificarea continutului fisierelor doar de anumite programe. Spre exemplu, fisiere PDF pot fi create/vizualizate doar cu anumite aplicatii, la fel si documentele Word, s.a. </p>';
echo '<p style="background:magenta;"> In orice limbaj de programare, si deci si in PHP, cand se lucreaza cu fisiere trebuie efectuate urmatoarele operatiuni:

    <br/>* deschiderea fisierului
    <br/>*citirea din fisier/scrierea in fisier
    <br/>*inchiderea fisierului
</p>';
echo "<p style='background:yellow;'>
 
# deschiderea unui fisier si citirea din el
<br/>$id_fisier = fopen('c:\\folder\\fisier.txt', 'r');   // deschidere
<br/><b>fread( $id_fisier, 10 )</b>;   // citire 10 octeti din fisier
<br/><b>fclose($id_fisier)</b>;   // inchidere
 
<br/><br/> 
# deschiderea unui fisier, stergerea continutului si scrierea in el
<br/>$id_fisier = fopen('c:\\folder\\fisier.txt', 'w');   // deschidere
<br/><b>fwrite( $id_fisier, 'Text nou in fisier' )</b>;
<br/><b>fclose($id_fisier)</b>;   // inchidere
 <br/><br/>
 
# deschiderea unui fisier si scrierea la sfarsitul lui
<br/>$id_fisier = fopen('c:\\folder\\fisier.txt', 'a');   // deschidere
<br/><b>fwrite( $id_fisier, 'Text adaugat in fisier' )</b>;
<br/><b>fclose($id_fisier)</b>;   // inchidere
</p>";
echo '<p style="background:magenta;">Pentru simplificarea codului de citire/scriere a unui fisier in situatii generale, PHP ofera cateva functii foarte convenabile: <b>file_get_contents</b>, <b>file_put_contents</b> si <b>file</b>. Primele doua, dupa cum si numele spune, permit preluarea intregului continut al unui fisier si punerea lui intr-o variabila string, printr-un singur apel, respectiv crearea unui fisier care sa contina valoarea unei variabile (exemple mai jos). Cea de-a treia functie permite crearea unui vector ce are ca elemente liniile fisierului specificat. De exemplu, un fisier cu 3 linii va genera un vector cu 3 elemente, fiecare element reprezentant o linie din fisier. </p>';
echo '<p style="background:magenta;">Este important de mentinut ca odata citit continutul fisierului (cu file_get_contents si file) variabilele se "deconecteaza" de fisier, adica orice modificare facuta asupra variabilei nu se reflecta si asupra fisierului, cele 2 entitati fiind separate. </p>';
echo '<p style="background:yellow;">
// pun tot continutul fisierului intr-o variabila
$continut = file_get_contents( "fisier.txt" );
 <br/>
// in acest moment tot continutul este stocat in variabila $continut <br/> <br/> <br/>
// pot procesa continutul sau il pot modifica <br/> <br/>
 
// adaug ceva la final <br/>
// Nota: modificarea se face doar in variabila $continut, nu si in fisier <br/>
$continut = $continut . "" -- Text adaugat de PHP"; <br/> <br/>
 
// la final salvez variabila $continut intr-un al doilea fisier <br/>
file_put_contents( "fisier2.txt", $continut ); <br/> <br/>
 
// creea un alt fisier care contine 2 cifre doar <br/> <br/> <br/>
file_put_contents( "fisier3.txt", "11" ); <br/> <br/>
 
 
 
// din continutul unui fisier creez un vector format din liniile fisierului <br/>
$linii = file( "fisier4.txt" ); <br/> <br/>
 
echo "Linia a 3a din fisier este: ", $linii[ 2 ]; <br/>
</p>';
echo '<p style="background:magenta;"></p>';
echo '<p style="background:magenta;"></p>';
echo '<p style="background:magenta;"></p>';

?>