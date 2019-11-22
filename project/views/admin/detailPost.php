
<?php 
	include_once('left-top.php');
 ?>
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
			
				<img src="public/home/images/<?= $post['thumbnail'] ?>" width="200px" height="200px">
			</td>
		</tr>
		<tr>
			<td>description</td>
			<td><?php echo $post['description']; ?></td>
		</tr>
		<tr>
			<td>content</td>
			<td><?= htmlspecialchars_decode ($post['content']); ?></td>
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
</table>
<?php 
	include_once('footer.php');
 ?>