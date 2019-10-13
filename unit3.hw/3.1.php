
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>3.1</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="info.php" method="GET" role="form">
            <legend>Information</legend>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào họ và tên" name="name">
            </div>
            
            <div class="form-group">
                <label for="">MSV</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mã sinh viên" name="id">
            </div>  

            <div class="form-group">
                <label for="">Lớp</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào lớp" name="clas">
            </div>
        
            <div class="form-group">
                <label for="">Trường</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào Trường" name="sch">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="nbp" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="nbp">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="mail">
            </div>
             <?php
                if(isset($_COOKIE['msg']))echo $_COOKIE['msg'];

            ?>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>