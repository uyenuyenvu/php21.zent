<?php 
	$id=$_GET['id'];
	include('conection.php');

	// Câu lệnh truy vấn
		$query = "DELETE FROM users WHERE id=".$id;
		echo $query;
		die();

		// Thực thi câu lệnh
		$result = $conn->query($query);

		if($result==true){
			header("Location: index.php");
		}

 ?>
 