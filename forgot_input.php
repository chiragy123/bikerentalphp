<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "bikerental1";
$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$newpassword=$_POST['newpassword'];

$select_query = "UPDATE users SET PASSWORD='$newpassword' where email='$email' " ;

if( mysqli_query($con, $select_query))
{
 header("location:index0.php");
}
else{
	echo " invalid nam or email";
}
?>
  