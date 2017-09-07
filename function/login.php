<?php
require_once 'config.php';
$email = $_GET["username"];
$password = $_GET["password"];

$sql = "SELECT * from boot_user where user_login = '{$rmail}' and user_pass = '{$password}'";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
echo "success";

}
?><?php
require_once 'config.php';
$email = $_GET["username"];
$password = $_GET["password"];

$sql = "SELECT * from boot_users where user_login = '{$email}' and user_pass = '{$password}'";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
setcookie($email,$password,time()+604800);
echo "success";
}else{
echo "账号密码错误";
}
?>
