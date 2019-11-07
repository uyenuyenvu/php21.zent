<?php 
	require_once('models/Category.php');
	class CategoryController{
		var $model_obj;

		function __construct(){
				$this->model_obj = new Category();
		}
		function list(){
			$categories = $this->model_obj->getAll();
			require_once("views/category/list.php");
		}
		function add(){
			require_once("views/category/add.php");
		}
		function edit(){
			echo "<br> >>>> sửa sách danh mục";
		}
		function detail(){
			if(!isset($_GET['id']))
			{
				echo "not ID";
			}else{
			$uid=$_GET['id'];
			$cate=$this->model_obj->find($uid);
			require_once("views/category/detail.php");
		}
		}
		function error(){
			echo "<br> >>>> act 404";
		}
		
	}

 ?>