<?php

	$host='127.0.0.1';
	$user='root';
	$password='root';
	$database="registered";
	
	
	$con= mysql_connect($host,$user,$password); 
		
		$connect=mysql_select_db($database, $con);
	
	if(!$connect)
	{
	
		echo 'Connection is  NOT Completed  successfully  Please Check out the detail of HOST, USER, PASSWORD, AND DATABASE IN THE "CONFIG_REGISTERED.PHP"';
		
	}
	
	else

					

		
	?>