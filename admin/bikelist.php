<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "bikerental1";
$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");
?>


<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Big Brothers Rental   </title>
        <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
 </head>
     <body style="padding-top: 50px">
         
      <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Big Brother Rental</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li><a href="aboutus.php"><span></span> ABOUTUS</a></li>
						<li><a href="contactus.php"><span></span> CONTACTUS</a></li>
				
                    </ul>
                </div>
            </div>
        </nav>
         <center>
		 <h1>
		 <?php
		 $con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");
		 $sql="CALL `bikedetail`()";
		 $result= mysqli_query($con,$sql);
		            $num = mysqli_num_rows($result);
 while($num!=0)
 {
 		$row = mysqli_fetch_array($result );
	echo "REGISTRATION_NUMBER : " .$row[0]."<br>";
echo "MODEL_NAME : " .$row[1]."<br>";
echo "COST_PER_HOUR : " .$row[2]."<br>";
echo "LOCATION_NAME : " .$row[3]."<br>";
echo "<br>";

$num--;
 }
		 
		 
		 
		 ?>
		 </h1>
		 
		 </center>
	     
		  <footer class="footer navbar-fixed-bottom">
           <div class="container">
                <center>
                    <p>Copyright &copy; Big Brother Rental. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
                </center>
            </div>
        </footer>
    </body>
</html>