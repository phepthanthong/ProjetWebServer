<?php 
session_start();
$error=''; // Variable To Store Error Message
if (isset($_POST['btn_login'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
	else
	{
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysql_connect("localhost", "root", "");		
		// Selecting Database
		$db = mysql_select_db("classique", $connection);
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query("select * from abonné where Password='$password' AND Login='$username'", $connection);
		$rows = mysql_num_rows($query);
		if ($rows == 1) {
			$_SESSION['login_user']=$username; // Initializing Session
			header("location: catalogue.html.twig"); // Redirecting To Other Page
		} else {
			$error = "Username or Password is invalid";
		}
	mysql_close($connection); // Closing Connection
	}
}
?>