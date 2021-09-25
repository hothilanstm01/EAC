<?php
     include_once '../model/login.php';
        include_once '../model/database.php';

    $action = 'index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
        include 'view/login/login.php';
        break;
    
        case 'dangky':
            $name=$_POST['name'];
            $email=$_POST['email'];
            $sdt=$_POST['sdt'];
            $pass=$_POST['pass'];
            getkh_dangky($name,$email,$sdt,$pass);
            echo'<script>window.location="../index.php";</script>';
        break;

    }

?> 

