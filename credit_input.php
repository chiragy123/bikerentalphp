<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "bikerental1";
$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$email=mysqli_real_escape_string($con,$_REQUEST['email']);
$cash=mysqli_real_escape_string($con,$_REQUEST['cash']);
$sql= "INSERT INTO credits (email,cash)
 VALUES('$email','$cash')";
 if(mysqli_query($con,$sql))
 {
	 echo "records added successfully.";
 }
 else
 {
	 echo " error:could not ableto execute $sql." .mysqli_error($con);
 }
    header("location:customer_info.php");

 ?>
