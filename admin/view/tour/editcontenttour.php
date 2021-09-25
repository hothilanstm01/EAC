<div class="full">
        <div class="boxcenter_add">
            <div class="content_form_edit">
                <div class="left_content_edit">
                    <form class="formedit" action="index.php?ctrl=tour&act=suanoidungtour&id=<?php echo"$id"?>" method='post' enctype="multipart/form-data">
                       
                        <?php
                             /* <!-- phan lay thong tin tu act editnoidungtour trong tour --> */
                            $id = $suanoidungtour['id_dd'];
                            $nd1= $suanoidungtour['noidung'];
                            $nd2= $suanoidungtour['noidung2'];
                            $nd3= $suanoidungtour['noidung3'];
                            $hinhnd1= $suanoidungtour['img_noidung1'];
                            $hinhnd2= $suanoidungtour['img_noidung2'];

                            $hinhright1=$suanoidungtour['img_right1'];
                            $hinhright2=$suanoidungtour['img_right2'];

                            $hinhfood1= $suanoidungtour['img_food1'];
                            $hinhfood2= $suanoidungtour['img_food2'];
                            $hinhfood3= $suanoidungtour['img_food3'];
                            /* food1 */
                            $loaifood1= $suanoidungtour['loaifood1'];
                            $tenfood1= $suanoidungtour['tenfood1'];
                            $noidungfood1= $suanoidungtour['noidungfood1'];
                            /* food2 */
                            $loaifood2= $suanoidungtour['loaifood2'];
                            $tenfood2= $suanoidungtour['tenfood2'];
                            $noidungfood2= $suanoidungtour['noidungfood2'];
                            /* food3 */
                            $loaifood3= $suanoidungtour['loaifood3'];
                            $tenfood3= $suanoidungtour['tenfood3'];
                            $noidungfood3= $suanoidungtour['noidungfood3'];
                           /*  $nd4= $suanoidungtour['noidung7'];
                            $tipnotefix1=$suanoidungtour['noidung2'];
                            $tipnotefix2=$suanoidungtour['noidung4'];
                            $tipnotefix3=$suanoidungtour['noidung6'];
                            $tipnotefix4=$suanoidungtour['noidung8']; */
                        ?>

                            <h1> Sửa nội dung tour</h1>
                        <div class="form_group">

                            <div class="form_content">
                                <label for="">ID nội dung</label>
                                <input type="text" readonly name='id' value="<?php echo"$id"?>" >
                            </div>

                            <label for="">Hình bên phải 1</label>
                            <div class="form_content">
                                <img src="../site/img/<?php echo"$hinhright1"?>" alt="">
                            </div>

                            <label for="">Chọn hình bên phải 1 mới</label>
                            <div class="file_edittip">
                                <label for="fileright">Chosse file</label>
                                <input multiple type="file" name='hinhright1' id='fileright'>
                            </div>

                            <label for="">Hình bên phải 2</label>
                            <div class="form_content">
                                <img src="../site/img/<?php echo"$hinhright2"?>" alt="">
                            </div>

                            <label for="">Chọn hình bên phải 2 mới</label>
                            <div class="file_edittip">
                                <label for="fileright2">Chosse file</label>
                                <input multiple type="file" name='hinhright2' id='fileright2'>
                            </div>


                <!-- phan noi dung -->
                            <label for="">Nội dung 1</label>
                            <div class="form_content">
                                <textarea name="name1" id="" cols="120" rows="10" value=""><?php echo"$nd1"?></textarea>
                            </div>

                            <label for="">Hình nội dung 1</label>
                            <div class="form_content">
                                <img src="../site/img/<?php echo"$hinhnd1"?>" alt="">
                            </div>

                            <label for="">Chọn hình nội dung 1 mới</label>
                            <div class="file_edittip">
                                <label for="file">Chosse file</label>
                                <input multiple type="file" name='hinh1' id='file'>
                            </div>
 
                            <label for="">Nội dung 2</label>
                            <div class="form_content">
                                <textarea name="name2" id="" cols="120" rows="10" value=""><?php echo"$nd2"?></textarea>
                            </div>

                            
                            <label for="">Hình nội dung 2</label>
                            <div class="form_content">
                                <img src="../site/img/<?php echo"$hinhnd2"?>" alt="">
                            </div>

                            <label for="">Chọn hình nội dung 2 mới</label>
                            <div class="file_edittip">
                                <label for="file2">Chosse file</label>
                                <input multiple type="file" name='hinh2' id='file2'>
                            </div> 

                            
                            <!-- phan food -->
                            <!-- food 1 -->
                            <div class="form_content">
                                <label for="">Loại food 1</label>
                                <input type="text" name="loaifood1" value="<?php echo"$loaifood1"?>" >
                            </div>

                            <div class="form_content">
                                <label for="">Tên food 1</label>
                                <input type="text" name="tenfood1" value="<?php echo"$tenfood1"?>" >
                            </div>

                            <label for="">Nội dung food 1</label>
                            <div class="form_content">
                                <textarea name="noidungfood1" id="" cols="120" rows="10" value=""><?php echo"$noidungfood1"?></textarea>
                            </div>
                            
                            <label for="">Hình đồ ăn 1</label>
                            <div class="form_content">
                                <img src="../site/img/<?php echo"$hinhfood1"?>" alt="">
                            </div>

                            <label for="">Chọn hình đồ ăn 1 mới:</label>
                            <div class="file_edittip">
                                <label for="file3">Chosse file</label>
                                <input multiple type="file" name="hinhfood1" id='file3'>
                            </div> 

                            <!-- food 2 -->
                            <div class="form_content">
                                <label for="">Loại food 2</label>
                                <input type="text" name="loaifood2" value="<?php echo"$loaifood2"?>" >
                            </div>

                            <div class="form_content">
                                <label for="">Tên food 2</label>
                                <input type="text" name="tenfood2" value="<?php echo"$tenfood2"?>" >
                            </div>

                            <label for="">Nội dung food 2</label>
                            <div class="form_content">
                                <textarea name="noidungfood2" id="" cols="120" rows="10" value=""><?php echo"$noidungfood2"?></textarea>
                            </div>

                            <label for="">Hình đồ ăn 2</label>
                            <div class="form_content">
                                <img src="../site/img/<?php echo"$hinhfood2"?>" alt="">
                            </div>

                            <label for="">Chọn hình đồ ăn 2 mới:</label>
                            <div class="file_edittip">
                                <label for="file4">Chosse file</label>
                                <input multiple type="file" name="hinhfood2" id='file4'>
                            </div> 

                            <!-- food 3 -->
                            <div class="form_content">
                                <label for="">Loại food 3</label>
                                <input type="text" name="loaifood3" value="<?php echo"$loaifood3"?>" >
                            </div>

                            <div class="form_content">
                                <label for="">Tên food 3</label>
                                <input type="text" name="tenfood3" value="<?php echo"$tenfood3"?>" >
                            </div>

                            <label for="">Nội dung food 3</label>
                            <div class="form_content">
                                <textarea name="noidungfood3" id="" cols="120" rows="10" value=""><?php echo"$noidungfood3"?></textarea>
                            </div>

                            <label for="">Hình đồ ăn 3</label>
                            <div class="form_content">
                                <img src="../site/img/<?php echo"$hinhfood3"?>" alt="">
                            </div>

                            <label for="">Chọn hình đồ ăn 3 mới::</label>
                            <div class="file_edittip">
                                <label for="file5">Chosse file</label>
                                <input multiple type="file" name="hinhfood3" id='file5'>
                            </div> 
                                <!-- end food -->


                            
                            <label for="">Nội dung 3</label>
                            <div class="form_content">
                                <textarea name="name3" id="" cols="120" rows="10" value=""><?php echo"$nd3"?></textarea>
                            </div>

                            <div class="btn_luuedit">
                                <button name='btn_luu' class='btnluu_edittip'>Lưu</button>
                            </div>
                        </div>

                    </form>
                </div>
                
            </div>
        </div>
    </div>