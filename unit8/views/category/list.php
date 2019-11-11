
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>uyen</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
    <h1 align="center"><b>---CATEGORIES---</b></h1>
    <a href="?mod=category&act=add" class="btn btn-success">++ Add</a>
        <?php 
        if(isset($_COOKIE['msg']))
            echo $_COOKIE['msg'];
         if(isset($_COOKIE['msgDel']))
            echo $_COOKIE['msgDel'];
     ?>
    <table class="table table-striped">
        <tr>
            <td>Code</td>
            <td>Name</td>
            <td>img</td>
            <td>#</td>
        </tr>
        <?php 
            foreach ($categories as $key=>$value) 
                if ($value['deleted_at']==NULL) {
                    
                    echo "<tr>";
                    echo "<td>".$value['id']."</td>";
                    echo "<td>".($value['name'])."</td>";
                    echo '<td><img src="'.$value['thumbnail'].'"" style="width: 60px; height: 60px;"></td>';
                    echo "<td>".' <a href="?mod=category&act=detail&id='.$value['id'].'&slug='.$value['slug'].'" class="btn btn-success">xem</a> '.'<a href="?mod=category&act=delete&id='.$value['id'].'" class="btn btn-success">xóa</a>'.' <a href="?mod=category&act=edit&id='.$value['id'].'" class="btn btn-success">sửa</a> '."</td>";
                echo "</tr>";
            }
         ?>
     </table>
 </body>
 </html>