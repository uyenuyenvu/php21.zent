<?php 
require_once('connection.php');
	class Post{
		var $connection_obj;
		function getAll(){
				$connection_obj=new connection();
			
				$query = "SELECT * FROM posts WHERE deleted_at is NULL";
				$result = $connection_obj->conn->query($query);
				$posts = array();

				while($row = $result->fetch_assoc()) { 
					$posts[] = $row;
				}
				return $posts;
		}
		function find($id){
				$connection_obj=new connection();

				$query = "SELECT * FROM posts WHERE id=".$id." AND deleted_at is NULL";
				$result = $connection_obj->conn->query($query);
 

				$row = $result->fetch_assoc();

				$post=$row;
				return $post;
		}
		function creat($data){
				$connection_obj=new connection();
		         $cols='';
			    $values='';
			    foreach ($data as $key => $value) {
	    		
	    		$cols.=$key.',';
	    		$values.='"'.$value.'",';
	   		    }

		   		 $query='INSERT INTO posts('.$cols.'created_at) VALUES ('.$values.'"'.date("y-m-d h:i:s").'")';
		   		 // die($query);
		   		 $result=$connection_obj->conn->query($query);                    
	                    return $result;

		}
        function update($data){
        		$connection_obj=new connection();
                    $query="UPDATE posts SET ";
              
                   foreach ($data as $key => $value) 
                    if($key!='submit'){
                        $query.=$key."='".$value."', ";
                   }
            
                 $query.="updated_at='".date('y-m-d h:i:s')."'";
                   $query.=" WHERE id=".$_POST['id'];

                  
                    // $query = "UPDATE categories SET name='".$_POST['name']."', description='".$_POST['description']."' WHERE id=".$_POST['id'];
                     $result = $connection_obj->conn->query($query);
                    return $result;


        }
		function delete($id){
			$connection_obj=new connection();
			$query="UPDATE posts SET deleted_at = '".date('y-m-d h:i:s')."' WHERE id='$id'";
               
            $result=$connection_obj->conn->query($query);
            return $result;
		}

	}

 ?>