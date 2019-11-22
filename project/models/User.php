 <?php 
 	require_once('connection.php');
 	class User{

 		function getAll(){
 		
		 		$connection_obj=new connection();
		 		$query = "SELECT * FROM users WHERE deleted_at is NULL";
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
			
				$result = $connection_obj->conn->query($query);
				$user = array();
				$row = $result->fetch_assoc();
				$user = $row;
				
				return $user;
			 		}
		function login($email,$password){
				$connection_obj=new connection();


				$query="SELECT * FROM users WHERE email = '".$email."'  AND password='".$password."'";
			
				$result = $connection_obj->conn->query($query);
				
				//exit();
				$row = $result->fetch_assoc();

				$user=$row;
				echo "<pre>";
					print_r($user);
				echo "</pre>";
				
				return $user;

		}
		function delete(){
		}
 	}

  ?>