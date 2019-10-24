<?php 
		session_start();
		include('conection.php');

		$user = array();

		while($row = $result->fetch_assoc()) { 
			$user[] = $row;
		}

		$_SESSION['user']=$user;
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
 	<h1 align="center"><b>Neww</b></h1>
 	<a href="user_add.php" class="btn btn-success">++ Add</a>
	<form action="" method="GET">
	<table class="table table-striped">
		<tr>
			<td>Code</td>
			<td>Name</td>
			<td>img</td>
			<td>#</td>
		</tr>
		<?php 
			foreach ($_SESSION['user'] as $key=>$value)
			if($value['deleted_at']==NULL) {
				echo "<tr>";
					echo "<td>".$value['id']."</td>";
					echo "<td>".($value['name'])."</td>";
					echo '<td><img src="'.$value['avatar'].'"" style="width: 60px; height: 60px;"></td>';
					echo "<td>".' <a href="user_detail.php?id='.$value['id'].'" class="btn btn-success">xem</a> '.'<a href="user_delete_process.php?id='.$value['id'].'" class="btn btn-success">xóa</a>'.' <a href="user_edit.php?id='.$value['id'].'" class="btn btn-success">sửa</a> '."</td>";
				echo "</tr>";
			}
		 ?>
 </body>
 </html>