<?php include_once "database.php";?>
<?php
$tenloai = $_POST["tenloai"];
$soluong = $_POST["soluong"];
$id = $_POST["id"];

$sql_txt = "update loaisanpham set tenloai='$tenloai',soluong = '$soluong' where id= $id";
if(insertOrUpdateDB($sql_txt)){
    header("Location: dsloaisanpham.php");
}else{
    echo "Cap nhat that bai";
}