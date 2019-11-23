
<?php 
	include_once('left-top.php');
 ?>
 	<h1 align="center"><b>XEM CHI TIẾT</b></h1>
 	<a href="?mod=category&act=index" class="btn btn-success"><< back to home</a>
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
			
				<img src="public/home/images/<?= $cate['thumbnail'] ?>" width="200px" height="200px">
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
				if($cate['updated_at']==NULL) echo "no update"; else echo $cate['updated_at'];
			 ?></td>
		</tr>
</table>
<?php 

	include_once('footer.php');
 ?>