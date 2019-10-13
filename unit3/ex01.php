<?php 

	echo "<pre>";
		print_r($_GET);
	echo "</pre>";

	if (isset($_GET['name'])) {
		echo "hi ".$_GET['name'];
	}
 ?>