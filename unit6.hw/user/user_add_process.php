<?php 

	$data=$_POST;

	print_r($data);
	include('conection.php');

		$user = array();

		while($row = $result->fetch_assoc()) { 
			$user[] = $row;
		}


		// Câu lệnh truy vấn
		$query = "INSERT INTO users(name, avatar, email, password,created_at) VALUES ('".$data['name']."','".$data['avatar']."','".$data['email']."','".$data['password']."','".date('y-m-d h:m:s')."') ";
		echo $query;
		

		// Thực thi câu lệnh
		$result = $conn->query($query);

		if($result==true){
			header("Location: index.php");
		}

 ?>