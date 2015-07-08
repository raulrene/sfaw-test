<?php
/**
 * Cod-sursa oferit gratuit de punctsivirgula.ro
 */

# includ fisierul cu functii
require_once 'functii.php';

# aceasta este o pagina protejata, deci inainte sa afisez orice, vom 
# verifica daca vizita provine de la un utilizator logat
checkLogin();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Aplicatie de login - Invata PHP</title>
<style tyle="text/css">*{font-family:verdana,sans-serif;font-size:small;} table,td {border-style:solid} thead td {background-color:#eeeeee; font-weight:bold}</style>
</head>
<body>

<h2>Bun venit pe pagina principala</h2><hr />

<p>
Tocmai v-ati autentificat prin intermediul <strong><?php 
	if($_SESSION['LOGIN']['via'] == 'form') {
		echo 'formularului';
	} else {
		echo 'unui cookie';
	}
?></strong> in aplicatia de la <strong>php.punctsivirgula.ro</strong>. Felicitari!<br />
Aceasta pagina este protejata prin parola. Nu poate fi accesata daca nu sunteti autentificat.
</p>

<p>
<a href="index-home.php">Alta pagina protejata prin parola</a> <br />
<a href="login.php?action=logout">Logout!</a>
</p>

</body>
</html>
