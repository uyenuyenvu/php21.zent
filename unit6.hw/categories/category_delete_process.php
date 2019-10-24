<?php 
	$id=$_GET['id'];
	include('conection.php');

	// Câu lệnh truy vấn
		$query = "UPDATE categories SET deleted_at='".date('y-m-d h:m:s')."' WHERE id=".$id;
		// die($query);
		// Thực thi câu lệnh 
		$result = $conn->query($query);

		if($result==true){
			header("Location: index.php");
		}

 ?>  