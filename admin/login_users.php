<?php
include("../config/config_old.php");

if (isset($_POST) && !empty($_POST)){

$username = $_POST['username'];
$password = $_POST['password'];
//var_dump($_POST['username']);
if($username&&$password){
	$conn or die();
	$query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
	$result = mysqli_query($conn, $query ) or die(mysqli_error($conn));
	$num_rows = mysqli_num_rows($result);
	//echo $num_rows;
	if ($num_rows != 0){
		while($row = mysqli_fetch_assoc($result)){
			$dbusername = $row['username'];	
			$dbpassword = $row['password'];	
		}
		if($username == $dbusername && $password == $dbpassword){
				echo "you are in";
		}
		else 
			echo "invalid informations";
	}else die("invalid information");
}else {
	die("Insert username and password");
}
}
?>
<?php
session_start();
header("Location: ../index.php"); 
$_SESSION['isLogged'] = true;
exit;
?>