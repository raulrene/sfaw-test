<?php
print '<h1 style="background:lightgreen;">Sessions</h1>';
echo '<p style="background:lightcyan;">Sesiunile, reprezinta o functionalitate prin care anumite informatii sunt mentinute de la o pagina la alta. O sesiune dureaza atat timp cat utilizatorul acceseaza un site si se incheie odata cu inchiderea browserului. </p>';
echo '<p style="background:lightcyan;">Accesarea unei pagini web este o operatie de sine statatoare (stateless, sau fara stare). Asta inseamna ca orice accesare ulterioara a aceleiasi pagini (spre exemplu un refresh) se va face fara ca serverul "sa stie" de accesarile anterioare. La fel se intampla si atunci cand sunt accesate mai multe pagini diferite una dupa alta</p>';
echo '<p style="background:lightcyan;">In PHP o sesiune reprezinta perioada de timp in care mai multe scripturi PHP, accesate la momente diferite de timp, pot stoca si folosi informatii comune. O sesiune incepe atunci cand un script apeleaza functia <b>session_start </b>si se termina atunci cand <b>utilizatorul inchide browserul </b>(exista si alte modalitati de a porni o sesiune, dar nu sunt prea uzuale - folosirea comenzii session_start este metoda recomandata). </p>';
echo '<p style="background:lightcyan;">O sesiune se intinde pe mai multe requesturi (pe parcursul a mai multor accesari ale diferitelor pagini), iar pentru a identifica existenta unei sesiuni PHP poate folosi cookie-uri sau parametrii GET un URL-ul paginii. </p>';

echo '<h3>Mecanismul de functionare a sesiunilor</h3>';
echo '<p style="background:lightcyan;">in momentul in care un script apeleaza functia session_start pentru prima data intr-o sesiune de lucru, se transmite un cookie catre browserul clientului (un header de tipul "Set-Cookie", vezi lectia Cookie-uri). Fiind vorba de un cookie, este necesar ca functia session_start sa fie apelata inaintea oricarei instructiuni ce afiseaza ceva (print, echo, etc) si inaintea oricarui cod HTML. Cookie-ul transmis contine un identificator ce poarta numele de Session ID, pe baza caruia se poate face distinctie intre sesiunea curenta si alte sesiuni ale altor utilizatori ce acceseaza site-ul in acel moment. </p>';
echo '<p style="background:lightcyan;">In cazul in care browserul utilizatorului nu accepta cookie-uri, identificatorul de sesiune va fi transmis printr-un parametru GET, in forma script.php?PHPSESSID=[session id] (se va face practic un redirect automat la aceeasi pagina avand specificat parametrul in URL). Este apoi responsabilitatea programatorului sa includa manual acest identificator in toate celelalte link-uri de pe pagina, asigurandu-se ca toate paginile vor fi accesate cu acest parametru. Aceste situatii sunt insa rare, iar in exemplele ce urmeaza vom considera ca browserele au mereu cookie-urile activate, astfel ca nu va trebui sa avem grija sa transmitem manual Session ID-ul. </p>';
echo '<p style="background:lightcyan;">in momentul in care se acceseaza din nou aceeasi pagina, sau o alta din cadrul aceluiasi site, identificatorul de sesiune este transmis de catre browser (ca orice cookie existent in browser). Astfel, orice script PHP are acces la Session ID-ul creat initial, fiind capabil sa acceseze sesiunea corecta. Mai este nevoie de ceva insa: pentru a putea avea acces la informatiile persistate, un script trebuie sa apeleze session_start. De aceasta data, existand deja un Session ID disponibil, PHP va sti ca nu trebuie creata o sesiune noua ci continuata una existenta. Asadar, session_start are doua functionalitati: sa porneasca o sesiune noua (atunci cand nu exista un Session ID) sau sa continue o sesiune existenta, identificata printr-un Session ID. </p>';
echo '<p style="background:lightcyan;">Functiile principale de manipulare a sesiunii sunt prezentate mai jos. Exista o functie care returneaza Session ID-ul curent: session_id. Aceasta este utila cand este nevoie ca identificatorul sa fie transmis in URL. Alternativ se poate folosi constanta globala SID. De asemenea exista o functie pe permite inchiderea unei sesiuni pe parcursul executiei scriptului curent. Inchiderea sesiunii inseamna oprirea posibilitatii de a scrie/citi date, nu stergerea datelor salvate deja. Datele raman salvate si pot fi accesate din nou dupa apelarea functiei session_start. </p>';
echo '<p style="background:lightcyan;"></p>';
echo '<div style="background:yellow;">session_start();<br/> session_id();<br/>echo SID; // are acelasi efect ca instructiunea anterioara<br/>ession_write_close(); // permite inchiderea sesiunii in scriptul curent</div>';

echo '<h3>accesarea datelor</h3>'; 
echo '<p>Din momentul in care scriptul PHP apeleaza session_start, acesta poate incepe deja sa stocheze date ce vor fi persistate. In limbajul programatorilor de PHP se foloseste expresia "sa pastreze date in sesiune" sau "pe sesiune". Aceste date sunt gestionate de catre limbajul PHP (salvate, preluate, etc) si nu este esential pentru programator sa cunoasca mecanismul intern de manipulare a acestora. Poate deveni important, totusi, atunci cand se doreste definirea unui mecanism particularizat de gestionare a sesiunii, dar aceasta reprezinta o facilitate avansata a limbajului PHP care depaseste nivelul acestor lectii.</p>';
echo '<p>Salvarea datelor pe sesiune se face prin intermediul vectorului super-global $_SESSION. Exista si o functie ce permite inregistrarea datelor pe sesiune (nu si modificarea lor), dar folosirea acesteia nu este recomandata. Functia se numeste session_register si a fost marcata ca invechita in versiunea 5.3 a limbajului PHP. Citirea datelor persistate se poate realiza tot prin intermediul $_SESSION.</p>';
echo '<div style="background:yellow;">session_start();<br/><br/>
 
// inregistrarea datelor in sesiune<br/>
$_SESSION[ "text" ] = "Mesaj persistat";<br/><br/>
 
// citirea din sesiune<br/>
echo $_SESSION[ "text"];<br/><br/>
 
// pe sesiune se pot inregistra aproape orice tipuri de date<br/>
$vector = array("a", "b", "c");<br/>
$_SESSION[ "litere"] = $vector;<br/><br/>
 
// accesez o parte din vectorul stocat<br/>
echo $_SESSION[ "litere" ][0];  // afiseaza a<br/>
echo $_SESSION[ "litere" ][2];  // afiseaza c</div>';

 

 

?>