<?php
session_start();
include 'config.php';
$usetable=$_POST['usetable'];
$blog=$_POST['yourblog'];
$message_table_user="blog";
$followers_table="blogs";
$query2="insert into ".$usetable."(shared) values('$blog')";
$execute2=mysql_query($query2,$con);		
header('location:afterlogin.php#blogs');
?>
						

