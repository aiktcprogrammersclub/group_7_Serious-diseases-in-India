<?php
session_start();
session_destroy();
	//	$token_unknown_chat=md5(uniqid(rand(), TRUE));
		//$_SESSION['token_unknown_chat']=$token_unknown_chat;
	
		header('location:index.php');
?>
