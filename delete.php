<?php
	session_start();
	include ('includes/dbConnection.php');

	/*
		$query = "SELECT * FROM tbl_students WHERE id = $_GET[id]";
		$result = $conn->query($query);
		$row = $result->fetch_array();
		echo "<pre>";
		var_dump($row);
	*/

		$query = "DELETE FROM tbl_students WHERE id = $_GET[id]";
		$result = $conn->query($query);
		if ($result) {
			header("Location: studentList.php?msg=Deleted");
		}
		else{
			header("Location: studentList.php?msg=Failed");
		}
?>