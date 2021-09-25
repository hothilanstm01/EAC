<div class="full">
<div class="boxcenter_add">
                    <?php 
                        $id=$dd['id_dd'];
                        $name=$dd['name_dd'];
                        $id_kv= $dd['id_kv'];
                    ?>
        <div class="boxcenter">
            <div class="content_form">
                <div class="left_content">
                    <form action="index.php?ctrl=tour&act=update" method='post' enctype="multipart/form-data">
                            <h1>EDIT</h1>
                        <div class="form_group">

                            <div class="form_content">
                                <input type="text" readonly name='id' value="<?php echo"$id"?>" >
                            </div>

                            <div class="form_content">
                                <input type="text" name='name' value="<?php echo"$name"?>">
                            </div>

                            
                            <div class="form_content">
                            <label>Ngày đi:</label>
                                <input type="date" name='datedi'>
                            </div>

                           
                            <div class="form_content">
                            <label>Ngày về:</label>
                                <input type="date" name='dateve'>
                            </div>

                            <div class="form_content">
                                <input type="text" name='gia' placeholder='Điền giá'>
                            </div>


                            <div class="form_content">
                                <label'>Mời Chọn Khu Vực</label>
                                <br>
                               <select name="id_cata">
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
    </div>