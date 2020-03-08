<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "bikerental";
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
			  <h1><?php
			  
			  echo mt_rand();
			 ?>
			  </h1>
			  
			  </center>
			  <div class="container-fluid decor_bg" id="content">
         <div class="row">  
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    
                    <form action="booking_input.php" method="POST">  
					<div class="form-group">
                            
                          <p>BOOKING_ID</P>  <input type="text"  class="form-control" placeholder="ENTER THE UNIQUE NO" name="BOOKING_ID" required>
                            
                        </div>
                        <div class="form-group">
                            
                           <p>FROM_DATE</p> <input type="text"  class="form-control" placeholder="YYYY-MM-DD HH:mm:SS" name="from_date" required>
                            
                        </div>
                        <div class="form-group">
                        <p>TO_DATE</p><input type="text"  class="form-control"  placeholder="YYYY-MM-DD HH:mm:SS" name="to_date" required>
                         </div>
						 <div class="form-group">
                            
                            <input type="text"  class="form-control" placeholder="REG_NUM" name="REG_NUM" required>
                            
                        </div>
						<div class="form-group">
                            
                            <input type="text"  class="form-control" placeholder="DL_NUM" name="DL_NUM" required>
                            
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