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
     <body style="padding-top: 125px;padding-bottom:150px;">
         
      <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand">Big Brother Rental</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                  
                    </ul>
                </div>
            </div>
        </nav>
         
		 
		 <div class="container-fluid decor_bg" id="content">
         <div class="row">  
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    
                    <form action="forgot_input.php" method="POST">  
					<div class="form-group">
                            
                            <input type="text"  class="form-control" placeholder="name" name="name" required>
                            
                        </div>
                        <div class="form-group">
                            
                            <input type="text"  class="form-control" placeholder="email" name="email" required>
                            
                        </div>
						<div class="form-group">
                            
                            <input type="password"  class="form-control" placeholder="newpassword" name="newpassword" required>
                            
                        </div>
                        <button type="Submit" value="Submit" class="btn btn-primary">Submit</button>

                    </form>
                    
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