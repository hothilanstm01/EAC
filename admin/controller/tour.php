<?php

    include_once 'model/place.php';
    include_once 'model/tour.php';

    $action='index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }
    switch ($action) {
    case 'index':
        $kv=getAllKV();
        $dd=getAlldd();
        include 'view/tour/place.php';
        break;


        /* thêm nội dung tour */

    case 'addcontenttour':
        $id=$_GET['id'];
        $tournoidung=getTrangThaiDD($id);
        if($tournoidung['trangthai']==0){
            echo' <script>alert("Bạn chưa có nội dung hiển thị")</script>';
            include 'view/tour/addcontenttour.php';
        }else{
            $tourCoNoiDung=getTourById($id);
            include 'view/tour/index.php';
        }  
    break;

    /* act them noi dung */
    case'addnoidungtour':
        $id=$_POST['id'];
        $noidung1=$_POST['name1'];
        $noidung2=$_POST['name2'];
        $noidung3=$_POST['name3'];


        $loaifood1=$_POST['loaifood1'];
        $tenfood1=$_POST['tenfood1'];
        $noidungfood1=$_POST['noidungfood1'];

        $loaifood2=$_POST['loaifood2'];
        $tenfood2=$_POST['tenfood2'];
        $noidungfood2=$_POST['noidungfood2'];

        $loaifood3=$_POST['loaifood3'];
        $tenfood3=$_POST['tenfood3'];
        $noidungfood3=$_POST['noidungfood3'];

/*         $img1 = $_FILES['hinh1']['name'];
        $img2 = $_FILES['hinh2']['name']; */
        $img1 = $_FILES['hinhnd1']['name'];
        $img2 = $_FILES['hinhnd2']['name'];
        $path = '../site/img/'.$img1;
        $path2 = '../site/img/'.$img2;
        $imgfood1 = $_FILES['hinhfood1']['name'];
        $imgfood2 = $_FILES['hinhfood2']['name'];
        $imgfood3 = $_FILES['hinhfood3']['name'];
        $pathfood1 = '../site/img/'.$imgfood1;
        $pathfood2 = '../site/img/'.$imgfood2;
        $pathfood3 = '../site/img/'.$imgfood3;
        $imgright1= $_FILES['hinhright1']['name'];
        $imgright2= $_FILES['hinhright2']['name'];
        $pathright1 = '../site/img/'.$imgright1;
        $pathright2 = '../site/img/'.$imgright2;
        $date = date('Y-m-d H:i:s');
         updateDiaDiemTrangThai($id);
       if($img1!="" || $img2!="" || $imgfood1!="" || $imgfood2!="" || $imgfood3!=""){
            move_uploaded_file($_FILES['hinhnd1']['tmp_name'],$path);
            move_uploaded_file($_FILES['hinhnd2']['tmp_name'],$path2);
            move_uploaded_file($_FILES['hinhfood1']['tmp_name'],$pathfood1);
            move_uploaded_file($_FILES['hinhfood2']['tmp_name'],$pathfood2);
            move_uploaded_file($_FILES['hinhfood3']['tmp_name'],$pathfood3);
            move_uploaded_file($_FILES['hinhright1']['tmp_name'],$pathright1);
            move_uploaded_file($_FILES['hinhright2']['tmp_name'],$pathright2);
            addContentTour($id,$noidung1,$noidung2,$noidung3,$img1,$img2,$imgright1,$imgright2,$imgfood1,$imgfood2,$imgfood3,$loaifood1,$tenfood1,$noidungfood1,$loaifood2,$tenfood2,$noidungfood2,$loaifood3,$tenfood3,$noidungfood3, $date);//them vao databse
        }
          /* include 'view/tour/addcontenttip.php'; */
       echo'<script>window.location="index.php?ctrl=tour&act=addcontenttour&id='.$id.'";</script>'; 
    break;


    /* lay noi dung tour de sua*/
    case 'editnoidungtour':
        $id=$_GET['id'];
        $suanoidungtour=getNoiDungDD($id);
        include 'view/tour/editcontenttour.php';
    break;

    /* act sua noi dung */
    case'suanoidungtour':
        $id=$_POST['id'];
        $suanoidungtour=getNoiDungDD($id);
        $noidung1=$_POST['name1'];
        $noidung2=$_POST['name2'];
        $noidung3=$_POST['name3'];

        $loaifood1=$_POST['loaifood1'];
        $tenfood1=$_POST['tenfood1'];
        $noidungfood1=$_POST['noidungfood1'];

        $loaifood2=$_POST['loaifood2'];
        $tenfood2=$_POST['tenfood2'];
        $noidungfood2=$_POST['noidungfood2'];

        $loaifood3=$_POST['loaifood3'];
        $tenfood3=$_POST['tenfood3'];
        $noidungfood3=$_POST['noidungfood3'];

        
        /* hình bên phải 1 */
        if($_FILES['hinhright1']['name']==null ){
            $imgright1=$suanoidungtour['img_right1'];
        }
        else{
            $imgright1 = $_FILES['hinhright1']['name'];
            $pathright1 = '../site/img/'.$imgright1;
        }

        /* hình bên phải 2 */
        if($_FILES['hinhright2']['name']==null ){
            $imgright2=$suanoidungtour['img_right2'];
        }
        else{
            $imgright2 = $_FILES['hinhright2']['name'];
            $pathright2 = '../site/img/'.$imgright2;
        }

        /*hình nội dung1 */
        if($_FILES['hinh1']['name']==null ){
            $img1=$suanoidungtour['img_noidung1'];
        }
        else{
            $img1 = $_FILES['hinh1']['name'];
            $path = '../site/img/'.$img1;
        }

                
        /*hình nội dung2 */

        if($_FILES['hinh2']['name']==null ){
            $img2=$suanoidungtour['img_noidung2'];
        }
        else{
            $img2 = $_FILES['hinh2']['name'];
            $path2 = '../site/img/'.$img2;
        } 



        /*hình food 1 */

        if($_FILES['hinhfood1']['name']==null ){
            $imgfood1=$suanoidungtour['img_food1'];
        }
        else{
            $imgfood1 = $_FILES['hinhfood1']['name'];
            $pathfood1 = '../site/img/'.$imgfood1;    
        }

        /*hình food2 */

       if($_FILES['hinhfood2']['name']==null ){
            $imgfood2=$suanoidungtour['img_food2'];
        }
        else{
            $imgfood2 = $_FILES['hinhfood2']['name'];
            $pathfood2 = '../site/img/'.$imgfood2;
        } 

        /*hình food3 */

       if($_FILES['hinhfood3']['name']==null ){
            $imgfood3=$suanoidungtour['img_food3'];
        }
        else{
            $imgfood3 = $_FILES['hinhfood3']['name'];
            $pathfood3 = '../site/img/'.$imgfood3; 
        } 

             if($img1!="" || $img2!="" || $imgfood1!="" || $imgfood2!="" || $imgfood3!=""){
                if($_FILES['hinhright1']['name']!=null ){
                    move_uploaded_file($_FILES['hinhright1']['tmp_name'],$pathright1);
                }

                if($_FILES['hinhright2']['name']!=null ){
                    move_uploaded_file($_FILES['hinhright2']['tmp_name'],$pathright2);
                }

                if($_FILES['hinh1']['name']!=null ){
                    move_uploaded_file($_FILES['hinh1']['tmp_name'],$path);
                }
                if($_FILES['hinh2']['name']!=null ){
                    move_uploaded_file($_FILES['hinh2']['tmp_name'],$path2);
                }
                if($_FILES['hinhfood1']['name']!=null ){
                    move_uploaded_file($_FILES['hinhfood1']['tmp_name'],$pathfood1);
                }
                if($_FILES['hinhfood2']['name']!=null ){
                    move_uploaded_file($_FILES['hinhfood2']['tmp_name'],$pathfood2);
                }
                if($_FILES['hinhfood3']['name']!=null ){
                    move_uploaded_file($_FILES['hinhfood3']['tmp_name'],$pathfood3);
                }


            updateNoiDungTour($id,$noidung1,$noidung2,$noidung3,$imgright1,$imgright2,$img1,$img2,$imgfood1,$imgfood2,$imgfood3,$loaifood1,$tenfood1,$noidungfood1,$loaifood2,$tenfood2,$noidungfood2,$loaifood3,$tenfood3,$noidungfood3);//them vao databse;//them vao databse
        }
        
      echo'<script>window.location="index.php?ctrl=tour&act=addcontenttour&id='.$id.'";</script>'; 
    break;



    case 'add':
        $kv=getAllKV();
        include_once 'view/tour/addnewtour.php';
    break;



    case 'insert':
        $name=$_POST['name'];
        $id_kv=$_POST['id'];
        $img = $_FILES['file_name']['name'];

        $path = '../site/img/'.$img;

        if(move_uploaded_file($_FILES['file_name']['tmp_name'],$path)){
            addTour($name,$id_kv,$img);//them vao databse
           }

           /* chuyển trang bằng js */
           echo'<script>window.location="index.php?ctrl=tour&act=index";</script>';
    break;

           /* lay thong tin tour */
    case 'edit':
        $id = $_GET['id'];
        $dd = getDDID($id);
        $kv=getAllKV();
        include 'view/tour/edittour.php';
    break;
        /* sua thong tin tour */
    case 'update':
        $id= $_POST['id'];
        $name =$_POST['name'];
        $datedi=$_POST['datedi'];
        $dateve=$_POST['dateve'];
        $gia=$_POST['gia'];


        $id_kv=$_POST['id_cata'];
        $img= $_FILES['file_name']['name'];
        $path = '../site/img/'.$img;
      if($img!=""){
          move_uploaded_file($_FILES['file_name']['tmp_name'],$path);
          updateTourhinh($id,$name,$img,$id_kv,$datedi,$dateve,$gia);//them vao databse
      }else{
        updateTour($id,$name,$id_kv,$datedi,$dateve,$gia);
      }
      /* include 'view/tour/edittour.php'; */
      echo'<script>window.location="index.php?ctrl=tour&act=index";</script>';
      break;

    case 'del':
        $id = $_GET['id'];
        $xoanoidungbocuc=
        $delete=deleteTour($id);
        if ($delete) {
        echo'
        <script type="text/javascript">
            swal({
            title: "Success!",
            text: "Ban đã xoa thành công.",
            type: "success",
            timer: 2000,
            showConfirmButton: true
            }, function(){
            window.location.href ="index.php?ctrl=tour";
            });
            </script>';
        }else{
        echo'
        <script type="text/javascript">
            swal({
            title: "Error!",
            text: "vui Lòng Xóa Nội dung của địa điểm trước",
            type: "error",
            timer: 5000,
            showConfirmButton: true
            }, function(){
            window.location.href = "index.php?ctrl=tour";
            });
            </script>';
        }
        $kv=getAllKV();
        $dd=getAlldd();
        include 'view/tour/place.php';



/* 
    case 'tour':
        # code...
        include 'view/tour/tour.php';
        break;
    case 'go_tour':
        # code...
        include 'view/tour/go_tour.php';
        break;
    default:
        # code...
        break; */
}


?>