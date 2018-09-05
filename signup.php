<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
header('location:index.php');
}
?>
<html>
    <head>
     <link href="style1.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
   <script type="text/javascript" src='bootstrap/js/jquery-3.2.1.min'></script>
   <script type="text/javascript" src='bootstrap/js/bootstrap.min.js'></script>
   
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
	   <h1 id="ybook">The Yellow BackPack</h1>
	   </header>
        
        <div class="spacing">
        <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <h2>SIGN UP</h2>
            <form action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div>
                            <div class="form-group">
                                 <input type="password" class="form-control" id="password" name="password" placeholder="password" required = "true" pattern=".{6,}">
                            </div>
                              <div class="form-group">
                                <input type="number" class="form-control" id="contact" name="contact" placeholder="Contact">
                            </div>
                <!--              <div class="form-group">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City">
                            </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                            </div>
            
            -->
                            <button type="submit" class="btn btn-primary" value=”submit”>Submit</button>
                        </form>   
        </div>
        </div>
        </div>    
            <div class="navbar-fixed-bottom">
    
        </div>
        <footer>
		        <p><strong>Copyright &copy; 2018 TheYellowBagPack .</strong> All rights reserved </p>
		  </footer>
    </body>
    </html>
        
        
        
        
        
        
