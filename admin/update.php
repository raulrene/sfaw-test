<!DOCTYPE html>
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
</head>
<body>
<div class="row">
<?php

include_once('../config/config-old.php');

$tableKeys = array_keys($_POST);
$tableValue = array_values($_POST);

//print_r($tableKeys[sizeof($tableKeys) - 1]);
$submitName = $tableKeys[sizeof($tableKeys) - 1];

echo "salut,id: ".$_POST['id']." ";
$tblName = $_POST['hidden'];
echo "Table name: ".$tblName."<hr/>";
$id = $_POST['id'];

$qq = "SHOW COLUMNS FROM $tblName";
$showColumnNames = mysqli_query($conn,$qq);
$colNames = array(); //this array will have the table columns names
$count = 0;
while($n = mysqli_fetch_array($showColumnNames)){ //create table name columns
    $colNames[$count] = $n['Field'];
    //echo $colNames[$count]." ";
    $count++;

}
/*
foreach($colNames as $x){
    echo $x." ";
}
die;
*/
$sql = "SELECT * FROM $tblName WHERE id=".$id;
$result = $conn->query($sql);
foreach($result as $row){
    ?>
    <form method="post" action="update.php">
        <h3>Selected Table</h3><br><br>
        <div class="form-field">
            <input type="hidden" name="hidden" value="<?= $tblName?>">
        <?php
        $count = 0;
        foreach($row as $value){
            echo $colNames[$count];

            ?>
            <input type="text" placeholder="" size="30" value="<?php echo $value;?>" name="<?php echo $colNames[$count];?>">
            <?php
            $count++;
        }
        ?>
        <input type="submit" value="Set Update" name="setUpdate" class="button medium">
        </div>
    </form>
<?php } ?>


<?php
$submitName = $tableKeys[sizeof($tableKeys) - 1];

if($submitName == 'setUpdate'){
    $tblName = $_POST['hidden'];
     echo "set update on: ".$tblName."<br>";

    $tableKeys = array_keys($_POST);
    $tableValue = array_values($_POST);
    $id = $tableKeys[1];
    $idVal = $tableValue[1];

    for($i = 2 ; $i < sizeof($tableKeys) - 1;$i++){ //$i = 1 is the ID of the table!!
        //echo $tableKeys[$i]." = ".$tableValue[$i]."<br>";

        $update = "UPDATE $tblName SET `"."$tableKeys[$i]"."` = '".$tableValue[$i]."' WHERE ".$id." = ".$idVal; //I IZ GENIUS
        if ($conn->query($update) === TRUE) {
            echo "Update success <br>";
        } else {
            echo "Error: " . $update . "<br>" . $conn->error;
        }
    }


}
?>
    <div class="clear"></div>
    <a class="button large" href="insert.php">Back to tables</a>
</div>
</body>
</html>