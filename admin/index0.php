<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "bikerental1";
$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


?>



<!DOCTYPE html>

<html>
    <head>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login | Big Brothers Rental  </title>
        <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<style>
.image{
	   background:url("img/bikebg.jpg") no-repeat center;
 }

</style>


    </head>
    <body class="image" style="padding-top: 100px;">
      
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
                        
                        <li><a><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                         
                        <li><a><span></span> ABOUTUS</a></li>
						<li><a><span></span> CONTACTUS</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Login</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make booking</p>
                    
                   <form role="form" action="login_info1.php" method="POST">
                        <div class="form-group" >
                            
                            
                            <input type="text"  class="form-control"  placeholder="Email" name="email" required>
                           
                        </div>
                                
                        <div class="form-group ">
                            
                                
                            <input type="text"  class="form-control"  placeholder="Password" name="password" required><br>
                            <a href="forgot password.php">Forgot password?</a>
							
                        </div>
						<div>
						 <button type="Submit" value="Submit" class="btn btn-primary">Login</button><br><br>
						</div>
                   </form><br/>
                                
                      
                            
                        </div>
                        
                    </div>
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
