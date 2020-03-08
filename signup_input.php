<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "bikerental1";
$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");

$name=mysqli_real_escape_string($con,$_REQUEST['name']);
$email=mysqli_real_escape_string($con,$_REQUEST['email']);
$password=mysqli_real_escape_string($con,$_REQUEST['password']);
$contact=mysqli_real_escape_string($con,$_REQUEST['contact']);
$city=mysqli_real_escape_string($con,$_REQUEST['city']);
$address=mysqli_real_escape_string($con,$_REQUEST['address']);
$sql= "INSERT INTO users (name,email,password,contact,city,address)
 VALUES('$name','$email','$password','$contact','$city','$address')";
 if(mysqli_query($con,$sql))
 {
	 echo "records added successfully.";
 }
 else
 {
	 echo " error:could not ableto execute $sql." .mysqli_error($con);
 }
    header("location:index0.php");

 ?>

 