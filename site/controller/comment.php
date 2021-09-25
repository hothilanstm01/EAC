<?php
include_once 'model/database.php';
include_once 'model/wherewillwego.php';
include_once 'model/content.php';
include_once 'model/booktour.php';
include_once 'model/login.php';
include_once 'model/xuly.php';

    $action = 'index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
            $id=$_GET['idcontent'];
            $topFeautureById=getAllTopFeautureById($id);
            $email_kh=$_SESSION['user']; /* lấy email của khách hàng */
            $khachhang=getkh_id($email_kh);  /* từ email để truy cập vào database lấy thông ti của khách hàng */
            $id_kh=$khachhang['id_kh']; /* lấy id khách hàng */
            $kh_dg=getKH_DG($id_kh,$id);
            $cm=getCM_By_ID_DD($id); 
            include 'view/content/content.php';
        break;

        case 'add':
            if(isset($_SESSION['user'])){

                $id=$_GET['idcontent'];
                $topFeautureById=getAllTopFeautureById($id);
                $email_kh=$_SESSION['user']; /* lấy email của khách hàng */
                $khachhang=getkh_id($email_kh);  /* từ email để truy cập vào database lấy thông ti của khách hàng */
                $id_kh=$khachhang['id_kh']; /* lấy id khách hàng */
                $kh_dg=getKH_DG($id_kh,$id);
                $noidung_cm = $_POST['noidung'];
                $date = date('Y-m-d H:i:s');
                addCM($id_kh,$id,$date,$noidung_cm);
                $cm=getCM_By_ID_DD($id); 
                header('location:index.php?ctrl=wewillgo&act=content&idcontent='.$id.'');
            }else{
                header('location:view/login/login.php');
            }
            break;

            

    }


    
    
?>