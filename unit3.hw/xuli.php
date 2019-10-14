<h1>xử lí</h1>
<?php 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	date('d/m/Y - H:i:s');
	session_start();
	echo $_GET['id'];
	for ($i=0; $i <count($_SESSION['sanpham']) ; $i++) { 
		if ($_SESSION['sanpham'][$i]['id']==$_GET['id']) {
			$cs=$i;
		}
	}
	$_SESSION['information']=array(
									'id'=>$_GET['id'],
									'name'=>$_SESSION['sanpham'][$cs]['name'],
									'soluong'=>1,
									'dongia'=>$_SESSION['sanpham'][$cs]['rate'],
									'time'=>date('d/m/Y - H:i:s'),
									);
	$cs1=-1;
	for ($i=0; $i <count($_SESSION['giohang']) ; $i++) { 
		if ($_GET['id']==$_SESSION['giohang'][$i]['id']) {
			$cs1=$i;
		}
	}
	if($cs1==-1){
		$_SESSION['giohang'][]=$_SESSION['information'];
	}else{
		$_SESSION['giohang'][$cs1]['soluong']++;
		$_SESSION['giohang'][$cs1]['time']=date('d/m/Y - H:i:s');
	}
	echo "<pre>";
		print_r($_SESSION['giohang']);
	echo "</pre>";
	header('Location: sanpham.php');
 ?>