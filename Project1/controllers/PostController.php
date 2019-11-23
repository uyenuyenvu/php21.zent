<?php 
	require_once('models/Post.php');
	
	class PostController{
		var $model_obj;

		function __construct(){
			$this->model_obj = new Post();
		}


		function error(){
			echo "<br> >>> ACT 404";
		}
	}

 ?>