<?php 
	$mod = (isset($_GET['mod'])?$_GET['mod']:'');
	$act = (isset($_GET['act'])?$_GET['act']:'list');
	//var_dump($_POST); 
	switch ($mod) {
		case 'category':
			require_once('controllers/CategoryController.php');
			$controller_obj = new CategoryController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
                    break;
				case 'store':
					$data = [];
					$data['title'] = isset($_POST['title']) ? $_POST['title'] : null;
					$data['description'] = isset($_POST['description']) ? $_POST['description'] :null;
					 //var_dump($_POST); 
					 //var_dump($data); 
                    $controller_obj->store($data);
                    break;
				case 'add':
					$controller_obj->add();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
				default:
					echo "Không tồn tại action này";
					break;
			}
			break;
		case 'post':
			echo "Post <br>";
			switch ($act) {
				case 'list':
					echo "Xem danh sách bài viết";
					break;
				case 'add':
					echo "Thêm mới bài viết";
					break;
				default:
					echo "Không tồn tại action này";
					break;
			}
			break;

		case 'author':
			require_once('controllers/AuthorController.php');
			$controller_obj = new AuthorController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'store':
					// $data = [];
					// $data['name'] = $_POST['name'];
					// $data['email'] = $_POST['email'];
					// $data['password'] = $_POST['password'];
					// $data['status'] = $_POST['status'];
					$controller_obj->store();
					break;
				case 'add':
					$controller_obj->add();
					break;
				case 'detail':
					$controller_obj->detail();
					break;
				default:
					echo "Không tồn tại action này";
					break;
			}
			break;
		
		default:
			echo "Không tồn tại module này";
			break;
	}
 ?>