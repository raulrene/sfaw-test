<! DOCTYPE html>
<html>
<head>
    <?php $this->load->view('includes/head'); ?>
</head>
<body>
    <?php $this->load->view('includes/header.php'); ?>
    <?php $this->load->view('includes/sub_header.php'); ?>
    <div class="row">
        <?php
            if($table == 'Chapters'){
                echo '<p class="resp_par"> Record successfully updated!</p><br/><br/><br/>';
                echo '<a class="fg-button teal" href="'. base_url().'admin/index">Return</a>';
            }elseif($table == 'sub_chapters'){
                 echo '<p class="resp_par> Record successfully updated!</p><br/><br/><br/>';
                 echo '<a class="fg-button teal" href="'. base_url().'admin/index">Return</a>';
            }elseif($table == 'sub_sub_ch'){
                 echo '<p class="resp_par> Record successfully updated!</p><br/><br/><br/>';
                 echo '<a class="fg-button teal" href="'. base_url().'admin/index">Return</a>';
            }elseif($table == 'content'){
                 echo '<p class="resp_par> Record successfully updated!</p><br/><br/><br/>';
                 echo '<a class="fg-button teal" href="'. base_url().'admin/index">Return</a>';
            }elseif($table == 'comments'){
                 echo '<p class="resp_par> Record successfully updated!</p><br/><br/><br/>';
                 echo '<a class="fg-button teal" href="'. base_url().'admin/index">Return</a>';
            }elseif($table == 'replies'){
                 echo '<p class="resp_par> Record successfully updated!</p><br/><br/><br/>';
                 echo '<a class="fg-button teal" href="'. base_url().'admin/index">Return</a>';
            }elseif($table == 'courses'){
                 echo '<p class="resp_par> Record successfully updated!</p><br/><br/><br/>';
                 echo '<a class="fg-button teal" href="'. base_url().'admin/index">Return</a>';
            }
        ?>
    </div>
</body> 
</html>




<?php /*
include_once('../connection.php');
if(isset($_POST['update'])){
    if($_POST['table'] == 'Chapters'){
        $id   = $_POST['id'];
        $name = $_POST['ch_name'];
        $url  = $_POST['url'];
        echo '<pre>';

        $sql = "  UPDATE Chapters SET chapter_name = '$name', url = '$url'
                WHERE id ='$id'";
        if ($conn->query($sql) === TRUE) {
            echo " record updated !<br/><br/><br/><br/><br/>";
            echo '<a class="fg-button teal" href="forms.php">Return</a>';
        } else {
            echo "Error: " . $q . "<br>" . $conn->error;
        }
    }elseif($_POST['table'] == 'sub_chapters'){
        $id   = $_POST['id'];
        $name = $_POST['chapter_id'];
        $link  = $_POST['links'];
        $url  = $_POST['friendly_url'];
        echo '<pre>';

        $sql = "  UPDATE sub_chapters SET chapter_id = '$name', links = '$link',friendly_url = '$url'
                WHERE id ='$id'";
        if ($conn->query($sql) === TRUE) {
            echo " record updated !<br/><br/><br/><br/><br/>";
            echo '<a class="fg-button teal" href="forms.php">Return</a>';
        } else {
            echo "Error: " . $q . "<br>" . $conn->error;
        }

    }
}else{
    echo 'submit error';
}
*/
?>