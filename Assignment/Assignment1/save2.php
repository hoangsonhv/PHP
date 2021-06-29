<?php
include_once  "database.php";
$tenkh = $_POST["tenkh"];
$tuoi = $_POST["tuoi"];
$gioitinh = $_POST["gioitinh"];
$sdt = $_POST["sdt"];
$diachi = $_POST["diachi"];
$diachi = $_POST[date()];

$sql_txt = "insert into khachhang (tenkh,tuoi,gioitinh,sdt,diachi) values('$tenkh','$tuoi','$gioitinh','$sdt','$diachi')";

if (insertOrUpdateDB($sql_txt)) {
    header("Location: danhsach.php");
} else {
    echo "Error";
}