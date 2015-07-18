<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
	</head>
	<body>
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "primarydb";
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
//var_dump($_POST);
if (isset ($_POST['add'])){
if (isset($_POST) && !empty($_POST)){
	switch($_POST['hidden']){
		case "index":
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
}
else {
	if(isset($_POST['update'])){
		if (isset($_POST) && !empty($_POST)){
			switch($_POST['hidden']){
			case "index":
		$query_edit = "SELECT * FROM `index`";
		$data = mysqli_query($conn, $query_edit);
		echo '<div class="container_tabel">';
		echo "<h4>INDEX</h4>";
		 foreach ($data as $row){
		echo '<table class="tabel">';
			echo '<tr></tr>';
			echo '<tr>';
				echo '<td>ID</td>';
				echo '<td>NAME</td>';
				echo '<td>TITLE</td>';
				echo '<td>IMG</td>';
				echo '<td>TEXT</td>';
				echo '<td>TAG</td>';
			echo '</tr>';
			
			echo '<form class = "index_form" action="delete.php" method="post">';
			echo '<tr>';
			
			echo'<input type="hidden" name="hidden" value="index" />';
			echo '<td width="30px" align="center"><input class= "input_form" type="text" name="id" value="' . $row['id'] . '"/></td>';
			echo '<td width="120px" align="center"><input class= "input_form" type="text" name="name" value="' . $row['name'] . '"/></td>';
			echo '<td width="120px" align="center"><input class= "input_form" type="text" name="title" value="' . $row['title'] . '"/></td>';
			echo '<td width="120px" align="center"><input class= "input_form" type="text" name="img" value="' . $row['img'] . '"/></td>';
			echo '<td width="120px" align="center"><input class= "input_form" type="text" name="text" value="' . $row['text'] . '"/></td>';
			echo '<td><input class= "input_form" type="text" name="tag" value="' . $row['tag'] . '"/></td></tr>';
		echo '</table>';
		echo '<input class="delete" type="submit" name="delete" value="Delete" />';
		echo '<input class="delete" type="submit" name="edit" value="Edit" />';
			echo '</form>';}
			echo '</div>';
		break;
		
			case "courses":
			$query_edit = "SELECT * FROM `courses`";
			$data = mysqli_query($conn, $query_edit);
			echo '<div class="container_tabel">';
			echo "<h4>COURSES</h4>";
			foreach ($data as $row){
				echo '<table class="tabel">';
				echo '<tr></tr>';
				echo '<tr>';
				echo '<td>ID</td>';
				echo '<td>NAME</td>';
				echo '<td>PRICE</td>';
				echo '<td>IMG</td>';
				echo '<td>AUTHOR</td>';
				echo '<td>USERS</td>';
				echo '<td>STARS</td>';
				echo '</tr>';
				
				echo '<form class="index_form" action="delete.php" method="post" >';
				echo '<tr>';
				
				echo'<input type="hidden" name="hidden" value="courses" />';
				echo '<td width="30px" align="center"><input class= "input_form" type="text" name="id" value="' . $row['id'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="name" value="' . $row['name'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="price" value="' . $row['price'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="img" value="' . $row['img'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="author" value="' . $row['author'] . '"/></td>';
				echo '<td><input class= "input_form" type="text" name="users" value="' . $row['users'] . '"/></td>';
				echo '<td><input class= "input_form" type="text" name="stars" value="' . $row['stars'] . '"/></td></tr>';
				echo '</table>';
				echo '<input class="delete" type="submit" name="delete" value="Delete" />';
				echo '<input class="delete" type="submit" name="edit" value="Edit" />';
			echo '</form>';}
			echo '</div>';
			break;
			
			case "capitol":
			$query_edit = "SELECT * FROM `capitol`";
			$data = mysqli_query($conn, $query_edit);
			echo '<div class="container_tabel">';
			echo "<h4>CAPITOL</h4>";
			foreach ($data as $row){
				echo '<table class="tabel">';
				echo '<tr></tr>';
				echo '<tr>';
				echo '<td>ID</td>';
				echo '<td>CAPITOL</td>';
				echo '<td>URL</td>';
				echo '</tr>';	
				echo '<form class="index_form" action="delete.php" method="post" >';
				echo '<tr>';	
				echo'<input type="hidden" name="hidden" value="capitol" />';
				echo '<td width="30px" align="center"><input class= "input_form" type="text" name="id" value="' . $row['id'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="capitol" value="' . $row['capitol'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="url" value="' . $row['url'] . '"/></td></tr>';
				echo '</table>';
				echo '<input class="delete" type="submit" name="delete" value="Delete" />';
				echo '<input class="delete" type="submit" name="edit" value="Edit" />';
			echo '</form>';}
			echo '</div>';
			break;
			
			case "subcapitol":
			$query_edit = "SELECT * FROM `sub_capitol`";
			$data = mysqli_query($conn, $query_edit);
			echo '<div class="container_tabel">';
			echo "<h4>UBCAPITOL</h4>";
			foreach ($data as $row){
				echo '<table class="tabel">';
				echo '<tr></tr>';
				echo '<tr>';
				echo '<td>ID</td>';
				echo '<td>ID CAPITOL</td>';
				echo '<td>URL</td>';
				echo '</tr>';	
				echo '<form class="index_form" action="delete.php" method="post" >';
				echo '<tr>';	
				echo'<input type="hidden" name="hidden" value="sub_capitol" />';
				echo '<td width="30px" align="center"><input class= "input_form" type="text" name="id" value="' . $row['id'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="sub_capitol" value="' . $row['sub_capitol'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="capitol_id" value="' . $row['capitol_id'] . '"/></td></tr>';
				echo '</table>';
				echo '<input class="delete" type="submit" name="delete" value="Delete" />';
				echo '<input class="delete" type="submit" name="edit" value="Edit" />';
			echo '</form>';}
			echo '</div>';
			break;
			
			case "content":
			$query_edit = "SELECT * FROM `content`";
			$data = mysqli_query($conn, $query_edit);
			echo '<div class="container_tabel">';
			echo "<h4>CONTENT</h4>";
			foreach ($data as $row){
				echo '<table class="tabel">';
				echo '<tr></tr>';
				echo '<tr>';
				echo '<td>ID</td>';
				echo '<td>TEXT 1</td>';
				echo '<td>TEXT 2</td>';
				echo '<td>TEXT 3</td>';
				echo '<td>ID SUBCAPITOL</td>';
				echo '</tr>';
				
				echo '<form class = "index_form" action="delete.php" method="post">';
				echo '<tr>';
				
				echo'<input type="hidden" name="hidden" value="content" />';
				echo '<td width="30px" align="center"><input class= "input_form" type="text" name="id" value="' . $row['id'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="text_1" value="' . $row['text_1'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="text_2" value="' . $row['text_2'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="text_3" value="' . $row['text_3'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="sub_capitol_id" value="' . $row['sub_capitol_id'] . '"/></td>';
				echo '</table>';
				echo '<input class="delete" type="submit" name="delete" value="Delete" />';
				echo '<input class="delete" type="submit" name="edit" value="Edit" />';
			echo '</form>';}
			echo '</div>';
			break;
			
			case "comments":
			$query_edit = "SELECT * FROM `comments`";
			$data = mysqli_query($conn, $query_edit);
			echo '<div class="container_tabel">';
			echo "<h4>COMMENTS</h4>";
			foreach ($data as $row){
				echo '<table class="tabel">';
				echo '<tr></tr>';
				echo '<tr>';
				echo '<td>ID</td>';
				echo '<td>IMG</td>';
				echo '<td>NAME</td>';
				echo '<td>DATE</td>';
				echo '<td>COMMENT</td>';
				echo '</tr>';
				
				echo '<form class = "index_form" action="delete.php" method="post">';
				echo '<tr>';
				
				echo'<input type="hidden" name="hidden" value="comments" />';
				echo '<td width="30px" align="center"><input class= "input_form" type="text" name="id" value="' . $row['id'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="img" value="' . $row['img'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="name" value="' . $row['name'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="date" value="' . $row['date'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="comment" value="' . $row['comment'] . '"/></td>';
				echo '</table>';
				echo '<input class="delete" type="submit" name="delete" value="Delete" />';
				echo '<input class="delete" type="submit" name="edit" value="Edit" />';
			echo '</form>';}
			echo '</div>';
			break;
			
			
			case "replies":
			$query_edit = "SELECT * FROM `replies`";
			$data = mysqli_query($conn, $query_edit);
			echo '<div class="container_tabel">';
			echo "<h4>REPLIES</h4>";
			foreach ($data as $row){
				echo '<table class="tabel">';
				echo '<tr></tr>';
				echo '<tr>';
				echo '<td>ID</td>';
				echo '<td>IMG</td>';
				echo '<td>NAME</td>';
				echo '<td>DATE</td>';
				echo '<td>REPLY</td>';
				echo '<td>COMMENT ID</td>';
				echo '</tr>';
				
				echo '<form class = "index_form" action="delete.php" method="post">';
				echo '<tr>';
				
				echo'<input type="hidden" name="hidden" value="replies" />';
				echo '<td width="30px" align="center"><input class= "input_form" type="text" name="id" value="' . $row['id'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="img" value="' . $row['img'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="name" value="' . $row['name'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="date" value="' . $row['date'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="reply" value="' . $row['reply'] . '"/></td>';
				echo '<td width="120px" align="center"><input class= "input_form" type="text" name="comment_id" value="' . $row['comment_id'] . '"/></td>';
				echo '</table>';
				echo '<input class="delete" type="submit" name="delete" value="Delete" />';
				echo '<input class="delete" type="submit" name="edit" value="Edit" />';
			echo '</form>';}
			echo '</div>';
			break;
			
			
			
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		}
	}	
}
}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
	
	
	
	

	
	
	
