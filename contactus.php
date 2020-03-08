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
 
    </style>
  
    </head>
    <body style="padding-top: 100px;">
        
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
        
		
		             
    <div class="container-fluid decor_bg" id="content">
         <div class="row">  
                <div class="col-lg-5 col-lg-offset-2 col-md-6 col-md-offset-3">
                    <h1>Get in touch using the below form</h1>
					  
                    <form action="contactus_input.php" method="POST">  
                        <div class="form-group">
                            
                            <input type="text"  class="form-control" placeholder="fullName" name="fullname" required>
                            
                        </div>
                        <div class="form-group">
                         <input type="text"  class="form-control"  placeholder="email" name="email" required>
                         </div>
                        
                         <div class="form-group">
                         <input type="text"  class="form-control" placeholder="phone_no" name="phone_no" required>
                         </div>
                         
                         <div class="form-group ">
                         <input type="text"  class="form-control" style="height:150px"  placeholder="message" name="message" required>
                         </div>
                        <button type="Submit" value="Send Message" class="btn btn-primary">Send message</button>

                    </form>
                    
                </div>
		<div class="container-fluid decor_bg" id="content">
		
		<div class="col-lg-3">
		<h1>contact info</h1>
		<div class="glyphicon-ring">
		<h2><a><span class="glyphicon glyphicon-phone-alt glyphicon-bordered">  9888877777</span></a><h2>
		</div>
		<div class="glyphicon-ring">
		<h2><a><span class="glyphicon glyphicon-envelope glyphicon-bordered">  test@gmail.com</span></a><h2>
		</div>
		<h2><a><span class="glyphicon glyphicon-map-marker glyphicon-bordered">  testdemo</span></a><h2>
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