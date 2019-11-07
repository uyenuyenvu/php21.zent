<?php 
	require_once('models/Post.php');
	class PostController{
		var $model_obj;

		function __construct(){
			$this->model_obj=new Post();
		}
		function list(){
			$posts=$this->model_obj->getAll();
			require_once('views/post/list.php');
		}
		function add(){
			
		}
		function detail(){
			
		}
		function edit(){
			
		}
		function error(){
			
		}
	}


 ?>