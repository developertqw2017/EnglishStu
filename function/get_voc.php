<?php
require_once 'config.php';
$voc=$_POST["voc"];
function get_voc(voc,stc=0,esy=0)
{
    $sql = "SELECT voc,pronounce_uk,pronounce_us from voc_level where voc = $voc";
    $result = $conn->($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<table style ='border:solid 1px black;'>";
}

}
}
get_voc($voc);
?>
