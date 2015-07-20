<?php include("../config/config_old.php");?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
	</head>
	<body>
	
<?php

if (isset ($_POST['delete'])){
	if (isset($_POST) && !empty($_POST)){
			$table = $_POST['hidden'];
			$id = $_POST['id'];
			$query_index ="DELETE FROM `$table` WHERE id = '$id'";
			if (mysqli_query($conn, $query_index)) {
				echo "Item deleted";
			} else {
				echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
			}

		}		
}else {
	if(isset($_POST['edit'])){
		if (isset($_POST) && !empty($_POST)){         
		switch($_POST['hidden']){
			case "index":
			$index_id = $_POST['id'];
			$index_title = $_POST['title'];
			$index_name = $_POST['name'];
			$index_text = $_POST['text'];
			$index_img = $_POST['img'];
			$index_tag= $_POST['tag'];
			$query_index ="UPDATE `index` SET title ='$index_title', name = '$index_name' , text = '$index_text', img = '$index_img', tag = '$index_tag' WHERE id='$index_id'";
			if (mysqli_query($conn, $query_index)) {
				echo "Update was successful";
			} else {
				echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
			}
			break;
			
			case "courses":
			$courses_id = $_POST['id'];;
			$courses_name = $_POST['name'];
			$courses_price = $_POST['price'];
			$courses_img = $_POST['img'];
			$courses_author = $_POST['author'];
			$courses_users = $_POST['users'];
			$courses_stars = $_POST['stars'];
			$query_index ="UPDATE `courses` SET name = '$courses_name', price = '$courses_price', img = '$courses_img', author = '$courses_author', users = '$courses_users', stars = '$courses_stars', WHERE id='$courses_id'";
			if (mysqli_query($conn, $query_index)) {
				echo "Update was successful";
			} else {
				echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
			}
			break;
			
			case "capitol":
			$capitol_id = $_POST['id'];;
			$capitol_capitol = $_POST['capitol'];
			$capitol_url = $_POST['url'];
			$query_index ="UPDATE `capitol` SET capitol = '$capitol_capitol', url = '$capitol_url' WHERE id='$capitol_id'";
			if (mysqli_query($conn, $query_index)) {
				echo "Update was successful";
			} else {
				echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
			}
			break;
			
			case "subcapitol":
			$sub_capitol_id = $_POST['id'];;
			$subcapitol_subcapitol = $_POST['sub_capitol'];
			$id_capitol_subcapitol = $_POST['capitol_id'];
			$query_index ="UPDATE `sub_capitol` SET sub_capitol = '$subcapitol_subcapitol', capitol_id = '$id_capitol_subcapitol' WHERE id='$sub_capitol_id'";
			if (mysqli_query($conn, $query_index)) {
				echo "Update was successful";
			} else {
				echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
			}
			break;
			
			case "content":
			$content_id = $_POST['id'];;
			$content_text_1 = $_POST['text_1'];
			$content_text_2 = $_POST['text_2'];
			$content_text_3 = $_POST['text_3'];
			$id_subcapitol = $_POST['sub_capitol_id'];
			$query_index ="UPDATE `content` SET text_1 = '$content_text_1', text_2 = '$content_text_2', text_3 = '$content_text_3', sub_capitol_id = '$id_subcapitol' WHERE id='$content_id'";
			if (mysqli_query($conn, $query_index)) {
				echo "Update was successful";
			} else {
				echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
			}
			break;
			
			case "comments":
			$comments_id = $_POST['id'];;
			$comments_img = $_POST['img'];
			$comments_name = $_POST['name'];
			$comments_date = $_POST['date'];
			$comments_comment = $_POST['comment'];;
			$query_index ="UPDATE `comments` SET img = '$comments_img', name = '$comments_name', date = '$comments_date', comment = '$comments_comment' WHERE id='$comments_id'";
			if (mysqli_query($conn, $query_index)) {
				echo "Update was successful";
			} else {
				echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
			}
			break;
			
			case "replies":
			$replies_id = $_POST['id'];;
			$replies_img = $_POST['img'];
			$replies_name = $_POST['name'];
			$replies_date = $_POST['date'];
			$replies_reply = $_POST['reply'];;
			$replies_comment_id = $_POST['comment_id'];;
			$query_index ="UPDATE `replies` SET img = '$replies_img', name = '$replies_name', date = '$replies_date', reply = '$replies_reply', comment_id = '$replies_comment_id' WHERE id='$replies_id'";
			if (mysqli_query($conn, $query_index)) {
				echo "Update was successful";
			} else {
				echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
			}
			break;

		
		
		
		}
		}
		
	}}

?>