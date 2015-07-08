<?php
# pornesc o sesiune
session_start();
 
// ...
if ($_POST['trimite'] == 'Cauta') {
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
	 
		// e posibil sa fac alte procesari aici
		// de exemplu sa afisez lista de rezultate
	}
}else if ($_POST['delete'] == 'stergeCautari') {
   	$_SESSION['cautari'] = null;
}else {
    echo 'invalid action!';
}

?>