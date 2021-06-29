<?php
include_once "databases.php";
class Controller{

    public function home(){
        include "views/home.php";
    }

    public function aboutUs(){
        include "views/aboutus.php";
    }

    public function listSV(){
        $sql_txt = "select * from sinhvien";
        $dssinhvien = queryDB($sql_txt);
        include "views/listsv.php";
    }

    public function themSV(){
        include "views/themsv.php";
    }

    public function luuSV(){
        $name = $_POST["name"];
        $age = $_POST["age"];
        $address = $_POST["address"];

        $sql_txt = "insert into sinhvien (name,age,address) values('$name',$age,'$address')";
        if(insertOrUpdateDB($sql_txt)){
            header("Location: ?route=listsv");
        }else{
            echo "Error";
        }
    }
}