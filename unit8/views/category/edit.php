 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8"> 
 	<title>edit</title> 
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
    <h3 align="center">Edit Category</h3>
    <a href="?mod=category&act=list" class="btn btn-success"><< Back to home</a>
    <hr>
        <form action="?mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value=" <?php echo($category['name']) ?> " >
            </div>
            
             <div class="form-group">
                <label for="">thumbnail</label>
                <img src="<?= $category['thumbnail'] ?>" width="200px" height="200px">
        <!--         <input type="file" class="form-control" id="thumbnail" placeholder="" name="thumbnail"> -->
                <input type="file" class="form-control" id="thumbnail" placeholder="" name="thumbnail">
                
         <!--        <inp ut type="submit" value="Upload Image" name="submit"> -->
            </div>
           <div class="form-group">
                <label for="">parent_id</label>
                <select  class="form-control" name='parent_id'>

                    <option name="" id="" value="0" >moi chon danh muc cha</option>
                    <?php foreach ($categories as $key) {
                     ?>
                    <option <?php if($category['parent_id']==$key['id']) echo "selected"; ?> value='<?= $key['id']?>' ><?= $key['name']?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group"> 
                <label for="">slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug"  value=" <?php echo($category['slug']) ?> " >
            </div>

            <div class="form-group">
                <label for="">description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description"  value=" <?php echo($category['description']) ?> " >
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
 </body>
 </html>