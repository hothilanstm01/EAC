


   <?php 
        foreach($tipnoidungadmin as $tnd){
                                   
                                echo'
    <article>
        <div class="roww">
            <div class="bg_article_tip">
                <div class="boxcenter_content_tip">
                    <div class="bg_tip_left">
                        
                        
                        <div class="name_tip">
                            <h3>Kế hoạch</h3>
                            <div class="text_tip">
                                <div class="text_tip_content">
                                <h4>Đoạn 1</h4>
                                    <div class="text_title_tip">
                                      '.$tnd['name_nd1'].'
                                    </div>
                                    <div class="text_detail_tip">
                                    '.$tnd['noidung1'].'
                                    </div>
                                    <div class="tip_small">
                                        Tip note: '.$tnd['noidung2'].' 
                                    </div>
                                </div>
                            </div>


                        <div class="text_tip2">
                            <div class="text_tip_content">
                                <div class="text_title_tip">
                                <h4>Đoạn 2</h4>
                                '.$tnd['name_nd2'].'
                                </div>
                                <div class="text_detail_tip">
                                '.$tnd['noidung3'].'
                                </div>
                                <div class="tip_small">
                                    Tip note:'.$tnd['noidung4'].'
                                </div>
                            </div>
                        </div>
                               
                        


                           


                        </div>
                    </div>
                    <div class="bg_tip_position"></div>
                    <div class="box_img_tip_right"></div>
                    </div>
                </div>
                
        </div>


        <div class="roww">
            <div class="bg_article_tip">
                <div class="boxcenter_content_tip">
                    <div class="bg_tip_left">


                        <div class="name_tip">
                            <h3>Chuẩn bị</h3>
                            
                            <div class="text_tip3">
                                <div class="text_tip_content">
                                    <div class="text_title_tip">
                                    <h4>Đoạn 3</h4>
                                         '.$tnd['name_nd3'].'
                                    </div>
                                    <div class="text_detail_tip">
                                    '.$tnd['noidung5'].'
                                    </div>
                                    <div class="tip_small">
                                        Tip note: '.$tnd['noidung6'].'
                                    </div>
                                </div>
                            </div>


                            <div class="text_tip3">
                                <div class="text_tip_content">
                                    <div class="text_title_tip">
                                    <h4>Đoạn 4</h4>
                                    '.$tnd['name_nd4'].'
                                    </div>
                                    <div class="text_detail_tip">
                                    '.$tnd['noidung7'].'
                                    </div>
                                    <div class="tip_small">
                                        Tip note: '.$tnd['noidung8'].'
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="fix_contenttip">
                        <a href="index.php?ctrl=tipnote&act=insert_editcontenttip&id='.$tnd['id_nd'].'">Sửa nội dung</a>
                      
                        </div>
                    </div>
                    <div class="bg_tip_position2"> </div>
                    <div class="box_img_tip_right"></div>
                    </div>
                   
                </div>

      
        </div>

        </div>
        </div>
        
            

    </article>
    ';
}
    ?>