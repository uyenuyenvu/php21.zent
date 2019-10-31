<?php 

	class posts{
		var $title;
		var $slug;
		var $decription;
		var $content;

		function show(){
			?>
				<!DOCTYPE html>
				<html lang="en">
				<head>
					<meta charset="UTF-8">
					<title>posts</title>
					<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

				    <!-- Optional theme -->
				    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

				    <!-- Latest compiled and minified JavaScript -->
				    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
				</head>
				<body>
					<h3 align="center">posts</h3>
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
					      <th scope="row">title</th>
					      <td><?php echo $this->title; ?></td>
					     
					    </tr>
					    <tr>
					      <th scope="row">slug</th>
					      <td><?php echo $this->slug; ?></td>
					     
					    </tr>
					    <tr>
					      <th scope="row">decription</th>
					      <td><?php echo $this->decription; ?></td>
					     
					    </tr>
					    <tr>
					      <th scope="row">content</th>
					      <td><?php echo $this->content; ?></td>					     
					    </tr>
					  </tbody>
					</table>
				</div>
				</body>
				</html>

			<?php
		}
	}

		$a=new posts();
		$a->title="thời sự";
		$a->slug="uyen-bi-bat-vi-qua-de-thuong";
		$a->decription="uyên bị bắt vì quá dễ thương";
		$a->content="thật ra thì dễ thương thôi chứ không có bị bắt";

		$a->show();



	
 ?>