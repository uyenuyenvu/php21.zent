<?php 

	class oto{
		var $ten;
		var $mau;
		var $so_cho;

		 function chay(){
		 	echo "<br>phương thức chạy";
		 }
		 function inTT(){
		 	echo "<br>thông tin xe: ";
			echo "<br> tên: ".$this->ten;
			echo "<br> mau: ".$this->mau;
			echo "<br> so_cho: ".$this->so_cho;
		 }
		 function __construct(){
		 	echo "constructor";
		 }
	}
	$a= new oto();
	$a->ten="bmw";
	$a->mau="do";
	$a->so_cho=10;

	$a->chay();
	$a->inTT();


 ?>