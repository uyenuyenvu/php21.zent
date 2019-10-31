<?php 

	class categories{
		var $name;
		var $slug;
		var $parent;
		var $thumbnail;
		var $decription;

		function show(){
			?>
				<!DOCTYPE html>
				<html lang="en">
				<head>
					<meta charset="UTF-8">
					<title>categories</title>
					<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

				    <!-- Optional theme -->
				    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

				    <!-- Latest compiled and minified JavaScript -->
				    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
				</head>
				<body>
					<h3 align="center">Categories</h3>
					<div class="container">
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">value</th>
					      </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">name</th>
					      <td><?php echo $this->name; ?></td>
					     
					    </tr>
					    <tr>
					      <th scope="row">slug</th>
					      <td><?php echo $this->slug; ?></td>
					     
					    </tr>
					    <tr>
					      <th scope="row">parent</th>
					      <td><?php echo $this->parent; ?></td>
					     
					    </tr>
					    <tr>
					      <th scope="row">images</th>
					      <td><img src="<?= $this->images?>" alt=""></td>					     
					    </tr>
					    <tr>
					      <th scope="row">decription</th>
					      <td><?php echo $this->decription; ?></td>
					     
					    </tr>
					  </tbody>
					</table>
				</div>
				</body>
				</html>

			<?php
		}
	}

		$a=new categories();
		$a->name="thời sự";
		$a->slug="uyen-bi-bat-vi-qua-de-thuong";
		$a->parent="tin tức";
		$a->decription="uyên bị bắt vì quá dễ thương";
		$a->images="uyen.png";

		$a->show();



	
 ?>