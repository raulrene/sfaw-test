<?php
echo 'Pe scurt, pentru a putea fi introduse date pe o pagina web trebuie sa existe un formular. Acesta se defineste in HTML prin tag-ul form. Un form trebuie sa aiba specificate obligatoriu 2 atribute: "action" si "method". Action reprezinta locatia unde vor fi transmise datele, reprezentata prin numele fisierul ce va prelucra requestul (de regula un fisier PHP). Acest atribut poate fi gol, specificand ca datele vor fi transmise catre acelasi script ce afiseaza formularul (fisierul curent). Method specifica metoda de acces, dupa cum este descrisa mai jos.
Formularele sunt strans legate de conceptul de "Metoda de acces" (Request Method). De fapt, in functie de modul in care se face cerinta catre server, exista doua tipuri de formuri: formulare GET si POST.';
echo '<br> <br>';
echo 'GET 
Este cea mai uzuala metoda, folosita implicit de browsere pentru a trimite cereri catre servere. Majoritatea paginilor pe care le vizualizam pe internet sunt obtinute in urma unei cereri GET. De exemplu, scrierea unui URL in bara de adrese a browserului sau accesarea unui link, sau a unei imagini, toate sunt request-uri de tip GET. 

Aceasta metoda este utilizata, asadar, pentru a "cere" o pagina de la server (in engleza "get data"). Totusi, odata cu cererea se pot transmite si mici bucati de informatii catre server. Aceste informatii transmise la momentul cererii pot fi date introduse de utilizatori (intr-un form) si sunt adaugate la finalul URL-ului sub forma "pagina.php?parametru=valoare".

POST 
Opus metodei GET, POST este folosita pentru a transmite informatii catre server (in engleza "post data"). Spre deosebire de GET care permite doar o cantitate limitata de date sa fie transmisa de la client (browser) la serverul web, POST dispune de limite mai generoase, fiind standardul de transmitere a datelor. Astfel, upload-ul unui fisier pe server, salvarea unui post pe blog, etc - toate sunt requesturi de tip POST.';
?>