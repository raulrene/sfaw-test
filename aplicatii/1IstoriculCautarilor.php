<?php
# pentru a afisa tot timpul erorile
ini_set( 'display_errors', 'On' );
error_reporting( E_ALL );

# pornesc o sesiune
session_start();
echo "Am pornit sesiunea <br>";
?>
<html>
<head><title>Istoricul cautarilor</title>
<style tyle="text/css">*{font-family:tahoma;font-size:small;} table,td {border-style:solid} thead td {background-color:#eeeeee; font-weight:bold}</style>
</head>

<body>
<h2>Aplicatie ce pastreaza istoricul cautarilor</h2><hr />



<h3>Efectueaza o cautare</h3>

<form method="post" action="">
	Cuvant cheie <input type="text" name="keyword" value="" />
	<input type="submit" name="trimite" value="Cauta" />
	<input type="reset" value="Curata" />
</form>
</html>


<?php
echo "<br><br>Ultimele cautari<br><br>";
# preiau datele existente din sesiune
if( isset( $_SESSION['cautari'] ) ) {
	$istoric = $_SESSION['cautari']; // istoric exista
} else {
	$istoric = array(); // initializez un vector gol
}


# verific daca a fost facut submit la formular
if( isset($_POST) && !empty($_POST['keyword']) ) {
	// adaug termenul cautat
	array_push($istoric, $_POST['keyword']);
	
	// stochez totul inapoi pe sesiune
	$_SESSION['cautari'] = $istoric;
}


# verific daca exista istoric salvat
if( empty( $istoric ) ) {
	echo '<strong style="color: orange">Nu ati cautat nimic pana acum</strong>';

} else {

	# cum exista deja un istoric, il afisez
	echo '<ul>';
	
	# folosesc o structura repetitiva care parcurge vectorul si afiseaza datele lui
	foreach($istoric as $termen) {
		echo "<li>$termen</li>";
	}

	# afisez cate elemente exista
	echo '</ul><p>', 'Cautari efectuate: ', count( $istoric ), '</p>'; # echo cu mai multi parametrii 
}

?>
