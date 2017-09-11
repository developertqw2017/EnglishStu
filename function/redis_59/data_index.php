<?php
    include './config.php';
//    $len[3];
    $stued[3];
//    $len[0] = $client->lLen('vocs_len_2144799613@qq.com');
//    $len[1] = $client->lLen('sentence_len_2144799613@qq.com');
//    $len[2] = $client->lLen('essay_len_2144799613@qq.com');


    $arr_vocs=array();
    $arr_sentence=array();
    $arr_essay=array();

    for($i = 0; $i<7; $i++)
    {
        array_push($arr_vocs,(int)$client->lIndex('vocs_len_2144799613@qq.com',$i));
        array_push($arr_sentence,(int)$client->lIndex('sentence_len_2144799613@qq.com',$i));
        array_push($arr_essay,(int)$client->lIndex('essay_len_2144799613@qq.com',$i));
    }
//    $arr_vocs=array();
//    array_push($arr_vocs,'1');
//    var_dump($arr_vocs);
    $stued[0] = $arr_vocs;
    $stued[1] = $arr_essay;
    $stued[2] = $arr_sentence;
    $jsonData_stu = json_encode($stued);
    echo $jsonData_stu;
?>
