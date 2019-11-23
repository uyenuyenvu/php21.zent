<?php 
	require_once('models/Connection.php');

	class Post{
		var $connection_obj ;
		
		function __construct(){
			$this->connection_obj = new Connection();
		}
		
		


	}
	
 ?>