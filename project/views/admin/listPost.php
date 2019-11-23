<?php 
    include('left-top.php');

    
 ?>
	
 	<a href="?mod=post&act=add" class="btn btn-success">++ Add</a>
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
					?>
					
					<tr>
						<td><?= $value['id']?></td>
					<td><?= $value['title']?></td>
					<td>
						<img src="public/home/images/<?= $value['thumbnail']?>" style="width: 60px; height: 60px;">
					</td>
					
					
					<td><?= $value['view_count'] ?></td>
					<td> 
						<a href="?mod=post&act=detail&id=<?= $value['id']?>&slug=<?= $value['slug']?>" class="btn btn-secondary"><i class="fa fa-eye"></i></a> 
						<a href="?mod=post&act=delete&id=<?= $value['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
						<?php 
							if($value['user_id']==$_SESSION['user']['id']){
						 ?>
						<a href="?mod=post&act=edit&id=<?= $value['id']?>" class="btn btn-warning"><i class="fa fa-edit"></i></a> 
					<?php } ?>
					</td>
				</tr>

			<?php }
		 ?>
		</table>

<?php 
	    include_once('footer.php');
 ?>