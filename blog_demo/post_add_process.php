<?php 

	$data=$_POST;
	echo "<pre>";
	print_r($data);
	echo "</pre>";
	include('conection.php');

		$users = array();

		while($row = $result->fetch_assoc()) { 
			$users[] = $row;
		}

 		$target_dir="img/";
		$thumbnail="";
      	$file_infor = pathinfo($_FILES['thumbnail']['name']);
		$target_file=$target_dir.time().'.'.$file_infor['extension'];
       	 if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_file)) {
            $thumbnail=$target_file; 
       	 }else{
            echo "fail"; 
        	} 

		// Câu lệnh truy vấn
		if($data['user_id']==0){
			if($thumbnail ==""){
				$query = "INSERT INTO posts(title, description, slug, created_at,category_id,content) VALUES ('".$data['title']."','".$data['description']."','".$data['slug']."','".date('y-m-d h:m:s')."','".$data['category_id']."','".$data['content']."')";
			}else{
				$query = "INSERT INTO posts(title, thumbnail, description, slug, created_at, category_id,content) VALUES ('".$data['title']."','".$thumbnail."','".$data['description']."','".$data['slug']."','".date('y-m-d h:m:s')."','".$data['category_id']."','".$data['content']."')";
			}
				
	    }else{
			if($thumbnail ==""){
				$query = "INSERT INTO posts (title, user_id, description, slug, created_at,user_id, category_id,content) VALUES ('".$data['title']."','".$data['user_id']."','".$data['description']."','".$data['slug']."','".date('y-m-d h:m:s')."','".$data['user_id']."','".$data['category_id']."','".$data['content']."')";
				}else{
					$query = "INSERT INTO posts (title, thumbnail, user_id, description, slug, created_at,category_id,content) VALUES ('".$data['title']."','".$thumbnail."','".$data['user_id']."','".$data['description']."','".$data['slug']."','".date('y-m-d h:m:s')."','".$data['category_id']."','".$data['content']."')"; 
				}
		
	    }


		// Thực thi câu lệnh
		$result = $conn->query($query);

		if($result==true){
			header("Location: index.php");
		}

 ?>