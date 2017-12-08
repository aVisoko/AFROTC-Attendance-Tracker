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

	$name = $_GET['name']

	switch($name) {
		case 'week1':
			$info = "SELECT Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.username = ('$usernameHolder') AND Attendance.week = 1 ";
           
			break;
		case 'week2':
			$info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 2";
			break;
		case 'week3':
			$info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 3";
			break;
		case 'week4':
			$info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 4";
			break;
		case 'week5':
            $info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 5";
            break;
        
        case 'week6':
            $info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 6";
            break;
            
        case 'week7':
            $info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 7";
            break;
            
        case 'week8':
            $info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 8";
            break;
            
        case 'week9':
            $info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 9";
            break;
            
        case 'week10':
            $info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 10";
            break;
            
        case 'week11':
            $info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 11";
            break;
            
        case 'week12':
            $info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 12";
            break;
            
         case 'week13':
            $info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 13";
            break;
            
         case 'week14':
            $info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 14";
            break;
            
         case 'week15':
            $info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 15";
            break;
            
         case 'week16':
            $info = "SELECT Attendance.('$usernameHolder'), Attendance.week, Attendance.llab, Attendance.tuesday, Attendance.thursday, Attendance.alt_lab FROM af_info.Attendance WHERE Attendance.week = 16";
            break;
	}

       
            $mysqliResult = $mysqli->query($info);
            $array= $mysqli_fetch_row($mysqliResult);
            
            
        

	print $array[0];
        print $array;
?>