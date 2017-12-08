<?php

include 'config.php';

	

	if(!session_start()) {
		// If the session couldn't start, present an error
		header("Location: error.php");
		exit;
	}
	
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	
	if ($loggedIn) {
		header("Location: page1.php");
		exit;
	}
	
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
	

       
        $mysqli = new mysqli(host, testuse, testpass, dbname);

        if ($mysqli->connect_error) {
            $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
			require "index.php";
            exit;
        }
        

        $username = $mysqli->real_escape_string($username);
        $password = $mysqli->real_escape_string($password);
        

        
		$query = "SELECT usersinfo.username, usersinfo.password FROM usersinfo WHERE username = '$username' AND password = '$password'";
		
        $_SESSION['username'] = $username;
		$_SESSION['password'] = $password;

		$mysqliResult = $mysqli->query($query);
		
        if ($mysqliResult) {
            // How many records were returned?
            $match = $mysqliResult->num_rows;

            
            $mysqliResult->close();
            $mysqli->close();
  		    if ($match == 1) {
                $_SESSION['loggedin'] = $username;
                header("Location: page1.php");
                exit;
            }
            else {
                $error = 'Error: Incorrect username or password';
                die(header("location:index.php?loginFailed=true&reason=passwordusernamecombo"));
              
            }
        }
        
    
    }
	
?>