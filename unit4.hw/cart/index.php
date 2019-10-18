<?php 
	include('data.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>uyen</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 align="center">UYEN SHOP</h1>
	<a href="cart.php" class="btn btn-success">View Cart >></a>
	<form action="" method="GET">
	<table class="table table-striped">
		<tr>
			<td>Code</td>
			<td>Name</td>
			<td>Price</td>
			<td>Quantity</td>
			<td>Image</td>
			<td>#</td>
		</tr>
		<?php 
			foreach ($data as $key=>$value) {
				echo "<tr>";
					echo "<td>".$key."</td>";
					echo "<td>".$value['name']."</td>";
					echo "<td>".number_format($value['price'])."</td>";
					echo "<td>".$value['quantity']."</td>";
					echo '<td><img src="img/'.$value['img'].'"" style="width: 60px; height: 60px;"></td>';
					echo '<td> <a href="add_process.php?code='.$key.'" class="btn btn-success">Add to Cart</a> </td>';
				echo "</tr>";
			}
		 ?>
	</table>
	</form>
</body>
</html>