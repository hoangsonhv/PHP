<?php
$tenloai = $_POST["tenloai"];
$soluong = $_POST["soluong"];

$servername = "localhost";
$username = "root";
$password = "";
$db = "trenlop";

$conn = new mysqli($servername,$username,$password,$db);

if ($conn->connect_errno){
    die("Connect error..");
}
$sql_txt = "insert into loaisanpham (tenloai,soluong) value ('$tenloai','$soluong')";
if ($conn->query($sql_txt)==true){
    header("location: dsloaisanpham.php");
}
echo "Error";