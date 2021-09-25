<?php

        include_once('database.php');

        function getAlldd(){
            $sql="SELECT * FROM diadiem JOIN khuvuc on diadiem.id_kv = khuvuc.id_kv";
            return query($sql);
        }

        /* lay noi dung */
        function getTourById($id){
          $sql="SELECT * FROM noidungbocuc inner JOIN diadiem on diadiem.id_dd = noidungbocuc.id_dd where noidungbocuc.id_dd='$id'";
          return query($sql);
      }

      function getTrangThaiDD($id){
        $sql="SELECT * FROM `diadiem` WHERE id_dd='$id'";
        return queryOne($sql);
      }

      /* them noi dung tour*/
      function addContentTour($id,$noidung1,$noidung2,$noidung3,$img1,$img2,$imgright1,$imgright2,$imgfood1,$imgfood2,$imgfood3,$loaifood1,$tenfood1,$noidungfood1,$loaifood2,$tenfood2,$noidungfood2,$loaifood3,$tenfood3,$noidungfood3, $date){
        $sql="INSERT INTO `noidungbocuc` (`noidung`, `noidung2`, `noidung3`, `img_noidung1`, `img_noidung2`, `img_right1`, `img_right2`, `img_food1`, `img_food2`, `img_food3`,`loaifood1`, `tenfood1`, `noidungfood1`, `loaifood2`, `tenfood2`, `noidungfood2`, `loaifood3`, `tenfood3`, `noidungfood3`, `ngaydang`, `id_dd`) 
        VALUES ('$noidung1', '$noidung2', '$noidung3', '$img1', '$img2', '$imgfood1', '$imgfood2', '$imgfood3','$loaifood1','$tenfood1','$noidungfood1','$loaifood2','$tenfood2','$noidungfood2','$loaifood3','$tenfood3','$noidungfood3', '$imgright1', '$imgright2', ' $date', '$id');";
        execute($sql);
      }

      /* lay noi dung de sua */
      function getNoiDungDD($id){
        $sql="SELECT * FROM `noidungbocuc` WHERE id_dd='$id'";
        return queryOne($sql);
      }

      /* sql sua noi dung */
      function updateNoiDungTour($id,$noidung1,$noidung2,$noidung3,$imgright1,$imgright2,$img1,$img2,$imgfood1,$imgfood2,$imgfood3,$loaifood1,$tenfood1,$noidungfood1,$loaifood2,$tenfood2,$noidungfood2,$loaifood3,$tenfood3,$noidungfood3){
        $sql = "update noidungbocuc set noidung='$noidung1',img_noidung1='$img1',img_noidung2='$img2',noidung2='$noidung2',noidung3='$noidung3',
        img_right1='$imgright1',img_right2='$imgright2',img_food1='$imgfood1',img_food2='$imgfood2',img_food3='$imgfood3',
        loaifood1='$loaifood1',tenfood1='$tenfood1',noidungfood1='$noidungfood1',
        loaifood2='$loaifood2',tenfood2='$tenfood2',noidungfood2='$noidungfood2',
        loaifood3='$loaifood3',tenfood3='$tenfood3',noidungfood3='$noidungfood3'
        where id_dd='$id'";
        execute($sql);
    }
    /* sua noi dung ko co hinh */
    /* function updateNDTour($id,$noidung1,$noidung2,$noidung3,$loaifood1,$tenfood1,$noidungfood1,$loaifood2,$tenfood2,$noidungfood2,$loaifood3,$tenfood3,$noidungfood3){
      $sql = "update noidungbocuc set noidung='$noidung1',noidung2='$noidung2',noidung3='$noidung3',
      loaifood1='$loaifood1',tenfood1='$tenfood1',noidungfood1='$noidungfood1',
      loaifood2='$loaifood2',tenfood2='$tenfood2',noidungfood2='$noidungfood2',
      loaifood3='$loaifood3',tenfood3='$tenfood3',noidungfood3='$noidungfood3'
      where id_dd='$id'";
      execute($sql);
    } */
      /* update trang thai */
      function updateDiaDiemTrangThai($id){
        $sql = "update diadiem set trangthai=1 where id_dd='$id'";
        execute($sql);
    }

    /*  */


        function addTour($name,$id_kv,$img){
          $sql="INSERT INTO  diadiem ( name_dd,id_kv ,img_dd,trangthai) VALUES ('$name','$id_kv','$img',0)";
          return execute($sql);
        }

        function getddID($id){
          $sql="SELECT * FROM `diadiem` WHERE id_dd='$id'";
          return queryOne($sql);
      }

      function  updateTourhinh($id,$name,$img,$id_kv,$datedi,$dateve,$gia){
        $sql = "update diadiem set name_dd='$name', img_dd='$img',id_kv='$id_kv',ngaydi='$datedi',ngayve='$dateve',gia='$gia' where id_dd='$id'";
          execute($sql);
      }

        function updateTour($id,$name,$id_kv,$datedi,$dateve,$gia){
          $sql = "update diadiem set name_dd='$name' ,id_kv='$id_kv',ngaydi='$datedi',ngayve='$dateve',gia='$gia' where id_dd='$id'";
          execute($sql);
      }

      function deleteTour($id){
         $sql="delete from diadiem where id_dd='$id'";
       return execute($sql);
    }

    function getNoiDungByID_DD($id){
      $sql="SELECT * FROM diadiem JOIN khuvuc on diadiem.id_kv = khuvuc.id_kv";
      return query($sql);
  }
?>
