<?php
session_start();
include 'config.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$comment=$_POST['comment'];
//$cpassword=$_POST['cpassword'];
$use_table="feedbacks";
echo $name;


$query2="insert into ".$use_table."(name,email,phno,comment) values('$name','$email','$phno','$comment')";
$execute2=mysql_query($query2,$con);


	$message_of_error='Thanks '.$name.' for Your Valueable Feedback';
			$_SESSION['welcome_note']=$message_of_error;
							header('location:index.php');
									


				
	


?>
						

