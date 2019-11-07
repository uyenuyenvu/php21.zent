<?php 

	$mod=isset($_GET['mod'])?$_GET['mod']:'';
	$act=isset($_GET['act'])?$_GET['act']:'';

	switch ($mod) {
		case 'category':
			require_once('controllers\CategoryController.php');
			$Category_obj =new CategoryController;
			switch ($act) {
				case 'list':
					$Category_obj->list();
					break;
				case 'add':
					$Category_obj->add();
					break;
				case 'detail':
					$Category_obj->detail();
					break;
				case 'edit':
					$Category_obj->edit();
					break;
				
				default:
					$Category_obj->error();
					break;
			}
			break;
		case 'post':
			require_once('controllers\PostController.php');
			$Post_obj =new PostController;
			switch ($act) {
				case 'list':
					$Post_obj->list();
					break;
				case 'add':
					echo "<br> >>>> thêm mới bài viết";
					break;
				case 'edit':
					echo "<br> >>>> sửa bài viết";
					break;
				
				default:
					echo "<br> atc 404";
					break;
			}
			break;
		case 'user':
			require_once('controllers\UserController.php');
			$User_obj =new UserController;
			switch ($act) {
				case 'list':
					$User_obj->list();
					break;
				case 'add':
					echo "<br> >>>> thêm mới người dùng";
					break;
				case 'edit':
					echo "<br> >>>> sửa người dùng";
					break;
				case 'detail':
					$User_obj->detail(); 
					break;
				
				default:
					echo "<br> atc 404";
					break;
			}
			break;
		
		default:
			echo "<br> mod 404";
			break;
	}

 ?>