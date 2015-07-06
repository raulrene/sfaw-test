<?php
/* similar exemplului anterior */
 
# operatia repetitiva: afisarea unui element de tip <li> cu valori dinamice
# conditia de continuare: inca nu s-au efectuat $n repetari
 
# va trebui sa avem lista de link-uri definita intr-un vector.
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
 
?>