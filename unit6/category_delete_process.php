<?php 
	$id=$_GET['id'];
	include('conection.php');

	// Câu lệnh truy vấn
		$query = "DELETE FROM categories WHERE id=".$id;

		// Thực thi câu lệnh
		$result = $conn->query($query);

		if($result==true){
			header("Location: index.php");
		}

 ?>