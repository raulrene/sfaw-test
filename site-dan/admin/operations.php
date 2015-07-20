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
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/16/15
 * Time: 10:52 AM
 */
include_once('../config/config-old.php');

$tableKeys = array_keys($_POST);
$tableValue = array_values($_POST);

//print_r($tableKeys[sizeof($tableKeys) - 1]);
$submitName = $tableKeys[sizeof($tableKeys) - 1];
$TABLE_NAME = "capitol";


if($submitName == 'insert'){
    switch($_POST['hidden']){ //$_POST['hidden'] sau $tableKeys[0]
        case "capitol":
            $nume =  $_POST['nume'];
            $order = $_POST['order'];
            $sql = "
            INSERT INTO capitol (nume , `order`)
            VALUES('$nume','$order')
            ";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            break;
        case "sub_capitol":
            $capitol_id = $_POST['capitol_id'];
            $nume = $_POST['nume'];
            $order = $_POST['order'];
            $class = $_POST['class'];
            $friendly_url = $_POST['friendly_url'];

            $sql = "
            INSERT INTO sub_capitol (capitol_id,nume,`order`,class,friendly_url)
            VALUES ('$capitol_id', '$nume', '$order','$class','$friendly_url')
            ";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
           /* $sql = "
            INSERT INTO sub_capitol (capitol_id,nume,order,class,friendly_url)
            VALUES ($tableValue[1], $tableValue[2], $tableValue[3],$tableValue[4],$tableValue[5]);
            ";
            */

            break;
        case "sub_sub_capitol":
            $sub_capitol_id = $_POST['sub_capitol_id'];
            $nume = $_POST['nume'];
            $order = $_POST['order'];
            $sql = "
            INSERT INTO sub_sub_capitol (sub_capitol_id,nume,`order`)
            VALUES ('$sub_capitol_id', '$nume', '$order')
            ";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            break;
        case "content":
            $sub_sub_capitol_id = $_POST['sub_sub_capitol_id'];
            $content_text = $_POST['content_text'];
            $sql="
            INSERT INTO content (sub_sub_capitol_id,content_text)
            VALUES ('$sub_sub_capitol_id','$content_text')
            ";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            break;
        case "testimonials":
            $title = $_POST['title'];
            $author = $_POST['author'];
            $text = $_POST['text'];
            $img = $_POST['img'];
            $tag = $_POST['tag'];
            $sql="
            INSERT INTO testimonials (title,author,text,img,tag)
            VALUES ('$title','$author','$text','$img','$tag')
            ";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            break;
        case "courses":
            $name = $_POST['name'];
            $author = $_POST['author'];
            $picture = $_POST['picture'];
            $user = $_POST['user'];
            $price = $_POST['price'];
            $stars = $_POST['stars'];
            $sql="
            INSERT INTO courses (`name`,author,picture,`user`,price,stars)
            VALUES ('$name','$author','$picture','$user','$price','$stars')
            ";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            break;
        case "comments":
            $img = $_POST['img'];
            $author = $_POST['author'];
            $text = $_POST['text'];
            $date = $_POST['date'];
            $author_link = $_POST['author_link'];
            $sql="
            INSERT INTO comments (img,author,text,`date`,author_link)
            VALUES ('$img','$author','$text','$date','$author_link')
            ";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            break;
        case "replies":
            $id_parent = $_POST['id_parent'];
            $img = $_POST['img'];
            $author = $_POST['author'];
            $text = $_POST['text'];
            $date = $_POST['date'];
            $author_link = $_POST['author_link'];
            $sql="
            INSERT INTO replies (id_parent,img,author,text,`date`,author_link)
            VALUES ('$id_parent','$img','$author','$text','$date','$author_link')
            ";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            break;
        case "description":

            $course_id = $_POST['course_id'];
            $course_text = $_POST['course_text'];
            $about_text = $_POST['about_text'];
            $sql = "
            INSERT INTO description (course_id,course_text,about_text)
            VALUES ('$course_id','$course_text','$about_text')
            ";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
            break;

    }
}else {
    if($submitName == 'edit' || $submitName == 'delete' || $submitName = 'update'){
        $tblName = $_POST['hidden'];
        echo "Table name: ".$tblName."<hr/>";

        $sql = "SELECT * FROM $tblName";
        $result = $conn->query($sql);

        foreach($result as $row){
            foreach($row as $value)
                echo $value." ";
            echo '<br>';
        }
            if(isset($_POST['id'])){
                if($submitName == 'delete'){ //DELETION HAPPENS HERE
                    $id = (int)$_POST['id'];

                    //$del = "DELETE FROM capitol WHERE id =".$id; //works...
                    //SELECT FROM WHERE !!!nu mai recunoaste tabelaaa
                    $del = "DELETE FROM $tblName WHERE id=".$id;
                    if ($conn->query($del) === TRUE) {
                        echo "Deleted success";
                    } else {
                        echo "Error: " . $del . "<br>" . $conn->error;
                    }
                }
                if($submitName == 'update'){
                    echo $submitName;

                }
            }
        ?>
        <div class="fourcol column">
            <div class="three-col">
                <form method="post" action="operations.php">
                    <input type="hidden" name="hidden" value="<?= $tblName?>">
                    <h2>Enter id to be deleted</h2>
                    <div class="form-field">
                        <input type="text" placeholder="id" size="30" value="" name="id">
                    </div>
                    <input type="submit" value="Delete" name="delete" class="button medium">

                </form>
                <form method="post" action="update.php">
                    <input type="hidden" name="hidden" value="<?= $tblName?>">
                    <h2>Enter id to be updated</h2>
                    <div class="form-field">
                        <input type="text" placeholder="id" size="30" value="" name="id">
                    </div>
                    <input type="submit" value="Update" name="update" class="button medium">

                </form>
                <div class="clear"></div>
                <a class="button large" href="insert.php">Back</a>
            </div>
        </div>
<?php } }?>




</div>
</body>
</html>

