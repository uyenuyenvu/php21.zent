<?php 
	require_once('models/Connection.php');

	class Category{
		var $connection_obj ;
		
		function __construct(){
			$this->connection_obj = new Connection();
		}
		
		function getAll(){

			// Câu lệnh truy vấn
			$query = "SELECT * FROM categories";

			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);

			// Tạo 1 mảng để chứa dữ liệu
			$categories = array();

			while($row = $result->fetch_assoc()) { 
				$categories[] = $row;
			}

			return $categories;
		}

		function find($id){

			$query = "SELECT * FROM categories WHERE id=".$id;

			$result = $this->connection_obj->conn->query($query);

			$cate = $result->fetch_assoc();

			return $cate;
		}

		function create($data){
			$query = "INSERT INTO categories(name,desciption) VALUES '".$data['name']."','".$data['description']."' ";

			$status = $this->connection_obj->conn->query($query);

			return $status;
		}

		function update($data){
			$query ="UPDATE categories SET name='".$data['name']."',description='".$data['description']."' WHERE id =".$data['id'];
			$status = $this->connection_obj->conn->query($query);

			return $status;
		}

		function delete($id){
			$query ="DELETE FROM categories WHERE id =".$id;
			$status = $this->connection_obj->conn->query($query);

			return $status;
		}


	}
	
 ?>