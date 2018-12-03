<?php session_start(); ?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/all.css">
</head>
<body>
	<div class="container">
		<header>
			<section class="left">
				C.R.U.D Function with PHP
			</section>
			<section class="right">
				Dear user, Heartily welcome!
			</section>
			
		</header>
		<h1>Login</h1>
		<?php if (isset($_GET['msg']) == 'incorrect') { ?>
			<span>Username or Password Incorrect!!!</span>
		<?php } ?>
		<form action="action.php" method="POST" id="login" name="login">
			<table cellspacing="1">
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" id="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Login" class="btn">
					</td>
				</tr>
			</table>
		</form>
		<?php include 'includes/footer.php'; ?>
	</div>	
</body>
</html>