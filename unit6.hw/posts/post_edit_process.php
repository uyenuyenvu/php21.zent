 <?php  
	echo "<pre>";
		print_r($_POST);
	echo "</pre>";

	include('conection.php');
		 $target_dir="img/";
		 $thumbnail="";
      	$file_infor = pathinfo($_FILES['thumbnail']['name']);
		$target_file=$target_dir.time().'.'.$file_infor['extension'];
       	 if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_file)) {
            $thumbnail=$target_file;
       	 }else{
            echo "fail";  
        	}


		if($thumbnail==""){
			$query = "UPDATE posts SET title='".$_POST['title']."',user_id='".$_POST['user_id']."', slug='".$_POST['slug']."',  description='".$_POST['description']."', updated_at='".date('y-m-d h:m:s')."', content='".$_POST['content']."', category_id='".$_POST['category_id']."' WHERE id=".$_POST['id'];
		}else{
			$query = "UPDATE posts SET title='".$_POST['title']."',user_id='".$_POST['user_id']."', slug='".$_POST['slug']."', thumbnail='".$thumbnail."', description='".$_POST['description']."', updated_at='".date('y-m-d h:m:s')."', content='".$_POST['content']."', category_id='".$_POST['category_id']."' WHERE id=".$_POST['id'];
		}
		
	// }
	// die($query);
		// Thực thi câu lệnh
		$result = $conn->query($query);


		 if($result==true){
		header("Location: index.php");
		 }
 ?>
