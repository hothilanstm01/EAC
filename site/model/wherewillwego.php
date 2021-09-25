<?php
    include_once('database.php');

    function getAllTopFeauture(){
        $sql="select * from diadiem order by id_dd limit 6";
        return query($sql);
    }

    function getAllPlace(){
        $sql="SELECT name_dd,rating_dd,diadiem.id_kv,diadiem.id_dd,name_kv,ngaydang,ngaydi,ngayve,img_dd,rating from ((diadiem INNER JOIN khuvuc ON diadiem.id_kv=khuvuc.id_kv) INNER JOIN noidungbocuc on diadiem.id_dd=noidungbocuc.id_dd)";
        return query($sql);
    }

    function getplacebyID_one($id_dd){
        $sql="select * from diadiem WHERE id_dd = $id_dd ";
        return queryOne($sql);
    }

    function update_DD_RT($rt,$id_dd,$sl){
        $sql = "update diadiem set rating_dd='$rt',sl ='$sl' where id_dd = '$id_dd'";
        execute($sql);
    }

    
?>