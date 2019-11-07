<?php 
	if (isset($_POST['submit'])) {
		$target_dir="upload/";
		//uploads/111111
		$file_infor = pathinfo($_FILES['img']['name']);
		$target_file=$target_dir.time().'.'.$file_infor['extension'];
		//uploads/111111.png
		if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
			echo "upload  ".$target_file." thanh congggg";
		}else{
			echo "fail";
		}
		//
		// echo'<pre>';
		// 	print_r());
		// echo"</pre>";
		// pathinfo($_FILES['img']['name'])['filename']=pathinfo($_FILES['img']['name'])['filename'].time();
		// echo pathinfo($_FILES['img']['name'])['filename'].time();
		// pathinfo(basename($_FILES['img']['name']))['filename']=pathinfo(basename($_FILES['img']['name']))['filename'].time();
		// echo'<pre>';
		// 	print_r($_FILES);
		// echo"</pre>";
		
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>uyen</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="img" id="img">
		<input type="submit" value="Upload Image" name="submit">
	</form>
</body>
</html>