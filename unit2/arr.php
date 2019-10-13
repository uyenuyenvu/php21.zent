<?php 
	$name = array('uyen', 'de','thuong');

	var_dump($name);
	$name[]='vc';

	echo "<pre>";
		print_r($name);
	echo "</pre>";



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $name[0] ?></title>
</head>
<body>
	<h1>
		<?php 
			echo $name[0];
		 ?>
	</h1>
</body>
</html>