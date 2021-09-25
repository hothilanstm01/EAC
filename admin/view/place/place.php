

                <div class="full">
                    <div class="boxcenter_statis">
                        <div class="title_place">
                            Place
                        </div>
                    </div>
                </div>

                <div class="full">
                    <div class="boxcenter_statis">
                        <div class="box_place">
                            
                            <div class="full">
                                <div class="btn_place">
                                    <a href="index.php?ctrl=place&act=add">Add Place </a>
                                </div>
                            </div>

                            <div class="full">
                                <div class="content_place">
                                    
                                        <?php
                                        
                                            foreach($kv as $kv){
                                                echo'
                                                <div class="box_kv">
                                                    <div class="img_kv">
                                                        <img src="../site/img/'.$kv['img_kv'].'" alt="">
                                                    </div>
            
                                                    <div class="name_kv">
                                                        '.$kv['name_kv'].'
                                                    </div>
            
                                                    <div class="btn_kv">
                                                        <button type="button" class="btn btn-outline-success"><a href="index.php?ctrl=place&act=edit&id='.$kv['id_kv'].'">EDIT</a></button>
                                                        <button type="button" class="btn btn-outline-danger"><a href="index.php?ctrl=place&act=del&id='.$kv['id_kv'].'">DEL</a></button>
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

                