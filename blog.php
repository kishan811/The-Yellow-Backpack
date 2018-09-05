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
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="blog.php">News</a></li>
        <li><a href="contact_us.php">Contact</a></li>
        <li> <a href="what_to_carry.php">What To Carry</a></li>
        <li> <a href="where_to_go.php">Your Destinations</a></li>
        <li> <a href="spiti_places.php">Places where you can stay</a></li>
        <li style="float:right"><a class="active" href="about_us.php">About</a></li>
  
</ul>
</header>
		 
       <header>
	   <h1>The Yellow Book</h1>
	   </header>
	  
	  <div id="container">
	  
		   	<article>
		            <section class="post-head">
			        <h3>Lets backpack for</h3><h2><center>SPITI<center></h2>
			        <small>Posted on <time datetime="2017-04-07"> 7 April 2017</time></small>
			  </section>
			  
			        <section class="post-body">
			        <p>Welcome to the Middle Land of India!<br>
                                   Where your eyes are going to be mesmerized and your soul is going to get inner peace in the hues of cold desert mountain, where the scenic beauty answers your every call; the place is known as <strong>SPITI</strong> <br>
                                   Ever thought of visiting the same place in a cheap and convenient way? Let's hook up...<a href="what_to_carry.html" target="_blank"><strong style="color:yellow ; display:inline-block;"><em>More</em></strong></a>
                                </p>
			  </section>
			       
			      <section class="post-foot">
			         <p style ="color:whitesmoke"> Under Summerlands</p>	  
			      </section>
 		    
		       </article>
		  
		  <article>
		            <section class="post-head">
			        <h2><center>GO GOA GONE...<center></h2>
			        <small>Posted on <time datetime="2017-04-07"> 7 April 2017</time></small>
			  </section>
			  
			        <section class="post-body">
			        <p> If you wanna burn off, have quality time with your friends, love, and family or want a hiatus from excruciating pace of corporate life? <strong>COME & BANG in GOA</strong><br> 
                                    Goa, in India, is synonymous with holidays, fun, beaches, gorgeous girls, cheap booze and rejuvenation.<br> 
                                    But most of us are clueless about how to make the best out of 3 (or 4) day stay?<br>
                                    What are must-visit places, must-try cuisines, the best beaches, cheap yet convenient accommodation and the most efficient mode of transport? Worry not; the Goan Batman is here to help.
                                <a href=""><strong style="color:yellow ; display:inline-block;"><em>More</em></strong></a>
                                </p>
			  </section>
			       
			      <section class="post-foot">
			         <p style ="color:whitesmoke"> Under Summerlands</p>	  
			      </section>
 		    
		       </article>

		  
		  <article>
		            <section class="post-head">
			        <h3>Lets backpack for</h3><h2><center>SPITI<center></h2>
			        <small>Posted on <time datetime="2017-04-07"> 7 April 2017</time></small>
			  </section>
			  
			        <section class="post-body">
			        <p>Welcome to the Middle Land of India!<br>
                                   Where your eyes are going to be mesmerized and your soul is going to get inner peace in the hues of cold desert mountain, where the scenic beauty answers your every call; the place is known as <strong>SPITI</strong> <br>
                                   Ever thought of visiting the same place in a cheap and convenient way? Let's hook up...<a href="#"><strong style="color:yellow ; display:inline-block;"><em>More</em></strong></a>
                                </p>
			  </section>
			       
			      <section class="post-foot">
			         <p style ="color:whitesmoke"> Under Summerlands</p>	  
			      </section>
 		    
		       </article>	   
	  </div>
	
	    <div class="footer">
  <p><strong>Copyright &copy; 2018 TheYellowBagPack .</strong> All rights reserved </p>
	<nav>
		<ul>
		<li> <a href="about_us.html">About us</a></li>
		<li> <a href="contact_us.html">contact us</a></li>
		<li> <a href="">Terms & conditions</a></li>
		<li> <a href="">Privacy policy</a></li>
		</ul>
	</nav>
</div>
	   <!--#container-->
 
</body>	
   
    </html>   
