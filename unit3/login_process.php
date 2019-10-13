<?php 
	session_start();
	echo "<pre>";
		echo $_POST;
	echo "</pre>";

	if ($_POST['user']=='uyen' && $_POST['pwd']=='123') {
		$_SESSION['islogin']=true;
		header('Location: admin.php');
	}else{
		setcookie('msg','failllllllllllllll',time()+3);
		header('Location: login.php');
	}
 ?>