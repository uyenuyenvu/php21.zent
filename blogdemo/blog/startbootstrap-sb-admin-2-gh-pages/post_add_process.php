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
        $data['thumbnail']=$thumbnail;

		// Câu lệnh truy vấn
		

	    $cols='';
	    $values='';
	    foreach ($data as $key => $value) {
	    		
	    		$cols.=$key.',';
	    		$values.='"'.$value.'",';
	    }
	    $query='INSERT INTO posts('.rtrim($cols,',').') values ('.trim($values,',').')';

	    //die($query);
		// Thực thi câu lệnh
		$result = $conn->query($query);

		if($result==true){
			header("Location: posts.php");
		}

 ?>