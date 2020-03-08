<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "bikerental1";
$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");

$id = $_POST['id'];
$sql="update credits set cash=cash-$id ";
if(mysqli_query($con,$sql));

{


}





?>