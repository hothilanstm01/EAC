
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
    <header>
        <div class="roww">
            <div class="boxcenter_content">
                <div class="bg_header_content">
                    <div class="bg_menu_content">
                        <nav class="nav">
                            <div class="bg_logo_content">
                                <div class="text_logo">
                                   <a href="index.php?ctrl=home&act=index">EAC</a>
                                   <a href="index.php?ctrl=wewillgo&act=index">Where will we go?</a>
                                    <a href="index.php?ctrl=content-tip&act=index">Tips</a>
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
                                                                                        <li><a href="index.php?ctrl=usertourlist&id_kh='.$ad['id_kh'].'">Danh s??ch tour</a></li>
                                                                                        <li><a href="view/login/logout.php">????ng Xu???t</a></li>
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
    </div>

    <article>
        <div class="roww">
            <div class="boxcenter_content">

                <div class="bg_article">
                    <div class="box_position_content1"></div>
                        <!-- /* <div class="box_position_content2"></div> */ -->
                        <?php


                            foreach($topFeautureById as $tr){
                                $id_dd=$tr['id_dd'];
                                echo'
                            <div class="box_content_article">


                                <div class="title_content">
                                    '.$tr['name_dd'].'
                                    <div class="line_title"></div>
                                </div>


                                <div class="border_box">

                                    <div class="box_text_content0">

                                            <div class="box_text0">

                                                '.$tr['noidung'].'

                                            </div>
                                    </div>
                                </div>
                            </div>

                        <div class="box_img_article">
                            <div class="single-item">

                                    <div class="box_img_slick">
                                        <img src="img/'.$tr['img_right1'].'" alt="">
                                    </div>

                                    <div class="box_img_slick">
                                        <img src="img/'.$tr['img_right2'].'" alt="">
                                    </div>



                            </div>
                        </div>

                        <div class="main_content">

                            <h3>About place</h3>

                            <h5>Where is it?</h5>
                            <div class="box_text_content2">

                                    '.$tr['noidung2'].'

                            </div>

                            <div class="big_box_img_content">
                                <div class="box_img_content">
                                    <img src="img/'.$tr['img_noidung1'].'" alt="">
                                </div>
                            </div>

                            <h5>Discover</h5>
                            <div class="box_text_content3">

                                '.$tr['noidung3'].'
                            </div>

                            <div class="big_box_img_content">
                                <div class="box_img_content">
                                    <img src="img/'.$tr['img_noidung2'].'" alt="">
                                </div>
                            </div>

                            <h5>Food</h5>
                                <div class="box_text_content3">
                                    '.$tr['noidung3'].'
                                </div>
                                <div class="big_box_img_content_food">

                                        <div class="box_content_food_all1">
                                            <div class="box_img_food1">
                                                <div class="bg_position_img_food"></div>
                                                <div class="bg_img_food">
                                                    <img src="img/'.$tr['img_food1'].'" alt="">
                                                </div>
                                            </div>
                                            <div class="text_food1">
                                                <div class="text_content_food_all2">
                                                    <div class="text_style_1">'.$tr['loaifood1'].'</div>
                                                    <div class="text_style_2">'.$tr['tenfood1'].'</div>
                                                    <div class="small_content_food_all">
                                                    '.$tr['noidungfood1'].'
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                    <div class="box_content_food_all1">
                                        <div class="box_img_food2">
                                            <div class="bg_position_img_food"></div>
                                                    <div class="bg_img_food">
                                                        <img src="img/'.$tr['img_food2'].'" alt="">
                                                    </div>
                                            </div>
                                        <div class="text_food2">
                                            <div class="text_content_food_all2">
                                                <div class="text_style_1">'.$tr['loaifood2'].'</div>
                                                <div class="text_style_2">'.$tr['tenfood2'].'</div>
                                                <div class="small_content_food_all">
                                                '.$tr['noidungfood2'].'
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                <div class="box_content_food_all1">
                                    <div class="box_img_food3">
                                        <div class="bg_position_img_food"></div>
                                                    <div class="bg_img_food">
                                                        <img src="img/'.$tr['img_food3'].'" alt="">
                                                    </div>
                                        </div>
                                    <div class="text_food3">
                                            <div class="text_content_food_all2">
                                                <div class="text_style_1">'.$tr['loaifood3'].'</div>
                                                <div class="text_style_2">'.$tr['tenfood3'].'</div>
                                                <div class="small_content_food_all">
                                                    '.$tr['noidungfood3'].'
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h5>My Thinking</h5>
                                <div class="box_text_content3">

                                    '.$tr['noidung3'].'
                                </div>

                        </div>






';

}
                                                if(!isset($_SESSION['user']))//kiem tra xem co dang nhap chua
                                                    {
                                                        /* neu chua co */
                                                        echo'
                                                    <div class="roww">
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
                                                                            <div class="bg_book_tour">
                                                                            <div id="myModal" class="modal">
                                                                                <div class="modal-content">
                                                                                    <div class="close">
                                                                                        <span>&times;</span>
                                                                                    </div>
                                                                                    <div class="boxPay">
                                                                                    <form action="index.php?ctrl=wewillgo&act=booktour&idcontent='.$tr['id_dd'].'" method="post" enctype="multipart/form-data">
                                                                                            <div class="container">
                                                                                                <h1>Book tour 1: '.$tr['name_dd'].' </h1>
                                                                                                    <hr>
                                                                                                        <label for="diadiem">M?? ?????a ??i???m</label>
                                                                                                        <div class="input_bg">
                                                                                                        <input type="text" placeholder="Enter Number" name="diadiem" value="'.$tr['id_dd'].' "readonly >
                                                                                                        </div>
                                                                                                        <div class="input_bg">
                                                                                                        <label for="ngaydi">Ng??y ??i d??? ki???n</label>
                                                                                                        <input type="text" placeholder="Enter Number" name="ngaydi" value="'.$tr['ngaydang'].' "readonly >
                                                                                                        </div>
                                                                                                        <label for="fullname">H??? t??n</label>
                                                                                                        <input type="text" placeholder="Nh???p t??n c???a b???n" name="fullName" required>

                                                                                                        <label for="email">Email</label>
                                                                                                        <input type="text" placeholder="Nh???p Email" name="email" required>

                                                                                                        <label for="phone">S??? ??i???n tho???i</label>
                                                                                                        <input type="tel" placeholder="nh???p s??? ??i???n tho???i" name="phone" required>

                                                                                                        <label for="gia">Gi??</label>
                                                                                                        <input type="text" name="gia" readonly value="'.$tr['gia'].'VND">


                                                                                                <div class="clearfix">
                                                                                                    <button type="submit" class="button">Done!</button>
                                                                                                    <button type="button" id="cancel" class="button">Lets me think</button>
                                                                                                </div>
                                                                                            </div>






                                                                         </form>
                                                                        </div>
                                                                          </div>

                                                    </div>';
                                                    }
                                                    else{
                                                        
                                                        echo'
                                                        <div class="roww">
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
                                                                                <div class="bg_book_tour">
                                                                                <div id="myModal" class="modal">
                                                                                    <div class="modal-content">
                                                                                        <div class="close">
                                                                                            <span>&times;</span>
                                                                                        </div>
                                                                                        <div class="boxPay">
                                                                                        <form action="index.php?ctrl=wewillgo&act=booktour&idcontent='.$tr['id_dd'].'&id_kh='.$id_kh.'" method="post" enctype="multipart/form-data">
                                                                                                <div class="container">
                                                                                                    <h1>Book tour: '.$tr['name_dd'].'</h1>
                                                                                                        <hr>
                                                                                                            <label for="diadiem">M?? ?????a ??i???m</label>
                                                                                                            <div class="input_bg">
                                                                                                            <input type="text" placeholder="Enter Number" name="diadiem" value="'.$tr['id_dd'].' "readonly >
                                                                                                            </div>
                                                                                                            <div class="input_bg">
                                                                                                            <label for="ngaydi">Ng??y ??i d??? ki???n</label>
                                                                                                            <input type="text" placeholder="Enter Number" name="ngaydi" value="'.$tr['ngaydang'].' "readonly >
                                                                                                            </div>
                                                                                                            <label for="fullname">H??? t??n</label>
                                                                                                            <input type="text" placeholder="Nh???p t??n c???a b???n" name="fullName" value="'.$nameKH.'" required>

                                                                                                            <label for="email">Email</label>
                                                                                                            <input type="text" placeholder="Nh???p Email" name="email" value="'.$emailKH.'" required>

                                                                                                            <label for="phone">S??? ??i???n tho???i</label>
                                                                                                            <input type="tel" placeholder="nh???p s??? ??i???n tho???i" name="phone" value="'.$sdtKH.'" required>
                                                                                                            
                                                                                                            <label for="gia">Gi??</label>
                                                                                                            <input type="text" name="gia" readonly value="'.$tr['gia'].'VND">

                                                                                                    <div class="clearfix">
                                                                                                        <button type="submit" class="button">Done!</button>
                                                                                                        <button type="button" id="cancel" class="button">Lets me think</button>
                                                                                                    </div>
                                                                                                </div>






                                                                             </form>
                                                                            </div>
                                                                              </div>

                                                        </div>
                                                        ';
                                                        

                                                    }

                            
?>

</div>
            </div>
        </div>
    </article>


    <?php

if(isset($_SESSION['user'])){
    foreach( $kh_dg as $kh){
        $sl_dg=$kh['tong'];
    }
}


?>

<div class="roww">
        <div class="boxcenter_content">
            <div class="container_post">
                    <div class="text_comment">
                        ????nh Gi?? ?????a ??i???m
                    </div>
                <div class="star-widget" id="rating">
                    <form action="index.php?ctrl=wewillgo&act=rating&id_dd=<?php echo"$id_dd"?>" method="POST">
                        <input type="radio" name="rate" value='5' id="rate-5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" value='4' id="rate-4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" value='3' id="rate-3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" value='2' id="rate-2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" value='1' id="rate-1">
                        <label for="rate-1" class="fas fa-star"></label>

                            <div class="content_rt">
                            <header></header>

                            <br />
                            <div class="btn">
                            <button type="submit">Post</button>

                            </div>
                            </div>
                            </form>
                    </div>

            </div>
        </div>
        </div>

<?php

if(isset($_SESSION['user'])){
    if($sl_dg==0){
        echo'
        <script>
        document.getElementById("rating").style.display = "block";
        </script>';
    }
    
    if($sl_dg!=0){
        echo'
        <script>
        document.getElementById("rating").style.display = "none";
        </script>';
    }
}
?>
<!--  -->


    <div class="roww">
        <div class="boxcenter_content">
            <div class="box_choose">
                <div class="text_choose">
                   Ch???n ch??ng t??i ch???n ni???m tin
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
                                ?????a ??i???m
                                <div class="line_title_choose"></div>
                        </div>

                        <div class="box_text_choose">
                                Lu??n c???p nh???p nh???ng ??i???u th?? v??? n??ng cao tr???i nghi???m kh??m ph?? khi s??? d???ng d???ch v??? tour EAC.

                        </div>
                        </div>
                    </div>



                    <div class="box_infor mt1">
                        <div class="icon_title_choose">
                            <i class="fas fa-address-book"></i>
                        </div>
                        <div class="box_choose_infor">
                        <div class="text_title_choose">
                           K??? ho???ch
                            <div class="line_title_choose"></div>
                        </div>

                        <div class="box_text_choose">
                            Li???t k?? c??c ?????a ??i???m chu???n b??? c??c b?????c tr???i nghi???m k??? l?????ng ????? du kh??ch c?? th??? t???n h?????ng m???t c??ch tho???i m??i nh???t.

                        </div>
                        </div>

                    </div>
                    <div class="box_infor">
                        <div class="icon_title_choose">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="box_choose_infor">
                        <div class="text_title_choose">
                            An to??n
                            <div class="line_title_choose"></div>
                        </div>

                        <div class="box_text_choose">
                            Ch??ng t??i cam k???t kh??ng chia s??? th??ng tin du kh??ch cho b???t k?? ai ho???c bu??n b??n th??ng tin tr??i ph??p nh???m tr???c l???i.
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="roww" id='comment'>
        <div class="boxcenter_content">
            <div class="box_comment">

               <div class="title_comment">
                    <div class="text_comment">
                        B???n c?? chia s??? g?? ?
                    </div>
                    <div class="line_comment">

                    </div>
               </div>
            </div>
    </div>

    <div class="roww">
        <div class="boxcenter_content">
             <div class="form_comment">
                <form action="index.php?ctrl=comment&act=add&idcontent=<?php echo"$id_dd"?>#comment" method="POST">
                    <input type="text" name='noidung' placeholder='H??y cho ch??ng t??i bi???t c???m nh???n c???a b???n v??? ?????a ??i???m ?';>
                    <button type="submit">Post</button>
                </form>
            </div>
        </div>
    </div>
                
    <div class="roww">
        <div class="boxcenter_content">
            <div class="content_comment">

                <div class="box_content_cm">

                <?php
                    foreach($cm as $cm){
                        echo'
                        <div class="title_box_cm">
                        <span>'.$cm['name_kh'].'</span>
                        <br>
                        Ng??y B??nh Lu???n: '.$cm['ngay_cm'].'

                        <div class="line_comment">

                        </div>
                    </div>

                    <div class="text_box_cm">
                    '.$cm['noidung_cm'].'
                    </div>  
                        ';
                    }
                ?>
                </div>  

            </div>
        </div>
    </div>





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
