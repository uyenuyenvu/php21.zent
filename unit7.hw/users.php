<?php 

	class users{
		var $name;
		var $email;
		var $password;
		var $avatar;

		function show(){
			?>
				<!DOCTYPE html>
				<html lang="en">
				<head>
					<meta charset="UTF-8">
					<title>users</title>
					<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

				    <!-- Optional theme -->
				    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

				    <!-- Latest compiled and minified JavaScript -->
				    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
				</head>
				<body>
					<h3 align="center">users</h3>
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
					      <th scope="row">email</th>
					      <td><?php echo $this->email; ?></td>
					     
					    </tr>
					    <tr>
					      <th scope="row">password</th>
					      <td><?php echo $this->password; ?></td>
					     
					    </tr>
					    <tr>
					      <th scope="row">avatar</th>
					      <td><img src="<?= $this->avatar?>" alt=""></td>					     
					    </tr>
					  </tbody>
					</table>
				</div>
				</body>
				</html>

			<?php
		}
	}

		$a=new users();
		$a->name="Vũ Thị Uyên";
		$a->email="uyenvt.vnua@gmail.com";
		$a->password="123456";
		$a->avatar="uyen.png";

		$a->show();



	
 ?>