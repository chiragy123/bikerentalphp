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

    </head>
    <body style="padding-top: 75px;">
        
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
                <div class="col-lg-4 col-lg-offset-4">
                    
                    <form action="customer_input.php" method="POST"> 

 
                        <div class="form-group">
                            
                            <input type="text"  class="form-control" placeholder="Dl_number" name="Dl_number" required>
                            
                        </div>
                        <div class="form-group">
                         <input type="text"  class="form-control"  placeholder="Fname" name="Fname" required>
                         </div>
                         <div class="form-group">
                         <input type="text"  class="form-control"  placeholder="Mname" name="Mname" required>
                         </div>
                         <div class="form-group">
                         <input type="text"  class="form-control" placeholder="Lname" name="Lname" required>
                         </div>
                         <div class="form-group">
                         <input type="text"  class="form-control" placeholder="Phone_no" name="Phone_no" required>
                         </div>
                         <div class="form-group">
                         <input type="text"  class="form-control"  placeholder="email" name="email" required>
                         </div>
			 
                         <div class="form-group">
                         <input type="text"  class="form-control"  placeholder="Street" name="Street" required>
                         </div>
				
                         <div class="form-group">
                         <input type="text"  class="form-control"  placeholder="city" name="city" required>
                         </div>
						 
                         <div class="form-group">
                         <input type="text"  class="form-control"  placeholder="State" name="State" required>
                         </div>
						 
                         <div class="form-group">
                         <input type="text"  class="form-control"  placeholder="Zipcode" name="Zipcode" required>
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