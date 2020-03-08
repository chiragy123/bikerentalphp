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
     <body style="padding-top: 85px;">
         
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
         
	        <div class="container" id="content">
            


            <div class="row text-center " id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/img1.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='pulsar ns200'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

$r1=$row[0];
?>
 </p>
  <a href="credit_info.php?id=1" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='pulsar ns200'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo "KEEP NOTE FOR NEXT PROCESS ";
	
	
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                          
                        </div>
                    </div>
                </div>
 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/img2.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='access 125'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='access 125'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/13.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='apache rtr 180'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='apache rtr 180'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/img3.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php

$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='mt-15'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";


$select_query_result = mysqli_query($con, $select_query);
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                           
                                    <a href="credit_info.php?id=3" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='mt-15'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                      
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/img4.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='ntorq 125'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                          
                                    <a href="credit_info.php?id=4" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='ntorq 125'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</>
                          
                            </a>
                        </div>
                    </div>
                </div>
				
				
				 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/14.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='cb hornet 160r'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='cb hornet 160r'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
               
			   
			   
			    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/15.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='fz-25'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='fz-25'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
               
			   
			   
			   
			   
			   
			   
			    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/16.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='tnt 600i'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='tnt 600i'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
               
			   
			   
			   
			   
			   
			   
			    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/17.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='avenger cruise 220'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='avenger cruise 220'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
               
			   
			   
			   
			   
			   
			   
			    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='thunderbird 500'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='thunderbird 500'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
               
			   
			   
			   
			   
			   
			   
			   
			    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='classic 350'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='classic 350'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
               
			   
			   
			   
			   
			   
			   
			    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/20.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='himalayan'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='himalayan'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
               
			   
			   
			   
			   
			   
			   
			   
			    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/21.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='jupiter'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='jupiter'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/23.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='apache rr310'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='apache rr310'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/24.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='CT 100'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='CT 100'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/25.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='dominar 400'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='dominar 400'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/26.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='r1 5 v3'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='r1 5 v3'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
               
			    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/27.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='intercepter 650'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='intercepter 650'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
               
			    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/28.jpg" alt="">
                        <div class="caption">
                            
                            <p><?php 
							$con =  mysqli_connect($server, $user, $password, $dbname)or die("connection failed");


$select_query = "SELECT b.model_name,b.cost_per_hour,l.loc_name,
b.availability FROM 
bikedetails b join location_details l on b.loc_id=l.loc_id and b.model_name='continental gt'
group by b.model_name,b.cost_per_hour,l.loc_name,b.availability";

							$select_query_result = mysqli_query($con, $select_query);
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
	echo $row[0]."<br>";
echo " costperhour :" .$row[1]."<br>";
echo $row[2]."<br>";
echo "AVAILABILITY : " .$row[3]."<br>";

?></p>
                            
                                    <a href="credit_info.php?id=2" onclick="return confirm('<?php $select_query = "select registration_number
  from bikedetails where model_name='continental gt'";
							
			$select_query_result = mysqli_query($con, $select_query);				
							
							
							$num = mysqli_num_rows($select_query_result);
 
 		$row = mysqli_fetch_array($select_query_result );
		echo "KEEP NOTE FOR NEXT PROCESS";
		
		
	echo "REG_NUM : " .$row[0];
?>')" name="add" value="add" class="btn btn-block btn-primary">BOOK NOW</a>
                           
                            </a>
                        </div>
                    </div>
                </div>
               
            </div>
			
			
			
			
			
		 </div>
		 <br><br>
		  <footer class="footer navbar-fixed-bottom">
           <div class="container">
                <center>
                    <p>Copyright &copy; Big Brother Rental. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
                </center>
            </div>
        </footer>
    </body>
</html>