<?php
session_start();
$token=0;
if($_SESSION['token_unknown_chat']!=NULL)
{
		$token=$_SESSION['token_unknown_chat'];
		$_SESSION['token']=$token;
}
if($token==0)
{
		$token=md5(uniqid(rand(), TRUE));
		$_SESSION['token']=$token;
}
include 'config2.php';
{ //########VERY IMPORTANT LOOP#######
//****************THIS IS THE LOOP OPENED FOR THE ELSE CONDITION IN THE "CONFIG2.PHP" ************************************
	$_SESSION['token']=$token;
	echo $token;
	$if_executed=0;
			$online_message='Other end user is <font color="green"><i><u>online now</u>...</i></font>';


	$query1="select * from session_table order by 'sr_no'";
	$execute1=mysql_query($query1,$con);
	$count_rows=mysql_num_rows($execute1);
			if($count_rows > 0)
			{
						while($row2=mysql_fetch_array($execute1))
						{
							$total_rows=$row2['sr_no'];
							$chat_table=$row2['chat_table'];
							$query3="select distinct user_id from $chat_table";
							$execute3=mysql_query($query3,$con);
							$count_rows2=mysql_num_rows($execute3);
									if($count_rows2<2)
									{
										$use_table=$chat_table;
										$_SESSION['use_table']=$use_table;
										$query4="insert into ".$chat_table."(user_id,date_time) values('$token',NOW())";
										$execute4=mysql_query($query4,$con);
										$if_executed=1;
										header('location:unknown_chat_fpage.php');
										
									}
								
						}
					if($if_executed==0)
							{
									$query10="select * from session_table order by 'sr_no'";
									$execute10=mysql_query($query10,$con);
											while($row10=mysql_fetch_array($execute10))
											{
												$sr_no=$row10['sr_no'];
											}
												$sr_no++;
											$query7="insert into session_table(sr_no,chat_table) values('$sr_no','".$token."_".$sr_no."')";
											$execute7=mysql_query($query7,$con);
											$query6="CREATE TABLE ".$token."_".$sr_no." (
															user_id VARCHAR(50) NOT NULL,
															message LONGTEXT,
															user_image LONGBLOB,
															date_time TIMESTAMP)";
											$execute6=mysql_query($query6,$con);
											$use_table="".$token."_".$sr_no."";
											$query8="insert into ".$use_table."(user_id,date_time) values('$token',NOW())";
											$execute8=mysql_query($query8,$con);
											//echo $use_table;
												$_SESSION['use_table']=$use_table;
													header('location:unknown_chat_fpage.php');
								}
			}
			else
					{
						
												$sr_no=1;
										$query2="insert into session_table(sr_no,chat_table) values('$sr_no','".$token."_".$sr_no."')";
										$execute2=mysql_query($query2,$con);
										
										$query4="CREATE TABLE ".$token."_".$sr_no." (
																user_id VARCHAR(50) NOT NULL,
																message LONGTEXT,
																user_image LONGBLOB,
																date_time TIMESTAMP)";
										$execute4=mysql_query($query4,$con);
										$use_table="".$token."_".$sr_no."";
										$query8="insert into ".$use_table."(user_id,date_time) values('$token',NOW())";
										$execute8=mysql_query($query8,$con);
										//echo $use_table;
											$_SESSION['use_table']=$use_table;
												header('location:unknown_chat_fpage.php');
									}
					
					
								
}//CLOSING THE ELSE LOOP OF THE "config2.php file"
?>