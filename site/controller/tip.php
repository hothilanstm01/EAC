<?php
include_once 'model/database.php';
include_once 'model/wherewillwego.php';
include_once 'model/content.php';
include_once 'model/booktour.php';
$action = 'index';
if(isset($_GET['act'])){
    $action=$_GET['act'];
}

switch($action){
    case 'index':
    $topFeauture=getAllTopFeauture();
    $allPlace=getAllPlace();
    include_once 'view/tip/index.php';
    break;

    case 'content':
    $id=$_GET['idcontent'];
    $topFeautureById=getAllTopFeautureById($id);
    include 'view/content/content.php';
    break;

    case 'book':
        $id=$_GET['iddiadiem'];
        $tourname=$_POST['name_dd'];
    include_once 'view/content/content.php';
    break;

    
}

?>