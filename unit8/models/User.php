 <?php 
 	require_once('connection.php');
 	class User{

 		function getAll(){
 		
		 		$connection_obj=new connection();
		 		$query = "SELECT * FROM users";
		        $result = $connection_obj->conn->query($query);


				$user = array();

				while($row = $result->fetch_assoc()) { 
					$user[] = $row;
				}

				return $user;
 		}
 		function find($id){

				$connection_obj=new connection();
				$query = "SELECT * FROM users WHERE id=".$id;
				$result = $connection_obj->conn->query($query);


				$row = $result->fetch_assoc();

				$user=$row;
				return $user;
			 		}
 	}

  ?>