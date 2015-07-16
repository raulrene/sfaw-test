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
//echo $tableKeys[0]; // prints the name of the table posted from insert.php
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



