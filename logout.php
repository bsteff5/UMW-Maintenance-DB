<?php

	// Initialize the Session
	session_start();

	// Throw our variables back to what they should be if a user wasn't logged in
	$_SESSION['loggedIn'] = 0;
	$_SESSION['accessLevel'] = 0;
	$_SESSION['username'] = 'Anonymous';
	
	
	// Throw them back to the homepage	
	header('Location: index.php');
	

?>