<?php

	session_start();
	
	if (!isset($_SESSION['user'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: index.html");
	} else if(isset($_SESSION['user'])!="") {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: index.html");
	}
	
	if (isset($_GET['logout'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: index.html");
		exit;
	}
	
?>