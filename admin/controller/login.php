<?php
     include_once '../model/login.php';


    $action = 'index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
        $mail=$_SESSION['admin'];
        $admin=getad($mail);
        break;

        case 'dangkyadmin':
            $name=$_POST['name'];
            $email=$_POST['email'];
            $sdt=$_POST['sdt'];
            $pass=$_POST['pass'];
            getadmin_dangky($name,$email,$sdt,$pass);
            echo'<script>window.location="../login.php";</script>';
            break;
    }


?>
