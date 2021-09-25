<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tips note</title>
    <link rel="stylesheet" href="css/tip.css">
    
</head>
<body>

<header>
    <div class="roww">
        <div class="bg_all">
            <div class="boxcenter">

                <div class="menu_wwwg">

                    <div class="logo_wwwg">
                            <a href="index.php">EAC</a>

                            <a href="index.php?ctrl=wewillgo">where will we go</a>
                            <a href="index.php?ctrl=content-tip">Tips</a>
                            
                    </div>
                    <div class="menu_link">
                        <div class="link_right">
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



<!-- phan background -->
    <div class="roww">
        <div class="bg_background">
            <div class="box_img_background">
                <img src="img/tip.jpg" alt="">
               
            </div>

           

</div>
        
</div>



<!-- phan feature -->
    <div class="roww">
        <div class="boxcenter position">
            <div class="bg_feature">
                <div class="bg_feature_item">
            
                    <div class="slick_picture">
                                    <div class="text_feature">
                                        Tips note 
                                    </div>
                                    <div class="small_text_tip">
                                        Cùng tìm hiểu những mẹo cần lưu ý cho chuyến hành trình bạn nhé.
                                    </div>
                        <div class="box_picture">
            
                                        <div class="boxnextback">
                                                    <div class="next_wwwg"><i class="fa fa-chevron-left prevwwg" aria-hidden="true"></i></div>
                                                    <div class="back_wwwg"><i class="fa fa-chevron-right nextwwg" aria-hidden="true"></i></div>
                                        </div>
                                <div class="bgitem">
                                     
                                    <div class="box_item">
                                        <div class="center">
                                        <?php
                                            foreach($allFeautureTip as $ft){
                                                echo '
                                                <div class="fr_box">
                                            
                                                <div class="fr_img">
                                                    <div class="bg">
                                                        <img src="img/'.$ft['img_tip'].'" alt="">
                                                    </div>
                                                </div>
    
                                                <div class="fr_name">
                                                    <a href="index.php?ctrl=content-tip&act=contenttip&idtip='.$ft['id_tip'].'">
                                                    <span>'.$ft['name_tip'].'</span>
                                                    </a>
                                                </div>
                                            </div>
                                                ';
                                            }
                                        ?>
                                        

                                        
                                        

                                        
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


<!-- phan 3 box -->



<article>
    <div class="roww">
        <div class="bg_review">
            <div class="boxcenter"> 
                <div class="bg_box_review">
                    <!-- Search form -->
                    <div class="md-form active-purple-2 mb-3">
                          
                          <div class="icon_search">
                              <i class="fas fa-search"></i>
                          </div>
                          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                      </div>
                    <div class="bg_in-box_review">
                            <div class="title_wwwg_review">
                            Knowledge
                            </div>
                        <?php
                            foreach($allTip as $at){
                                echo'
                                <div class="bg_box_item">
                            
                                <div class="bg_img_item">
                                    <img src="img/'.$at['img_tip'].'" alt="">
                                </div>
                                <div class="bg_text_item">
                                    
                                   <div class="title_kv_item">
                                       <div class="kv_item">
                                            
                                       </div>
                                   </div>
                                    <div class="title_text_item">
                                        <div class="text_item">
                                        <a href="index.php?ctrl=content-tip&act=contenttip&idtip='.$at['id_tip'].'">'.$at['name_tip'].'</a> 
                                        </div>
                                    </div>
                                    <div class="date_item">
                                        <div class="float_date">
                                            
                                        </div>
                                    </div>
                                   
                                   
                    
                                    <div class="title_view_item">
                                        <div class="view_item"></div>
                                        <div class="rating_item">
                                         
                                        
                                        </div>
                                    </div>
                                </div>
                            </div> 
                                ';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article> 
</body>
</html>