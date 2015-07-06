<?php
echo '<h1>Superglobals</h1>';
echo '<p>HP dispune de cateva variabile implicite. Acestea sunt pre-populate de PHP in momentul executiei, deci nu trebuie definite sau initializate. Sunt disponibile in orice portiune a codului si in orice script PHP si pot fi folosite fara sa fie nevoie de alte pregatiri. Anumite variabile (ca de exemplu $_POST) au valori doar in anumite situatii (spre exemplu, doar atunci cand sunt folosite formulare). </p>';

echo '<h3>$_GET</h3>';
echo '<p>associative array that contains url or form sent parameters</p>';

echo '<h3>$_POST</h3>';
echo '<p>only form sent parameters</p>';

echo '<h3>$_REQUEST</h3>';
echo '<p>inglobeaza post si get</p>';

echo '<h3>$_SERVER</h3>';
echo '<p>Furnizeaza informatii despre server, pagina ceruta si utilizatorul care acceseaza pagina.</p>';
echo '<pre>';
print_r( $_SERVER );

echo '<h3>$_ENV</h3>';
echo '<p>fiseaza informatii despre mediul curent in care este instalat si ruleaza interpretorul PHP, despre scriptul curent, etc</p>';

echo '<h3>$_COOKIE</h3>';
echo '<p>fFolosita pentru a vedea elementele de tip Cookies de la site-ul/pagina curenta, disponibile pe calculatorul utilizatorilor - vezi lectia Cookies pentru detalii.</p>';
 
echo '<h3>$_FILES</h3>';
echo '<p>Folosita la incarcarea fisierelor pe server (file uploads) - vezi lectia File upload pentru mai multe detalii</p>'; 

echo '<h3>Predefined Constants</h3>';

echo '<p>In PHP exista o serie de constante ce pot fi folosite in orice moment. Ca si in cazul vectorilor superglobali, acestea sunt populate de catre interpretorul PHP si sunt disponibile in toate fisierele sursa.</p>'; 
echo '<h3>PHP_EOL</h3>';
echo '<p>i contine caracterul new-line ce poate fi afisat pentru a formata rezultatul unui script pe mai multe linii.</p>'; 
    echo "Linia 1", PHP_EOL, "Linia 2";
    // alternativ se poate folosi \n, desi cele 2 nu sunt mereu echivalente
    echo "Linia 1", "\n", "Linia 2";
echo '<h3>TRUE, FALSE</h3>';
echo '<p>constantele de tip boolean ce pot fi folosite la testele din instructiunea if</p>';
   
echo '<h3>NULL</h3>';
echo '<p>referinta nula, utila in "stergerea" unei variabile</p>';

echo '<h3>PHP_OS</h3>';
echo '<p>contine identificatorul sistemului de operare pe care ruleaza interpretorul PHP</p>'; 

echo '<h3>PHP_VERSION</h3>';
echo '<p>contine versiunea completa a interpretorului</p>';

echo '<h3>DEFAULT_INCLUDE_PATH</h3>';
echo '<p>contine locatiile unde sunt cautate scripturile atunci cand sunt incluse cu include sau require; de obicei, aceasta constanta contine directorul curent si alte cateva locatii</p>';    

echo '<h3>E_ERROR, E_WARNING</h3>';
echo '<p>contin codurile diverselor tipuri de erori ce pot sa apara</p>';   

echo '<h3>Constante magice </h3>';
echo '<p>imbajul PHP dispune de o serie de expresii numite "constante magice" care au valori diferite in functie de anumiti parametri 
	(cum ar fi momentul si codul-sursa in care sunt folosite). Denumirea de "constanta" este improprie, pentru ca, asa cum stiti deja, o constanta nu-si poate schimba valoarea. Nici "variabile" nu pot fi numite deoarece nu au nevoie de declarare sau initializare, asa ca s-a recurs la un compromis: denumirea "constante magice" (magic constants).

Cele mai uzuale sunt __LINE__, __FILE__, __FUNCTION__ si __CLASS__. Mai noile __DIR__, __METHOD__, __NAMESPACE__ sau __TRAIT__ sunt mai rar folosite datorita faptului ca au nevoie de o versiune mai noua a interpretorului PHP (cel putin versiunea 5.0 sau chiar 5.4)
</p>';
echo '<h3> LINE</h3>';
echo '<p>Returneaza linia curenta a scriptului PHP.</p>';
    echo __LINE__; // 187
echo '<h3>FILE</h3>';
echo '<p>Contine calea completa catre scriptul PHP care se executa. Daca este folosita intr-un fisier inclus atunci numele acestui fisier este returnat.</p>';
    echo __FILE__; // numescript.php

echo '<h3>FUNCTION</h3>';
echo '<p>Returneaza numele functie din interiorul careia se foloseste constanta.</p>';   

echo '<h3> CLASS</h3>';
echo '<p>returneaza numele clasei curente.</p>';

echo '<h3> DIR</h3>';
echo '<p>Contine numele directorului in case este salvat scriptul curent. Aceasta constanta este echivalenta cu dirname(__FILE__).</p>';  
echo '<h3>METHOD</h3>';
echo '<p>Contine numele metodei de clasa din care se foloseste constanta. Se poate folosi numai cu clase.</p>';
   
echo '<h3>NAMESPACE</h3>';
echo '<p>Contine numele spatiului de lucru curent (name-space).</p>';

echo '<h3>TRAIT</h3>';
echo '<p>Contine numele trasaturii curente (trait)</p>';     
?>