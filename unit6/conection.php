<?php 
	$servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

		$username = "root";   // Tên đăng nhập
			
		$password = "";    // Mật khẩu truy cập
			
		$dbname = "blog";   // Tên cơ sở dữ liệu muốn kết nối đến

	
		// Tạo kết nối đến CSDL
			
		$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset("utf8");

		// Câu lệnh truy vấn
		$query = "SELECT * FROM categories";

		// Thực thi câu lệnh
		$result = $conn->query($query);
		
	
		// Tạo 1 mảng để chứa dữ liệu


 ?>