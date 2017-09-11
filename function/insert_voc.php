<?php
    require_once 'config.php';
    $voc_in = $_GET["voc_in"];
    $pro_uk = $_GET["pro_in_uk"];
    $pro_us = $_GET["pro_in_us"];
    $trans_in = $_GET["trans_in"];
    echo $voc_in,$pro_uk,$pro_us,$trans_in;
    $sql = "select * from voc_level where voc = '{$voc_in}'";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
    echo "该词已有";
    $conn->close();
}else{
    $sql = "insert voc_level values(NULL,'{$voc_in}',4,'{$pro_uk}','{$pro_us}','{$trans_in}')";
    $result = $conn->query($sql);
    echo "添加成功！";
    $conn->close();
}
?>
