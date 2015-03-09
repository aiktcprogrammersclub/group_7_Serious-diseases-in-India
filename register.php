<?php
session_start();
include 'config.php';
$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$use_table="registered";
$message_table_user="blog";
$followers_table="blogs";

$check_validity = "SELECT * FROM ".$use_table." WHERE email='$email'";
	$execute_query_details=mysql_query($check_validity,$con);
	$count=mysql_num_rows($execute_query_details);
				if($count>0)
				{
				$message_of_error='This email is already in use';
				$_SESSION['error_message2']=$message_of_error;
				header('location:index.php#register');
				
				
				}
				else
				{
				echo $count;
				$encrypted_email=md5(md5($email));
				echo $encrypted_email;
$query2="insert into ".$use_table."(username,email,mobile,password) values('$username','$email','$mobile','$password')";
$execute2=mysql_query($query2,$con);
$following_table_of_user="CREATE TABLE ".$encrypted_email."_".$followers_table." (
													shared VARCHAR(500),
													date_time TIMESTAMP)";
									$execute_following_table_of_user=mysql_query($following_table_of_user,$con);
							$message_of_error='Thanks For Registering, Login To Access Your Account';
							$_SESSION['welcome_note']=$message_of_error;
							header('location:index.php');
									

						}
				
	


?>
						

