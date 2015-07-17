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
			var_dump($_POST);
			$query_index ="UPDATE `index` SET title ='$index_title', name = '$index_name' , text = '$index_text', img = '$index_img', tag = '$index_tag' WHERE id='$index_id'";
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