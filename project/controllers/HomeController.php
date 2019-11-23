<?php 
	require_once('models/Category.php');
	require_once('models/Post.php');
	require_once('models/User.php');
	
	
	class HomeController{
		var $cate_model_obj;
		var $post_model_obj;
		var $user_model_obj;

		function __construct(){
			$this->cate_model_obj = new Category();
			$this->post_model_obj = new Post();
			$this->user_model_obj = new User();


		}

		function detail(){
			$posts=$this->post_model_obj->getAll();
			$categories=$this->cate_model_obj->getAll();
			$posts_popular=$this->post_model_obj->getPopular();
			$post=$this->post_model_obj->find($_GET['id']);
			$user=$this->user_model_obj->find($post['user_id']);
			$category=$this->cate_model_obj->find($post['category_id']);
			require_once('views/home/blog-single.php');
		}

		function index(){
			$posts=$this->post_model_obj->getAll();

			if(isset($_GET['i'])){
				$i=$_GET['i'];
			}else{
				$i=1;
			}
			$posts_page=$this->post_model_obj->paginite($limit=6,$page=$i);
			 $categories=$this->cate_model_obj->getAll();
			$users=$this->user_model_obj->getAll();
			$posts_popular=$this->post_model_obj->getPopular();
			require_once('views/home/index.php');
		}

		function posts_by_category(){
			$posts=$this->post_model_obj->getAll();
			$posts_popular=$this->post_model_obj->getPopular();
			$users=$this->user_model_obj->getAll();
			$posts_by_cate=$this->post_model_obj->posts_by_category($_GET['id']);
			$categories=$this->cate_model_obj->getAll();
			$category=$this->cate_model_obj->find($_GET['id']);
			require_once('views/home/category.php');
		}


		function error(){
			echo "<br> >>> ACT 404";
		}
	}

 ?>
