<?php
            include_once('database.php');

            function getad($mail){
                $sql="SELECT * FROM admin WHERE email = '$mail'";
                return query($sql);
            }

            function getadmin_dangky($name,$email,$sdt,$pass){
                $sql="INSERT INTO `admin` (`name_ad`, `email`, `sdt`, `pass`) VALUES ('$name', '$email', '$sdt', '$pass')";
                return execute($sql);
            }
    
?>