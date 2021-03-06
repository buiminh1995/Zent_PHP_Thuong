<?php 
	require_once('Connection.php');
	class Author{
		var $connection;

		function __construct(){
			$conn_obj = new Connection();
			$this->connection = $conn_obj->conn;
		}

		function All(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM authors";

		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
        }
        
        function create($data){
			//var_dump($data);
			$name = $data['name'];
            $email = $data['email'];
            $password = $data['password'];
            $status = $data['status'];
            $query = "INSERT INTO authors (name,email,password,status) VALUES ('{$name}', '{$email}','{$password}', '{$status}')";
			return $this->connection->query($query);
        }

        function find($id){
            $query = "SELECT * FROM authors WHERE id =".$id;
            $result = $this->connection->query($query)->fetch_assoc();
            return $result;
        }

	}
 ?>