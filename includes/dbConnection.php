<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = 'root';
	$database = 'softwaricastudents';

	$conn = @new mysqli($hostname, $username, $password, $database);
	if ($conn->connect_error) {
		die($conn->connect_error);
	}
?>