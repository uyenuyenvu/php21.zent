<?php  
require_once('connection.php');
	class Post{

		function paginite($limit=10,$page=1){
				$connection_obj=new connection();
			
				$query = "SELECT * FROM posts WHERE deleted_at is NULL AND stt=1 limit ".(($page-1)*10).",".$limit."";
	
				$result = $connection_obj->conn->query($query);
				$posts = array();

				while($row = $result->fetch_assoc()) { 
					$posts[] = $row;
				}
				$query1="SELECT count(id) from posts where deleted_at is NULL AND stt=1";
				$result = $connection_obj->conn->query($query1);
				$row = $result->fetch_assoc();
				$_SESSION['total']=$row['count(id)'];
				return $posts;

		}

		function getAll(){
				$connection_obj=new connection();
			
				$query = "SELECT * FROM posts WHERE deleted_at is NULL AND stt=1 ";
	
				$result = $connection_obj->conn->query($query);
				$posts = array();

				while($row = $result->fetch_assoc()) { 
					$posts[] = $row;
				}
				
				return $posts;
		}
		function getPost(){
				$connection_obj=new connection();
			
				$query = "SELECT * FROM posts WHERE deleted_at is NULL AND stt=1 AND user_id=".$_SESSION['user']['id'];
				$result = $connection_obj->conn->query($query);
				$posts = array();

				while($row = $result->fetch_assoc()) { 
					$posts[] = $row;
				}
				
				return $posts;
		}
		function getPopular(){
				$connection_obj=new connection();
			
				$query = "SELECT * FROM posts WHERE deleted_at is NULL AND stt=1 ORDER BY view_count DESC limit 3";
				$result = $connection_obj->conn->query($query);
				$posts = array();
 
				while($row = $result->fetch_assoc()) { 
					$posts[] = $row;
				}
				
				return $posts;
		}
		function posts_by_category($id){
				$connection_obj=new connection();
				$query="SELECT * FROM posts WHERE deleted_at is NULL AND stt=1 AND category_id=".$id;
				// die($query);
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
					$post = $row;
			

			
 				$query="UPDATE posts SET view_count=".($post['view_count']+1)." WHERE id= ".$id;
 				$result = $connection_obj->conn->query($query);

				return $post;
		}
		function creat($data){
				$connection_obj=new connection();
		        $cols='stt,';
			    $values='0,';
			    foreach ($data as $key => $value) {
	    		
	    		$cols.=$key.',';
	    		$values.='"'.$value.'",';
	   		    }
		   		 $query='INSERT INTO posts('.$cols.'created_at) VALUES ('.$values.'"'.date("y-m-d h:i:s").'")';
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
		function list_request(){
			$connection_obj=new connection();
			$query="SELECT * FROM posts where stt=0";
			 $result=$connection_obj->conn->query($query);
			 $posts_request = array();
 
				while($row = $result->fetch_assoc()) { 
					$posts_request[] = $row;
				}
				
				return $posts_request;
		}
		function approved($id){ 
			$connection_obj=new connection();
			$query="UPDATE posts SET stt=1 WHERE id=".$id;
			 $result=$connection_obj->conn->query($query);
			 return $result;
		}

	}

 ?>