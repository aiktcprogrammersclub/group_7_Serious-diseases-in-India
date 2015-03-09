<?php
//header('Content-Type: text/plain');
session_start();
$use_table=$_SESSION['use_table'];
$token=$_SESSION['token'];
$_SESSION['token']=$token;
$_SESSION['use_table']=$use_table;

?>
<html>
<head>
<link href="css/unknown_chat_fpage.css"  rel="stylesheet" type="text/css" media="all" />

<link href="css/default2.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />


<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<script src="js/jquery.js"></script>

<script src="js/unknown_chat_fpage.js"></script>

<script type="text/javascript">

//var objDiv = document.getElementById("search_and_print"); objDiv.scrollTop=objDiv.scrollHeight;
		var auto_refresh = setInterval(
						function ()
						{			//alert("are you sure");
									$("#search_and_print").load("updater.php?q=<?php echo $use_table;
									?>&&p=<?php echo $token;
									?>").fadeIn("slow");
						}, 1000); // refresh every 10 milliseconds to identify the new message in the $use_table chat
						
						var auto_refresh_2 = setTimeout(
						function ()
						{			//alert("are you sure");
									$("#search_and_print").load("updater.php?q=<?php echo $use_table;
									?>&&p=<?php echo $token;
									?>").fadeIn("slow");
						}, 100); // refresh every 10 milliseconds to identify the new message in the $use_table chat
	//THis ONREADY function of the script it is run as soon as the page is loaded 		
//window.onbeforeunload = function () {
//return "Do you really want to close?";

//};	
</script>
<script>
$(document).ready(function() {
$("#register").click( function() {
$.post( $("#form").attr("action"), $("#form :input").serializeArray(), function(info)
{ $("#results").empty(); $("#results").html(info)} );

 });
 $("#form").submit(function(){
return false;
 });

 });
 </script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>



</head>
<body bgcolor="#f4f4ff">
<?php
if($use_table!=NULL && $token!=NULL)
{
?>



<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h2 class="site"><span class="fa fa-bug"></span><a href="#"><font color="#000">HOPE</font></a></h2>
		</div>
		<div id="menu">
			<ul>
				<li >
				<a  title="Back to Login Page" onclick="endchat()">
						HOME
					</a>
				</li>
				
			<!--	<li><a href="#" accesskey="4" title="">about us</a></li>
				<li><a href="#" accesskey="5" title="">faq</a></li>-->
				<li class="current_page_item">
					<a accesskey="3" title="Start session chating without login">
						Instant Query Section 
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!--
					<span class="header_logo_button_background">Tekxit.com
					<a  title="Back to Login Page" onclick="endchat()">
					<button style="margin-left: 42%;" class="login"  >Login</button></a>
					<a  title="Chat with Someone else" onclick="newchat()" >
					<button style="margin-left: 1%; " class="signup">New Chat </button></a>
					<button style="margin-left: 1%; " class="stranger_chat" >Chat With Unknown</button>
					</span>
					<br>
					<br>-->
<!--<body bgcolor="#f4f4ff">
<table  width="100%" height="5%">

<tr>
<td width="3%" bgcolor="#f4f4ff">
		</td>
					<td width="95%"  height="5%"  valign="top" align="left" >

					<span class="header_logo_button_background">Tekxit.com
					<a  title="Back to Login Page" onclick="endchat()">
					<button style="margin-left: 42%;" class="login"  >Login</button></a>
					<a  title="Chat with Someone else" onclick="newchat()" >
					<button style="margin-left: 1%; " class="signup">New Chat </button></a>
					<button style="margin-left: 1%; " class="stranger_chat" >Chat With Unknown</button>
					</span>
		</td>
<td width="3%" bgcolor="#f4f4ff">
</td>
</tr>
</table>
-->


<div id="wrapper">
<div id="search_and_print">
</div>
<!--
<form action="insert_temporary_chat.php" method="POST" enctype='multipart/form-data'>
</br>
	<input type = "file" name="image" style="font-size: 0.8em;  border: 2px solid #d0d0d0; font-weight: bold;border:1px solid #999; color: #111;margin-left:0.5%; width: 89%; height: 4.5%; background-color: #efefef; border-radius: 5px;"  >
<button type="submit"  class="send_image" style="height: 4.5%; width:9%;"> Send Image!</button>
</form>-->
<form action="insert_temporary_chat.php" method="POST" enctype='multipart/form-data'>
</br>
	<input type = "file" name="image"  style="font-size: 0.8em;  border: 2px solid #d0d0d0; font-weight: bold;border:1px solid #999; color: #111;margin-left:0.5%; width: 99%; height: 4.5%; background-color: #efefef; border-radius: 5px;"  >

	</br>
	</br>
<textarea name="message" id="text_id" placeholder="Ask Any Query to our Experts with instant Reply">
</textarea>

<button name="submit"  class="send"> Send!</button>
</form>
<!--<form>
</br>
	<input type = "file" name="image"  style="font-size: 0.8em;  border: 2px solid #d0d0d0; font-weight: bold;border:1px solid #999; color: #111;margin-left:0.5%; width: 99%; height: 4.5%; background-color: #efefef; border-radius: 5px;"  >

	</br>
	</br>
<textarea name="message" id="text_id" placeholder="Type a message or Select an image to send..." >
</textarea>

<button name="submit"  class="send" onclick="submit()"> Send!</button>
</form>
</div>
</form>-->
<?php
}
else 
{
header('location:index.php');
}
?>
</body>
</html>
