<?php
/*
*This is the simple registering page where data of the new user is been entered into the database
*With all kind of the security that should be provided to the user detail 
*almost all the data  of user is been filtered to avoid #xsf, #xss, #pssword fishing, #session_hijacking, sql_injections----------
*5if loops are been user
* each if loops is having certain security chech describe after
*/
session_start();
include('config_registered.php');
{

	$filter_input=array();
	echo $_SESSION['logged_in'];
	echo '</br>';
	echo $_POST['logged_in'];
	echo '</br>';
	if($_SESSION['logged_in']==$_POST['logged_in'])
	{
		if(($_POST['email'])!=NULL && ($_POST['password'])!=NULL)
			{	
				$salt_for_encrypting_the_password='SHIFTLEFT';
				$filter_input['email']=$_POST['email'];
				$filter_input['password']=$_POST['password'];
				$email=mysql_real_escape_string($filter_input['email']);
				$password=mysql_real_escape_string($filter_input['password']);
				$encrypted_password=md5(md5($password) .$salt_for_encrypting_the_password); 
				$check_validity = "SELECT * FROM users WHERE email='$email' and password='$encrypted_password'";
				$execute_check_validity=mysql_query($check_validity,$con);
				$count=mysql_num_rows($execute_check_validity);
				if($count==1)
					{
						unset($_SESSION['error_message']);
						$_SESSION['your_email']=$email;
						$_SESSION['your_encrypted_email']=md5(md5($email) .$salt_for_encrypting_the_password);	
						header('location:home.php');
						
					}
					else
						{
							$message_of_error='Invalid email address or password';
							$_SESSION['error_message']=$message_of_error;
							header('location:../index.php');
						}
				}
		else
			{
			$message_of_error='Please, fill all the inputs correctly';
							$_SESSION['error_message']=$message_of_error;
							header('location:../index.php');
			}
	}
	else
	{
	header('location:../index.php');
	}
}
?>
				