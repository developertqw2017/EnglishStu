<meta charset="utf-8">
<?php
header("content-type:text/html;charset=UTF-8");
$voc = $_GET["voc"];
$servername = "localhost";
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
$sql = "SELECT voc_id,voc,pronounce_uk,pronounce_us,translates from voc_level where voc= '{$voc}'";
//$sql = "SELECT database()";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h1 >{$row["voc"]}   <small>英{$row["pronounce_uk"]} 美{$row["pronounce_us"]}</small></h1>";
        echo "<h2>{$row["translates"]}</h2>";
        //        echo "<h1 class="content pull-left" style="">abandon <small>/ə'bændən/</small></h1>";
        //    echo empty($row["database()"]);
//        if($row["database()"]==NULL)
//       {
//            echo "y";
//        }else{
//            echo $row["database()"];
//        }
        $sql = "SELECT exm_sentence,sen_translation from exm_sentence where exm_sentence_id = 1 ";
        $result1 = $conn->query($sql);
        if($result1->num_rows > 0)
        {
            while($row1 = $result1->fetch_assoc())
            {
                echo "<div>{$row1["exm_sentence"]}</div>";
                echo "<div>{$row1["sen_translation"]}</div>";
            }
            }else{
                echo "暂时没有例句";
                echo "1";
            }
    }
}else{
    echo "xxxxxxxxxxxx";
}

$conn->close();
?>
