<?php
    function addToOrder($fname,$email,$phone,$diadiem,$ngaydat)
    {
    $query="insert into booktour(hoten,email,sdt,id_dd,ngaydat)
    values('$fname','$email','$phone','$diadiem','$ngaydat')";
    $lastId = executeReturnID($query);
    return $lastId;//tra ve ma don hang moi vua them
    }

    function addToOrderlogin($fname,$email,$phone,$diadiem,$ngaydat,$id_kh)
    {
    $query="insert into booktour(hoten,email,sdt,id_dd,ngaydat,id_kh_login)
    values('$fname','$email','$phone','$diadiem','$ngaydat',$id_kh)";
    $lastId = executeReturnID($query);
    return $lastId;//tra ve ma don hang moi vua them
    }


    function postInforKhById($id){
        $sql="select * khachhang where id_kh =$id";
        return query($sql);
    }

    
?>

