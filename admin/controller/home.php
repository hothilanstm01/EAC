<?php
     include_once 'model/home.php';
     include_once 'model/admin.php';
     include_once 'model/login.php';


    $action = 'index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
        $rv1 = getCountTour();
        $rv2 = getTongTien();
        $rv3 = getCountKH();
        $rankTour =  getRankTour();
        $rankKH = getRankKH();
        $ad = getAdmin();
        $gv= getluotxem();
        include 'view/home/index.php';
        break;

        case 'del':
            $mail=$_SESSION['admin'];
            $admin=getad($mail);

            foreach($admin as $ad){
                if($ad['position']=='leader'){
                    $id = $_GET['id'];
                    $delete=deleteAdmin($id);
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
                        window.location.href ="index.php?ctrl=home";
                        });
                        </script>';
                    }else{
                    echo'
                    <script type="text/javascript">
                        swal({
                        title: "Error!",
                        text: "Không xóa được vì tồn tại khách hàng.",
                        type: "error",
                        timer: 5000,
                        showConfirmButton: true
                        }, function(){
                        window.location.href = "index.php?ctrl=home";
                        });
                        </script>';
                    }

                }else{
                    echo'<script>alert("Bạn không Đủ Thẩm Quền Để Xóa Tài Khoản")</script>';

                }
            }

                $rv1 = getCountTour();
                $rv2 = getTongTien();
                $rv3 = getCountKH();
                $rankTour =  getRankTour();
                $rankKH = getRankKH();
                $ad = getAdmin();
              include 'view/home/index.php';
        break;

    }




?>
