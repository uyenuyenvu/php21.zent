<?php 

	$data=$_POST;

	print_r($data);
	include('conection.php');

		$categories = array();

		while($row = $result->fetch_assoc()) { 
			$categories[] = $row;
		}


		// Câu lệnh truy vấn
		$query = "INSERT INTO categories(name, thumbnail, parent_id, description, slug, created_at) VALUES ('".$data['name']."','".$data['thumbnail']."','".$data['parent_id']."','".$data['description']."','".$data['slug']."','".date('y-m-d h:m:s')."')";

		// Thực thi câu lệnh
		$result = $conn->query($query);

		if($result==true){
			header("Location: index.php");
		}

 ?>