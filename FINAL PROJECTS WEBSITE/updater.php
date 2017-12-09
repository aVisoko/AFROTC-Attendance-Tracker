<?php

include 'config.php';
session_start();

$submission = $_POST['action'];


// echo $submission;
   
$holder = $_SESSION['username'];

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





if($submission == "I attended Lead Lab")
{
    $query = "UPDATE af_info.Attendance SET Attendance.llab = 1 WHERE Attendance.username = '$holder' AND Attendance.week = 1";
}


if($submission == "I did not attend Lead Lab")
{
    $query = "UPDATE af_info.Attendance SET Attendance.llab = 0 WHERE Attendance.username = '$holder' AND Attendance.week = 1";
}










/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////








if($submission == "I attended Tuesday PT")
{
    $query = "UPDATE af_info.Attendance SET Attendance.tuesday = 1 WHERE Attendance.username = '$holder' AND Attendance.week = 1";
}



if($submission == "I did not attend Tuesday PT")
{
    $query = "UPDATE af_info.Attendance SET Attendance.tuesday = 0 WHERE Attendance.username = '$holder' AND Attendance.week = 1";
}



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if($submission == "I attended Thursday PT")
{
    $query = "UPDATE af_info.Attendance SET Attendance.thursday = 1 WHERE Attendance.username = '$holder' AND Attendance.week = 1";
}



if($submission == "I did not attend Thursday PT")
{
    $query = "UPDATE af_info.Attendance SET Attendance.thursday = 0 WHERE Attendance.username = '$holder' AND Attendance.week = 1";
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






if($submission == "I attended Alternate Lead Lab")
{
    $query = "UPDATE af_info.Attendance SET Attendance.alt_lab = 1 WHERE Attendance.username = '$holder' AND Attendance.week = 1";
}



if($submission == "I did not attend Alternate Lead Lab")
{
    $query = "UPDATE af_info.Attendance SET Attendance.alt_lab = 0 WHERE Attendance.username = '$holder' AND Attendance.week = 1";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	if (mysqli_query($mysql, $query)) {
    echo "New record created successfully";
        echo $holder;
     
        header("Location: attendance.php");
       // header("Location: attendance.php");
	} else {
    echo "Error: " . $query . "<br>" . mysqli_error($mysql);
	header("Location: inspector_general.php");
    }
		mysqli_close($mysql);



?>