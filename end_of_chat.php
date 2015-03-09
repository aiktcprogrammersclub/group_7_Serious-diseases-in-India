<?php
session_start();

$use_table=$_SESSION['use_table'];
$token=$_SESSION['token'];
if($token!=NULL && $use_table!=NULL)
{
	include 'config2.php';
	{   
	//########VERY IMPORTANT LOOP#######
		//****************THIS IS THE LOOP OPENED FOR THE ELSE CONDITION IN THE "CONFIG2.PHP" ************************************
		$both_offline=0;
		$only_one_user=0;
		$offline_message='Other end user is <font color="red"><i>offline now</i></font> click on <font color="red"><i>new chat...<font color="red"><i> ';
		$query1="select * from ".$use_table." order by 'date_time'";
		// **query1** is to display the live chat directly into the division it select all the chat from the database and display. according 12loop inside the while after reading each of the row in the table
		$execute1=mysql_query($query1,$con);
		while($row1=mysql_fetch_array($execute1))
			{
				$message=$row1['message'];
				if($message==$offline_message)
				{
						$both_offline=1;
				}
			}
			$query5="select distinct user_id from $use_table";
			$execute5=mysql_query($query5,$con);
			$count_rows=mysql_num_rows($execute5);
			if($count_rows==1)
			{
					$only_one_user=1;
			}
				if($both_offline==0)
				{
					$query4="delete from session_table where chat_table='$use_table'";
					mysql_query($query4,$con);
					$query2="insert into ".$use_table."(user_id,message,date_time) values('$token','$offline_message',NOW())";
						mysql_query($query2,$con);
						if($only_one_user==1)
						{
							$query3="DROP TABLE ".$use_table."";
							mysql_query($query3,$con);
						}
						session_destroy();
					//	$token_unknown_chat=md5(uniqid(rand(), TRUE));
						//$_SESSION['token_unknown_chat']=$token_unknown_chat;
						header('location:index.php');
				}
					if($both_offline==1)
				{
							$query3="DROP TABLE ".$use_table."";
							mysql_query($query3,$con);
						session_destroy();
					//	$token_unknown_chat=md5(uniqid(rand(), TRUE));
						//$_SESSION['token_unknown_chat']=$token_unknown_chat;
						header('location:index.php');
				}
				
	}
}
else 
{
	session_destroy();
header('location:index.php');
}

?>