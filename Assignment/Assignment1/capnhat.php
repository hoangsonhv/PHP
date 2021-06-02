<?php
$ten = $_POST["ten"];
$gia = $_POST["gia"];
$mota = $_POST["mota"];
$tenncc = $_POST["tenncc"];
$id = $_POST["id"];
$servername = "localhost";
$username = "root";
$password = "";
$db = "trenlop";
$conn = new mysqli($servername,$username,$password,$db);

if($conn->connect_error){
    die("Connect error...");
}
$sql_txt = "update sanpham set ten='$ten',gia = '$gia', mota='$mota',tenncc='$tenncc' where id= $id";
if($conn->query($sql_txt) === true){
    header("location: danhsach.php");
}else{
    echo "ERRORS:".$conn->error;
}