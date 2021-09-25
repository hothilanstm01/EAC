<?php

include_once('database.php');

function getCTTourById_DD(){
    $sql="SELECT * FROM diadiem INNER JOIN booktour ON diadiem.id_dd = booktour.id_dd ";
    return query($sql);
}

function getall_DD(){
    $sql="SELECT * FROM `diadiem` ";
    return query($sql);
}


?>
