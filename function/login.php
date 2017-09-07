<?php
require_once 'config.php';
//session_start();
$email = $_GET["username"];
$password = $_GET["password"];
$userinfo;
$sql = "SELECT * from boot_users where user_login = '{$email}' and user_pass = '{$password}'";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
       // $userinfo = array(
       //     'ID'=>$row["ID"],
       //     'user_login'=> $row["user_login"],
       //     'user_pass'=> $row["user_pass"],
        //    'user_nickname'=>$row["user_nickname"],
      //      'user_email'=> $row["user_registered"],
      //      'user_status'=> $row["user_status"]
      //  );
     //   $session_id = session_id();
        //   setcookie('PHPSESSID',$session_id,time()+7*24*3600);
        header("Location: http://120.76.140.147/test/frtp_1_admintemplate/header.php");
    }
   // $_SESSION['ID']=$userinfo['ID'];
   // $_SESSION['user_login']=$userinfo['user_info'];
   // $_SESSION['userinfo']=$userinfo;

   // $secureKey = 'tqw';
   // $str = serialize($userinfo);
   // $str = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), $str, MCRYPT_MODE_ECB));
   // setcookie('userinfo',$str);
$conn->close();
}else{
    echo "账号密码错误";
    $conn->close();
}
?>
