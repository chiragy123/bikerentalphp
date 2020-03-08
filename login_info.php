<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "bikerental1";
$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$select_query = "SELECT  email,password FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
$select_query_result = mysqli_query($con, $select_query);
$num = mysqli_num_rows($select_query_result);
if ($num == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: login.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($select_query_result);
  if($row['email']==$email && $row['password']==$password)
 {
	 echo "login successfull! welcome ".$row['email'];
 }
 else
 {
	 echo " Signup to login ";
 }
}

?>

 	 <html>
 <head>
 
 
 </head>
 <body>
  <script>
 alert("logined successfully You can Start Booking");
  window.location.href="index.php";
  </script>

 </body>
 </html>