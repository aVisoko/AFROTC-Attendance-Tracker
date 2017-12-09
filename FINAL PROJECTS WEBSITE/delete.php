<?php

include 'config.php';
session_start();

$submission = $_POST['action'];


// echo $submission;

$mysql= mysqli_connect(host, testuse, testpass, dbname);

	if (!$mysql) {
    die("Connection failed: " . mysqli_connect_error());
    header("Location: admin.php");
	}


if($submission == "Delete Comment 1")
{
    $query = "DELETE FROM comments.comments WHERE comments.ID = 1";
}

if($submission == "Delete Comment 2")
{
    $query = "DELETE FROM comments.comments WHERE comments.ID = 2";
}
if($submission == "Delete Comment 3")
{
    $query = "DELETE FROM comments.comments WHERE comments.ID = 3";
}


	if (mysqli_query($mysql, $query)) {
    echo "New record created successfully";
      
      
     
        
       // header("Location: attendance.php");
	} else {
    echo "Error: " . $query . "<br>" . mysqli_error($mysql);
	header("Location: index.php");
    }
		mysqli_close($mysql);



?>