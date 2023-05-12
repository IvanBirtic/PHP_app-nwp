<?php
error_reporting(0);
	# Stop Hacking attempt
    define('__APP__', TRUE);

	# Start session
	session_start();
	
	
	unset($_POST);
	unset($_SESSION['user']);

	$_SESSION['user']['valid'] = 'false';
	$_SESSION['message'] = '<p>La pa pa!</p>';
	
	header("Location: index.php?menu=1");
	exit;