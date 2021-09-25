<div class="full">
        <div class="boxcenter_add">
            <div class="content_form">
                <div class="left_content">
                    <form action="index.php?ctrl=tour&act=insert" method='post' enctype="multipart/form-data">
                            <h1>Add New Tour</h1>
                        <div class="form_group">

                            <div class="form_content">
                                <input type="text" readonly placeholder='id Tự Động Tăng' >
                            </div>

                            <div class="form_content">
                                <input type="text" name='name' placeholder='Mời Nhập Tên Tour'>
                            </div>

                            <label>Ngày đi:</label>
                            <div class="form_content">
                                <input type="date" name='datedi' placeholder='Ngày đi'>
                            </div>

                            <label>Ngày về:</label>
                            <div class="form_content">
                                <input type="date" name='dateve' placeholder='Ngày về'>
                            </div>


                            <div class="form_content">
                                <label>Mời Chọn Khu Vực</label>
                                <br>
                               <select name="id">
                                    <?php
                                    
                                        foreach ($kv as $cata) {
                                            echo'<option value='.$cata['id_kv'].'>'.$cata['name_kv'].'</option>';
                                        }
                                    
                                    ?>
                               </select>
                            </div>

                            <div class="file">
                                <label for="file">Chosse File</label>
                                <input type="file" name='file_name' id='file'>
                            </div>

                            <button name='btn_luu' class='btnluu'>Lưu</button>
                        </div>
                    </form>
                </div>
                
                <div class="right_content">
                </div>
            </div>
        </div>
    </div>