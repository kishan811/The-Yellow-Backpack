<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
header('location:index.php');
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <title>the yellowbagpack</title>
        <head>

  <meta charset="UTF-8">
	
	<!--normalise.css-->
	<link rel="stylesheet" type="text/css" href="normalise.css">
	
	<!--style.css-->
	<link rel="stylesheet" type="text/css" href="hompagestyle.css">
	
	
	<!--meta description-->
	<meta name="travel blog" content="a minimal website for travellers.">
	
	<!--searchbar-->
	<link rel="stylesheet" type="text/css" href="search.css">
	
        
 
	
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<!--bootstrap-->
	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
	
	<!--jquery UI CSS -->
	<link href="js/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">
		  
	<!--(include all compiled plugin)-->
	
	<script src="js/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.js"><\/script>');</script>
        <script src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>	

	<script src="js/script.js"></script>
        
        
        <header>
    <ul>
   
  <li><a href="index.php">Home</a></li>
  <li><a href="blog.php">News</a></li>
  <li><a href="contact_us.php">Contact</a></li>
        <li> <a href="what_to_carry.php">What To Carry</a></li>
        <li> <a href="where_to_go.php">Your Destinations</a></li>
        <li> <a href="spiti_places.php">Places where you can stay</a></li>
  <li style="float:right"><a class="active" href="about_us.php">About</a></li>
 

		
		<li style="float:right; background-color: #0099cc;"><a href="#login-box" class="login-window">Login</a>
        
        <div id="login-box" class="login-popup">
        <a href="index.php" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
        <form method="post" class="signin" action="login_submit.php">
                <fieldset class="textbox">
            	<label class="username">
                <span>Username or email</span>
                <input id="username" name="email" value="" type="text" autocomplete="on" placeholder="Email">
                </label>
                
                <label class="password">
                <span>Password</span>
                <input id="password" name="password" value="" type="password" placeholder="Password">
                </label>
                
                    <!--<button class="submit button" type="button">Sign in</button>-->
                    <input type="submit" name=" Sign in " class="submit button" class="btn btn-primary">

                <!--    <script>
                        function myFunction() {
                            window.open("https://www.w3schools.com");
                    }
</script>  -->
                
                <p>
                <a class="forgot" href="#">Forgot your password?</a>
                </p>
                
                </fieldset>
          </form>
		</div>
    
    </li>   

			
  <!-- <li style="float:right"><a class="active" href="subscribe.php">SignUp</a></li>
  <li> <form class="search">
               <input type="text" placeholder="Search..." required>
               <input type="button" value="Search">
	   
</form></li>  -->

<li style="float:right"><a class="active" href="subscribe.php">SignUp</a></li>
  <li> <form method="get" action="http://www.google.com/search">
               <input type="text" placeholder="Search..." required name="q" size="1000" maxlength="255" value="">
               <input type="submit" value="Search" />
	  
</form></li>
</ul>
</header>
        
        <div class="box">   
 <!-- Header -->
 <header class="w3-container w3-center w3-padding-48 w3-white">
  <h1 class="w3-xxxlarge"><b id="tyb">THE YELLOW BACKPACK</b></h1>
  <h6> <span class="w3-tag"> TRAVEL WITH US</span></h6>
</header>  
</div>
        
        <br><br>
    
    <!-- Automatic Slideshow Images -->
    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <a href="spiti_faqs.php"><img src="img/IMG_1346.jpg" style="width:100%"></a>
  <div class="text" >Rohtang Pass</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/DSC_0052.jpg" style="width:100%">
  <div class="text">Kalangute Beach Goa</div>
</div>

		<div class="mySlides fade">
  <div class="numbertext">3/ 3</div>
  <img src="img/chandrataal.jpg" style="width:100%">
			
  <div class="text">Chandrataal Lake</div>
</div>
		
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<div style="color:#1a71b8;background-color:#282E34;text-align:center;padding:25px 50px;text-align: center; text-shadow: 0 1px 2px rgba(0,0,0,0.6); font-size:30px;">
 
	<h3  ><strong>Travel inspiration</strong>
 </h3>
	
	 <p>“For my part, I travel not to go anywhere, but to go. I travel for travel’s sake. The great affair is to move.”</p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent; font-size:45px; color:black ;text-shadow: 0 1px 2px rgba(0,0,0,0.6);">Ready for your trip</span>
	  <p style="font-size:25px;"><em><strong>“We travel, some of us forever, to seek other places, other lives, other souls.”</em></strong></p>
  </div>
</div>


<div style="color:#ddd;background-color:#282E34;text-align:center;padding:30px 80px;text-align: Center;text-shadow: 0 1px 2px rgba(0,0,0,0.6);font-size:25px;">
    <a href="cold_places.html"><h5>WINTERLAND</h5></a>
    <p>A place to cool down all the chills</p>
  </div>


<div class="bgimg-3">
  
</div>
  <div style="color:#ddd;
	background-color:#282E34;
    text-align:center;
    padding:50px 80px;
	text-align: justify;
	font-family: helvetica, serif;">
      <a href="hot_places.html"><h2>SUMMERLAND</h2></a>
	<p>Summerland is the term mostly synonymous with the Wiccan afterlife. While some non-Wiccan neopagans may hold the Summerland to be their afterlife, the majority of Neopagans who believe in the Summerland are Wiccan. All people, except spirits who remain behind lost and wandering, go to the Summerland, even the wicked. The Summerland will be different for everyone, their own version of Shangri-La. There, they can be reunited with their loved ones, look over those they left behind on Earth, and take time to recuperate from life. Our time in the Summerland is spent processing what we learned, recovering from the hardships, walking with the Lord and Lady and being one with them, and then planning our next life.</p>
  </div>






<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent; font-size:40px; color:black ;text-shadow: 0 1px 2px rgba(0,0,0,0.6);"> DIVE IN</span>
  </div>
</div>




<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify; font-family: helvetica, serif;">
      <h2> WHY YOU SHOULD TRAVEL</h2>
    <p>We believe that traveling around the world shouldn’t be hard: it’s actually something everyone should be able to do at least once in their lives. Whether you choose to spend a few years or just a couple months traveling this beautiful planet, it’s important to see what’s out there. It’s up to you to make the dream come true and take the first step. Launch TripPlanner to piece together and price your ideal route. Not sure where to start?  You can always call one of our travel consultants and get some complimentary advice!</p>
  </div>
</div>
<div class="bgimg-1">
  <div class="caption">
    <span class="border">LETS START TRAVELLING</span>
  </div>
</div>
	
	
	
	
<div class="footer">
   <p><strong> Copyright &copy; 2018 TheYellowBagPack .</strong> All rights reserved </p>
	<nav>
		<ul>
		<li> <a href="about_us.php">About us</a></li>
                <li> <a href="contact_us.php">Contact us</a></li>
		<li> <a href="">Terms & conditions</a></li>
		<li> <a href="">Privacy policy</a></li>
                <li> <a href="logout.php">Logout</a></li>
                <li> <a href="chatbox.php">Add more info...</a></li>
		</ul>
	</nav>
</div>
   
        
    </body>
</html>
