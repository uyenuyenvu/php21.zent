<?php 
	require_once('models/Connection.php');

	class User{
		var $connection_obj ;
		
		function __construct(){
			$this->connection_obj = new Connection();
		}
		
		function login($email,$password){
			$query = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."' ";

			//echo "$query";

			$result = $this->connection_obj->conn->query($query);

			$user = $result->fetch_assoc();

			//var_dump($user);

			return $user;
		}


	}
	
 ?>