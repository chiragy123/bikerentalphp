<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "bikerental1";
$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");
$from_date=mysqli_real_escape_string($con,$_REQUEST['from_date']);
$to_date=mysqli_real_escape_string($con,$_REQUEST['to_date']);
$BOOKING_ID=mysqli_real_escape_string($con,$_REQUEST['BOOKING_ID']);
$REG_NUM=mysqli_real_escape_string($con,$_REQUEST['REG_NUM']);

$DL_NUM=mysqli_real_escape_string($con,$_REQUEST['DL_NUM']);

 
$sql= "INSERT INTO booking_details (BOOKING_ID,FROM_DT_TIME,RET_DT_TIME,AMOUNT,REG_NUM,DL_NUM)
 VALUES('$BOOKING_ID','$from_date','$to_date','','$REG_NUM','$DL_NUM')";
 
 
 if(mysqli_query($con,$sql))
 {
	 

  header("location:booking1.php");
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
  

 </body>
 </html>