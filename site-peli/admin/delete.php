<link href="../assets/css/slider.css" type="text/css" rel="stylesheet">

<?php
include('../connection.php');
if(isset($_GET['id']) && !empty($_GET['id'])){
    if(isset($_GET['table']) && !empty($_GET['table'])){
        $id = $_GET['id'];
        $table = $_GET['table'];
    }
}else{
    echo 'get not set haha';
}
$q = "Delete from ".$table." WHERE id = '$id'";
if ($conn->query($q) === TRUE) {
    echo 'succesfully deleted record';
}else{
    echo 'error deleting';
}
echo '<br/><a href="forms.php" class="button large primary">Return</a>';
?>