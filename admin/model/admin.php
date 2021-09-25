<?php

include_once('database.php');

    function deleteAdmin($id){
        $sql="delete from admin where id_ad='$id'";
        return execute($sql);
    }

    function getAdmin(){
        $sql="SELECT * FROM `admin`";
        return query($sql);
      }
?>
