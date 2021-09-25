<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/usertour.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<header>
        <div class="roww">
        <div class="bg_header_content">
            <div class="boxcenter_content_tip">
                
                    <div class="bg_menu_content">
                        <nav class="navuser">
                            <div class="bg_logo_content">
                                <div class="text_logo">
                                    <a href="index.php?ctrl=home&act=index">EAC</a>
                                    <a href="index.php?ctrl=wewillgo&act=index">Where will we go?</a>
                                    
                                    <a href="index.php?ctrl=content-tip&act=index">Tip</a>
                                </div>
                            </div>
                
                            
                        </nav>
                        <div class="left_loginuser">
                            <div class="float_text">
                            
                            <?php
                                                if(!isset($_SESSION['user']))//kiem tra xem co dang nhap chua
                                                    {
                                                        echo'<a href="view/login/login.php">login</a>';
                                                    } else{
                                                            include_once 'model/login.php';
                                                            $kh_login=$_SESSION['user'];
                                                            $khachhang=getkh($kh_login);

                                                            /* foreach($khachhang as $ad){
                                                                echo''.$ad['name_ad'].'';
                                                            } */
                                                            foreach ($khachhang as $ad) {
                                                                    $id_kh=$ad['id_kh'];
                                                                    $nameKH=$ad['name_kh'];
                                                                    $emailKH=$ad['email_kh'];
                                                                    $sdtKH=$ad['sdt_kh'];
                                                                echo'
                                                                <div class="dropdown">
                                                                    <ul>
                                                                        <li>
                                                                        

                                                                            <a href="#">'.$ad['name_kh'].' <i class="fa fa-caret-down" style="font-size:17px;color:black"></i></a>
                                                                 
                                                                            <div class="nav_ad_con">
                                                                                    <ul>
                                                                                        <li><a href="index.php?ctrl=usertourlist&id_kh='.$ad['id_kh'].'">Danh sách tour</a></li>
                                                                                        <li><a href="view/login/logout.php">Đăng Xuất</a></li>
                                                                                    </ul>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                ';
                                                            }
                                                        }
                                                ?>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </header>

<div class="roww">
    <div class="titleLT">
            Danh Sách các Tour của <span><?php echo''.$nameKH.''?></span>
    </div>

</div>

    <article>
        <div class="roww">
            <div class="full_bg">
                <div class="boxcenter_content_tip">
                            <div class="card-body">
                                <table class="table table-striped table">
                                
                                    <tr>
                                        <th>Mã tour</th>
                                        <th>Tên khách hàng</th>
                                        <th>Địa điểm</th>
                                        <th>Ngày đi</th>
                                        <th>Del</th>
                                    </tr>
                            
                                 <?php

                                    foreach($gt as $gt){
                                        echo'
                                            <tr>
                                                <td>'.$gt['id_dd'].'</td>
                                                <td>'.$gt['hoten'].'</td>
                                                <td><a href="index.php?ctrl=usertourlist&act=chitiettour&id_dd='.$gt['id_dd'].'&name_dd='.$gt['name_dd'].'">'.$gt['name_dd'].'</a></td>
                                                <td>'.$gt['ngaydat'].'</td>
                                                <td><a href="index.php?ctrl=usertourlist&act=del&id_bt='.$gt['id_kh'].'&id_kh='.$gt['id_kh_login'].'"><button type="button" class="btn btn-danger">Del</button></a></td>
                                            </tr>
                                        ';
                                    }

                                 ?>
                                </table>
                            </div>

                </div>
            </div>
        </div>
    </article>

    <div class="roww">
    <div class="titleLT">
        Các địa điểm đã đánh giá của <span><?php echo''.$nameKH.''?></span>
    </div>

    <div class="roww">
            <div class="full_bg">
                <div class="boxcenter_content_tip">
                            <div class="card-body">
                                <table class="table table-striped table">
                                
                                    <tr>
                                        <th>Mã Địa Điểm</th>
                                        <th>Tên Địa Điểm</th>
                                        <th>Số Sao Đánh Giá</th>
                                        <th>Rating Địa Điểm</th>
                                        <th>Del</th>
                                    </tr>
                            
                                 <?php

                                    foreach($viewRT as $rt){
                                        echo'
                                        <tr>
                                        <td>'.$rt['id_dd'].'</td>
                                        <td>'.$rt['name_dd'].'</td>
                                        <td>'.$rt['rate'].'</td>
                                        <td>'.$rt['rating_dd'].'</td>
                                        <td><a href=""><button type="button" class="btn btn-danger">Del</button></a></td>
                                    </tr>
                                        ';
                                    }

                                 ?>
                                </table>
                            </div>

                </div>
            </div>
        </div>

</div>
</body>
</html>