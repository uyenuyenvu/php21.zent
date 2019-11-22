<?php 
	require_once('models/Category.php');

	class CategoryController{
		var $model_obj;

		function __construct(){
				$this->model_obj = new Category();
		}
		function list(){
				$categories = $this->model_obj->getAll();
				require_once("views/admin/listCategory.php");
		}
		function list_bloger(){
				$categories = $this->model_obj->getCategory();
				require_once("views/admin/listCategory.php"); 
		}
		/**
		* Hàm này dùng để hiển thị form thêm danh mmucj mới
		*/
		function creat(){
				$categories = $this->model_obj->getAll();
				require_once("views/admin/addCategory.php");
		}
		//tiến hành thêm mới
		function store(){ //=add_process
		

				$target_dir="public/home/images";
				$thumbnail="";
		      	$file_infor = pathinfo($_FILES['thumbnail']['name']);
		      	if(isset($file_infor['extension'])){
						$target_file=time().'.'.$file_infor['extension'];
			       	 	if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_file)) {
			            	$thumbnail=$target_file; 
			       	 	}else{
			            	echo "fail";  
			        	} 

				$data=$_POST;
				$data['thumbnail']=$thumbnail;
			    }else{
				
				$data=$_POST;
				unset($data['thumbnail']);
			}

				$status = $this->model_obj->create($data);
				// die($status);
				if($status == 1) {
					setcookie('msg','them moi thanh cong',time()+3);
				}else{
					setcookie('msg','them moi that bai',time()+3);	
				}
				//-> viết
				header("Location: ?mod=category&act=index");	
			}
		function edit(){
				$categories = $this->model_obj->getAll();
				$uid=$_GET['id'];
				$category=$this->model_obj->find($uid);
				require_once("views/category/edit.php");

	}
		function update(){
	
				 $target_dir="public/home/images/";
				
				
				$thumbnail="";
		      	$file_infor = pathinfo($_FILES['thumbnail']['name']);
		      	
				$target_file=$target_dir.time().'.'.$file_infor['extension'];
		       	 if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_file)) {
		            $thumbnail=$target_file; 
		       	 }else{
		            echo "fail vl";  
		        	} 
				$data=$_POST;
				$data['thumbnail']=$thumbnail;
			
				$status = $this->model_obj->update($data);
				if($status) setcookie('msg','cap nhat thanh cong',time()+3);
				else setcookie('msg','cap nhat that bai',time()+3);
				header("Loacation: ?mod=category&act=index");

					}
		function detail(){
		
				$uid=$_GET['id'];
				$cate=$this->model_obj->find($uid);
				require_once("views/admin/detailCategory.php");
		}
		function delete(){

				$status=$this->model_obj->delete($_GET['id']);
				if($status) setcookie('msgDel','xoa thanh cong',time()+3);
				else setcookie('msgDel','xoa that bai',time()+3);
				//$this->list();
				header("Location: ?mod=category&act=index");
			
		}
		function request(){
			$categories_request=$this->model_obj->list_request();
			require_once('views/admin/category_request.php');
		}
		function approved(){
			$status=$this->model_obj->approved($_GET['id']);
			if($status) setcookie('msgDel','đã phê duyệt',time()+3);
			else setcookie('msgDel','phê duyệt thất bại',time()+3);
			//$this->list();
		
			header("Location: ?mod=category&act=index");
		}
		function error(){
			echo "<br> >>>> act 404";
		}
		
	}

 ?>