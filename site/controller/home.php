<?php
    include_once 'model/database.php';
    include_once 'model/content.php';
    include_once 'model/wherewillwego.php';
    include_once 'model/content_tip.php';
    $action = 'index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
        $allReview=getAllTopFeauture();
        $tip1= getTipNote1();
        $tip2= getTipNote2();
        $tip3= getTipNote3();
        $tip4= getTipNote4();
        $tip5= getTipNote5();
        $gv= getluotxem();
        $view = $gv['view']+1;
        updateluotxem($view);
        include 'view/home/index.php';
        break;

        case'contenttip':
            $id=$_GET['idtip'];
            $tip=getAllTipById($id);
            include 'view/content/content-tip.php';
        break;

        
            

    }


    
    
?>