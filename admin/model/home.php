<?php

        include_once('database.php');

        function getCountTour(){
            $sql="SELECT count(*) from diadiem ";
            return query($sql);
        }

        function getCountKH(){
            $sql="SELECT count(*) as tongKH from booktour ";
            return query($sql);
        }

        function getTongTien(){
          $sql="SELECT diadiem.id_dd,diadiem.gia*COUNT(*) AS tong FROM `booktour` JOIN diadiem ON booktour.id_dd = diadiem.id_dd GROUP BY diadiem.id_dd ";
          return query($sql);
        }

        function getRankTour(){
          $sql="SELECT *,COUNT(*) AS tongkh FROM `booktour` JOIN diadiem ON booktour.id_dd = diadiem.id_dd GROUP BY diadiem.id_dd ORDER BY `tongkh` desc";
          return query($sql);
        }

        function getRankKH(){
          $sql="SELECT *,COUNT(*) AS tongCD FROM khachhang JOIN booktour ON khachhang.id_kh = booktour.id_kh_login GROUP BY khachhang.id_kh";
          return query($sql);
        }

        function getAllTopFeautureById($id){
          $sql="SELECT * FROM noidungbocuc INNER JOIN diadiem on diadiem.id_dd=noidungbocuc.id_dd WHERE diadiem.id_dd='$id'";
          return query($sql);
      } 

      function getluotxem(){
        $sql="SELECT * FROM `luotxem`";
        return queryOne($sql);
    }

      function  updateluotxem($view){
        $sql = "UPDATE luotxem SET view ='$view'";
          execute($sql);
      }





?>
