<?php

session_start();
//session_destroy();

$token_unknown_chat=md5(uniqid(rand(), TRUE));
$_SESSION['token_unknown_chat']=$token_unknown_chat;
$token_register=md5(uniqid(rand(), TRUE));
$_SESSION['token_register']=$token_register;
$logged_in=md5(uniqid(rand(), TRUE));
$_SESSION['logged_in']=$logged_in;
?>
<html>
<head>
<link rel="stylesheet" href="css/index.css">
<script src="js/jquery.js"></script>
<script src="js/index.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="css/default2.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/index.css" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body bgcolor="#f4f4ff">

<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h2 class="site"><span class="fa fa-bug"></span><a href="#"><font color="#000">tekxit.com</font></a></h2>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="#" accesskey="1" title="">Login</a></li>
				<li><a href="signup.php" accesskey="2" title="Create account">Sign Up</a></li>
				
			<!--	<li><a href="#" accesskey="4" title="">about us</a></li>
				<li><a href="#" accesskey="5" title="">faq</a></li>-->
				<li><a href="random_chooser.php" accesskey="3" title="Start session chating without login">Chat with unknown</a></li>
			</ul>
		</div>
	</div>
</div>

<div id="wrapper">
<div id="whole" class="container2">
Welcome to the Tekxit dot com
<div style="margin-top:32.5%;">
<hr/ style="width:96%; color:#dee;">
<a href="#"> <font size="2pt">About </a> &nbsp;&nbsp;&nbsp;
<a href="#"> faq </a>&nbsp;&nbsp;&nbsp;
<a href="#"> contact</a>&nbsp;&nbsp;&nbsp;
</font></div>
</div>
<div id="login" class="cointainer2">
<h2 align="center" style="color:#000; font-style:italic; font-size: 21pt; font-weight:bold;font-family: Catull; text-shadow: 1px 1px #aaa;">	Login </h2>
	<?php
								if(isset($_SESSION['error_message']))
								{
								$error_message=$_SESSION['error_message'];
									echo "<h3 class='error_message' style='border-radius:5px; padding-top:5px; padding-bottom:5px;'><font color='blue'  ><u><b>#Error:</b></u></font><font color='#000'>  <b>".$error_message."</b></font></h3>";
									echo "</br>";
									}
								
								?>
					
<form method = "POST" action = "registered/check_login.php">

						<input type = "hidden" size="35" name="logged_in" value="<?php echo $logged_in;?>">
							<span style="color: #111; text-shadow: #bbccff; font-size: 13pt; font-weight:bold; margin-left:3%;">
								<label>Email-id:</label><br></span>
								<input type = "text" size="38" name="email" class="login_input_box">
								<br>
								<br>
								
								<span style="color: #111; text-shadow: #bbccff; font-size: 13pt; font-weight:bold; margin-left:3%;">
								Password:<br></span>
								<input type = "password" name="password" size="38" class="login_input_box">
								<br>
								<br>
								<br>
								<button value = "submit" name = "submit" class="login_form_submit_button" width="30%">Log In</button>
									<br>
								<p class="warn" align="center">If you are not a registered member than <a class="signuplink" href="signup.php"><span style="color:#f00; font-size: 11pt;">Signup</span></a></p>
						
						
						</form>

</div>
</div>
					
</body>
</html>