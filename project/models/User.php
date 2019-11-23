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


				$query="SELECT * FROM users WHERE email = '".$email."'  AND password='".$password."' AND stt=1";
			
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
		function approved($id){ 
			$connection_obj=new connection();
			$query="UPDATE users SET stt=1 WHERE id=".$id;
			 $result=$connection_obj->conn->query($query);
			 return $result;
		}
		function unapproved($id){ 
			$connection_obj=new connection();
			$query="UPDATE users SET stt=0 WHERE id=".$id;
			 $result=$connection_obj->conn->query($query);
			 return $result;
		}
		 function update($data){
		 	$connection_obj=new connection();
                    $query='UPDATE users SET ';
              
                   foreach ($data as $key => $value) 
                    if($key!='submit'){
                        $query.=$key.'="'.$value.'", ';
                        $_SESSION['user'][$key]=$value;
                   }
            
                 $query.='updated_at="'.date('y-m-d h:i:s').'"';
                   $query.=' WHERE id='.$_POST['id'];

                   // die($query);
                   echo '<br>'.$query;
                    $result = $connection_obj->conn->query($query);
                    return $result;


        }
 	}

  ?>