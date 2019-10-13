<?php 

	session_start();
	//session_destroy();
	unset($_SESSION['islogin']);
	header('Location: login.php');
 ?>