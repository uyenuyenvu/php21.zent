<?php 
	session_start();
	echo $_GET['id'];
	for ($i=0; $i < count($_SESSION['sanpham']) ; $i++) { 
		if ( isset($_SESSION['giohang'][$i]) && $_SESSION['giohang'][$i]['id']==$_GET['id']) {
			$cs=$i;
		}
	}
	echo $cs;
	unset($_SESSION['giohang'][$cs]);
	header('Location: giohang.php');
	
 ?>