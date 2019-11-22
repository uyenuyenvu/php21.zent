<?php
	session_start();
	$mod = isset($_GET['mod'])?$_GET['mod']:'home'; // module
	$act = isset($_GET['act'])?$_GET['act']:'index'; // action

	switch ($mod) {
		//Trang quảng bá
		case 'home':
			require_once('controllers/HomeController.php');
			$controller_obj = new HomeController();
			switch ($act) {
				case 'index':
					$controller_obj->index(); 
					break;
				case 'detail':
					$controller_obj->detail($_GET['id']);
					break;
				case 'posts_by_category':
			
					$controller_obj->posts_by_category($_GET['id']);
					break;
				default:
					$controller_obj->error();
					break;
				}
			break;
		//Đăng ký đăng nhập	
		case 'auth':
			require_once('controllers/AuthController.php');
			$controller_obj = new AuthController();
			switch ($act) {
				//Đăng nhập
				case 'login':
					if (isset($_SESSION['is_login'])) header('Location: ?mod=admin&act=index');
					else $controller_obj->login();
					break;
				case 'login_process':
						// die("login process");
						$controller_obj->login_process();
						break;
				//Đăng ký
				case 'register':
					//die('register');
					break;
				default:
					echo "404 - act - auth";
					break;
			}
			break;
		//Danh mục
		case 'category': 
		//kiểm tra đã login hay chưa???
				if (isset($_SESSION['is_login'])) {	
				require_once('controllers/CategoryController.php');
				$controller_obj = new CategoryController();
				switch ($act) {
					//Xem danh sách danh mục
					case 'index':
						if($_SESSION['user']['auth']==0){
							$controller_obj->list_bloger();
						}else{
							$controller_obj->list();
						}
						break;
					//xóa danh mục
					case 'delete':
						$controller_obj->delete();
						break;
					//xem chi danh mục
					case 'detail':
						$controller_obj->detail();
						break;
					//gọi form sửa
					case 'edit':
					 	$controller_obj->edit();
						break;
					//cập nhật
					case 'update':
						$controller_obj->update();
						break;
					//gọi form thêm mới
					case 'creat':
						$controller_obj->creat();
						break;
					//Thêm mới danh mục
					case 'store':
					// die('hàm store');
						$controller_obj->store();
						break;
					//gọi danh sách danh mục yêu cầu phê duyệt
					case 'request':
						$controller_obj->request();
						break;
					//phê duyệt danh mục
					case 'approved':
						$controller_obj->approved();
						break;
					default:
							echo "404 - act - admin";
							break;
					}
				}else{
					header("Location: ?mod=auth&act=login");
					
					// die('bạn chưa đăng nhập');
				}
			break;
			case 'post':
		//kiểm tra đã login hay chưa???
				if (isset($_SESSION['is_login'])) {
				require_once('controllers/PostController.php');
				$controller_obj = new PostController();
				switch ($act) {
					//Xem danh sách bài viết
					case 'index':
						if($_SESSION['user']['auth']==0){
							$controller_obj->list_bloger();
						}else{
							$controller_obj->list();
						}
						break;
					case 'delete':

						$controller_obj->delete();
						break;
					//xem chi tiết
					case 'detail':
						$controller_obj->detail();
						break;
					//gọi form sửa
					case 'edit':
					 	$controller_obj->edit();
						break;
					//cập nhật
					case 'update':
						$controller_obj->update();
						break;
					//gọi form thêm mới
					case 'creat':
						$controller_obj->creat();
						break;
					//Thêm mới bài viết
					case 'store':
						$controller_obj->store();
						break;
					//gọi danh sách bài viết yêu cầu phê duyệt
					case 'request':
						$controller_obj->request();
						break;
					//phê duyệt bài viết
					case 'approved':
						$controller_obj->approved();
						break;
					default:
						echo "404 - act - admin";
						break;
				}
				}else{
					header("Location: ?mod=auth&act=login");
					// die('bạn chưa đăng nhập');
				}
			break;
			case 'user':
		//kiểm tra đã login hay chưa???
				if (isset($_SESSION['is_login'])) {
				switch ($act) {
					//Xem danh sách danh mục
					case 'index':
						# code...
						break;
					//Hiển thị form tạo mới
					case 'create':
						# code...
						break;
					//Thêm mới danh mục
					case 'store':
						# code...
						break;
					default:
						echo "404 - act - admin";
						break;
				}
				}else{
					header("Location: ?mod=auth&act=login");
					// die('bạn chưa đăng nhập');
				}
			break;
			case 'admin':

		//kiểm tra đã login hay chưa???

				if (isset($_SESSION['is_login'])) {
					require_once('controllers/AdminController.php');
					$controller_obj = new AdminController(); 
					switch ($act) {
						//Xem danh sách danh mục
						case 'index':
							require_once('views/admin/home.php');
							break;
						//Hiển thị form tạo mới
						case 'logout':
							$controller_obj->logout();
							break;
						
						default:
							echo "404 - act - admin";
							break;
					}
				}else{
					header("Location: ?mod=auth&act=login");
					// die('bạn chưa đăng nhập');
				}
			break;
		default:
			echo "404 - mod";
			break;
	}
 ?>