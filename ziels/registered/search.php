
<?php
$searched=$_POST['search'];

session_start();
include('config_registered.php');
{

	if($_SESSION['your_email']!=NULL && $_SESSION['your_encrypted_email']!=NULL && $searched!=NULL)
	{
		$your_email=$_SESSION['your_email'];
		$your_encrypted_email=$_SESSION['your_encrypted_email'];
		$_SESSION['your_email']=$your_email;
		$_SESSION['your_encrypted_email']=$your_encrypted_email;
	
		?>
		<html>
<head>


<script src="../js/jquery.js"></script>
<script src="../js/singup.js"></script>
<script>
$(function()
{
$(".follow").click(function(){
var element = $(this);
var I = element.attr("id");
var info =  I;
$("#loading").html('<img src="loader.gif" >');
jQuery.ajax({
type: "POST",
url: "remove.php",
data:{'function': info},
success: function(){
alert(info);
$('#follow'+I).fadeOut(200).hide();
$('#remove'+I).fadeIn(200).show();
}
});
return false;
});
});
</script>
<script type="text/javascript" >
$(function()
{
$(".remove").click(function(){
var element = $(this);
var I = element.attr("id");
var info = I;
$("#loading").html('<img src="a.jpg" >');
jQuery.ajax({
type: "POST",
url: "remove.php",
data:{'function': info},
success: function(){
confirm(info);
$('#remove'+I).fadeOut(200).hide();
$('#follow'+I).fadeIn(200).show();
}
});
return false;
});
});
</script>
<link rel="stylesheet" href="../css/home.css">
   <link rel="stylesheet" href="menubar.css">
   <link rel="stylesheet" href="../css/updater.css">

<link href="../css/default2.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />


<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->


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
				<input type="text" name="search"class="input_search" placeholder="search using username ..."/><button class="search" type="submit">search</button>
					
				</li>
			</ul>
		</div>
	</div>
</div>
						</form>
				
					<div id='cssmenu'>
<ul>
   <li><a href='home.php'><span>Home</span></a></li>
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
      <div id="searchwhole">
	  <div style="text-align:left;"> 
					<?php
					echo "<form method='post' method='search.php'>";
					echo "<div style='background-color: #f9f9ff; width: 100%; height: 70%; padding-top:1%; margin-top:-1.5%; padding-top:2%;'>";
					echo '<input type="text" name="search" value='.$searched.' placeholder="search using username ..." style="font-weight:bold;font-size: 1.1em; margin-left:15%; width: 60%; height: 40%; "/><button class="search_search2"  type="submit">search</button>';
					echo "</br>";
					echo "</br>";
					echo '<span style="color:#000; margin-left: 15%; font-size: 1.2em; color:#075072;">Showing searched results for : <font color="#000"><i> '.$searched.'</i></font>';
					echo "</span>";
					echo '</div>';
					echo '</form>';
					echo "</div>";
					echo "</div>";
				
				//	echo "</br>";
	//echo "</br>";

					//echo "</br>";
	//echo "</br>";
					$users_table='users';
					//$query_details="select * from ".$users_table." where email='$your_email'";	
					$query_details = "SELECT * FROM ".$users_table." WHERE username like \"%$searched%\"";
			// **query1** is to display the live chat directly into the division it select all the chat from the database and display. according 12loop inside the while after reading each of the row in the table
				$execute_query_details=mysql_query($query_details,$con);
					echo "<div id='searchedresult'>";
					$searched_results_count=mysql_num_rows($execute_query_details);
			while($row_execute_query_details=mysql_fetch_array($execute_query_details))
	{
		$display_image=$row_execute_query_details['d_image'];
		$username=$row_execute_query_details['username'];
		$username=ucwords(strtolower($username));
		$displayname=$row_execute_query_details['d_name'];
		$displayname=ucwords(strtolower($displayname));
		$email=$row_execute_query_details['email'];
		$country=$row_execute_query_details['country'];
		$country=ucwords(strtolower($country));
		$city=$row_execute_query_details['city'];
		$city=ucwords(strtolower($city));
		
		if($email!=$your_email)
		{
		
		$encrypted_email=$row_execute_query_details['encrypted_email'];
		echo "<img style='width:15%; height:20%; margin-left:1.5%;' src='$display_image' align='left'>";
	
	
echo '<span style="color:#075072; margin-left:1%; font-size: 1.3em;"><i>'.$username.'</i></span>';
echo '<br>';
echo '<span style="color:#999; margin-left:1%; font-size: 1em;">Location :<i>'.$country.', '.$city.'</i></span>';

echo '<br>';

		echo "<form method='post' action='otherprofile.php'>";
		echo "<input type='hidden' value=".$encrypted_email." name='otherencryptedemail'>";
		echo "<input type='hidden' value=".$email." name='otheremail'>";
		echo "<button type='submit' class='viewprofile'> View Profile</button>";
		echo "</form>";?>
	<!--//	echo "<form method='post' action='follow.php'>";
	//	echo "<input type='hidden' value=".$encrypted_email." name='otherencryptedemail'>";
	echo '<div id="follow'.$encrypted_email.'">';
	//	echo "<input type='hidden' value=".$email." name='otheremail'>";
		echo "<button class='follow' id=".$encrypted_email."> Follow</button>";
		echo '</div>';
		//echo "</form>";
		-->
				<?php

				$encrypted_both_email="".$encrypted_email."_".$your_encrypted_email."";
				?>
			
			
				<div id="follow<?php echo $encrypted_both_email;?>">
				<a href="#" class="follow" id="<?php echo $encrypted_both_email;?>">
				<span class="remove_b"> Follow </span></a>
				</div>
				<div id="remove<?php echo $encrypted_both_email;?>" style="display:none">
				<a href="#" class="remove" id="<?php echo $encrypted_both_email;?>">
				<span class="remove_b"> Unfollow </span></a> <font color="#aaa"> &nbsp; You,are following </font><font color="#075072"><?php echo $username;?></font>
				</div>

		
		<?php
		echo "</br>";
		echo "<hr style='margin-left:1%; width:96%;color: #eee;'>";
			echo "</br>";
	
	
	}

	

	}
	if($searched_results_count==0)
	{
	echo "<p align='center' style='color:#111; font-style:italic;text-align:center; margin-top:8%;'> None, result were found of your searched</p>";
	}
		echo "</div>";
	?>
				
				
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