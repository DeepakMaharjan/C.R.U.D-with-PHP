<?php
    session_start();
    include 'includes/dbConnection.php';
    include 'includes/loginCheck.php';
    $userId = $_SESSION['loginuserid'];

    $query = "SELECT * FROM tbl_admin_logins WHERE id = '$userId'";
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
    <?php
        if (isset($_GET['edit']) && $_GET['edit']) {
            $stu_Id  = $_GET['edit'];
            $query = "SELECT * FROM tbl_students WHERE id = $stu_Id";
            $result = $conn->query($query);
            $row = $result->fetch_array();
        }
    ?>
    <form action="editStudent-Action.php?updated=<?php echo $row['id']; ?>" method="POST" name="editStudent" id="editStudent">
        <table width="500" cellspacing="1">
            <tr>
                <td>Fullname</td>
                <td><input type="text" name="studFullname" value="<?php echo $row['fullname']; ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="studAddress" value="<?php echo $row['address']; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="studEmail" value="<?php echo $row['email']; ?>"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="studPhone" value="<?php echo $row['phone']; ?>"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <label for="male">
                        <input id="male" type="radio" name="studGender" value="Male"
                            <?php 
                                if($row['gender'] == 'Male'){?>
                                    checked="checked"
                            <?php }?> 
                        >Male
                    </label>

                    <label for="female">
                        <input id="female" type="radio" name="studGender" value="Female"
                            <?php
                                if ($row['gender'] == 'Female') { ?>
                                    checked="checked"
                            <?php } ?> 
                            >Female
                    </label>
                    
                    <label for="others">
                        <input id="others" type="radio" value="Others" name="studGender"
                            <?php
                                if ($row['gender'] == 'Others') { ?>
                                    checked = "checked"
                            <?php } ?>
                        >Others
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input class="btn" type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
    <?php include 'includes/footer.php'; ?>
</div>
</body>
</html>