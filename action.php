<?php 
	session_start();

	include ('includes/dbConnection.php');

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = "SELECT * FROM tbl_admin_logins WHERE username = '$username' AND password = '$password'";

	$result = $conn->query($query);

	$count = $result->num_rows;

	if ($count == 1) {
		$row = $result->fetch_array();
		$_SESSION['login']='yes';
		$_SESSION['loginuserid'] = $row['id'];
		header("Location: studentList.php");
	}
	else{
		header("Location: index.php?msg=incorrect");
	}
?>