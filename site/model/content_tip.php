<?php
    include_once('database.php');

    function getTipNote1(){
        $sql="select * from tip_note where id_tip=1";
        return query($sql);
    }

    function getTipNote2(){
        $sql="select * from tip_note where id_tip=2";
        return query($sql);
    }

    function getTipNote3(){
        $sql="select * from tip_note where id_tip=3";
        return query($sql);
    }

    function getTipNote4(){
        $sql="select * from tip_note where id_tip=4";
        return query($sql);
    }

    function getTipNote5(){
        $sql="select * from tip_note where id_tip=5";
        return query($sql);
    }

    function getAllTipById($id){
        $sql="select * from noidungtipnote where id_nd=$id";
        return query($sql);
    }


    function getFeautureTip(){
        $sql="select * from tip_note order by id_tip limit 5";
        return query($sql);
    }

    function getAllTip(){
        $sql="select * from tip_note order by id_tip";
        return query($sql);
    }

 
?>