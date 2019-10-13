<?php 
session_start();
	foreach ($_SESSION['data'] as $key) {
		if ($key['id']==$_GET['id']) {
			?>
			<ul>
				<li>Họ và tên: <?php echo $key['name']; ?></li>
				<li>Mã sinh viên: <?php echo $key['id']; ?></li>
				<li>Lớp: <?php echo $key['clas']; ?></li>
				<li>Trường: <?php echo $key['sch']; ?></li>
				<li>Số điện thoại: <?php echo $key['nbp']; ?></li>
				<li>Email: <?php echo $key['mail']; ?></li>
			</ul>
		<?php } ?>
<?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>detail</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<a href="list.php" class="btn btn-primary">all user</a>
</body>
</html>