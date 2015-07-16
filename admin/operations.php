<?php

include('../connection.php');

if(isset($_POST) && !empty($_POST)){
    switch($_POST['hidden']){
        case "chapters"     :
            $ch_name = $_POST['ch_name'];
            $url = $_POST['url'];
            $q = "INSERT INTO Chapters (chapter_name,url)
                  VALUES  ('$ch_name', '$url')
            ";
            if ($conn->query($q) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $q . "<br>" . $conn->error;
            }
            break;
        case "sub_chapters" :
            $data = $_POST;

            break;
        case "ss_chapters"  :
            break;
        case "content"      :
            break;
        case "comments"     :
            break;
        case "replies"      :
            break;
        case "courses"      :
            break;
    }
}else{
    echo 'No data posted';
}
?>