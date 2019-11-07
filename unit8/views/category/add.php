<?php   

    $servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

        $username = "root";   // Tên đăng nhập
            
        $password = "";    // Mật khẩu truy cập
            
        $dbname = "blog";   // Tên cơ sở dữ liệu muốn kết nối đến

    
        // Tạo kết nối đến CSDL
            
        $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");

        // Câu lệnh truy vấn
        $query = "SELECT * FROM categories";

        // Thực thi câu lệnh
        $result = $conn->query($query);
        
    
        // Tạo 1 mảng để chứa dữ liệu


        $categories = array();
        $query = "SELECT * FROM categories where parent_id is null and deleted_at is null";
        $result = $conn->query($query);

        while($row = $result->fetch_assoc()) { 
            $categories[] = $row;
        }

     

     ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New Category</h3>
    <a href="index.php" class="btn btn-success"><< Back to home</a>
    <hr> 
        <form action="category_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" placeholder="" name="thumbnail">
                
            </div>
             <div class="form-group">
                <label for="">parent_id</label>
                <select  class="form-control" name="parent_id">

                    <option name="" id="" value="0" >moi chon danh muc cha</option>
                    <?php foreach ($categories as $key) {
                     ?>
                    <option name="" id="" value='<?= $key['id']?>' ><?= $key['name']?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug">
            </div>
            <div class="form-group">
                <label for="">description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>