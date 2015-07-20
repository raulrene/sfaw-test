<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
	</head>
	<body>
	<div class="login_admin">
	<h3>Login user</h3>
	<form action="login_users.php" method="post">
		Username:<input type="text" name="username" /><br/>
		Password :<input type="password" name="password" /><br/>
		<input class= "submit" type="submit" name="login" value="Login"/>
	</form>
	</div>
	<div class="login_admin">
	<h3>Register user</h3>
	<form action="register_users.php" method="post">
		Username:<input type="text" name="username" /><br/>
		Password :<input type="password" name="password" /><br/>
		E-mail :<input type="text" name="email" /><br/>
		<input class= "submit" type="submit" name="register" value="Register"/>
	</form>
	</div>
</body>
</html>