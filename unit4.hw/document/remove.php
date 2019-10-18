<?php 
session_start();
echo $_GET['cs'];
echo count($_SESSION['documents']);
unlink( "download/".$_GET['file']);

unset($_SESSION['documents'][$_GET['cs']]);


header('Location: index.php');

 ?>