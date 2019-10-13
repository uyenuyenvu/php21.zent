<?php 
	$dem=0;
	$i=1;
	$s=0;
	while ($dem < 10) {
		if ($i%2==0) {
			$s+=$i;
			$dem++;
			$i++;
		}else{
			$i++;
		}
	}
	echo "tong 10 so chan dau tien la: s= ".$s;

 ?>