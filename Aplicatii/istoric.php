<?php
session_start();
?>

<form method="post" action="">
    Cuvant cheie <input type="text" name="keyword" value="" />
    <input type="submit" name="trimite" value="Cauta" />
    <input type="reset" value="Curata" />
</form>

<?php
    if( isset( $_SESSION['cautari'] ) ) {
$istoric = $_SESSION['cautari'];
} else {
$istoric = array();
}


if( isset($_POST) && !empty($_POST['keyword']) ) {

array_push($istoric, $_POST['keyword']);


$_SESSION['cautari'] = $istoric;


}

if( empty( $istoric ) ) {
    echo 'Nu ati cautat nimic pana acum';

} else {


    echo '<ul>';


    foreach($istoric as $termen) {
        echo "<li>$termen</li>";
    }


    echo '</ul><p>', 'Cautari efectuate: ', count( $istoric ), '</p>';
}
?>