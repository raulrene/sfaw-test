<?php
/*

Sirurile de caractere sunt bucati de text, bine delimitate, folosite in codul-sursa pentru diferite scopuri. PHP prezinta particularitati in modul in care sunt folosite string-urile, dupa cum se poate vedea in exemplele de mai jos.

Important! Sirurile de caractere sunt expresii (entitati ce au si returneaza o valoare). Asadar, un string poate fi folosit, pe langa, afisare, in atribuiri, la verificari, etc. In exemplele ce urmeaza s-a optat pentru afisarea sirurilor.

Siruri de caractere delimitate de ghilimele duble

Sirurile delimitate prin ghilimele duble au particularitatea ca pot interpreta variabilele si caracterele speciale din interiorul lor. Astfel, la evaluarea textului, variabilele existente in interiorul lui sunt inlocuite cu valoarea lor iar rezultatul final este returnat.
*/

$a = "valoarea variabilei"; // definesc o variabila
print "Textul definit cu ghilimele contine $a"; 
 
echo '<br/>';
//O alta particularitate a acestor siruri o reprezinta folosirea backslash-ului (caracterul \). Acesta are o functie speciala de marcare a anumitor caractere care nu pot fi incluse in mod normal intr-un text (din cauza ca sunt ele insele caractere speciale). Din acest motiv backslash-ul poarta numele de escape character.

print "Ma numesc \"Alex\"!"; // sir ce contine ghilimele, se foloseste \" pentru a afisa ghilimele
 echo '<br/>';
print "Text afisat pe 3 linii: \n linia 2 si \n linia3";
// atentie, textul e afisat pe 2 linii in sursa HTML cu ajutorul caracterului \n  (new-line) 
// pentru verificare vizualizati sursa paginii (alegeti "View Source" din browser) 
echo '<br/>'; 
print "Am castigat \$30 :D"; // caracterul dolar are un statut aparte (marcheaza variabilele) 
// pentru a afisa semnul $ asa cum este se foloseste \$
 echo '<br/>';
print "Text cu \\backslash\\."; // intrucat backslash \ este un caracter special el 
// poate fi afisat ca atare intr-un text doar daca este dublat
 echo '<br/>';
// daca e folosit doar un singur \ PHP ar trata textul diferit:
print "Text fara \backslash\- \nu se afiseaza corec\t.";
 echo '<br/>';
//Siruri de caractere delimitate de ghilimele simple
//Sirurile delimitate prin ghilimele simple nu permit interpretarea variabilelor continute si nici a caracterelor speciale cu exceptia \' si \\

$a = 'valoarea variabilei'; // definesc o variabila
print 'Textul definit cu ghilimele contine $a'; // Textul definit cu ghilimele contine $a
 
print 'Porecla ta e Kelu\' ?'; // sir delimitat de ghilimele simple ce contine un apostrof
echo '<br/>';
print 'Text cu backslash \\'; // sir delimitat de ghilimele simple ce contine un backslash
echo '<br/>'; 
print 'Alte escape chars nu sunt interpretate \n \t \b'; // textul este afisat ca atare
echo '<br/>';

//Siruri de caractere delimitate cu notatia speciala <<<
//Aceste siruri de caractere au avantajul ca nu necesita marcarea (escaparea) delimitatorilor prin \' sau \". In rest, aceste stringuri sunt tratate in acelasi mod ca cele delimitate de ghilimele duble, in sensul ca permit interpretarea variabilelor si a altor caractere speciale.

$a = 'valorii lor'; // definesc o variabila
/* 
print <<<TXT
Text pe mai multe linii. <br />
Delimitatorii pot avea orice nume: TXT, START, etc, cu urmatoarele conditii: <br />
- ambii delimitatori (de inceput si sfarsit) trebuie sa aiba acelasi nume
- inainte de primul delimitator se foloseste <<<
- delimitatorul de inceput nu trebuie sa fie urmat de spatiu sau alt caracter (important!)
- delimitatorul de final sa fie la inceputul liniei (fara spatii inainte)
- dupa delimitatorul final se pune punct si virgula ;
- pot contine ghilimele " sau apostrof ' fara nevoia de a le escapa
- permit interpretarea variabilelor si afisarea $a
TXT;
*/

/*In versiunile mai noi de PHP (de la 5.3.0) a fost introdusa posibilitatea de a defini siruri prin 
notatia speciala <<< fara a interpreta variabilele continute. Exemplul de mai jos foloseste un sir astfel definit (vezi diferenta la delimitatorul de inceput).
</p>
$a = 'valoarea'; // definesc o variabila
 
print <<<'TXT'
Incepand cu versiunea 5.3.0 exista un alt mod de delimitare a sirurilor 
in care variabilele si caracterele speciale nu sunt interpretate. <br />
Asadar $a si \n raman asa cum sunt.
TXT;
*/

echo  '<h4>Operatii cu siruri de caractere    4 ! </h4>';

//Mai jos sunt prezentate operatiile uzuale cu siruri de caractere si functiile oferite de limbajul PHP pentru realizarea lor.
//Lungimea sirului

$s = "acesta este un text";
$sir = "stiu PHP stiu HTML stiu CSS";
 
# ce lungime are sirul? (numarul de caractere) 
print strlen( $s ); // 19


echo '<h4>Cautarea unei secvente</h4>';
# verific daca un cuvant sau text (in cazul de fata cuvantul 'PHP') apare in 
# sirul exprimat prin variabila $sir
if( strstr( $sir, 'PHP' ) !== false ) print 'gasit';
else print "nu am gasit";
 
# pentru a nu tine cont de litere mari/mici se foloseste stristr
if( stristr( $sir, 'phP' ) !== false ) print 'gasit';

echo '<h4>Afisarea unui substring</h4>';


# afisez o sectiune din sir
print substr( $sir, 0, 4); // stiu
echo '<br>';
print substr( $sir, 5 ); // PHP stiu HTML stiu CSS
echo '<br>';
print substr( $sir, 5, -3 ); // PHP stiu HTML stiu
echo '<br>';
print substr( $sir, -3 ); // CSS
echo '<br>';
 
# returnez doar un caracter din string
print $sir{5}; // P
print $sir{ strlen($sir)-1 }; // S

echo '<h4>Transformarea sirului<h4>';

# inlocuirea unor secvente
print str_replace( "stiu", "invat", $sir); // invat PHP invat HTML invat CSS
 echo '<br/>';
# schimb tipul literelor (mari, mici)
print strtoupper( $s ); // ACESTA ESTE UN TEXT
echo '<br/>';
print strtolower( $sir ); // stiu php stiu html stiu css
echo '<br/>';
print ucfirst( $s ); // Acesta este un text
echo '<br/>';
print ucwords( $s ); // Acesta Este Un Text
echo '<br/>';
 
# sterg spatiile de la inceput si sfarsit: trim, ltrim, rtrim
print trim('      ok        '); // ok
echo '<br/>'; 
# caractere "enter" transformate in <br />
print nl2br( "acesta e afisat pe \n 2 linii" ); // acesta e afisat pe <br /> 2 linii
echo '<br/>';

echo '<h4>Impartirea (spargerea) sirului</h4>';

# impart sirul dupa un caracter, cuvant sau un alt sir
$output1 = explode( "stiu ", $sir ); // impart dupa stiu<spatiu>
/*
Array (
    [0] => PHP 
    [1] => HTML 
    [2] => CSS
)
*/
 
# impart sirul dupa o expresie regulata (regex)
$output2 = preg_split( '/ /', $s ); // impart dupa spatiu
/* 
Array (
    [0] => acesta
    [1] => este
    [2] => un
    [3] => text
)
*/
 
# operatia inversa impartirii unui sir:
$a = implode( 'invat ', $output1 ); // invat PHP invat HTML invat CSS
$b = join( '-', $output2 ); // acesta-este-un-text

//Nota: implode si join sunt echivalente (nu exista nici o diferenta intre ele), pe cand explode si preg_split sunt diferite.

echo '<h4>Concatenarea (legarea) sirurilor</h4>';

print 'Text 1' . " legat de " . 'text 2' . "\n"; // Text 1 legat de text 2
 
// se pot concatena siruri rezultate din alte functii sau din variabile
print ucfirst($sir) . '!!! ' . $s;

//Nota: prin concatenarea sirurilor se obtine in final un singur sir, care este tratat ca atare, de sine statator. Altfel spus, prin legarea mai multor siruri se obtine o singura entitate (o singura expresie). Aceasta poate fi transmisa ca parametru unor functii sau instructiuni precum print care accepta un singur argument.

echo '<h4>Interpretarea sirului<h4>';

# parsez un Query String
$str = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($str);
print $first;  // value
echo '<br/>';
print $arr[0]; // foo bar
echo '<br/>';
print $arr[1]; // baz
echo '<br/>';
 
parse_str($str, $output);
print $output['first'];  // value
echo '<br/>';
print $output['arr'][0]; // foo bar
echo '<br/>';
print $output['arr'][1]; // baz
echo '<br/>';


echo '<h4>Masuri de siguranta</h4>';

//In cazul in care textul provine din surse nesigure (cum ar fi un formular de comentarii), atunci este indicat sa fie "sterilizat" (sanitized), prin eliminarea elementelor ce pot fi daunatoare (tag-uri HTML, caractere speciale, etc).

print addslashes( "Baiatu' ia vino-ncoa'!" ); # Baiatu\' ia vino-ncoa\'!
# functia inversa este stripslashes();
echo '<br/>'; 
print htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES); 
# afiseaza &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
# functia inversa este htmlspecialchars_decode() 
 echo '<br/>';
print strip_tags( "<p>E <b>bold</b></p>" ); // E bold
print strip_tags( "<p>E <b>bold</b></p>", '<b>' ); // E <b>bold</b>
echo '<br/>';


?>