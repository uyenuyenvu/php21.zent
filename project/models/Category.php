<?php 
    require_once("connection.php");
    class Category{
        private $connection_obj;

        function __construct(){
            $this->connection_obj = new connection();

        }
        function paginite($limit=10,$page=1){
            $query = "SELECT * FROM categories WHERE deleted_at is NULL AND stt=1 limit ".(($page-1)*$limit).",".$limit."";
            die($query);
                    $result = $this->connection_obj->conn->query($query);

                    while($row = $result->fetch_assoc()) { 
                            $categories[] = $row;
                        }

                        return $categories;
        }
        function getAll(){
                   $query = "SELECT * FROM categories WHERE deleted_at is NULL AND stt=1";
                    $result = $this->connection_obj->conn->query($query);

                    while($row = $result->fetch_assoc()) { 
                            $categories[] = $row;
                        }

                        return $categories;

                                    }
        function getCategory(){

                   $query = "SELECT * FROM categories WHERE deleted_at is NULL AND stt=1";
                    $result = $this->connection_obj->conn->query($query);

                    while($row = $result->fetch_assoc()) { 
                            $categories[] = $row;
                        }

                        return $categories;

                                    }
        function find($id){
    

                    $query = "SELECT * FROM categories WHERE id=".$id." AND deleted_at is NULL AND stt=1";
                    $result = $this->connection_obj->conn->query($query);


                    $row = $result->fetch_assoc();

                    $cate=$row;
                    return $cate;

        }
        function create($data){ 
                    $cols='stt,';
                    $values='0,';
                    foreach ($data as $key => $value) {
                             if(strlen($value)>0 && $value !="0") {
                                        $cols.=$key.',';
                                        $values.='"'.$value.'",';
                                     }
                    }
                     $query='INSERT INTO categories('.$cols.'created_at) VALUES ('.$values.'"'.date("y-m-d h:i:s").'")';
                    $result = $this->connection_obj->conn->query($query);
                    
                    return $result;

        }
        function update($data){
                    $query='UPDATE categories SET ';
              
                   foreach ($data as $key => $value) 
                    if($key!='submit'){
                        $query.=$key.'="'.$value.'", ';
                   }
            
                 $query.='updated_at="'.date('y-m-d h:i:s').'"';
                   $query.=' WHERE id='.$_POST['id'];

                   // die($query);
                  
                    // $query = "UPDATE categories SET name='".$_POST['name']."', description='".$_POST['description']."' WHERE id=".$_POST['id'];
                     $result = $this->connection_obj->conn->query($query);
                    return $result;


        }
        function delete($id){
         
                $query="UPDATE categories SET deleted_at = '".date('y-m-d h:i:s')."' WHERE id='$id'";
               
                $result= $this->connection_obj->conn->query($query);
                return $result;
        }
        function list_request(){
        
            $query="SELECT * FROM categories where stt=0";
             $result=$this->connection_obj->conn->query($query);
             $categories_request = array();
 
                while($row = $result->fetch_assoc()) { 
                    $categories_request[] = $row;
                }
                
                return $categories_request;
        }
        function approved($id){ 

            $query="UPDATE categories SET stt=1 WHERE id=".$id;
             $result=$this->connection_obj->conn->query($query);
             return $result;
        }

        }

     


 ?>