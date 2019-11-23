
 <?php 
        include_once('left-top.php');
  ?>
    <a href="?mod=post&act=index" class="btn btn-success"><< Back to home</a>
    <hr>
        <form action="?mod=post&act=update" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?= $post['id'] ?>">
            <div class="form-group">
                <label for="">title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value=" <?php echo($post['title']); ?> " >
            </div>
            <div class="form-group"> 
                <label for="">thumbnail</label>
                <img src="public/home/images/<?= $post['thumbnail'] ?>" width="200px" height="200px">
                <input type="file" class="form-control" id="thumbnail" placeholder="" name="thumbnail"  value=" <?= $post['thumbnail'] ?>" >
         <!--        <input type="submit" value="Upload Image" name="submit"> -->
            </div>
             <div class="form-group">
                <label for="">description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description"  value=" <?php echo($post['description']); ?> " >
            </div>
             <div class="form-group">
                <label for="">content</label>
                <textarea type="text" class="form-control" placeholder="" name="content" id="textarea"><?php echo($post['content']); ?> </textarea>
            </div>
            <div class="form-group">
                <label for="">Author</label>
                <select  class="form-control" name='user_id'>

                    <option name="" id="" value="0" >moi chon tac gia</option>
                    <?php foreach ($user as $key) {
                     ?>
                    <option <?php if($post['user_id']==$key['id']) echo "selected"; ?> value='<?= $key['id']?>' ><?= $key['name']?></option>
                <?php } ?>
                </select>
            </div>
           <div class="form-group">
                <label for="">Category</label>
                <select  class="form-control" name='category_id'>

                    <option name="" id="" value="0" >moi chon danh muc cha</option>
                    <?php foreach ($category as $key) {
                     ?>
                    <option <?php if($post['category_id']==$key['id']) echo "selected"; ?> value='<?= $key['id']?>' ><?= $key['name']?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug"  value=" <?php echo($post['slug']) ?> " >
            </div>
           
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
<?php 
    include_once('footer.php');
 ?>
 