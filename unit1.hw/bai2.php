<?php 

	$a=6;
	$b=4;
	if ($a==0) {
		echo "so a ban nhap khong hop le!";
	}elseif ($b==0 && $a==0) {
		echo "pt vo so nghiem";
	}else{
		echo "pt co nghiem la x= ".(-$b/$a);
	}
 ?>