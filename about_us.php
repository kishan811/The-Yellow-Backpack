<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
header('location:index.php');
}
?>

<html>
	  <head>
<title> About Makers</title>
          
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
    <style>
        .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
    transition: 0.3s;
    width: 40%;
    border-radius: 5px;
            
            
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
      



img {
    border-radius: 5px 5px 0 0;
}

.container {
    padding: 20px 16px;
}
        .right {
    float: right;
    width: 300px;
            background-color:azure;
    border: 4px solid #73AD21;
    padding: 6px;
}
        
        
    </style>
	
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
  <li> <form id="srch">
               <input type="text" placeholder="Search..." required>
               <input type="button" value="Search">
</form></li>
</ul>
</header>
		 
       <header>
	   <h1 id="ybook">The Yellow Backpack</h1>
	   </header>
	  
	  <div id="container">
	  
		   	<article>
		            <section class="post-head">
			        <h2><center>ABOUT US<center></h2>
			        <small>IT WILL BE A PLEASURE TO INTERACT WITH   <time datetime="2017-04-07"> YOU</time></small>
			  </section>
			  
			        <section class="post-body">
                      
                                    
  
                          <div class="right">
                            <h2>About Yellow Backpack</h2>
  <p>The Yellow Backpack is a website furnishing the user with a travel itinerary of the places that the team has visited or has relevant information about. All the details of the project which are mandatory to know, can be deemed through the stated heads and the upcoming chapters as follows.
</p>
</div>

  
                        
                        <div class="card ">
  <img src="img/kiss.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Kishan Shankar Singhal</b></h4> 
    <p>Designer, Web Developer</p> 
  </div>
</div> 
                                                                   <div class="right">
    <h2>Why Yellow Backpack</h2>
    
  <p>As travelers took planning into their own hands, their hands got pretty full, and their lives got pretty frantic. Yellow Book set out to change all that. 
To bring calm to the chaos, Peace of mind to the panic. 
And so the spoon-feeding travel organizing app was born.</p>
</div>
                                      

			        <ol> 
                        
                        <div class="card ">
                            <img src="img/apa.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Aparna Rathore</b></h4> 
    <p>Web Developer, Content Writer</p> 
  </div>
</div> 
     
    
			  </section>
                        <div>
                            <br>
                            <pre> ... </pre>
                        </div>
			       
			      <section class="post-foot">
                                  <p style="text-align: left"><a href="what_to_carry.html"><strong style="color:yellow ; display:inline-block;" >Back</strong></a>
			          <p style="text-align:right"><a href="where_to_go.html"><strong style="color:yellow ; display:inline-block;" >Next</strong></a></p>
                                 	  
			      </section>
 		    
		       </article>
		  
		  	   
	  </div>
	
	      <footer>
		        <p><strong>Copyright &copy; 2018 TheYellowBagPack .</strong> All rights reserved </p>
		  </footer>
	   <!--#container-->
     
	   <br>
						
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
						
</body>	
   
    </html>   