<?php
    session_start();
    include ('includes/dbConnection.php');
    if (!isset($_SESSION['login'])=='yes' || $_SESSION['login'] != 'yes') {
        echo "<h1>Please login to open this page!!!</h1>";
        exit;
    }

    $userId = $_SESSION['loginuserid'];

    $query = "SELECT * FROM tbl_admin_logins WHERE id = $userId";
    $result = $conn->query($query);
    $row = $result->fetch_array();
?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/all.css">
</head>

<body>
<div class="container">
    <?php include 'includes/header.php'; ?>
    <h1>Add Student</h1>
    <form action="addStudent-Action.php" method="POST" name="addStudent" id="addStudent">
        <table width="500" cellspacing="1">
            <tr>
                <td>Fullname</td>
                <td><input type="text" name="studFullname" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="studAddress" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="studEmail" required></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="studPhone" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <label for="male">
                        <input id="male" type="radio" value="Male" name="studGender" required>Male
                    </label>

                    <label for="female">
                        <input id="female" type="radio" value="Female" name="studGender"> Female
                    </label>
                    
                    <label for="others">
                        <input id="others" type="radio" value="Others" name="studGender">Others
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input class="btn" type="submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <?php include 'includes/footer.php'; ?>
</div>
</body>
</html>