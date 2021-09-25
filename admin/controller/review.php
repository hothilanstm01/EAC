<?php
    include_once 'model/review.php';
    
    $action='index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
            $dd=getAlldd();
            $gt=getCTTourById_DD();
            var_dump($gt);
            /* include_once 'view/review/index.php'; */
        break;
    }
?>