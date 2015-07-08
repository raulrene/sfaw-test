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

<h2>Pagina personala</h2><hr />

<p>
Aceasta este o alta pagina protejata prin parola ce poate fi accesata doar daca sunteti autentificat.<br />
Gratie datelor salvate pe sesiune (vezi mai jos) sunteti marcat ca logat, indiferent ce pagina accesati.
</p>

<p>
Datele stocate in <tt>$_SESSION['LOGIN']</tt>: <br />
<pre>
<?php print_r($_SESSION['LOGIN']); ?>
</pre>
</p>

<p>
<a href="index.php">Pagina principala</a> <br />
<a href="login.php?action=logout">Logout!</a>
</p>

</body>
</html>
