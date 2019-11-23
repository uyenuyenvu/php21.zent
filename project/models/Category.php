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
            // die('aaaa');
         $query = "SELECT * FROM categories WHERE deleted_at is NULL AND stt=1";
          // die( $query);
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
    // echo "<pre>";
    // print_r($data);
    //   echo "</pre>";
    //   die();
    $cols='stt,slug,';
    // die($this->slug($data['name']));
    $values='0,"'.$this->slug($data['name']).'",';
    foreach ($data as $key => $value) {
       
        $cols.=$key.',';
        $values.='"'.$value.'",';
    

}
$query='INSERT INTO categories('.$cols.'created_at) VALUES ('.$values.'"'.date("y-m-d h:i:s").'")';
// die($query);
$result = $this->connection_obj->conn->query($query);

return $result;

}
function update($data){
    $query='UPDATE categories SET ';

    foreach ($data as $key => $value) 
        if($key!='submit'){
            $query.=$key.'="'.$value.'", ';
        }
                    // var_dump($this->slug($data['name']));
        var_dump($data['name']);
        die();
        $query.='updated_at="'.date('y-m-d h:i:s').'",slug='.$this->slug($data['name']);
        $query.=' WHERE id='.$_POST['id'];

                       // die($query);
        echo '<br>'.$query;
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