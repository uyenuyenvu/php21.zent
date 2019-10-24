 <?php 
	echo "<pre>";
		print_r($_POST);
	echo "</pre>";

	include('conection.php');

	// Câu lệnh truy vấn
		$query = "UPDATE users SET name='".$_POST['name']."',email='".$_POST['email']."', password='".$_POST['password']."', avatar='".$_POST['avatar']."', updated_at='".date('y-m-d h:m:s')."' WHERE id=".$_POST['id'];

		// Thực thi câu lệnh
		$result = $conn->query($query);


		 if($result==true){
		header("Location: index.php");
		 }
 ?>
