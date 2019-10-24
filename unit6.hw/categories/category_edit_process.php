<?php 
	echo "<pre>";
		print_r($_POST);
	echo "</pre>";

	include('conection.php');

	// Câu lệnh truy vấn
		$query = "UPDATE categories SET name='".$_POST['name']."',parent_id='".$_POST['parent_id']."', slug='".$_POST['slug']."', thumbnail='".$_POST['thumbnail']."', description='".$_POST['description']."', updated_at='".date('y-m-d h:m:s')."' WHERE id=".$_POST['id'];

		// Thực thi câu lệnh
		$result = $conn->query($query);


		 if($result==true){
		header("Location: index.php");
		 }
 ?>
