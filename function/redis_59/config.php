<?php
require 'predis/autoload.php';

$servers = array(
    'tcp://127.0.0.1:6379',
);

$client = new Predis\Client($servers,array('cluster' => redis));

//$i = 0;
//echo $i = $client->lLen('vocs_len_2144799613@qq.com');
//echo "<br/>";
//echo $client->lIndex('vocs_len_2144799613@qq.com',$i-1);
?>
