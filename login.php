
<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
header('location:index.php');
}
?>



<html>
	  <head>
<title> Contact us</title>
          
		  <!--customstyle.css-->
		  <link rel ="stylesheet" type="text/css" href="blog.css">
	        
		  <!--normalise.css-->
	<link rel="stylesheet" type="text/css" href="normalise.css">
		  
		  
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
</ul>
</header>
		 
       <header>
	   <h1 id="ybook">The Yellow Backpack</h1>
	   </header>
	  
	  <div id="container">
	  
		   	<article>
		            <section class="post-head">
			        <h2><center>Welcome Admin<center></h2>
<!--			        <small>IT WILL BE A PLEASURE TO INTERACT WITH     <time datetime="2017-04-07"> YOU</time></small>-->
			  </section>
			
		<li style="float:right; background-color: #0099cc;"><a href="#login-box" class="login-window">Login</a>
        
        <div id="login-box" class="login-popup">
        <a href="index.php" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
        <form method="post" class="signin" action="login_submit.php">
                <fieldset class="textbox">
            	<label class="username">
                <span>Username or email</span>
                <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Username">
                </label>
                
                <label class="password">
                <span>Password</span>
                <input id="password" name="password" value="" type="password" placeholder="Password">
                </label>
                
                    <!--<button class="submit button" type="button">Sign in</button>-->
                    <button class="submit button" class="btn btn-primary">Sign in</button>

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
                </li>  </div>
	
 
</div>

			        <ol> 
                                    

<div >
  
  </div>   
                          
<div>
    
  
</div>

<div >
 
  </div>
  
    
			  </section>
                        <div>
                            <br>
                            <pre> ... </pre>
                        </div>
			       
			      
		       </article>
		  
		  	   
	  </div>
	
	      <footer>
		        <p><strong>Copyright &copy; 2018 TheYellowBagPack .</strong> All rights reserved </p>
		  </footer>
	   <!--#container-->
     
	   <br>
<!--
	   <footer>				
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
           </footer>	
-->
						
</body>	
   
    </html>   