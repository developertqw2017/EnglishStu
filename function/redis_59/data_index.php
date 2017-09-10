<?php
    require './config.php';
    $len[3];

    $len[0] = $client->lLen('vocs_len_2144799613@qq.com');
    $len[1] = $client->lLen('sentence_len_2144799613@qq.com');
    $len[2] = $client->lLen('essay_len_2144799613@qq.com');

    $vocs_len = $client->lIndex('vocs_len_2144799613@qq.com',$len[0]-1);
    $sentence_len = $client->lIndex('sentence_len_2144799613@qq.com',$len[1]-1);
    $essay_len = $client->lIndex('essay_len_2144799613@qq.com',$len[2]-1);
?>
