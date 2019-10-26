 <?php 
	echo "<pre>";
		print_r($_POST);
	echo "</pre>";

	include('conection.php');
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
        		$query = "UPDATE users SET name='".$_POST['name']."',email='".$_POST['email']."', password='".$_POST['password']."', updated_at='".date('y-m-d h:m:s')."' WHERE id=".$_POST['id'];
        	}else{
		$query = "UPDATE users SET name='".$_POST['name']."',email='".$_POST['email']."', password='".$_POST['password']."', avatar='".$avatar."', updated_at='".date('y-m-d h:m:s')."' WHERE id=".$_POST['id'];
			}
		// Thực thi câu lệnh
		

		$result = $conn->query($query);


		 if($result==true){
		header("Location: index.php");
		 }
 ?>
