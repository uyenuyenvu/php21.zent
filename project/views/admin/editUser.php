<?php 
    include_once('left-top.php');
 ?>
 	<div class="container">
    <h1 align="center">Edit Category</h1>
    <a href="?mod=user&act=index" class="btn btn-success"><< Back to home</a>
    <hr>
        <form action="?mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value=" <?php echo($user['name']) ?> " >
            </div>
            
             <div class="form-group">
                <label for="">avatar</label>
                <img src="public/home/images/<?= $user['avatar'] ?>" width="200px" height="200px">
        <!--         <input type="file" class="form-control" id="thumbnail" placeholder="" name="thumbnail"> -->
                <input type="file" class="form-control" id="avatar" placeholder="" name="avatar">
                
         <!--        <inp ut type="submit" value="Upload Image" name="submit"> -->
            </div>
        
            <div class="form-group"> 
                <label for="">email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email"  value=" <?php echo($user['email']) ?> " >
            </div>

            <div class="form-group">
                <label for="">password</label>
                <input type="password" class="form-control" id="" placeholder="" name="password"  value=" <?php echo($user['password']) ?> " >
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
<?php 

    include_once('footer.php');
 ?>