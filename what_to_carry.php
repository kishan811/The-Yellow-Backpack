<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
header('location:index.php');
}
?>

<html>
	  <head>
<title> What You Should Carry </title>
          
		  
		  <!--style.css-->
		  <link rel ="stylesheet" type="text/css" href="blog.css">
		  
		   <meta charset="UTF-8">
	
	      <!--normalise.css-->
		  <link rel="stylesheet" type="text/css" href="normalise.css">
		  
		  <!--searchbar-->
	      <link rel="stylesheet" type="text/css" href="search.css">
              <!--style.css-->
	<link rel="stylesheet" type="text/css" href="hompagestyle.css">
	
	
	<!--meta description-->
	<meta name="travel blog" content="a minimal website for travellers.">
	
	
	       
	       
		  <!--[if IE]>
     <script
     src="http://html5shim.googlecode.com/svn/trunk/html5.js">
     </script
	      <1[end if]-->  
     
	 </head>
	
	 <body>
		 <!--navigation-bar -->
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
       <header>
	   <h1 id="ybook">The Yellow Backpack</h1>
	   </header>
	  
	  <div id="container1">
	  
		   	<article>
		            <section class="post-head">
			        <h2><center>What do I CARRY???<center></h2>
						<small>Posted on <time datetime="2017-04-07"> 7 April 2017</time></small> </center> </section>
						
					
			  
			  
			        <section class="post-body">
			        <ol> 
                                     <li>A big rucksack or duffel bag, and a small backpack for day trips</li>
						<br><br>
                     	             <li>A mix of summer & winter clothes that can be worn in layers. Temperatures can vary greatly within the span of a few hours</li>
						<br><br>
                                     <li>A good pair of walking shoes</li>
						<br><br>
                                     <li>A wind & waterproof jacket</li>
						<br><br>
                                     <li>long-sleeved shirts and pants</li>
						<br><br>
                                     <li>Water bottle for day hikes</li>
						<br><br>
                                     <li>Sunglasses, sunhat, sunscreen – essential in the desert heat of Spiti</li>
						<br><br>
                                     <li>Books to read, stationery to paint & draw</li>
						<br><br>
                                     <li>Binoculars for animal watching</li>
						<br><br>
                                     <li>Cosmetics you need</li>
						<br><br>
                                     <li>Prescribed medicines, if any</li>
						<br><br>
                                     <li>Flash light</li>
						<br><br>
                                     <li>Camera & batteries / charger</li>

						</ol>     
			  </section>
			       
			      <section class="post-foot">
					  <p style="text-align:right"><a href="spiti_places.html"><strong style="color:yellow ; display:inline-block;">Next</strong></a></p>
                              </section>
 		    
		  
		 	   
	  </div>
	
	      <footer>
		        <p><strong >Copyright &copy; 2017 theyellowbagpack .</strong> All right reseved </p>
		  </footer>
	   <!--#container-->
				
	 <br>
	
 
</body>	
   					
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
    </html>   