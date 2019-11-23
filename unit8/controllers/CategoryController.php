<?php  
	require_once('models/Category.php');

	class CategoryController{
		var $model_obj;

		function __construct(){
				$this->model_obj = new Category();
		}
		function list(){
				$categories = $this->model_obj->getAll();
				require_once("views/category/list.php");
		}
		function add(){
				$categories = $this->model_obj->getAll();
				require_once("views/category/add.php");
		}
		function store(){ //=add_process
				//xu li file anh
				 $target_dir="public/images/";
				$thumbnail="";
		      	$file_infor = pathinfo($_FILES['thumbnail']['name']);
		      	if(isset($file_infor['extension'])){
				$target_file=$target_dir.time().'.'.$file_infor['extension'];
		       	 if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_file)) {
		            $thumbnail=$target_file; 
		       	 }else{
		            echo "fail";  
		        	} 

				$data=$_POST;
				$data['thumbnail']=$thumbnail;
			}else{
				
				$data=$_POST;
				unset($data['thumbnail']);}

				$status = $this->model_obj->create($data);

				if($status) setcookie('msg','them moi thanh cong',time()+3);
				else setcookie('msg','them moi that bai',time()+3);
				$this->list();	
			}
		function edit(){
				$categories = $this->model_obj->getAll();
				$uid=$_GET['id'];
				$category=$this->model_obj->find($uid);
				require_once("views/category/edit.php");

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
				// }else{
					// $data=$_POST;
					// unset($data['thumbnail']);
				// }
				$status = $this->model_obj->update($data);
				if($status) setcookie('msg','cap nhat thanh cong',time()+3);
				else setcookie('msg','cap nhat that bai',time()+3);
				$this->list();

					}
		function detail(){
		
				$uid=$_GET['id'];
				$cate=$this->model_obj->find($uid);
				require_once("views/category/detail.php");
		}
		function delete(){

				$status=$this->model_obj->delete($_GET['id']);
				if($status) setcookie('msgDel','xoa thanh cong',time()+3);
				else setcookie('msgDel','xoa that bai',time()+3);
				//$this->list();
				header("Location: ?mod=category&act=list");
			
		}
		function error(){
			echo "<br> >>>> act 404";
		}
		
	}

 ?>