<?php
    include_once('database.php');

    function addRT($id_dd,$id_kh,$rtm){
        $sql="INSERT INTO  rating ( id_dd,id_kh_dg,rate) VALUES ('$id_dd','$id_kh','$rtm')";
        return execute($sql);
      }

      function getKH_DG($id_kh,$id){
        $sql="SELECT count(*) as 'tong' FROM `rating` WHERE id_kh_dg = $id_kh and id_dd = $id";
        return query($sql);
    }

    function getCM_By_ID_DD($id){
      $sql="SELECT * FROM comment inner JOIN khachhang on comment.id_kh = khachhang.id_kh WHERE comment.id_dd=$id ORDER BY id_cm DESC";
      return query($sql);
  }

  function addCM($id_kh,$id,$ngay_cm,$noidung_cm){
    $sql="INSERT INTO comment(id_kh, id_dd, ngay_cm, noidung_cm) VALUES('$id_kh','$id','$ngay_cm','$noidung_cm')";
    return execute($sql);
  }

  


?>