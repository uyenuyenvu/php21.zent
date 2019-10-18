<?php 
	echo $_GET['code'];
	include('data.php');
	session_start();
	if (isset($_SESSION['product'][$_GET['code']]) && $_SESSION['product'][$_GET['code']]['quantity']<$data[$_GET['code']]['quantity']) {
		$_SESSION['product'][$_GET['code']]['quantity']++;
	}elseif (isset($_SESSION['product'][$_GET['code']]) && $_SESSION['product'][$_GET['code']]['quantity']==$data[$_GET['code']]['quantity']) {
		 echo '<script language="javascript">';
 			 echo 'alert(so luong trong kho khong du)'; 
 		 echo '</script>';
 		 $_SESSION['product'][$_GET['code']]['quantity']=$data[$_GET['code']]['quantity'];
		
	}else{
		$_SESSION['product'][$_GET['code']]=$data[$_GET['code']];
		$_SESSION['product'][$_GET['code']]['quantity']=1;
	}
	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";

	header('Location: cart.php');
 ?>