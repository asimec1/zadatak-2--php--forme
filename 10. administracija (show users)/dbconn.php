<?php
	# Stop Hacking attempt
	if(!defined('__APP__')) {
		die("Hacking attempt");
	}
	
	include "config.php";
	
	# Connect to MySQL database
	$MySQL = @mysql_connect($conf['MySQL']['Host'], $conf['MySQL']['User'], $conf['MySQL']['Password']);
	@mysql_select_db($conf['MySQL']['Database'], $MySQL) or die('<h1>Could not connect to the database at this time. Please try later.</h1>');