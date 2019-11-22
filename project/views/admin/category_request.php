<?php 
    include('left-top.php');

    
 ?>

 
	<table class="table table-striped">
		<tr>
			<td>Code</td>
			<td>Name</td>
			<td>img</td>
			<td>description</td>
			<td>#</td>
		</tr>
		<?php 
			foreach ($categories_request as $key=>$value) 
				if ($value['deleted_at']==NULL) {
					?>
					
					<tr>
						<td><?= $value['id']?></td>
					<td><?= $value['name']?></td>
					<td>
						<img src="<?= $value['thumbnail']?>" style="width: 60px; height: 60px;">
					</td>
					
					
					<td><?= $value['description']?></td>
					<td> 
						<a href="?mod=category&act=detail&id=<?= $value['id']?>&slug=<?= $value['slug']?>" class="btn btn-secondary"><i class="fa fa-eye"></i></a> 
						<a href="?mod=category&act=approved&id=<?= $value['id']?>" class="btn btn-success"><i class="fa fa-check"></i></a> 
						<a href="?mod=category&act=delete&id=<?= $value['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
					</td>
				</tr>

			<?php }
		 ?>
		</table>

<?php 
	    include_once('footer.php');
 ?>