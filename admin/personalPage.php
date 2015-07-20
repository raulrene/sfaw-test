<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/18/15
 * Time: 11:58 AM
 */

# includ fisierul cu functii
require_once 'loginFunctions.php';

# aceasta este o pagina protejata, deci inainte sa afisez orice, vom
# verifica daca vizita provine de la un utilizator logat
checkLogin();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="../assets/css/index.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/slider.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/main-content.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/footer.css" type="text/css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
<body>
<div class="row">
    <h2>Welcome to your personal page</h2><br><br>
    <p>
        <a href="login.php?action=logout" class="button medium">Logout!</a>
    </p>
</div>
</body>
</html>