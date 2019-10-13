<?php  
	foreach ($_GET as $key => $value) {
		if ($_GET[$key]=="") {
			header('Location: 3.1.php');
			setcookie('msg','<h2 style="color: red">điền đủ vào, ai cho để trống</h2><br>',time()+3);
		}}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>info</title>
 </head>
 <body>
 	
 	<h3>Thông tinnnnnn: </h3>
 	<ul>
 		<li>Họ và tên: 
 			<?php 
 				echo $_GET['name'];
 			 ?>
 		</li>
 		<li>MSV: 
 			<?php 
 				echo $_GET['id'];
 			 ?>
 		</li>
 		<li>Lớp: 
 			<?php 
 				echo $_GET['clas'];
 			 ?>
 		</li>
 		<li>Trường: 
 			<?php 
 				echo $_GET['sch'];
 			 ?>
 		</li>
 		<li>số điện thoại: 
 			<?php 
 				echo $_GET['nbp'];
 			 ?>
 		</li>
 		<li>Email: 
 			<?php 
 				echo $_GET['mail'];
 			 ?>
 		</li>
 	
 	</ul>
 </body>
 </html>