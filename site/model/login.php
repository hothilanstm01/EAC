<?php
            include_once('database.php');

            function getkh($kh_login){
                $sql="SELECT * FROM khachhang WHERE email_kh = '$kh_login'";
                return query($sql);
            }

            function getkh_id($kh_login){
                $sql="SELECT * FROM khachhang WHERE email_kh = '$kh_login'";
                return queryOne($sql);
            }

            function getkh_dangky($name,$email,$sdt,$pass){
                $sql="INSERT INTO `khachhang` (`name_kh`, `email_kh`, `sdt_kh`, `pass`) VALUES ('$name', '$email', '$sdt', '$pass')";
                return execute($sql);
            }

            function getTourById_KH($id_kh){
                $sql="SELECT * FROM diadiem INNER JOIN booktour ON diadiem.id_dd = booktour.id_dd WHERE booktour.id_kh_login='$id_kh '";
                return query($sql);
            }

            function getCTTourById_DD($id_dd){
                $sql="SELECT * FROM diadiem INNER JOIN booktour ON diadiem.id_dd = booktour.id_dd WHERE diadiem.id_dd='$id_dd'";
                return query($sql);
            }
            function deleteLT($id){
                $sql="DELETE FROM `booktour` WHERE `booktour`.`id_kh` = '$id'";
              return execute($sql);
           }

           function getRT_BY_KH($id_kh){
            $sql="SELECT * FROM rating INNER JOIN diadiem on rating.id_dd = diadiem.id_dd WHERE id_kh_dg='$id_kh'";
            return query($sql);
        }

            


            
?>


