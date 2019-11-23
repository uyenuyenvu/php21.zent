<?php 
	require_once('models/User.php');
	
	class UserController{
		var $model_obj;

		function __construct(){
			$this->model_obj = new User();
		}


		function error(){
			echo "<br> >>> ACT 404";
		}
	}

 ?>