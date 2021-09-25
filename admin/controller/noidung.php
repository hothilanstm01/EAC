<?php
     include_once 'model/home.php';
     include_once 'model/admin.php';
     include_once 'model/login.php';
     include_once 'model/place.php';
     include_once 'model/tour.php';
 

    $action = 'index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
        $id=$_GET['id'];
        $dd = getDDID($id);

        if($dd['trangthai'] == 0 ){
            echo'alert("Bạn Chưa ")';
            echo'<script>window.location="index.php?ctrl=noidung&act=add";</script>';
        }else{
            $tourCoNoiDung=getTourById($id);
            include 'view/noidung/index.php';
        } 
        
        break;
        
        case 'add':
        include 'view/noidung/add.php';
    }

    


?>
