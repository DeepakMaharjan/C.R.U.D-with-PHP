<?php
    session_start();
    include ('includes/dbConnection.php');
    include ('includes/loginCheck.php');

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
    <?php
        if (isset($_GET['msg']) && $_GET['msg'] == 'StudentAdded') {
            echo "<span>Student Added Sucessfully!!!</span>";
        }

        if (isset($_GET['msg']) && $_GET['msg'] == 'Deleted') {
            echo "<span>1 row deleted!!!</span>";
        }

        if (isset($_GET['msg']) && $_GET['msg'] == 'Failed') {
            echo "<span>Failed to delete!!!</span>";
        }
        if (isset($_GET['msg']) && $_GET['msg'] == 'updated') {
            echo "<span>1 row updated!!!</span>";
        }
    ?>
    <h1>Student Login</h1>
    <table width="100%" cellspacing="1">
        <tr>
            <th>S.No</th>
            <th>Fullname</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Added Date</th>
            <th>Action</th>
        </tr>
        <?php
            $query = "SELECT * FROM tbl_students";
            $result = $conn->query($query);
            $i = 1;
            while ($row = $result->fetch_array()) {
                //echo $row['fullname'];
                //die;
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['added_date']; ?></td>
                <td>
                    <a href="editStudent.php?edit=<?php echo $row['id']; ?>" class="btn">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn">Delete</a>
                </td>
            </tr>
        <?php
            $i++;        
            }
        ?>
    </table>

    <a href="addStudent.php" class="btn">Add New Student</a>
    <?php include 'includes/footer.php'; ?>
</div>
</body>
</html>