<?php
include 'sqltest.php';
$username = trim($_REQUEST['name']);
$password = trim($_REQUEST['password']);
echo "Login details saved successfully ".$username;
 ?>
