<?php 
	include('connection.php');

	class Post{
		var $id;
		var $title;
		var $description;
		var $thumbnail;
		var $content;
		var $slug;
		var $view_count;
		var $user_id;
		var $category_id;
		var $created_at;
		var $updated_at;
		var $deleted_at;
		var $conn;

		function __construct(){

			
		}
		function creat(){
			 $connect=new Connection();
			 $posts = array();
	         $query = "SELECT * FROM posts WHERE deleted_at is null";
	         echo $query;
	         
	         $result = $connect->conn->query($query);
 
	         while($row = $result->fetch_assoc()) { 
	             $posts[] = $row;
	         }



	        $user = array();
	        $query = "SELECT * FROM users where deleted_at is null";
	        $result = $connect->conn->query($query);

	        while($row = $result->fetch_assoc()) { 
	            $user[] = $row;
	        }

	         $cate = array();
	        $query = "SELECT * FROM categories where deleted_at is null";
	        $result = $connect->conn->query($query);

	        while($row = $result->fetch_assoc()) { 
	            $cate[] = $row;
	        }
?>
		
		<!DOCTYPE html>
		<html>
		<head>
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <title>DevMind - Education And Technology Group</title>
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
		    <h3 align="center">Add New Post</h3>
		    <a href="3" class="btn btn-success"><< Back to home</a>
		    <hr> 
		        <form action="post_add_process.php" method="POST" role="form" enctype="multipart/form-data">
		            <div class="form-group">
		                <label for="">Name</label>
		                <input type="text" class="form-control" id="" placeholder="" name="title">
		            </div>
		            <div class="form-group">
		                <label for="">thumbnail</label>
		                <input type="file" class="form-control" id="thumbnail" placeholder="" name="thumbnail">
		                
		            </div>
		             <div class="form-group">
		                <label for="">content</label>
		                <textarea type="text" class="form-control" rows="7" placeholder="" name="content"></textarea> 
		                
		            </div>
		             <div class="form-group">
		                <label for="">Author</label>
		                <select  class="form-control" name="user_id">

		                    <option name="" id="" value="0" >moi chon tac gia</option>
		                    <?php foreach ($user as $key) {
		                     ?>
		                    <option name="" id="" value='<?= $key['id']?>' ><?= $key['name']?></option>
		                <?php } ?>
		                </select>
		            </div>
		            <div class="form-group">
		                <label for="">category</label>
		                <select  class="form-control" name="category_id">

		                    <option name="" id="" value="0" >moi chon danh muc</option>
		                    <?php foreach ($cate as $key) {
		                     ?>
		                    <option name="" id="" value='<?= $key['id']?>' ><?= $key['name']?></option>
		                <?php } ?>
		                </select>
		            </div>
		            <div class="form-group">
		                <label for="">slug</label>
		                <input type="text" class="form-control" id="" placeholder="" name="slug">
		            </div>
		            <div class="form-group">
		                <label for="">description</label>
		                <input type="text" class="form-control" id="" placeholder="" name="description">
		            </div>
		            <button type="submit" class="btn btn-primary">Create</button>
		        </form>
		    </div>
		</body>
		</html>

<?php

		}


	}

	$p=new Post();
	$p->creat();

 ?>