<?php
	session_start(); 
	if (!isset($_SESSION['islogin'])) {
		header('Location: login.php');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>admin page</h1>
	<a href="logout.php">LOGOUT</a>
</body>
</html>