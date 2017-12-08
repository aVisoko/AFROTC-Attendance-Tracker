<?php

include 'config.php';


$submission = $_GET['submission'];

// echo $submission;

   
	$mysql= mysqli_connect(host, submituser, submitpassword, dbname);

	if (!$mysql) {
    die("Connection failed: " . mysqli_connect_error());
    header("Location: index.html");
	}
 //    if ($submission != "reddit") {
	// 	$error = 'Error: ' . $mysqli->connect_error . ' ' . $mysqli->connect_error;
	// 	header("location: index.html");
	// 	exit;
	// } 
	
$query = "INSERT INTO comments (comments) VALUES ('$submission')";
	//$query = "INSERT INTO comments (comments) VALUES ('$submission')";

	
	if (mysqli_query($mysql, $query)) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $query . "<br>" . mysqli_error($mysql);
	}
		mysqli_close($mysql);

	header("Location: inspector_general.html");
?>