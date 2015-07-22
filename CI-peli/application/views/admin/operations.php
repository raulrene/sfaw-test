<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('includes/head'); ?>
</head>
<body>
    <?php $this->load->view('includes/header.php'); ?>
    <?php $this->load->view('includes/sub_header.php'); ?>
    <div class="row">
        <p>New record created successfully</p>
        <p>now table looks like:</p>
        <?php
            echo '<ul>';
        foreach ($result as $row){
            echo '<li style="font-size:20px">'.$row->id .' -> '.$row->chapter_name.' | '.$row->url.'</li>';
            echo '<a class="fg-button teal" href="edit_form/index/'.$row->id.'/'.$table.'">Edit</a>&nbsp
                  <a class="button large primary" href="delete_info/index/'.$row->id.'/'.$table.'">Delete</a>';
        }
        echo '</ul>';
        ?>
    </div>
</body> 
</html>
<?php           
/*
        case "sub_chapters" :
            $table = 'sub_chapters';
            $ch_id = $_POST['chapter_id'];
            $link = $_POST['links'];
            $url = $_POST['friendly_url'];
            $q = "INSERT INTO ". $table ." (chapter_id,links,friendly_url)
                  VALUES  ('$ch_id', '$link','$url')
            ";
            if ($conn->query($q) === TRUE) {
                echo "New record created successfully <br />now table looks like:";
                $q = "select * from ". $table ."";
                $data = $conn->query($q);
                echo '<ul>';
                foreach ($data as $row){
                    echo '<li style="font-size:20px">'.$row['id'] .' -> '.$row['chapter_id'].' | '.$row['links'].' | '.$row['friendly_url'].'</li>';
                    echo '<a class="fg-button teal" href="edit_form.php?id='.$row['id'].'&table='.$table.'">Edit</a>&nbsp
                          <a class="button large primary" href="delete.php?id='.$row['id'].'&table='.$table.'">Delete</a>';
                }
                echo '</ul>';
            } else {
                echo "Error: " . $q . "<br>" . $conn->error;
            }
            break;
        case "ss_chapters"  :
            $table = 'sub_sub_ch';
            $sch_id = $_POST['sub_chapter_id'];
            $name = $_POST['sub_sub_chapter_name'];
            $order = $_POST['order'];
            $q = "INSERT INTO ". $table ." (sub_ch_id,sub_sub_ch_name,ord)
                  VALUES  ('$sch_id', '$name','$order')
            ";
            if ($conn->query($q) === TRUE) {
                echo "New record created successfully <br />now table looks like:";
                $q = "select * from ". $table ."";
                $data = $conn->query($q);
                echo '<ul>';
                foreach ($data as $row){
                    echo '<li style="font-size:20px">'.$row['id'] .' -> '
                                                      .$row['sub_chapter_id'].' | '
                                                      .$row['sub_sub_ch_name'].' | '
                                                      .$row['order'].'</li>';
                    echo '<a class="fg-button teal" href="edit_form.php?id='.$row['id'].'&table='.$table.'">Edit</a>&nbsp
                          <a class="button large primary" href="delete.php?id='.$row['id'].'&table='.$table.'">Delete</a>';
                }
                echo '</ul>';
            } else {
                echo "Error: " . $q . "<br>" . $conn->error;
            }
            break;
        case "content"      :
            $table = 'content';
            $ssid = $_POST['sub_sub_chapter_id'];
            $t1 = $_POST['text_1'];
            $t2 = $_POST['text_2'];
            $t3 = $_POST['text_3'];
            $q = "INSERT INTO ". $table ." (sub_sub_ch_id,text_1,text_2,text_3)
                  VALUES  ('$ssid', '$t1','$t2','$t3')
            ";
            if ($conn->query($q) === TRUE) {
                echo "New record created successfully <br />now table looks like:";
                $q = "select * from ". $table ."";
                $data = $conn->query($q);
                echo '<ul>';
                foreach ($data as $row){
                    echo '<li style="font-size:20px">'  .$row['id'] .' -> '
                                                        .$row['sub_sub_ch_id'].' | '
                                                        .$row['text_1'].' | '
                                                        .$row['text_2'].' | '
                                                        .$row['text_3'].
                         '</li>';
                    echo '<a class="fg-button teal" href="edit_form.php?id='.$row['id'].'&table='.$table.'">Edit</a>&nbsp
                          <a class="button large primary" href="delete.php?id='.$row['id'].'&table='.$table.'">Delete</a>';
                }
                echo '</ul>';
            } else {
                echo "Error: " . $q . "<br>" . $conn->error;
            }
            break;
        case "comments"     :
            $table = 'comments';
            $autor    = $_POST['author'];
            $img      = $_POST['author_img'];
            $a_link   = $_POST['author_link'];
            $date   = $_POST['date_posted'];
            $text   = $_POST['comm_text'];
            $q = "INSERT INTO ". $table ." (author,author_img,author_link,date_posted,comm_text)
                  VALUES  ('$autor', '$img','$a_link','$date','$text')
            ";
            if ($conn->query($q) === TRUE) {
                echo "New record created successfully <br />now table looks like:";
                $q = "select * from ". $table ."";
                $data = $conn->query($q);
                echo '<ul>';
                foreach ($data as $row){
                    echo '<li style="font-size:20px">'  .$row['id'] .' -> '
                                                        .$row['author'].' | '
                                                        .$row['author _img'].' | '
                                                        .$row['author_link'].' | '
                                                        .$row['date_posted'].' | '
                                                        .$row['comm_text'].
                        '</li>';
                    echo '<a class="fg-button teal" href="edit_form.php?id='.$row['id'].'&table='.$table.'">Edit</a>&nbsp
                          <a class="button large primary" href="delete.php?id='.$row['id'].'&table='.$table.'">Delete</a>';
                }
                echo '</ul>';
            } else {
                echo "Error: " . $q . "<br>" . $conn->error;
            }
            break;
        case "replies"      :
            $table = 'replies';
            $comm_id  = $_POST['author_id'];
            $autor    = $_POST['author'];
            $img      = $_POST['author_img'];
            $a_link   = $_POST['author_link'];
            $date   = $_POST['date_posted'];
            $text   = $_POST['comm_text'];
            $q = "INSERT INTO ". $table ." (comment_id,author,author_img,author_link,date_posted,comm_text)
                  VALUES  ('$comm_id','$autor', '$img','$a_link','$date','$text')
            ";
            if ($conn->query($q) === TRUE) {
                echo "New record created successfully <br />now table looks like:";
                $q = "select * from ". $table ."";
                $data = $conn->query($q);
                echo '<ul>';
                foreach ($data as $row){
                    echo '<li style="font-size:20px">'  .$row['id'] .' -> '
                                                        .$row['comment_id'].' | '
                                                        .$row['author'].' | '
                                                        .$row['author _img'].' | '
                                                        .$row['author_link'].' | '
                                                        .$row['date_posted'].' | '
                                                        .$row['comm_text'].
                        '</li>';
                    echo '<a class="fg-button teal" href="edit_form.php?id='.$row['id'].'&table='.$table.'">Edit</a>&nbsp
                          <a class="button large primary" href="delete.php?id='.$row['id'].'&table='.$table.'">Delete</a>';
                }
                echo '</ul>';
            } else {
                echo "Error: " . $q . "<br>" . $conn->error;
            }
            break;
        case "courses"      :
            break;
    }
*/
?>