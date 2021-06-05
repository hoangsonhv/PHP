<?php
include_once  "database.php";
$ten = $_POST["ten"];
$gia = $_POST["gia"];
$mota = $_POST["mota"];
$tenncc = $_POST["tenncc"];

$sql_txt = "insert into sanpham (ten,gia,mota,tenncc) values('$ten','$gia','$mota','$tenncc')";
if (insertOrUpdateDB($sql_txt)) {
    header("Location: danhsach.php");
} else {
    echo "Error";
}