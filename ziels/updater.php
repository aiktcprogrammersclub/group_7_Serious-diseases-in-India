
<link rel="stylesheet" href="css/updater.css">
<style>
.time{
margin-left:90%;
 color: #aaa; 
 font-size: 8pt;
 font-weight: bold;
 font-family: Catull;
}
</style>
<?php
$use_table=$_GET['q'];
$token=$_GET['p'];
include 'config2.php';
{   //########VERY IMPORTANT LOOP#######
//****************THIS IS THE LOOP OPENED FOR THE ELSE CONDITION IN THE "CONFIG2.PHP" ************************************
	//$online_message='Other end user is <font color="green"><i><u>online now</u>...</i></font>';
	$offline_message='Other end user is <font color="red"><i>offline now</i></font> click on <font color="red"><i>new chat...<font color="red"><i> ';
	$connecting=0;
	$not_online=0;
	$query2="select * from ".$use_table." order by 'date_time'";	
// **query1** is to display the live chat directly into the division it select all the chat from the database and display. according 12loop inside the while after reading each of the row in the table
		$execute2=mysql_query($query2,$con);
		while($row2=mysql_fetch_array($execute2))
	{
		$message=$row2['message'];
		if($message==$offline_message)
		{
			$not_online=1;
		}
	}
			
		$query20="select distinct user_id from $use_table";
		$execute20=mysql_query($query20,$con);
		$count_rows_20=mysql_num_rows($execute20);
		if($count_rows_20==1)
		{
				$connecting=1;
		}
		if($connecting==1)
		{
		echo "<span class='connecting_message'>Connected to the server, <font color='black'>wait for the response...</font></span>";
			echo "</br>";
			echo "</br>";
		
		}
		else
		{
				if($not_online==0)
				{
				echo "<span class='online_message'>Unknown Is <u>Online</u>.</span>";
				echo "</br>";
				echo "</br>";
				}
		}
		$query1="select * from ".$use_table." order by 'date_time'";	
// **query1** is to display the live chat directly into the division it select all the chat from the database and display. according 12loop inside the while after reading each of the row in the table
		$execute1=mysql_query($query1,$con);
while($row1=mysql_fetch_array($execute1))
	{
		$first_user=1;
		$second_user=1;
		$user_name=$row1['user_id'];
		$message=$row1['message'];
		$image=$row1['user_image'];
		$date_time_of_message=$row1['date_time'];
		$split_date_time=strtotime($date_time_of_message);
		$date= date('n.j.Y', $split_date_time); //d.m.y
		$time=date('g:i:s a ', $split_date_time); //hh:ss 12hours formatting
		$offline=0;
	
		/*if($message==$online_message && $user_name==$token )
		{
			$offline=1;
		}
		if($message==$online_message && $user_name!=$token)
		{
			
			echo "<span class='online_message'>End User Is <u>Online</u> type a message to send</span>";
			echo "</br>";
			//echo "<span style='margin-left:90%; color: #aaa; font-size: 8pt;font-weight: bold; font-family: Catull;'> ".$time."</span>";
			$offline=1;
			
		}*/
		if($message==$offline_message)
		{
			echo "</br>";
			echo "</br>";
			echo "<span class='offline_message'> Expert Is <u>Offline Now</u></u></span>";
			//echo "<span style='margin-left:85.5%; color: #aaa; font-size: 8pt;font-weight: bold; font-family: Catull;'> last seen :".$time."</span>";
			$offline=1;
			
		}
			
		if(($message!=NULL || $image!=NULL) && $offline==0)
		{
			if($message!=NULL && $image==NULL)
				{
			
					if($user_name==$token  && $first_user==1)
						{		
								
						
									echo "<span style='margin-left:2.2%; color: red; font-size: 15pt; font-weight: bold; font-family: Catull; font-style:italic'>You</span>
								<span style='margin-left: 5%;'>:</span>
									<span style='margin-left:2%; color: #f22; font-size: 13pt;text-shadow: 1px 1px #999; font-weight: bold; font-family: Catull;'> ".$message."</span>";
									
									echo "</br>";
									echo "<span class='time'> ".$time."</span>";
									
									echo "</br>";
									//echo "</br>";
									$first_user=0;
									$last_message=$message;
						}
							if($user_name==$token  && $first_user==0 && $last_message!=$message)
						{
									echo "
								<span style='margin-left: 10.2%;'>:</span>
									<span style='margin-left:2%; color: #f22; font-size: 13pt;text-shadow: 1px 1px #999; font-weight: bold; font-family: Catull;'> ".$message."</span>";
									echo "<span style='margin-left:90%; color: #aaa; font-size: 8pt;font-weight: bold; font-family: Catull;'> ".$time."</span>";
								//	echo "</br>";
										//echo "<span style='margin-left:0%; color: #999; font-size: 8pt; font-weight: bold; font-family: Catull;'> ".$date_time_of_message."</span>";
									
								//	echo "</br>";
									echo "</br>";
									$first_user=0;
						}
						if($user_name!=$token  && $second_user==1)
						{
									
									echo "<span style='margin-left:2%; color: #00f; font-size: 14pt; font-weight: bold; font-family: Catull;font-style:italic'>Expert </span>
									<span style='margin-left: 1.5%;'>:</span>
										<span style='margin-left:2%; color: #22f;text-shadow: 1px 1px #999; font-size: 13pt; font-weight: bold; font-family: Catull;'> ".$message."</span>";
										echo "</br>";
										echo "<span class='time'> ".$time."</span>";
									echo "</br>";
									//echo "</br>";
									$second_user=0;
									$last_message=$message;
						}
								if($user_name!=$token  && $second_user==0 && $last_message!=$message)
						{
										echo "
									<span style='margin-left: 10.2%;'>:</span>
										<span style='margin-left:2%;  color: #00f; font-size: 13pt;text-shadow: 1px 1px #999; font-weight: bold; font-family: Catull;'> ".$message."</span>";
										echo "<span class='time'> ".$time."</span>";
									//	echo "</br>";
											//echo "<span style='margin-left:0%; color: #999; font-size: 8pt; font-weight: bold; font-family: Catull;'> ".$date_time_of_message."</span>";
										
									//	echo "</br>";
										echo "</br>";
											$second_user=0;
						}
				}
				if($message==NULL && $image!=NULL)
				{
							if($user_name==$token  && $first_user==1)
						{		
								//	echo "</br>";
									//echo "</br>";
									echo "<span style='margin-left:2.2%; color: red; font-size: 15pt; font-weight: bold; font-family: Catull; font-style:italic'>You</span>
								<span style='margin-left: 5%;'>:</span>
								<span style='margin-left:2%; color: #f22; font-size: 13pt;text-shadow: 1px 1px #999; font-weight: bold; font-family: Catull;'> ".$message."</span>";
									echo "</br>";
								echo "	<img class='image_while_chat' src='$image'>
									</span>";
									
									//echo "</br>";
									echo "</br>";
										echo "<span class='time'> ".$time."</span>";
									
									echo "</br>";
									//echo "</br>";
									$first_user=0;
									$last_message=$message;
						}
							if($user_name==$token  && $first_user==0 && $last_message!=$message)
						{
								echo "</br>";
									echo "
								<span style='margin-left: 10.2%;'>:</span>
								<span style='margin-left:2%; color: #f22; font-size: 13pt;text-shadow: 1px 1px #999; font-weight: bold; font-family: Catull;'> ".$message."</span>";
									echo "</br>";
								echo "	<img class='image_while_chat' src='$image'>";
										echo "<span style='margin-left:90%; color: #aaa; font-size: 8pt;font-weight: bold; font-family: Catull;'> ".$time."</span>";
								//	echo "</br>";
										//echo "<span style='margin-left:0%; color: #999; font-size: 8pt; font-weight: bold; font-family: Catull;'> ".$date_time_of_message."</span>";
									
								//	echo "</br>";
									echo "</br>";
									$first_user=0;
						}
						if($user_name!=$token  && $second_user==1)
						{
								//echo "</br>";
									//echo "</br>";
									echo "<span style='margin-left:2%; color: #00f; font-size: 14pt; font-weight: bold; font-family: Catull;font-style:italic'>Expert </span>
									<span style='margin-left: 1.5%;'>:</span>
									<span style='margin-left:2%; color: #22f; font-size: 13pt;text-shadow: 1px 1px #999; font-weight: bold; font-family: Catull;'> ".$message."</span>";
									echo "</br>";
								echo "	<img class='image_while_chat' src='$image'>";
								echo "</br>";
								echo "<span class='time'> ".$time."</span>";
										//echo "</br>";
								
									//echo "</br>";
									echo "</br>";
									$second_user=0;
									$last_message=$message;
						}
								if($user_name!=$token  && $second_user==0 && $last_message!=$message)
						{
										echo "</br>";
										echo "
									<span style='margin-left: 10.2%;'>:</span>
										<span style='margin-left:2%; color: #22f; font-size: 13pt;text-shadow: 1px 1px #999; font-weight: bold; font-family: Catull;'> ".$message."</span>";
									echo "</br>";
								echo "	<img class='image_while_chat' src='$image'>";
										echo "<span style='margin-left:90%; color: #aaa; font-size: 8pt;font-weight: bold; font-family: Catull;'> ".$time."</span>";
									//	echo "</br>";
											//echo "<span style='margin-left:0%; color: #999; font-size: 8pt; font-weight: bold; font-family: Catull;'> ".$date_time_of_message."</span>";
										
									//	echo "</br>";
										echo "</br>";
											$second_user=0;
						}
				}
			if($message!=NULL && $image!=NULL)
				{
			
					if($user_name==$token  && $first_user==1)
						{		
									
									echo "<span style='margin-left:2.2%; color: red; font-size: 15pt; font-weight: bold; font-family: Catull; font-style:italic'>You</span>
								<span style='margin-left: 5%;'>:</span>
								<span style='margin-left:2%; color: #f22; font-size: 13pt;text-shadow: 1px 1px #999; font-weight: bold; font-family: Catull;'> ".$message."</span>";
									echo "</br>";
								echo "	<img class='image_while_chat' src='$image'>
									</span>";
									
									//echo "</br>";
									echo "</br>";
										echo "<span class='time'> ".$time."</span>";
									
									echo "</br>";
									//echo "</br>";
									$first_user=0;
									$last_message=$message;
						}
							if($user_name==$token  && $first_user==0 && $last_message!=$message)
						{
								echo "</br>";
									echo "
								<span style='margin-left: 10.2%;'>:</span>
								<span style='margin-left:2%; color: #f22; font-size: 13pt;text-shadow: 1px 1px #999; font-weight: bold; font-family: Catull;'> ".$message."</span>";
									echo "</br>";
								echo "	<img class='image_while_chat' src='$image'>";
										echo "<span style='margin-left:90%; color: #aaa; font-size: 8pt;font-weight: bold; font-family: Catull;'> ".$time."</span>";
								//	echo "</br>";
										//echo "<span style='margin-left:0%; color: #999; font-size: 8pt; font-weight: bold; font-family: Catull;'> ".$date_time_of_message."</span>";
									
								//	echo "</br>";
									echo "</br>";
									$first_user=0;
						}
						if($user_name!=$token  && $second_user==1)
						{
								
									echo "<span style='margin-left:2%; color: #00f; font-size: 14pt; font-weight: bold; font-family: Catull;font-style:italic'>Expert </span>
									<span style='margin-left: 1.5%;'>:</span>
									<span style='margin-left:2%; color: #22f; font-size: 13pt;text-shadow: 1px 1px #999; font-weight: bold; font-family: Catull;'> ".$message."</span>";
									echo "</br>";
								echo "	<img class='image_while_chat' src='$image'>";
										//echo "</br>";
										echo "</br>";
									echo "<span class='time'> ".$time."</span>";
									echo "</br>";
									//echo "</br>";
									$second_user=0;
									$last_message=$message;
						}
								if($user_name!=$token  && $second_user==0 && $last_message!=$message)
						{
										echo "</br>";
										echo "
									<span style='margin-left: 10.2%;'>:</span>
										<span style='margin-left:2%; color: #22f; font-size: 13pt;text-shadow: 1px 1px #999; font-weight: bold; font-family: Catull;'> ".$message."</span>";
									echo "</br>";
								echo "	<img class='image_while_chat' src='$image'>";
										echo "<span style='margin-left:90%; color: #aaa; font-size: 8pt;font-weight: bold; font-family: Catull;'> ".$time."</span>";
									//	echo "</br>";
											//echo "<span style='margin-left:0%; color: #999; font-size: 8pt; font-weight: bold; font-family: Catull;'> ".$date_time_of_message."</span>";
										
									//	echo "</br>";
										echo "</br>";
											$second_user=0;
						}
				}
		}
	}
}//CLOSING THE ELSE LOOP OF THE "config2.php file"
?>
