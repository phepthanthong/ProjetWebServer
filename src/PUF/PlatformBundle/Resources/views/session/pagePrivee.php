<?php
//include('session.php');
session_start();
if (empty($_SESSION['login_user']))
	header("Location: authentification.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page d'accueil</title>	
</head>
<body>
	<h2>C'est une page privée</h2>
	<b id="welcome">Bonjour : <i><?php echo $_SESSION['login_user']; ?></i></b>
	<b id="logout"><a href="logout.php">Se déconnecter</a></b> <br>
	<a href="autrePagePrivee.php">Autre page privée</a>
	
</body>
</html>