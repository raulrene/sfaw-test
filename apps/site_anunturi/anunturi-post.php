<?php

// print_r( $_POST ); exit; # pentru a vedea cum arata vectorul _POST


# includ fisierul care va salva datele
include( 'anunturi-acces-date-sesiune.php' );


# verific daca a fost facut submit
if( isset( $_POST ) && !empty( $_POST[ 'trimite' ] ) ) {

	# salvez datele, apelez functia din anunturi-acces-date-sesiune.php
	$rezultat = scriereDate( $_POST );

	if( $rezultat ) $mesaj = '<strong>Date salvate cu succes!</strong>';
	else $mesaj = '<strong style="color: red">Datele nu au putut fi salvate</strong>';
	
} else {

	# nu a fost facut post, poate cineva a intrat direct din browser pe aceasta pagina?
	$mesaj = 'Nimic de afisat aici.';
}

?>
<html>
<head><title>Adaugare anunt</title></head>

<body style="font-family: tahoma,sans-serif; font-size: small;">

<?php echo $mesaj; ?>

<p>
Mergeti inapoi la <a href="anunturi.php?logat=1">pagina principala</a>.
</p>

</body>
</html>