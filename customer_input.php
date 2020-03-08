<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "bikerental1";
$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");

$Dl_number=mysqli_real_escape_string($con,$_REQUEST['Dl_number']);
$Fname=mysqli_real_escape_string($con,$_REQUEST['Fname']);
$Mname=mysqli_real_escape_string($con,$_REQUEST['Mname']);
$Lname=mysqli_real_escape_string($con,$_REQUEST['Lname']);
$Phone_no=mysqli_real_escape_string($con,$_REQUEST['Phone_no']);
$email=mysqli_real_escape_string($con,$_REQUEST['email']);
$Street=mysqli_real_escape_string($con,$_REQUEST['Street']);
$city=mysqli_real_escape_string($con,$_REQUEST['city']);
$state=mysqli_real_escape_string($con,$_REQUEST['State']);
$Zipcode=mysqli_real_escape_string($con,$_REQUEST['Zipcode']);
$sql= "INSERT INTO customer_details (DL_number,Fname,Mname,Lname,Phone_number,email,Street,city,State_name,zipcode)
 VALUES('$Dl_number','$Fname','$Mname','$Lname','$Phone_no','$email','$Street','$city','$state','$Zipcode')";


 if(mysqli_query($con,$sql))
 {
	 
 }
 else
 {
	 echo " error:could not ableto execute $sql." .mysqli_error($con);
 }
 
 
 ?>
 	 <html>
 <head>
 
 
 </head>
 <body>
  <script>
 alert("details uploded successfully");
  window.location.href="booking.php";
  </script>

 </body>
 </html>