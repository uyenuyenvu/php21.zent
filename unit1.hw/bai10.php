<?php 
	$s=1;
	$p=1;
	$n=5;
	for ($i=2; $i <=$n; $i++) { 
		$p=$p/($i-1);
		$s+=$p;
	}
	echo "s= ".$s;


 ?>