<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	# Stop Hacking attempt
	define('__APP__', TRUE);
	
	# Start session
    session_start();
	
	# Database connection
	include "dbconn.php";
		
	# Variables MUST BE INTEGERS
	if(!isset($_GET['menu'])) { $_GET['menu'] =  1; $menu = (int)$_GET['menu']; }
	if(!isset($_GET['id']))   { $_GET['id'] =  1; $id = (int)$_GET['id']; }
	if(!isset($_GET['edit'])) { $_GET['edit'] =  1; $edit = (int)$_GET['edit']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = 'FALSE';  }
print '<!DOCTYPE HTML>
<html>
	<head>
		<title>Programiranje web aplikacija</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Alen Šimec">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
	</head>
<body>

	<!-- Header -->
	<header id="header">
		<h1><a href="#">Ion</a></h1>';
			include "menu.php";
	print '
	</header>';
	if ($_GET['menu'] == 1) { include "home.php"; }
	else if ($_GET['menu'] == 3) { include "contact.php"; }
	else if ($_GET['menu'] == 5) { include "signup.php"; }
	else if ($_GET['menu'] == 6) { include "signin.php"; }
	
	# Admin Control Panel
	else if ($_GET['menu'] >= 100 && $_GET['menu'] <= 105) { include "users.php"; }
	# Include Footer Banner
	include "footer.php";
	print '
</body>
</html>';