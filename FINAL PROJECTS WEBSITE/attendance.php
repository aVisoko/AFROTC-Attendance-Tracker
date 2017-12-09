<?php


session_start();


  		    if ($_SESSION['loggedin'] == FALSE) {
              
               
				header("Location:index.php");
                
            }


// Created by Professor Wergeles for CS2830 at the University of Missouri
include 'config.php';
    
    
        $mysqli = new mysqli(host, testuse, testpass, dbname);

        if ($mysqli->connect_error) {
            $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
			require "index.php";
            exit;
        }

        
    $usernameHolder = $_SESSION['username'];
   
    
            $info = "SELECT Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.username = ('$usernameHolder') AND Attendance.week = 1 ";
           

$mysqliResult = $mysqli->query($info);
$row = mysqli_fetch_row($mysqliResult);
?>
	



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Attendance</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link href="page1.css" rel="stylesheet" type="text/css">
<link href="attendance.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  



<!-- Favicon here!!! -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="ico"  href="/favicon.ico">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<link href="attendance.css" rel="stylesheet" type="text/css">
<meta name="theme-color" content="#ffffff">
<!-- Favicon here!!! -->




</head>
	
<body>


<!-- Nav Bar -->

 
 <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="static_assets/Det_440.png">Detachment 440</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item">
        <a class="nav-link" href="page1.php">Home <span class="sr-only">(current)</span></a>
      </li>
<li class="nav-item active">        
     <a class="nav-link" href="attendance.php">Attendance</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inspector_general.php">Inspector General</a>
      </li>
      <li>
      	<a class="nav-link" id="Logout" href="logout.php">Logout</a>
      </li>
    </ul>
    
 
  </div>
</nav>
<!-- Nav Bar -->

 
	
	
           
           
   <div class="userinfo">    
                  <div class="row">
                      <div class="panel panel-default" style="border-radius: 30px;">
                      <div class="panel-heading" style="border-radius: 30px;">  <h4>Detachment 440</h4></div>
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       <img alt="User Pic" src="static_assets/Det_440.png" id="profile-image1" class="img-circle img-responsive"> 
                     
                 
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="userinfo" >
                            <h1><?php echo $_SESSION['f_name']?></h1>
                            <h3><?php echo $_SESSION['l_name']?></h3>
                            <p>AS CLASS:<b><?php echo $_SESSION['as_class']?></b></p>
                          	
                           
                          </div>
                 
                        
                      </div>
                </div>
            </div>
            </div>
	</div>




	<div style="width: 100%; margin:auto; margin-top: 0%; align-content: center; text-align: center;"></div>


<div id="somestuff">
<table class="table-fill">
<thead>
<tr>
<th class="text-center">LeadLab</th>
<th class="text-center">Tuesday</th>
<th class="text-center">Thursday</th>
<th class="text-center">Alternate LeadLab</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td id="llab"     class="text-left"><?php echo $row[1]; ?></td>
<td id="tuesday"  class="text-left"><?php echo $row[2]; ?></td>
<td id="thursday" class="text-left"><?php echo $row[3]; ?></td>
<td id="altllab"  class="text-left"><?php echo $row[4]; ?></td>
</tr>

</tbody>
</table>



</div>


<div style="width: 100%; margin:auto; margin-top: 0%; align-content: center; text-align: center; padding-top: 50px;">
	
	
<form action="updater.php" method="POST">		
	<input type="submit" class="btn btn-primary" data-popup-open="popup-1" name="action" value="I attended Lead Lab">
	<input type="submit" class="btn btn-primary" data-popup-open="popup-1" name="action" value="I attended Tuesday PT">	
	<input type="submit" class="btn btn-primary" data-popup-open="popup-1" name="action" value="I attended Thursday PT">
	<input type="submit" class="btn btn-primary" data-popup-open="popup-1" name="action" value="I attended Alternate Lead Lab">
	<br><br>
	<input type="submit" class="btn btn-primary" data-popup-open="popup-1" name="action" value="I did not attend Lead Lab">
	<input type="submit" class="btn btn-primary" data-popup-open="popup-1" name="action" value="I did not attend Tuesday PT">
	<input type="submit" class="btn btn-primary" data-popup-open="popup-1" name="action" value="I did not attend Thursday PT">
	<input type="submit" class="btn btn-primary" data-popup-open="popup-1" name="action" value="I did not attend Alternate Lead Lab">
	
	</form>
	
	
	</div>












<!-- Footer -->

<div class="footer" style="display: inline-block;"><p id="phrase">FLY FIGHT WIN</p></div>





<!-- Footer -->
</body>
		
		
		
		

</html>
