<?php 
session_start();
if (empty($_SESSION['login_user']))
	header("Location: authentification.php");
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Une autre page privée</title>
 </head>
 <body>
 	<h2>C'est une autre page privée</h2>
 	<b id="welcome">Bonjour : <i><?php echo $_SESSION['login_user']; ?></i></b>
	<b id="logout"><a href="logout.php">Se déconnecter</a></b> <br>
 </body>
 </html>