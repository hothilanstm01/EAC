<div class="roww">
            <div class="boxcenter_content">

                <div class="bg_article">
                <div class="box_position_content1"></div>
                <!-- /* <div class="box_position_content2"></div> */ -->
                        <?php
                            foreach($topFeautureById as $tr){

                                   
                                
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
                        <h5>My thinking</h5>
                            <div class="box_text_content3">
                            
                                '.$tr['noidung3'].'
                            </div>

                        </div>
                                ';
                           
                            }
                        ?>

                </div>
            </div>
        </div>