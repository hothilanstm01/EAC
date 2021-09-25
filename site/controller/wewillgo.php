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
    $topFeauture=getAllTopFeauture();
    $allPlace=getAllPlace();
    include_once 'view/wherewillwego/index.php';
    break;

    case 'content':
        $id=$_GET['idcontent'];
        $topFeautureById=getAllTopFeautureById($id);
        if(isset($_SESSION['user'])){
        $email_kh=$_SESSION['user']; /* lấy email của khách hàng */
        $khachhang=getkh_id($email_kh);  /* từ email để truy cập vào database lấy thông ti của khách hàng */
        $id_kh=$khachhang['id_kh']; /* lấy id khách hàng */
        $kh_dg=getKH_DG($id_kh,$id);
        } 
        $cm=getCM_By_ID_DD($id);
        $viewdd=getviewDDByID($id);
        $view=$viewdd['view']+1; 
        updateluotxemviewDD($view,$id);
        include 'view/content/content.php';
        break;


    break;

    

    case 'booktour':
        $id=$_GET['idcontent'];
        $topFeautureById=getAllTopFeautureById($id);
        //luu thong tin don hang
        $fname=$_POST['fullName'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $diadiem=$_POST['diadiem'];
        $gia=$_POST['gia'];
        $ngaydat=date('Y-m-d H:i:s');//ngay thang nam, gio,.. hien tai
        if(isset($_GET['id_kh'])){
            $id_kh=$_GET['id_kh'];
            $book=addToOrderlogin($fname,$email,$phone,$diadiem,$ngaydat,$id_kh);

            if ($book) {
                echo'
                <script type="text/javascript">
                    swal({
                    title: "Success!",
                    text: "Ban đã đặt tour thành công.",
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
                    text: "có lỗi xay ra vui lòng đặt lại hoặc đặt địa điểm khác",
                    type: "error",
                    timer: 5000,
                    showConfirmButton: true
                    }, function(){
                    window.location.href = "index.php?ctrl=usertourlist&id_kh='.$id_kh.'";
                    });
                    </script>';
                }

        }else{
         $madh=addToOrder($fname,$email,$phone,$diadiem,$ngaydat);
                if ($madh) {
                echo'
                <script type="text/javascript">
                    swal({
                    title: "Success!",
                    text: "Ban đã đặt tour thành công.",
                    type: "success",
                    timer: 2000,
                    showConfirmButton: true
                    }, function(){
                    window.location.href ="index.php?ctrl=wewillgo&act=content&idcontent='.$id.'";
                    });
                    </script>';
                }else{
                echo'
                <script type="text/javascript">
                    swal({
                    title: "Error!",
                    text: "có lỗi xay ra vui lòng đặt lại hoặc đặt địa điểm khác",
                    type: "error",
                    timer: 5000,
                    showConfirmButton: true
                    }, function(){
                    window.location.href = "index.php?ctrl=wewillgo&act=content&idcontent='.$id.'";
                    });
                    </script>';
                }
        }
        include 'view/content/content.php'; 
    break;

    case 'contentbestplace':
    include_once 'view/content/content.php';
    break;

    case 'rating':
    $rtm=$_POST['rate']; /* lấy số sao mới */
    $email_kh=$_SESSION['user'];/* lấy email của khách hàng */
    $khachhang=getkh_id($email_kh); /* từ email để truy cập vào database lấy thông ti của khách hàng */
    $id_kh=$khachhang['id_kh'];/* lấy id khách hàng */
    $id_dd = $_GET['id_dd'];
    addRT($id_dd,$id_kh,$rtm);


    $place=getplacebyID_one($id_dd);
    $rtc=$place['rating_dd'];
    $sl=$place['sl'];
    $rt=(($rtc*$sl)+$rtm)/($sl+1);
    $sl+=1;
    update_DD_RT($rt,$id_dd,$sl);

    $topFeautureById=getAllTopFeautureById($id_dd);
    $kh_dg=getKH_DG($id_kh,$id_dd);
    header('location:index.php?ctrl=wewillgo&act=content&idcontent='.$id_dd.'');
    break; 

}

?>
