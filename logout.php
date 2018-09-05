<?php
session_start();

session_destroy();

?>
<html>
    <head>
        
     <link href="style1.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
   <script type="text/javascript" src='bootstrap/js/jquery-3.2.1.min'></script>
   <script type="text/javascript" src='bootstrap/js/bootstrap.min.js'></script>

    </head>
    <body>
        <div class="container">
            <div class="jumbotron" id="jumbo">
                <center><h3>You have successfully logged out!</h3>
                    <p><a href='subscribe.php'>Click here</a> to login again...</p>
                </center>
            </div>
        </div>
    </body>
</html>
