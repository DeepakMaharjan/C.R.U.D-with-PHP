<?php
	session_start();
	include 'includes/dbConnection.php';

	$fullname = $_POST['studFullname'];
	$address = $_POST['studAddress'];
	$email = $_POST['studEmail'];
	$phone = $_POST['studPhone'];
	$gender = $_POST['studGender'];
	date_default_timezone_set("Asia/Kathmandu");
	$date = date("Y-m-d h:i:s");

	if (isset($_GET['updated'])) {
		$uId = $_GET['updated'];
		
		$query = "UPDATE tbl_students SET `fullname` = '$fullname', `address` = '$address', `email` = '$email', `phone` = '$phone', `gender` = '$gender', `added_date` = '$date' WHERE `id` = '$uId'";
		
		$result = $conn->query($query);
		
		header("Location: studentList.php?msg=updated");
	}
	else{
		echo "Something went wrong!!!";
	}

?>