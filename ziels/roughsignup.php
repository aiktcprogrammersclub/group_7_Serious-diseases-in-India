<?php
session_start();

$token_unknown_chat=md5(uniqid(rand(), TRUE));
$_SESSION['token_unknown_chat']=$token_unknown_chat;
$token_register=md5(uniqid(rand(), TRUE));
$_SESSION['token_register']=$token_register;
?>
<html>
<head>
</head>
<body bgcolor="#f4f4ff">

<form method = "POST" action = "registered/register.php" enctype='multipart/form-data'>
							<input type = "hidden" size="35" name="token_register" value="<?php echo $token_register;?>">
							<span class="input_box_name_signup" >
								<label>Name&nbsp;</label></span>
								<br>


								<input type = "text" size="35" name="name" class="input_box_create_acc">
								<br>
								<br>
								<span class="input_box_name_signup" >
								<label>Display name&nbsp;</label></span>
								<br>
								<input type = "text" size="35" name="dname" class="input_box_create_acc">
								<br>
								<br>
								<span class="input_box_name_signup" >
							 Email-id&nbsp;</span>
							 <br>
								<input type = "text" name="email" size="35" class="input_box_create_acc">
								<br>
								<br>
								<span class="input_box_name_signup" >
							Password&nbsp;</span>
							<br>
								<input type = "password" name="password" size="35"class="input_box_create_acc">
								<br>
								<br>
								<span class="input_box_name_signup" >
							&nbsp;Retype-password</span>
							<br>
								<input type = "password" name="rpassword" size="35" class="input_box_create_acc">
								<br>
								<br>
								<span class="input_box_name_signup" >
							&nbsp;Country</span>
							<br>
								<input type = "text" name="country" size="35" class="input_box_create_acc">
								<br>
								<br>
								<span class="input_box_name_signup" >
							&nbsp;City</span>
							<br>
								<input type = "text" name="city" size="35" class="input_box_create_acc">
								<br>
								<br>
								<span class="input_box_name_signup" >
							Date of birth&nbsp;</span>
						
									<select name="Date"> 
<option value="" selected>Date</option>

<option value="1" > 1</option>

<option value="2"> 2</option>

<option value="3"> 3</option>

<option value="4"> 4</option>

<option value="5"> 5</option>

<option value="6"> 6</option>

<option value="7"> 7</option>

<option value="8"> 8</option>

<option value="9"> 9</option>

<option value="10"> 10</option>

<option value="11"> 11</option>

<option value="12"> 12</option>

<option value="13"> 13</option>

<option value="14"> 14</option>

<option value="15"> 15</option>

<option value="16"> 16</option>

<option value="17"> 17</option>

<option value="18"> 18</option>

<option value="19"> 19</option>

<option value="20"> 20</option>

<option value="21"> 21</option>

<option value="22"> 22</option>

<option value="23"> 23</option>

<option value="24"> 24</option>

<option value="25"> 25</option>

<option value="26"> 26</option>

<option value="27"> 27</option>

<option value="28"> 28</option>

<option value="29"> 29</option>

<option value="30"> 30</option>

<option value="31"> 31</option>

</select>

<select name="Month">
<option value="" selected>Month</option>

<option value="Jan" > Jan</option>

<option value="Feb"> Feb</option>

<option value="Mar"> Mar</option>

<option value="Apr"> Apr</option>

<option value="May"> May</option>

<option value="June"> June</option>

<option value="July"> July</option>

<option value="Aug"> Aug</option>

<option value="Sept"> Sept</option>

<option value="Oct"> Oct</option>

<option value="Nov"> Nov</option>

<option value="Dec"> Dec</option>

</select>


<select name="Year">
<option value="" selected>Year</option>

<option value="2012" > 2012
</option>
<option value="2011"> 2011</option>

<option value="2010"> 2010</option>

<option value="2009"> 2009</option>

<option value="2008"> 2008</option>

<option value="2007"> 2007</option>

<option value="2006"> 2006</option>

<option value="2005"> 2005</option>

<option value="2004"> 2004</option>

<option value="2003"> 2003</option>

<option value="2002"> 2002</option>

<option value="2001"> 2001</option>
<option value="2000"> 2000</option>

<option value="1999"> 1999</option>

<option value="1998"> 1998</option>

<option value="1997"> 1997</option>

<option value="1996"> 1996</option>
<option value="1995"> 1995</option>
<option value="1994"> 1994</option>

<option value="1993"> 1993</option>

<option value="1992"> 1992</option>

<option value="1991"> 1991</option>

<option value="1990"> 1990</option>

<option value="1989"> 1989</option>

<option value="1988"> 1988</option>

<option value="1987"> 1987</option>

<option value="1986"> 1986</option>

<option value="1985"> 1985</option>

<option value="1984"> 1984</option>

<option value="1983"> 1983</option>

<option value="1982"> 1982</option>

<option value="1981"> 1981</option>

<option value="1980"> 1980</option>




</select>
								<br>
								<br>
								<span class="input_box_name_signup" >
								Display Picture&nbsp;</span>
								<br>
								<input type = "file" name="image" size="35" class="input_box_create_acc">
							
								
								<br>
								<br>
								<span class="input_box_name_signup" >
								Gender&nbsp;</span>
								<br>
								<input type = "radio" name="gender" value="male"  class="input_box_create_acc"> M&nbsp;&nbsp;&nbsp;
								<input type = "radio" name="gender"  value="female" class="input_box_create_acc"> F
								<br>
								<br>
								<span class="input_box_name_signup" >
								Something About You&nbsp;</span>
								<br>
							<textarea name="about_user" rows="50" cols="120" placeholder="Type a message or Select an image to send..."  style=" font-family: Catull; font-style:italic; background-color: #efefef; border-radius: 5px;font-size: 1em; font-weight: bold; color: #111;margin-left:0.5%; width: 89%; height: 12%;">
</textarea>
								
								
								<br>
								<br>
								<br>
								<button value = "submit" name = "submit" class="create_account_button" style="height: 3.5%; width:5%;">Get</button>
								
						
						
						</form>
						</body>
						</html>