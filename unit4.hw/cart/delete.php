<?php 
	session_start();

	if ($_SESSION['product'][$_GET['code']]['quantity']>1) {
		$_SESSION['product'][$_GET['code']]['quantity']--;
	}else{
		unset($_SESSION['product'][$_GET['code']]);
	}
	header('Location: cart.php');
 ?>