<?php 
	require_once('models/User.php');
	
	class AuthController{
		var $model_obj;

		function __construct(){
			$this->model_obj = new User();
		}

		public function login(){
			// die('aaaaaaaaaaa11111');
			require_once('views/admin/login.php');
		}

		function login_process(){
			$email =$_POST['email'];
			$password = md5($_POST['password']);

			$user = $this->model_obj->login($email,$password);
			if($user == NULL){
				header("Location: ?mod=auth&act=login");
			}else{
				$_SESSION['is_login'] = true;
				unset($user['password']);
				$_SESSION['user'] = $user;
				header("Location: ?mod=admin&act=index");
			}
			
		}

		function error(){
			require_once('views/admin/page_404.php');
		}
	}

 ?>
