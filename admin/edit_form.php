<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="../assets/css/index.css" type="text/css" rel="stylesheet">
<link href="../assets/css/slider.css" type="text/css" rel="stylesheet">
<link href="../assets/css/main-content.css" type="text/css" rel="stylesheet">
<link href="../assets/css/footer.css" type="text/css" rel="stylesheet"
<?php
include('../connection.php');
if(isset($_GET['id']) && !empty($_GET['id'])){
    if(isset($_GET['table']) && !empty($_GET['table'])){
        if($_GET['table'] == 'Chapters'){
            $id = $_GET['id'];
            $table = $_GET['table'];
            $q = "SELECT * FROM ".$table." WHERE id ='$id'";
            $data = $conn->query($q);
            $row  = $data->fetch_row();


?>

<div style="margin-left: 50px;float:left;">
    <h1> edit chapters</h1><br/>
    <form method="post" action="edit.php" id="">
        <input type="hidden" name="htable" value="Chapters" />
        <input type="hidden" name="id" value="<?php echo $row['0']; ?>" />
        <div class="form_field">
            <input type="text" name="ch_name" size="18"  value="<?php echo $row[1]; ?>" required />
        </div>
        <div class="form_field">
            <input type="text" name="url" size="18"  value="<?php echo $row[2]; ?>" required />
        </div>
        <br />
        <input type="submit" name="update" value="update" class="button large primary" />
    </form>
</div>

<?php
        }elseif($_GET['table'] == 'sub_chapters'){
            $id = $_GET['id'];
            $table = $_GET['table'];
            $q = "SELECT * FROM ".$table." WHERE id ='$id'";
            $data = $conn->query($q);
            $row  = $data->fetch_row();
            ?>

            <div style="margin-left: 50px;float:left;">
                <h1> edit chapters</h1><br/>
                <form method="post" action="edit.php" id="">
                    <input type="hidden" name="table" value="sub_chapters" />
                    <input type="hidden" name="id" value="<?php echo $row['0']; ?>" />
                    <div class="form_field">
                        <input type="text" name="chapter_id" size="18"  value="<?php echo $row[1]; ?>" required />
                    </div>
                    <div class="form_field">
                        <input type="text" name="links" size="18"  value="<?php echo $row[2]; ?>" required />
                    </div>
                    <br />
                    <div class="form_field">
                        <input type="text" name="friendly_url" size="18"  value="<?php echo $row[2]; ?>" required />
                    </div>
                    <br />
                    <input type="submit" name="update" value="update" class="button large primary" />
                </form>
            </div>

        <?php
        }
    }else{
        echo 'get not set haha';
    }
}

?>


