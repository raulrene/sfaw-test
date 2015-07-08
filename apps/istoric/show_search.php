<?php
# verific daca exista istoric salvat
if( empty( $istoric ) ) {
	echo 'Nu ati cautat nimic pana acum';
 
} else {
 
	# cum exista deja un istoric, il afisez
	echo '<ul>';
 
	# folosesc o structura repetitiva care parcurge vectorul si afiseaza datele lui
	foreach($istoric as $termen) {
		echo "<li>$termen</li>";
	}
 
	# afisez cate elemente exista
	echo '</ul><p>', 'Cautari efectuate: ', count( $istoric ), '</p>';
	echo '<pre>';
	print_r($_SESSION['cautari']);
	var_dump($_SESSION['cautari']);
}
?>