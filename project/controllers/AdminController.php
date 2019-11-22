<?php 
	require_once('models/Category.php');
	require_once('models/Post.php');
	require_once('models/User.php');
	
	class AdminController{
		var $category_model_obj;
		var $post_model_obj;
		var $user_model_obj;

		function __construct(){
			$this->category_model_obj = new Category();
			$this->post_model_obj = new Post();
			$this->user_model_obj = new User();
		}

		function index(){
			
			require_once('views/admin/home.php');
		}

		function logout(){
			session_destroy();
			header("Location: index.php");
		}


		function error(){
			echo "<br> >>> ACT 404";
		}
	}

 ?>
