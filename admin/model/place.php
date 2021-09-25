<?php

        include_once('database.php');

        function getAllKV(){
            $sql="SELECT * from khuvuc ";
            return query($sql);
        }


        function addKV($name_kv,$img){
          $sql="INSERT INTO khuvuc( name_kv, img_kv) VALUES ('$name_kv','$img')";
          return execute($sql);
        }

        function getKVID($id){
          $sql="SELECT * FROM `khuvuc` WHERE id_kv='$id'";
          return queryOne($sql);
      }

      function updateKVhinh($id,$name,$img){
        $sql = "update khuvuc set name_kv='$name', img_kv='$img' where id_kv='$id'";
          execute($sql);
      }

        function updateKV($id,$name){
          $sql = "update khuvuc set name_kv='$name' where id_kv='$id'";
          execute($sql);
      }

      function deleteKV($id){
         $sql="delete from khuvuc where id_kv='$id'";
       return execute($sql);
    }
?>
