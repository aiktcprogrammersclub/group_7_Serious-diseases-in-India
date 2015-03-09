<?php
session_start();
include 'config.php';
//$username=$_POST['username'];
$email=$_POST['email'];
//$mobile=$_POST['mobile'];
$password=$_POST['password'];
//$cpassword=$_POST['cpassword'];
$use_table="registered";

//$query2="insert into ".$use_table."(email,password) values('$email','$password')";
//$execute2=mysql_query($query2,$con);
//echo $password;
//echo $email;

$check_validity = "SELECT * FROM ".$use_table." WHERE email='$email' and password='$password'";
				$execute_check_validity=mysql_query($check_validity,$con);
				$count=mysql_num_rows($execute_check_validity);
				if($count==1)
				{
				$_SESSION['user_email']=$email;
				header('location:afterlogin.php');
				}
				else
				{
				$message_of_error='Invalid email address or password';
							$_SESSION['error_message']=$message_of_error;
							header('location:index.php#register');
				}
				

?>
						

