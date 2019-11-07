<?php 
	session_start();

	if (isset($_POST['submit'])) {
		$target_dir="download/";
		$target_file=$target_dir.basename($_FILES["doc"]['name']);
		if (move_uploaded_file($_FILES['doc']['tmp_name'], $target_file)) {
			echo "ok ".basename($_FILES['doc']['name'])." download";
			$_SESSION['documents'][]=array(
				'name'=>$_POST['subject'],
				'nameFile'=>$_FILES['doc']['name'],
				
			);
			if ($_SESSION['soFile']) {
				$_SESSION['soFile'] ++;
			}
			
		}else{
			echo "fail";
		}
	}

	// echo "<pre>";
	// 	print_r($_SESSION);
	// echo "</pre>";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>uyen</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="text" name="subject" placeholder="ten tai lieu" >
		<br>
		<input type="file" name="doc" id="doc" > <br>
		
		<input type="submit" value="Upload Image" name="submit"  class="btn btn-success">
		<br>
	<a href="index.php"  class="btn btn-success"><< Back to home</a>
	</form>
</body>
</html>

