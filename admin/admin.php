
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
	</head>
	<body>
		
		<div class="form_wrap">
			
			<div class="form">
			<form class="index_form" action="operations.php" method="post" >
			<h3>Index</h3>
			<input type="hidden" name="hidden" value="index_f" />
				<span>Title:</span><br/>
				<input class= "input_form" type="text" name="title_index"/><br/>
				<span>Name:</span><br/>
				<input class= "input_form" type="text" name="name_index"/><br/>
				<span>Text:</span><br/>
				<input class= "input_form" type="text" name="text_index"/><br/>
				<span>Img:</span><br/>
				<input class= "input_form" type="text" name="img_index"/><br/>
				<span>Tag:</span><br/>
				<input class= "input_form" type="text" name="tag_index"/><br/>
				<input class= "submit" type="submit" name="submit_index" value="Update"/>
			</form>
				<form class="index_form" action="operations.php" method="post">
					<h3>Courses</h3>
					<input type="hidden" name="hidden" value="courses">
					<span>Name:</span><br/>
					<input class= "input_form" type="text" name="name_courses"/><br/>
					<span>Price:</span><br/>
					<input class= "input_form" type="text" name="price_courses"/><br/>
					<span>Img:</span><br/>
					<input class= "input_form" type="text" name="img_courses"/><br/>
					<span>Author:</span><br/>
					<input class= "input_form" type="text" name="author_courses"/><br/>
					<span>Users:</span><br/>
					<input class= "input_form" type="text" name="user_courses"/><br/>
					<span>Stars:</span><br/>
					<input class= "input_form" type="text" name="stars_courses"/><br/>
					<input class= "submit" type="submit" name="submit_courses" value="Update"/>
				</form>
				<form class="index_form" action="operations.php" method="post">
					<h3>Capitol</h3>
					<input type="hidden" name="hidden" value="capitol">
					<span>Capitol:</span><br/>
					<input class= "input_form" type="text" name="capitol_capitol"/><br/>
					<span>URL:</span><br/>
					<input class= "input_form" type="text" name="url_capitol"/><br/>
					<input class= "submit" type="submit" name="submit_capitol" value="Update"/>
				</form>
				<form class="index_form" action="operations.php" method="post">
					<h3>Subcapitol</h3>
					<input type="hidden" name="hidden" value="subcapitol">
					<span>Subcapitol:</span><br/>
					<input class= "input_form" type="text" name="subcapitol_subcapitol"/><br/>
					<span>Id Capitol:</span><br/>
					<input class= "input_form" type="text" name="id_capitol_subcapitol"/><br/>
					<input class= "submit" type="submit" name="submit_subcapitol" value="Update"/>
				</form>
			</div>
			<div class="form">
				<form class="index_form" action="operations.php" method="post">
					<h3>Content</h3>
					<input type="hidden" name="hidden" value="content">
					<span>Text 1:</span><br/>
					<input class= "input_form" type="text" name="text_1_content"/><br/>
					<span>Text 2:</span><br/>
					<input class= "input_form" type="text" name="text_2_content"/><br/>
					<span>Text 3:</span><br/>
					<input class= "input_form" type="text" name="text_3_content"/><br/>
					<span>Id Subcapitol:</span><br/>
					<input class= "input_form" type="text" name="sub_capitol_id"/><br/>
					<input class= "submit" type="submit" name="submit_content" value="Update"/>
				</form>
				<form class="index_form" action="operations.php" method="post">
					<h3>Comments</h3>
					<input type="hidden" name="hidden" value="comments">
					<span>Img:</span><br/>
					<input class= "input_form" type="text" name="img_comments"/><br/>
					<span>Name:</span><br/>
					<input class= "input_form" type="text" name="name_comments"/><br/>
					<span>Date:</span><br/>
					<input class= "input_form" type="text" name="date_comments"/><br/>
					<span>Comment:</span><br/>
					<input class= "input_form" type="text" name="comment_comments"/><br/>
					<input class= "submit" type="submit" name="submit_comments" value="Update"/>
				</form>
				<form class="index_form" action="operations.php" method="post">
					<h3>Replies</h3>
					<input type="hidden" name="hidden" value="replies"/>
					<span>Img:</span><br/>
					<input class= "input_form" type="text" name="img_replies"/><br/>
					<span>Name:</span><br/>
					<input class= "input_form" type="text" name="name_replies"/><br/>
					<span>Date:</span><br/>
					<input class= "input_form" type="text" name="date_replies"/><br/>
					<span>Reply:</span><br/>
					<input class= "input_form" type="text" name="reply_replies"/><br/>
					<span>Id Comments:</span><br/>
					<input class= "input_form" type="text" name="id_comment_replies"/><br/>
					<input class= "submit" type="submit" name="submit_replies" value="Update"/>
				</form>
			</div>
		</div>
	</body>
</html>
