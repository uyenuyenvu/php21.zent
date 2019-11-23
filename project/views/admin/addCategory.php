<?php 
    include_once('left-top.php');
 ?>
    <div class="container">
        <h1 align="center">Add new Category</h1>
        <hr>
        <form action="?mod=category&act=store" method="POST" role="form" enctype="multipart/form-data">
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
                <label for="">description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
<?php 
    include_once('footer.php');
 ?>