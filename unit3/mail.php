<?php 
	require_once('send_mail.php');
	$name='uyen';
	ob_start();
	include('email.php');
	$contents = ob_get_clean();
	send_email('uyenvt.vnua@gmail.com','uyen',$contents,'subject');
 ?>