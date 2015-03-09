<?php
include('config_registered.php');
$both_encrypted_email=$_POST['function'];
$followers_table='follow';
//$function="and";


//$query2="insert into ".$use_table."(hello) values('$both_encrypted_email')";
//$execute2=mysql_query($query2,$con);
	$seprate_your_and_other_encrypted_email=explode("_",$both_encrypted_email);
	$other_encrypted_email=$seprate_your_and_other_encrypted_email[0];
	$your_encrypted_email=$seprate_your_and_other_encrypted_email[1];
	$use_table="".$your_encrypted_email."_".$followers_table."";
	$use_table_2="".$other_encrypted_email."_".$followers_table."";
	$query3="insert into ".$use_table."(followedby,status_notice) values('$other_encrypted_email','unnoticed')";
		$execute3=mysql_query($query3,$con);
		$check_both_following= "SELECT * FROM $use_table_2 WHERE followedby='$your_encrypted_email'";
		$execute_check_both_following=mysql_query($check_both_following,$con);
		$number_of_rows=mysql_num_rows($execute_check_both_following);
		if($number_of_rows==1)
		{
		$query5="insert into ".$use_table."(bothfollwing,status_notice) values('$other_encrypted_email','unnoticed')";
		$execute5=mysql_query($query5,$con);
		$query6="insert into ".$use_table_2."(bothfollwing,status_notice) values('$your_encrypted_email','unnoticed')";
		$execute6=mysql_query($query6,$con);
		}
//$query4="insert into ".$use_table."(hello) values('$your_encrypted_email')";
//$execute4=mysql_query($query4,$con);
?>