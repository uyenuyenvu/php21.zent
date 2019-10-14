<?php 
	session_start(); 
	$_SESSION['sanpham'][0]=array(
			'id'=>'SP01',
			'name'=>'uyên',
			'rate'=>1000000,
		);
	$_SESSION['sanpham'][1]=array(
			'id'=>'SP02',
			'name'=>'tuấn',
			'rate'=>2000000,
		);
	$_SESSION['sanpham'][2]=array(
			'id'=>'SP03',
			'name'=>'thực',
			'rate'=>3000000,
		);
	$_SESSION['sanpham'][3]=array(
			'id'=>'SP04',
			'name'=>'thi',
			'rate'=>4000000,
		);
	$_SESSION['sanpham'][4]=array(
			'id'=>'SP05',
			'name'=>'thầy thắng',
			'rate'=>5000000,
		);


	// echo "<pre>";
	// 	print_r($_SESSION);
	// echo "</pre>";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>gio hang</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<form action="xuli.php" method="GET">
	<table class="table table-sm">
		<tr>
			<td>Mã sp</td>
			<td>Tên sp</td>
			<td>Đơn giá</td>
			<td><a href="giohang.php" class="btn btn-primary">Xem giỏ hàng</a></td>
		</tr>
		<tr>
			<td>SP01</td>
			<td>uyên</td>
			<td>1.000.000</td>
			<td>
				<a href="xuli.php?id=SP01"  class="btn btn-primary" >Thêm vào giỏ hàng</a>
			</td>
		</tr>
		<tr>
			<td>SP02</td>
			<td>tuấn</td>
			<td>2.000.000</td>
			<td><a href="xuli.php?id=SP02" class="btn btn-primary">Thêm vào giỏ hàng</a></td>
		</tr>
		<tr>
			<td>SP03</td>
			<td>thực</td>
			<td>3.000.000</td>
			<td><a href="xuli.php?id=SP03" class="btn btn-primary">Thêm vào giỏ hàng</a></td>
		</tr>
		<tr>
			<td>SP04</td>
			<td>thi</td>
			<td>4.000.000</td>
			<td><a href="xuli.php?id=SP04" class="btn btn-primary">Thêm vào giỏ hàng</a></td> 
		</tr>
		<tr>
			<td>SP05</td>
			<td>thầy thắng</td>
			<td>5.000.000</td>
			<td><a href="xuli.php?id=SP05" class="btn btn-primary">Thêm vào giỏ hàng</a></td>
		</tr>
	</table>
	</form>
</body>
</html>