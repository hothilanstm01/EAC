<?php
    include_once 'model/place.php';

    $action='index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
            $kv=getAllKV();
            include_once 'view/place/place.php';
        break;

        case 'add':
            include_once 'view/place/addnew.php';
        break;

        case 'insert':
            $name_kv=$_POST['name'];
            $img = $_FILES['file_name']['name'];

            $path = '../site/img/'.$img;

            if(move_uploaded_file($_FILES['file_name']['tmp_name'],$path)){
                addKV($name_kv,$img);//them vao databse
               }

               /* chuyển trang bằng js */
               echo'<script>window.location="index.php?ctrl=place&act=index";</script>';
        break;

        case 'edit':
            $id = $_GET['id'];
            $kv = getKVID($id);
            include 'view/place/editPlace.php';
        break;

        case 'update':
            $id= $_POST['id'];
            $name =$_POST['name'];
            $img= $_FILES['file_name']['name'];
            $path = '../site/img/'.$img;
          if($img!=""){
              move_uploaded_file($_FILES['file_name']['tmp_name'],$path);
              updateKVhinh($id,$name,$img);//them vao databse
          }else{
            updateKV($id,$name);
          }
          echo'<script>window.location="index.php?ctrl=place&act=index";</script>';
          break;

        case 'del':
            $id = $_GET['id'];
            $delete=deleteKV($id);
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
                window.location.href ="index.php?ctrl=place";
                });
                </script>';
            }else{
            echo'
            <script type="text/javascript">
                swal({
                title: "Error!",
                text: "Không xóa được vì tồn tại khách hàng.",
                type: "error",
                timer: 5000,
                showConfirmButton: true
                }, function(){
                window.location.href = "index.php?ctrl=place";
                });
                </script>';
            }
            $kv=getAllKV();
            include_once 'view/place/place.php';
    }
?>