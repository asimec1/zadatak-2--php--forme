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
    # Registration
    if($_POST['_action_'] == "registration") {
		
		$hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
        #password_hash https://secure.php.net/manual/en/function.password-hash.php
		
        $query  = "INSERT INTO users (user_name, user_pass, user_email, user_country)";
        $query .= " VALUES ('" . $_POST['username'] . "', '" . $hash . "', '" . $_POST['email'] . "', '" . $_POST['country'] . "')";
        $result = @mysql_query($query);
        
        $ID = mysql_insert_id();
        $_SESSION['message'] = '<p>Uspješno ste se registrirali!</p>';
        
        $redirect = "index.php?menu=5";
    }
	
	# ---------------------------------------------------------------------------#
	# Sign Up
	else if($_POST['_action_'] == "sign_up") {
	    $_username = $_POST['username'];
		$_password = $_POST['password'];

		$query  = "SELECT * FROM users";
		$query .= " WHERE user_name='" .  $_username . "'";
		$result = @mysql_query($query);
		$row = @mysql_fetch_array($result);
		
		if (password_verify($_password, $row['user_pass'])) {
		#password_verify https://secure.php.net/manual/en/function.password-verify.php
			$_SESSION['user']['valid'] = 'true';
			$_SESSION['user']['id'] = $row['user_id'];
			$_SESSION['user']['name'] = $row['user_name'];
		    $_SESSION['message'] = '<p>Dobrodošli ' . $_SESSION['user']['name'] . '</p>';
			$redirect = "index.php?menu=100";
		}
		
		# Bad username or password
		else {
			unset($_SESSION['user']);
			$_SESSION['user']['valid'] = 'false';
			$_SESSION['message'] = '<p>Upisali ste pogrešno korisničko ime ili lozinku</p>';
			$redirect = "index.php?menu=5";
		}
		
	}
	
	# Close MySQL connection
    @mysql_close($mysql);
    
    # Redirect
    header("Location: " . $redirect);
    exit;