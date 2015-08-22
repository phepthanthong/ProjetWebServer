<?php 
include("login.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page d'authentification</title>
</head>
<body>
	<div id="main">
		<h1>PHP Login Session Example</h1>
		<div id="login">
			<h2>Login Form</h2>
			<form action="" method="post">
				<label>UserName :</label>
				<input id="name" name="username" placeholder="username" type="text">
				<label>Password :</label>
				<input id="password" name="password" placeholder="**********" type="password">
				<input name="submit" type="submit" value="Login">
				<span><?php echo $error; ?></span>
			</form>
		</div>
	</div>
</body>
</html>