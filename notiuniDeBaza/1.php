<?php
print 'Azi e ' .date('d.m.Y');
print '<br>';
echo "<hr/>";
$myInt = 5;
printf("My int is: %d",$myInt);
print "\n";
echo "<hr/>";

$arr1 = array(1,2,3,4,5);
//var_dump($arr1);
for($i=0;$i< count($arr1);$i++){
	print $arr1[$i] . " ";
}
print "<hr/>";

$arr2 = array("aaa",10,"bbb");
$ser = serialize($arr2);
echo $ser. "\n";

$des = unserialize($ser);
print_r($des);
echo "<hr/>";
/*
Textul cuprins intre ghilimele duble este procesat inainte de afisare: variabilele sunt cautate iar valoarea lor este afisata in locul numelui. 
In cazul apostrofului, textul este afisat neschimbat, iar variabilele nu sunt interpretate.*/

/*
-isset verifica daca variabila a fost definita
-empty verifica daca a fost definita si daca are o valoare considerata vida. O variabila este vida daca are urmatoarele valori:
	"" (text de lungime 0)
	0 (cifra 0)
	"0" (textul "0")
	null
	false
	array() (vector gol)
*/

/*Limbajul PHP permite referirea la numele unei variabile printr-o alta variabila.*/
$masina = "Logan";
$obiect = "masina";
print $$obiect;

echo "<hr/>";

/*Operatiori de comparare*/
$a = 4;
$b = "4";
$c = '4';
if($a == $b) print "Egale <br>";
if($a === $b) print "Identice(acceasi valoare si acelasi tip <br>";
if($c === $b) print "Identice(acceasi valoare si acelasi tip";	
echo "<hr/>";

/*Operatorul tenar
(conditie ? adevarat : fals )*/
print ( 1 == 2 ? 'equal' : 'non-equal');
print "<hr/>";

/*Operatorul de executie ``(echivalent cu functia shell_exec)
-permite rularea unor aplicatii sau comenzi ca in linia de comanda*/
$output = `ls -al`;
echo "<pre>$output</pre>";
echo `pwd`;
print "<hr/>";

$sir = "acesta este un sir";
print $sir .'<br>';
# inlocuirea unor secvente
print str_replace("este","e",$sir);
echo "<hr/>";

$arr3 = array(2,5,77,4,11);
foreach($arr3 as $element)
	print $element . " ";

print "<hr/>";
/*Ex cum afisez o lista de link-uri*/
$links = array( 
	'www.punctsivirgula.ro',
	'php.punctsivirgula.ro',
	'php.punctsivirgula.ro?despre',
	'php.punctsivirgula.ro?legal'
);
 
# determin lungimea listei
$n = count( $links );
 
# avand lungimea, folosesc o structura for pentru a afisa lista
echo '<ul>';
for( $i = 0; $i < $n; $i++ ) {
	echo <<<LINK
	  <li>
	    <a href="http://{$links[ $i ]}" title="{$links[ $i ]}">{$links[ $i ]}</a>
	  </li>
LINK;
}
echo '</ul>';

echo '<hr/>';

print_r($_GET);
/*
$_GET 
Vector asociativ ce contine parametrii transmisi prin URL sau printr-un formular.

$_POST
Similar cu $_GET, doar ca parametrii sunt transmisi prin formulare (forms)

$_REQUEST
Inglobeaza atat $_GET cat si $_POST.

$_SESSION
La finalul executiei scriptului, valorile variabilelor se pierd (inclusiv variabile $_GET, $_POST, etc). Daca sunt puse in vectorul $_SESSION, valorile pot persista si dupa terminarea executiei scripturilor.

$_SERVER
Furnizeaza informatii despre server, pagina ceruta si utilizatorul care acceseaza pagina.
*/

echo '<hr/>';
?>