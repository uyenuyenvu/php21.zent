<?php 
	if (isset($_POST['submit'])) {
		$target_dir="upload/";
		$target_file=$target_dir.basename($_FILES["img"]['name']);
		if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
			echo "ok ".basename($_FILES['img']['name'])." upload";
		}else{
			echo "fail";
		}
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