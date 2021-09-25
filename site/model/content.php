<?php
    include_once('database.php');

    function getAllTopFeautureById($id){
        $sql="SELECT * FROM noidungbocuc INNER JOIN diadiem on diadiem.id_dd=noidungbocuc.id_dd WHERE diadiem.id_dd='$id'";
        return query($sql);
    }

    function getInforBookById($id){
        $sql="select * from diadiem inner join chitiettour on diadiem.id_dd=chitiettour.id_dd where diadiem.id_dd='$id'";
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

      function getviewDDByID($id){
        $sql="SELECT * FROM diadiem WHERE id_dd = $id";
        return queryOne($sql);
    }

      function  updateluotxemviewDD($view,$id   ){
        $sql = "UPDATE diadiem SET view = $view WHERE id_dd = $id ";
          execute($sql);
      }


?>