<div class="full">
        <div class="boxcenter_add">
            <div class="content_form">
                <div class="left_content">
                    <form action="index.php?ctrl=tipnote&act=insert" method='post' enctype="multipart/form-data">
                            <h1> Thêm Tip Note</h1>
                        <div class="form_group">

                            <div class="form_content">
                                <input type="text" readonly name='id' placeholder='id Tự Động Tăng' >
                            </div>

                            <div class="form_content">
                                <input type="text" name='name' placeholder='Mời Nhập Tên Tip'>
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