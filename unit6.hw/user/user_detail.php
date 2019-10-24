<?php 
	$id=$_GET['id'];
	include('conection.php');

	$query = "SELECT * FROM users WHERE id=".$id;
	$result = $conn->query($query);


	$row = $result->fetch_assoc();

	$user=$row;
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
			<td><?php echo $user['id']; ?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo $user['name']; ?></td>
		</tr>
		<tr>
			<td>avatar</td>
			<td>
				<img src=<?= $user['avatar']?>>
			</td>
		</tr>
		<tr>
			<td>email</td>
			<td><?php echo $user['email']; ?></td>
		</tr>
		<tr>
			<td>password</td>
			<td><?php echo $user['password']; ?></td>
		</tr>
		<tr>
			<td>created at</td>
			<td><?php echo $user['created_at']; ?></td>
		</tr>
		<tr>
			<td>updated at</td>
			<td><?php 
				if($user['updated_at']==NULL) echo "no update"; else echo $user['updated_at'];
			 ?>
			 	
			 </td>
		</tr>
 </body>
 </html>