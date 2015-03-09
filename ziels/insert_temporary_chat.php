<?php
session_start();
$use_table=$_SESSION['use_table'];
$token=$_SESSION['token'];
$_SESSION['token']=$token;
$_SESSION['use_table']=$use_table;
if($token!=NULL && $use_table!=NULL)
{
include 'config2.php';
$filter_input=array();
$filter_input['message']=$_POST['message'];
$messages=$filter_input['message'];
//$messages=$_GET['message'];
$message=str_replace("\n","</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", $messages);
$file_name=$_FILES['image']['name'];
$tmp_name=$_FILES['image']['tmp_name'];
$image_type=$_FILES['image']['type'];

{   		//########VERY IMPORTANT LOOP#######
		//****************THIS IS THE LOOP OPENED FOR THE ELSE CONDITION IN THE "CONFIG2.PHP" ************************************
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
	//		ECHO "<BR>";
		//	echo $message;ECHO "<BR>";
		//	echo $image_type;
			if($image_type!=NULL || $message!=NULL)
			{
						if($image_type!=NULL && $message!=NULL)
						{
								
								$extra= GetImageExtension($image_type);
								$image_name=date("d-m-Y")."-".time().$extra;
								$target_path="images/".$image_name;
			
							if(move_uploaded_file($tmp_name,$target_path))
								{
								$query2="insert into ".$use_table."(user_id,message,user_image,date_time) values('$token','$message','$target_path',NOW())";
								$execute2=mysql_query($query2,$con);
								header('location:unknown_chat_fpage.php');
								
								
								}
						}
				
						if($image_type==NULL && $message!=NULL)
					{
							$query1="insert into ".$use_table."(user_id,message,date_time) values('$token','$message',NOW())";
							$execute1=mysql_query($query1,$con);
							header('location:unknown_chat_fpage.php');
							
					}
					
						if($image_type!=NULL && $message==NULL)
					{
								$extra= GetImageExtension($image_type);
								$image_name=date("d-m-Y")."-".time().$extra;
								$target_path="images/".$image_name;
			
							if(move_uploaded_file($tmp_name,$target_path))
								{
								$query2="insert into ".$use_table."(user_id,user_image,date_time) values('$token','$target_path',NOW())";
								$execute2=mysql_query($query2,$con);
								header('location:unknown_chat_fpage.php');
								
								
								}
					}
				
			}
			
			else{
			header('location:unknown_chat_fpage.php');
			}
					
		}
}
else 
{
header('location:index.php');
}