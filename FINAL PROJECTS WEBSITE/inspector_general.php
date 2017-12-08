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
<title>Inspector General</title>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
 	

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" href="inspector_general.css">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="jquery-3.2.1.min.js"></script>


<script>
$(function() {
    //----- OPEN
    $('[data-popup-open]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
 
        e.preventDefault();
    });

});
</script>

<script>
	function formclose()
{
   
	    $('[data-popup-close]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
 		
        e.preventDefault();
    });
} 
	
	</script>



<!-- Favicon here!!! -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="ico"  href="/favicon.ico">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<link href="inspector_general.css" rel="stylesheet" type="text/css">
<meta name="theme-color" content="#ffffff">
<!-- Favicon here!!! -->

</head>

<body>
<!-- NAV BAR AGAIN -->
 
 <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Detachment 440</a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item">
        <a class="nav-link" href="page1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Attendance</a>
      </li>
     <li class="nav-item active">
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
<!-- NAV BAR AGAIN -->



<form action="submit.php" method="POST">
<div class="form-group">
    <label for="exampleTextarea"><p id="heading">A message to the Inspector General...</p></label>
    <textarea type="text" name="submission" class="form-control" id="exampleTextarea" rows="9"></textarea>
	<button class="btn btn-primary" data-popup-open="popup-1" id="finalsub" value="Continue">Continue</button>		


  <div class="popup" data-popup="popup-1">
    <div class="popup-inner">
        <h2>A Quick Note...</h2>
        <p>This message system is entirely anonymous. However, with this
        in mind, please use it professionally and appropriately.</p>
        <p>Are you sure you want to submit this message?</p>       
        

        <input class="btn btn-primary" value="submit" type="submit" onclick="formclose()">
  
        <a class="popup-close" data-popup-close="popup-1" href="inspector_general.php">x</a>
    </div>
</div>
	</div>
</form>

<!-- Footer -->
<div class="footer"><p id="phrase">FLY FIGHT WIN</p></div>

   
   
   
   
   
   





<!-- Footer -->






</body>
