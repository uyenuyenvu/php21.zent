<?php  
	include_once('left-top.php');
 ?>


    <div class="container">

    <hr> 
        <form action="?mod=post&act=store" method="POST" role="form" enctype="multipart/form-data"> 
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
                <label for="">description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

<?php 
	include_once('footer.php');
 ?>