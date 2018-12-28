<?php 
	// session_start();

	// include ('includes/dbConnection.php');

	// $username = $_POST['username'];
	// $password = md5($_POST['password']);

	// $query = "SELECT * FROM tbl_admin_logins WHERE username = '$username' AND password = '$password'";

	// $result = $conn->query($query);

	// $count = $result->num_rows;

	// if ($count == 1) {
	// 	$row = $result->fetch_array();
	// 	$_SESSION['login']='yes';
	// 	$_SESSION['loginuserid'] = $row['id'];
	// 	header("Location: studentList.php");
	// }
	// else{
	// 	header("Location: index.php?msg=incorrect");
	// }
?>
<?php
	session_start();
	include 'includes/dbConnection.php';
	$now = date("Y-m-d H:i:s");
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = "SELECT * FROM tbl_admin_logins WHERE username = '$username'";
	$result = $conn->query($query);
	$num=$result->num_rows;

	if ($num==1) {
		$user = $result->fetch_array();
		$query = "SELECT * FROM tbl_login_attempts WHERE user_id = '$user[id]' ORDER BY date DESC LIMIT 1";
		
		$result = $conn->query($query);
		$lastAttemptResult = $result;

		if ($result->num_rows==1) {
			$checkNumOfAttempts = $result->fetch_array();
			if ($checkNumOfAttempts['login_attempt']=='3') {
				$lastAttemptTime = $checkNumOfAttempts['date'];
				$timeDifference = strtotime($now) - strtotime($lastAttemptTime);
				if ($timeDifference < (3*60)) {
					echo "Login blocked please try again after few minutes!";
					exit;
				}
				else{
					$query = "DELETE FROM tbl_login_attempts WHERE user_id = '$user[id]'";
					$conn->query($query);
				}
			}
		}
		$query = "SELECT * FROM tbl_admin_logins WHERE username = '$username' AND password='$password'";
		$result = $conn->query($query);
		$row = $result->fetch_array();
		$num = $result->num_rows;
		if ($num==1) {
			$query = "DELETE FROM tbl_login_attempts WHERE user_id = '$user[id]'";
			$conn->query($query);
			$_SESSION['login']='yes';
			$_SESSION['loginuserid'] = $row['id'];
			header("Location: studentList.php");
		}
		else{
			if (isset($checkNumOfAttempts['login_attempt'])) {
				$newAttempt = $checkNumOfAttempts['login_attempt']+1;
			}
			else{
				$newAttempt = 1;
			}
			$query = "INSERT INTO tbl_login_attempts (`id`, `user_id`, `login_attempt`, `date`) VALUES (NULL, '$user[id]', '$newAttempt', '$now')";
			$conn->query($query);

			echo "Login Attempt $newAttempt";
		}

	}
	else{
		header("Location: index.php?msg=incorrect");
	}
?>