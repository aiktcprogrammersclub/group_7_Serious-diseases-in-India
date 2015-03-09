<?php

	$host='127.0.0.1';
	$user='root';
	$password='root';
	$database="hope";
	
	
	$con= mysql_connect($host,$user,$password); 
		
		$connect=mysql_select_db($database, $con);
	
	if(!$connect)
	{
	
		echo 'Connection is done successfully';
		
	}
	
	else


					

		
	?>
