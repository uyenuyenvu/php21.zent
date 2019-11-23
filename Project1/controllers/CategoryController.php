<?php 
	require_once('models/Category.php');
	
	class CategoryController{
		var $model_obj;

		function __construct(){
			$this->model_obj = new Category();
		}

		function list(){
			
			$categories = $this->model_obj->getAll();
			require_once('views/category/list.php');
		}

		function detail(){
			
			$uid = $_GET['id'];
			$category = $this->model_obj->find($uid);
			require_once('views/category/detail.php');
		}

		function add(){
			require_once('views/category/add.php');
		}

		function store(){
			$data = $_POST;
			$status = $this->model_obj->create($data);
			if($status == TRUE){
				setcookie('msg','Thêm mới thành công',time() + 5);
			}else{
				setcookie('msg','Thêm mới thất bại',time() + 5);
			}
			header("Location: index.php?mod=category&act=list");
		}

		function edit(){
			$uid = $_GET['id'];
			$category = $this->model_obj->find($uid);
			require_once('views/category/edit.php');
		}

		function update(){
			$data = $_POST;
			$status = $this->model_obj->update($data);
			if($status == TRUE){
				setcookie('msg','Update thành công',time() + 5);
			}else{
				setcookie('msg','Update thất bại',time() + 5);
			}
			header("Location: index.php?mod=category&act=list");
		}

		function delete(){
			
			$uid = $_GET['id'];
			$status = $this->model_obj->delete($uid);
			if($status == TRUE){
				setcookie('msg','Xóa thành công',time() + 5);
			}else{
				setcookie('msg','Xóa thất bại',time() + 5);
			}
			header("Location: index.php?mod=category&act=list");
		}



		function error(){
			echo "<br> >>> ACT 404";
		}
	}

 ?>