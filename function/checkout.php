<?php
require_once 'config.php';
$email = $_GET["email"];
$sql = "select * from boot_users where user_login = '{$email}'";
//$result = $conn->query($sql)
//echo $result;
$conn->close();
?>
