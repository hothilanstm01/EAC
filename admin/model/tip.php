<?php

        include_once('database.php');

        function getAllTip(){
            $sql="SELECT * from tip_note";
            return query($sql);
        }

        function getAllTipByIdAdmin($id){
            $sql="select * from noidungtipnote where id_tip=$id";
            return query($sql);
        }


        function addTip($name_tip,$img){
            $sql="INSERT INTO tip_note( name_tip,img_tip,trangthai) VALUES ('$name_tip','$img','0')";
            return execute($sql);
        }


        function getTipID($id){
            $sql="SELECT * FROM `tip_note` WHERE id_tip='$id'";
            return queryOne($sql);
        }
        /* phan them noi dung tip */
        function getTipNoidungById($id){
          $sql="SELECT * FROM tip_note WHERE id_tip='$id'";
          return queryOne($sql);
      }




/* ,name_nd2,name_nd3,name_nd4,noidung1,noidung2,noidung3,noidung4,noidung5,noidung6,noidung7,noidung8 */
/* ,'$name2','$name3','$name4','$nd1','$nd2','$nd3','$nd4','$nd5','$nd6','$nd7','$nd8' */
          function addContentTip($id,$name1){
            $sql="insert into noidungtipnote(name_nd1,id_tip)
            values('$name1','$id')";
            execute($sql);
          }
        /* phan update noi dung tip */
        function updateNoiDungTip($id,$name_nd1,$name_nd2,$name_nd3,$name_nd4,$noidung1,$noidung3,$noidung5,$noidung7,$tip2,$tip4,$tip6,$tip8){
          $sql = "update noidungtipnote set name_nd1='$name_nd1',name_nd2='$name_nd2',name_nd3='$name_nd3',name_nd4='$name_nd4',
          noidung1='$noidung1',noidung2='$tip2',noidung3='$noidung3',noidung4='$tip4',noidung5='$noidung5',noidung6='$tip6',noidung7='$noidung7',noidung8='$tip8'
          where id_nd='$id'";
          execute($sql);
      }


        function updateTiphinh($id,$name,$img){
            $sql = "update tip_note set name_tip='$name', img_tip='$img' where id_tip='$id'";
              execute($sql);
          }


    
            function updateTip($id,$name){
              $sql = "update tip_note set name_tip='$name' where id_tip='$id'";
              execute($sql);
          }

          function updateTipTrangThai($id){
            $sql = "update tip_note set trangthai=1 where id_tip='$id'";
            execute($sql);
        }

          function getTipContentById($id){
            $sql="SELECT * FROM `noidungtipnote` WHERE id_nd='$id'";
            return queryOne($sql);
          }
    
          function deleteTip($id){
             $sql="delete from tip_note where id_tip='$id'";
           return execute($sql);
        }
?>
