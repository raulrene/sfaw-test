<?php
/**
 * Cod-sursa oferit gratuit de punctsivirgula.ro
 */
 
# pentru a afisa tot timpul erorile
ini_set( 'display_errors', 'On' );
error_reporting( E_ALL );



# includ fisierul care va citi si salva datele
include( 'anunturi-acces-date-sesiune.php' );



# verific daca utilizatorul este autentificat
# nota: aceasta verificare este simplista, folosita doar pentru exemplificare
if( !isset($_GET[ 'logat' ]) || $_GET[ 'logat' ] != 1 ) {
	echo 'Nu aveti acces la aceasta pagina';
	exit;
}



# preiau anunturile salvate in array-ul "$anunturi"
$anunturi = citireDate();
// print_r( $anunturi ); # pentru a vedea cum arata vectorul



# afisez anunturile, mai intai printez elementele de baza dintr-o pagina HTML
echo '<html><head><title>Administrare anunturi</title>';
echo '<style tyle="text/css">*{font-family:tahoma;font-size:small;} table,td {border-style:solid} thead td {background-color:#eeeeee; font-weight:bold}</style>';
echo '</head><body>';
echo '<h2>Anunturi</h2><hr />';
echo '<h3>Anunturi existente</h3>';



# verific daca exista anunturi salvate
if( !is_array( $anunturi ) || count( $anunturi ) == 0 ) {
	echo '<strong style="color: orange">Nu exista anunturi</strong>';

} else {

	# cum exista deja anunturi, le afisez
	echo '<table width="75%" cellspacing="0" border="1">';
	echo '<thead><td>Nume</td><td>Telefon</td><td>Email</td><td>Oras</td><td>Anunt</td></thead>';
	
	# folosesc o structura repetitiva care parcurge vectorul si afiseaza datele lui
	foreach($anunturi as $anunt) {
		echo '<tr>';
		echo '<td>', $anunt[ 'nume' ], '</td>';
		echo '<td>', $anunt[ 'telefon' ], '</td>';
		echo '<td>', $anunt[ 'email' ], '</td>';
		echo '<td>', $anunt[ 'oras' ], '</td>';
		echo '<td width="45%">', $anunt[ 'continut' ], '</td>';
		echo '</tr>';
	}

	# afisez cate anunturi exista
	echo '</table><p>', 'Anunturi salvate: ', count( $anunturi ), '</p>'; # echo cu mai multi parametrii 
}



echo '<br /><br />';
echo '<h3>Adaugare anunt</h3>';



# afisam formularul de adaugare anunt nou
# nota: iesim din modul PHP si afisam HTML

# asa cum am spus in primele capitole, ce este in afara tagurilor php va fi returnat asa cum este iar
# ce este in interiorul tagurilor va fi procesat. Rezultatul procesarii va fi "pus" pe langa HTML-ul
# din afara tagurilor (in ordinea instructiunilor echo) iar toata pagina va fi trimisa de server catre
# browser
?>




<form method="post" action="anunturi-post.php">
	<input type="text" name="nume" value="" /> Nume contact<br />
	<input type="text" name="telefon" value="" /> Telefon contact<br />
	<input type="text" name="email" value="" /> Email<br />
	<input type="text" name="oras" value="" /> Oras<br />
	Continut: <br />
	<textarea name="continut" rows="10" cols="50"></textarea><br />
	
	<input type="submit" name="trimite" value="Salveaza anuntul" />
	<input type="reset" value="Curata" />
</form>





<?php

# nota: am intrat din nou un modul PHP
# ce printam in aceasta portiune de cod va fi afisat dupa form-ul de mai sus

echo '</body>';
echo '</html>';


# nota: nu este obligatoriu sa inchidem tagul de php, astfel pana la sfarsitul fisierului se
# considera a fi cod php

