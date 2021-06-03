<?php
$tenloai = $_POST["tenloai"];
$soluong = $_POST["soluong"];

$id = $_POST["id"];
$servername = "localhost";
$username = "root";
$password = "";
$db = "trenlop";
$conn = new mysqli($servername,$username,$password,$db);

if($conn->connect_error){
    die("Connect error...");
}
$sql_txt = "update loaisanpham set tenloai='$tenloai',soluong = '$soluong' where id= $id";
if($conn->query($sql_txt) === true){
    header("location: dsloaisanpham.php");
}else{
    echo "ERRORS:".$conn->error;
}