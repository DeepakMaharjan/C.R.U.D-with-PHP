<?php 
	session_start();

	//Unset user data from session
	unset($_SESSION['login']);
	unset($_SESSION['loginuserid']);

	//Destroy Entire Session
	session_destroy();

	header("Location: index.php")

?>