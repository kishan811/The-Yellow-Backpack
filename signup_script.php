<?php
require 'includes/common.php';
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: index.php?email_error=Enter correct email');
}
$password = $_POST['password'];
if (strlen($password) < 6) {
  header('location: index.php?password_error=Password should be more than 6 characters');
}
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$name= mysqli_real_escape_string($con, $name);
$contact= mysqli_real_escape_string($con, $contact);
$select_query= "SELECT id FROM users WHERE email='".$email."'";
$query_result= mysqli_query($con, $select_query)
         or die(mysqli_error($con));
$total_rows= mysqli_num_rows($query_result);
if ($total_rows>0)
{
    echo 'Email already exists';
}
else
{

$registration_query="INSERT INTO users(name,email,password,contact) VALUES ('$name','$email','$password','$contact')";

$registration_submit= mysqli_query($con, $registration_query)
        or die(mysqli_error($con));
echo "User Successfully Inserted";


$id= mysqli_insert_id($con);
$_SESSION['email']=$email;
$_SESSION['id']= $id;
header('location:index.php');

}
?>

