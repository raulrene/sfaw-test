<?php
echo '<h1>Headers</h1>';
echo '<p>Headerele sunt elemente prin care browser-ul si serverul web comunica in fundal pentru a afisa o pagina web in bune conditii.</p>';
echo '<p>Exista 2 tipuri de headere: cele emise de browser (headere de request) si cele emise de server (headere de raspuns). </p>';

echo '<h3>Request headers</h3>';
echo '<p>De fiecare data cand un utilizator acceseaza o pagina web, browserul trimite catre server cantitati mici de date, sub forma request headers </p>';
echo '<p>cuprind detalii despre pagina care a fost solicitata, modul de transfer a ei, precum si informatii despre capabilitatile browser-ului.  </p>';
echo '<p> Headerele sunt trimise de browser in mod implicit, utilizatorul nu trebuie sa faca ceva anume pentru asta. De asemenea, headerele nu pot fi (usor) modificate inainte de a fi trimise. </p>';

echo '<h3>Response headers</h3>';
echo '<p>In raspuns la request headers primite de la browsere, serverele web trimit inapoi 2 tipuri de informatie:  </p>';
echo '<p>**response headers </p>';
echo '<p>**continutul efectiv al paginii solicitate (continut ce poate fi construit/modificat prin intermediul PHP) </p>';

echo '<p> PHP ofera posibilitatea modificarii headerelor de raspuns prin intermediul functiei <b>header</b>.</p>';
echo "
# trimiterea unui semnal (Not-Found, Status OK, etc)<br/>
header( 'HTTP/1.0 404 Not Found' );  // spune browserului sa afiseze un mesaj de eroare<br/>
header( 'HTTP/1.0 200 OK' );  // anunta ca pagina exista si va fi trimisa catre browser<br/>
 
# redirectionare - 'spune' browserului sa 'mearga' la alta adresa<br/><br/>
header( 'Location: http://www.punctsivirgula.ro/' );<br/>
 
# specificarea tipului paginii ce se va afisa - in urma acestor apeluri, browser-ul va<br/>
# astepta alte tipuri de continut decat pagini HTML<br/>
header( 'Content-type: application/pdf' ); // browserul va astepta sa fie trimis un PDF<br/>
header( 'Content-type: text/css' ); // fisier css

";
?>