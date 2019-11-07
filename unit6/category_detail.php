<?php 
	$id=$_GET['id'];
	include('conection.php');

	$query = "SELECT * FROM categories WHERE id=".$id;
	$result = $conn->query($query);


	$row = $result->fetch_assoc();

	$cate=$row;
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>show</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<h1 align="center"><b>XEM CHI TIẾT</b></h1>
 	<a href="index.php" class="btn btn-success"><< back to home</a>
	<table class="table table-striped">
		<tr>
			<td>ID</td>
			<td><?php echo $cate['id']; ?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo $cate['name']; ?></td>
		</tr>
		<tr>
			<td>img</td>
			<td>
				<img src="'img'.<?= $cate['thumbnail']?>">
			</td>
		</tr>
		<tr>
			<td>description</td>
			<td><?php echo $cate['description']; ?></td>
		</tr>
		<tr>
			<td>slug</td>
			<td><?php echo $cate['slug']; ?></td>
		</tr>
		<tr>
			<td>parent id</td>
			<td><?php echo $cate['parent_id']; ?></td>
		</tr>
		<tr>
			<td>created at</td>
			<td><?php echo $cate['created_at']; ?></td>
		</tr>
		<tr>
			<td>updated at</td>
			<td><?php 
				if($cate['updated_at']=="NULL") echo "no update"; else echo $cate['updated_at'];
			 ?></td>
		</tr>
 </body>
 </html>