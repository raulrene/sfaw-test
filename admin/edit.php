<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Forms</title>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="../assets/css/index.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/slider.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/main-content.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/footer.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php
include('../connection.php');
if(isset($_GET['id']) && !empty($_GET['id'])){
    if(isset($_GET['table']) && !empty($_GET['table'])){
        $id = $_GET['id'];
        $table = $_GET['table'];
        $q = "Select * from ".$table." where id = '$id' ";
        $data = $conn->query($q);
        $row  = $data->fetch_row();
    }else{
        echo 'get not set haha';
    }
}
?>
<div style="margin-left: 50px;float:left;">
    <h1> edit chapters</h1><br/>
    <form method="post" action="edit.php" id="">
        <input type="hidden" name="hidden" value="chapters" />
        <div class="form_field">
            <input type="text" name="ch_name" size="18"  value="<?php echo $row[1]; ?>" required />
        </div>
        <div class="form_field">
            <input type="text" name="url" size="18"  value="<?php echo $row[2]; ?>" required />
        </div>
        <br />
        <input type="submit" name="submit" value="update" class="fg-button teal" />
    </form>
</div>
<?php
$name = $_POST['ch_name'];
$url  = $_POST['url'];
$sql = "  UPDATE ".$table."
        SET chapter_name = '$name',
            url          = '$url',
        WHERE id = '$id'";
if ($conn->query($sql) === TRUE) {
    echo " record updated successfully !";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}
?>
</body>
</html>