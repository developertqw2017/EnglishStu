<?php
require_once 'config.php';
$voc_in = $_GET["voc_in"];
$sentence = $_GET["sentence_in"];
$sql = "select m.voc, n.exm_sentence,n.n.exm_sentence_id from voc_level m, exm_sentence n where m.voc_id = n.exm_sentence_id and m.voc = {$voc_in}";
$result = $conn->query($sql);
if($result -> num_rows = 0)
{
    $sql = "select voc_id from voc_level where voc = '{$voc_in}'";
    $result1 = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $sql = "insert exm_sentence values('{$exm_sentence}','{$exm_sentence_id}')";
            $conn->query($sql);
            echo "添加成功";

}

}else{
    echo "该单词还未添加"；

}

}
?>
