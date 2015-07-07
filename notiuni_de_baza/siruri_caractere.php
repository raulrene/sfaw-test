<?php
$a = "valoarea variabilei";
print "Textul definit cu ghilimele contine $a";
print "<br />";
print "Ma numesc \"Alex\"!";
print "<br />";
print "Text afisat pe 3 linii: \n linia 2 si \n linia3";

print "<br />";
print "Am castigat \$30 :D";

print "<br />";
print "Text cu \\backslash\\.";

print "<br />";
print "Text fara \backslash\- \nu se afiseaza corec\t.";
print "<br />";
$a = 'valoarea variabilei';
print 'Textul definit cu ghilimele contine $a';
print "<br />";
print 'Porecla ta e Kelu\' ?';
print "<br />";
print 'Text cu backslash \\';
print "<br />";
print 'Alte escape chars nu sunt interpretate \n \t \b';

$a = 'valorii lor'; // definesc o variabila

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

print "<br />";
$a = 'valoarea';

print <<<'TXT'
Incepand cu versiunea 5.3.0 exista un alt mod de delimitare a sirurilor
in care variabilele si caracterele speciale nu sunt interpretate. <br />
Asadar $a si \n raman asa cum sunt.
TXT;

print "<br />";
$s = "acesta este un text";
$sir = "stiu PHP stiu HTML stiu CSS";

print strlen( $s );

print "<br />";
if( strstr( $sir, 'PHP' ) !== false ) print 'gasit';
else print "nu am gasit";
print "<br />";
if( stristr( $sir, 'phP' ) !== false ) print 'gasit';
print "<br />";
print substr( $sir, 0, 4);
print "<br />";
print substr( $sir, 5 );
print "<br />";
print substr( $sir, 5, -3 );
print "<br />";
print substr( $sir, -3 );
print "<br />";
print $sir{5};
print "<br />";
print $sir{ strlen($sir)-1 };
print "<br />";
print str_replace( "stiu", "invat", $sir);
print "<br />";
print strtoupper( $s );
print "<br />";
print strtolower( $sir );
print "<br />";
print ucfirst( $s );
print "<br />";
print ucwords( $s );
print "<br />";
print trim('      ok        ');
print "<br />";
print nl2br( "acesta e afisat pe \n 2 linii" );
print "<br />";
$output1 = explode( "stiu ", $sir );
print "<br />";
$output2 = preg_split( '/ /', $s );
print "<br />";
$a = implode( 'invat ', $output1 );
$b = join( '-', $output2 );
print "<br />";
print 'Text 1' . " legat de " . 'text 2' . "\n";
print "<br />";
print ucfirst($sir) . '!!! ' . $s;
print "<br />";
$str = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($str);

print $first;
print $arr[0];
print $arr[1];
print "<br />";
parse_str($str, $output);
print $output['first'];
print $output['arr'][0];
print $output['arr'][1];
print "<br />";
print addslashes( "Baiatu' ia vino-ncoa'!" );
print "<br />";
print htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);

print "<br />";
print strip_tags( "<p>E <b>bold</b></p>" );
print strip_tags( "<p>E <b>bold</b></p>", '<b>' ); 


?>