<?php 
	session_start();
	foreach ($_SESSION['data'] as $key=>$value) {
		if ($value['id']==$_GET['id']) {
			unset($_SESSION['data'][$key]);
		}
	}
	header('Location: list.php');
 ?>