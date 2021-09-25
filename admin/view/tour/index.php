<div class="roww">
            <div class="boxcenter_content">

                <div class="bg_article">
                <div class="box_position_content1"></div>
                <!-- /* <div class="box_position_content2"></div> */ -->
                        <?php
                            foreach($tourCoNoiDung as $tr){

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
                                        <img src="../site/img/'.$tr['img_right1'].'" alt=""> 
                                    </div>
        
                                    <div class="box_img_slick">
                                        <img src="../site/img/'.$tr['img_right2'].'" alt="">
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
                                    <img src="../site/img/'.$tr['img_noidung1'].'" alt=""> 
                                </div>
                            </div>
                                
                            <h5>Discover</h5>
                            <div class="box_text_content3">
                            
                                '.$tr['noidung3'].'
                            </div>
                                
                            <div class="big_box_img_content">
                                <div class="box_img_content">
                                    <img src="../site/img/'.$tr['img_noidung2'].'" alt=""> 
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
                                                <img src="../site/img/'.$tr['img_food1'].'" alt="">
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
                                                    <img src="../site/img/'.$tr['img_food2'].'" alt="">
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
                                                    <img src="../site/img/'.$tr['img_food3'].'" alt="">
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



                        <h5>My thinking</h5>
                            <div class="box_text_content3">
                            
                                '.$tr['noidung3'].'
                            </div>
                            <div class="fix_contenttip">
                            <a href="index.php?ctrl=tour&act=editnoidungtour&id='.$tr['id_dd'].'">Sửa nội dung</a>
                          
                            </div>
                        </div>

                        
                                ';
                           
                            
                        }
                        ?>

                </div>
            </div>
        </div>