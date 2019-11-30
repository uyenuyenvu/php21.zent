<?php 
	require_once('models/User.php');
	class UserController{
		var $model_obj;

		function __construct(){
			$this->model_obj= new User();
		}
		function list(){
			$users = $this->model_obj->getAll();
			require_once("views/admin/listUser.php");
		}
		function approved(){
			$status=$this->model_obj->approved($_GET['id']);
			if($status) setcookie('msg','đã bật quyền bloger',time()+3);
			else setcookie('err','không thể bật quyền bloger!',time()+3);
		
			header("Location: ?mod=user&act=index");
		}
		function unapproved(){
			$status=$this->model_obj->unapproved($_GET['id']);
			if($status) setcookie('msg','đã tắt quyền bloger',time()+3);
			else setcookie('err','không thể tắt quyền bloger!',time()+3);
		
			header("Location: ?mod=user&act=index");
		}
		function detail(){
		
			$uid=$_GET['id'];
			$user=$this->model_obj->find($uid);
			require_once("views/admin/detailUser.php");
		    
		}
		function delete(){
			$user=$this->model_obj->delete();
		}
		function edit(){
			$user=$this->model_obj->find($_GET['id']);
			require_once("views/admin/editUser.php");
		}
		function update(){
				 $target_dir="public/home/images/";
				
				
				$avatar="";
		      	$file_infor = pathinfo($_FILES['avatar']['name']);
		      	if (isset($file_infor['extension'])) {
				$target_file=time().'.'.$file_infor['extension'];
				$target_dir .= $target_file;
			
		       	 if (move_uploaded_file($_FILES['avatar']['tmp_name'], $target_dir)) {

		            $avatar=$target_file; 
		          
		       	 }else{
		            echo "fail vl";  
		        	}
				$data=$_POST;
				$data['avatar']=$avatar;
				}else{
				$data=$_POST;
				unset($data['avatar']);
				}
			
				$status = $this->model_obj->update($data);
	
				if($status) setcookie('msg','cập nhật thành công',time()+3);
				else setcookie('err','cập nhật thất bại',time()+3);
				if(isset($_SESSION['editpass'])) header("Location: ?mod=admin&act=logout");
				else header("Location: ?mod=user&act=detail&id=".$data['id']);
		}
		function error(){
			 echo "act 404";
		}
		}
	

 ?>