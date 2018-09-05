<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
header('location:index.php');
}
?>

<html>
	  <head>
<title> Blog page </title>

		   <!--customstyle.css-->
		  <link rel ="stylesheet" type="text/css" href="blog.css">
	       
		   <!--normalise.css-->
	<link rel="stylesheet" type="text/css" href="normalise.css">
		  
        <!--style.css-->
	<link rel="stylesheet" type="text/css" href="hompagestyle.css">
	
	
	<!--meta description-->
	<meta name="travel blog" content="a minimal website for travellers.">
	
	<!--searchbar-->
	<link rel="stylesheet" type="text/css" href="search.css">
	       
		  <!--[if IE]>
     <script
     src="http://html5shim.googlecode.com/svn/trunk/html5.js">
     </script
	      <1[end if]-->  
     
	 </head>
	
	 <body>
         <header>
             <header>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="blog.php">News</a></li>
        <li><a href="contact_us.php">Contact</a></li>
        <li> <a href="what_to_carry.php">What To Carry</a></li>
        <li> <a href="where_to_go.php">Your Destinations</a></li>
        <li> <a href="spiti_places.php">Places where you can stay</a></li>
        <li style="float:right"><a class="active" href="about_us.php">About</a></li>
  <li> <form id="srch">
               <input type="text" placeholder="Search..." required>
               <input type="button" value="Search">
</form></li>
</ul>
</header>
         </header>
		 
       <header>
	   <h1>The Yellow Backpack</h1>
	   </header>
	  
	  <div id="container">
	  
		   	<article>
		            <section class="post-head">
			        <h2><center>FAQs<center></h2>
			        <small>Posted on <time datetime="2017-04-07"> 7 April 2017</time></small>
			  </section>
			  
			        <section class="post-body">
			        <ol> 
                                     <li><strong>How much approx does it cost per day to stay in any of the villages in Spiti Valley & which place did you stay when in Kalpa and the cost for the same?</strong><br>
                                         Each village in Spiti Valley has 1-2 decent hotel/guesthouse. The cost is about Rs.500-700 for these accommodation. I forget the name of hotel where we stayed in Kalpa. But it was the first hotel on the main road, while entering to Kalpa village by bus. Cost was about Rs.700 per night for two person.<br><br></li>
                                     <li><strong>I understand from the post on Kalpa that there are buses availbale from Shimla to Peo, but I didnt understand how to reach kalpa from Peo, does this same bus drop you till Kalpa or do we need to hire a cab to reach Kalpa from Peo, if so what would be the approx cost for the same.?</strong><br>
                                         Generally, the public buses from Shimla goes up to Peo bus stand only. Walk for 300 meters towards the main market. From the main chowk, you will get small buses to Kalpa at every 15-20 minutes. Cost is about Rs.10 per person for Peo to Kalpa.<br><br></li>
                                     <li><strong>Which route is more advisable to travel to Spiti? Should we start from Manali and end in Shimla or should we start from Shimla and end in Manali? Heard starting from Manali can cause AMS issues, can you give your inputs?</strong><br>
                                         If you want to complete the entire circuit, better to go from Shimla side and return back via Manali. No specific reason, however you can relate AMS theory with it.<br><br></li>
                                     <li><strong>Plan is to cover Kalpa,Sangla,Chitkul,Nako,Tabo,Kaza as well as do the Chandratal trek, how many days should we need to cover all these places. As I am on a budget trip, plan is to take only public transport.
</strong><br>
                                         Calculate required time on following basis:<br>
                                         Delhi-Shimla...8-10 hours, overnight<br>
                                         Shimla-Peo-Kalpa...7-8 hours<br>
                                         Kalpa and around....half day<br>
                                         Kalpa-Chitkul-Sangla n back to Kalpa...one day by reserved cab, 2 days by bus<br>
                                         Peo-Nako....4 hours, but once you left the bus, the next one will be on the next day.<br>
                                         Nako-Tabo...5 hours, again once you left the bus, next bus will be on the next day<br>
                                         Stay at Kaza and explore Dhankar, Kye and Kibber Villages...at least two days<br>
                                         Kaza-Chandartal...one day<br>
                                         Chandartal-Manali..one day<br>
                                         Manali-Delhi...overnight<br>
                                         So, it depends on your way of travel. You can increase as well as decrease your pace. But this much of time is required for a comfortable trip.<br>
                                         Have a nice trip.<br>
               	             

                                </ol>     
			  </section>
			       
			      <section class="post-foot">
			         <p style="text-align:left"><a href="where_to_go.html"><strong style="color:yellow ; display:inline-block;" >Back</strong></a> 
					  </p> 
						</section>
 		    
		       </article>
		  
		  >	   
	  </div>
	<div>
     	
	<nav>
		<ul>
		<li> <a href="">about us</a></li>
		<li> <a href="">work for us</a></li>
		<li> <a href="">contact us</a></li>
		<li> <a href="">Terms & conditions</a></li>
		<li> <a href="">Privacy policy</a></li>
		</ul>
	</nav>
</div> 
	      
	   <!--#container-->
       
</body>	
   
    </html>   
