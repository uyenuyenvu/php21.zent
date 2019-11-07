<?php 
require_once('connection.php');
	class Post{
		var $connection_obj;
		function getAll(){
				$connection_obj=new connection();
			
				$query = "SELECT * FROM posts";
				$result = $connection_obj->conn->query($query);
				$posts = array();

				while($row = $result->fetch_assoc()) { 
					$posts[] = $row;
				}
				return $posts;
		}
	}

 ?>