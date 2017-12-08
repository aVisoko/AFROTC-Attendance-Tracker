<?php


session_start();


  		    if ($_SESSION['loggedin'] == FALSE) {
              
               
				header("Location:index.php");
                
            }



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
  <a class="navbar-brand" href="page1.html">Detachment 440</a>

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
      <li class="nav-item">
        <a class="nav-link" href="#">PT Log</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Documents</a>
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




	<div style="width: 100%; margin:auto; margin-top: 0%; align-content: center; text-align: center;">
<form action="submit_week1.php">  
<input id="button" class="btn btn-primary" type="button" value=" Week 1 " name="week1" >
</form>
<br>
<br>
<form>  
<input class= "btn btn-primary" type="button" value=" Week 2 " name="week2" onclick="loaddata()">
</form>
<br>
<br>
<input class= "btn btn-primary" type="button" value=" Week 3 " name="week3" onclick="loaddata()">
<input class= "btn btn-primary" type="button" value=" Week 4 " name="week4" onclick="loaddata()">
<input class= "btn btn-primary" type="button" value=" Week 5 " name="week5" onclick="updateInfo('week5')">
<input class= "btn btn-primary" type="button" value=" Week 6 " name="week6" onclick="updateInfo('week6')">
<input class= "btn btn-primary" type="button" value=" Week 7 " name="week7" onclick="updateInfo('week7')">
<input class= "btn btn-primary" type="button" value=" Week 8 " name="week8" onclick="updateInfo('week8')">
<br><br>
<input class= "btn btn-primary" type="button" value="Week 9"   name="week9" onclick="updateInfo('week9')">
<input class= "btn btn-primary" type="button" value="Week 10" name="week10" onclick="updateInfo('week10')">
<input class= "btn btn-primary" type="button" value="Week 11" name="week11" onclick="updateInfo('week11')">
<input class= "btn btn-primary" type="button" value="Week 12" name="week12" onclick="updateInfo('week12')">
<input class= "btn btn-primary" type="button" value="Week 13" name="week13" onclick="updateInfo('week13')">
<input class= "btn btn-primary" type="button" value="Week 14" name="week14" onclick="updateInfo('week14')">
<input class= "btn btn-primary" type="button" value="Week 15" name="week15" onclick="updateInfo('week15')">
<input class= "btn btn-primary" type="button" value="Week 16" name="week16" onclick="updateInfo('week16')">
<br>

<div id="txtHint"><b><?php echo $_SESSION['test']?></b></div>
		







</div>






















<!-- Footer -->

<div class="footer" style="display: inline-block;"><p id="phrase">FLY FIGHT WIN</p></div>


</div>


<!-- Footer -->
</body>
		
		
		
		

</html>
