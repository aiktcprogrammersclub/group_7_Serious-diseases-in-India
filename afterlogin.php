<?php
session_start();
include 'config.php';
$email=$_SESSION['user_email'];
$followers_table='follow';
$use_table="registered";
	$check_validity = "SELECT * FROM ".$use_table." WHERE email='$email'";
	$execute_query_details=mysql_query($check_validity,$con);
	
			while($row_execute_query_details=mysql_fetch_array($execute_query_details))
	{
		$username=$row_execute_query_details['username'];
		//$username=$row_execute_query_details['username'];
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hope</title>
<link rel="stylesheet" type="text/css" href="assets/styles/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/styles/orbit-1.2.3.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/styles/jquery.fancybox-1.3.4.css" media="screen" />
<!--[if lt IE 9]><script type="text/javascript" src="assets/scripts/modernizr.js"></script><![endif]-->
<script src="jquery.js"></script>

<script>
   	
	
$(document).ready(function(){

//$(get_loginform).hide();
//$(get_signupform).hide();
$(hivpage).hide();
$(malariapage).hide();
$(swinepage).hide();
$(heartpage).hide();

	
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
    <h1> HOPE </h1>
    
    
  </header>
  <div class="nav-container">
  
    <nav>
      <ul>
        <li><a href="#home" class="selected">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#blogs">Blog</a></li>
        <li><a href="#diseases">Disesases</a></li>
        <li><a href="#gallery">Gallery</a></li>       
        <li><a href="#contact">Contact</a></li>
        <li><a href="#donate">Donate</a></li>
        
        <li><a href="logout.php">logout</a></li>
      </ul>
      <div class="nav-left"></div>
      <div class="nav-right"></div>
      <div class="nav-above"></div>
    </nav>
  </div>
  <h2 style="text-align:center";>Welcome Mr.<?php echo $username; ?></h2>
  <hr>
   <section id="blogs">
    <h1 class="title">Your Blog</h1>
    
    <?php 
    $encrypted_email=md5(md5($email));
    $blogs="blogs";
    $use_table_2="".$encrypted_email."_".$blogs."";
    $show = "SELECT * FROM ".$use_table_2."";
	$execute_show=mysql_query($show,$con);
	
			
    ?>
   <h4> Share Something?</h4>
    <form method="post" action="blog.php">
    <input type="hidden" name="usetable" value="<?php echo $use_table_2;?>">
    <textarea style="width:100%; height:10%;" name="yourblog" id="text_id" value="Please Enter some comments">
    </textarea>
    <button type="submit" class="sbt" style="margin-top:10px; margin-left:-50px;">Submit</button>
    </form>
    <br>
    <h3> Your Previous Shares </h3>
 	<?php
 	while($row_execute_show=mysql_fetch_array($execute_show))
	{
		$shared=$row_execute_show['shared'];
		$time=$row_execute_show['date_time'];?>
		 <div class="box info rounded full preview" style="color:#000; font-weight:; font-size:1.1em;"> 
       	<?php echo $shared;?> <br>
       	<br><font color="#333"><?php echo $time;?></font>
        </div>
     	
		
		<?php
		//$username=$row_execute_query_details['username'];
	}
 	?>
       
    <hr>
  </section>
  <section id="diseases" style="list-style-type:none;">
    <h1 class="title">Diseases and  Condition</h1>
    <div id="navcontainer">
<ul>
<li id="cancer" class="active">Cancer</li>
<li id="hiv">HIV/AIDS</li>
<li id="malaria">Malaria</li>
<li id="heart">Heart Diseases</li>
<li id="swine">Swine flu</li>
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
</style>
 <div class="diseases1" id="cancerpage">
    <h2 align="left" style="background-color:#fff;">Cancer </h2>
   
     <img src="cancer.jpg" alt="Smiley face" height="22%" width="100%"> 
     
    <!----THIS IS DIVISION FOR TYPES OF -->
    <div class="diseases2">
    <H2> Types of Cancer</H2><br>
    <p>The following are the 10 most commonly diagnosed cancer types in 2009 and the estimated number of cancer patients affected by each:</p> <br>
    <ul>
    <li>Non-melanoma skin cancer</li>
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
    <H4	> Danger Signals </H4>
    
    <p><b> A PERSISTENT SORE </b> especially if it is in the mouth, on the lip or on tongue. Long standing sores due to smoking, sharp edge of teeth, or dental plates that do not fit, can develop into cancer if not taken care of .Common 'Cold Sore' disappears after a few days - Cancer does not. If any such sore persists more than a few days, see your doctor.</p>
<p><b> LUMPS OR MASSES</b> which appear where none were present previously should arouse suspicion of cancer. This is especially true in the case of women and is the most readily cured if treated early.</p>
 
 <p><b> UNEXPLAINED OR ABNORMAL BLEEDING FROM ANY BODY OPENING</b> should be quickly investigated by a physician. Coughing up or vomiting blood, passing blood in the urine and rectal bleeding are common symptoms of cancer. In women the first sign of cancer of the uterus is often a bloody discharge occurring between menstrual periods or after menopause.</p>
 
 <p><b>UNEXPLAINED LOSS OF WEIGHT</b> may be due to many things but may also be due to hidden cancer. </p>
    </div>
    
    <div class="diseases4">
    <H2> DISEASES TOPIC</H2><br>
    <h3> What is Cancer? </h3>
    <p>In simple terms, cancer is an abnormal growth of body cells. Each one of us is born with a potential for cancer. One cannot "Catch" it as one would an infection or a cold. When the programming of a cell or a group of cells is affected, growth may become uncontrolled. Some of the factors that can alter the code are chronic irritation, tobacco, smoke and dust, radioactive substances, age, sex, race and heredity. While one cannot control many of these factors , we need to be aware of the ones we can control of. Prevention is definitely better than treatment of cancer.</p><br>
    <h4>What is the difference between normal and malignant cells?</h4>
    <p>Normal cells grow in a well regulated pattern. When cancer sets in, a group of cells suddenly starts multiplying in a haphazard and uncontrolled way, forming lumps or tumors. a malignant tumor never stops growing and can spread to other parts of the body.  </p>
    </div>
    
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases5">
    <H2> HELPS CENTER</H2>
    
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
    <div class="comments"> <h2>comments</h2>
    <?php $use_table_5='caancer';?>
     <form method="post" action="comment.php">
     
    <input type="hidden" name="username" value="<?php echo $username;?>">
    <input type="hidden" name="usetable" value="<?php echo $use_table_5;?>">
    <textarea style="width:100%; height:10%;" name="yourcomment">
    
    <?php echo $use_table_5;?>
    </textarea>
    <button type="submit">Submit</button>
    </form>
   
    
    <?php
      
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
    <h2 align="left" style="background-color:#fff;">hiv </h2>
     <img src="cancer.jpg" alt="Smiley face" height="22%" width="100%"> 
    <!----THIS IS DIVISION FOR TYPES OF -->
    <div class="diseases2">
    <H2> INSERT TYPE OF DISEASES</H2>
    <p>HIV is a highly variable virus which mutates very readily. This means there are many different strains of HIV, even within the body of a single infected person.

Based on genetic similarities, the numerous virus strains may be classified into types, groups and subtypes. </p>
<img src="subtypes.jpg" height = "30%" width = "80%">
<h4> What is the difference between HIV-1 and HIV-2?</h4>
<p>There are two types of HIV: HIV-1 and HIV-2. Both types are transmitted by sexual contact, through blood, and from mother to child, and they appear to cause clinically indistinguishable AIDS. However, it seems that HIV-2 is less easily transmitted, and the period between initial infection and illness is longer in the case of HIV-2.

Worldwide, the predominant virus is HIV-1, and generally when people refer to HIV without specifying the type of virus they will be referring to HIV-1. The relatively uncommon HIV-2 type is concentrated in West Africa and is rarely found elsewhere.
</p>

    </div>
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases3">
    <H2> Danger Signals </H2>
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
    <H2> DISEASES TOPIC</H2><br>
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
    <H2> HELPS CENTER</H2>
   <p><b>All Awareness Centre & Rajkamal Experimental Theatre</b>
12 Nishant Shopping Centre
Seven Banglow
Andheri (W)
Mumbai 400053
Tel: 26707921
Fax: 26343381
Category: HIV/AIDS</p><br>
<p><b>Archdiocesan Commission for Life</b>
Our Select 3rd Floor,
B-7 Manuel Gonsalves Road
Bandra (W)
Mumbai 400050
Tel: 22021093, 22021193, 22021293
Category: HIV/AIDS
</p><br>
<p> <b>Asha Dham</b>
Missionaries of Charity
Asha Daan
Sankli Street
Byculla
Mumbai - 400008
Karmayogi: Sister Yvone
Tel: 23093591
Notes: Medical treatment, food facilities & accommodation for dying destitutes and handicapped destitute children. Has four branches at Vile Parle, Santacruz, Byculla and New Bombay.</p><br>
<p><b>Anjuman-E-Mufidul Yatama</b>
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
<p><b>Blood Donor Organisation Association</b>
8/115 Parieshwar Hsg. Soc
Vile Parle
Mumbai 400057
Tel: 26347003
Category: HIV/AIDS</p>


    </div>
    <?php $use_table_4='hiv'; ?>
     <form method="post" action="comment.php">
     
    <input type="hidden" name="username" value="<?php echo $username;?>">
    <input type="hidden" name="usetable" value="<?php echo $use_table_4;?>">
    <textarea style="width:100%; height:10%;" name="yourcomment">
    
    <?php echo $use_table_5;?>
    </textarea>
    <button type="submit">Submit</button>
    </form>
   
        <div class="comments"> <h2> Comments</h2>
    
    <?php
      
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
    <h2 align="left" style="background-color:#fff;">Malaria</h2>
     <img src="cancer.jpg" alt="Smiley face" height="22%" width="100%"> 
    <!----THIS IS DIVISION FOR TYPES OF -->
    <div class="diseases2">
    <H2> INSERT TYPE OF DISEASES</H2>
    <p> Types of malaria </p> <br>

<p>There are 4 types of malaria that infect humans:</p>

   <ol><li> Plasmodium vivax, abbreviated as P.v.</li>
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
    <H2> Danger Signals </H2>
    <p> What are the signs and symptoms of malaria? </p>
    <p><b>Symptoms of malaria</b> include fever and flu-like illness, including shaking chills, headache, muscle aches, and tiredness. Nausea, vomiting, and diarrhea may also occur. Malaria may cause anemia and jaundice (yellow coloring of the skin and eyes) because of the loss of red blood cells. If not promptly treated, the infection can become severe and may cause kidney failure, seizures, mental confusion, coma, and death.</p>
    <p> How soon will a person feel sick after being bitten by an infected mosquito? </p>
    <p>For most people, symptoms begin <b>10 days to 4 weeks</b> after infection,Two kinds of malaria, P. vivax and P. ovale, can occur again (relapsing malaria). In P. vivax and P. ovale infections, some parasites can remain dormant in the liver for several months up to about 4 years after a person is bitten by an infected mosquito. When these parasites come out of hibernation and begin invading red blood cells ("relapse"), the person will become sick.</p>
    
    
   
    </div>
    
    <div class="diseases4">
    <H2> DISEASES TOPIC</H2>
  <p>  What is malaria?</p>
  <p>Malaria is a serious and sometimes fatal disease caused by a parasite that commonly infects a certain type of mosquito which feeds on humans. People who get malaria are typically very sick with high fevers, shaking chills, and flu-like illness. Four kinds of malaria parasites infect humans: Plasmodium falciparum, P. vivax, P. ovale, and P. malariae. In addition, P. knowlesi, a type of malaria that naturally infects macaques in Southeast Asia, also infects humans, causing malaria that is transmitted from animal to human ("zoonotic" malaria). P. falciparum is the type of malaria that is most likely to result in severe infections and if not promptly treated, may lead to death. Although malaria can be a dseadly disease, illness and death from malaria can usually be prevented.</p>
  <p>Globally, the World Health Organization estimates that in 2013, <b>198 million clinical cases of malaria occurred</b>, and 500,000 people died of malaria, most of them children in Africa. Because malaria causes so much illness and death, the disease is a great drain on many national economies. Since many countries with malaria are
already among the poorer nations, the disease maintains a vicious
cycle of disease and poverty.</p>

<p> How is malaria transmitted? </p>
<p>Usually, people get malaria by being bitten by an infective female <i>Anopheles mosquito</i>. Only Anopheles mosquitoes can transmit malaria and they must have been infected through a previous blood meal taken from an infected person. When a mosquito bites an infected person, a small amount of blood is taken in which contains microscopic malaria parasites. About 1 week later, when the mosquito takes its next blood meal, these parasites mix with the mosquito's saliva and are injected into the person being bitten.</p>
<p>Because the malaria parasite is found in red blood cells of an infected person, malaria can also be transmitted through blood transfusion, organ transplant, or the shared use of needles or syringes contaminated with blood. Malaria may also be transmitted from a mother to her unborn infant before or during delivery ("congenital" malaria).</p>
    </div>
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases5">
    <H2> HELPS CENTER</H2>
      <br> <p> Charitable trust for malaria patients in Mumbai </p>
    
    <br> <p> Malariasite - Child care Foundation </p>
    <p> Office No 5,1 st Floor, Malhotra House W H Marg Mumbai </p>
    <p>Tel: 27709100 , 9987242102, 022-27709100 </p>
    
    <br> <p> Govindraj Maharaj Dharamshala Trust </p>
    <p> 1/73 Sant Gadge Maharaj Lane Dadasaheb Phalke Road Mumbai </p>
    <p> Tel: 26454590 , 022-26427464 </p>	
    
    <br> <p> International Showays Self Treat Centre </p>
    <p> 414/D 42, Mauli Society Sector 4, Road No 39 Mumbai  </p>
    <p> Tel: 24121680 , 022-24121680 </p>
    
    <br> <p> Malaria Patients Aid Association - MPAA </p>
    <p> Shop No 27, Centurion Mall Seawood East Navi Mumbai </p>
    <p> Tel: 9324837572 , 9324837572, 022-28687354 </P>
    
    <br> <p> Aman ki asha Relief And Care Trust </p>
    <p> Office No 9, Kondaji Chawl No 3 Jerbai Wadia Road Mumbai  </p>
    <p>  Tel: 24125848 , 022-24125848 </p>
    </div>
    
        <div class="comments"> <h2> Comments</h2>
    
    <?php $use_table_3='malaria'; ?>
     <form method="post" action="comment.php">
     
    <input type="hidden" name="username" value="<?php echo $username;?>">
    <input type="hidden" name="usetable" value="<?php echo $use_table_3;?>">
    <textarea style="width:100%; height:10%;" name="yourcomment">
    
    </textarea>
    <button type="submit">Submit</button>
    </form>
   
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
    <h2 align="left" style="background-color:#fff;">Swine </h2>
     <img src="cancer.jpg" alt="Smiley face" height="22%" width="100%"> 
    <!----THIS IS DIVISION FOR TYPES OF -->
    <div class="diseases2">
    <H2> INSERT TYPE OF DISEASES</H2><br>
    <p> <b>Swine influenza (swine flu)</b> is a respiratory disease of pigs caused by type A influenza viruses that regularly cause outbreaks of influenza in pigs. Influenza viruses that commonly circulate in swine are called “swine influenza viruses” or “swine flu viruses.” Like human influenza viruses, there are different subtypes and strains of swine influenza viruses. The main swine influenza viruses circulating in U.S. pigs in recent years are: 
   <br> <ul> <br>
    <li> swine triple reassortant (tr) H1N1 influenza virus </li>
    <li> trH3N2 virus </li>
<li>trH1N2 virus</li>
</ul> </p><br>

<p>Swine flu viruses do not normally infect humans. However, sporadic human infections with swine influenza viruses have occurred. When this happens, these viruses are called “variant viruses.” They also can be denoted by adding the letter “v” to the end of the virus subtype designation. Human infections with H1N1v, H3N2v and H1N2v viruses have been detected all over the world.</p>
    
    </div>
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases3">
    <H2> Danger Signals </H2>
  <h4>  People who have been infected with variant viruses have had symptoms similar to the symptoms of regular human seasonal influenza.</h4>
  <ul>
  <li>fever</li><li> lethargy</li> <li>  lack of appetite and coughing</li> <li> runny nose</li>  <li> sore throat</li> <li> eye irritation</li> <li>  nausea</li>  <li> vomiting </li> <li>  diarrhea.</li>  </ul>
    </div>
    
    <div class="diseases4">
    <H2> DISEASES TOPIC</H2>
    
  <p> <b> Why are human infections with variant viruses of concern?</b></p>
  <p> Influenza viruses that infect pigs may be different from human influenza viruses. Thus, influenza vaccines made against human influenza viruses are generally not expected to protect people from influenza viruses that normally circulate in pigs. In addition, because pigs are susceptible to avian, human and swine influenza viruses, they potentially may be infected with influenza viruses from different species (e.g., ducks and humans) at the same time. If this happens, it is possible for the genes of these viruses to mix and create a new virus that could spread easily from person-to-person. This type of major change in the influenza A viruses is known as antigenic shift. Antigenic shift results when a new influenza A virus to which most people have little or no immune protection infects humans. If this new virus causes illness in people and can be transmitted easily from person-to-person, an influenza pandemic can occur. This is what happened in 2009 when an influenza A H1N1 virus with swine, avian and human genes emerged in the spring of 2009 and caused the first pandemic in more than 40 years.</p>
  <p><b>Can people catch swine flu/variant flu from eating pork?</b>
  </p>
  <p>Swine influenza has not been shown to be transmissible to people through eating properly handled and prepared pork (pig meat) or other products derived from pigs.
  </p>
  <p><b>How are variant influenza viruses spread?</b> </p>
  <p> Influenza viruses can be directly transmitted from pigs to people and from people to pigs. When a human is infected with a flu virus that normally circulates in pigs, this virus is called a “variant virus” because it is different from seasonal influenza viruses. These infections have been most likely to occur when people are in close proximity to infected pigs, such as in pig barns and livestock exhibits housing pigs at fairs. This is thought to happen mainly when an infected pig coughs or sneezes and droplets with influenza virus in them spread through the air. If these droplets land in your nose or mouth, or are inhaled, you can be infected.</p>
    </div>
    <!----THIS IS DIVISION FOR PROGRAMSSSSS -->
    <div class="diseases5">
    <H2> HELPS CENTER</H2>
      <br> <p> Charitable trust for swine patients in Mumbai </p>
    
    <br> <p> Swine Aid & Research Foundation </p>
    <p> Shop No 27, Centurion Mall Seawood East Navi Mumbai </p>
    <p>Tel: 27709100 , 9987242102, 022-27709100 </p>
    
    <br> <p> Nowrojbhai Dharamshala Trust </p>
    <p> 1/73 Sant Gadge Maharaj Lane Dadasaheb Phalke Road Mumbai </p>
    <p> Tel: 26454590 , 022-26427464 </p>	
    
    <br> <p> International Showays Self Treat Centre </p>
    <p> 414/D 42, Mauli Society Sector 4, Road No 39 Mumbai  </p>
    <p> Tel: 24121680 , 022-24121680 </p>
    
    <br> <p> Swine Association and Co-orpate limited </p>
    <p> Office No 5,1 st Floor, Malhotra House W H Marg Mumbai  </p>
    <p> Tel: 9324837572 , 9324837572, 022-28687354 </P>
    
    <br> <p> Swine Relief And Care Trust </p>
    <p> Office No 9, Kondaji Chawl No 3 Jerbai Wadia Road Mumbai  </p>
    <p>  Tel: 24125848 , 022-24125848 </p>
    </div>
        <div class="comments"> <h2> COmments</h2>
    
    <?php $use_table_5='swine'; ?>
     <form method="post" action="comment.php">
     
    <input type="hidden" name="username" value="<?php echo $username;?>">
    <input type="hidden" name="usetable" value="<?php echo $use_table_5;?>">
    <textarea style="width:100%; height:10%;" name="yourcomment">
    
    </textarea>
    <button type="submit">Submit</button>
    </form>
   
    
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
    <h2 align="left" style="background-color:#fff;">Heart Diseases </h2>
       <img src="cancer.jpg" alt="Smiley face" height="22%" width="100%"> 
    <!----THIS IS DIVISION FOR TYPES OF -->
    <div class="diseases2">
    <H2> TYPE OF HEART DISEASES</H2><br>
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
    <H2> Danger Signals </H2> 
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
    <H2> DISEASES TOPIC</H2>
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
    <H2> HELPS CENTER</H2>
    List of Organisations helping Heart disease patient.
    <p> <b> bhi - Bombay Heart Institute</b>
 31, Reva Chambers 5th Floor
 Behind Income Tax Office
 .,Churchgate
 Mumbai - 400020.
 Maharashtra
 Karmayogi : Devendra Joshi
 Tel : 022- 22014173  (4pm-6pm)
</p>

<p> <b>ForumHealth - Forum For Health Awareness</b>
 2, Shriji Kripa,
 Near Reliance Energy
 6th Road, Prabhat Colony,Santacruz (E)
 Mumbai - 400055.
 Maharashtra
 Karmayogi : Hariram Chaudhary
 Tel : 022- 9322902734  (8 a.m. to 1 p.m) </p>
 
 <p> <b>HBNC - Honey Bees Nature Cure</b>
 Bldg. No.3, Room No.5, Air India Colony
 Kalina
 Air India Road,Santacruz (E)
 Mumbai - 400029.
 Maharashtra
 Karmayogi : Laxman Bhilare
 Tel : 022- 6157909  (10-5) 
    </p>
    <p> <b> hyattcare - Hyatt Care </b>
 G-Sector, B Line , Room No. 9
 Behind Madina Hotel
 Cheeta Camp,Trombay
 Mumbai - 400088.
 Maharashtra
 Karmayogi : Mr. Karim
 Tel : 022- 64163270  (10am-10pm) </p>
 
 <p> <b> ipcfound - IPC Foundation (Inst of Preventive Cardiology)</b>
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
      <>
      
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
 
  <section id="gallery" style="margin-top:70%;">
  <hr>
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
    <img src="assets/images/f2.jpg" alt="">
  </div>
<div class="grow pic">
    <img src="assets/images/g3.jpg" alt="">
  </div>
<div class="grow pic">
    <img src="assets/images/f2.jpg" alt="">
  </div>
<div class="grow pic">
    <img src="assets/images/f2.jpg" alt="">
  </div>
<div class="grow pic">
    <img src="assets/images/f2.jpg" alt="">
  </div>
<div class="grow pic">
    <img src="assets/images/f2.jpg" alt="">
  </div>


    
    <hr>
   </section>
  <section id="contact">
    <h1 class="title">Contact Me</h1>
    <div class="row">
      <div class="twelve columns">
        <iframe width="940" height="225" class="map" src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=701+first+ave+sunnyvale+ca&amp;aq=&amp;ie=UTF8&amp;hq=&amp;t=m&amp;z=14&amp;iwloc=near&amp;output=embed&amp;hq=&amp;hnear=701+1st+Ave,+Sunnyvale,+California+94089"></iframe>
      </div>
    </div>
    <div class="row">
      <div class="six columns">
        <h4>Email Me</h4>
        <p>Use the below contact form or email me at <a href="mailto:example@example.com">emai@example.com</a>.</p>
        <br>
        <div class="done"> 
          <h4>Thank You !</h4>
          I have received your message. 
        </div>
        <form method="post" action="process.php" class="form">
          <table>
            <tr class="element">
              <td><label>Name</label></td>
              <td class="input"><input type="text" name="name" /></td>
            </tr>
            <tr class="element">
              <td><label>Email</label></td>
              <td class="input"><input type="text" name="email" /></td>
            </tr>
            <tr class="element">
              <td><label>Website</label></td>
              <td class="input"><input type="text" name="website" /></td>
            </tr>
            <tr class="element">
              <td><label>Message</label></td>
              <td class="input"><textarea name="comment" class="text textarea" ></textarea></td>
            </tr>
          </table>
          <div class="element">
            <div class="clearfix"></div>
            <input type="submit" id="submit" value="Submit"/>
            <div class="loading"></div>
          </div>
          <div class="error"> </div>
        </form>
      </div>
      <div class="six columns">
        <h4>Office</h4>
        My Awesome Company<br>
        Old Street 12, Near Some Company<br>
        New Heavens, Old York 454545
        <h4>Call Me</h4>
        +1 (111) 222 3333<br>
        +1 (222) 333 4444 </div>
    </div>
    <hr>
  </section>
  
  <!--DONATE-->
  <section id="donate">
	      <h1 class="title">DONATE</h1>

    <div class="form_bg">
	<div class="wrap">
			<div class="donate-box">
				<h2>Invest in a future free of Salvery</h2>
				<p>Fuel the fight against human trafficking year-round by selecting to donate monthly below.</p><br>
				<h4>Select an Amount</h4>
				
				<div class="d-video">
						<h3 style="color:#EB3333;font-family: fantasy;font-size: 20px;">Why You Donate</h3>
						<video id="video1" width="400" height="250" controls>
						<src="assets/video/donateblood.mp4" type="video/mp4">
						
			
  </video>
				</div>
				
			<form method="post" action="process.php" class="form">
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
 
  
  <footer>
    <p class="left">Copyright © 2012 - All Rights Reserved<br>
	Free Website Template By: <a href="http://www.priteshgupta.com">PriteshGupta.com</a> | <a href="http://www.html5xcss3.com">Html5xcss3.com</a></p>
    <div class="social right"> 
    <a href="#" target="_blank"><img src="assets/images/facebook.png" alt="Facebook" /></a> 
    <a href="#" target="_blank"><img src="assets/images/flickr.png" alt="Flicker" /></a> 
    <a href="#" target="_blank"><img src="assets/images/linkedin.png" alt="Linkedin" /></a> 
    <a href="#" target="_blank"><img src="assets/images/myspace.png" alt="Myspace" /></a> 
    <a href="#" target="_blank"><img src="assets/images/twitter.png" alt="Twitter" /></a> 
    </div>
  </footer>
</div>
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
