<div class="full">
        <div class="boxcenter_add">
            <div class="content_form_edit">
                <div class="left_content_edit">
                    <form class="formedit" action="index.php?ctrl=tour&act=addnoidungtour" method='post' enctype="multipart/form-data">


                            <h1> thêm nội dung tour</h1>
                        <div class="form_group">

                            

                            <div class="form_content">
                                <label for="">Ma noi dung tour</label>
                                <input type="text" name='id' value=<?php echo $id?> readonly>
                            </div>


                            <label for="">Nội dung 1</label>
                            <div class="form_content">
                                <textarea name="name1" id="" cols="120" rows="10" ></textarea>
                            </div>

                            <label for="">them hinh 1</label>
                            <div class="file_edittip">
                                <label for="file">Chosse File</label>
                                <input type="file" name='hinhnd1' id='file'>
                            </div>

                            

                            <label for="">Nội dung 2</label>
                            <div class="form_content">
                                <textarea name="name2" id="" cols="120" rows="10" value=""></textarea>
                            </div>

                            <label for="">them hinh 2</label>
                            <div class="file_edittip">
                                <label for="file2">Chosse File</label>
                                <input type="file" name='hinhnd2' id='file2'>
                            </div>




                            <div class="form_content">
                                <label for="">Loại food 1</label>
                                <input type="text" name="loaifood1" >
                            </div>

                            <div class="form_content">
                                <label for="">Tên food 1</label>
                                <input type="text" name="tenfood1" >
                            </div>

                            <label for="">Nội dung food 1</label>
                            <div class="form_content">
                                <textarea name="noidungfood1" id="" cols="120" rows="10" value=""></textarea>
                            </div>
                        

                            <label for="">Chọn hình đồ ăn 1 mới:</label>
                            <div class="file_edittip">
                                <label for="file3">Chosse file</label>
                                <input multiple type="file" name="hinhfood1" id='file3'>
                            </div> 

                            <!-- food 2 -->
                            <div class="form_content">
                                <label for="">Loại food 2</label>
                                <input type="text" name="loaifood2" >
                            </div>

                            <div class="form_content">
                                <label for="">Tên food 2</label>
                                <input type="text" name="tenfood2" >
                            </div>

                            <label for="">Nội dung food 2</label>
                            <div class="form_content">
                                <textarea name="noidungfood2" id="" cols="120" rows="10" ></textarea>
                            </div>

                            <label for="">Chọn hình đồ ăn 2 mới:</label>
                            <div class="file_edittip">
                                <label for="file4">Chosse file</label>
                                <input multiple type="file" name="hinhfood2" id='file4'>
                            </div> 

                            <!-- food 3 -->
                            <div class="form_content">
                                <label for="">Loại food 3</label>
                                <input type="text" name="loaifood3"  >
                            </div>

                            <div class="form_content">
                                <label for="">Tên food 3</label>
                                <input type="text" name="tenfood3"  >
                            </div>

                            <label for="">Nội dung food 3</label>
                            <div class="form_content">
                                <textarea name="noidungfood3" id="" cols="120" rows="10" value=""></textarea>
                            </div>

                            <label for="">Chọn hình đồ ăn 3 mới:</label>
                            <div class="file_edittip">
                                <label for="file5">Chosse file</label>
                                <input multiple type="file" name="hinhfood3" id='file5'>
                            </div> 


                            <label for="">Nội dung 3</label>
                            <div class="form_content">
                                <textarea name="name3" id="" cols="120" rows="10" value=""></textarea>
                            </div>



                            <label for="">Hình SlideShow1</label>
                            <div class="file_edittip">
                                <label for="hinhright1">Chosse File</label>
                                <input type="file" name='hinhright1' id='hinhright1'>
                            </div>

                            <label for="">Hình SlideShow2</label>
                            <div class="file_edittip">
                                <label for="hinhright2">Chosse File</label>
                                <input type="file" name='hinhright2' id='hinhright2'>
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