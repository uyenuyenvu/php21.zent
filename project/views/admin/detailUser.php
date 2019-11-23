<?php 
	include_once('left-top.php');
 ?>
 
 	<h1 align="center"><b>TRANG CÁ NHÂN</b></h1>
 	<a href="?mod=user&act=index" class="btn btn-success"><< back to list</a>
	<table class="table table-striped">
		<tr>
			<td>ID</td>
			<td><?php echo $user['id']; ?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo $user['name']; ?></td>
		</tr>
		<tr>
			<td>img</td>
			<td>
			
				<img src="public/home/images/<?= $user['avatar'] ?>" width="200px" height="200px">
			</td>
		</tr>
		<tr>
			<td>email</td>
			<td><?php echo $user['email']; ?></td>
		</tr>
	

		<tr>
			<td>created at</td>
			<td><?php echo $user['created_at']; ?></td>
		</tr>
		<tr>
			<td>updated at</td>
			<td><?php 
				if($user['updated_at']==NULL) echo "no update"; else echo $user['updated_at'];
			 ?></td>
		</tr>
	</table>
	<?php if(isset($_GET['i'])){ ?>
		<a href="?mod=user&act=edit&id=<?= $_GET['id']?>" class="btn btn-success">Update</a>
	<?php } ?>

<?php 
	include_once('footer.php');
 ?>
