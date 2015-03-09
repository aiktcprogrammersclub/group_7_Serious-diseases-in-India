
<?php

session_start();
include 'config.php';
$token_unknown_chat=md5(uniqid(rand(), TRUE));
$_SESSION['token_unknown_chat']=$token_unknown_chat;
$token_register=md5(uniqid(rand(), TRUE));
$_SESSION['token_register']=$token_register;
$logged_in=md5(uniqid(rand(), TRUE));
$_SESSION['logged_in']=$logged_in;
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>HOPE</title>
<link rel="stylesheet" type="text/css" href="assets/styles/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/styles/orbit-1.2.3.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/styles/jquery.fancybox-1.3.4.css" media="screen" />
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />

	<!--Goto TOP-->	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>	
	<script>
				$(document).ready(function() {
						
						$(window).scroll(function() {
							if ($(this).scrollTop() > 200) {
								$('.go').fadeIn(200);
							} else {
								$('.go').fadeOut(200);
							}
						});
						
						
						$('.go').click(function(event) {
							event.preventDefault();
							
							$('html, body').animate({scrollTop: 0}, 300);
						})
					});

	</script>
		<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->	



<script src="jquery.js"></script>
<script>
  
            function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
            
            
     	
	
	
	
$(document).ready(function(){

//$(get_loginform).hide();
$(get_signupform).hide();
$(hivpage).hide();
$(malariapage).hide();
$(cancerpage).hide();
$(heartpage).hide();

	
});


$(document).ready(function(){
		$("#login_form").click(function(){
		$("#get_signupform").fadeOut();
		
		$("#get_loginform").fadeIn(1000);
	
});
});

$(document).ready(function(){
		$("#hiv").click(function(){
		$("#cancerpage").fadeOut();
		$("#malariapage").fadeOut();
		$("#swinepage").fadeOut();
		$("#heartpage").fadeOut();
		$("#hivpage").fadeIn(1000);
		$("#hiv" ).removeClass("normal");
		$("#hiv" ).addClass("active");
		
		$("#malaria" ).removeClass("active");
		$("#malaria" ).addClass("normal");
		
		$("#swine" ).removeClass("active");
		$("#swine" ).addClass("normal");
		
		$("#cancer" ).removeClass("active");
		$("#cancer" ).addClass("normal");
		
		$("#heart" ).removeClass("active");
		$("#heart" ).addClass("normal");

	
});
});
$(document).ready(function(){
		$("#cancer").click(function(){
		$("#hivpage").fadeOut();
		$("#malariapage").fadeOut();
		$("#swinepage").fadeOut();
		$("#heartpage").fadeOut();
	
		$("#cancerpage").fadeIn(1000);
		$("#cancer" ).removeClass("normal");
		$("#cancer" ).addClass("active");
		
		$("#malaria" ).removeClass("active");
		$("#malaria" ).addClass("normal");
		
		$("#swine" ).removeClass("active");
		$("#swine" ).addClass("normal");
		
		$("#hiv" ).removeClass("active");
		$("#hiv" ).addClass("normal");
		
		$("#heart" ).removeClass("active");
		$("#heart" ).addClass("normal");

	
});
});
$(document).ready(function(){
		$("#swine").click(function(){
		$("#hivpage").fadeOut();
		$("#cancerpage").fadeOut();
		$("#malariapage").fadeOut();
		$("#heartpage").fadeOut();
	
		$("#swinepage").fadeIn(1000);
		
		$("#swine" ).removeClass("normal");
		$("#swine" ).addClass("active");
		
		$("#malaria" ).removeClass("active");
		$("#malaria" ).addClass("normal");
		
		$("#cancer" ).removeClass("active");
		$("#cancer" ).addClass("normal");
		
		$("#hiv" ).removeClass("active");
		$("#hiv" ).addClass("normal");
		
		$("#heart" ).removeClass("active");
		$("#heart" ).addClass("normal");


	
});
});
$(document).ready(function(){
		$("#malaria").click(function(){
		$("#hivpage").fadeOut();
		$("#cancerpage").fadeOut();
		$("#swinepage").fadeOut();
		$("#heartpage").fadeOut();
	
		$("#malariapage").fadeIn(1000);
			
		$("#malaria" ).removeClass("normal");
		$("#malaria" ).addClass("active");
		
		$("#swine" ).removeClass("active");
		$("#swine" ).addClass("normal");
		
		$("#cancer" ).removeClass("active");
		$("#cancer" ).addClass("normal");
		
		$("#hiv" ).removeClass("active");
		$("#hiv" ).addClass("normal");
		
		$("#heart" ).removeClass("active");
		$("#heart" ).addClass("normal");

});
});

$(document).ready(function(){
		$("#heart").click(function(){
		$("#hivpage").fadeOut();
		$("#cancerpage").fadeOut();
		$("#swinepage").fadeOut();
		$("#malariapage").fadeOut();
	
		$("#heartpage").fadeIn(1000);
		$("#heart" ).removeClass("normal");
		$("#heart" ).addClass("active");
		
		$("#swine" ).removeClass("active");
		$("#swine" ).addClass("normal");
		
		$("#cancer" ).removeClass("active");
		$("#cancer" ).addClass("normal");
		
		$("#hiv" ).removeClass("active");
		$("#hiv" ).addClass("normal");
		
		$("#malaria" ).removeClass("active");
		$("#malaria" ).addClass("normal");
	
});
});

$(document).ready(function(){
		$("#signupform").click(function(){
		$("#get_loginform").fadeOut(1000);
		
		$("#get_signupform").fadeIn(1000);
	
});
});
$("#form").validate({
           rules: {
               password: { 
                 required: true,
                    minlength: 6,
                    maxlength: 10,

               } , 

                   cfmPassword: { 
                    equalTo: "#password",
                     minlength: 6,
                     maxlength: 10
               }


           },
     messages:{
         password: { 
                 required:"the password is required"

               }
     }

});


	</script>
</head>
<body width="100%">
<div class="wrapper">
  <header>
    <h1>Hope</h1>
  </header>
  <div class="nav-container">
    <nav>
      <ul>
        <li><a href="#home" class="selected">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#diseases">Diseases</a></li>
        <li><a href="#donate">Donate</a></li>
        <li><a href="#register">Members</a></li>
         <li><a href="ziels/random_chooser.php" accesskey="3" title="Start session chating without login">Any Query?</a></li>
        
      </ul>
      <div class="nav-left"></div>
      <div class="nav-right"></div>
      <div class="nav-above"></div>
    </nav>
  </div>
  
  <section id="home">
  <?php
 if(isset($_SESSION['welcome_note']))
 {
 ?>
   <h4 align="center" color="#f00"><font color="#300"><?php echo $_SESSION['welcome_note'];?></font></h4>
  <?php 
  }
   ?>
  <hr>
    <div class="row">
      <div class="three columns">
        
 <h4>Never Give Up!</h4>
        <img style="margin-left: -10px;"src="assets/images/logo.png" width="200">
			<p style="margin-left: -20px; font-size: 20px; font-weight: bolder;color:black;" >Let your hopes, not your hurts, shape your future.</p>
        <br><p style="margin-left: -20px; font-size: 18px; font-weight: bold;color:white">You can do everything you can to try to stop <font color = RED><i>BAD</i></font> things from happening to you, but eventually things will happen, so the best prevention is a positive attitude and Hope for a better future.</p>
      </div>
      
      
     <!--slider and somelist-->
      <div class="six columns">
		          <ul id="flickr" class="thumbs">
        </ul>
       <div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/bc1.png" alt="Together, Forever!" title="Together, Forever!" id="wows1_0"/></li>
		<li><img src="data1/images/dm0407110screen1920x1080.jpg" alt="ABCD of Malaria" title="ABCD of Malaria" id="wows1_1"/></li>
		<li><img src="data1/images/fluwebart2bn02ap.jpg" alt="Prevention is better than cure!" title="Prevention is better than cure!" id="wows1_2"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/worldheartday2013banner1.jpg" alt="html5 slideshow" title="World-Heart-Day-2013!" id="wows1_3"/></a></li>
		<li><img src="data1/images/riseupbanner.png" alt="RiseUp!" title="RiseUp!" id="wows1_4"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Together, Forever!"><span><img src="data1/tooltips/bc1.png" alt="Together, Forever!"/>1</span></a>
		<a href="#" title="ABCD of Malaria"><span><img src="data1/tooltips/dm0407110screen1920x1080.jpg" alt="ABCD of Malaria"/>2</span></a>
		<a href="#" title="Prevention is better than cure!"><span><img src="data1/tooltips/fluwebart2bn02ap.jpg" alt="Prevention is better than cure!"/>3</span></a>
		<a href="#" title="World-Heart-Day-2013!"><span><img src="data1/tooltips/worldheartday2013banner1.jpg" alt="World-Heart-Day-2013!"/>4</span></a>
		<a href="#" title="RiseUp!"><span><img src="data1/tooltips/riseupbanner.png" alt="RiseUp!"/>5</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">html slider</a> by WOWSlider.com v7.7</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!--slider closed-->
        <h4>Whats New</h4>
        <ul class="list lightbulb">
          <li><a href = http://indianexpress.com/photos/picture-gallery-others/ebola-scare-raises-its-head-in-mumbai-delhi/2/> Ebola scare raises its head in Mumbai, Delhi</li>
          <li><a href = http://www.aidsmap.com/HIV-update-18th-February-2015/page/2946359/>Kidney transplants from HIV-positive donors work well</a></li>
          <li><a href = http://timesofindia.indiatimes.com/home/science/This-pen-will-help-diabetics-monitor-blood-sugar-levels/articleshow/46450405.cms>Pen will help diabetics monitor blood sugar levels </li>
          <li><a href = http://timesofindia.indiatimes.com/home/science/Drug-resistant-malaria-parasite-from-Myanmar-threatens-India/articleshow/46310604.cms>Drug-resistant malaria parasite from Myanmar threatens India</li>
          <li><a href = http://timesofindia.indiatimes.com/life-style/relationships/parenting/Stop-bed-sharing-with-your-toddlers/articleshow/45474384.cms>Smoke, dust, perfumes may trigger asthma attacks, say experts</a></li>
          
        </ul>
        </div>
    <hr>
  </section>
    
  
  <!--about-->
  
  
  <section id="about">
    <h1 class="title">About Us</h1>
    <blockquote> We prevent the spread of disease in Mumbai by investigating cases and outbreaks, promoting vaccination, and planning for infectious disease emergencies.</blockquote>
    <div class="row">
      <div class="nine columns"> 
      <img src="assets/images/p2.jpg" class="image left" alt="" style="margin:5px 15px 0 0" />
        <h4 style="margin:0 0 10px 0">Mumbai Department of Public Health</h4>
        <p><span class="dropcap">T</span>he Communicable Disease Control and Prevention Section, part of the Mumbai Department of Public Health, works closely with community members, clinicians, and city, state, and private organizations to protect the health of San Franciscans and our visitors. To control and prevent the spread of disease we support community immunization programs, clinician education and training, and emergency preparedness. We monitor communicable disease outbreaks, alert clinicians to public health threats, investigate cases, and address routes of infection.</p>
        <h4>Communicable Disease Control Unit</h4>
        <p> <span class="dropcap">T</span>he Communicable Disease Control Unit controls and prevents communicable diseases for Mumbai residents and its visitors by tracking reports of 5 major diseases and conditions, investigating cases and contacts, and recommending public health actions to control the spread of disease.</p>
	<br><h4>Communicable Disease Prevention Unit</h4>
        <p> <span class="dropcap">T</span>he Communicable Disease Prevention Unit works to prevent communicable diseases and promote vaccines across the lifespan for all <b>Mumbaikars</b>. Our program's primary areas of emphasis include childhood, adolescent and adult immunizations; outreach and education; and vaccine distribution to eligible public and non-profit providers.</p>
      </div>
      
    </div>
    <br>
    <br>

    <hr>
  </section>
  
  
  
<!--Gallery-->
  
 
  <section id="gallery">
    <h1 class="title">Gallery</h1>

  <div class="grow pic">
    <img src="assets/images/aids1.jpg" alt="girl">
  </div>

  <div class="grow pic">
    <img src="assets/images/aids.jpg" alt="city">
  </div>

  <div class="grow pic">
    <img src="assets/images/aids3.jpg" alt="kick">
  </div>

  <div class="grow pic">
    <img src="assets/images/f3.jpg" alt="climb">
  </div>

  <div class="grow pic">
    <img src="assets/images/f2.jpg" alt="">
  </div>

  <div class="grow pic">
    <img src="assets/images/f4.jpg" alt="">
  </div>

  <div class="grow pic">
    <img src="assets/images/l1.jpg" alt="">
  </div>

  <div class="grow pic">
    <img src="assets/images/l3.jpg" alt="">
  </div>

  <div class="grow pic">
    <img src="assets/images/l2.jpg" alt="">
  </div>

  <div class="grow pic">
    <img src="assets/images/b1.jpg" alt="">
  </div>
  
   <div class="grow pic">
    <img src="assets/images/b3.png" alt="">
  </div>
   
    <div class="grow pic">
    <img src="assets/images/b2.jpg" alt="">
  </div>
    <div class="grow pic">
    <img src="assets/images/c6.jpg" alt="">
  </div>
<div class="grow pic">
    <img src="assets/images/g3.jpg" alt="">
  </div>
<div class="grow pic">
    <img src="assets/images/c1.jpg" alt="">
  </div>
<div class="grow pic">
    <img src="assets/images/c2.jpg" alt="">
  </div>
<div class="grow pic">
    <img src="assets/images/c3.jpg" alt="">
  </div>
<div class="grow pic">
    <img src="assets/images/c4.jpg" alt="">
  </div>


    
    <hr>
  </section>
  <!--Contact-->
  <section id="contact">
    <h1 class="title">Contact Us</h1>
    <div class="row">
      <div class="twelve columns">
        <iframe width="940" height="225" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241631.24314054102!2d73.09558935527343!3d18.865412316690957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e83a2c258743%3A0xa74bf4280b631bf8!2sAnjuman-I-Islam+Kalsekar+Technical+Campus!5e0!3m2!1sen!2sin!4v1425717037299"></iframe>
      </div>
    </div>
    <div class="row">
      <div class="six columns">
        <h4>Feedback us</h4>
        <p>Use the below contact form or email me at <a href="mailto:sachin.ten001@gmail.com"></a>sachin.ten001@gmail.com</p>
        <br>
        <div class="done"> 
          <h4>Thank You !</h4>
          I have received your message. 
        </div>
        <form method="POST" action="feedbacks.php">
          <table>
            <tr>
              <td class="element"><label>Name</label></td>
              <td><input type="text" name="name" placeholder="Enter your name" required/></td>
            </tr>
            <tr>
              <td class="element"><label>Email</label></td>
              <td><input type="text" name="email"  placeholder="Please enter email id" required/></td>
            </tr>
            <tr>
              <td class="element"><label>Phone no</label></td>
              <td><input type="int" name="phno" size="30" placeholder="Enter the mobile number"required/></td>
            </tr>
            <tr>
              <td class="element"><label>Feedback</label></td>
              <td><textarea name="comment" class="text textarea" placeholder="Please provide us valid Feedback/any suggestion" required></textarea></td>
            </tr>
          </table>
            <input style="margin-left:40px;margin-top:10px;"type="submit" class="sbt"value="Submit"/>
 
        </form>
      </div>
      <div class="six columns">
        <h4>Office</h4>
        AIKTC Campus<br>
        Old Street 12, Near Some Company<br>
        New Heavens, Old York 454545
        <h4>Call Me</h4>
        +1 (111) 222 3333<br>
        +1 (222) 333 4444 </div>
    </div>
    <hr>
  </section>
 
 
 
   <section id="diseases" style="list-style-type:none;">
    <h1 class="title">Diseases and  Condition</h1>
    <div id="navcontainer">
<ul>
<li id="cancer">Cancer</li>
<li id="hiv">HIV/AIDS</li>
<li id="malaria">Malaria</li>
<li id="heart">Heart Diseases</li>
<li id="swine" class="active">Swine flu</li>
</ul>
</div>
<br>
<style>
.diseases1{
position:absolute; width:84%; height:280%;margin-left:-1%; background-color:#; 
}
.diseases2{
width:60%; height:20%; 
}

.diseases3{
width:38%; height:20%; margin-left:61%; margin-top:-35%; vertical-align:top;  
}
.diseases4{
width:60%; height:28%; 
}
.diseases5{
width:38%; height:28%; margin-left:61%; margin-top:-49%; vertical-align:top;  
}
.comments{

width:100%; height:28%; overflow:auto;
}
ul.types li{
color:#ddd;
font-size:1.2em;
margin-left:5%;
}
.diseases3 p{
color:#ddd;
font-size:13px;
font-weight:bold;
}
.diseases4 p{
color:#444;
font-size:13px;
font-weight:bold;
}
.diseases1 h2,.diseases2 h2,.diseases3 h2,.diseases4 h2,.diseases5 h2{
margin-top:14px;font-family:serif;
}

.diseases5 p.address{
color:#aaa;font-size:14px;
}
p.company{ 
color: #00f;
}
.hello{
margin-bottom:5px; font-size:18px; color:#000; font-weight:bold;
}
</style>
 <div class="diseases1" id="cancerpage">
    <h2 align="left" style="margin-top:5px;color:#ebebeb;font-weight:bolder;">Cancer </h2>
   
     <img src="cancer1.jpg" alt="cancer_prevention" height="22%" width="100%"> 
     
    <!----THIS IS DIVISION FOR TYPES OF -->
    <div class="diseases2" style="color:White; font-size:18px;font-weight:bolder; margin-left:1.5%;">
    <H2 class="hello"> Types of Cancer</H2><br>
    <p>The following are the 10 most commonly diagnosed cancer types in 2009 and the estimated number of cancer patients affected by each:</p> <br>
    <ul class="types">
    <li >Non-melanoma skin cancer</li>
    <li>Lung cancer</li>
     <li>Breast cancer</li>
      <li>Prostate cancer</li>
       <li>Colorectal cancer</li>
        <li>Bladder cancer</li>
         <li>Melanoma</li>
         </ul>
         <br>
         <p>It's estimated that more than 120 million people in India have some form of cancer. There are more than 200 different types of cancer, although many are quite rare.
         
    
    </div>
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases3">
    <H3 class="hello"> Danger Signals </H3>
    
    <p><b>A PERSISTENT SORE </b> especially if it is in the mouth, on the lip or on tongue. Long standing sores due to smoking, sharp edge of teeth, or dental plates that do not fit, can develop into cancer if not taken care of .Common 'Cold Sore' disappears after a few days - Cancer does not. If any such sore persists more than a few days, see your doctor.</p>
<p><b> LUMPS OR MASSES</b> which appear where none were present previously should arouse suspicion of cancer. This is especially true in the case of women and is the most readily cured if treated early.</p>
 
 <p><b> UNEXPLAINED OR ABNORMAL BLEEDING FROM ANY BODY OPENING</b> should be quickly investigated by a physician. Coughing up or vomiting blood, passing blood in the urine and rectal bleeding are common symptoms of cancer. In women the first sign of cancer of the uterus is often a bloody discharge occurring between menstrual periods or after menopause.</p>
 
 <p><b>UNEXPLAINED LOSS OF WEIGHT</b> may be due to many things but may also be due to hidden cancer. </p>
    </div>
    
    <div class="diseases4">
    
    <h4 class="hello"> What is Cancer? </h4>
    <p>In simple terms, cancer is an abnormal growth of body cells. Each one of us is born with a potential for cancer. One cannot "Catch" it as one would an infection or a cold. When the programming of a cell or a group of cells is affected, growth may become uncontrolled. Some of the factors that can alter the code are chronic irritation, tobacco, smoke and dust, radioactive substances, age, sex, race and heredity. While one cannot control many of these factors , we need to be aware of the ones we can control of. Prevention is definitely better than treatment of cancer.</p><br>
    <h4>What is the difference between normal and malignant cells?</h4>
    <p>Normal cells grow in a well regulated pattern. When cancer sets in, a group of cells suddenly starts multiplying in a haphazard and uncontrolled way, forming lumps or tumors. a malignant tumor never stops growing and can spread to other parts of the body.  </p>
    </div>
    
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases5">
    <H2 class="hello"> HELPS CENTER</H2>
    
    <br> <p> Charitable trust for cancer patients in Mumbai </p>
    
    <br> <p> Cancer Aid & Research Foundation </p>
    <p> Shop No 27, Centurion Mall Seawood East Navi Mumbai </p>
    <p>Tel: 27709100 , 9987242102, 022-27709100 </p>
    
    <br> <p> Shree Sant Gadge Maharaj Dharamshala Trust </p>
    <p> 1/73 Sant Gadge Maharaj Lane Dadasaheb Phalke Road Mumbai </p>
    <p> Tel: 26454590 , 022-26427464 </p>	
    
    <br> <p> International Showays Self Treat Centre </p>
    <p> 414/D 42, Mauli Society Sector 4, Road No 39 Mumbai  </p>
    <p> Tel: 24121680 , 022-24121680 </p>
    
    <br> <p> Cancer Patients Aid Association - Cpaa </p>
    <p> Office No 5,1 st Floor, Malhotra House W H Marg Mumbai  </p>
    <p> Tel: 9324837572 , 9324837572, 022-28687354 </P>
    
    <br> <p> Jeevan Jyot Cancer Relief And Care Trust </p>
    <p> Office No 9, Kondaji Chawl No 3 Jerbai Wadia Road Mumbai  </p>
    <p>  Tel: 24125848 , 022-24125848 </p>
    
    
    
    </div>
    <div class="comments"> <h2> Comments</h2>
    
    <?php
      $use_table_5='caancer';
       $show4= "SELECT * FROM ".$use_table_5."";
	$execute_show4=mysql_query($show4,$con);
	while($row_execute_show4=mysql_fetch_array($execute_show4))
	{	$username=$row_execute_show4['username'];
		$shared=$row_execute_show4['shared'];
		$time=$row_execute_show4['date_time'];?>
		 <div class="box note rounded full preview last" style="color:#000; font-weight:; font-size:1.1em;"> 
		 <font color="#f00"><?php echo $username;?> :<br><br></font>
       	<?php echo $shared;?> <br>
       	<br><font color="#333"><span style="font-size:7pt;"><?php echo $time;?></span></font>
        </div>
     	
		
		<?php
		//$username=$row_execute_query_details['username'];
	}
 	?>
       
    
    
    
    </div>
    
</div>
<div class="diseases1" id="hivpage">
    <h2 align="left" style="margin-top:5px;color:#ebebeb;font-weight:bolder;">Hiv</h2>
     <img src="hivbanner.jpg" alt="prevention of hiv" height="22%" width="100%"> 
    <!----THIS IS DIVISION FOR TYPES OF -->
    <div class="diseases2">
    <H2 class="hello"> Types of HIV </H2>
    <p>HIV is a highly variable virus which mutates very readily. This means there are many different strains of HIV, even within the body of a single infected person.

Based on genetic similarities, the numerous virus strains may be classified into types, groups and subtypes. </p>
<img src="subtypes.jpg" height = "32%" width = "80%" style="margin-left:5px;margin-top:5px;">
<h4> What is the difference between HIV-1 and HIV-2?</h4>
<p>There are two types of HIV: HIV-1 and HIV-2. Both types are transmitted by sexual contact, through blood, and from mother to child, and they appear to cause clinically indistinguishable AIDS. However, it seems that HIV-2 is less easily transmitted, and the period between initial infection and illness is longer in the case of HIV-2.

Worldwide, the predominant virus is HIV-1, and generally when people refer to HIV without specifying the type of virus they will be referring to HIV-1. The relatively uncommon HIV-2 type is concentrated in West Africa and is rarely found elsewhere.
</p>

    </div>
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases3">
    <H2 class="hello"> Danger Signals </H2>
    <p> The only way to determine for sure whether you are infected is to be tested for HIV infection. You cannot rely on symptoms to know whether or not you are infected with HIV. Many people who are infected with HIV do not have any symptoms at all for many years. </p>
    <p> The following may be warning signs of infection with HIV:</p>
    <ul>
    <li>rapid weight loss
 <li>red, brown, pink, or purplish blotches on or under the skin or inside the mouth, nose, or eyelids</li>
<li> dry cough</li>
    <li> recurring fever or profuse night sweats</li>
    <li>swollen lymph glands in the armpits, groin, or neck</li>
    <li>profound and unexplained fatigue</li>
    <li>diarrhoea that lasts for more than a week</li>
    <li>white spots or unusual blemishes on the tongue, in the mouth, or in the throat</li>
    <li>pneumonia</li>
    <li>memory loss, depression and other neurological disorders. </li>
    </ul>
    
    </div>
    
    <div class="diseases4">
    <H2 class="hello"> DISEASES TOPIC</H2><br>
    <p> Q. What is HIV? </p>
    HIV (Human Immunodeficiency Virus) is the virus that causes AIDS. This virus is passed from one person to another through blood, using shared needles and sexual contact. In addition, infected pregnant women can pass HIV to their baby during pregnancy or delivery, as well as through breast-feeding. People with HIV have what is called HIV infection. Most of these people develop AIDS as a result of HIV infection. <p>
    <p>These body fluids have been proven to spread HIV: </p>
    <ul>
    <li>blood</li>
    <li>semen</li>

      <li> vaginal fluid</li>

        <li>breast milk</li>

       <li> other body fluids containing blood.</li> </ul> <br>
       <p> Other additional body fluids that may transmit the virus that healthcare workers may come into contact with are: </p>
       <ul> 
       <li> cerebrospinal fluid surrounding the brain and the spinal cord </li>
	<li>synovial fluid surrounding bone joints </li>
       <li>amniotic fluid surrounding a foetus.</li> </ul><br>
       <p> Q. Where did HIV come from?</p>
       <p>We do not know. Scientists have different theories about the origin of HIV, but none have been proven. The earliest known case of HIV was from a blood sample collected in 1959 from a man in Kinshasha, Democratic Republic of Congo. (How he became infected is not known.) Genetic analysis of this blood sample suggests that HIV-1 may have stemmed from a single virus in the late 1940s or early 1950s. 				</p>
    </div>
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases5">
    <H2 class="hello"> HELPS CENTER</H2>
   <p class="company"><b>All Awareness Centre & Rajkamal Experimental Theatre</b>
12 Nishant Shopping Centre
Seven Banglow
Andheri (W)
Mumbai 400053
Tel: 26707921
Fax: 26343381
Category: HIV/AIDS</p><br>
<p class="company"><b>Archdiocesan Commission for Life</b>
Our Select 3rd Floor,
B-7 Manuel Gonsalves Road
Bandra (W)
Mumbai 400050
Tel: 22021093, 22021193, 22021293
Category: HIV/AIDS
</p><br>
<p class="company"> <b>Asha Dham</b>
Missionaries of Charity
Asha Daan
Sankli Street
Byculla
Mumbai - 400008
Karmayogi: Sister Yvone
Tel: 23093591
Notes: Medical treatment, food facilities & accommodation for dying destitutes and handicapped destitute children. Has four branches at Vile Parle, Santacruz, Byculla and New Bombay.</p><br>
<p class="company"></p><b>Anjuman-E-Mufidul Yatama</b>
Masjid Jamil
Off Mohammed Umer Rajjan Road,
11 Siddiq Lane
Madanpura
Mumbai Central
Mumbai 400 008
Karmayogi : Mr. Vakar Saikh 
                Ms Amunshi, Secretary
Tel : 23078705
Notes : Residential School for orphans & destitute offering primary education or 18 years.
Capacity 100.</p><br>
<p class="company"><b>Blood Donor Organisation Association</b></p>
<p>8/115 Parieshwar Hsg. Soc
Vile Parle
Mumbai 400057
Tel: 26347003
Category: HIV/AIDS</p>


    </div>
        <div class="comments"> <h2> COmments</h2>
    
    <?php
      $use_table_4='hiv';
       $show3= "SELECT * FROM ".$use_table_4."";
	$execute_show3=mysql_query($show3,$con);
	while($row_execute_show3=mysql_fetch_array($execute_show3))
	{	$username=$row_execute_show3['username'];
		$shared=$row_execute_show3['shared'];
		$time=$row_execute_show3['date_time'];?>
		 <div class="box note rounded full preview last" style="color:#000; font-weight:; font-size:1.1em;"> 
		 <font color="#f00"><?php echo $username;?> :<br><br></font>
       	<?php echo $shared;?> <br>
       	<br><font color="#333"><span style="font-size:7pt;"><?php echo $time;?></span></font>
        </div>
     	
		
		<?php
		//$username=$row_execute_query_details['username'];
	}
 	?>
       
    
    
    </div>
  
</div>
<div class="diseases1" id="malariapage">
    <h2 align="left" style="">Malaria</h2>
     <img src="abcd.jpg" alt="Smiley face" height="22%" width="100%"> 
    <!----THIS IS DIVISION FOR TYPES OF -->
    <div class="diseases2">
    <H2 class="hello"> INSERT TYPE OF DISEASES</H2>
    <p> Types of malaria </p> <br>

<p>There are 4 types of malaria that infect humans:</p>

   <ol style="text-decoration:none;margin-left:10px;"><li> Plasmodium vivax, abbreviated as P.v.</li>
    <li>Plasmodium malariae, abbreviated as P.m. </li>
  <li>  Plasmodium ovale, abbreviated as P.o. </li>
   <li> Plasmodium falciparum, abbreviated as P.f.</li></ol>
  <h3> Malaria from Plasmodium falciparum</h3>
   <p>Plasmodium falciparum is known to be the most lethal form of the plasmodium parasite, with most malaria infections and deaths being due to falciparum.</p>
   <p>Plasmodium falciparum is common to the southern regions of Africa, but it is reported that cases are now being reported in other areas, where this type was thought to have been eradicated.</p>
   <p>Although P. falciparum is a dangerous infection to contract, the three other types of infection also needs to be treated, as their untreated progress can also cause a host of health problems.</p>
    </div>
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases3">
    <H2 class="hello"> Danger Signals </H2>
    <p> What are the signs and symptoms of malaria? </p>
    <p><b>Symptoms of malaria</b> include fever and flu-like illness, including shaking chills, headache, muscle aches, and tiredness. Nausea, vomiting, and diarrhea may also occur. Malaria may cause anemia and jaundice (yellow coloring of the skin and eyes) because of the loss of red blood cells. If not promptly treated, the infection can become severe and may cause kidney failure, seizures, mental confusion, coma, and death.</p>
    <p> How soon will a person feel sick after being bitten by an infected mosquito? </p>
    <p>For most people, symptoms begin <b>10 days to 4 weeks</b> after infection,Two kinds of malaria, P. vivax and P. ovale, can occur again (relapsing malaria). In P. vivax and P. ovale infections, some parasites can remain dormant in the liver for several months up to about 4 years after a person is bitten by an infected mosquito. When these parasites come out of hibernation and begin invading red blood cells ("relapse"), the person will become sick.</p>
    
    
   
    </div>
    
    <div class="diseases4">
    <H2 class="hello"> DISEASES TOPIC</H2>
  <p>  What is malaria?</p>
  <p>Malaria is a serious and sometimes fatal disease caused by a parasite that commonly infects a certain type of mosquito which feeds on humans. People who get malaria are typically very sick with high fevers, shaking chills, and flu-like illness. Four kinds of malaria parasites infect humans: Plasmodium falciparum, P. vivax, P. ovale, and P. malariae. In addition, P. knowlesi, a type of malaria that naturally infects macaques in Southeast Asia, also infects humans, causing malaria that is transmitted from animal to human ("zoonotic" malaria). P. falciparum is the type of malaria that is most likely to result in severe infections and if not promptly treated, may lead to death. Although malaria can be a deadly disease, illness and death from malaria can usually be prevented.</p>
  <p>Globally, the World Health Organization estimates that in 2013, <b>198 million clinical cases of malaria occurred</b>, and 500,000 people died of malaria, most of them children in Africa. Because malaria causes so much illness and death, the disease is a great drain on many national economies. Since many countries with malaria are
already among the poorer nations, the disease maintains a vicious
cycle of disease and poverty.</p>

<p> How is malaria transmitted? </p>
<p>Usually, people get malaria by being bitten by an infective female <i>Anopheles mosquito</i>. Only Anopheles mosquitoes can transmit malaria and they must have been infected through a previous blood meal taken from an infected person. When a mosquito bites an infected person, a small amount of blood is taken in which contains microscopic malaria parasites. About 1 week later, when the mosquito takes its next blood meal, these parasites mix with the mosquito's saliva and are injected into the person being bitten.</p>
<p>Because the malaria parasite is found in red blood cells of an infected person, malaria can also be transmitted through blood transfusion, organ transplant, or the shared use of needles or syringes contaminated with blood. Malaria may also be transmitted from a mother to her unborn infant before or during delivery ("congenital" malaria).</p>
    </div>
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases5">
    <H2 class="hello"> HELPS CENTER</H2>
      <br> <p class="company2">Charitable trust for malaria patients in Mumbai </font></p>
    
    <br> <p class="company"> Malariasite - Child care Foundation </p>
    <p> Office No 5,1 st Floor, Malhotra House W H Marg Mumbai </p>
    <p>Tel: 27709100 , 9987242102, 022-27709100 </p>
    
    <br> <p class="company"> Govindraj Maharaj Dharamshala Trust </p>
    <p> 1/73 Sant Gadge Maharaj Lane Dadasaheb Phalke Road Mumbai </p>
    <p> Tel: 26454590 , 022-26427464 </p>	
    
    <br> <p class="company"> International Showays Self Treat Centre </p>
    <p> 414/D 42, Mauli Society Sector 4, Road No 39 Mumbai  </p>
    <p> Tel: 24121680 , 022-24121680 </p>
    
    <br> <p class="company"> Malaria Patients Aid Association - MPAA </p>
    <p> Shop No 27, Centurion Mall Seawood East Navi Mumbai </p>
    <p> Tel: 9324837572 , 9324837572, 022-28687354 </P>
    
    <br> <p class="company"> Aman ki asha Relief And Care Trust </p>
    <p> Office No 9, Kondaji Chawl No 3 Jerbai Wadia Road Mumbai  </p>
    <p>  Tel: 24125848 , 022-24125848 </p>
    </div>
        <div class="comments"> <h2> COmments</h2>
    
    <?php
      $use_table_3='malaria';
       $show2= "SELECT * FROM ".$use_table_3."";
	$execute_show2=mysql_query($show2,$con);
	while($row_execute_show2=mysql_fetch_array($execute_show2))
	{	$username=$row_execute_show2['username'];
		$shared=$row_execute_show2['shared'];
		$time=$row_execute_show2['date_time'];?>
		 <div class="box note rounded full preview last" style="color:#000; font-weight:; font-size:1.1em;"> 
		 <font color="#f00"><?php echo $username;?> :<br><br></font>
       	<?php echo $shared;?> <br>
       	<br><font color="#333"><span style="font-size:7pt;"><?php echo $time;?></span></font>
        </div>
     	
		
		<?php
		//$username=$row_execute_query_details['username'];
	}
 	?>
       
    
    
    </div>
  
</div>
 <div class="diseases1" id="swinepage">
    <h2 align="left" style="">Swine Flu</h2>
     <img src="swine.jpg" alt="Swine flu" height="22%" width="100%"> 
    <!----THIS IS DIVISION FOR TYPES OF -->
    <div class="diseases2">
    <H2 class="hello"> INSERT TYPE OF DISEASES</H2><br>
    <p> <b>Swine influenza (swine flu)</b> is a respiratory disease of pigs caused by type A influenza viruses that regularly cause outbreaks of influenza in pigs. Influenza viruses that commonly circulate in swine are called “swine influenza viruses” or “swine flu viruses.” Like human influenza viruses, there are different subtypes and strains of swine influenza viruses. The main swine influenza viruses circulating in U.S. pigs in recent years are: 
   <br> <ul style="margin-left:10px;text-decoration:none;color:red;font-size:15px;"> <br>
    <li> swine triple reassortant (tr) H1N1 influenza virus </li>
    <li> trH3N2 virus </li>
<li>trH1N2 virus</li>
</ul> </p><br>

<p>Swine flu viruses do not normally infect humans. However, sporadic human infections with swine influenza viruses have occurred. When this happens, these viruses are called “variant viruses.” They also can be denoted by adding the letter “v” to the end of the virus subtype designation. Human infections with H1N1v, H3N2v and H1N2v viruses have been detected all over the world.</p>
    
    </div>
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases3">
    <H2 class="hello"> Danger Signals </H2>
  <p>  People who have been infected with variant viruses have had symptoms similar to the symptoms of regular human seasonal influenza.</p>
  <ul style="margin-left:15px;text-decoration:none;color:red;margin-top:5px;font-size:15px;" >
  <li>fever</li><li> lethargy</li> <li>  lack of appetite and coughing</li> <li> runny nose</li>  <li> sore throat</li> <li> eye irritation</li> <li>  nausea</li>  <li> vomiting </li> <li>  diarrhea.</li>  </ul>
    </div>
    
    <div class="diseases4">
    <H2 class="hello"> DISEASES TOPIC</H2>
    
  <p> <b> Why are human infections with variant viruses of concern?</b></p>
  <p> Influenza viruses that infect pigs may be different from human influenza viruses. Thus, influenza vaccines made against human influenza viruses are generally not expected to protect people from influenza viruses that normally circulate in pigs. In addition, because pigs are susceptible to avian, human and swine influenza viruses, they potentially may be infected with influenza viruses from different species (e.g., ducks and humans) at the same time. If this happens, it is possible for the genes of these viruses to mix and create a new virus that could spread easily from person-to-person. This type of major change in the influenza A viruses is known as antigenic shift. Antigenic shift results when a new influenza A virus to which most people have little or no immune protection infects humans. If this new virus causes illness in people and can be transmitted easily from person-to-person, an influenza pandemic can occur. This is what happened in 2009 when an influenza A H1N1 virus with swine, avian and human genes emerged in the spring of 2009 and caused the first pandemic in more than 40 years.</p>
  <p><b>Can people catch swine flu/variant flu from eating pork?</b>
  </p>
  <p>Swine influenza has not been shown to be transmissible to people through eating properly handled and prepared pork (pig meat) or other products derived from pigs.
  </p>
 
    </div>
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases5">
    <H2 class="hello"> HELPS CENTER</H2>
      <br> <p> Charitable trust for swine patients in Mumbai </p>
    
    <br> <p> Swine Aid & Research Foundation </p>
    <p>Shop No 27, Centurion Mall Seawood East Navi Mumbai </p>
    <p>Tel: 27709100 , 9987242102, 022-27709100 </p>
    
    <br> <p> Nowrojbhai Dharamshala Trust </p>
    <p> 1/73 Sant Gadge Maharaj Lane Dadasaheb Phalke Road Mumbai </p>
    <p> Tel: 26454590 , 022-26427464 </p>	
    
    <br> <p> International Showays Self Treat Centre </p>
    <p>414/D 42, Mauli Society Sector 4, Road No 39 Mumbai  </p>
    <p> Tel: 24121680 , 022-24121680 </p>
    
    <br> <p> Swine Association and Co-orpate limited </p>
    <p> Office No 5,1 st Floor, Malhotra House W H Marg Mumbai  </p>
    <p> Tel: 9324837572 , 9324837572, 022-28687354 </P>
    
    <br> <p> Swine Relief And Care Trust </p>
    <p> Office No 9, Kondaji Chawl No 3 Jerbai Wadia Road Mumbai  </p>
    <p>  Tel: 24125848 , 022-24125848 </p>
    </div>
        <div class="comments"> <h2> COmments</h2>
    <?php
      $use_table_5='swine';
       $show4= "SELECT * FROM ".$use_table_5."";
	$execute_show4=mysql_query($show4,$con);
	while($row_execute_show4=mysql_fetch_array($execute_show4))
	{	$username=$row_execute_show4['username'];
		$shared=$row_execute_show4['shared'];
		$time=$row_execute_show4['date_time'];?>
		 <div class="box note rounded full preview last" style="color:#000; font-weight:; font-size:1.1em;"> 
		 <font color="#f00" ><?php echo $username;?> :<br><br></font>
       	<?php echo $shared;?> <br>
       	<br><font color="#333"><span style="font-size:7pt;"><?php echo $time;?></span></font>
        </div>
     	
		
		<?php
		//$username=$row_execute_query_details['username'];
	}
 	?>
       
    
    
    </div>
</div>
 <div class="diseases1" id="heartpage">
    <h2 align="left" style="">Heart Diseases </h2>
       <img src="heartd.jpg" alt="heart diseases" height="22%" width="100%"> 
    <!----THIS IS DIVISION FOR TYPES OF -->
    <div class="diseases2">
    <H2 class="hello"> TYPE OF HEART DISEASES</H2><br>
    <h3> Types : </h3>
    <ul>
   <li> <p>The most common type of heart disease is <b>coronary artery disease (CAD)</b>, which can lead to heart attack. You can greatly reduce your risk for CAD through lifestyle changes and, in some cases, medication.</p></li>
   <li> <p> An <b>enlarged heart (cardiomegaly)</b> can have various causes. But it's usually caused by high blood pressure (hypertension) or coronary artery disease.</p></li>
  <li>  <p><b>Heart muscle disease</b> -- what doctors call cardiomyopathy -- is as serious as it sounds.</p></li>
   <li> <p> HCM -- <b>hypertrophic cardiomyopathy</b> -- is a thickening of the walls of the heart.</p></li>
  <li>  <p> <b>Sudden Cardiac Death</b> is the cause of half of all heart disease deaths </p></li>
   <li> <p> <b>Pericardial Effusion</b> Fluid around the heart can be caused by various types of infection/inflammation or cancer, kidney disease or heart surgery. This fluid can impair heart function.</p></li>
   <li><p>A <b>heart attack, or myocardial infarction (MI)</b>, is permanent damage to the heart muscle. "Myo" means muscle, "cardial" refers to the heart, and "infarction" means death of tissue due to lack of blood supply.</p></li>
  <li>  <p><b> Restrictive cardiomyopathy</b> is the rarest form of heart-muscle disease.</p></li></ul>					
    
    
    </div>
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases3">
    <H2 class="hello"> Danger Signals </H2> 
    <p>The five major symptoms of a heart attack are—</p>
    <ol>
    <li> Pain or discomfort in the jaw, neck, or back.</li>
    <li>Feeling weak, light-headed, or faint.</li>
    <li>Chest pain or discomfort.</li>
    <li>Pain or discomfort in arms or shoulder.</li>
    <li>Shortness of breath.</li>
    
   <h3> Heart Attack signs </h3>
    <p> If the blood supply to the heart muscle is cut off, a heart attack can result. Cells in the heart muscle do not receive enough oxygen and begin to die. The more time that passes without treatment to restore blood flow, the greater the damage to the heart. Having high blood pressure or high blood cholesterol, smoking, increased age, physical inactivity, unhealthy diet, and having had a previous heart attack or family history of stroke, obesity, or diabetes can increase a person's chances of having a heart attack.</p>
    </div>
    
    <div class="diseases4">
    <H2 class="hello"> DISEASES TOPIC</H2>
    <p> What is heart disease? </p>
    <p>Heart disease is a term that includes several more specific heart conditions. The most common heart disease in the US is coronary artery disease (CAD). CAD occurs when the arteries that supply blood to the heart muscle become hardened and narrowed due to the buildup of plaque. The narrowing and buildup of plaques is called atherosclerosis. Plaques are a mixture of fatty and other substances including cholesterol and other lipids. Blood flow to the heart is reduced, which reduces oxygen to the heart muscle. This can lead to heart attack. Other heart conditions include angina, heart failure, and arrhythmias.</p>
     <br><p> What are the risk factors for heart disease? </p>
     <p> Some conditions as well as some lifestyle factors can put people at a higher risk for heart disease. The most important modifiable risk factors for heart disease are high blood pressure, high blood cholesterol, cigarette smoking, diabetes, physical inactivity, unhealthy diet, and obesity. In principle, all persons can take steps to lower their risk for heart disease.</p>
     <br>
     <p>What can you do to reduce your risk?</p>
     <p>Persons can take steps to lower their risk of developing heart disease by preventing or treating and controlling high blood pressure, preventing or treating and controlling high blood cholesterol, by not using tobacco, by preventing or controlling diabetes, and by maintaining adequate physical activity, weight, and a healthy diet. Persons being treated for conditions or risk factors should follow the guidance of their health care providers.</p>
   <p> Why is there a need to act fast? </p>
   <p>Death or permanent disability can result from a heart attack. The risk of death or permanent damage can be reduced with timely treatment. Some newer treatments need to be given soon after the onset of a heart attack in order to be effective. It is important to know the symptoms of a heart attack and act right away.</p> </div>
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases5">
    <H2 class="hello"> HELPS CENTER</H2>
    List of Organisations helping Heart disease patient.
    <p class="company"> <b> bhi - Bombay Heart Institute</b>
 31, Reva Chambers 5th Floor
 Behind Income Tax Office
 .,Churchgate
 Mumbai - 400020.
 Maharashtra
 Karmayogi : Devendra Joshi
 Tel : 022- 22014173  (4pm-6pm)
</p class="company">

<p class="company"> <b>ForumHealth - Forum For Health Awareness</b>
 2, Shriji Kripa,
 Near Reliance Energy
 6th Road, Prabhat Colony,Santacruz (E)
 Mumbai - 400055.
 Maharashtra
 Karmayogi : Hariram Chaudhary
 Tel : 022- 9322902734  (8 a.m. to 1 p.m) </p>
 
 <p class="company"> <b>HBNC - Honey Bees Nature Cure</b>
 Bldg. No.3, Room No.5, Air India Colony
 Kalina
 Air India Road,Santacruz (E)
 Mumbai - 400029.
 Maharashtra
 Karmayogi : Laxman Bhilare
 Tel : 022- 6157909  (10-5) 
    </p>
    <p class="company"> <b> hyattcare - Hyatt Care </b>
 G-Sector, B Line , Room No. 9
 Behind Madina Hotel
 Cheeta Camp,Trombay
 Mumbai - 400088.
 Maharashtra
 Karmayogi : Mr. Karim
 Tel : 022- 64163270  (10am-10pm) </p>
 
 <p class="company"> <b> ipcfound - IPC Foundation (Inst of Preventive Cardiology)</b>
 Office No. 103/104,1st Floor
 Prathamesh Bldg., Raghuvanshi Mill Compound
 Near Big Bazaar, Senapati Bapat Marg,Lower Parel (W)
 Mumbai - 400013.
 Maharashtra
 Karmayogi : Dr. Pratiksha
 Tel : 022- 24913000  (9 am - 6 pm)
 pratiksha@ipc-india.com
 Website on Karmayog - http://www.karmayog.org/ngo/ipcfound/
 Own Website - www.ipc-india.org
 Contact Person - Mr.Sachin Sawant
 Phone Work - 42334046,40988000  (.)
 Phone Cell - 9930099975  (.)</p>
    </div>
      <div class="comments"> <h4> Comments</h4>
      <?php
      $use_table_2='heart';
       $show1= "SELECT * FROM ".$use_table_2."";
	$execute_show1=mysql_query($show1,$con);
	while($row_execute_show1=mysql_fetch_array($execute_show1))
	{	$username=$row_execute_show1['username'];
		$shared=$row_execute_show1['shared'];
		$time=$row_execute_show1['date_time'];?>
		 <div class="box note rounded full preview last" style="color:#000; font-weight:; font-size:1.1em;"> 
		 <font color="#f00"><?php echo $username;?> :<br><br></font>
       	<?php echo $shared;?> <br>
       	<br><font color="#333"><span style="font-size:7pt;"><?php echo $time;?></span></font>
        </div>
     	
		
		<?php
		//$username=$row_execute_query_details['username'];
	}
 	?>
       
      
     
      
    </div>
</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
   
   
   
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
        
  </section>
 
 
 
 
 
 <!--DONATE-->
 <hr>
  <section id="donate" style="margin-top:75%">
	      <h1 class="title">DONATES</h1>

    <div class="form_bg">
	<div class="wrap">
			<div class="donate-box">
				<h2>Invest in a future free of Salvery</h2>
				<p>Fuel the fight against human trafficking year-round by selecting to donate monthly below.</p><br>
				<h4>Select an Amount</h4>
				
				<div class="d-video">
						<h3 style="color:#EB3333;font-family: fantasy;font-size: 20px;">Why You Should Donate?</h3>
						 <iframe width="380" height="250"
							src="http://www.youtube.com/embed/cETX824qmss">
</iframe> 
			
  </video>
				</div>
				
			
				<a href="#" class="-button purple" ><span class="-">$100</span></a>
				<a href="#" class="-button purple" ><span class="-">$200</span></a>
				<a href="#" class="-button purple" ><span class="-">$300</span></a>
				<a href="#" class="-button purple" ><span class="-">$400</span></a>
				<a href="#" class="-button purple" ><span class="-">$1000</span></a>
				<br/>
				 <table>
					<tr class="element">
						<td><label>Your Donation* &nbsp;$</label></td>
						<td class="input"><input type="Text" name="amt"  /></td>
					</tr>
				</table>	
				<input type="radio" name="chck"checked>ONE TIME
				<input type="radio"  name="chck" >MONTHLY
				<br>
				<h2 style="color:white;padding:10px 5px;margin-top:20px;">Your Information<h2>
					
				<table>
					<tr class="element">
						<td><label>Name* </label></td>
						<td class="input"><input type="Text" name="fname" placeholder="First name" /></td><td class="input"><input type="Text" name="lname" placeholder="Last name" /></td>
					</tr>
						
					<tr class="element">
						<td><label>Email*</label></td>
						<td class="input"><input type="email" name="email" placeholder="Enter Email id" /></td>
					</tr>
				
					<tr class="element">
						<td><label>Phone No* </label></td>
						<td class="input"><input type="text" name="mno" placeholder="e.g (+91) XXX" />
					</tr>
				</table><br>
				<h4>Tick below for Future Reference</h4><input type="checkbox" name="checkbox">It's OK to contact me in Future 
				<br>
			
					<h2 style="color:white;padding:10px 5px;margin-top:30px;">Payment Details</h2>
				<table>
					<tr class="element">
						<td><label>Name On the Card* </label></td>
						<td class="input"><input type="Text" name="cname" placeholder="Enter first Name of the card" /></td><td class="input"><input type="Text" name="cname" placeholder="Enter Last name of the card" /></td>
					</tr>
						
					<tr class="element">
						<td><label>Card Number* </label></td>
						<td class="input"><input type="text" name="cno" placeholder="e.g 775 xxxx xxxxx" /></td>
					</tr>
				
					<tr class="element">
						<td><label>Phone No* </label></td>
						<td class="input"><input type="text" name="mno" placeholder="e.g (+91) XXX" />
					</tr>
					<tr class="element">
						<td><label>Expiration date</label></td>
						<td class="input"><select name="months">
							<option value="month" selected>month</option>
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option><option value="12">12</option></select>
					</tr>
					<tr class="element">
						<td><label></label></td>
						<td class="input"><select name="Years">
											<option value="year" selected>Year</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option><option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
											<option value="2021">2021</option>
											<option value="2022">2022</option>
											<option value="2023">2023</option>
											<option value="2024">2024</option>
										</select>
					</tr>
					
					
										<br>
						<tr class="element">
							<td><label>Security Number* </label></td>
						<td class="input"><input type="text" name="sno" placeholder="Enter your Card code" /></td>
					</tr>
					
					<tr class="element">
						<td><label>COUNTRY</label></td>
						<td class="input"><input type="text" name="countryname" placeholder="Enter your Country name(e.g INDIA)" /></td>
					</tr>
					<tr class="element">
						<td><label>City</label></td>
						<td class="input"><input type="text" name="cityname" placeholder="Enter your city(e.g Mumbai)" /></td>
					</tr>
					<tr class="element">
						<td><label>Address</label></td>
						<td class="input"><textarea name="address" class="textarea" ></textarea></td>
					</tr>
					<tr class="element">
						<td><label>Zip code*</label></td>
						<td class="input"><input type="text" name="zipcode" placeholder="Enter your postal code(e.g 4001 xx" /></td>
					</tr>
					</table><br>
								 <div class="checkbox-div" >
									 <input type="checkbox" class="" name="accept">I'd like to cover the processing fee so 100% of my donation goes to Not For Sale.<br> 
								 </div><br/>
								 
								 <input type="Submit" value="Sumbit Donation" class="sbt" />
								 				</form>
		
	</div>
	</div>
    <hr>
  </section>
  
  <section id="register">
  <br>
    <h1 class="title">Members Area</h1>
    <div class="row" style="padding-top:20px; padding-bottom:150px;">
      <div class="six columns" id="get_loginform">
        <form method="POST" action="login.php">
        	<?php
								if(isset($_SESSION['error_message']))
								{
								$error_message=$_SESSION['error_message'];
								echo "<div style='width:170%;'>";
									echo "<h5 style='border-radius:5px; margin-left:22%; background-color:#eee; padding-top:5px; padding-bottom:5px; padding-left:20px; padding-right:20px;'><font color='red'  ><u><b>#Error:</b></u></font><font color='#000'>  <b>".$error_message."</b></font></h5>";
									echo "</br>";
									echo "</div>";
									}
								
								?>

							<label><h3 style="margin-left:40%;">Email Id :</h3></label>
			   <input type="text" name="email" style="width:130%; font-size:1.2em;  margin-left:40%; padding-top:10px; padding-bottom:10px;" required/>
<br>
<br>
			<label><h3 style="margin-left:40%;">Password :</h3></label>
			   <input type="password" name="password"  style="width:130%; font-size:1.2em; margin-left:40%; padding-top:10px; padding-bottom:10px;" required/>

		 
            <br>
            <br>
            <br>
            <input type="submit" value="Login  " class="registering" style="margin-left:40%;"/>
			<br>
			<br>
			</form>
			<button class="signup" style="margin-left:40%; width:131%;  margin-top:0%;" id="signupform">Get Registered</button> 
            <div class="loading">
			</div>
          
          <div class="error"> </div>
        
     </div>

    <div class="six columns" id="get_signupform" style="">
        <form method="post" action="register.php" class="form" id="form">
        <?php
								if(isset($_SESSION['error_message2']))
								{
								$error_message2=$_SESSION['error_message2'];
								echo "<div style='width:70%;'>";
									echo "<h5 style='border-radius:5px; margin-left:-95%; background-color:#eee; padding-top:5px; padding-bottom:5px; padding-left:20px; padding-right:20px;'><font color='red'  ><u><b>#Error:</b></u></font><font color='#000'>  <b>".$error_message2."</b></font></h5>";
									echo "</br>";
									echo "</div>";
									}
								
								?>

		<label><h3 style="margin-left:-70%;">Username:</h3></label>
			  
 <input type="text" name="username" style="width:130%; font-size:1.2em;  margin-left:-60%; padding-top:10px; padding-bottom:10px;position:absolute;" required/>
		<br>
		<br>
	<label><h3 style="margin-left:-70%; margin-top:2%;">Email Id:</h3></label>
			   
<input type="text" name="email"  style="width:130%; font-size:1.2em; margin-left:-60%; padding-top:10px; padding-bottom:10px; position:absolute;" required/>
		<br>
		<br>
	<label><h3 style="margin-left:-70%; margin-top:2%;">Mobile Number:</h3></label>
			   
<input type="int" name="mobile"  style="width:130%; font-size:1.2em; margin-left:-60%; padding-top:10px; padding-bottom:10px; position:absolute;" required/>
		<br>
		<br>
	<label><h3 style="margin-left:-70%; margin-top:2%;">Password:</h3></label>
			   
<input type="password" name="password"  style="width:130%; font-size:1.2em; margin-left:-60%; padding-top:10px; padding-bottom:10px; position:absolute;" id="pass1" required/>

<br>
		<br>
	<label><h3 style="margin-left:-70%; margin-top:2%;">Confirm Password:</h3></label>
			   
<input type="password" name="cpassword"  style="width:130%; font-size:1.2em; margin-left:-60%; padding-top:10px; padding-bottom:10px; position:absolute;" id="pass2" onkeyup="checkPass(); return false;" required/>
 <span id="confirmMessage" class="confirmMessage"></span>

	 
            <br>
            <br>
            <br>
            <input type="submit" value="Register" class="registering" style="margin-left:-62%;margin-top:2%;"/>
		<br>
		<br>
		</form>

<button class="signup" style="margin-left:-62%; width:135%;  margin-top:0%;" id="login_form">Back to login</button> 
            <div class="loading">
			</div>
          
          <div class="error"> </div>
        
      </div>
     
   
   
  </section>
<!--Footer-->  
   <footer>
    <p class="left">Copyright © 2012 - All Rights Reserved<br>
	Design and Made by <a href="http://www.aiktc.org">Ashiq,Shadhir and Afzal</a> | <a href="www.aiktc.org">AIKTC-SOE </a></p>
    <div class="socialicon">
			<a href="https://www.facebook.com/ashiq.ahamed.5" target="_blank"><img src="assets/images/facebook_1.png" onmouseover="this.src='assets/images/facebook.png'" onmouseout="this.src='assets/images/facebook_1.png'"></a>
	<a href="https://twitter.com/ashiqahamed007" target="_blank"><img src="assets/images/twitter_1.png" onmouseover="this.src='assets/images/twitter.png'" onmouseout="this.src='assets/images/twitter_1.png'"></a>
	<a href="https://plus.google.com/103918302807672812777/posts" target="_blank"><img src="assets/images/google_1.png" onmouseover="this.src='assets/images/google.png'" onmouseout="this.src='assets/images/google_1.png'"></a>
  			
			
			
   </div>
 	
  </footer>
</div>

<!--goto top-->
<a href="#" class="go"><img src="assets/images/gototop.jpeg"  class="gototop"></a>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<script type="text/javascript" src="assets/scripts/jquery.orbit-1.2.3.min.js"></script> 
<script type="text/javascript" src="assets/scripts/jquery.tweet.js"></script> 
<script type="text/javascript" src="assets/scripts/jflickrfeed.js"></script> 
<script type="text/javascript" src="assets/scripts/jquery.fancybox-1.3.4.pack.js"></script> 
<script type="text/javascript" src="assets/scripts/jquery.scrollTo-1.4.2-min.js"></script> 
<script type="text/javascript" src="assets/scripts/waypoints.min.js"></script> 
<script type="text/javascript" src="assets/scripts/navbar.js"></script> 
<script type="text/javascript" src="assets/scripts/functions.js"></script>
</body>
</html>
