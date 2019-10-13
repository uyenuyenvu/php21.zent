<?php 
		$info=array();
		$info['name']='uyen';
		$info['code']='637673';
		$info['poin']=array(
				'math'=>3,
				'physical'=>5,
				'chemistry'=>array(
						'mid'=>10,
						'final'=>6,
				)
		);

		echo "<pre>";
				print_r($info);
		echo "</pre>";
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>uyen</title>
 </head>
 <body>
 	<ul>
 		<li> name= 
 			<?php 
 					echo $info['name'];
 			 ?>
 		</li>
 		<li>code= 
 			<?php 
 					echo $info['code'];
 			 ?></li>

 			<li>	mid chemistry= 
 				<?php 	
 						echo ($info['poin']['chemistry']['mid']);
 				 ?>
 			</li>
 	</ul>
 </body>
 </html>