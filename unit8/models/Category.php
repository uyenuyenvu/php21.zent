<?php 
    require_once("connection.php");
    class Category{

        function getAll(){

                   $connection_obj=new connection();

                    $query = "SELECT * FROM categories";
                    $result = $connection_obj->conn->query($query);

                    while($row = $result->fetch_assoc()) { 
                            $categories[] = $row;
                        }

                        return $categories;

                                    }
        function find($id){
            $connection_obj=new connection();

            $query = "SELECT * FROM categories WHERE id=".$id;
            $result = $connection_obj->conn->query($query);


            $row = $result->fetch_assoc();

            $cate=$row;
            return $cate;

        }
    }

 ?>