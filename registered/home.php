<?php
session_start();
include('config_registered.php');
{

	if($_SESSION['your_email']!=NULL && $_SESSION['your_encrypted_email']!=NULL)
	{
		$your_email=$_SESSION['your_email'];
		$your_encrypted_email=$_SESSION['your_encrypted_email'];
		$_SESSION['your_email']=$your_email;
		$_SESSION['your_encrypted_email']=$your_encrypted_email;
		?>
		<html>
<head>
<link rel="stylesheet" href="../css/home.css">
   <link rel="stylesheet" href="menubar.css">
   <link rel="stylesheet" href="../css/updater.css">

<link href="../css/default2.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />


<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<script src="../js/jquery.js"></script>
<script src="../js/singup.js"></script>

</head>
<body bgcolor="#f4f4ff">
<div class='header'>
						<form type="hidden" action="search.php" method="POST">
					
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h2 class="homesite"><span class="fa fa-bug"></span><a href="#"><font color="#000">tekxit.com</font></a></h2>
		</div>
		<div id="menu">
			<ul>
				<li style="">
				<input type="text" name="search" class="input_search" placeholder="search using username ..."/><button class="search" type="submit">search</button>
					
				</li>
			</ul>
		</div>
	</div>
</div>
						</form>
				
					<div id='cssmenu'>
<ul>
   <li class='active'><a href='#'><span>Home</span></a></li>
   <li ><a href='#'><span>Anonymous</span></a></li>
   <li><a href='#'><span>Profile</span></a></li>
   <li><a href='#'><span>Search Unknown</span></a></li>
   <li><a href='#'><span>Previously Met</span></a></li>
   <li><a href='#'><span>followers</span></a></li>
   <li><a href='#'><span>message</span></a></li>
   <li><a href='#'><span>faq</span></a></li>
   <li class='last'><a href='logout.php'><span class="logout">logout</span></a></li>
</ul>
</div>
</div>
					
													
<div id="homewrapper">
      <div id="homewhole" class="container2">
					<?php
					$users_table='users';
					$query_details="select * from ".$users_table." where email='$your_email'";	
			// **query1** is to display the live chat directly into the division it select all the chat from the database and display. according 12loop inside the while after reading each of the row in the table
				$execute_query_details=mysql_query($query_details,$con);
			while($row_execute_query_details=mysql_fetch_array($execute_query_details))
	{
		$display_image=$row_execute_query_details['d_image'];
		$username=$row_execute_query_details['username'];
		$displayname=$row_execute_query_details['d_name'];
	//	$username=$row_execute_query_details['username'];
	}
	
					?>
					<div style="text-align:left;"> 
					<?php
				
				echo "<a href='#'><div class='tag_above_dp'> Change Display Picture</div></a>";
		echo "</br>";
						echo "<img class='image_dispaly_picture' src='$display_image' align='left'>";
						//	echo "<hr style='width: 30%; margin-left:1%; margin-top: 1%; '>";
						$username=ucwords(strtolower($username));
						$displayname=ucwords(strtolower($displayname));
						
						echo '<span style="color:#075072; margin-left:1%; font-size: 2.3em;"><i>'.$username.'</i></span>';
						echo "</br>";
						echo "<span style='color:#555; margin-left:1.2%; font-size: 1em;'>Display name : <i>".$displayname."</i>";
						echo "</span>";
					echo "<form method='post' action='sharing.php'>";
					
						echo "</br>";
						echo "<span style='color:#075072; margin-left:1.2%; font-size: 1em; font-weight:bold;'> <i>Share Something ? </i>";
				
						echo "</br>";
						
						echo '<textarea class="shared" name="shared" placeholder="Share anything with everyone..." ></textarea>';
						echo "</span>";
						echo "</br>";
						echo "</br>";
						echo "<span style='color:#000; margin-left:1.2%; font-size: 0.9em; font-weight:bold;'><font color='#075072'>Share as  :</font>";
						echo "<input type='radio' name='typeshare' value='you'  style='color:#000; margin-left:5%;' checked> You";
						echo "<input type='radio' name='typeshare' value='incognito'  style='color:#000; margin-left:5%;' selected> Incognito";
						echo "</span>";
							echo "</br>";
							echo "</br>";
							
						echo "<span style='color:#222; margin-left:1.2%; font-size: 0.70em; font-weight:bold;'><font color='#c00'>Warning :</font> Sharing as the Incognito will hide your identity from all your followers, and instead of your name <font color='#075072'>'Anonymous'</font> will be displayed.";
						echo "</span>";
						echo "</br>";
						
						echo '<button class="share_it" type="submit">Share it! </button>';
						
					?>
					</div>
				</div>
		</div>
	</body>
</html>	
<?php

	}
	else
		{
			header('location:../index.php');
		}
}	
	?>