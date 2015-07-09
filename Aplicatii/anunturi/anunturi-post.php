<?php





include( 'anunturi-acces-date-sesiune.php' );



if( isset( $_POST ) && !empty( $_POST[ 'trimite' ] ) ) {


	$rezultat = scriereDate( $_POST );

	if( $rezultat ) $mesaj = '<strong>Date salvate cu succes!</strong>';
	else $mesaj = '<strong style="color: red">Datele nu au putut fi salvate</strong>';
	
} else {


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