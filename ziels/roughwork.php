<?php
session_start();

$token_unknown_chat=md5(uniqid(rand(), TRUE));
$_SESSION['token_unknown_chat']=$token_unknown_chat;
$token_register=md5(uniqid(rand(), TRUE));
$_SESSION['token_register']=$token_register;
?>
<html>
<head>
<link rel="stylesheet" href="css/index.css">
<script src="js/jquery.js"></script>
<script src="js/index.js"></script>
</head>
<body bgcolor="#fff">


					<span class="header_logo_button_background">&nbsp;Tekxit.com
					<button style="margin-left: 46%;" class="login" id="login_form">Login</button>
					<a href="signup.php"><button style="margin-left: 1%; " class="signup" title="Create account">Signup</button></a>
					<a href="random_chooser.php" title="Start session chat without login"><button style="margin-left: 1%; " class="stranger_chat" id="stranger_chat">Chat With Unknown</button></a>
					</span>
					<br>
					<br>
					

</body>
</html>