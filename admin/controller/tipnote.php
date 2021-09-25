
<?php

    include_once 'model/tip.php';
    $action='index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
            $tipadmin = getAllTip();
            include 'view/tip/index.php';
        break;
        /* phan tip noi dung */
        case'noidungtip':
            $id=$_GET['id'];
            /*bat loi noi dung  */
            $tipadminnoidung = getTipNoidungById($id);
            if($tipadminnoidung['trangthai']==0){
                echo'
                <script>alert("Bạn chưa có nội dung gì cả")</script>'
                ;
                    
                include 'view/tip/addcontenttip.php';
            }else{
                $tipnoidungadmin=getAllTipByIdAdmin($id);
                include 'view/tip/contenttip.php';
        }
        break;

        /* them noi dung */
        case'addnoidungtip':
            $id=$_POST['id'];
            $name1=$_POST['name1'];
            updateTipTrangThai($id);
            addContentTip($id,$name1);
            echo'<script>window.location="index.php?ctrl=tipnote&act=noidungtip&id='.$id.'";</script>';
        break;



        /* sua noi dung tip */
        case'insert_editcontenttip':
            $id=$_GET['id'];
            $suanoidung=getTipContentById($id);
            include 'view/tip/editcontenttip.php';
        break;

        case'edit_content_tip':
            $id=$_POST['id'];
            $name_nd1=$_POST['namend1'];
            $name_nd2=$_POST['namend2'];
            $name_nd3=$_POST['namend3'];
            $name_nd4=$_POST['namend4'];
            $noidung1=$_POST['content1'];
            $noidung3=$_POST['content3'];
            $noidung5=$_POST['content5'];
            $noidung7=$_POST['content7'];
            $tip2=$_POST['tip2'];
            $tip4=$_POST['tip4'];
            $tip6=$_POST['tip6'];
            $tip8=$_POST['tip8'];
            updateNoiDungTip($id,$name_nd1,$name_nd2,$name_nd3,$name_nd4,$noidung1,$noidung3,$noidung5,$noidung7,$tip2,$tip4,$tip6,$tip8);
            echo'<script>window.location="index.php?ctrl=tipnote&act=noidungtip&id='.$id.'";</script>';
        break;

        case 'add':
            include 'view/tip/addnew.php';
        break;

        case 'insert':
            $name_tip=$_POST['name'];
            $img = $_FILES['file_name']['name'];

            $path = '../site/img/'.$img;

            if(move_uploaded_file($_FILES['file_name']['tmp_name'],$path)){
                addTip($name_tip,$img);//them vao databse
               }
               
               /* chuyển trang bằng js */
               echo'<script>window.location="index.php?ctrl=tipnote&act=index";</script>';
        break;

        case 'ct':
            include_once 'view/tip/boxtip.php';
        break;

        case 'edit':
            $id = $_GET['id'];
            $kv = getTipID($id);
            include 'view/tip/editTip.php';
        break;



        case 'update':
            $id= $_POST['id'];
            $name =$_POST['name'];
            $img= $_FILES['file_name']['name'];
            $path = '../site/img/'.$img;
          if($img!=""){
              move_uploaded_file($_FILES['file_name']['tmp_name'],$path);
              updateTiphinh($id,$name,$img);//them vao databse
          }else{
            updateTip($id,$name);
          }
          echo'<script>window.location="index.php?ctrl=tipnote&act=index";</script>';
          break;

        

        case 'del':
            $id = $_GET['id'];
            $delete=deleteTip($id);
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
                window.location.href ="index.php?ctrl=tipnote";
                });
                </script>';
            }else{
            echo'
            <script type="text/javascript">
                swal({
                title: "Error!",
                text: "Không xóa được vì tồn tại nội dung.",
                type: "error",
                timer: 100000,
                showConfirmButton: true
                }, function(){
                window.location.href = "index.php?ctrl=tipnote&act=index";
                });
                </script>';
            }
            
            /* include 'view/tip/index.php'; */

       

            
    }
?>