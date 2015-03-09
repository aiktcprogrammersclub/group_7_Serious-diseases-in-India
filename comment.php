<?php
session_start();
include 'config.php';
$usetable=$_POST['usetable'];
$comment=$_POST['yourcomment'];
$username=$_POST['username'];
$message_table_user="blog";
$followers_table="blogs";
$query2="insert into ".$usetable."(username,shared) values('$username','$comment')";
$execute2=mysql_query($query2,$con);		
header('location:afterlogin.php#diseases');
?>
						

