<?php 

	class connection{

			var $conn;

			function __construct(){

				$servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

				$username = "root";   // Tên đăng nhập
					
				$password = "";    // Mật khẩu truy cập
					
				$dbname = "blog";   // Tên cơ sở dữ liệu muốn kết nối đến
				$this->conn = new mysqli($servername, $username, $password, $dbname);
						$this->conn->set_charset("utf8");

				

	}}


 ?>