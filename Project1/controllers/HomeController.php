<?php 
	require_once('models/Category.php');
	require_once('models/Post.php');
	
	class HomeController{
		var $model_obj;

		function __construct(){
			$this->model_obj = new Category();
		}

		function index(){
			require_once('views/home/index.php');
		}


		function error(){
			echo "<br> >>> ACT 404";
		}
	}

 ?>