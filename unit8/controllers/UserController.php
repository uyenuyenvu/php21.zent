<?php 
	require_once('models/User.php');
	class UserController{
		var $model_obj;

		function __construct(){
			$this->model_obj= new User();
		}
		function list(){
			$user = $this->model_obj->getAll();
			require_once("views/user/list.php");
		}
		function add(){
			
		}
		function detail(){
			if(!isset($_GET['id']))
			{
				echo "ID error 404";
			}else{
			$uid=$_GET['id'];
			$user=$this->model_obj->find($uid);
			require_once("views/user/detail.php");
		}
		}
		function edit(){
			
		}
		function error(){
			 echo "act 404";
		}
	}

 ?>