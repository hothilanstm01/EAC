<?php
include_once 'model/database.php';
include_once 'model/wherewillwego.php';
include_once 'model/content.php';
include_once 'model/content_tip.php';
$action = 'index';
if(isset($_GET['act'])){
    $action=$_GET['act'];
}

switch($action){
    case 'index':
    $allFeautureTip=getFeautureTip();
    $allTip=getAllTip();
    include_once 'view/tip/index.php';
    break;

    case 'contenttip':
    $id=$_GET['idtip'];
    $tip=getAllTipById($id);;
    include 'view/content/content-tip.php';
    break;

    case 'contentread':
    include_once 'view/content/content-tip.php';
    break;
    
}

?>