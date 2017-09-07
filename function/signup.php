<?php
require_once 'config.php';
$nickname = $_GET["nickname"];
$email = $_GET["email"];
$password = $_GET["password"];
$sql = "insert boot_users values(NULL,'{$email}','{$password}','{$nickname}','{$email}',NULL,0)";
if($result = $conn->query($sql))
{
echo "注册成功";
}else{
echo "注册失败,该邮箱已注册";
}
$conn->close();
?>
