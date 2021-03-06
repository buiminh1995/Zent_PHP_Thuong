<?php 
	require_once('models/Author.php');
	class AuthorController{
		var $author_model;

		function __construct(){
			$this->author_model = new Author();
		}

		public function list(){
			$data = array();
			$data = $this->author_model->All();
			require_once('views/author/list.php');
        }
        
        public function detail(){
            $id = isset($_GET['id'])?$_GET['id']:0;
            $author = $this->author_model->find($id);
            require_once('views/author/detail.php');
		}

		public function add(){
			require_once("views/author/add.php");
        }
        
        public function store(){
            $data = array();
            $data['name'] = $_POST['name'];
            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['password'];
            $data['status'] = $_POST['status'];
            
            $status = $this->author_model->create($data);
             if($status === true){
              header("Location: ?mod=author");
             } else {
                 header("Location: ?mod=author&act=add");

             }
        }
	}
 ?>