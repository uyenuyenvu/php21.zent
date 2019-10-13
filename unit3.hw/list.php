<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>uyen</title>
	 <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 align="center">LIST USER</h1>
	<form action="add.php" method="GET" role="form">
		<button class="btn btn-primary"> Thêm mới</button>
	</form>
	<?php 
		if (isset($_COOKIE['process'])) {
			echo $_COOKIE['process'];
		}
	 ?>
	<table class="table table-striped">
		<tr>
			<td>#</td>
			<td>ID</td>
			<td>Name</td>
			<td>Action</td>
		</tr>
	<?php 
		
		$i=0;
		foreach ($_SESSION['data'] as $key) {
			$i++;
	         ?>
	         <tr>
	         	<td><?php echo $i; ?></td>
	         	<td><?php echo $key['id']; ?></td>
	         	<td><?php echo $key['name']; ?></td>
	         	<td>
	         		<a href="detail.php?id=<?php echo $key['id']; ?>"  class="btn btn-primary" >Detail</a>
	         		<a href="delete.php?id=<?php echo $key['id']; ?>"  class="btn btn-danger" >Delete</a>
	         	</td>

	         </tr>
	     
		<?php 
	} 
	if ($i==0) {
			echo '<tr><td><h2 style="color: red">Danh sách rỗng!</h2></td></tr>';
		}
	?>

	</table>
	
</body>
</html>