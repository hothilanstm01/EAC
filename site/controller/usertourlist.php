<?php
include_once 'model/database.php';
include_once 'model/wherewillwego.php';
include_once 'model/content.php';
include_once 'model/content_tip.php';
include_once 'model/login.php';
$action = 'index';
if(isset($_GET['act'])){
    $action=$_GET['act'];
}

switch($action){
    case 'index':
        $id_kh=$_GET['id_kh'];
        $gt=getTourById_KH($id_kh);
        $viewRT=getRT_BY_KH($id_kh);
        include 'view/usertourlist/index.php';
    break;

    case 'chitiettour':
        $id_dd=$_GET['id_dd'];
        $gt=getCTTourById_DD($id_dd);
        include 'view/usertourlist/chitiettour.php';
        break;
    case 'del':
        $id_kh=$_GET['id_kh'];
        $id=$_GET['id_bt'];
        $delete=deleteLT($id);
        if ($delete) {
            echo'
            <script type="text/javascript">
                swal({
                title: "Success!",
                text: "Ban đã xoa thành công.",
                type: "success",
                timer: 2000,
                showConfirmButton: true
                }, function(){
                window.location.href ="index.php?ctrl=usertourlist&id_kh='.$id_kh.'";
                });
                </script>';
            }else{
            echo'
            <script type="text/javascript">
                swal({
                title: "Error!",
                text: "vui Lòng Xóa Nội dung của địa điểm trước",
                type: "error",
                timer: 5000,
                showConfirmButton: true
                }, function(){
                window.location.href = "index.php?ctrl=usertourlist&id_kh='.$id_kh.'";
                });
                </script>';
            }
       /*  header('location:index.php?ctrl=usertourlist&id_kh='.$id_kh.''); */
        break;


}
?>