<?php 
	session_start();

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>GIO HANG</title>
 	 <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
 </head>
 <body>
 	<table class="table table-sm">
 		<tr>
 		<td>ID</td>
 		<td>Tên sp</td>
 		<td>Sô lượng</td>
 		<td>Đơn giá</td>
 		<td>Thành tiền</td>
 		<td>Thời gian cập nhật</td>
 		<td>Xóa</td>
 	</tr>
 	<?php 
 	$s=0;
 		for ($i=0; $i <count($_SESSION['sanpham']) ; $i++) { 
 			if (isset($_SESSION['giohang'][$i])) {
 				# code...
 			
 			echo "<tr>";
 				echo "<td>";
 					echo $_SESSION['giohang'][$i]['id'];

 				echo "</td>";
 					echo "<td>";
 					echo $_SESSION['giohang'][$i]['name'];

 				echo "</td>";
 					echo "<td>";
 					echo $_SESSION['giohang'][$i]['soluong'];

 				echo "</td>";
 					echo "<td>";
 					echo $_SESSION['giohang'][$i]['dongia'];

 				echo "</td>";
 					echo "<td>";
 					echo $_SESSION['giohang'][$i]['dongia']*$_SESSION['giohang'][$i]['soluong'];
 					$s+=$_SESSION['giohang'][$i]['dongia']*$_SESSION['giohang'][$i]['soluong'];

 				echo "</td>";
 					echo "<td>";
 					echo $_SESSION['giohang'][$i]['time'];

 			?>
 			<td>
 				<a href="xoa.php?id=<?php echo $_SESSION['giohang'][$i]['id']; ?>" class="btn btn-primary" > xóa khỏi giỏ hàng</a>
 			</td>
 			
 		<?php } ?>
 	<?php } ?>
 			<tr>
 			<td colspan="7"> Tổng tiền tất cả các sản phẩm là: <?php echo $s; ?> VNĐ</td>
				</tr>
 	</table>
 </body>
 </html>