<?php 
     include("Lmenu.php"); 
    include("Tmenu.php");
	$id=$_GET['id'];
	include('conection.php');

	$query = "SELECT * FROM posts WHERE id=".$id;
	$result = $conn->query($query);


	$row = $result->fetch_assoc();

	$post=$row;
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
 	<a href="posts.php" class="btn btn-success"><< back to home</a>
	<table class="table table-striped">
		<tr>
			<td>ID</td>
			<td><?php echo $post['id']; ?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo $post['title']; ?></td>
		</tr>
		<tr>
			<td>img</td>
			<td>
			
				<img src="<?= $post['thumbnail'] ?>" width="200px" height="200px">
			</td>
		</tr>
		<tr>
			<td>description</td>
			<td><?php echo $post['description']; ?></td>
		</tr>
		<tr>
			<td>slug</td>
			<td><?php echo $post['slug']; ?></td>
		</tr>
		<tr>
			<td>parent id</td>
			<td><?php echo $post['user_id']; ?></td>
		</tr>
		<tr>
			<td>created at</td>
			<td><?php echo $post['category_id']; ?></td>
		</tr>
		<tr>
			<td>created at</td>
			<td><?php echo $post['created_at']; ?></td>
		</tr>

		
		<tr>
			<td>updated at</td>
			<td><?php 
				if($post['updated_at']==NULL) echo "no update"; else echo $post['updated_at'];
			 ?></td>
		</tr>
 </body>
 </html>
  <?php 
    include("Fotter.php")
 ?>