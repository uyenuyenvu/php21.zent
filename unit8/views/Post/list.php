
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
 	<a href="?mod=post&act=add" class="btn btn-success">++ Add</a>

	<form action="" method="GET">
	<table class="table table-striped">
		<tr>
			<td>Code</td>
			<td>Name</td>
			<td>img</td>
			<td>view count</td>
			<td>#</td>
		</tr>
		<?php 
			foreach ($posts as $key=>$value) 
				if ($value['deleted_at']==NULL) {
					
					echo "<tr>";
					echo "<td>".$value['id']."</td>";
					echo "<td>".($value['title'])."</td>";
					echo '<td><img src="'.$value['thumbnail'].'"" style="width: 60px; height: 60px;"></td>';
					echo "<td>".$value['view_count']."</td>";
					echo "<td>".' <a href="?mod=post&act=detail&id='.$value['id'].'&slug='.$value['slug'].'" class="btn btn-success">xem</a> '.'<a href="?mod=post&act=delete&id='.$value['id'].'" class="btn btn-success">xóa</a>'.' <a href="?mod=post&act=edit&id='.$value['id'].'" class="btn btn-success">sửa</a> '."</td>";
				echo "</tr>";
			}
		 ?>
 </body>
 </html>