<?php
   
   function getConnection(){
        //khai bao server
        $host='localhost';
        $dbname='eac2';
        $userName='root';
        $passWord='';
/*         $options= array(PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES uf8",
        POD::ATT_ERRMODE => PDO::ERRMODE_EXCEPTION); */
            //tao doi tuong thuoc lop PDO
            $DBH = new PDO('mysql:host='.$host.';dbname='.$dbname,$userName,$passWord);
            return $DBH;
    }
    function query($sql){
        $connect = getConnection();
        $result = $connect -> query($sql);
        return  $result;
    }
    function queryOne($sql){
        $connect =  getConnection();
        $result = $connect->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    
    function execute($sql){
        $connect = getConnection();
        $result = $connect-> exec($sql);
        return $result;
    }
?>