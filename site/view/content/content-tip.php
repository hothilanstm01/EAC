<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/content-tip.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> 
</head>
<body>
    <header>
        <div class="roww">
            <div class="boxcenter_content_tip">
                <div class="bg_header_content">
                    <div class="bg_menu_content">
                        <nav class="nav">
                            <div class="bg_logo_content">
                                <div class="text_logo">
                                    <a href="index.php?ctrl=home&act=index">EAC</a>
                                    <a href="index.php?ctrl=wewillgo&act=index">Where will we go?</a>
                                    <a href="index.php?ctrl=content-tip&act=index">Tip</a>
                                </div>
                            </div>
                
                            
                        </nav>
                        <div class="left_login">
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
            <div class="img_content_header">
                <img src="img/countryside.png" alt="">
            </div>
            <div class="click_down">
                <div class="mouse"></div>
            </div>
    </div>
    

    


    <article>
        <div class="roww">
            <div class="bg_article_tip">
                <div class="boxcenter_content_tip">
                    <div class="bg_tip_left">
                        <?php
                            foreach($tip as $tc){
                                echo'
                        <div class="name_tip">
                            <h3>Địa Điểm</h3>
                            <div class="text_tip">
                                <div class="text_tip_content">
                                    <div class="text_title_tip">
                                      '.$tc['name_nd1'].'
                                    </div>
                                    <div class="text_detail_tip">
                                    '.$tc['noidung1'].'
                                    </div>
                                    <div class="tip_small">
                                        Tip note: '.$tc['noidung2'].' 
                                    </div>
                                </div>
                            </div>


                        <div class="text_tip2">
                            <div class="text_tip_content">
                                <div class="text_title_tip">
                                '.$tc['name_nd2'].'
                                </div>
                                <div class="text_detail_tip">
                                '.$tc['noidung3'].'
                                </div>
                                <div class="tip_small">
                                    Tip note:'.$tc['noidung4'].'
                                </div>
                            </div>
                        </div>
                               
                        


                           


                        </div>
                    </div>
                    <div class="bg_tip_position"></div>
                    <div class="box_img_tip_right">
                    <img src="img/light.png" alt="">
                    </div>
                    </div>
                </div>
                
        </div>


        <div class="roww">
            <div class="bg_article_tip">
                <div class="boxcenter_content_tip">
                    <div class="bg_tip_left">


                        <div class="name_tip">
                            <h3>Trải nghiệm</h3>
                            
                            <div class="text_tip3">
                                <div class="text_tip_content">
                                    <div class="text_title_tip">
                                         '.$tc['name_nd3'].'
                                    </div>
                                    <div class="text_detail_tip">
                                    '.$tc['noidung5'].'
                                    </div>
                                    <div class="tip_small">
                                        Tip note: '.$tc['noidung6'].'
                                    </div>
                                </div>
                            </div>


                            <div class="text_tip3">
                                <div class="text_tip_content">
                                    <div class="text_title_tip">
                                    '.$tc['name_nd4'].'
                                    </div>
                                    <div class="text_detail_tip">
                                    '.$tc['noidung7'].'
                                    </div>
                                    <div class="tip_small">
                                        Tip note: '.$tc['noidung8'].'
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="bg_tip_position2"> </div>
                    <div class="box_img_tip_right">
                                <img src="img/bag.png" alt="">
                    </div>
                    </div>
                </div>
                ';
            }
        ?>
        </div>



    </article>

<!-- <div class="roww">
    <div class="bg_link_form">
        <div class="bg_text">
            Join with us!
        </div>


        <div class="bg-buy-add">
                        <div class="box_hover_a">
                        <a id="myBtn">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            sign tour
                        </a>
                        </div>


                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <div class="close">
                                    <span>&times;</span>
                                </div>
                                

                                <div class="boxPay">
                                    <form action="index.php?ctrl=cart&act=checkout&id='.$detail['id'].'" method="post" enctype="multipart/form-data">
                                        <div class="container">
                                            <h1>Book tour</h1>
                                                <hr>
                                                    <label for="fullname">Full name</label>
                                                    <input type="text" placeholder="Enter Email" name="fullName" required>

                                                    <label for="email">Email</label>
                                                    <input type="text" placeholder="Enter Email" name="email" required>

                                                    <label for="address">Address</label>
                                                    <input type="text" placeholder="Enter Address" name="address" required>
                                                        
                                                    <label for="phone">Phone number</label>
                                                    <input type="tel" placeholder="Enter Number" name="phone" required>
                                        
                                            <div class="clearfix">
                                                <button type="submit" class="button">Done!</button>
                                                <button type="button" id="cancel" class="button">Let's me think</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>




    </div>
</div> -->
    <div class="roww">
        <div class="boxcenter_content_tip">
            <div class="box_choose">
                <div class="text_choose">
                    Chọn chúng tôi chọn niềm tin
                </div>
                <div class="line_comment"></div>
                <div class="small_text_choose">
                   We want to protect your expearence
                </div>
               
                <div class="box_choose_content">
                    <div class="bg_position_content3"></div>
                    <div class="bg_position_content4"></div>

                    <div class="box_infor">
                    
                        <div class="icon_title_choose">
                        
                            <i class="fas fa-mountain"></i>
                        </div>
                        <div class="box_choose_infor">
                        <div class="text_title_choose">
                            Địa điểm
                                <div class="line_title_choose"></div>
                        </div>
                        
                        <div class="box_text_choose">     
                        Luôn cập nhập những điều thú vị nâng cao trải nghiệm khám phá khi sử dụng dịch vụ tour EAC.

                                
                        </div>
                        </div>
                    </div>

                   

                    <div class="box_infor mt1">
                        <div class="icon_title_choose">
                            <i class="fas fa-address-book"></i>
                        </div>
                        <div class="box_choose_infor">
                        <div class="text_title_choose">
                        Kế hoạch
                            <div class="line_title_choose"></div>
                        </div>
                       
                        <div class="box_text_choose">     
                        Liệt kê các địa điểm chuẩn bị các bước trải nghiệm kỹ lưỡng để du khách có thể tận hưởng một cách thoải mái nhất.
                            
                        </div>
                        </div>
                    </div>
                    <div class="box_infor">
                        <div class="icon_title_choose">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="box_choose_infor">
                        <div class="text_title_choose">
                        An toàn
                            <div class="line_title_choose"></div>
                        </div>
                        
                        <div class="box_text_choose">     
                        Chúng tôi cam kết không chia sẻ thông tin du khách cho bất kì ai hoặc buôn bán thông tin trái phép nhằm trục lợi.
                            </div>
                            
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- <div class="roww">
        <div class="boxcenter_content_tip">
            <div class="box_comment">
                <div class="text_comment">
                    What do you think?
                </div>
                <div class="line_comment"></div>
                <div class="box_comment">

                </div>
            </div>
        </div>
</div> -->
    

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$('.single-item').slick({
    slidesToShow:1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows:false,
});
</script>