<?php

session_start();


  		    if ($_SESSION['loggedin'] == FALSE) {
              
               
				header("Location:index.php");
                
            }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Landing Page</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link href="page1.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
      	<script type="text/javascript" src="login.php">
		$(document).ready(function(){
			var str= "<?php echo $something; ?>";
			alert(str);
		});
  
  </script>


<!-- Favicon here!!! -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="ico"  href="/favicon.ico">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<!-- Favicon here!!! -->






</head>
	
<body>


<!-- Nav Bar -->

 
 <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Detachment 440</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
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





<div id="wrapper"> 
    <div class="container" style="width: 50%;">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 550px;width: 800px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="static_assets/truck.jpg" alt="Los Angeles" style="height: 550px;width: 800px;">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="static_assets/unger_daack.jpg" alt="Chicago" style="height: 550px;width: 800px;">
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <img src="static_assets/xmas_pt.jpg" alt="New York" style="height: 550px;width: 800px;">
        <div class="carousel-caption">
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div id="video_div">
<video id="davideo" style="height:550px;width: 800px; object-fit: fill;"  src="static_assets/diningout.mp4"  controls="1" allowfullscreen> </video>
</div>
    <div class="clear"></div> 
    
</div>
<div>
	<script type="text/php">
	
		</script>
	
</div>


<!-- Nav Bar -->



<!-- Footer -->
<div>
<div class="footer" style="display: inline-block;"><p id="phrase">FLY FIGHT WIN<a class="nav-link" href="admin.php">Admin?</a></p></div>


</div>


<!-- Footer -->
</body>
		
		
		
		

</html>
