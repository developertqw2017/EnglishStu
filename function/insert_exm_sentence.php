<?php
require_once 'config.php';
$voc_in = $_GET["voc_sen"];
$sentence = $_GET["sentence_in"];
echo $sentence;
$sql = "select m.voc, n.exm_sentence,n.exm_sentence_id from voc_level m, exm_sentence n where m.voc_id = n.exm_sentence_id and m.voc = '{$voc_in}'";
$result = $conn->query($sql);
echo $sql;
if($result)
{

    $sql = "select voc_id from voc_level where voc = '{$voc_in}'";
    $result1 = $conn->query($sql);
    if($result1)
    {
        while($row = $result1->fetch_assoc())
        {
            echo $_GET["sen_insert"],$row["exm_sentence_id"];
            $sql = "insert exm_sentence values('{$sentence}','gafdagadf',{$row["voc_id"]})";
            echo $sql;
            $conn->query($sql);
            echo "添加成功";

}

}else{
    echo "该单词还未添加";

}

}
?>
