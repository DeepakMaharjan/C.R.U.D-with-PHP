<?php
	if (!isset($_SESSION['login'])=='yes' || $_SESSION['login'] != 'yes') {
        echo "<h1>Please login to open this page!!!</h1>";
        exit;
    }
?>