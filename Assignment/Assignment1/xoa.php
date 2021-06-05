<?php
include_once "database.php" ;
$id = $_GET['id'];

$sql_txt = "delete from sanpham where id = $id";
if(insertOrUpdateDB($sql_txt)){
    header("location: danhsach.php");
}else{
    echo "Error";
}