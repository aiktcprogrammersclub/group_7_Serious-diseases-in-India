<?php
/*
*This is the simple registering page where data of the new user is been entered into the database
*With all kind of the security that should be provided to the user detail 
*almost all the data  of user is been filtered to avoid #xsf, #xss, #pssword fishing, #session_hijacking----------
*5if loops are been user
* each if loops is having certain security chech describe after
*/
session_start();
if($_SESSION['encrypted_email']!=NULL)
{
$my_encrypted_email=$_SESSION['encrypted_email'];
$confirming_code=$_POST['confirmation'];

	include('config_registered.php');
	{
	$query1="select * from users where 'email'=".$my_encrypted_email."";
		// **query1** is to display the live chat directly into the division it select all the chat from the database and display. according 12loop inside the while after reading each of the row in the table
		$execute1=mysql_query($query1,$con);
		while($row1=mysql_fetch_array($execute1))
			{
					$confirmation_code=$row1['confirmation_code'];
			}
			if($confirmation_code==$confirming_code)
			{
				$update_query_for_activating_account="UPDATE users SET active='active' where email=".$my_encrypted_email."";
				$execute_update_query_for_activating_account=mysql_query($update_query_for_activating_account,$con);
				}
		}
]
			
			
	?>
	