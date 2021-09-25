<div class="roww">
    <div class="titleLT">
            <span> Danh Sách các Địa Điểm</span>
    </div>

</div>

    <article>
        <div class="roww">
            <div class="full_bg">
                <div class="boxcenter_content_tip">
                            <div class="card-body">
                                <table class="table table-striped table">
                                
                                    <tr>
                                        <th>Mã tour</th>
                                        <th>Địa điểm</th>
                                        <th>Ngày đi</th>
                                        <th>Số khách đặt</th>
                                    </tr>
                            
                                 <?php

                                    foreach($dd as $gt){
                                        echo'
                                            <tr>
                                                <td>'.$gt['id_dd'].'</td>
                                                <td>'.$gt['hoten'].'</td>
                                                <td><a href="index.php?ctrl=usertourlist&act=chitiettour&id_dd='.$gt['id_dd'].'&name_dd='.$gt['name_dd'].'">'.$gt['name_dd'].'</a></td>
                                                <td>'.$gt['ngaydat'].'</td>
                                                <td><a href="index.php?ctrl=usertourlist&act=del&id_bt='.$gt['id_kh'].'&id_kh='.$gt['id_kh_login'].'"><button type="button" class="btn btn-danger">Del</button></a></td>
                                            </tr>       
                                        ';
                                    }

                                 ?>
                                </table>
                            </div>

                </div>
            </div>
        </div>
    </article>
</body>
