<?php 
		$a=1;
		$b=-2;
		$c=-6;
		if ($a==0) {
			echo "so a ban nhap khong hop le";
		}else{
			$del=$b*$b-4*$a*$c;
			if ($del<0) {
				echo "pt vo nghiem";
			}elseif ($del==0) {
				echo "pt co nghiem kep x1=x2=".(-$b/2/$a);
			}else{
				echo "pt co hai nghiem phan biet la: <br>";
				echo "x1= ".((-$b-sqrt($del))/2/$a);
				echo "<br>x2= ".((-$b-sqrt($del))/2/$a);
			}
		}
 ?>