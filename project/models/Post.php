<?php  
require_once('connection.php');
	class Post{

		function paginite($limit=6,$page=1){
				$connection_obj=new connection();
			
				$query = "SELECT * FROM posts WHERE deleted_at is NULL AND stt=1 limit ".(($page-1)*$limit).",".$limit."";
				// die($query);
				$result = $connection_obj->conn->query($query);
				$posts = array();

				while($row = $result->fetch_assoc()) { 
					$posts[] = $row;
				}
				$query1="SELECT count(id) from posts where deleted_at is NULL AND stt=1";
				$result = $connection_obj->conn->query($query1);
				$row = $result->fetch_assoc();
				$_SESSION['total']=$row['count(id)'];
				// echo "<pre>";
				// 	print_r($posts);
				// echo "</pre>";
				// die();
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
			// die($data['title']);
			// die($this->slug($data['title']));
				$connection_obj=new connection();
		        $cols="stt,slug,user_id,";
			    $values="0,'".$this->slug($data['title'])."',".$_SESSION['user']['id'].",";

			    foreach ($data as $key => $value) {
	    		
	    		$cols.=$key.",";
	    		$values.="'".$value."',";
	   		    }
		   		 $query="INSERT INTO posts(".$cols."created_at) VALUES (".$values."'".date("y-m-d h:i:s")."')";
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
            
                 $query.="updated_at='".date('y-m-d h:i:s')."',slug='".$this->slug($data['title'])."'";

                  // die($query);
                   $query.=" WHERE id=".$_POST['id'];

                  // die($query);
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
		function slug($str) {
		    $str = trim(mb_strtolower($str));
		    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
		    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
		    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
		    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
		    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
		    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
		    $str = preg_replace('/(đ)/', 'd', $str);
		    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
		    $str = preg_replace('/([\s]+)/', '-', $str);
		    return $str;
	}

	}

 ?>