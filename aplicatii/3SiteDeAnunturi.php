<?php
echo 'In urma unei autentificari reusite, utilizatorul va fi redirectionat catre pagina principala de anunturi, numita anunturi.php. Aceasta cuprinde 2 sectiuni: "anunturi existente" si "adaugare anunt". <br>';

/*
##Sectiunea anunturi existente##

<?php
// anunturi.php - prima parte
 
$anunturi = citireDate();
 
# verific daca exista anunturi salvate
if( !is_array( $anunturi ) || count( $anunturi ) == 0 ) {
	echo '<strong style="color: orange">Nu exista anunturi</strong>';
 
} else {
 
	# cum exista deja anunturi, le afisez
	echo '<table width="75%" cellspacing="0" border="1">';
 
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
	echo '</table><p>', 'Anunturi salvate: ', count( $anunturi ), '</p>'; 
}
?>
*/

echo '
Sectiunea "Adaugare anunt"
<br>
Sub lista de anunturi, pe aceeasi pagina este afisat si formularul pentru adaugarea de noi inregistrari. Acesta este de tip POST, care trimite datele catre fisierul anunturi-post.php. Prin apasarea pe butonul "Salveaza anuntul", datele introduse vor fi transmise catre fisierul PHP de pe server si vor fi disponibile prin intermediul variabilei $_POST.
<br><br>
<!-- anunturi.php - a doua parte -->
<br><br> 
<form method="post" action="anunturi-post.php">
	<br>
	<input type="text" name="nume" value="" /> Nume contact<br />
	<br>
	<input type="text" name="telefon" value="" /> Telefon contact<br />
	<br>
	<input type="text" name="email" value="" /> Email<br />
	<br>
	<input type="text" name="oras" value="" /> Oras<br />
	<br>
	Continut: <br />
	<br>
	<textarea name="continut" rows="10" cols="50"></textarea><br />
 	<br><br>
	<input type="submit" name="trimite" value="Salveaza anuntul" />
	<br>
	<input type="reset" value="Curata" />
	<br>
</form>
<br><br>
';

echo '
Fisierul anunturi-post.php
<br>
Fisierul PHP care proceseaza datele este inclus mai jos. Ca si in exemplul de login, se fac verificari pentru a fi siguri ca a fost facut un submit. Daca datele sunt disponibile in variabila $_POST atunci acestea sunt salvate cu ajutorul functiei scriereDate. Functia de salvare a datelor va returna intotdeauna true (in aceasta mica aplicatie), deci va fi mereu afisat mesajul de succes.<br>
<br>';
/*
<?php
// anunturi-post.php
 
# verific daca a fost facut submit
if( isset( $_POST ) && !empty( $_POST[ "trimite" ] ) ) {
 
	# salvez datele, apelez functia din anunturi-acces-date-sesiune.php
	$rezultat = scriereDate( $_POST );
 
	if( $rezultat ) $mesaj = "<strong>Date salvate cu succes!</strong>";
	else $mesaj = "<strong style="color: red">Datele nu au putut fi salvate</strong>";
 
} else {
 
	# nu a fost facut post, poate cineva a intrat direct din browser pe aceasta pagina?
	$mesaj = "Nimic de afisat aici.";
}
*/

?>