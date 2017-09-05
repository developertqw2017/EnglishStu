<meta charset="utf-8">
<?php
$voc5 = $_GET["voc"];
//$voc = "apple";
echo $voc5;
$servername = "localhost";
echo $servername;
$username = "root";
$password = "tqw503417";
$dbname = "boots";
// 创建连接
 $conn = new mysqli($servername, $username, $password, $dbname);
//
//  // 检测连接
if($conn->connect_error){
    die("数据库连接失败: " . $conn->connect_error);
}
$conn->set_charset("uft8");
$sql = "SELECT voc,pronounce_uk,pronounce_us from voc_level where voc= 'apple'";
//$sql = "SELECT database()";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h1 >{$row["voc"]}   <small>英{$row["pronounce_uk"]} 美{$row["pronounce_us"]}</small></h1>";
//        echo "<h1 class="content pull-left" style="">abandon <small>/ə'bændən/</small></h1>";
        //    echo empty($row["database()"]);
//        if($row["database()"]==NULL)
//       {
//            echo "y";
//        }else{
//            echo $row["database()"];
//        }
    }
}else{
    echo "xxxxxxxxxxxx";
}
$conn->close();
?>
