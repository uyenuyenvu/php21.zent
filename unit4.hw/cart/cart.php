<?php 
	session_start();

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cart</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 align="center"><b>UYEN SHOP</b></h1>
	<a href="index.php" class="btn btn-success"><< Back to shop</a>
	<form action="" method="GET">
	<table class="table table-striped">
		<tr>
			<td>Code</td>
			<td>Name</td>
			<td>Price</td>
			<td>Quantity</td>
			<td>Amount</td>
			<td>Image</td>
		</tr>
		<?php 
			if (count($_SESSION['product'])==0) {
				echo "<h2 style='color: red'><b><i>Giỏ hàng trống!!!</i></b></h2>";
			}else{
			$sum=0;
			foreach ($_SESSION['product'] as $key=>$value) {
				echo "<tr>";
					echo "<td>".$key."</td>";
					echo "<td>".$value['name']."</td>";
					echo "<td>".number_format($value['price'])."</td>";
					echo "<td>";
						echo '<a href="add_process.php?code='.$key.'" class="btn btn-success">+</a>';
						echo ' '.$value['quantity'].' ';
						echo '<a href="delete.php?code='.$key.'" class="btn btn-warning">-</a>';
					echo "</td>";
					echo '<td>'.number_format($value['price']*$value['quantity'] ).'</td>';
					$sum+=$value['price']*$value['quantity'];
					echo '<td><img src="img/'.$value['img'].'"" style="width: 60px; height: 60px;"></td>';
				echo "</tr>";
			}
		 ?>
		 <tr>
		 	<td colspan="4">Tổng số tiền của giỏ hàng: </td>
		 	<td colspan="2"><?= number_format($sum) ?></td>
		 </tr>
		 <?php 
		 		include('chuyenTien.php');
		  ?>
		  <tr>
		 	<td colspan="4">Tổng số tiền của giỏ hàng: </td>
		 	<td colspan="2"><?= convert_number_to_words($sum) ?></td>
		 </tr>
		<?php } ?>
	</table>
	</form>
</body>
</html>