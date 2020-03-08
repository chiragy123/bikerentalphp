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
        <title> Login | Big Brothers Rental  </title>
        <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
   
        
 <style>
 .image2{
	   background:url("img/bikebg2.jpg") no-repeat center;
 }
 </style>
 
    </head>
    <body style="padding-top: 50px;">
        
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
        
		
		  
        <div class="content">
            <div class="banner_image image2">
			
                <div class="container">
                    
                    <div id="banner_content1">
                        <h1>ABOUTUS</h1>
                        <p>We are a bunch of millennials focused 
						on building India’s largest mobility solutions provider.
						Transportation and mobility solutions is one of the least 
						understood and most unorganized markets. We see this as an
						unexplored opportunity to build a system that can be trusted
						by everyone beyond barriers.
                    We have no limitations when it comes to two wheelers
					and enjoy serving everything from a scooter to a superbike.
					We are obsessed with the concept of ‘Why buy when you can rent’.</p>
                         <br/> 
                       
                    
                    </div>
                    
                </div>
            </div>
        
     
            </div>
	
              
        <footer class="footer navbar-fixed-bottom">
            
             <div class="container">
                <center>
                    <p>Copyright &copy; Big Brother Rental. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
                </center>
            </div>
            
        </footer>
        
    </body>
    
</html>