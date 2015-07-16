<link href="../assets/css/slider.css" type="text/css" rel="stylesheet">
<?php

include('../connection.php');

if(isset($_POST) && !empty($_POST)){
    switch($_POST['hidden']){
        case "chapters"     :
            $table = 'Chapters';
            $ch_name = $_POST['ch_name'];
            $url = $_POST['url'];
            $q = "INSERT INTO Chapters (chapter_name,url)
                  VALUES  ('$ch_name', '$url')
            ";
            if ($conn->query($q) === TRUE) {
                echo "New record created successfully <br />now table looks like:";
                $q = "select * from Chapters ";
                $data = $conn->query($q);
                echo '<ul>';
                foreach ($data as $row){
                    echo '<li style="font-size:20px">'.$row['id'] .' -> '.$row['chapter_name'].' | '.$row['url'].'</li>';
                    echo '<a class="fg-button teal" href="edit.php?id='.$row['id'].'&table='.$table.'">Edit</a>&nbsp<a class="button large primary" href="delete.php?id='.$row['id'].'&table='.$table.'">Delete</a>';
                }
                echo '</ul>';
            } else {
                echo "Error: " . $q . "<br>" . $conn->error;
            }
            break;
        case "sub_chapters" :
            $ch_id = $_POST['chapter_id'];
            $link = $_POST['links'];
            $url = $_POST['friendly_url'];
            $q = "INSERT INTO sub_chapters (chapter_id,links,friendly_url)
                  VALUES  ('$ch_id', '$link','$url')
            ";
            if ($conn->query($q) === TRUE) {



            } else {
                echo "Error: " . $q . "<br>" . $conn->error;
            }
            break;
        case "ss_chapters"  :
            $sch_id = $_POST['sub_chapter_id'];
            $ssname = $_POST['sub_sub_ch_name'];
            $order = $_POST['order'];
            $q = "INSERT INTO sub_sub_ch (sub_chapter_id,sub_sub_ch_name,order)
                  VALUES  ('$sch_id', '$ssname','$order')
            ";
            if ($conn->query($q) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $q . "<br>" . $conn->error;
            }
            break;
        case "content"      :
            $ssid = $_POST['sub_sub_chapter_id'];
            $t1 = $_POST['text_1'];
            $t2 = $_POST['text_2'];
            $t3 = $_POST['text_3'];
            $q = "INSERT INTO content (sub_sub_ch_id,text1,text2,text3)
                  VALUES  ('$ssid', '$t1','$t2','$t3')
            ";
            if ($conn->query($q) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $q . "<br>" . $conn->error;
            }
            break;
        case "comments"     :
            $autor    = $_POST['author'];
            $img      = $_POST['author_img'];
            $a_link   = $_POST['author_link'];
            $date   = $_POST['date_posted'];
            $text   = $_POST['comm_text'];
            $q = "INSERT INTO comments (author,author_img,author_link,date_posted,comm_text)
                  VALUES  ('$autor', '$img','$a_link','$date','$text')
            ";
            if ($conn->query($q) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $q . "<br>" . $conn->error;
            }
            break;
        case "replies"      :
            $comm_id  = $_POST['author_id'];
            $autor    = $_POST['author'];
            $img      = $_POST['author_img'];
            $a_link   = $_POST['author_link'];
            $date   = $_POST['date_posted'];
            $text   = $_POST['comm_text'];
            $q = "INSERT INTO creplies (comment_id,author,author_img,author_link,date_posted,comm_text)
                  VALUES  ('$comm_id','$autor', '$img','$a_link','$date','$text')
            ";
            if ($conn->query($q) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $q . "<br>" . $conn->error;
            }
            break;
        case "courses"      :
            break;
    }
}else{
    echo 'No data posted';
}
?>