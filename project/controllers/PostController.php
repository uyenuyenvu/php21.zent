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
			require_once('views/admin/listPost.php');
		}
		function list_bloger(){
			$posts=$this->model_obj->getPost();
			require_once('views/admin/listPost.php');
		}
	
		function creat(){

		//	$post=$this->model_obj->getAll();
			$user=$this->model_user->getAll();
			$cate=$this->model_cate->getAll();
			require_once('views/admin/addPost.php');
		}

		function store(){
			$data=$_POST;

			$target_dir="public/home/images/";

			$thumbnail="";
	      	$file_infor = pathinfo($_FILES['thumbnail']['name']);
	      	if(isset($file_infor['extension'])){
			$target_file = time().'.'.$file_infor['extension'];
			$target_dir .= $target_file;
			// die($target_dir);
	       	 if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_dir)) {
	            $thumbnail=$target_file; 
	       	 }else{
	            echo "fail"; 
	        	} 

	        $data['thumbnail']=$thumbnail;
	    }else{
	    	unset($data['thumbnail']);
	    }
	        $data['content'] = htmlspecialchars($data['content']);

	        $status=$this->model_obj->creat($data);
	        if($status) {
	        	setcookie('msg','bài viết đã được gửi cho quản trị viên phê duyệt!',time()+3);
	        }else {
	        	setcookie('err','aaaaa',time()+3);
	        }
				header("Location: ?mod=post&act=index");


		}
		function detail(){
			$post=$this->model_obj->find($_GET['id']);
			require_once('views/admin/detailPost.php');
		
		}
		function edit(){
			$user=$this->model_user->getAll();
			$category=$this->model_cate->getAll();
			$post=$this->model_obj->find($_GET['id']);
			require_once('views/admin/editPost.php');
		}
		function update(){
			// die('vào rồi');
			 $target_dir="public/home/images/";
			$thumbnail="";
			
		
			
	      	$file_infor = pathinfo($_FILES['thumbnail']['name']);
	      	
	
			
			if (isset($file_infor['extension'])) {
			$target_file=time().'.'.$file_infor['extension'];
			$target_dir .= $target_file;
			// die($target_dir);
				       	 if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_dir)) {
	            $thumbnail=$target_file; 
	       	 }else{
	            echo "fail vl";  
	        	} 

			$data=$_POST;
			$data['thumbnail']=$thumbnail;
			}else{
				$data=$_POST;
				unset($data['thumbnail']);
			}

			$status = $this->model_obj->update($data);
			if($status) setcookie('msg','cập nhật thành công',time()+3);
			else setcookie('err','cập nhật thất bại',time()+3);
			$this->list();

					}
		function error(){
			
		}
		function delete(){
			$status=$this->model_obj->delete($_GET['id']);
			if($status) setcookie('msg','xoa thanh cong',time()+3);
			else setcookie('msgerr','xoa that bai',time()+3);
			//$this->list();
		
			header("Location: ?mod=post&act=index");

		} 
		function request(){
			$posts_request=$this->model_obj->list_request();
			require_once('views/admin/post_request.php');
		}
		function approved(){
			$status=$this->model_obj->approved($_GET['id']);
			if($status) setcookie('msg','đã phê duyệt',time()+3);
			else setcookie('msgerr','phê duyệt thất bại',time()+3);
			//$this->list();
		
			header("Location: ?mod=post&act=request");
		}
	}


 ?>