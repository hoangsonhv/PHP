<?php include_once "database.php";?>
<?php
$ten = $_POST["ten"];
$gia = $_POST["gia"];
$mota = $_POST["mota"];
$tenncc = $_POST["tenncc"];
$id = $_POST["id"];

$sql_txt = "update sanpham set ten='$ten',gia = '$gia', mota='$mota',tenncc='$tenncc' where id= $id";
if(insertOrUpdateDB($sql_txt)){
    header("Location: danhsach.php");
}else{
    echo "Cap nhat that bai";
}