<?php
session_start();

include 'config.php';
  		 if ($_SESSION['loggedin'] == FALSE) {
              
               
				header("Location:index.php");
                
            }

			if($_SESSION['username']  != "test"){
				header("Location:page1.php");
				
			}
				

$mysql= mysqli_connect(host, testuse, testpass, dbname);



	if (!$mysql) {
    die("Connection failed: " . mysqli_connect_error());
    header("Location: index.php");
	}
 //    if ($submission != "reddit") {
	// 	$error = 'Error: ' . $mysqli->connect_error . ' ' . $mysqli->connect_error;
	// 	header("location: index.php");
	// 	exit;
	// } 


//find comments
$query_c1 = "SELECT comments.comments, comments.ID FROM af_info.comments  WHERE comments.ID = 1";
$query_c2 = "SELECT comments.comments, comments.ID FROM af_info.comments  WHERE comments.ID = 2";
$query_c3 = "SELECT comments.comments, comments.ID FROM af_info.comments  WHERE comments.ID = 3";


//find id
$query_id1 = "SELECT comments.ID FROM af_info.comments WHERE comments.ID = 1";
$query_id2 = "SELECT comments.ID FROM af_info.comments WHERE comments.ID = 2";
$query_id3 = "SELECT comments.ID FROM af_info.comments WHERE comments.ID = 3";

$comment1 =	mysqli_query($mysql, $query_c1);
$comment2 =	mysqli_query($mysql, $query_c2);
$comment3 =	mysqli_query($mysql, $query_c3);
		

$query1 = mysqli_query($mysql, $query_id1);
$query2 = mysqli_query($mysql, $query_id2);
$query3 = mysqli_query($mysql, $query_id3);



$row1 = mysqli_fetch_array($comment1);
$row2 = mysqli_fetch_array($comment2);
$row3 = mysqli_fetch_array($comment3);
$row4 = mysqli_fetch_row($query1);
$row5 = mysqli_fetch_row($query2);
$row6 = mysqli_fetch_row($query3);

mysqli_close($mysql);





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




<!-- Favicon here!!! -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="ico"  href="/favicon.ico">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<link href="inspector_general.css" rel="stylesheet" type="text/css">
<link href="admin.css" rel="stylesheet" type="text/css">
<meta name="theme-color" content="#ffffff">
<!-- Favicon here!!! -->

</head>

<body>
<!-- NAV BAR AGAIN -->
 
 <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/static_assets/Det_440.png">Detachment 440</a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item">
        <a class="nav-link" href="page1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Attendance</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="inspector_general.php">Inspector General</a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="#">Admin</a>
      </li>
      <li>
      	<a class="nav-link" id="Logout" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<!-- NAV BAR AGAIN -->

<div id="somestuff">
<table class="table-fill">
<thead>
<tr>
<th class="text-center">ID</th>
<th class="text-center">COMMENT</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td id="id1" class="text-left"><?php echo $row1[1]; ?></td>
<td id="comment1" class="text-left"><?php echo $row1[0]; ?></td>
</tr>
<tr>
<td id="id2" class="text-left"><?php echo $row2[1]; ?></td>
<td id="comment2" class="text-left"><?php echo $row2[0]; ?></td>
</tr>
<tr>
<td id="id3" class="text-left"><?php echo $row3[1]; ?></td>
<td id="comment3" class="text-left"><?php echo $row3[0]; ?></td>
</tr>

</tbody>
</table>
</div>

<form id="deleteform" action="delete.php" method="post">
<div id="deletemenu">
	<input type="submit" class="btn btn-primary" data-popup-open="popup-1" name="action" value="Delete Comment 1">
	<input type="submit" class="btn btn-primary" data-popup-open="popup-1" name="action" value="Delete Comment 2">	
	<input type="submit" class="btn btn-primary" data-popup-open="popup-1" name="action" value="Delete Comment 3">
	
	
</div>





</form>

































<div class="footer" style="display: inline-block;"><p id="phrase">FLY FIGHT WIN</p></div>
</body>
</html>