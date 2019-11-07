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

 
  //       	$file_infor = pathinfo($_FILES['img']['name']);
		// $target_file=$target_dir.time().'.'.$file_infor['extension'];
		// //uploads/111111.png
		// if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
		// 	echo "upload  ".$target_file." thanh congggg";
		// }else{
		// 	echo "fail";
		// }

	// Câu lệnh truy vấn
	// if($_POST['parent_id']==0){
	// 	if($thumbnail==""){
	// 		$query = "UPDATE categories SET name='".$_POST['name']."', slug='".$_POST['slug']."', description='".$_POST['description']."', updated_at='".date('y-m-d h:m:s')."' WHERE id=".$_POST['id'];
	// 	}else{
	// 		$query = "UPDATE categories SET name='".$_POST['name']."', slug='".$_POST['slug']."', thumbnail='".$thumbnail."', description='".$_POST['description']."', updated_at='".date('y-m-d h:m:s')."' WHERE id=".$_POST['id'];
	// 	}
		
	// }else{
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
