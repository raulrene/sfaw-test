<?php
echo '<h1>GET vs POSt</h1>';

echo '<h3>GET</h3>';
echo '<p>Datele transmise catre server prin GET apar la finalul URL-ului, asa cum au fost introduse; acest lucru ar putea fi un dezavantaj cand este vorba de date senzitive, dar ajuta la modificarea usoara a datelor pentru retrimitere</p>';
echo '<p>Cantitatea de date GET depinde de lungumea maxima permisa a URL-ului, care in Internet Explorer este de 2 083 caractere. Asadar prin GET nu se pot transmite prea multe date
Rezultatul unui request GET poate fi preluat din cache-ul browser-ului sau al proxy-ului web. Trebuie ca URL-ul sa fie diferit la fiecare request nou pentru a fi siguri ca datele reale sunt preluate</p>';
echo '<p>Caracterele speciale pot fi codificate folosind atributul enc-type al formularului; dezavantajul este ca aceasta codificare va reduce cantitatea de date ce pot fi transmise</p>';
echo '<p>Rezultatul unui request GET poate fi preluat din cache-ul browser-ului sau al proxy-ului web. Trebuie ca URL-ul sa fie diferit la fiecare request nou pentru a fi siguri ca datele reale sunt preluate</p>';
echo '<p>In PHP, elementele formularului sunt disponibile prin intermediul variabilei globale $_GET (sau prin $_REQUEST)</p>';
echo '<h3>POST</h3>';
echo '<p>Cantitatea de date ce poate fi transmisa prin POST poate fi restrictionata doar de catre serverul web, desi nu exista o limitare reala</p>';
echo '<p>Datele transmise prin POST nu apar in URL si nu pot fi alterate usor, ceea ce ofera un oarecare grad de securitate</p>';
echo '<p>In mod implicit, datele preluate prin POST nu sunt puse in cache-ul de la browser sau proxy-server; astfel folosind aceasta metoda vor fi afisate intotdeauna datele reale</p>';
echo '<p>Codificarea caracterelor speciale se poate realiza ca si la GET folosind atributul enc-type al formularului (application/x-www-form-urlencoded); avantajul este ca nu exista limitari de cantitate a datelor</p>';
echo '<p>In PHP, elementele formularului sunt disponibile prin intermediul variabilei globale $_GET (sau prin $_REQUEST)</p>';

echo '<h3>Pe langa considerentele de mai sus, trebuie avuta in vedere si o recomandare generala: GET ar trebui folosit pentru operatiile care nu modifica nimic pe server, in timp ce POST ar trebui folosit pentru operatiile de modificare/actualizare/stergere. </h3>';

echo '<p>In practica metoda POST se foloseste la formulare de inregistrare/login, formulare de contact sau de plati online, formulare de upload si altele, in timp ce metoda GET este folosita pentru formulare simple de confirmare, de cautare, de abonare/dezabonare la un newsletter, s.a.
</p>';
?>