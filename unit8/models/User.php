 <?php 
 	require_once('connection.php');
 	class User{

 		function getAll(){
 		
		 		$connection_obj=new connection();
		 		$query = "SELECT * FROM users";
		        $result = $connection_obj->conn->query($query);


				$users = array();

				while($row = $result->fetch_assoc()) { 
					$users[] = $row;
				}

				return $users;
 		}
 		function find($id){ 

				$connection_obj=new connection();
				$query = "SELECT * FROM users WHERE id=".$id;
				die($query);
				$result = $connection_obj->conn->query($query);
	
				while($row = $result->fetch_assoc()) { 
					$user[] = $row;
				}
				return $user;
			 		}
		function delete(){
				
		}
 	}

  ?>