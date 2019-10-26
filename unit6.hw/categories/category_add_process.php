<?php 

	$data=$_POST;

	print_r($data);
	include('conection.php');

		$categories = array();

		while($row = $result->fetch_assoc()) { 
			$categories[] = $row;
		}

 		$target_dir="img/";
		$thumbnail="";
      	$file_infor = pathinfo($_FILES['thumbnail']['name']);
		$target_file=$target_dir.time().'.'.$file_infor['extension'];
       	 if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_file)) {
            $thumbnail=basename($_FILES['thumbnail']['name']); 
       	 }else{
            echo "fail"; 
        	} 

		// Câu lệnh truy vấn
		if($data['parent_id']==0){
				$query = "INSERT INTO categories(name, thumbnail, description, slug, created_at) VALUES ('".$data['name']."','".$thumbnail."','".$data['description']."','".$data['slug']."','".date('y-m-d h:m:s')."')";
	}else{
	
		$query = "INSERT INTO categories(name, thumbnail, parent_id, description, slug, created_at) VALUES ('".$data['name']."','".$thumbnail."','".$data['parent_id']."','".$data['description']."','".$data['slug']."','".date('y-m-d h:m:s')."')";
	}
	// die($query);

		// Thực thi câu lệnh
		$result = $conn->query($query);

		if($result==true){
			header("Location: index.php");
		}

 ?>