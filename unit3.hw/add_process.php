<?php 
	
	foreach ($_GET as $key => $value) {
		if ($_GET[$key]=="") {
			header('Location: add.php');
			setcookie('msg','<h2 style="color: red">điền đủ vào, ai cho để trống</h2><br>',time()+3);
		}}
	session_start();
	setcookie('process','<div style="width: 100%; height: 50px; border:1px solid gray; background-color: #999999"> <h2>Thêm mới thành công!</h2></div>', time()+5);
	$_SESSION['information']=array(
				'id'=>$_GET['id'],
				'name'=>$_GET['name'],
				'clas'=>$_GET['clas'],
				'sch'=>$_GET['sch'],
				'nbp'=>$_GET['nbp'],
				'mail'=>$_GET['mail'],

	);
	$_SESSION['data'][]=$_SESSION['information'];

	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";
	
	header('Location: list.php');


 ?>