<?php
/*
*This is the simple registering page where data of the new user is been entered into the database
*With all kind of the security that should be provided to the user detail 
*almost all the data  of user is been filtered to avoid #xsf, #xss, #pssword fishing, #session_hijacking----------
*5if loops are been user
* each if loops is having certain security chech describe after
*/
session_start();
include('config_registered.php');
{
		function GetImageExtension($imagetype)
		{
		if(empty($imagetype)) return false;

						switch($imagetype)
						{
							case 'image/bmp';
							return '.bmp.';
							case 'image/jpeg';
							return '.jpeg.';
							case 'image/jpg';
							return '.jpg.';
							case 'image/png';
							return '.png.';
						}
			}
	$filter_input=array();
	echo $_SESSION['token_register'];
	echo '</br>';
	echo $_POST['token_register'];
	if($_SESSION['token_register']==$_POST['token_register'])
	{
		$_SESSION['token_confirmation']=$_SESSION['token_register'];
		$file_name=$_FILES['image']['name'];
		$tmp_name=$_FILES['image']['tmp_name'];
		$image_type=$_FILES['image']['type'];
			
			if(($_POST['name'])!=NULL && ($_POST['dname'])!=NULL && ($_POST['about_user'])!=NULL   && ($_POST['email'])!=NULL && ($_POST['country'])!=NULL && ($_POST['city'])!=NULL && ($_POST['password'])!=NULL && ($_POST['rpassword'])!=NULL  && ($_POST['Date'])!=NULL && ($_POST['Month'])!=NULL && ($_POST['Year'])!=NULL && ($_POST['gender'])!=NULL && $image_type!=NULL)
			{	
					if($_POST['password']==$_POST['rpassword'])
					{
					
						$extra= GetImageExtension($image_type);
						$image_name=date("d-m-Y")."-".time().$extra;
						$target_path="display_pics/".$image_name;
						$filter_input['username']=$_POST['name'];
						$filter_input['displayname']=$_POST['dname'];
						$filter_input['email']=$_POST['email'];
						$filter_input['password']=$_POST['password'];
						$filter_input['rpassword']=$_POST['rpassword'];
						$filter_input['country']=$_POST['country'];
						$filter_input['city']=$_POST['city'];
						$filter_input['date']=$_POST['Date'];
						$filter_input['month']=$_POST['Month'];
						$filter_input['year']=$_POST['Year'];
						$filter_input['gender']=$_POST['gender'];
						$filter_input['aboutuser']=$_POST['about_user'];
						$username=mysql_real_escape_string($filter_input['username']);
						$username=ucwords(strtolower($username));
						$displayname=mysql_real_escape_string($filter_input['displayname']);
						$displayname=ucwords(strtolower($displayname));
						$email=mysql_real_escape_string($filter_input['email']);
						$password=mysql_real_escape_string($filter_input['password']);
						$salt_for_encrypting_the_password='SHIFTLEFT';
						$encrypted_password=md5(md5($password) .$salt_for_encrypting_the_password); 
						$message_table_user='message';
						$share_table_user='shared';
						$mine_email='mine';
						$followers_table='follow';
						/*
						*****Security purpose encryption of the password*****
						*/
		//this will clean the password so that the password is encrypted and made password transparent  to the handler of the database and malicious attackers, to make it safe for the users.
						$dob_date=mysql_real_escape_string($filter_input['date']);
						$dob_month=mysql_real_escape_string($filter_input['month']);
						$dob_year=mysql_real_escape_string($filter_input['year']);
						$gender=mysql_real_escape_string($filter_input['gender']);
						$country=mysql_real_escape_string($filter_input['country']);
						$city=mysql_real_escape_string($filter_input['city']);
						$aboutusr=mysql_real_escape_string($filter_input['aboutuser']);
						$aboutuser=str_replace("\n","</br>", $aboutusr);
						$confirmation_code=mt_rand(10000000,99999999); //8digit random for the confirmation code is been generation of the user to get started on to his email id
						$user_status='inactive';
						
								if(move_uploaded_file($tmp_name,$target_path))
								{
									$encrypted_email=md5(md5($email) .$salt_for_encrypting_the_password);									//encryption of the email is done
									
									//$inserting_into_user_information="insert into registered_users(username,d_name,email,password,d_image,dob,country,city,gender,date_created,active) values('$username','$displayname','$email','$encrypted_password','$target_path','".$dob_date."/".$dob_month."/".$dob_year."','$country','$city','$gender','$user_status')";
									$inserting_into_user_information="insert into users(username,d_name,email,encrypted_email,password,d_image,dob,country,city,gender,about_user,active,confimation_code) values('$username','$displayname','$email','$encrypted_email','$encrypted_password','$target_path','".$dob_date."/".$dob_month."/".$dob_year."','$country','$city','$gender','$aboutuser','$user_status','$confirmation_code')";
									$execute_inserting_into_user_information=mysql_query($inserting_into_user_information,$con);
									/*
									*After inserting the detail of the user and for authentication users messaging table is create automatically based
									*on the  email of the user emailid we are encrypting the email id with random number to prevent it from malicious attackers
									*/
									
									/*
									*using the encrypted email we are generating the 4 different table 
									*1st is for shared data by the user
									*2nd is for messaging data by the user
									*3rd is for storing the users unencrypted  email id for further user
									*4th is for storing the detail of the follower and followedby information
									*/
									//$email_table_of_user="CREATE TABLE ".$encrypted_email."_".$mine_email."(
										//			mine_email_id VARCHAR(50) NOT NULL)";
									//$execute_email_table_of_user=mysql_query($email_table_of_user,$con);
									//$mine_table="".$encrypted_email."_".$mine_email."";
									//$insert_email_id="insert into ".$mine_table."(mine_email_id) values('$email')";
									//$insert_email_id=mysql_query($insert_email_id,$con);
									$_SESSION['encrypted_email']=$encrypted_email;
									$message_table_of_user="CREATE TABLE ".$encrypted_email."_".$message_table_user." (
													message_to VARCHAR(50) NOT NULL,
													message_from VARCHAR(50) NOT NULL,
													message VARCHAR(5000) NOT NULL,
													message_status VARCHAR(20) NOT NULL,
													date_time TIMESTAMP)";
									$execute_message_table_of_user=mysql_query($message_table_of_user,$con);
									$sharing_table_of_user="CREATE TABLE ".$encrypted_email."_".$share_table_user." (
													shared_text VARCHAR(5000),
													shared_image LONGBLOB,
													rates VARCHAR(500),
													who_rates VARCHAR(500),
													who_comments VARCHAR(5000),
													date_time TIMESTAMP)";
									$execute_share_table_of_user=mysql_query($sharing_table_of_user,$con);	
									$following_table_of_user="CREATE TABLE ".$encrypted_email."_".$followers_table." (
													followedby VARCHAR(500),
													following VARCHAR(500),
													bothfollwing VARCHAR(500),
													status_notice VARCHAR(500),
													date_time TIMESTAMP)";
									$execute_following_table_of_user=mysql_query($following_table_of_user,$con);
									header('location:confirmation_check.php');
									
										
							}
					else
						{
						echo 'file is to big';
						}
			}
			else
						{
						echo 'password not same';
						}
		
				
		}
		else
		{
		echo 'fill all';
		}
	}
	else
		{
		echo 'token not matched';
		}
}
?>
	