<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "bikerental1";
$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$sql="CALL `CAL_HOUR`();";
$result=mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$chi=$row[0];



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
                    <a class="navbar-brand">Big Brother Rental</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                       
                    </ul>
                </div>
            </div>
        </nav>
              
			  <center>
			  
			  <h1> <?php  echo "AMOUNT : Rs  " .$chi;   ?></h1>
			  
			  
<li><a href="index.php" onclick="language( <?php echo $chi; ?>)"><span class="flag flag-usa flag-1x" ></span>DONE</a></li>
			  
			  </center>
	 <script>
    function language($id){
        //get the input value
        $.ajax({
            //the url to send the data to
            url: "booking2.php",
            //the data to send to
            data: {id: $id},
            //type. for eg: GET, POST
            type: "POST",
            //on success
            success: function(data){
                console.log("***********Success***************"); //You can remove here
                console.log(data); //You can remove here
            },
            //on error
            error: function(){
                    console.log("***********Error***************"); //You can remove here
                    console.log(data); //You can remove here
            }
        });
    }
</script>
			  
        <footer class="footer navbar-fixed-bottom">
            
            <div class="container">
                <center>
                    <p>Copyright &copy; Big Brother Rental. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
                </center>
            </div>
            
        </footer>
        
    </body>
</html>