<?php 

	$id=$_GET['id'];
	include('conection.php');

	$query = "SELECT * FROM categories WHERE id=".$id;
	$result = $conn->query($query);


	$row = $result->fetch_assoc();

	$cate=$row;
	// echo "<pre>";
	// print_r($cate);
	// echo "</pre>";
	// echo "<br>".$cate['name'];


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>edit</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Edit Category</h3>
    <a href="index.php" class="btn btn-success"><< Back to home</a>
    <hr>
        <form action="category_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?= $cate['id'] ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value=" <?php echo($cate['name']) ?> " >
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail"  value=" <?php echo($cate['thumbnail']) ?> " >
            </div>
            <div class="form-group">
                <label for="">parent_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="parent_id"  value=" <?php echo($cate['parent_id']) ?> " >
            </div>
            <div class="form-group">
                <label for="">slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug"  value=" <?php echo($cate['slug']) ?> " >
            </div>
            <div class="form-group">
                <label for="">description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description"  value=" <?php echo($cate['description']) ?> " >
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
 </body>
 </html>