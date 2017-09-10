<?php
    include './config.php';
    $len[3];
    $stued[3];
    $len[0] = $client->lLen('vocs_len_2144799613@qq.com');
    $len[1] = $client->lLen('sentence_len_2144799613@qq.com');
    $len[2] = $client->lLen('essay_len_2144799613@qq.com');

    $stued[0] = $client->lIndex('vocs_len_2144799613@qq.com',$len[0]-1);
    $stued[1] = $client->lIndex('sentence_len_2144799613@qq.com',$len[1]-1);
    $stued[2] = $client->lIndex('essay_len_2144799613@qq.com',$len[2]-1);
    $jsonData_stu = json_encode($stued);
    echo $jsonData_stu;
?>
