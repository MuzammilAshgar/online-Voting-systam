<?php
include('connection.php');
$name = $_POST['iname'];
$password = $_POST['ipassword'];
$role = $_POST['role'];

$sql_chack = mysqli_query("SELECT * FROM user where mobile='$'")
?>