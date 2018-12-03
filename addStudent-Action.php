<?php
	session_start();
	include ('includes/dbConnection.php');
	$fullname = $_POST['studFullname'];
	$address = $_POST['studAddress'];
	$email = $_POST['studEmail'];
	$phone = $_POST['studPhone'];
	$gender = $_POST['studGender'];
	
	date_default_timezone_set("Asia/Kathmandu");
	$date = date("Y-m-d h:i:s");

	$query = "INSERT INTO tbl_students (id, fullname, address, email, phone, gender, added_date) 
	VALUES (Null, '$fullname', '$address', '$email', '$phone', '$gender', '$date')";

	//var_dump($query);
	$conn->query($query);

	header('Location: studentList.php?msg=StudentAdded');

?>