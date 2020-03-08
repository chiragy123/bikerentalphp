<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "bikerental1";
$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");

$fullname=mysqli_real_escape_string($con,$_REQUEST['fullname']);
$email=mysqli_real_escape_string($con,$_REQUEST['email']);
$phone_no=mysqli_real_escape_string($con,$_REQUEST['phone_no']);
$message=mysqli_real_escape_string($con,$_REQUEST['message']);
$sql= "INSERT INTO contactusquery(fullname,email,message,phone_no)
 VALUES('$fullname','$email','$message','$phone_no')";
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
 alert("Message is sent");
  window.location.href="index.php";
  </script>

 </body>
 </html>