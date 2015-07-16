<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "primarydb";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

var_dump($_POST);

if (isset($_POST) && !empty($_POST)){
	switch($_POST['hidden']){
		case "index_f":
		$index_title = $_POST['title_index'];
		$index_name = $_POST['name_index'];
		$index_text = $_POST['text_index'];
		$index_img = $_POST['img_index'];
		$index_tag= $_POST['tag_index'];
		$query_index ="INSERT INTO `index` (`title`, `name`, `text`, `img`, `tag`)
		VALUES
		('$index_title', '$index_name', '$index_text', '$index_img', '$index_tag')";
		if (mysqli_query($conn, $query_index)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
		}
		break;
		
		case "courses":
		$courses_name = $_POST['name_courses'];
		$courses_price = $_POST['price_courses'];
		$courses_img = $_POST['img_courses'];
		$courses_author = $_POST['author_courses'];
		$courses_user= $_POST['user_courses'];
		$courses_stars= $_POST['stars_courses'];
		$query_index ="INSERT INTO `courses` (`name`, `price`, `img`, `author`, `users`, `stars`)
		VALUES
		('$courses_name', '$courses_price', '$courses_img', '$courses_author', '$courses_user', '$courses_stars')";
		if (mysqli_query($conn, $query_index)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
		}
		break;
		
		case "capitol":
		$capitol_capitol = $_POST['capitol_capitol'];
		$capitol_url = $_POST['url_capitol'];
		$query_index ="INSERT INTO `capitol` (`capitol`, `url`)
		VALUES
		('$capitol_capitol', '$capitol_url')";
		if (mysqli_query($conn, $query_index)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
		}
		break;
		
		case "subcapitol":
		$subcapitol_subcapitol = $_POST['subcapitol_subcapitol'];
		$id_capitol_subcapitol = $_POST['id_capitol_subcapitol'];
		$query_index ="INSERT INTO `sub_capitol` (`sub_capitol`, `capitol_id`)
		VALUES
		('$subcapitol_subcapitol', '$id_capitol_subcapitol')";
		if (mysqli_query($conn, $query_index)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
		}
		break;
		
		case "content":
		$content_text_1 = $_POST['text_1_content'];
		$content_text_2 = $_POST['text_2_content'];
		$content_text_3 = $_POST['text_3_content'];
		$sub_capitol_id = $_POST['sub_capitol_id'];
		
		$query_index ="INSERT INTO `content` (`text_1`, `text_2`, `text_3`, `sub_capitol_id`)
		VALUES
		('$content_text_1', '$content_text_2', '$content_text_3', '$sub_capitol_id')";
		if (mysqli_query($conn, $query_index)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
		}
		break;
		
		case "comments":
		$comments_img = $_POST['img_comments'];
		$comments_name = $_POST['name_comments'];
		$comments_date = $_POST['date_comments'];
		$comments_comment = $_POST['comment_comments'];
		
		$query_index ="INSERT INTO `comments` (`img`, `name`, `date`, `comment`)
		VALUES
		('$comments_img', '$comments_name', '$comments_date', '$comments_comment')";
		if (mysqli_query($conn, $query_index)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
		}
		break;
		
		case "replies":
		$replies_img = $_POST['img_replies'];
		$replies_name = $_POST['name_replies'];
		$replies_date = $_POST['date_replies'];
		$replies_reply = $_POST['reply_replies'];
		$replies_comment_id = $_POST['id_comment_replies'];
		
		$query_index ="INSERT INTO `replies` (`img`, `name`, `date`, `reply`, `comment_id` )
		VALUES
		('$replies_img', '$replies_name', '$replies_date', '$replies_reply', '$replies_comment_id' )";
		if (mysqli_query($conn, $query_index)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query_index . "<br>" . mysqli_error($conn);
		}
		break;
		
		
	}
	
} 




























?>