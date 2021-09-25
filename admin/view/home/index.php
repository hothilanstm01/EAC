
                <div class="full">
                    <div class="boxcenter_statis">
                        <!-- review statis -->
                            <div class="review_statis">
                                <div class="box_review_statis mr1">

                                    <div class="review_statis_left bgblue">
                                        <i class="fas fa-plane-departure"></i>
                                    </div>

                                    <div class="content_rv_st">
                                        <div class="title_rv"> Số Lượng Địa Điểm</div>
                                        <div class="text_rv">
                                        <?php
                                            foreach ($rv1 as $rv1) {
                                                echo'<p>'.$rv1['count(*)'].'</p>';
                                            }
                                        ?></div>
                                    </div>


                                </div>

                                    <?php

                                        /**
                                         *
                                         * Chuyển đổi chuỗi kí tự thành dạng slug dùng cho việc tạo friendly url.
                                         *
                                         * @access    public
                                         * @param    string
                                         * @return    string
                                         */
                                        if (!function_exists('currency_format')) {

                                            function currency_format($number, $suffix = 'đ') {
                                                if (!empty($number)) {
                                                    return number_format($number, 0, ',', ',') . "{$suffix}";
                                                }
                                            }

                                        }
                                     ?>

                                <div class="box_review_statis mr1">
                                    <div class="review_statis_left bggreen">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>

                                    <div class="content_rv_st">
                                        <div class="title_rv">Tổng Tiền</div>
                                        <div class="text_rv">

                                          <?php
                                                $tong=0;
                                                foreach ($rv2 as $rv2) {
                                                    $tong+=$rv2['tong'];
                                                }
                                                echo currency_format($tong);
                                            ?>
                                        </div>
                                    </div>

                                </div>

                                <div class="box_review_statis mr1">
                                    <div class="review_statis_left bgbrown">
                                        <i class="fas fa-users"></i>
                                    </div>

                                    <div class="content_rv_st">
                                        <div class="title_rv">Số khách hàng</div>
                                        <div class="text_rv">
                                            <?php
                                                foreach ($rv3 as $rv3) {
                                                    echo'<p>'.$rv3['tongKH'].'</p>';
                                                }
                                            ?>
                                        </div>
                                    </div>

                                </div>

                                <div class="box_review_statis">
                                    <div class="review_statis_left bgred">
                                         <i class="fas fa-eye"></i>
                                    </div>

                                    <div class="content_rv_st">
                                        <div class="title_rv">view</div> 
                                        <div class="text_rv"> <?php echo''.$gv['view'].'';?></div>
                                    </div>

                                </div>
                            </div>
                        <!-- end review statis -->
                    </div>

                      <!-- box_statis_rank -->
                    <div class="full">
                            <div class="boxcenter_statis">
                                    <div class="statis_rank">

                                       <!-- box rank tour -->

                                        <div class="box_rank mr2">
                                                <div class="title_box_rank">
                                                    <div class="text_title_rank">
                                                            <span>Ranks Tour </span><br>
                                                            xếp loại các loại tour
                                                    </div>

                                                    <div class="full">
                                                        <div class="boxcenter_statis">
                                                        <div class="content_box_rank">
                                                                <table class="table table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                            <th scope="col">Tên Địa Điểm</th>
                                                                            <th scope="col">Ngày Đi</th>
                                                                            <th scope="col">Ngày Về</th>
                                                                            <th scope="col">Giá</th>
                                                                            <th scope="col">Số Người Đặt</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php

                                                                                foreach($rankTour as $rank){
                                                                                    echo'
                                                                                        <tr>
                                                                                            <td>'.$rank['name_dd'].'</td>
                                                                                            <td>'.$rank['ngaydi'].'</td>
                                                                                            <td>'.$rank['ngayve'].'</td>
                                                                                            <td>'.$rank['gia'].'</td>
                                                                                            <td>'.$rank['tongkh'].'</td>
                                                                                        </tr>
                                                                                    ';
                                                                                }
                                                                            ?>
                                                                           
                                                                        </tbody>
                                                                    </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                       <!-- end box rank tour -->

                                       <!-- box rank user -->

                                        <div class="box_rank">
                                                <div class="title_box_rank">
                                                    <div class="text_title_rank">
                                                        <span>Rank User</span> <br>
                                                        xếp hàng người dùng đi nhiều tour
                                                    </div>

                                                    <div class="full">
                                                        <div class="boxcenter_statis">
                                                                <div class="content_box_rank">
                                                                    <table class="table table-striped">
                                                                            <thead>
                                                                                <tr>
                                                                                <th scope="col">id khách hàng</th>
                                                                                <th scope="col">Tên Khách Hàng</th>
                                                                                <th scope="col">Số Điện Thoại</th>
                                                                                <th scope="col">Tổng Số Tour</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php

                                                                                    foreach($rankKH as $rank){
                                                                                        echo'
                                                                                            <tr>
                                                                                                <th scope="row">'.$rank['id_kh'].'</th>
                                                                                                <td>'.$rank['name_kh'].'</td>
                                                                                                <td>'.$rank['sdt_kh'].'</td>
                                                                                                <td>'.$rank['tongCD'].'</td>
                                                                                            </tr>
                                                                                        ';
                                                                                    }
                                                                                ?>
                                                                            </tbody>
                                                                        </table>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                     <!-- end box rank user -->

                                </div>
                    </div>
                     <!-- end box_statis_rank -->

                     <!-- box admin -->

                        <div class="full">
                            <div class="boxcenter_statis">
                                <div class="box_view_ad">

                                    <div class="title_view_ad">
                                        <div class="text_view_ad">
                                            <span>Admin</span> <br>
                                            Danh Sách Các Tài Khoản Admin
                                        </div>
                                    </div>

                                    <div class="full">
                                        <div class="boxcenter_statis">
                                            <div class="content_view_ad">
                                                <table class="table table-striped">
                                                     <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">SDT</th>
                                                            <th scope="col">Position</th>
                                                            <th scope="col">Del</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       <?php
                                                       
                                                            foreach ($ad as $ad){
                                                                echo'
                                                                    <tr>
                                                                        <td scope="row"><img src="../site/img/'.$ad['img_ad'].'" width=80px height=80px style="border-radius: 50px;"></td>
                                                                        <td>'.$ad['name_ad'].'</td>
                                                                        <td>'.$ad['email'].'</td>
                                                                        <td>'.$ad['sdt'].'</td>
                                                                        <td>'.$ad['position'].'</td>
                                                                        <td><button type="button" class="btn btn-outline-danger"><a href="index.php?ctrl=home&act=del&id='.$ad['id_ad'].'">DEL</a></button></td>
                                                                    </tr>
                                                                ';
                                                            }                             

                                                       ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                     <!-- end box ad -->
                </div>
