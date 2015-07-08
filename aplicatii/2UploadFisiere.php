<?php
echo '
Incarcarea unui fisier pe server se face prin intermediul formularelor. Pentru aceasta facilitate se foloseste un formular putin diferit: are un atribut special (enc-type) si metoda POST. De asemenea, trebuie sa contina un element input de tip file pentru fiecare fisier incarcat (spre exemplu, daca se incarca 2 fisiere, va fi nevoie de 2 elemente input).
Pentru ca functionalitatea de upload sa fie functioneze, trebuie indeplinite urmatoarele conditii:
directiva file_uploads din fisierul de configurari al PHP (php.ini) trebuie sa fie "on"
directiva upload_tmp_dir din php.ini trebuie sa se refere la o cale existenta pe server si cu permisiuni suficiente pentru ca web-serverul sa poata crea fisiere
directivele upload_max_filesize si post_max_size din php.ini specifica marimea maxima a fisierului si respectiv a datelor ce pot fi transmise prin intermediul formularului; este recomandat ca aceste valori sa fie revizuite
atributul enctype="multipart/form-data" NU TREBUIE omis, altfel uploadul nu va functiona
<br><br>';

echo '
Un exemplu de formular pentru upload de fisiere este mai jos:
<br>
<!-- Encoding type, exprimat de atributul enctype, TREBUIE specificat ca mai jos -->
<br>
<form enctype="multipart/form-data" action="upload.php" method="POST">
	<br>
    Incarca un fisier: <input name="fisier" type="file" />
    <br>
    <input type="submit" value="Trimite fisier" />
    <br>
</form>
<br><br>
';

echo '
Nota asupra mecanismului de upload:
<br>
atunci cand se face submit la formular, browser-ul web transmite catre server continutul fisierului
<br>
serverul web copiaza fisierul transmis intr-o locatie temporara (specificata de directiva upload_tmp_dir)
<br>
interpretorul PHP este invocat, avand variabila $_FILES populata cu informatii despre upload
<br>
programatorul este responsabil cu prelucrarea fisierului incarcat pe server (mutare intr-o alta locatie, citire, copiere, etc); prelucrarea ce se face cu ajutorul functiilor puse la dispozitie de PHP. Daca fisierul incarcat nu este mutat (sau redenumit) din locatia temporara, acesta va fi sters automat la terminarea executiei scriptului (la finalul requestului, mai exact).
';
?>