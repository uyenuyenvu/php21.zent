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
	<form action="process.php" method="POST" class="form-group">
		tiêu đề bài viết <br>
		<input type="text" name="title" placeholder="tiêu đề bài viết"> <br>
		đường dẫn bài viết <br>
		<input type="text" name="slug" placeholder="đường dẫn bài viết"> <br>
		mô tả bài viết bt <br>
		<textarea cols="100" rows="6" placeholder="mô tả bài viết" name="content"></textarea> <br>
		danh mục <br>
		<select name="category" id="">
			<option value="2">uyen</option>
			<option value="3">uyen</option>
		</select> <br>
		nội dung bài viết <br>
		<textarea cols="100" rows="10" placeholder="nội dung bài viết" name="description"></textarea> <br>
		<button type="submit">submit</button>
	</form>
</body>
</html>