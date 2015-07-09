<?php

 

ini_set( 'display_errors', 'On' );
error_reporting( E_ALL );




include( 'anunturi-acces-date-sesiune.php' );



if( !isset($_GET[ 'logat' ]) || $_GET[ 'logat' ] != 1 ) {
	echo 'Nu aveti acces la aceasta pagina';
	exit;
}




$anunturi = citireDate();





echo '<html><head><title>Administrare anunturi</title>';
echo '<style tyle="text/css">*{font-family:tahoma;font-size:small;} table,td {border-style:solid} thead td {background-color:#eeeeee; font-weight:bold}</style>';
echo '</head><body>';
echo '<h2>Anunturi</h2><hr />';
echo '<h3>Anunturi existente</h3>';




if( !is_array( $anunturi ) || count( $anunturi ) == 0 ) {
	echo '<strong style="color: orange">Nu exista anunturi</strong>';

} else {


	echo '<table width="75%" cellspacing="0" border="1">';
	echo '<thead><td>Nume</td><td>Telefon</td><td>Email</td><td>Oras</td><td>Anunt</td></thead>';
	

	foreach($anunturi as $anunt) {
		echo '<tr>';
		echo '<td>', $anunt[ 'nume' ], '</td>';
		echo '<td>', $anunt[ 'telefon' ], '</td>';
		echo '<td>', $anunt[ 'email' ], '</td>';
		echo '<td>', $anunt[ 'oras' ], '</td>';
		echo '<td width="45%">', $anunt[ 'continut' ], '</td>';
		echo '</tr>';
	}


	echo '</table><p>', 'Anunturi salvate: ', count( $anunturi ), '</p>'; # echo cu mai multi parametrii 
}



echo '<br /><br />';
echo '<h3>Adaugare anunt</h3>';



# afisam formularul de adaugare anunt nou
# nota: iesim din modul PHP si afisam HTML


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


echo '</body>';
echo '</html>';




