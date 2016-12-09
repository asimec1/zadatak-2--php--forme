<?php
	# Stop Hacking attempt
    define('__APP__', TRUE);
	
	# Start session
    session_start();
    
    # Configuration file
    include_once("./config.php");
    
    # ---------------------------------------------------------------------------#
	# Connect to MySQL database
	# ---------------------------------------------------------------------------#
	@mysql_connect($conf['MySQL']['Host'], $conf['MySQL']['User'], $conf['MySQL']['Password']);
	@mysql_select_db($conf['MySQL']['Database']);
	
	# Redirect
    $redirect = "../";
	
	# ---------------------------------------------------------------------------#
	# Sign Up
	if($_POST['_action_'] == "sign_up") {
	    $_username = $_POST['user_username'];
		$_password = $_POST['user_password'];
		
		if($_username == $conf['User']['Username'] && $_password == $conf['User']['Password']) {
			$_SESSION['user']['valid'] = 'true';
		    $_SESSION['message'] = $language['Message']['Correct_signin'];
		}
		
		# Bad username or password
		else {
		
			unset($_SESSION['user']);
			$_SESSION['user']['valid'] = 'false';
			$_SESSION['message'] = $language['Message']['Incorrect_signin'];
		}
	}
	
	# ---------------------------------------------------------------------------#
    # Registration
    else if($_POST['_action_'] == "registration") {
        
        $query  = "INSERT INTO users (user_name, user_pass, user_email, user_country)";
        $query .= " VALUES ('" . $_POST['username'] . "', '" . $_POST['password'] . "', '" . $_POST['email'] . "', '" . $_POST['country'] . "')";
        $result = @mysql_query($query);
        
        $ID = mysql_insert_id();
        $_SESSION['message'] = '<p>Uspješno ste se registrirali!</p>';
        
        $redirect = "index.php";
    }
	
	# Close MySQL connection
    @mysql_close($mysql);
    
    # Redirect
    header("Location: " . $redirect);
    exit;