<?php 

	$data=$_POST;

	print_r($data);
	include('conection.php');

		$user = array();

		while($row = $result->fetch_assoc()) { 
			$user[] = $row;
		}

 		$target_dir="img/";
		$avatar="";
      	$file_infor = pathinfo($_FILES['avatar']['name']);
		$target_file=$target_dir.time().'.'.$file_infor['extension'];
       	 if (move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file)) {
            $avatar=$target_file; 
       	 }else{
            echo "fail"; 
        	} 

		// Câu lệnh truy vấn
        	if($avatar==""){
        		$query = "INSERT INTO users(name, email, password,created_at) VALUES ('".$data['name']."','".$avatar."','".$data['password']."','".date('y-m-d h:m:s')."') ";
        	}else{
        		$query = "INSERT INTO users(name, avatar, email, password,created_at) VALUES ('".$data['name']."','".$avatar."','".$data['email']."','".$data['password']."','".date('y-m-d h:m:s')."') ";
        	}
		

		// Thực thi câu lệnh
		$result = $conn->query($query);

		if($result==true){
			header("Location: index.php");
		}

 ?>