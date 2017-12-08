<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri
include 'config.php';
    
    
        $mysqli = new mysqli(host, testuse, testpass, dbname);

        if ($mysqli->connect_error) {
            $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
			require "index.php";
            exit;
        }

        
    $usernameHolder = $_SESSION['username'];

            $info = "SELECT Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.username = "erachell" AND Attendance.week = 1 ";
           

$mysqliResult = $mysqli->query($info);
$row = mysqli_fetch_row($mysqliResult);
            
            
        

	$_SESSION['test'] = $row[1]; 
     print $row[0];

print $info;
?>