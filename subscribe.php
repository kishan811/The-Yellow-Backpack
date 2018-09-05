 <?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
header('location:index.php');
}
?>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
         <link rel ="stylesheet" type="text/css" href="blog.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=helvetica:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="hompagestyle.css">
    </head>
    <body>
		   <ul>
                       <li><a href="index.php">Home</a></li>
                       <li><a href="blog.php">Trending</a></li>
                       <li><a href="contact_us.php">Contact</a></li>
     
                       <li> <a href="blog.php">Your Destinations</a></li>
		
                       <li style="float:right; background-color: #0099cc;"><a href="login.php" class="login-window">Login</a>
        
        <div id="login-box" class="login-popup">
            <a href="index.php" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close"/></a>
          <form method="post" class="signin" action="login.jsp">
                <fieldset class="textbox">
            	<label class="username">
                <span>Username or email</span>
                <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Username">
                </label>
                
                <label class="password">
                <span>Password</span>
                <input id="password" name="password" value="" type="password" placeholder="Password">
                </label>
                
                <button class="submit button" type="button">Sign in</button>
                
                <p>
                <a class="forgot" href="#">Forgot your password?</a>
                </p>
                
                </fieldset>
          </form>
		</div>
    
    </li>   

			
    <li style="float:right"><a class="active" href="about_us.php">About</a></li>
  
	  
</ul>

        <form action="signup_script.php" method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="email">Email:</label>
          <input type="email" id="email" name="email">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password">
          
           <label for="contact">Contact:</label>
           <input type="text" id="contact" name="contact">
          <!--<label>Age:</label>-->
          <!--<input type="radio" id="under_13" value="under_13" name="user_age"><label for="under_13" class="light">Under 13</label><br>-->
          <!--<input type="radio" id="over_13" value="over_13" name="user_age"><label for="over_13" class="light">13 or older</label>-->
        </fieldset>
        

        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>