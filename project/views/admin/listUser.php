<?php 
    include('left-top.php');

    
 ?>


	<table class="table table-striped">
		<tr>
			<td>Code</td>
			<td>Name</td>
			<td>img</td>
			<td>#</td>
		</tr>
		<?php 
			foreach ($users as $key=>$value) 
				if ($value['deleted_at']==NULL) {
					?>
					
					<tr>
						<td><?= $value['id']?></td>
					<td><?= $value['name']?></td>
					<td>
						<img src="public/home/images/<?= $value['avatar']?>" style="width: 60px; height: 60px;">
					</td>
					
					
				
					<td> 
						<a href="?mod=user&act=detail&id=<?= $value['id']?>" class="btn btn-secondary"><i class="fa fa-eye"></i></a> 
						<?php if ($value['stt']==1) {
						?>
							<a href="?mod=user&act=unapproved&id=<?= $value['id']?>" class="btn btn-danger"><i class="fa fa-user-times"></i></a>
						<?php
						}else{ ?>
						
						<a href="?mod=user&act=approved&id=<?= $value['id']?>" class="btn btn-success"><i class="fa fa-check"></i></a> 
					<?php } ?>
					</td>
				</tr>

			<?php }
		 ?>
		</table>

<?php 
	    include_once('footer.php');
 ?>