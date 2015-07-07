<?php
echo'
GET
Datele transmise catre server prin GET apar la finalul URL-ului, asa cum au fost introduse; acest lucru ar putea fi un dezavantaj cand este vorba de date senzitive, dar ajuta la modificarea usoara a datelor pentru retrimitere
Cantitatea de date GET depinde de lungumea maxima permisa a URL-ului, care in Internet Explorer este de 2 083 caractere. Asadar prin GET nu se pot transmite prea multe date
Rezultatul unui request GET poate fi preluat din cache-ul browser-ului sau al proxy-ului web. Trebuie ca URL-ul sa fie diferit la fiecare request nou pentru a fi siguri ca datele reale sunt preluate
Caracterele speciale pot fi codificate folosind atributul enc-type al formularului; dezavantajul este ca aceasta codificare va reduce cantitatea de date ce pot fi transmise (ex. 3 caractere japoneze sunt reprezentate cu ajutorul a 42 caractere normale: %26%2312454%3B%26%2312455%3B%26%2312502%3B)
In PHP, elementele formularului sunt disponibile prin intermediul variabilei globale $_GET (sau prin $_REQUEST)
<br><br>
POST
Cantitatea de date ce poate fi transmisa prin POST poate fi restrictionata doar de catre serverul web, desi nu exista o limitare reala
Datele transmise prin POST nu apar in URL si nu pot fi alterate usor, ceea ce ofera un oarecare grad de securitate
In mod implicit, datele preluate prin POST nu sunt puse in cache-ul de la browser sau proxy-server; astfel folosind aceasta metoda vor fi afisate intotdeauna datele reale
Codificarea caracterelor speciale se poate realiza ca si la GET folosind atributul enc-type al formularului (application/x-www-form-urlencoded); avantajul este ca nu exista limitari de cantitate a datelor
In PHP, elementele formularului sunt disponibile prin intermediul variabilei globale $_POST (sau prin $_REQUEST)
Pe langa considerentele de mai sus, trebuie avuta in vedere si o recomandare generala: GET ar trebui folosit pentru operatiile care nu modifica nimic pe server, in timp ce POST ar trebui folosit pentru operatiile de modificare/actualizare/stergere.
Spre exemplu, atunci cand se face o cautare intr-o baza de date si (doar) se afiseaza niste rezultate, ar trebui folosit un formular GET. De asemenea, cand se realizeaza verificari ce nu au ca efect modificarea bazei de date sau a vreunui fisier de pe server, se poate folosi tot GET. Atunci cand, in schimb, trebuie facute modificari se recomanda folosirea metodei POST.
Mai mult decat atat, pentru a evidentia tendinta de folosire a POST pentru modificari de date, browserele afiseaza o avertizare cand se incearca reimprospatarea (refresh-ul) paginilor aceesate prin POST. Astfel, se cere confirmarea utilizatorului ca datele introduse sa fie trimise din nou catre server. Aceasta confirmare este necesara pentru a evita efectuarea unor tranzactii (cum ar fi plati on-line) de doua sau mai multe ori.
'
?>