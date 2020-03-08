<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "bikerental1";
$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");

$email=mysqli_real_escape_string($con,$_REQUEST['email']);

$sql="select cash from credits where email='$email' ";
$result=mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$chi=$row[0];


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
     <body style="padding-top: 150px;">
         
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
                      
                    </ul>
                </div>
            </div>
        </nav>
    <center>
	<div>
	<h1>
	<?php echo "BALANCE :" .$chi; ?>
	</h1>
	</div>
	
	<br>
	<a  href="index.php" type="Submit" value="Submit" class="btn btn-primary">DONE</a>
	
	</center
	
	
    </body>
</html>
