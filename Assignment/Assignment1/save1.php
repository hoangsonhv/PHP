<?php
include_once  "database.php";
$tenloai = $_POST["tenloai"];
$soluong = $_POST["soluong"];

$sql_txt = "insert into loaisanpham (tenloai,soluong) values('$tenloai',$soluong)";
if (insertOrUpdateDB($sql_txt)) {
    header("Location: dsloaisanpham.php");
} else {
    echo "Error";
};