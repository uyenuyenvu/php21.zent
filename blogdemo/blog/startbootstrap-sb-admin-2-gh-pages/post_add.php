<?php   
     include("Lmenu.php"); 
    include("Tmenu.php");

    include('conection.php');

        $posts = array();
        $query = "SELECT * FROM posts where deleted_at is null";
        $result = $conn->query($query);

        while($row = $result->fetch_assoc()) { 
            $posts[] = $row;
        }



        $user = array();
        $query = "SELECT * FROM users where deleted_at is null";
        $result = $conn->query($query);

        while($row = $result->fetch_assoc()) { 
            $user[] = $row;
        }

         $cate = array();
        $query = "SELECT * FROM categories where deleted_at is null";
        $result = $conn->query($query);

        while($row = $result->fetch_assoc()) { 
            $cate[] = $row;
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
   <!--  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css">
    <!-- <script type="text/javascript" src="ckeditor_path/ckeditor.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    <script>
        $(document).ready(function () {
            $('#textarea').summernote();
        })
    </script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New Post</h3>
    <a href="posts.php" class="btn btn-success"><< Back to home</a>
    <hr> 
        <form action="post_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" placeholder="" name="thumbnail">
                
            </div>
             <div class="form-group">
                <label for="">content</label>
                <textarea type="text" class="form-control" placeholder="" name="content" id="textarea"></textarea> 
                
            </div>
             <div class="form-group">
                <label for="">Author</label>
                <select  class="form-control" name="user_id">

                    <option name="" id="" value="0" >moi chon tac gia</option>
                    <?php foreach ($user as $key) {
                     ?>
                    <option name="" id="" value='<?= $key['id']?>' ><?= $key['name']?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">category</label>
                <select  class="form-control" name="category_id">

                    <option name="" id="" value="0" >moi chon danh muc</option>
                    <?php foreach ($cate as $key) {
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