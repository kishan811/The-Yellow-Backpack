<?php
require 'includes/common.php';
$email = $_POST['email'];
$password = $_POST['password'];
$email= mysqli_real_escape_string($con,$email);
$password= mysqli_real_escape_string($con,$password);
$user_query="SELECT id,email FROM users WHERE email='".$email."' AND password='".$password."'";
$query_result= mysqli_query($con, $user_query)
         or die(mysqli_error($con));
$total_rows= mysqli_num_rows($query_result);
if ($total_rows==1)
{
    $row= mysqli_fetch_array($query_result);

//$_SESSION['email']=$row['email'];
//$_SESSION['id']=$row['id'];
header('location:chatbox.php');
}
else
{
    echo 'invalid';
}



?>