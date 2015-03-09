<?php
include 'config.php';
//$username=$_POST['username'];
$email=$_POST['username'];
//$mobile=$_POST['mobile'];
//$password=$_POST['password'];
//$cpassword=$_POST['cpassword'];
$use_table="registered";

//$query2="insert into ".$use_table."(email,password) values('$email','$password')";
//$execute2=mysql_query($query2,$con);
//echo $password;
//echo $email;

$check_validity = "SELECT * FROM ".$use_table." WHERE email='$email'";
				$execute_check_validity=mysql_query($check_validity,$con);
				$count=mysql_num_rows($execute_check_validity);
				if($count==1)
				{
				echo "welcome";
				}
				else
				{
				echo "already in use";
				}
				
?>
