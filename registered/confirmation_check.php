<?php
/*
*This is the simple registering page where data of the new user is been entered into the database
*With all kind of the security that should be provided to the user detail 
*almost all the data  of user is been filtered to avoid #xsf, #xss, #pssword fishing, #session_hijacking----------
*5if loops are been user
* each if loops is having certain security chech describe after
*/
session_start();
if($_SESSION['token_confirmation']!=NULL)
{
$encrypted_email=$_SESSION['encrypted_email'];
$_SESSION['encrypted_email']=$encrypted_email;
	include('config_registered.php');
	{
	?>
	<html>
<head>
<link rel="stylesheet" href="../css/confirmation_check.css">
<script src="js/jquery.js"></script>
<script src="../js/confirmation_check.js"></script>
</head>
<body bgcolor="#f4f4ff">


					<span class="header_logo_button_background">&nbsp;Tekxit.com
					<a  title="Back to Login Page" onclick="endconfirmation()">
					<button style="margin-left: 46%;" class="login" id="login_form">Login</button>
					</a>
					<button style="margin-left: 1%; " class="signup_clicked" title="Confirmation of the users account" >Confirming</button>
					<button style="margin-left: 1%; " class="stranger_chat" id="stranger_chat" onclick="confirm_warning()">Confirmed</button>
					</span>
					</br>
					
					
					<div  class="get_loginform">
								<div style="text-align:center;color:#f00; font-style:italic; font-size: 17pt; font-weight:bold;font-family: Catull; text-shadow: 1px 1px #666;">Congratulations!!!.. <div>
							
								<div  style="text-align:center; color:#000;  font-size: 14pt; font-family: Catull; text-shadow: 1px 1px #eee;">
								You have been successfully registered, please enter the correct confirmation code that has been send to your<font color="blue"> email id</font>.</div>
<form method = "get" action = "confirmed.php">
<br>
								<div align="left" style="text-align:left;color:black; text-align:left; font-size: 14pt;">Enter Confirmation Code:</div>
								
								<input type = "text"  name="confirmation" style="width: 99%;margin-left:-1%; font-size:14pt; background-color:#fff; color: #000; border: 2px solid #a0a0a0;">
								<br>
								<br>
							
							
								
								<button align="center" value = "submit" name = "submit" class="login_form_submit_button" width="60%">Confirm Registration</button>
								
						
						
						</form>

					</div>
					</body>
					<html>
	
	
	
	
	
	<?php
		}
	}
	else
	{
			header('location:../index.php');
			}
	?>