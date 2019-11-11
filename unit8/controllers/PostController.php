<?php 
	require_once('models/Post.php');
	require_once('models/User.php');
	require_once('models/Category.php');

	class PostController{
		var $model_obj;
		var $model_user;
		var $model_cate;

		function __construct(){
			$this->model_obj=new Post();
			$this->model_user=new User();
			$this->model_cate=new Category();
			
		}
		function list(){
			$posts=$this->model_obj->getAll();
			require_once('views/post/list.php');
		}
		function add(){

		//	$post=$this->model_obj->getAll();
			$user=$this->model_user->getAll();
			$cate=$this->model_cate->getAll();
			require_once('views/post/add.php');
		}
		function store(){
			$data=$_POST;

			$target_dir="public/images/";
			$thumbnail="";
	      	$file_infor = pathinfo($_FILES['thumbnail']['name']);
			$target_file=$target_dir.time().'.'.$file_infor['extension'];
	       	 if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_file)) {
	            $thumbnail=$target_file; 
	       	 }else{
	            echo "fail"; 
	        	} 
	        $data['thumbnail']=$thumbnail;

	        $status=$this->model_obj->creat($data);
	        if($status) setcookie('msg','them moi thanh cong',time()+3);
				else setcookie('msg','them moi that bai',time()+3);
				$this->list();	


		}
		function detail(){
			$post=$this->model_obj->find($_GET['id']);
			require_once('views/Post/detail.php');
		
		}
		function edit(){
			$user=$this->model_user->getAll();
			$category=$this->model_cate->getAll();
			$post=$this->model_obj->find($_GET['id']);
			require_once('views/Post/edit.php');
		}
		function update(){

			 $target_dir="public/images/";
			 // echo "<pre>";
			 // print_r($_FILES);
			 // echo "</pre>";
			
			$thumbnail="";
	      	$file_infor = pathinfo($_FILES['thumbnail']['name']);
	      	
	   //    	 echo "<pre>";
			 // print_r($file_infor);
			 // echo "</pre>";

	      	// if(isset($target_infor['extension'])){
			$target_file=$target_dir.time().'.'.$file_infor['extension'];
	       	 if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_file)) {
	            $thumbnail=$target_file; 
	       	 }else{
	            echo "fail vl";  
	        	} 
			$data=$_POST;
			$data['thumbnail']=$thumbnail;
			// die($thumbnail);
			// die($thumbnail);
			// }else{
				// $data=$_POST;
				// unset($data['thumbnail']);
			// }
			$status = $this->model_obj->update($data);
			if($status) setcookie('msg','cap nhat thanh cong',time()+3);
			else setcookie('msg','cap nhat that bai',time()+3);
			$this->list();

					}
		function error(){
			
		}
		function delete(){
			$status=$this->model_obj->delete($_GET['id']);
			if($status) setcookie('msgDel','xoa thanh cong',time()+3);
			else setcookie('msgDel','xoa that bai',time()+3);
			//$this->list();
			header("Location: ?mod=post&act=list");

		}
	}


 ?>