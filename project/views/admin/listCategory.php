<?php 
    include('left-top.php');

    
 ?>

 	<a href="?mod=post&act=add" class="btn btn-success">++ Add</a>
	<table class="table table-striped">
		<tr>
			<td>Code</td>
			<td>Name</td>
			<td>img</td>
			<td>Description</td>
			<?php 
				if($_SESSION['user']['auth']==1){

			?>
			<td>#</td>
			<?php
				}
			 ?>
			
		</tr>
		<?php 
			foreach ($categories as $key=>$value) 
				if ($value['deleted_at']==NULL) {
					?>
					
					<tr>
						<td><?= $value['id']?></td>
					<td><?= $value['name']?></td>
					<td>
						<img src="public/home/images/<?= $value['thumbnail']?>" style="width: 60px; height: 60px;">
					</td>
					
					<td><?= $value['description']?></td>
					<?php 
						if($_SESSION['user']['auth']==1){

					?>
					<td> 
						<a href="?mod=category&act=detail&id=<?= $value['id']?>&slug=<?= $value['slug']?>" class="btn btn-secondary"><i class="fa fa-eye"></i></a> 
						<a href="?mod=category&act=delete&id=<?= $value['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
						
						<a href="?mod=category&act=edit&id=<?= $value['id']?>" class="btn btn-warning"><i class="fa fa-edit"></i></a> 
					
					</td>
					<?php
						}
					 ?>
					
				</tr>

			<?php }
		 ?>
		</table>

<?php 
	    include_once('footer.php');
 ?>